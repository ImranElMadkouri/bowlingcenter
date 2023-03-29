<?php
class Reservering extends Controller {
  // Properties, field
  private $ReserveringModel;

  // Dit is de constructor
  public function __construct() {
    $this->ReserveringModel = $this->model('ReserveringModel');
  }
  
  public function index() {
    
    $reservering = $this->ReserveringModel->getReservering();
    $dates = $this->ReserveringModel->getUniqueDates();
    
    $rows = '';
    foreach ($reservering as $value){
      $rows .= "<tr>
                  <td>$value->Voornaam</td>
                  <td>$value->Tussenvoegsel</td>
                  <td>$value->Achternaam</td>
                  <td>$value->Date</td>
                  <td>$value->AantalUren</td>
                  <td>$value->AantalVolwassen</td>
                  <td>$value->AantalKinderen</td>
                  <td>$value->Naam</td>
                </tr>";
    }


    $data = [
      'title' => '<h1>Landenoverzicht</h1>',
      'reservering' => $rows,
      'dates' => $dates
    ];
    $this->view('reservering/index', $data);
  }

  
}