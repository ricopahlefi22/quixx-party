<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebConfig extends Model
{
    use HasFactory;

    protected $table = 'web_config';

    public function votingZone()
    {
        return $this->belongsTo(VotingZone::class, 'voting_zone_id');
    }
}
