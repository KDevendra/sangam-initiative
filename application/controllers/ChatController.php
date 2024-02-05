<?php
defined('BASEPATH') or exit('No direct script access allowed');

use ElephantIO\Client;
use ElephantIO\Engine\SocketIO\Version2X;
class ChatController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load the WebSocketClient library
        $this->load->library('WebSocketClient');
        
    }
    public function myMethod()
    {
        // Create a new instance of the ElephantIO client
        $client = new Client(new Version2X('http://localhost:8080'));
        $client->initialize();

    }

    public function sendMessage()
    {
        // Example usage: sending a message
        $message = $this->input->post('message'); // Get the message from the form
        $this->websocketclient->sendMessage($message); // Send the message via WebSocket
    }
    public function checkConnection()
    {
        // Initialize a variable to hold the connection status
        $connectionStatus = false;

        // Attempt to establish a connection to the WebSocket server
        try {
            $this->webSocketClient->sendMessage('ping');
            $connectionStatus = true;
        } catch (Exception $e) {
            // Connection failed, log the error
            log_message('error', 'WebSocket server connection error: ' . $e->getMessage());
        }

        // Optionally, you can pass the connection status to the view
        $data['connectionStatus'] = $connectionStatus;

        // Optionally, load a view to display the connection status
        // $this->load->view('connection_status_view', $data);

        // Alternatively, you can output the connection status as JSON
        $this->output->set_content_type('application/json')->set_output(json_encode(['connected' => $connectionStatus]));
    }
}
