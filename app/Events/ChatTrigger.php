<?php

namespace App\Events;
use App\User;
use App\Message;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ChatTrigger implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $username;
  public $message;


  public function __construct($message)
  {
      $this->message = $message;
  }

  public function broadcastOn()
  {
      //return new Channel('chat');
      return new Channel('chat');
  }

  public function BroadcastAs(){
      return 'message';
  }

}