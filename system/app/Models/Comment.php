<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Comment extends Model{
	protected $table = 'comments';


	function user(){
		return $this->belongsTo(User::class);
	}

	    function child(){
        return $this->hasMany(Comment::class, 'parent_id');
    }


}