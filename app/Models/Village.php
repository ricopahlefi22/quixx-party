<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Village extends Model
{
    use HasFactory;

    protected $table = 'villages';
    protected $primaryKey = 'village_id';

    protected $fillable = [
        'name',
        'city_id',
        'voting_zone_id',
        'district_id',
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
}
