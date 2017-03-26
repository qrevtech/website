<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class Push implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    /**
     * @var $session
     */
    private $session;

    /**
     * @var $payload
     */
    public $payload;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(String $session, String $payload)
    {
        $this->session = $session;
        $this->payload = $payload;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('session.' . $this->session);
    }
}
