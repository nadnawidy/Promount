 
 <?php foreach ($categories as $item ): ?> 
        <a href="#"><h7><?php echo e($item->titles); ?> <small>(<?php echo e($item->sum); ?>)</small></h7></a>  
   <br>
<?php endforeach ?> 
 
