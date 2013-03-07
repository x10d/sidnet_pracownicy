<h2>Edycja pracownika</h2>

<?php echo Form::open() ?>
<dl>          
    <dt>Imię:</dt>
    <dd><?php echo Form::input('imie',(isset($pracownicy['imie']))?$pracownicy['imie']:'' ); ?></dd>

    <dt>Nazwisko:</dt>
    <dd><?php echo Form::input('nazwisko',(isset($pracownicy['nazwisko']))?$pracownicy['nazwisko']:'' ); ?></dd>

    <dt>Stanowisko:</dt>
    <dd><?php echo Form::input('stanowisko',(isset($pracownicy['stanowisko']))?$pracownicy['stanowisko']:'' ); ?></dd>

    <dt>Numer PESEL:</dt>
    <dd><?php echo Form::input('pesel',(isset($pracownicy['pesel']))?$pracownicy['pesel']:'' ); ?></dd>

    <dd><?php echo Form::submit('', 'zmien') ?></dd>
</dl>
<?php echo Form::close() ?>
