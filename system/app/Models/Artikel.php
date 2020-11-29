<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Artikel extends Model{
	protected $table = 'artikels';

	function postby(){
		return $this->belongTo(User::class, 'id_user');
	}

	function comments(){
		return $this->morphMany(Comment::class, 'commantable')->whereNull('parent_id');
	}

	function  user(){
		return $this->belongsTo(User::class);
	}
}