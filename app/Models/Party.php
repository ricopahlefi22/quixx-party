<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;

    protected $table = 'parties';
    protected $primaryKey = 'party_id';

    protected $fillable = [
        'logo',
        'number',
        'name',
        'short_name',
        'color',
    ];

    public function candidates()
    {
        return $this->hasMany(Candidate::class);
    }


     public function votingResults()
    {
        return $this->hasMany(VotingResult::class);
    }
}
