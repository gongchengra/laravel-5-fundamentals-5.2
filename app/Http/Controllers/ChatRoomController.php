<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ChatRoom;

class ChatRoomController extends Controller
{
    //
    public function __construct(ChatRoom $chatRooms)
    {
        $this->chatRooms = $chatRooms;
    }
    public function getAll()
    {
        return $this->chatRooms->all();
    }
    public function show(ChatRoom $chatRoom)
    {
        return $chatRoom;
    }
    public function create(Request $request)
    {
        return $this->chatRooms->create($request->all());
    }
}

