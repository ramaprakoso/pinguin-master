<a href="<?php echo site_url('forum/write_thread');?>" class="button-slide">
        <i class="glyphicon glyphicon-pencil detail"></i>
        <div class="detail-wrap"></span> Create New Thread</div>
      </a>
  <!-- Container grid -->  
<div class="row pinguin">

    <!-- Grid bagian kiri | Kontainer utama -->
    
    <div class="left-container">
    <!-- Thread -->
   
    
       <div id="forum-content">
        <h3>Forum</h3>
         <?php
        $forum = $this->db_forum->ambilForumm();
          $hitfor = count($forum);
          for ($i=0; $i < $hitfor; $i++) { 
            $id_forum = $forum[$i]->id_forum;
            $nama_forum = $forum[$i]->forum_name;
            echo "$nama_forum";
      
           $kat = $this->db_forum->ambilKat($id_forum);
              $hitkat = count($kat);
                for ($j=0; $j < $hitkat; $j++) { 
                  $id_kategori = $kat[$j]->id_category;
                  $id_for = $kat[$j]->forum_id;
                  $kategori = $kat[$j]->category_desc;
                  echo "<br>&nbsp;&nbsp;&nbsp;&nbsp; $kategori<br>";
                  $sub = $this->db_forum->ambilSub($id_for,$id_kategori);
                  $hitsub = count($sub);

                    for ($k=0; $k < $hitsub; $k++) { 
                      $id_for = $sub[$k]->id_forum;
                      $id_kategori = $sub[$k]->id_kategori;
                      $id_subforum = $sub[$k]->id_sub;
                      $subfrm = $sub[$k]->subforum;
                      ?>

                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url('forum/detailforum/').$id_for&&.$id_kategori;?>"><?php echo $subfrm; ?></a><br>
                    <?php
                    }
                   
      }
     
    }


              ?>

        <ul class="forum-list">
          <li class="network">
            <a href="#">Network</a>
            <ul class="network-list">
              <li><a href="http://balapa.com">#1 Networks</a></li>
              <li><a href="">#2 Networks</a></li>
              <li><a href="">#3 Networks</a></li>
              <li><a href="">#4 Networks</a></li>
              <li><a href="">#5 Networks</a></li>
            </ul>
          </li>
          <li class="os">
            <a href="#">Operating System</a>
            <ul class="os-list">
              <li><a href="">#1 OS</a></li>
              <li><a href="">#2 OS</a></li>
              <li><a href="">#3 OS</a></li>
            </ul>
          </li>
          <li class="web">
            <a href="#">Website Development</a>
            <ul class="web-list">
              <li><a href="">#1 Web</a></li>
              <li><a href="">#2 Web</a></li>
              <li><a href="">#3 Web</a></li>
            </ul>
          </li>
        </ul>
      </div>
        
          <!-- End Thread -->
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
    <script type="text/javascript">
(function(){
  console.log("lol");
  $(".network, .os, .web").on("click", function(){
    $(this).toggleClass("open");
    $(this).siblings().removeClass("open");
  });
})();
</script>