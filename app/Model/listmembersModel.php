<?php

namespace Model;
use \W\Model\ConnectionModel;

class ListMembersModel extends \W\Model\Model{

	//Retourne la liste des id membres inscrit à un évènement
    public function listMembers($id_event){
    if (!is_numeric($id_event)){
        return false;
        }
        //SQL SELECT l.id_event, m.firstname, m.name, m.totem FROM listmembers l INNER JOIN members m ON l.id_member = m.id WHERE l.id_event = 1
    $sql = 'SELECT l.id_event, m.firstname, m.name, m.totem FROM listmembers l INNER JOIN members m ON l.id_member = m.id WHERE id_event = :id_event';
    $sth = $this->dbh->prepare($sql);
    $sth->bindValue(':id_event', $id_event);
    $sth->execute();
    $result = $sth->fetchAll();
    return  $result;
    }

}
?>