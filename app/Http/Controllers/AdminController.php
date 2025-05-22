<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Tenant;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        // Get total number of tenants
        $totalTenants = Tenant::count();

        // Get total balance (sum of due amounts)
        $totalBalance = Tenant::sum('due_amount');

        // Get rooms information
        $totalRooms = Room::count();
        $availableRooms = Room::where('is_available', true)->count();

        // Get pending maintenance requests (assuming there's a MaintenanceRequest model)
        // For now, we'll use a placeholder value
        $pendingRequests = 35;

        // Get tenant information for the table
        $tenants = Tenant::all();

        return view('admin-dashboard', [
            'adminTitle' => 'Dashboard',
            'totalTenants' => $totalTenants,
            'totalBalance' => $totalBalance,
            'availableRooms' => $availableRooms,
            'pendingRequests' => $pendingRequests,
            'tenants' => $tenants
        ]);
    }

    /**
     * Show the add tenant page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function addTenant()
    {
        // Get all tenants
        $tenants = Tenant::all();

        return view('admin-addTenant', [
            'adminTitle' => 'Add Tenants',
            'tenants' => $tenants,
            'showTenants' => true
        ]);
    }

    /**
     * Show the archive page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function archive()
    {
        // Get archived tenants
        $archivedTenants = Tenant::where('status', 'Archived')->get();

        return view('admin-archive', [
            'adminTitle' => 'Archive',
            'tenants' => $archivedTenants,
            'showTenants' => !$archivedTenants->isEmpty()
        ]);
    }

    /**
     * Archive a tenant.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function archiveTenant($id)
    {
        $tenant = Tenant::findOrFail($id);
        $tenant->status = 'Archived';
        $tenant->save();

        return redirect()->route('admin.add-tenant')
            ->with('success', 'Tenant archived successfully!');
    }

    /**
     * Extend a tenant's end date.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function extendTenant(Request $request, $id)
    {
        // Validate the request
        $validated = $request->validate([
            'new_end_date' => 'required|date|after:today',
        ]);

        $tenant = Tenant::findOrFail($id);
        $tenant->lease_end = $validated['new_end_date'];
        $tenant->save();

        return redirect()->route('admin.add-tenant')
            ->with('success', 'Tenant lease extended successfully!');
    }

    /**
     * Show the maintenance requests page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function maintenanceRequests()
    {
        // Get total number of tenants
        $totalTenants = Tenant::count();

        // Get total balance (sum of due amounts)
        $totalBalance = Tenant::sum('due_amount');

        // Get rooms information
        $totalRooms = Room::count();
        $availableRooms = Room::where('is_available', true)->count();

        // Get maintenance requests from the database
        $maintenanceRequests = \App\Models\MaintenanceRequest::orderBy('created_at', 'desc')->get();

        // Count pending maintenance requests
        $pendingRequests = \App\Models\MaintenanceRequest::where('status', 'Pending')->count();

        return view('admin-maintainReq', [
            'adminTitle' => 'Maintenance Requests',
            'totalTenants' => $totalTenants,
            'totalBalance' => $totalBalance,
            'availableRooms' => $availableRooms,
            'pendingRequests' => $pendingRequests,
            'maintenanceRequests' => $maintenanceRequests
        ]);
    }

    /**
     * Show the manage dormitory page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function manageDorm()
    {
        // Get dorm settings from JSON file
        $settings = $this->getDormSettings();

        return view('admin-manageDorm', [
            'adminTitle' => 'Manage Dormitory',
            'settings' => $settings
        ]);
    }

    /**
     * Update dorm settings.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateDormSettings(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'student_plan' => 'required|numeric',
            'regular_plan' => 'required|numeric',
            'vip_plan' => 'required|numeric',
            'rules' => 'required|string'
        ]);

        // Update settings
        $settings = [
            'pricing' => [
                'student_plan' => (float) $validated['student_plan'],
                'regular_plan' => (float) $validated['regular_plan'],
                'vip_plan' => (float) $validated['vip_plan']
            ],
            'rules' => $validated['rules']
        ];

        // Save settings to JSON file
        Storage::put('dorm_settings.json', json_encode($settings, JSON_PRETTY_PRINT));

        return redirect()->route('admin.manage-dorm')->with('success', 'Dorm settings updated successfully!');
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
     * Store a new tenant.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeTenant(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'tenant_name' => 'required|string|max:255',
            'tenant_contact' => 'required|string|max:255',
            'total_occupants' => 'required|integer|min:1|max:6',
            'room_number' => 'required|integer',
            'subscriptions' => 'required|string|in:Student Plan,Regular Plan,Premium Plan',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'tenant_id' => 'nullable|string|max:255',
        ]);

        // Use the tenant ID from the form if provided, otherwise generate a new one starting from 10000
        $tenantId = $request->input('tenant_id') ?: '10000' . rand(0, 9999);

        // Generate a default password (you can customize this logic)
        $defaultPassword = bcrypt('password123');

        // Create the tenant
        $tenant = Tenant::create([
            'tenant_id' => $tenantId,
            'tenant_password' => $defaultPassword,
            'tenant_name' => $validated['tenant_name'],
            'tenant_contact' => $validated['tenant_contact'],
            'total_occupants' => $validated['total_occupants'],
            'subscriptions' => $validated['subscriptions'],
            'room_number' => $validated['room_number'],
            'lease_end' => $validated['end_date'],
            'total_paid' => 0, // Default value
            'due_amount' => 0, // Default value
            'status' => 'Active', // Default status
        ]);

        return redirect()->route('admin.add-tenant')
            ->with('success', 'Tenant added successfully! Tenant ID: ' . $tenantId . ' | Password: password123')
            ->with('showTenants', true);
    }

    /**
     * Show the payment history page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function paymentHistory()
    {
        // Get total number of tenants
        $totalTenants = Tenant::count();

        // Get total balance (sum of due amounts)
        $totalBalance = Tenant::sum('due_amount');

        // Get rooms information
        $totalRooms = Room::count();
        $availableRooms = Room::where('is_available', true)->count();

        // Get pending maintenance requests (assuming there's a MaintenanceRequest model)
        // For now, we'll use a placeholder value
        $pendingRequests = 35;

        // Get tenant information for the payment history table
        $tenants = Tenant::all();

        return view('admin-paymentHistory', [
            'adminTitle' => 'Payment History',
            'totalTenants' => $totalTenants,
            'totalBalance' => $totalBalance,
            'availableRooms' => $availableRooms,
            'pendingRequests' => $pendingRequests,
            'tenants' => $tenants
        ]);
    }
}
