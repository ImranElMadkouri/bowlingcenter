<?php
class Wijzigen extends Controller {
  // Properties, field
  private $WijzigenModel;

  // Dit is de constructor
  public function __construct() {
    $this->WijzigenModel = $this->model('WijzigenModel');
  }



  public function index() {
    
    $wijzigen = $this->WijzigenModel->getWijzigen();

    $rows = '';
    foreach ($wijzigen as $value){
      $rows .= "<tr>
                  <td>$value->Voornaam</td>
                  <td>$value->Tussenvoegsel</td>
                  <td>$value->Achternaam</td>
                  <td>$value->Date</td>
                  <td>$value->AantalVolwassen</td>
                  <td>$value->AantalKinderen</td>
                  <td>$value->Nummer</td>
                  <td>
                  <a href='" . URLROOT . "/wijzigen/update/$value->Nummer'>update</a>
              </td>
                </tr>";
    }


    $data = [
      'title' => '<h1>Landenoverzicht</h1>',
      'wijzigen' => $rows
    ];
    $this->view('wijzigen/index', $data);
  }

  public function update($id = null) 
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $this->WijzigenModel->updateWijzigen($_POST);
            header("Location:" . URLROOT . "/wijzigen/index");
        } 
        else 
        {
            $row = $this->WijzigenModel->getSinglewijzigen($id);

            // var_dump($row);
            // exit();
            
            $data = ['title' => '<h1>Update Baan</h1>', 'row' => $row];
            $this->view("wijzigen/update", $data);
        }
    } 
}