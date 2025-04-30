<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function adminDashboard()
    {
        $data = [
            'title' => 'Admin Dashboard',
            'user' => session()->get('username'),
            'role' => session()->get('role')
        ];
        return view('dashboard/admin', $data);
    }

    public function userDashboard()
    {
        $data = [
            'title' => 'User Dashboard',
            'user' => session()->get('username'),
            'role' => session()->get('role')
        ];
        return view('dashboard/user', $data);
    }
}

