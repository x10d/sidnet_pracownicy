<h2>Edycja pracownika</h2>

<?php echo Form::open() ?>
<?php echo Form::hidden('csrf', Security::token()); ?>

<dl>          
    <dt>Imię:</dt>
    <dd>
        <?php echo Form::input('imie', (isset($pracownicy['imie'])) ? $pracownicy['imie'] : '' ); ?>
        <span style="color:red">
            <?php if(isset($error['imie'])) echo $error['imie']; ?>
        </span>
    </dd>

    <dt>Nazwisko:</dt>
    <dd>
        <?php echo Form::input('nazwisko', (isset($pracownicy['nazwisko'])) ? $pracownicy['nazwisko'] : '' ); ?>
        <span style="color:red">
            <?php if(isset($error['nazwisko'])) echo $error['nazwisko']; ?>
        </span>
    </dd>

    <dt>Stanowisko:</dt>
    <dd>
        <?php echo Form::input('stanowisko', (isset($pracownicy['stanowisko'])) ? $pracownicy['stanowisko'] : '' ); ?>
        <span style="color:red">
            <?php if(isset($error['stanowisko'])) echo $error['stanowisko']; ?>
        </span>
    </dd>

    <dt>Numer PESEL:</dt>
    <dd>
        <?php echo Form::input('pesel', (isset($pracownicy['pesel'])) ? $pracownicy['pesel'] : '' ); ?>
        <span style="color:red">
            <?php if(isset($error['pesel'])) echo $error['pesel']; ?>
        </span>
    </dd>

    <dt>Stawka za godzinę:</dt>
    <dd>
        <?php echo Form::input('rate_per_hour', (isset($pracownicy['rate_per_hour'])) ? $pracownicy['rate_per_hour'] : '' ); ?>
        <span style="color:red">
            <?php if(isset($error['rate_per_hour'])) echo $error['rate_per_hour']; ?>
        </span>
    </dd>

    <dd><?php echo Form::submit('', 'zmien') ?></dd>
</dl>
<?php echo Form::close() ?>
