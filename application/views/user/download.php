<div class="row pinguin">


<div class="left-container">
    <!-- Thread -->
   <div class="left-modul download-modul">
        <h4 class="title">Download sebanyak yang kau bisa</h4>
        <p class="wtsay">Di pinguin terdapat file-file open-source yang dapat kamu gunakan untuk project ataupun sekedar belajar. Jadilah downloader yang budiman.</p>
        <div class="container-table">
        <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Tanggal diunggah</th>
            <th>Download</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Ubuntu</td>
            <td>12 April 2008</td>
            <td><a class="download" href="#"><i class="glyphicon glyphicon-download-alt"></i></a></td>
          </tr>
          <tr>
            <td>FreeBSD</td>
            <td>6 Agustus 2011</td>
            <td><a class="download" href="#"><i class="glyphicon glyphicon-download-alt"></i></a></td>
          </tr>
          <tr>
            <td>Packet tracer</td>
            <td>16 Desember 2011</td>
            <td><a class="download" href="#"><i class="glyphicon glyphicon-download-alt"></i></a></td>
          </tr>
          <tr>
            <td>Mastering javascript</td>
            <td>11 Januari 2013</td>
            <td><a class="download" href="#"><i class="glyphicon glyphicon-download-alt"></i></a></td>
          </tr>
            <tr>
            <td>Laravel guide</td>
            <td>25 Maret 2013</td>
            <td><a class="download" href="#"><i class="glyphicon glyphicon-download-alt"></i></a></td>
          </tr>
            <tr>
            <td>Oracle</td>
            <td>5 Oktober 2013</td>
            <td><a class="download" href="#"><i class="glyphicon glyphicon-download-alt"></i></a></td>
          </tr>
            <tr>
            <td>Bootstrap</td>
            <td>19 Februari 2014</td>
            <td><a class="download" href="#"><i class="glyphicon glyphicon-download-alt"></i></a></td>
          </tr>
            <tr>
            <td>Foundation</td>
            <td>19 Februari 2014</td>
            <td><a class="download" href="#"><i class="glyphicon glyphicon-download-alt"></i></a></td>
          </tr>
        </tbody>
      </table>
      </div>
        </div>    <!-- End Thread -->
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