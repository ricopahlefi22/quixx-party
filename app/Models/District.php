<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class District extends Model
{
    use HasFactory;

    protected $table = 'districts';

    protected $fillable = [
        'name',
        'city_id',
        'voting_zone_id',
    ];

    public function villages()
    {
        return $this->hasMany(Village::class, 'district_id');
    }

    public function votingPlaces()
    {
        return $this->hasMany(VotingPlace::class, 'district_id');
    }

    public function zones()
    {
        return $this->belongsTo(VotingZone::class, 'voting_zone_id');
    }
}
