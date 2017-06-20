<?php

namespace Model;
use \W\Model\ConnectionModel;

class MembersModel extends \W\Model\Model{

     //Retourne la liste des membres d'un utilisateur
    public function userMembers($id_user){
        if (!is_numeric($id_user)){
                return false;
        }
        $sql = 'SELECT * FROM ' . $this->table . ' WHERE id_user = :id_user';
        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(':id_user', $id_user);
        $sth->execute();
        $result = $sth->fetchAll();
        return  $result;
        //$sql = 'SELECT `id`, `id_section`, `id_user`, `name`, `firstname`, `totem`, `infosup`, `register` FROM `members` WHERE id_user = 1
    }


        //Retourne la liste des membres d'un utilisateur en fonction de la section & enregistrer ou nonenregistrer
        public function usersectionMembers($id_user,$id_section,$register){
        if (!is_numeric($id_section)){
                return false;
        }
        $sql = 'SELECT * FROM ' . $this->table . ' WHERE id_user = :id_user AND id_section = :id_section AND register = :register';
        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(':id_user', $id_user);
        $sth->bindValue(':id_section', $id_section);
        $sth->bindValue(':register', $register);
        $sth->execute();
        $result = $sth->fetchAll();
        return  $result;
        //$sql = 'SELECT `id`, `id_section`, `id_user`, `name`, `firstname`, `totem`, `infosup`, `register` FROM `members` WHERE id_user = 1
    }

    
}

 ?>