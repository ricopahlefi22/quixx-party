<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class VotingPlace extends Model
{
    use HasFactory;

    protected $table = 'voting_places';

    protected $fillable = [
        'name',
        'city_id',
        'voting_zone_id',
        'district_id',
        'village_id',
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

    public function votingResult()
    {
        return $this->hasOne(VotingResult::class, 'voting_place_id');
    }
}
