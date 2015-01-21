<form action="<?php echo site_url('loginControl/aksi_login');?>" method="POST" class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 form-login center-modul login-login-modul">
    
    <input type="text" name="username" data-toggle="tooltip"  value="<?php echo set_value('username');?>" data-placement="right" placeholder="Username" data-toggle="tooltip" data-original-title="Username" data-placement="right"><?php echo form_error('username'); ?>  
    <input type="password" name="password" placeholder="Password"  value="<?php echo set_value('password');?>" data-toggle="tooltip" data-original-title="Password" data-placement="right"><?php echo form_error('password'); ?>        
    <input type="submit" class="login" name="submit" value="Login">

    <a href="#" class="pull-left forget">Lupa password?</a>
    <a href="<?php echo site_url('dashboard/signup');?>" class="pull-right forget">Daftar di sini!</a>
    <!--<input type="reset" class="pull-right"> -->
</form> 

<script src="<?php echo base_url('asset/js/bootstrap-datepicker.js');?>"></script>
      
 <script type="text/javascript">

        $(document).ready(function(){
        $("input").tooltip();
        });
     
        </script>
<script src="<?php echo base_url('asset/js/prefixfree.min.js');?>"></script>
