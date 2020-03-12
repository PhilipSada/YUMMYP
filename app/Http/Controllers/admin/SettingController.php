<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\GeneralSetting;
use App\SeoSetting;
use App\SocialAccountsSetting;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    public function general(){
        $id=1;
        $generalSetting =GeneralSetting::find($id);

        return view('admin/settings/general', [
            'generalSetting'=>$generalSetting
        ]);
    }
    public function saveGeneral(){
       $id=1;
      request()->validate([
            'site_title' => ['required', 'string', 'max:255'],
            'logo_image_url' => ['required'],
            'address_1' => ['required', 'string'],
            'city' => ['required', 'string'],
            'state' => ['required', 'string'],
            'zipcode' => ['required', 'string'],
            'phone_number' => ['required']
        ]);
       
        $generalSetting =GeneralSetting::find($id);
        $generalSetting->site_title = request('site_title');
        $generalSetting->logo_image_url = request('logo_image_url');
        $generalSetting->address_1 = request('address_1');
        $generalSetting->address_2 = request('address_2');
        $generalSetting->city = request('city');
        $generalSetting->state = request('state');
        $generalSetting->zipcode = request('zipcode');
        $generalSetting->phone_number = request('phone_number');
        $generalSetting->save();

    

        return redirect('/admin/settings/general');
    }
    public function seo(){
        $id=1;
        $seoSetting =SeoSetting::find($id);

        return view('admin/settings/seo', [
            'seoSetting'=>$seoSetting
        ]);
    }
    public function saveSeo(){
       $id=1;
      request()->validate([
            'description' => ['required'],
            'keywords' => ['required'],
            
        ]);
       
        $seoSetting =SeoSetting::find($id);
        $seoSetting->description = request('description');
        $seoSetting->keywords = request('keywords');
        
        $seoSetting->save();

    

        return redirect('/admin/settings/seo');
    }
    public function socialAccounts(){
        $id=1;
        $socialAccountSetting =SocialAccountsSetting::find($id);

        return view('admin/settings/social-accounts', [
            'socialAccountSetting'=>$socialAccountSetting
        ]);
    }
    public function saveSocialAccounts(){
       $id=1;
      request()->validate([
            'facebook_url' => ['required'],
            'instagram_url' => ['required'],
            'twitter_url' => ['required'],
            
        ]);
       
        $socialAccountSetting =SocialAccountsSetting::find($id);
        $socialAccountSetting->facebook_url = request('facebook_url');
        $socialAccountSetting->twitter_url = request('twitter_url');
        $socialAccountSetting->instagram_url = request('instagram_url');
        
        $socialAccountSetting->save();

    

        return redirect('/admin/settings/social-accounts');
    }
}
