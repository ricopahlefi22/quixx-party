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

    public function votingZone()
    {
        return $this->belongsTo(VotingZone::class, 'voting_zone_id');
    }
}
