<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\User;
class profile extends Model
{
      protected $table = 'profiles';

     protected $guarded = []; 
     
     // Deault Image profile //
     public function profileimage(){
     $imagepath = ($this->image) ? $this->image : 'profile/Q5IP9C6folyWJQEr9vAhMlQCecDiAkR1w1o0PKD2.png';
     	return '/storage/' . $imagepath;
     }

     public function user(){
    	return $this->belongsTo(User::class);
    }


    public function followers(){
    	return $this->belongsToMany(User::class);
    }

}/////end////
