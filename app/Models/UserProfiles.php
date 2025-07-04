<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfiles extends Model
{
    protected $table = "user_profiles";
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
