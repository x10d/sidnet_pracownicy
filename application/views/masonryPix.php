<p>Masonry - pix</p>

<div id="masonryItemContainer">
    <?php foreach ($pixTable as $key => $value): ?>
    <div class="masonryItem">
        <img class="imagediv" id="mItem<?php echo $key ?>" src="<?php echo $value ?>"/>
    </div>
    <?php endforeach; ?>
</div>
<?php echo $pageLinks ?>

<script>
    $(function(){

        var $container = $('#masonryItemContainer');

        $container.imagesLoaded(function(){
          $container.masonry({
            itemSelector: '.masonryItem',
            columnWidth: 240
          });
        });

        $container.infinitescroll({
          navSelector  : '.pagination',    // selector for the paged navigation 
          nextSelector : '.pagination a[rel="next"]',  // selector for the NEXT link (to page 2)
          itemSelector : '.masonryItem',     // selector for all items you'll retrieve
          loading: {
              finishedMsg: 'No more pages to load.',
              img: 'http://i.imgur.com/6RMhx.gif'
            }
          },
          // trigger Masonry as a callback
          function( newElements ) {
            // hide new items while they are loading
            var $newElems = $( newElements ).css({ opacity: 0 });
            // ensure that images load before adding to masonry layout
            $newElems.imagesLoaded(function(){
              // show elems now they're ready
              $newElems.animate({ opacity: 1 });
              $container.masonry( 'appended', $newElems, true ); 
            });
          }
        );
    });
</script>