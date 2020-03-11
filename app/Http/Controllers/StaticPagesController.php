<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Reservation;


class StaticPagesController extends Controller
{
    public function home(){
        return view('home');
    }
    public function reservations(){
        return view('pages/reservations');
    }
    public function saveReservations(){
        request()->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string'],
            'email' => ['required', 'string','email'],
            'phone_number' => ['required', 'string'],
            'guests_total' => ['required', 'string'],
            'time' => ['required']
            
        ]);
        
        $reservation = new Reservation();
        $reservation->firstname = request('firstname');
        $reservation->lastname = request('lastname');
        $reservation->email = request('email');
        $reservation->phone_number = request('phone_number');
        $reservation->guests_total = request('guests_total');
        $reservation->time = request('time');
        $reservation->save();

        return redirect('/reservations/reservation-confirmed');

    }
    public function reservationConfirmation(){
        return view('pages/reservation-confirmation');
    }
    public function about(){
        return view('pages/about');
    }
    public function contact(){
        return view('pages/contact');
    }
    public function offers(){
        return view('pages/offers');
    }
    public function registerMember(){
        request()->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string'],
            'email' => ['required', 'string','email'],
            'phone_number' => ['required', 'string']
            
        ]);
        
        $member = new Member();
        $member->firstname = request('firstname');
        $member->lastname = request('lastname');
        $member->email = request('email');
        $member->phone_number = request('phone_number');
        $member->save();

        return redirect('/offers/thank-you');

    }
    public function offersThanks(){
        return view('pages/thanks');
    }
    public function menu(){
        return view('menu/index');
    }
    public function singleMenu(){
        return view('menu/single-menu');
    }
   
    
}
