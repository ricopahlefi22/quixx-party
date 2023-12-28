<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class VotingPlace extends Model
{
    use HasFactory;

    protected $table = 'voting_places';
    protected $primaryKey = 'voting_place_id';

    protected $fillable = [
        'name',
        'city_id',
        'voting_zone_id',
        'district_id',
        'village_id',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Str::uuid()->toString();
            }
        });
    }

    // biar tidak auto increment
    public function getIncrementing()
    {
        return false;
    }

    // mendevinisikan sebagai string
    public function getKeyType()
    {
        return 'string';
    }

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
}
