<?php

namespace App\Http\Controllers\profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Intervention\Image\Facades\Image;

class profilecontroller extends Controller
{
    
     public function index(User $user){
       // ---------followers ----------------- // 
       $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;
       
       return view('profile.profile', compact('user', 'follows'));
    }
      // ----------------- //
    
    public function edit(User $user){
    	 
       $this->authorize('update', $user->profile); //--- policy ---//
       
       return view('profile.profile-edit', compact('user'));
    }

    public function update(User $user){
    	
      $this->authorize('update', $user->profile); // policy //
      
      $data = request()->validate([
    		'title' => '',
    		'description' => '',
    		'url' => '',
    	  'image' => ''
      ]);
    
    // ----different way to update---- //
   //$user->profile->update($data); 
  // auth()->user()->profile->update($data);
 // ---------------------------------//
    
    

    //--- update profile image and profile information ---///
    if (request('image')){
    $imagepath = request('image')->store('profile','public');
    
    $imagesize = Image::make(public_path("storage/{$imagepath}"))->fit(1000, 1000);
    
    $imagesize->save();
    
    $imagearray = ['image' => $imagepath] ;
    }

    auth()->user()->profile->update(array_merge($data,
    $imagearray ?? [] 
    ));
    
    return redirect("profile/$user->id");

    }


    public function logout(Request $request) {
    Auth::logout();
    return redirect('/login');
}



}//end_class/
