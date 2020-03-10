<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reservation;

class ReservationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $reservations =Reservation::paginate(10);
        return view('admin/reservations/all', [
            'reservations'=>$reservations
        ]);
    }
    public function create(){

        return view('admin/reservations/create');
    }
    public function store(){
        request()->validate([
            'firstname' => ['required', 'string'],
            'lastname' => ['required', 'string'],
            'email' => ['required', 'string','email'],
            'phone_number' => ['required', 'string'],
            'time' => ['required'],
            'guests_total' => ['required'],
            
        ]);
        
        $reservation = new Reservation();
        $reservation->firstname = request('firstname');
        $reservation->lastname = request('lastname');
        $reservation->email = request('email');
        $reservation->phone_number = request('phone_number');
        $reservation->time = request('time');
        $reservation->guests_total = request('guests_total');
        $reservation->save();

        return redirect('/admin/reservations');
    }
    public function edit($id){
        $reservation =Reservation::find($id);

        return view('admin/food-categories/edit', [
            'reservation'=>$reservation,
        ]);
    }
    public function update($id){
        request()->validate([
            'firstname' => ['required', 'string'],
            'lastname' => ['required', 'string'],
            'email' => ['required', 'string','email'],
            'phone_number' => ['required', 'string'],
            'time' => ['required'],
            'guests_total' => ['required'],
            
        ]);
       
        $reservation = new Reservation();
        $reservation->firstname = request('firstname');
        $reservation->lastname = request('lastname');
        $reservation->email = request('email');
        $reservation->phone_number = request('phone_number');
        $reservation->time = request('time');
        $reservation->guests_total = request('guests_total');
        $reservation->save();

    

        return redirect('/admin/reservations');
    }
    public function delete($id){
        $reservation =Reservation::find($id);
        $reservation->delete();

        return redirect('/admin/reservations');
    }
}
