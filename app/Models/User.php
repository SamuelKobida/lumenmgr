<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    protected $table='users';
    protected $fillable=['first_name','last_name','email','phone_number'];

    public function children():HasMany
    {
        return $this->hasMany(Child::class);
    }
}
