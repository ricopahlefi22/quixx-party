<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $table = 'candidates';

    protected $fillable = [
        'photo',
        'number',
        'name',
        'gender',
        'city',
        'party_id'
    ];

    public function party()
    {
        return $this->belongsTo(Party::class, 'party_id');
    }

    public function votingZone()
    {
        return $this->belongsTo(VotingZone::class, 'voting_zone_id');
    }

    public function votingResult()
    {
        return $this->hasMany(VotingResult::class);
    }
}
