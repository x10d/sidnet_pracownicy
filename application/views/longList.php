<script type="text/javascript">
    $(document).ready(function() {
        workersDataLoaded = false;
        scrollDownAjax();
    });
</script>
<IMG id="spinner" SRC="/sidnet_pracownicy/themes/assets/img/spinner.gif">
<table id="workerLongListPage">
    <tr>
        <th>ID</th>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Stanowisko</th>
        <th>PESEL</th>
    </tr>
<?php foreach ($pracownicy as $key => $value): ?>
    <tr>
        <td><?php echo $value['id'] ?></td>
        <td><?php echo $value['imie'] ?></td>
        <td><?php echo $value['nazwisko'] ?></td>
        <td><?php echo $value['stanowisko'] ?></td>
        <td><?php echo $value['pesel'] ?></td>
    </tr>
<?php endforeach; ?>
</table>
