<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $table = 'admins';

    static $field = [
        'email' => ['required']
    ];

    static $validationMessage = [
        'email.required' => 'Inputan tidak boleh kosong !'
    ];


    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function zones()
    {
        return $this->belongsTo(VotingZone::class, 'voting_zone_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }
    public function village()
    {
        return $this->belongsTo(Village::class, 'village_id');
    }

    public function votingZone()
    {
        return $this->belongsTo(VotingZone::class, 'voting_zone_id');
    }
}
