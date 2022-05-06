<?php
session_start();

class User {
    private $name;
    private $lastname;
    private $email;
    private $id;

    public function __construct($id, $name, $lastname, $email) {
        $this->id = $id;
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public static function addUser($name, $lastname, $email, $pass) {
        global $mysqli;
        $email = trim(mb_strtolower($email));
        $pass = password_hash(trim($pass), PASSWORD_DEFAULT);

        $result = $mysqli->query("SELECT * FROM `users` WHERE `email` = '$email'");

        if ($result->num_rows != 0) {
            return json_encode(['result' => 'exist']);
        } else {
            $mysqli->query("INSERT INTO `usersGZ`(`first_name`, `last_name`, `email`, `password`) VALUES ('$name', '$lastname', '$email', '$pass')");
            return json_encode(['result' => 'success']);
        }
    }

    public static function authUser($email, $pass) {
        global $mysqli;
        $email = trim(mb_strtolower($email));

        $result = $mysqli->query("SELECT * FROM `usersGZ` WHERE `email` = '$email'");
        $result = $result->fetch_assoc();

        if (password_verify($pass, $result['password'])) {
            $_SESSION['name'] = $result['first_name'];
            $_SESSION['lastname'] = $result['last_name'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['id'] = $result['id'];
            return json_encode(['result' => 'ok', 'data'=>$result]);

        } else {
            return json_encode(['result' => 'invalid']);
        }

    }

}