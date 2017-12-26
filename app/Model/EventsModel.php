<?php

namespace Model;
use \W\Model\ConnectionModel;

class EventsModel extends \W\Model\Model{

  public function slugify($text)
  {
  // replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);

  // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

  // trim
    $text = trim($text, '-');

  // remove duplicate -
    $text = preg_replace('~-+~', '-', $text);

  // lowercase
    $text = strtolower($text);

    if (empty($text)) {
      return 'n-a';
    }
    return $text;
  }

 //Retourne la liste Events en ligne
    public function onlineEvents(){
        if (!is_numeric($id_event)){
                return false;
        }
        //$sql = 'SELECT * FROM ' . $this->table . ' WHERE id_user = :id_user';
        $sql = 'SELECT `title`, `startdate`, `enddate`, `description` FROM ' . $this->table . ' WHERE online = 1';
        $sth = $this->dbh->prepare($sql);
  
        $sth->execute();
        $result = $sth->fetchAll();
        return  $result;
        //$sql = 'SELECT m.id_section, m.name, m.firstname, m.totem, m.infosup, m.register, s.rank FROM members m INNER JOIN sections s ON m.id_section = s.id WHERE id_user = :id_user'
    }



}

?>
