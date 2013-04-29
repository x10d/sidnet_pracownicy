<p>Masonry - pix</p>

<div id="masonryItemContainer">
    <?php foreach ($pixTable as $key => $value): ?>
    <div>
        <img id="<?php echo $key ?>" src="<?php echo DOCROOT . 'themes/assets/pix/' . $value ?>"/>
    </div>
    <?php endforeach; ?>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $(function(){
            $('#container').masonry({
                // options
                itemSelector : '.masonryItem',
                columnWidth : 240
            });
        });
    });
</script>
