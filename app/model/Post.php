<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\User;
class Post extends Model
{
    protected $table = 'posts';
    protected $guarded = []; 
    
    public function user(){
       return $this->belongsTo(User::class);
    }

}// end class
