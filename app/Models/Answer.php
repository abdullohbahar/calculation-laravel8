<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'respondent_id',
        'type',
        'question',
        'answer'
    ];

    public function respondent()
    {
        return $this->belongsTo(Respondent::class);
    }
}
