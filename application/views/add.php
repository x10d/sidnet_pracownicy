<h2>Dodaj pracownika</h2>

<?php echo Form::open() ?>
<dl>          
    <dt>Imię:</dt>
    <dd><?php echo Form::input('imie',(isset($_POST['imie']))?$_POST['imie']:'' ); ?></dd>

    <dt>Nazwisko:</dt>
    <dd><?php echo Form::input('nazwisko',(isset($_POST['nazwisko']))?$_POST['nazwisko']:'' ); ?></dd>

    <dt>Stanowisko:</dt>
    <dd><?php echo Form::input('stanowisko',(isset($_POST['stanowisko']))?$_POST['stanowisko']:'' ); ?></dd>

    <dt>Numer PESEL:</dt>
    <dd><?php echo Form::input('pesel',(isset($_POST['pesel']))?$_POST['pesel']:'' );?></dd>

    <dd><?php echo Form::submit('', 'dodaj') ?></dd>
</dl>
<?php echo Form::close() ?>
