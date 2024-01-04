<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
Use Illuminate\Support\Str;

class Admin extends Authenticatable{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $table = 'admins';
    protected $primaryKey = 'admin_id';

     protected static function boot(){
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Str::uuid()->toString();
            }
        });
    }

    // biar tidak auto increment
    public function getIncrementing(){
        return false;
    }

    // mendevinisikan sebagai string
    public function getKeyType(){
        return 'string';
    }

    // Validasi email & password
    static $field = [
        'email' => ['required']
    ];
    static $pesan = [
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

     public function adminLog()
    {
        return $this->belongsTo(Admin::class, 'admin_log');
    }
}
