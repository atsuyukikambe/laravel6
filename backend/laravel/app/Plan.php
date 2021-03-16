<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Plan extends Model
{
    protected $fillable = [
        'date',
        'subject_id',
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
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
}
