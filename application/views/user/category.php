  <!-- Container grid -->  
<div class="row pinguin">
 <div class="left-container">
    <!-- Thread -->
   <div class="left-modul forum-modul">
        <h4 class="title">Category</h4>
          <?php
            foreach($get as $row){
          ?>
          <ul> <!-- Baris / row, kalo td nya kolom -->
            <li><a href="<?php echo site_url();?>forum/get_sub/<?php echo $row->id_category;?>" class="kategori"><?php echo $row->category_desc;?></a></li> 
            <p class="deks"></p></td>
          <?php
          }
          ?>   
          </ul>     
        </div>  
          <!-- End Thread -->
    </div>
    <div class="right-container">
    
    <!-- Grid satuan -->    
    
    <!-- Halaman Masuk -->
    

      <div class="right-modul come-in login-modul">
      

      <?php 
        if(isset($session)){
          $cek = $session ;

      ?>
        <div class="image-profile pull-left">
          <?php 
            $foto = $user->avatar;
            if(!empty($foto)){
              $gambar = $foto;
            }else{
              $gambar = 'rz.jpg';
            }
          ?>

         <img class="user-photo" src="<?php echo base_url();?>asset/img/<?php echo $gambar;?>">
        </div>
        <div class="profile-detail pull-left">
            <ul class="profile">
                <li><?php echo $user->nama?></li>
                <li><?php echo $user->username;?></li>
                <li><?php echo $user->level;?></li>
            </ul>
        </div>
        <div class="user-choice">
          <a href="#">Sunting profil</a>&nbsp; <span class="bull">&bull;</span>&nbsp;
          <a href="<?php echo site_url('loginControl/logout');?>">Keluar</a>
        </div>  

      <?php     
        }else{
      ?>
        <p class="member">
        Ini adalah kolom yang kamu gunakan untuk 
        login dan register user baru.<br><hr class="garis-masuk">
        

        <div class="container-mau">
            <a class="mau" href="<?php echo site_url('dashboard/signin');?>">Login</a><span> atau</span>
            <a class="mau" href="<?php echo site_url('dashboard/signup');?>">Sign up</a>
        </div>
        
        </p><hr class="garis-masuk2"><p class="member">Bergabunglah dengan Pinguin, kamu bisa belajar, download, dan ikut serta di forum yang ada di Pinguin.</p>
      <?php
        }
      ?>  
      </div>
    <!-- End Halaman Masuk -->


    <!-- Kategori Modul-->
     <div class="right-modul topik-modul">
    
        <ul class=topik>
          <?php
          foreach($topic as $row_cat){
          ?>
            <li><a class="tag" href="#"> &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row_cat->category;?></a></li>
          <?php
           } 
          ?>  
        </ul>
        
    </div>    <!-- End Kategori Modul-->
    
    </div>
    
    </div>

    <!-- Container grid ends! -->   
