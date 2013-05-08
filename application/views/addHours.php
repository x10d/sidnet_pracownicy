<h2>Dodaj pracownika</h2>

<?php echo Form::open() ?>
<?php echo Form::hidden('csrf', Security::token()); ?>
<?php echo Form::hidden('worker_id', $worker_id); ?>

<dl>          
    <dt>Ilość przepracowanych godzin:</dt>
    <dd>
        <?php echo Form::input('hours'); ?>
        <span style="color:red">
            <?php if (isset($error['hours'])) echo $error['hours']; ?>
        </span>
    </dd>

    <dt>Data:</dt>
    <dd>
        <?php echo Form::input('date', date("Y-m-d")); ?>
        <span style="color:red">
            <?php if (isset($error['date'])) echo $error['date']; ?>
        </span>
    </dd>

    <dd><?php echo Form::submit('', 'dodaj') ?></dd>
</dl>
<?php echo Form::close() ?>
