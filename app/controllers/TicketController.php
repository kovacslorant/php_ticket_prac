<?php
require_once '../app/core/controller.php';

class TicketController extends Controller
{
    public function index()
    {
        $ticketModel = $this->model('Ticket');
        $tickets / $ticketModel->getAll();
        $this->view('tickets/index' , ['tickets' => $tickets]);
    }
}

?>