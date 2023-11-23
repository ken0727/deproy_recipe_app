<?php

// app/Models/Post.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'material', 'procedure', 'image','user_id'];//user_idを追加

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
