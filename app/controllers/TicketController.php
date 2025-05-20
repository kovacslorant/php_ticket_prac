<?php
require_once '../app/core/Controller.php';

class TicketController extends Controller
{
    public function index()
    {
        $ticketModel = $this->model('Ticket');
        $tickets = $ticketModel->getAll();
        $this->view('tickets/index' , ['tickets' => $tickets]);
    }
}

?>