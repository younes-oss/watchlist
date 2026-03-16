<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function user()
{
    return $this->belongsTo(User::class);
}

public function lists()
{
    return $this->belongsToMany(MovieList::class);
}

protected $fillable = [
        'title',
        'genre',
        'year',
        'watched',
        'user_id'
    ];

}
