<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class follower extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function following(){
        return $this->belongsTo(User::class,'following');
    }

    public function user_id(){
        return $this->belongsTo(User::class,'user_id');
    }

}
