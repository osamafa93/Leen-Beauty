<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'fathername',
        'lastname',
        'notification_number',
        'city',
        'branch',
        'mobile',
        'product',
        'quantity',
        'price',
        'total',
        'ready',
        'shipped',
        'received',

        'product2',
        'quantity2',
        'price2',

        'product3',
        'quantity3',
        'price3',

        'product4',
        'quantity4',
        'price4',

        'product5',
        'quantity5',
        'price5',

        'product6',
        'quantity6',
        'price6',

        'product7',
        'quantity7',
        'price7',
        
    ];

    public function setTotalAttribute()
            {
                $this->attributes['total'] = $this->quantity * $this->price + $this->quantity2 * $this->price2 + $this->quantity3 * $this->price3 + $this->quantity4 * $this->price4 + $this->quantity5 * $this->price5 + $this->quantity6 * $this->price6 + $this->quantity7 * $this->price7;
            }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
