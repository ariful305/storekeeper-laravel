<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Order;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    private function getSalesForDate($date)
    {
        return Order::whereDate('created_at', $date)->sum('total_amount');
    }

    private function getSalesForMonth($date)
    {
        return Order::whereYear('created_at', $date->year)
            ->whereMonth('created_at', $date->month)
            ->sum('total_amount');
    }
    public function index()
    {
        $today = $this->getSalesForDate(Carbon::today());
        $yesterday = $this->getSalesForDate(Carbon::yesterday());
        $this_month = $this->getSalesForMonth(Carbon::now());
        $last_month = $this->getSalesForMonth(Carbon::now()->subMonth());
        return view('dashboard.index', compact(['today','yesterday','this_month','last_month']));
    }
    public function history()
    {
        $order = Order::orderBy('created_at', 'desc')->get();       
        return view('dashboard.order_history', compact('order'));
    }
    
    


}
