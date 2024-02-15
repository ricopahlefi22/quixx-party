<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class VotingZone extends Model
{
    use HasFactory;

    protected $table = 'voting_zones';

    protected $fillable = [
        'name',
        'city_id',
    ];

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function candidates()
    {
        return $this->hasMany(Candidate::class, 'voting_zone_id');
    }

    public function districts()
    {
        return $this->hasMany(District::class, 'voting_zone_id');
    }

    public function villages()
    {
        return $this->hasMany(Village::class, 'voting_zone_id');
    }

    public function votingPlaces()
    {
        return $this->hasMany(VotingPlace::class, 'voting_zone_id');
    }

    public function votingResults(){
        return $this->hasMany(VotingResult::class, 'voting_zone_id');
    }
}
