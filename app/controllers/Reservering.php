<?php
class Reservering extends Controller {
  // Properties, field
  private $ReseveringModel;

  // Dit is de constructor
  public function __construct() {
    $this->ReseveringModel = $this->model('Resevering');
  }

  public function index() {
    /**
     * Haal via de method getFruits() uit de model Fruit de records op
     * uit de database
     */
    $Resevering = $this->ReseveringModel->getResevering();

    /**
     * Maak de inhoud voor de tbody in de view
     */
    $rows = '';
    foreach ($Resevering as $value){
      $rows .= "<tr>
                  <td>$value->id</td>
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
      'reserving' => $rows
    ];
    $this->view('reserving/index', $data);
  }
}