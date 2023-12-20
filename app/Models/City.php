<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class City extends Model
{
    use HasFactory;
    
    protected $table = 'cities';
    protected $primaryKey = 'city_id';

    protected $fillable = [
        'name',
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
