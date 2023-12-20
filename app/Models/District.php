<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

      public function city()    {
        return $this->belongsTo(City::class, 'city_id');
    }

     public function zones()    {
        return $this->belongsTo(VotingZone::class, 'voting_zone_id');
    }
}
