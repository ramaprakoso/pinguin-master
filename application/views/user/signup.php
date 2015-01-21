<form action="<?php echo site_url('dashboard/registration');?>" method="POST" class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 form-login center-modul signup-modul">
<input type="text" name="fullname" value="<?php echo set_value('fullname');?>" placeholder="Nama"  data-toggle="tooltip" data-original-title="Nama asli" data-placement="right"><?php echo form_error('fullname'); ?>
<!--
<div class="input-append date" id="dp3" data-date="01-01-2014"  data-date-format="dd-mm-yyyy" >
    <input id="tanggal" size="16" name="tanggal" type="text" value=""  placeholder="Tanggal lahir">    
</div>
-->
    <input type="text" name="username"   placeholder="Username" value="<?php echo set_value('username');?>" data-toggle="tooltip" data-original-title="Username" data-placement="right"><?php echo  form_error('username'); ?>  
    <input type="text" name="email" placeholder="Email" value="<?php echo set_value('email');?>"  data-toggle="tooltip" data-original-title="Email" data-placement="right"><?php echo  form_error('email'); ?>   
    <input type="password" name="password"  placeholder="Password" value="<?php echo set_value('password');?>" data-toggle="tooltip" data-original-title="Password" data-placement="right"><?php echo  form_error('password'); ?>
    <!--<input type="password" name="password2"  placeholder="Confirm Password" value="" data-toggle="tooltip" data-original-title="Password" data-placement="right">-->
    <input type="submit" class="login" name="submit" value="Register">
    <a href="<?php echo site_url('dashboard/signin');?>" class="pull-left forget">Mau login?</a>
    <input type="reset" class="pull-right">
</form>
      
<script src="<?php echo base_url();?>asset/js/bootstrap-datepicker.js"></script>
      
 <script type="text/javascript">

            $(document).ready(function () {
                $('#tanggal').datepicker({
                    format: "dd/mm/yyyy"
                }); 
            
            });
     
        $(document).ready(function(){
        $("input").tooltip();
        });
     
        </script>
<script src="<?php echo base_url();?>asset/js/prefixfree.min.js"></script> 
