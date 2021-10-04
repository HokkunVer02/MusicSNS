<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function getPaginateBylimit(int $limit_count = 20)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
