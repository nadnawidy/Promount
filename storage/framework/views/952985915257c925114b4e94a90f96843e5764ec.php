 
    <div class="row" style="margin-left: 20%; margin-right: 10%">
  <?php foreach ($toppick as $item ): ?>  
     
    <div class = "col-lg-3" >
      <div class = "thumbnail" style="margin-bottom: -10px;">
         <a href="<?php echo e($item->url); ?>"><img src = "<?php echo e($item->image); ?>" alt = "Generic placeholder thumbnail"></a>
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


 
 
