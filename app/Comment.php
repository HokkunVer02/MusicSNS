<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
    'title',
    'content',
    'image_path',
    'user_id',
    'post_id',
    'good',
    ];
    
    public function getPaginateBylimit(int $limit_count = 20)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
