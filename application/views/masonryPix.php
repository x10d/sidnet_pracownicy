<p>Masonry - pix</p>

<div id="masonryItemContainer">
    <?php //die(print_r($pixTable)) ?>
    <?php foreach ($pixTable as $key => $value): ?>
    <div class="masonryItem">
        <img id="<?php echo $key ?>" src="<?php echo $value ?>"/>
    </div>
    <?php endforeach; ?>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $(function(){
            $('#masonryItemContainer').masonry({
                // options
                itemSelector : '.masonryItem',
                columnWidth : 240
            });
        });
    });
</script>
