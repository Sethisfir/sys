<?php
namespace Core\Auth;

use Core\Database\Database;

class DBAuth {

    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function getUserId(){
        if($this->logged()){
            return $_SESSION['auth'];
        }
        return false;
    }

    /**
     * @param $username
     * @param $password
     * @return boolean
     */
    public function login($username, $password){
        $user = $this->db->prepare('SELECT * FROM users WHERE name = ?', [$username], null, true);
        if($user){
            if($user->password === sha1($password)){
                $user->rights == 1 ? $_SESSION['auth'] = "admin" : $_SESSION['auth'] = "user";
                $_SESSION["user"] = $user->id;
                return true;
            }
        }
        return false;
    }

    public function logged(){
        return isset($_SESSION['auth']);
    }

}