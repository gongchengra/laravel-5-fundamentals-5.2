<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $table = 'messages';
    protected $fillable = array('body');
    protected $with = array('user');
    public function scopeAfterId($query, $lastId)
    {
        return $query->where('id', '>', $lastId);
    }
    public function scopeByChatRoom($query, $chatRoom)
    {
        return $query->where('chat_room_id', $chatRoom->id);
    }
    public function chatRoom()
    {
        return $this->belongsTo('App\ChatRoom', 'chat_room_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
