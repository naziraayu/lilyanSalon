<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index() {
        $totalTreatments = Menu::count();
        $totalUsers = User::count();

        $todayDate = Carbon::now()->format('Y-m-d');
        $thisMonth = Carbon::now()->format('m');

        // $totalBooking = Booking::count();
        // $todayBooking = Booking::whereDate('created_at', $todayDate)->count();
        // $thisMonthBooking = Booking::whereMonth('created_at', $thisMonth)->count();

        return view('dashboard', compact('totalTreatments','totalUsers',));
    }
}
