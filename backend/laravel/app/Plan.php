<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'subject',
        'date',
        'started_at',
        'ended_at',
        'content',
        'start_page',
        'end_page',
    ];

    protected $dates = [
        'date',
        'started_at',
        'ended_at',
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
