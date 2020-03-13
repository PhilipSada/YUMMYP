<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Member;
use App\Reservation;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard(){

        $estimated_income_last_30 = DB::select(DB::raw('SELECT sum((guests_total) * 27) as total 
        FROM restaurant.reservations WHERE created_at BETWEEN curdate() - interval 30 DAY AND curdate()'));

        $total_customers_last_30 = DB::select(DB::raw('SELECT sum(guests_total) as total 
        FROM restaurant.reservations WHERE created_at BETWEEN curdate() - interval 30 DAY AND curdate()'));

        $total_reservations_last_30 = DB::select(DB::raw('SELECT count(*) as total
        FROM restaurant.reservations WHERE created_at BETWEEN curdate() - interval 30 DAY AND curdate()'));

        $total_employees_last_30 = DB::select(DB::raw('SELECT count(*) as total FROM users 
        INNER JOIN role_user on role_user.user_id = users.id
        INNER JOIN roles on roles.id = role_user.role_id
        where role_id = 2'));

    
        $latestReservations =Reservation::where('guests_total','>', 0)->limit(5)->orderBy('created_at','desc')->get();


        return view('admin/dashboard', [
            "estimated_income_last_30" => "$".$estimated_income_last_30[0]->total,
            "total_reservations_last_30" => $total_reservations_last_30[0]->total,
            "total_customers_last_30" =>  $total_customers_last_30[0]->total,
            "total_employees_last_30"=>$total_employees_last_30[0]->total,
            "latestReservations"=>$latestReservations
        ]);
    }
    public function dailyRevenueLast30(){

    //    return $estimated_income_daily_data = DB::select(DB::raw('SELECT DATE_FORMAT(created_at, "%Y-%m-%d") as reserved_day,
    //     (sum(guests_total) * 27) as estimated_earnings, sum(guests_total),count(*) as total_reservations
    //     FROM reservations GROUP BY reserved_day DESC'));

       return $estimated_income_daily_data = DB::select(DB::raw('SELECT DATE_FORMAT(created_at, "%Y-%m-%d") as x,
        (sum(guests_total) * 27) as y
        FROM reservations GROUP BY x DESC'));


    }
    
    public function register(){
        return view('admin/register');
    }
    public function login(){
        return view('admin/login');
    }
}
    