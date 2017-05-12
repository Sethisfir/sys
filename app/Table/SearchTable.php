<?php
namespace App\Table;

use Core\Table\Table;

class SearchTable extends Table{

    /**
    *  Recupère la totalité des musiques de la bdd
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

    public function search($value){
        return $this->query("SELECT users.name,
                                    musics.title,
                                    musics.author,
                                    musics.releaseDate,
                                    categories.type,
                                    process.type as process
                            FROM musics, users, categories, process 
                            WHERE musics.title LIKE '$value%'
                            AND  musics.users_id = users.id
                            AND categories.id = musics.categories_id
                            AND process.id = musics.process_id ORDER BY musics.id DESC LIMIT 10");
    }  
}