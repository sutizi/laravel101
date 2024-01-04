<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function person() {
        // belongsTo is the "inverse" of hasMany() function
        // defined in Task model
        return $this->belongsTo(Person::class);
    }
}
