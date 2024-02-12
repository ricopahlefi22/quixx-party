<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class City extends Model
{
    use HasFactory;

    protected $table = 'cities';

    protected $fillable = [
        'name',
    ];

    public function votingZones()
    {
        return $this->hasMany(VotingZone::class, 'city_id')->orderBy('name');
    }
}
