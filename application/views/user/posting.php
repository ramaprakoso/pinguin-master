<?php 

	foreach($newthread as $value){
?>
<div class="left-container">
    <!-- Thread -->
   <div class="left-modul thread-modul">
        <h4 class="title"><a href="<?php echo site_url('thread/detail/'.$value->id_thread); ?>"><?php echo $value->thread_title; ?></a></h4>
           <?php  echo $value->thread_desc; ?><br>
  <span class="date"><i class="glyphicon glyphicon-time"></i> &nbsp;<?php echo $value->thread_date;?> &nbsp; &bull; &nbsp;</span>
          <span class="comment"><i class="glyphicon glyphicon-comment"></i> 13 &nbsp;&bull;</span>
            <span class="comment"> &nbsp;<?php echo $value->username; ?></span>
            <br><hr>     

        </div>  
          <!-- End Thread -->
    </div>    
<?php 
	}

?>