<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class VotingZone extends Model
{
    use HasFactory;

    protected $table = 'voting_zones';
    protected $primaryKey = 'voting_zone_id';

    protected $fillable = [
        'name',
        'city_id',
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
 
}
