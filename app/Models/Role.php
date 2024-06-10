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
 * @property $user_id
 *
 * @property User $user
 * @property User[] $users
 * @property UserRole[] $userRoles
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
    protected $fillable = ['rolename', 'user_id'];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_role', 'role_id', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
//    public function userRoles()
//    {
//        return $this->hasMany(\App\Models\UserRole::class, 'id', 'role_id');
//    }

}
