<table>
    <tr>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Stanowisko</th>
        <th>PESEL</th>
	<th>Edycja</th>
	<th>Usuń</th>
    </tr>
<?php foreach ($pracownicy as $key => $value): ?>
    <tr>
        <td><?php echo $value['imie'] ?></td>
        <td><?php echo $value['nazwisko'] ?></td>
        <td><?php echo $value['stanowisko'] ?></td>
        <td><?php echo $value['pesel'] ?></td>
        <td><?php echo HTML::anchor('pracownicy/edit/' . $value['id'], 'Edytuj') ?></td>
        <td><?php echo HTML::anchor('pracownicy/delete/' . $value['id'], 'Usuń') ?></td>
    </tr>
<?php endforeach; ?>
</table>
<?php echo $pageLinks ?>
<?php echo HTML::anchor('pracownicy/add', 'Dodaj pracownika') ?>
<hr>
<table id="userListWorkersPage">
    <thead>
        <tr>
            <td>ID</td>
            <td>Użytkownik</td>
            <td>Email</td>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
<script type="text/javascript">
    $(document).ready(function() {
        $.ajax( {
            url: "user/getUserList",
            success : function(json_content) {
                var parsed = jQuery.parseJSON(json_content);
                $.each(parsed, function(key, value){
                    $('#userListWorkersPage')
                        .find('tbody:last')
                        .append('<tr>'
                            + '<td>' + value.id + '</td>'
                            + '<td>' + value.username + '</td>'
                            + '<td>' + value.email + '</td>'
                            + '</tr>'
                    );
                });
            },
            error: function(err) {
                console.log(err);
            }
        });
    })
</script>
