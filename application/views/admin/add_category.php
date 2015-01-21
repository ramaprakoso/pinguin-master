<h3>Add Forum</h3>
<hr> 

<form class="form-horizontal" role="form" action="<?php echo base_url()?>admin/add_category_action" method="POST">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Forum Parent : </label>
    <div class="col-sm-2">
      <select class="form-control" name="parent">
          <?php 
              $i=1; 
              foreach($forum as $value) {
        		    echo "<option value='$i' selected>$value->forum_name</option>"; 
                $i++; 
                }
        		?>
          </select>
    </div>
  </div>
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Category Name	: </label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="category">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>