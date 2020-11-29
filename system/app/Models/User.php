<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Models\UserDetail;
use App\Models\Artikel;

class User extends Authenticatable
{
    protected $tabel = 'user';
    use HasFactory, Notifiable;

    protected $fillable = [ 'name', 'email', 'password'];

    function posts(){
    	return $this->hasMany(Post::class);
    }
    




}
