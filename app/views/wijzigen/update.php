<?php require APPROOT . '/views/includes/head.php'; ?>
<?= $data['title']; ?>



<form action="<?= URLROOT; ?>/wijzigen/update" method="post">
    <table>
        <tbody>
            <tr>
                <td>
                    <input type="number" name="Nummer" id="Nummer" value="<?= $data["row"]->Nummer; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Verzenden">
                </td>
            </tr>
        </tbody>
    </table>

</form>

<a href="<?= URLROOT;?>/homepages/index">home</a>
<?php require APPROOT . '/views/includes/footer.php'; ?>