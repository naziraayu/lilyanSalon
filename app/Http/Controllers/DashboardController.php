<?php
namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Customer;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $bookingFilter = Request::get('booking_filter', 'today');
        $customerFilter = Request::get('customer_filter', 'this_year');
    
        switch ($bookingFilter) {
            case 'today':
                $bookingCount = Booking::whereDate('tanggal', Carbon::today())->count();
                break;
            case 'this_month':
                $bookingCount = Booking::whereMonth('tanggal', Carbon::now()->month)->count();
                break;
            case 'this_year':
                $bookingCount = Booking::whereYear('tanggal', Carbon::now()->year)->count();
                break;
            default:
                $bookingCount = Booking::count();
        }
    
        switch ($customerFilter) {
            case 'today':
                $customerCount = Customer::whereDate('created_at', Carbon::today())->count();
                break;
            case 'this_month':
                $customerCount = Customer::whereMonth('created_at', Carbon::now()->month)->count();
                break;
            case 'this_year':
                $customerCount = Customer::whereYear('created_at', Carbon::now()->year)->count();
                break;
            default:
                $customerCount = Customer::count();
        }
    
        return view('dashboard', compact('bookingCount', 'customerCount', 'bookingFilter', 'customerFilter'));
    }
    
    
}