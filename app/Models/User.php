<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\ResetPassword as ResetPasswordNotification;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
	use Notifiable, IngoingTrait;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'confirmed', 'valid'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

//    /**
//     * Get user files directory
//     *
//     * @return string|null
//     */
//    public function getFilesDirectory()
//    {
//        if ($this->role === 'redac') {
//            $folderPath = 'user' . $this->id;
//            if (!in_array($folderPath , Storage::disk('files')->directories())) {
//                Storage::disk('files')->makeDirectory($folderPath);
//            }
//            return $folderPath;
//        }
//        return null;
//    }
}
