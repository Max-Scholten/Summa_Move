<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['exercises_img', 'name', 'description', 'times_completed', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function performances()
    {
        return $this->hasMany(Performance::class);
    }

}
