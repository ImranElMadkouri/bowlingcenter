<?php require APPROOT . '/views/includes/head.php'; ?>
<p>
<h3><?= $data["title"]; ?></h3>
</p>
<a href="<?=URLROOT;?>/students/index">Lessen student</a> |
<a href="<?=URLROOT;?>/students/annuleerLes">Lessen Annuleren</a> |
<a href="<?=URLROOT;?>/reservering/index">Instructeurs in dienst</a>
<a href="<?=URLROOT;?>/wijzigen/index">Wijzigen</a>
<?php require APPROOT . '/views/includes/footer.php'; ?>