<?php
namespace App\Table;

use Core\Table\Table;

class UserTable extends Table{

    protected $table = 'users';

    /**
    * Récupère les données de l'utilisateur
    * @return array
    */
    public function findUser(){
        return $this->query("SELECT users.id, users.name, users.mail, users.rights, profilpictures.src
            FROM users 
            LEFT JOIN profilpictures ON users.id = profilpictures.users_id 
            WHERE users.id = ?", array($_SESSION["user"]), true);
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
    public function last(){
        return $this->query("
            SELECT users.id, users.name, users.mail, users.rights, profilpictures.src, users.isBan, users.isKick
            FROM users 
            LEFT JOIN profilpictures ON users.id = profilpictures.users_id
            ");
    }

    /**
     * Récupère les derniers users de la category demandée
     * @param $category_id int
     * @return array
     */
    public function lastByCategory($category_id){
        return $this->query("
            SELECT users.id, users.titre, users.contenu, users.date, categories.titre as categorie
            FROM users
            LEFT JOIN categories ON category_id = categories.id
            WHERE users.category_id = ?
            ORDER BY users.date DESC", [$category_id]);
    }

    /**
     * Récupère un article en liant la catégorie associée
     * @param $id int
     * @return \App\Entity\PostEntity
     */
    public function findWithCategory($id){
        return $this->query("
            SELECT users.id, users.titre, users.contenu, users.date, categories.titre as categorie
            FROM users
            LEFT JOIN categories ON category_id = categories.id
            WHERE users.id = ?", [$id], true);
    }
}