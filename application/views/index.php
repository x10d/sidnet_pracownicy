<table>
    <tr>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Stanowisko</th>
        <th>PESEL</th>
	<th>Edycja</th>
	<th>Usuń</th>
    </tr>
<?php foreach($pracownicy as $key => $value): ?>
    <tr>
        <td><?php echo $value['imie'] ?></td>
        <td><?php echo $value['nazwisko'] ?></td>
        <td><?php echo $value['stanowisko'] ?></td>
        <td><?php echo $value['pesel'] ?></td>
        <td><?php echo HTML::anchor('pracownicy/edit/'.$value['id'],'Edytuj') ?></td>
        <td><?php echo HTML::anchor('pracownicy/delete/'.$value['id'],'Usuń') ?></td>
    </tr>
<?php endforeach; ?>
</table>
<?php echo HTML::anchor('pracownicy/add','Dodaj pracownika') ?>