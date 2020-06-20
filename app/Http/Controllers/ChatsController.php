<?php

namespace App\Http\Controllers;

use App\Message;
use App\Events\MessageSent;
use Illuminate\Http\Request;

class ChatsController extends Controller
{
	public function __construct(){
    	$this->middleware(['auth']);
	}

	public function index()
	{
		return view('chats');
	}

	public function fetchMessages()
	{
		return Message::with('user')->get();
	}

	public function sendMessages(Request $request)
	{
		$msg = auth()->user()->messages()->create([
			'message' => $request->message
		]);

		broadcast(new MessageSent($msg->load('user')))->toOthers();

		return ['status' => 'Success'];
	}


}
