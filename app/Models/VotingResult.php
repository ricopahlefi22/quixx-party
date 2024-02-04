<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VotingResult extends Model
{
    use HasFactory;

    protected $table = 'voting_results';
    protected $primaryKey = 'voting_result_id';

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