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

    public function authorizationBan($username)
    {
        $user = $this->db->prepare("SELECT * FROM users WHERE name = ? AND isBan = ?", [$username, 1]);
        if($user){
            return true;
        }
    }

    public function authorizationKick($username)
    {
        $user = $this->db->prepare("SELECT * FROM users WHERE name = ? AND isKick = ?", [$username, 1]);
        if($user){
            return true;
        }
    }

    public function register($username, $password, $password2, $mail){
        $user = $this->db->prepare('SELECT * FROM users WHERE name = ? OR mail = ?', [$username, $mail], null, true);
        if(!$user){
            if($password === $password2){
                $password = sha1($password);
                $this->db->prepare("INSERT INTO users
                                    SET name = ?, password = ?, mail = ?",
                                    [$username, $password, $mail]);
                $id = $this->db->lastInsertId();
                $this->db->prepare("INSERT INTO profilpictures
                                    SET src = ?, users_id = ?",
                                    ['http://www.snut.fr/wp-content/uploads/2015/06/image-de-profil-2.jpg', $id]);
                return true;
            }
        }
        return false;
    }

}