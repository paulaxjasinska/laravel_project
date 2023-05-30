<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'city',
        'email',
        'phone_number',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function procedures()
    {
        return $this->hasMany(Procedure::class);
    }
}
