<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class TenantController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:tenant');
    }

    /**
     * Show the tenant homepage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function homepage(Request $request)
    {
        $tenant = Auth::guard('tenant')->user();

        // Get date range filter
        $dateFilter = $request->input('date_filter', 'last_30_days');
        $searchDate = $request->input('search_date');

        // Query payments
        $query = Payment::where('tenant_id', $tenant->id);

        // Apply date filter
        if ($searchDate) {
            // If search date is provided, filter by that specific date
            $query->whereDate('payment_date', $searchDate);
        } else {
            // Otherwise apply the selected date range filter
            switch ($dateFilter) {
                case 'last_day':
                    $query->whereDate('payment_date', '>=', Carbon::now()->subDay());
                    break;
                case 'last_7_days':
                    $query->whereDate('payment_date', '>=', Carbon::now()->subDays(7));
                    break;
                case 'last_30_days':
                    $query->whereDate('payment_date', '>=', Carbon::now()->subDays(30));
                    break;
                case 'last_month':
                    $query->whereMonth('payment_date', Carbon::now()->subMonth()->month)
                          ->whereYear('payment_date', Carbon::now()->subMonth()->year);
                    break;
                case 'last_year':
                    $query->whereYear('payment_date', Carbon::now()->subYear()->year);
                    break;
                case 'custom_range':
                    $startDate = $request->input('start_date');
                    $endDate = $request->input('end_date');
                    if ($startDate && $endDate) {
                        $query->whereDate('payment_date', '>=', $startDate)
                              ->whereDate('payment_date', '<=', $endDate);
                    }
                    break;
            }
        }

        // Get payments
        $payments = $query->orderBy('payment_date', 'desc')->get();

        // Get stats for cards
        $pendingRequests = 'Pending'; // This would come from a maintenance requests table

        // Get next rent due date (assuming it's the first of next month)
        $nextRentDue = Carbon::now()->addMonth()->startOfMonth()->format('M j, Y');

        // Count recent notifications (placeholder for now)
        $recentNotifications = 3; // This would come from a notifications table

        // Calculate total paid from all payments
        $totalPaid = $tenant->total_paid ?? 0;

        return view('tenant-homepage', [
            'adminTitle' => 'Home',
            'payments' => $payments,
            'dateFilter' => $dateFilter,
            'searchDate' => $searchDate,
            'pendingRequests' => $pendingRequests,
            'nextRentDue' => $nextRentDue,
            'recentNotifications' => $recentNotifications,
            'totalPaid' => $totalPaid
        ]);
    }

    /**
     * Show the dorm rules page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dormRules()
    {
        // Get dorm settings from JSON file
        $settings = $this->getDormSettings();

        return view('tenant-dormRules', [
            'adminTitle' => 'Dorm Rules',
            'rules' => $settings['rules']
        ]);
    }

    /**
     * Get dorm settings from JSON file.
     *
     * @return array
     */
    private function getDormSettings()
    {
        if (Storage::exists('dorm_settings.json')) {
            return json_decode(Storage::get('dorm_settings.json'), true);
        }

        // Default settings if file doesn't exist
        return [
            'pricing' => [
                'student_plan' => 200,
                'regular_plan' => 350,
                'vip_plan' => 200
            ],
            'rules' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident placeat, consequatur eveniet veritatis quos dignissimos beatae dolores exercitationem laboriosam officia magnam atque blanditiis illum doloremque magni ex corrupti tempora quis.'
        ];
    }

    /**
     * Show the maintenance request page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function maintenanceRequest()
    {
        $tenant = Auth::guard('tenant')->user();

        // Get the latest maintenance request for the tenant
        $maintenanceRequest = \App\Models\MaintenanceRequest::where('tenant_id', $tenant->id)
            ->orderBy('created_at', 'desc')
            ->first();

        // Check if tenant has a pending or in-progress maintenance request
        $hasPendingRequest = $maintenanceRequest && ($maintenanceRequest->status == 'Pending' || $maintenanceRequest->status == 'In Progress');

        return view('tenant-request', [
            'adminTitle' => 'Maintenance Request',
            'hasPendingRequest' => $hasPendingRequest,
            'maintenanceRequest' => $maintenanceRequest
        ]);
    }

    /**
     * Submit a maintenance request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitRequest(Request $request)
    {
        $request->validate([
            'room_number' => 'required|string',
            'issue_type' => 'required|string',
            'description' => 'required|string',
            'priority' => 'required|string',
            'contact' => 'required|string',
        ]);

        $tenant = Auth::guard('tenant')->user();

        // Check if tenant already has a pending or in-progress request
        $hasPendingRequest = \App\Models\MaintenanceRequest::where('tenant_id', $tenant->id)
            ->whereIn('status', ['Pending', 'In Progress'])
            ->exists();

        if ($hasPendingRequest) {
            return redirect()->route('tenant.request')
                ->with('error', 'You already have a pending or in-progress maintenance request. Please wait for it to be completed.');
        }

        // Create the maintenance request
        $maintenanceRequest = new \App\Models\MaintenanceRequest([
            'tenant_id' => $tenant->id,
            'room_number' => $request->room_number,
            'issue_type' => $request->issue_type,
            'description' => $request->description,
            'priority' => $request->priority,
            'status' => 'Pending',
            'tenant_name' => $tenant->tenant_name,
            'tenant_contact' => $request->contact,
            'date' => now()->format('Y-m-d'),
        ]);

        $maintenanceRequest->save();

        return redirect()->route('tenant.request')->with('success', 'Maintenance request submitted successfully.');
    }

    /**
     * Change tenant password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $tenant = Auth::guard('tenant')->user();

        // Check if current password matches
        if (!password_verify($request->current_password, $tenant->tenant_password)) {
            return back()->with('error', 'Current password is incorrect.');
        }

        // Update password
        $tenant->tenant_password = bcrypt($request->new_password);
        $tenant->save();

        return back()->with('success', 'Password changed successfully.');
    }
}
