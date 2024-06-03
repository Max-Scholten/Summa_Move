<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 *
 * @property $id
 * @property $rolename
 * @property $created_at
 * @property $updated_at
 *
 * @property User[] $users
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Role extends Model
{

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['rolename'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
//    public function users()
//    {
//        return $this->hasMany(User::class, 'id', 'role_id');
//    }

    public  function  roles(){
        return $this->hasMany(User::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }

}
