 
 <?php 
    $i=0;
    foreach ($items as $item ): 
    if ($i<=0) {?> 
   <div class="col-lg-8">
        <a href="#">
            <img class="img-responsive" src="<?php echo e($item->image); ?>" alt="">
        </a>
    </div>
<?php } $i++; endforeach ?> 
 
