<?php
namespace Core\Table;

use Core\Database\Database;

class Table
{

    protected $table;
    protected $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
        if (is_null($this->table)) {
            $parts = explode('\\', get_class($this));
            $class_name = end($parts);
            $this->table = strtolower(str_replace('Table', '', $class_name)) . 's';
        }
    }

    protected function count(){
        return $this->query("SELECT COUNT(id) as nbrow FROM $this->table",null,true,null);
    }

    public function all(){
        return $this->query('SELECT * FROM ' . $this->table);
    }

    public function find($id){
        return $this->query("SELECT * FROM {$this->table} WHERE id = ?", [$id], true);
    }

    public function update($id, $fields){
        $sql_parts = [];
        $attributes = [];
        foreach($fields as $k => $v){
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }
        $attributes[] = $id;
        $sql_part = implode(', ', $sql_parts);
        return $this->query("UPDATE {$this->table} SET $sql_part WHERE id = ?", $attributes, true);
    }

    public function delete($id){
        return $this->query("DELETE FROM {$this->table} WHERE id = ?", [$id], true);
    }

    public function create($fields){
        $sql_parts = [];
        $attributes = [];
        foreach($fields as $k => $v){
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }
        $sql_part = implode(', ', $sql_parts);
        return $this->query("INSERT INTO {$this->table} SET $sql_part", $attributes, true);
    }

    public function extract($key, $value){
        $records = $this->all();
        $return = [];
        foreach($records as $v){
            $return[$v->$key] = $v->$value;
        }
        return $return;
    }

    public function query($statement, $attributes = null, $one = false){
        if($attributes){
            return $this->db->prepare(
                $statement,
                $attributes,
                str_replace('Table', 'Entity', get_class($this)),
                $one
            );
        } else {
            return $this->db->query(
                $statement,
                str_replace('Table', 'Entity', get_class($this)),
                $one
            );
        }
    }

    public function pagination($page = 1, $nbDisplay = 6){
        $nbRows = $this->count();
        $pagination = round((int)$nbRows->nbrow / $nbDisplay);
        $start = $page * $nbDisplay - $nbDisplay;
        $resultats = $this->query(" SELECT articles.title,
         articles.id,   
         articles.text,
         DATE_FORMAT(articles.date, 'Le %d/%m/%Y à %H:%i:%s') as date_article_fr,
         comments.authors,
         comments.texte,   
         DATE_FORMAT(comments.date, 'Le %d/%m/%Y à %H:%i:%s') as date_comment_fr,
         users.pseudo FROM $this->table 
         LEFT JOIN users ON articles.users_id = users.id
         LEFT JOIN comments ON comments.id_article = articles.id 
         ORDER BY date_article_fr DESC 
         LIMIT $start, $nbDisplay");
        $resultats['nbpage']=$pagination;
        return $resultats;
    }

    public function uploadFiles($img, $way="/public/img/upload"){ //$img contient un $_FILES[];
         if (isset($img)) {
            $dir = ROOT .$way;
            $name= $img['name'];
            $taille_maxi = 100000;
            $taille = filesize($img['tmp_name']);
            //Pour le moment limité au image mais sera bientôt plus général afin de permette l'upload de plus de type.
            $extensions = array('.png', '.gif', '.jpg', '.jpeg'); 
            $extension = strrchr($img['name'], '.');
            //Début des vérifications de sécurité...
                if(in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
                {
                    if($taille<$taille_maxi){
                         if (!move_uploaded_file($img['tmp_name'], "$dir/$name")) {
                            return false;
                        }else{
                            return true;
                        }
                    }
                }
            }
    }

}