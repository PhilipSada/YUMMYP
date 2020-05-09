<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use App\Member;
use App\Reservation;
use App\GeneralSetting;
use App\SeoSetting;
use App\SocialAccountsSetting;
use App\FoodCategory;
use App\FoodItem;
use App\Mail\ReservationMail;

class PagesController extends Controller
{
    public function home(){
        $foodItems = FoodItem::inRandomOrder()->limit(6)->get();
        
        return view('home', [
            'foodItems'=>$foodItems
        ]);
    }
    public function reservations(){
        return view('pages/reservations');
    }
    public function saveReservations(Request $request){
        request()->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string'],
            'email' => ['required', 'string','email'],
            'phonenumber' => ['required', 'string'],
            'gueststotal' => ['required', 'string'],
            'time' => ['required']
            
        ]);
        
        $content = [
            'firstname'=>request('firstname'),
            'lastname'=>request('lastname'),
            'email'=>request('email'),
            'phonenumber'=>request('phonenumber'),
            'gueststotal'=>request('gueststotal'),
            'time'=>request('time')
        ];
        Mail::to($request->email)->send(new ReservationMail($content));

        $reservation = new Reservation();
        $reservation->firstname = request('firstname');
        $reservation->lastname = request('lastname');
        $reservation->email = request('email');
        $reservation->phone_number = request('phonenumber');
        $reservation->guests_total = request('gueststotal');
        $reservation->time = request('time');
        $reservation->save();


        return redirect('/reservations/reservation-confirmed');

    }
    public function reservationConfirmation(){
        return view('pages/reservation-confirmation');
    }
    public function viewReservationMail(){
        return view('mail/reservation');
    }
    public function about(){
        return view('pages/about');
    }
    public function contact(){
        return view('pages/contact');
    }
    public function viewMail(){
        return view('mail/contact-mail');
    }
    public function sendMail(Request $request){

        request()->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phonenumber'=>['required'],
            'message'=>['required']
            
        ]);

        $content = [
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
            'phonenumber'=>$request->phonenumber,
            'message'=>$request->message,
        ];

        $recipients =[
            'sadaphillip@gmail.com',
            'sada_phillip@yahoo.com'

        ];
     
        Mail::to($recipients)->send(new Contact($content));

        $request->session()->put('enquiry', 'enquiry-sent');

        return redirect('/enquiry-received');
    }
    public function mailReceived(){
        return view('mail/mail-confirmation');
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
        $beefItems = FoodItem::where('category_id', 1)->get();
        $chickenItems = FoodItem::where('category_id', 2)->get();
        $kingSnackItems = FoodItem::where('category_id', 3)->get();
        
        return view('menu/all-categories', [
            'beefItems'=>  $beefItems,
            'chickenItems'=>$chickenItems,
            'kingSnackItems'=>$kingSnackItems
        ]);
    }
    public function singleMenu($slug){
       
        $foodItem = FoodItem::where('title', $slug)->first();
       
        // $foodItems = FoodItem::where('category_id', $foodCategory->id)->get();
        return view('menu/single-menu', [
            //ucfirst is to capitalize the first letter
            // 'foodItem'=>ucfirst($slug),
            'foodItem'=>$foodItem
           
        ]);
    }
   
    
}
