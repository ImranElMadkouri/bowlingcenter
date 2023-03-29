<?php require APPROOT . '/views/includes/head.php';
  echo $data["title"];
?>
<a href="<?=URLROOT;?>/scoring/create">Nieuw score</a>
<table>
    <thead>
        <th>id</th>
        <th>Voornaam</th>
        <th>Tussenvoegsel</th>
        <th>Achternaam</th>
        <th>Reserveringsdatum</th>
        <th>Uren</th>
        <th>Volwassenen</th>
        <th>Kinderen</th>
        <th>Status</th>
    </thead>
    <tbody>
        <?=$data['rows']?>
    </tbody>
</table>
<a href="<?=URLROOT;?>/homepages/index">terug</a>