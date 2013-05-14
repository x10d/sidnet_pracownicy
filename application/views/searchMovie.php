<?php echo Form::open('', array('id' => 'searchMovie')) ?>
<dl>
    <dt>Wyszukaj w nazwie/opisie filmu:</dt>
    <dd>
        <?php echo Form::input('searchString', '', array(
            'id' => 'searchString',
            'autofocus' => 'autofocus',
            'autocomplete' => 'off'
        )); ?>
    </dd>
</dl>
<?php echo Form::close() ?>
