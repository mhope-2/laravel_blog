<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // App\Models\Task::incomplete()->where('id', '>=', 2)->get();
    public static function scopeIncomplete($query){
        return $query->where('completed',0);
    }



}
