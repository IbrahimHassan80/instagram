<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\User;
class Post extends Model
{
    protected $table = 'posts';
    protected $guarded = []; 
    
    public function user(){
       return $this->belongsTo(User::class);
    }

}// end class
