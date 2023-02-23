<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Patient extends Model
{
    use HasFactory;

    public function doctor(){
        return $this->belongsTo(User::class);
    }
}
