<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Child extends Model
{
    protected $table='children';
    protected $fillable=['description','user_id'];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
