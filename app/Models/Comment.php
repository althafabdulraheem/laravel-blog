<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table='comments';
    public $timestamps=false;

    public function getUser()
    {
        return $this->hasOne('App\Models\User','id','user_id');
    }
    public function getReply()
    {
        return $this->hasMany('App\Models\Reply','comment_id','id');
    }
}
