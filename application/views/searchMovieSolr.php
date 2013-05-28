<?php echo Form::open('', array('id' => 'searchMovieSolr')) ?>
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
<span style="color:red">
            <?php if(isset($error)) echo $error ?>
</span>
<?php echo Form::close() ?>
