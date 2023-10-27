<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Respondent;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index()
    {
        $totalRespondent = Respondent::count();

        $data = [
            'active' => 'dashboard',
            'totalRespondent' => $totalRespondent,
        ];

        return view('admin.dashboard.index', $data);
    }
}
