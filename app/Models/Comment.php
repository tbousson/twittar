<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'content'
    ];

    protected $casts = [
        'created_at' => 'datetime:d-m-Y - H:m',
    ];

    public function message () {
        return $this->belongsTo(Message::class);
    }

    public function user () {
        return $this->belongsTo(User::class);
    }

    public function likes () {
        return $this->morphToMany(User::class, 'likable', 'likes')->whereDeletedAt(null);
    }

}
