<?php

class AdminReservation_model
{

    private $table = 'reservasi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllReservasi()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ');
        return $this->db->resultSet();
    }

    public function getReservasiById($id)
    {
        // $username = $_SESSION('username');
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id ');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function update($data)
    {
        $query = "UPDATE reservasi SET status = :status WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('status', $data['status']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
