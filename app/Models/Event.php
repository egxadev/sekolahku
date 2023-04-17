<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'content', 'location', 'date'
    ];

    public function getDateAttribute()
    {
        return  Carbon::parse($this->attributes['date'])->translatedFormat('l, d M Y');
    }
}
