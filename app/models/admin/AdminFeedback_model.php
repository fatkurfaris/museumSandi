<?php

class AdminFeedback_model
{

    private $table = 'feedback';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllFeedback()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ');
        return $this->db->resultSet();
    }

    public function getFeedbackById($id)
    {
        // $username = $_SESSION('username');
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id ');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
