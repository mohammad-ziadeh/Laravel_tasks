<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
