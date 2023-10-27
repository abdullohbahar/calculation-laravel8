<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respondent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'instance',
        'position',
        'email',
        'whatsapp_number'
    ];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
