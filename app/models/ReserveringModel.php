<?php
  class ReserveringModel {
    // Properties, fields
    private $db;
    public $helper;
  

    public function __construct() {
      $this->db = new Database();
    //   $this->helper = new SqlHelper();
    }

    public function getreservering() {
      
      
      $sql = "SELECT p.Voornaam, 
      p.Tussenvoegsel,
      p.Achternaam, 
      r.Date, 
      r.AantalUren, 
      r.AantalVolwassen, 
      r.AantalKinderen, 
      rs.Naam  
      FROM Reservering r
      INNER JOIN Persoon p 
      ON r.PersoonId = p.Id
      INNER JOIN ReserveringStatus rs 
      ON r.ReserveringStatusId = rs.Id
      ORDER BY r.Date DESC";
      
      
      $this->db->query($sql);
      $result = $this->db->resultSet();
      return $result;
    }

    public function getUniqueDates() {
      $sql = "SELECT DISTINCT Date FROM Reservering ORDER BY Date DESC";
      $this->db->query($sql);
      $result = $this->db->resultSet();
      return $result;
    }
}
?>