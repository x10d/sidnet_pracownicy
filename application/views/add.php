<h2>Dodaj pracownika</h2>

<?php echo Form::open() ?>
<?php echo Form::hidden('csrf', Security::token()); ?>

<dl>          
    <dt>Imię:</dt>
    <dd>
        <?php echo Form::input('imie', (isset($_POST['imie'])) ? $_POST['imie'] : '' ); ?>
        <span style="color:red">
            <?php if (isset($error['imie'])) echo $error['imie']; ?>
        </span>
    </dd>

    <dt>Nazwisko:</dt>
    <dd>
        <?php echo Form::input('nazwisko', (isset($_POST['nazwisko'])) ? $_POST['nazwisko'] : '' ); ?>
        <span style="color:red">
            <?php if (isset($error['nazwisko'])) echo $error['nazwisko']; ?>
        </span>
    </dd>

    <dt>Stanowisko:</dt>
    <dd>
        <?php echo Form::input('stanowisko', (isset($_POST['stanowisko'])) ? $_POST['stanowisko'] : '' ); ?>
        <span style="color:red">
            <?php if (isset($error['stanowisko'])) echo $error['stanowisko']; ?>
        </span>
    </dd>

    <dt>Numer PESEL:</dt>
    <dd>
    <?php echo Form::input('pesel', (isset($_POST['pesel'])) ? $_POST['pesel'] : '' ); ?>
    <span style="color:red">
        <?php if (isset($error['pesel'])) echo $error['pesel']; ?>
    </span>
    </dd>

    <dt>Stawka za godzinę:</dt>
    <dd>
    <?php echo Form::input('rate_per_hour', (isset($_POST['rate_per_hour'])) ? $_POST['rate_per_hour'] : '' ); ?>
    <span style="color:red">
        <?php if (isset($error['rate_per_hour'])) echo $error['rate_per_hour']; ?>
    </span>
    </dd>

    <dd><?php echo Form::submit('', 'dodaj') ?></dd>
</dl>
<?php echo Form::close() ?>
