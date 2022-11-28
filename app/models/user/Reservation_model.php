<?php

class Reservation_model
{

    private $table = 'reservasi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllReservasiByName($username)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username=:username ');
        $this->db->bind('username', $username);
        return $this->db->resultSet();
    }

    public function getReservasiById($id)
    {
        // $username = $_SESSION('username');
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id ');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function tambahDataReservasi($data)
    {
        $username = $_SESSION['username'];
        $query = "INSERT INTO reservasi VALUES ('', :username, :Keterangan, :Jumlah, :Jam, :Tanggal, :Status)";
        $this->db->query($query);
        $this->db->bind('username', $username);
        $this->db->bind('Keterangan', $data['Keterangan']);
        $this->db->bind('Jumlah', $data['Jumlah']);
        $this->db->bind('Jam', $data['Jam']);
        $this->db->bind('Tanggal', $data['Tanggal']);
        $this->db->bind('Status', "Waiting");

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusReservasi($id)
    {
        $query = "DELETE FROM reservasi WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tambahFeedback($data)
    {
        $query = "INSERT INTO feedback VALUES ('', :username, :email, :phone, :pesan)";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('phone', $data['phone']);
        $this->db->bind('pesan', $data['pesan']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
