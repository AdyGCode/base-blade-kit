<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function dashboard(): View
    {
        $user = auth()->user();

        return view('static.dashboard')
            ->with('user', $user);
    }
}
