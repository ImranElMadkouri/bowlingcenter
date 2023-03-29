<?php
  class WijzigenModel {
    // Properties, fields
    private $db;
    public $helper;
  

    public function __construct() {
      $this->db = new Database();
    //   $this->helper = new SqlHelper();
    }

    public function getWijzigen() {
      
      
        $sql = "SELECT 
        p.Voornaam, 
        p.Tussenvoegsel, 
        p.Achternaam, 
        r.Date, 
        r.AantalVolwassen, 
        r.AantalKinderen, 
        b.`Nummer`
    FROM 
        Reservering r
        INNER JOIN Persoon p ON r.PersoonId = p.Id
        INNER JOIN Baan b ON r.BaanId = b.Id;";
      
      
      $this->db->query($sql);
      $result = $this->db->resultSet();
      return $result;
    }

    public function getSinglewijzigen($id) 
    {
      $this->db->query("SELECT 
                   p.Tussenvoegsel, 
                   p.Achternaam, 
                     r.Date, 
                     r.AantalVolwassen, 
                       r.AantalKinderen, 
                       b.`Nummer`
                         FROM 
                          Reservering r
                             INNER JOIN Persoon p ON r.PersoonId = p.Id
                            INNER JOIN Baan b ON r.BaanId = b.Id
                                             WHERE 
                                       r.Id = :id");
                                       
      $this->db->bind(':id', $id, PDO::PARAM_INT);
      return $this->db->single();
    }

    public function updateWijzigen($post) {
        try {
          // $this->db->dbHandler->beginTransaction();
            //  var_dump($post); exit();
          $this->db->query('UPDATE baan SET Nummer = :Nummer WHERE Id = :id;');

          
          $this->db->bind(':Id', $post["id"], PDO::PARAM_INT);
          $this->db->bind(':Nummer', $post["Nummer"], PDO::PARAM_STR);

           $this->db->execute();
  
        } catch(PDOException $e) {
          echo $e->getMessage() . "Rollback";
          // $this->db->dbHandler->rollBack();
        }
      }
}
?>