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
        'start_hour',
        'start_minute',
        'end_hour',
        'end_minute',
        'content',
        'page1',
        'page2',
        'page3',
        'page4',
        'page5',
        'page6',
        'page7',
        'page8',
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
