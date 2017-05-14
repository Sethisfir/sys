<?php
namespace App\Table;

use Core\Table\Table;

class SearchTable extends Table{

    /**
    *  Recupère les 10 dernière des musiques de la bdd
    * @return array
    **/

    public function allMusics(){
        return $this->query("SELECT users.name,
                                    musics.title,
                                    musics.author,
                                    musics.releaseDate,
                                    categories.type,
                                    process.type as process
                            FROM musics, users, categories, process 
                            WHERE musics.users_id = users.id
                            AND categories.id = musics.categories_id
                            AND process.id = musics.process_id ORDER BY musics.id DESC LIMIT 10");
    }  

    /**
    *  Récupère les enregistrements dont le titre commence par $value
    *  @return array
    **/

    public function titleSearch($value, $proc){
        return $this->query("SELECT 
                                    musics.id,
                                    musics.title,
                                    musics.author,
                                    categories.type
                            FROM musics, users, categories, process 
                            WHERE musics.title LIKE '$value%'
                            AND  musics.users_id = users.id
                            AND categories.id = musics.categories_id
                            AND process.id = $proc
                            AND process.id = musics.process_id ORDER BY musics.id DESC LIMIT 10");
    }  

    public function search($id){
        return $this->query("SELECT 
                                    users.id as users,
                                    users.name,
                                    musics.id,
                                    musics.title,
                                    musics.author,
                                    musics.releaseDate,
                                    categories.type,
                                    process.type as process
                            FROM musics, users, categories, process 
                            WHERE musics.id = ?
                            AND  musics.users_id = users.id
                            AND categories.id = musics.categories_id
                            AND process.id = musics.process_id ORDER BY musics.id DESC LIMIT 10", [$id], true);
    }  
}