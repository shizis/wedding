<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;

    protected $fillable = [
        'guest_id',
        'comment',
        'attendance'
    ];

    public function guests()
    {
        return $this->belongsTo(Guest::class, 'guest_id', 'id', 'guests');
    }
}
