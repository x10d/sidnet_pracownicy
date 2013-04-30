<p>Masonry - pix</p>

<?php echo $pageLinks ?>
<div id="masonryItemContainer">
    <?php foreach ($pixTable as $key => $value): ?>
    <div class="masonryItem">
        <img id="mItem<?php echo $key ?>" src="<?php echo $value ?>"/>
    </div>
    <?php endforeach; ?>
</div>
<?php echo $pageLinks ?>
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
