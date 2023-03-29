<?php
  class ReseveringModel {
    // Properties, fields
    private $db;
    public $helper;
  

    public function __construct() {
      $this->db = new Database();
    //   $this->helper = new SqlHelper();
    }

    public function getReservaties() {
      
      
        $sql = "SELECT p.Voornaam, 
        p.Tussenvoegsel,
        p.Achternaam, 
        r.Date, 
        r.AantalUren, 
        r.AantalVolwassen, 
        r.AantalKinderen, 
        rs.Naam  FROM Reservering r
        
        INNER JOIN Persoon p 
        ON r.PersoonId = p.Id
        
        INNER JOIN ReserveringStatus rs 
        ON r.ReserveringStatusId = rs.Id;";
      
      
      $this->db->query($sql);
      $result = $this->db->resultSet();
      return $result;
    }
}
?>