<?php require APPROOT . '/views/includes/head.php';
  echo $data["title"];
?>

<table>
    <thead>
        <th>Voornaam</th>
        <th>Tussenvoegsel</th>
        <th>Achternaam</th>
        <th>Datum</th>
        <th>Volwassenen</th>
        <th>Kinderen</th>
        <th>Baan</th>
        <th>Wijzigen</th>
    </thead>
    <tbody>
        <?=$data['wijzigen']?>
    </tbody>
</table>
<a href="<?=URLROOT;?>/homepages/index">terug</a>