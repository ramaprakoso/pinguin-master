<h3>Add Forum</h3>
<hr> 

<form class="form-horizontal" role="form" action="<?php echo base_url()?>admin/add_forum_action" method="POST">
<!--
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Forum Type : </label>
    <div class="col-sm-2">
      <select class="form-control" name="type">
      		<option value="1" selected>Forum</option>
      		<option value="2">Category</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Parent Forum : </label>
    <div class="col-sm-2">
      <select class="form-control">
      		<option selected>No Parent</option>
      </select>
    </div>
  </div>

   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Forum Permission	 : </label>
    <div class="col-sm-3">
      <select class="form-control">
      		<option selected>No Permission</option>
      </select>
    </div>
  </div>
-->
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Forum Name	: </label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="forum_name">
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