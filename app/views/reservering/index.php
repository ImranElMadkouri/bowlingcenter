<?php require APPROOT . '/views/includes/head.php';
  echo $data["title"];
?>

<select name="date" id="date">
    <?php foreach ($data['dates'] as $date): ?>
    <option value="<?= $date->Date ?>"><?= $date->Date ?></option>
    <?php endforeach; ?>
</select>

<table>
    <thead>
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
        <?=$data['reservering']?>
    </tbody>
</table>
<a href="<?=URLROOT;?>/homepages/index">terug</a>