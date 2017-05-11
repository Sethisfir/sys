<?php
namespace App\Table;

use Core\Table\Table;

class UserTable extends Table{

    protected $table = 'users';

    /**
    * Récupère les données de l'utilisateur
    * @return array
    */
    public function findUser($array, $bool){
        return $this->query("SELECT users.id, users.name, users.mail, users.rights, profilpictures.src
            FROM users 
            LEFT JOIN profilpictures ON users.id = profilpictures.users_id 
            WHERE users.id = ?", array($array), $bool);
    }

    /**
    * Récupère les musique de l'utilisateur
    * @return array
    */
    public function getMusics(){
        return $this->query("SELECT * 
            FROM musics 
            WHERE musics.users_id = ?", array($_SESSION["user"]));
    }

    /**
     * Récupère les derniers article
     * @return array
     */
    public function allUsers(){
        return $this->query("
            SELECT users.id, users.name, users.mail, users.rights, profilpictures.src, users.isBan, users.isKick
            FROM users 
            LEFT JOIN profilpictures ON users.id = profilpictures.users_id
            ");
    }
}