<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeightLogs extends Model
{
    use HasFactory;

    // protected $table = 'weight_logs';

    protected $fillable = ['user_id', 'date', 'weight', 'calories', 'exercise_time', 'exercise_content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
