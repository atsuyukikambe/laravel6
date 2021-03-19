<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    protected $fillable = [
        'label',
        'name',
    ];

    public function plans(): HasMany
    {
        return $this->hasMany(Plan::class);
    }

    public function getBgColorAttribute(): string
    {
        return [
            'Japanese' => 'bg-red-600',
            'English' => 'bg-pink-600',
            'Math' => 'bg-blue-400',
            'Biology' => 'bg-green-400',
            'Chemistry' => 'bg-green-400',
            'Physics' => 'bg-green-400',
            'Japanese-history' => 'bg-yellow-300',
            'World-history' => 'bg-yellow-300',
            'Geography' => 'bg-yellow-300',
            'Politics-and-economy' => 'bg-yellow-300',
            'Ethics' => 'bg-yellow-300',
        ][$this->label] ?? 'bg-gray-400';
    }
}
