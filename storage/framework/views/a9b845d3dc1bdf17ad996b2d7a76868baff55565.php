 
    <div class="row" style="margin-left: 10%; margin-right: 10%">
  <?php foreach ($topdeals as $item ): ?>  
     
    <div class = "col-sm-6 col-md-3">
      <div class = "thumbnail">
        <a href="<?php echo e($item->url); ?>"> <img src = "<?php echo e($item->image); ?>" alt = "Generic placeholder thumbnail"></a>
      </div>
      
      <div class = "caption" style="background-color: rgba(0, 0, 0, 0.0470588)">
         <h4><?php echo e($item->title); ?></h4>
         <p><?php echo e($item->detail); ?></p> 
         <p>
            <a href = "#">
               <?php echo e($item->location); ?>

            </a> 
            
            <label><?php echo e($item->price); ?></label> 
         </p>
         
      </div>
   </div>
<?php endforeach ?> 
    </div>
