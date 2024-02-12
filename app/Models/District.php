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

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function zones()
    {
        return $this->belongsTo(VotingZone::class, 'voting_zone_id');
    }
}
