<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ChatRoom;
use App\Message;
use Auth;

class MessageController extends Controller
{
    //
    public function __construct(Message $messages)
    {
        $this->messages = $messages;
    }
    public function getByChatRoom(ChatRoom $chatRoom)
    {
        return $chatRoom->messages;
    }
    public function createInChatRoom(ChatRoom $chatRoom, Request $request)
    {
        $message = $this->messages->newInstance($request->all());

        $message->chatRoom()->associate($chatRoom);
        $message->user()->associate(Auth::user());

        $message->save();

        return $message;
    }
    public function getUpdates($lastMessageId, ChatRoom $chatRoom)
    {
        return $this->messages->byChatRoom($chatRoom)->afterId($lastMessageId)->get();
    }
}
