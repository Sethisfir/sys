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
            LEFT JOIN profilpictures ON users.id = profilpictures.users_id AND profilpictures.selecte = 1
            WHERE users.id = ?", array($array), $bool);
    }

    /**
    *  Ajoute une demande et la met en attente
    *  @return boolean
    **/

    public function addRequest($music, $shareUser, $receiveUser){
        return $this->db->prepare("INSERT INTO requests SET musics_id=?,
                                                           shareUser_id=?,
                                                           receiveUser_id=?,
                                                           status=?", [$music, $shareUser, $receiveUser, 1]);
    }

    public function myRequest(){
      return $this->query("SELECT users.name, musics.title, musics.author
                          FROM users, musics, requests
                          WHERE requests.musics_id =musics.id
                          AND requests.shareUser_id = users.id
                          AND requests.receiveUser_id =?",
                          [$_SESSION["user"]]);
    }

    /**
     * Récupère les demandes en attentes
     * @return array
     */
    public function requestWait()
    {
        return $this->query("SELECT users2.name as name2, users.name, musics.title, musics.author, requests.id
                            FROM requests
                            LEFT JOIN musics ON requests.musics_id = musics.id
                            LEFT JOIN users ON requests.shareUser_id = users.id
                            LEFT JOIN users as users2 ON requests.receiveUser_id = users2.id
                            WHERE users_id = ? AND requests.status = ?",
                            array($_SESSION['user'], 1));
    }

    public function exchangeValid($id)
    {
      return $this->db->prepare("UPDATE requests
                      SET status = ?
                      WHERE id = ?"
                      , array(2, $id));
    }
    /**
    * Récupère les musique de l'utilisateur
    * @return array
    */
    public function getMusics(){
        return $this->query("SELECT *
            FROM musics
            WHERE musics.users_id = ? ORDER BY id DESC", array($_SESSION["user"]), true);
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
