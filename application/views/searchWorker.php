<script type="text/javascript">
$(document).ready(function(){
    $('#searchString').keyup(function() {
        autosuggestSearchWorkers($('#searchString').val());
    });
})
    
</script>

    <?php echo Form::open('', array('id' => 'searchForm')) ?>
<dl>
    <dt>Wpisz imię:</dt>
    <dd>
        <?php echo Form::input('searchString', '', array(
            'id' => 'searchString',
            'autofocus' => 'autofocus',
            'autocomplete' => 'off'
        )); ?>
    </dd>
</dl>
<?php echo Form::close() ?>
