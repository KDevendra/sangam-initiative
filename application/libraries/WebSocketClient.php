<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once FCPATH . 'vendor/autoload.php';

use ElephantIO\Client;
use ElephantIO\Engine\SocketIO\Version2X;

class WebSocketClient
{
    
    protected $client;

    public function __construct()
    {
        
        $this->client = new Client(new Version2X('http://localhost:8080'));
        $this->client->initialize();
    }

    public function sendMessage($message)
    {
        $this->client->emit('chat_message', ['message' => $message]);
    }

    public function close()
    {
        $this->client->close();
    }
}
