<?php


class User
{
    private $db;
    public function __construct()
    {
        $this->db = new Database(); #hoiab andmebaasiga suhtlusvoimalused
    }
    public function findUserByEmail($email){ #andmeparing emaili jargi
        $this->db->query('SELECT * FROM users WHERE email=:email');
        $this->db->bind(':email', $email);
        $user = $this->db->getOne(); #votab ainult yhe sama emailiga useri
        if($this->db->rowCount() > 0){ #kas sellise emailiga kasutaja eksisteerib
            return true;
        }else{
            return false;
        }
    } 
    public function register($data){
        $this->db->query('INSERT INTO users SET
            name=:name,
            email=:email,
            password=:password
        ');
        #vaartuste saamine
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        #kasutaja reg success or not
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function login($email, $password){
        $this->db->query('SELECT * FROM users WHERE email=:email');
        $this->db->bind(':email', $data['email']);
        $user = $this->db->getOne();
        $hashedPassword = $user->password;
        if(password_verify($password, $hashedPassword)){
            return $user;
        }else{
            return false;
        }

    }
}