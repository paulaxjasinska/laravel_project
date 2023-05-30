<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'phone_number',
        'procedure_id',
    ];

    public function procedure()
    {
        return $this->belongsTo(Procedure::class);
    }
}
