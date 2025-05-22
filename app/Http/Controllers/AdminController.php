<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Tenant;
use Illuminate\Support\Facades\Auth;

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
        return view('admin-dashboard', [
            'adminTitle' => 'Dashboard'
        ]);
    }

    /**
     * Show the add tenant page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function addTenant()
    {
        return view('admin-addTenant', [
            'adminTitle' => 'Add Tenants'
        ]);
        //test
    }

    /**
     * Show the archive page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function archive()
    {
        return view('admin-archive', [
            'adminTitle' => 'Archive'
        ]);
    }

    /**
     * Show the maintenance requests page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function maintenanceRequests()
    {
        return view('admin-maintainReq', [
            'adminTitle' => 'Maintenance Requests'
        ]);
    }

    /**
     * Show the manage dormitory page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function manageDorm()
    {
        return view('admin-manageDorm', [
            'adminTitle' => 'Manage Dormitory'
        ]);
    }

    /**
     * Show the payment history page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function paymentHistory()
    {
        return view('admin-paymentHistory', [
            'adminTitle' => 'Payment History'
        ]);
    }
}
