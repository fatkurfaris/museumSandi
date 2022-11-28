<?php

class User_model
{
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUsers()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getUsersById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function FindUserByEmailOrUsername($email, $username)
    {

        $this->db->query('SELECT * FROM user WHERE email = :email OR username = :username');
        $this->db->bind(':email', $email);
        $this->db->bind(':username', $username);

        $row = $this->db->single();

        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    public function Login($nameOrEmail, $password)
    {
        // $user = "user";

        // $row = $this->findUserByEmailOrUsername($nameOrEmail, $nameOrEmail);

        $this->db->query('SELECT * FROM user WHERE username = :username AND password = :password');
        // $this->db->bind(':email', $nameOrEmail);
        $this->db->bind(':username', $nameOrEmail);
        $this->db->bind(':password', $password);

        $row = $this->db->single();
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
        // if ($row == false) return false;

        // if (password_verify($nameOrEmail, $password)) {
        //     return $row;
        // } else {
        //     return false;
        // }

        // if ($row > 0) {
        //     return $row;
        // }

        // $username = $_POST['username'];
        // $password = $_POST['password'];

        // $cek = mysqli_num_rows(mysqli_query($koneksi, "select * from user where username='$username' and password='$password'"));
    }

    public function tambahDataUser($data)
    {
        $user = "user";

        $query = "INSERT INTO user VALUES ('', :username, :password, :email, :phone, :address, :gender, :role)";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('phone', $data['phone']);
        $this->db->bind('address', $data['address']);
        $this->db->bind('gender', $data['gender']);
        $this->db->bind('role', $user);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
