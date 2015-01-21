
<a href="<?php echo site_url('forum/write_thread');?>" class="button-slide">
        <i class="glyphicon glyphicon-pencil detail"></i>
        <div class="detail-wrap"></span> Create New Thread</div>
      </a>
      
<div class="row pinguin">
  
    <!-- Grid bagian kiri | Kontainer utama -->
    
    <div class="left-container">
    <!-- Thread -->
   <div class="left-modul thread-modul">
          <h4 class="title">Selamat datang di Pinguin!</h4>
          <span class="date"><i class="glyphicon glyphicon-time"></i> &nbsp;28 Februari, 2014 &nbsp; &bull; &nbsp;</span>
          <span class="comment"><i class="glyphicon glyphicon-comment"></i> 13 &nbsp;&bull;</span>
            <span class="comment"> &nbsp;Posted by admin</span>
            <br><hr>
          <p class="wtsay">Pinguin yang ini sudah diupdate dengan teknologi terbaru dari segi desain dan programming. Terima kasih kepada para senior member khususnya web developement yang telah berusaha membuat ulang website pinguin.<br>
          Semoga nanti pinguin bisa lebih berguna sebagai forum, tempat download, tempat belajar, dan...</p>
          <a href="#" class="button-slide">
              <i class="glyphicon glyphicon-chevron-right detail"></i>
<div class="detail-wrap">Selengkapnya</div>
          </a>
        </div>          <!-- End Thread -->
    </div>    
    
<!-- Grid bagian kanan | Kontainer utama -->    
    
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
              $gambar = 'pinguin.png';
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
    
       <div id="forum-content">
        <h3>Forum</h3>
        
        <ul class="forum-list">
          <li class="lol">
            <a href="#">Network</a>
            <ul class="list">
              <li><a href="">#1 Networks</a></li>
              <li><a href="">#2 Networks</a></li>
              <li><a href="">#3 Networks</a></li>
              <li><a href="">#4 Networks</a></li>
              <li><a href="">#5 Networks</a></li>
            </ul>
          </li>
          <li class="lol">
            <a href="#">Operating System</a>
            <ul class="list">
              <li><a href="">#1 OS</a></li>
              <li><a href="">#2 OS</a></li>
              <li><a href="">#3 OS</a></li>
            </ul>
          </li>
          <li class="lol">
            <a href="#">Website Development</a>
            <ul class="list">
              <li><a href="">#1 Web</a></li>
              <li><a href="">#2 Web</a></li>
              <li><a href="">#3 Web</a></li>
            </ul>
          </li>
        </ul>
      </div>
        
    </div>    <!-- End Kategori Modul-->
    
    </div>
    
    </div>

    <!-- Container grid ends! -->
<script type="text/javascript">
(function(){
  console.log("lol");
  $(".lol").on("click", function(){
    $(this).toggleClass("open");
    $(this).siblings().removeClass("open");
  });
})();
</script>