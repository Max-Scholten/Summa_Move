<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Completed extends Model
{

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['times_completed', 'time_completed_in', 'exercise_id'];

    public function exercise()
    {
        return $this->belongsTo(Exercise::class, 'exercise_id', 'id');
    }

    public function exercises()
    {
        return $this->hasMany(Exercise::class, 'id', 'completed_id');
    }

    public function performances()
    {
        return $this->hasMany(Performance::class, 'id', 'completed_id');
    }

}
