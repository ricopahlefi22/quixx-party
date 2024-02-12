<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Village extends Model
{
    use HasFactory;

    protected $table = 'villages';

    protected $fillable = [
        'name',
        'city_id',
        'voting_zone_id',
        'district_id',
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

    public function votingPlaces()
    {
        return $this->hasMany(VotingPlace::class, 'village_id');
    }
}
