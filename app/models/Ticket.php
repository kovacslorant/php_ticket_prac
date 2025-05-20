<?php

require_once '../config/Database.php';

class Ticket{
    private  $db;

    public function __construct()
    {
        $this->db = Database::connect();
    
    }

    public function getAll(){
        $stmt = $this->db->query("SELECT * FROM tickets");
        return $stmt->FetchAll(PDO::FETCH_ASSOC);
    }
    
        
    
}

?>