<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function homepage()
    {
        return view('tenant-homepage', [
            'adminTitle' => 'Home'
        ]);
    }

    /**
     * Show the dorm rules page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dormRules()
    {
        return view('tenant-dormRules', [
            'adminTitle' => 'Dorm Rules'
        ]);
    }

    /**
     * Show the maintenance request page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function maintenanceRequest()
    {
        return view('tenant-request', [
            'adminTitle' => 'Maintenance Request'
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
            'issue_type' => 'required|string',
            'description' => 'required|string',
            'priority' => 'required|string',
        ]);

        // Logic to save the maintenance request
        // Will be implemented when we create the MaintenanceRequest model

        return redirect()->route('tenant.request')->with('success', 'Maintenance request submitted successfully.');
    }
}
