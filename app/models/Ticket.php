<?php

class Ticket{
    private  $db;

    public function __construct()
    {
        $this->db = Database::connection();
    
    }

    public function getAll(){
        $stmt = $this->db->querry("SELECT * FROM tickets");
        return $stmt->FetchAll(PDO::FETCH_ASSOC);
    }
    
        
    
}

?>