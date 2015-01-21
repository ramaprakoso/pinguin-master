     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/asset/pagedown/jquery.pagedown-bootstrap.css">

      
<!-- Grid menu -->

<!-- Container grid -->

<div class="row pinguin">
  
    <!-- Grid bagian kiri | Kontainer utama -->
    
  <div class="container">
     <a href="#" class="button-slide">
        <i class="glyphicon glyphicon-pencil detail"></i>
        <div class="detail-wrap"></span> Create New Thread</div>
      </a>
    <div class="center-modul posting-modul posting col-md-10">
    <?php 
if ($this->session->flashdata('pesan')) {
    echo $this->session->flashdata('pesan');
  }else{
    echo validation_errors();
  } 

?>
        <!-- Form --> 
               <form class="form-horizontal" role="form" action="<?php echo site_url('forum/posting');?>" method="POST">
                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Select Forum <i class="star">*</i>&nbsp;&nbsp;:</label>
                  <div class="col-sm-6">

                          <select class="form-control" name="forum">
        <option>Pilih Kategori</option>
       
    <?php
        $forum = $this->db_forum->ambilForumm();
          $hitfor = count($forum);
          for ($i=0; $i < $hitfor; $i++) { 
            $id_forum = $forum[$i]->id_forum;
            $nama_forum = $forum[$i]->forum_name;
            echo "<optgroup label='$nama_forum'>";
      
           $kat = $this->db_forum->ambilKat($id_forum);
              $hitkat = count($kat);
                for ($j=0; $j < $hitkat; $j++) { 
                  $id_kategori = $kat[$j]->id_category;
                  $id_for = $kat[$j]->forum_id;
                  $kategori = $kat[$j]->category_desc;
                  echo "<optgroup label='&nbsp;&nbsp;&nbsp;&nbsp; $kategori'>";
                  $sub = $this->db_forum->ambilSub($id_for,$id_kategori);
                  $hitsub = count($sub);

                    for ($k=0; $k < $hitsub; $k++) { 
                      $id_kategori = $sub[$k]->id_kategori;
                      $id_subforum = $sub[$k]->id_sub;
                      $subfrm = $sub[$k]->subforum;
                        echo "<option  value='$id_subforum'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$subfrm</option>";
                    }
                    echo "</optgroup>";
      }
      echo "</optgroup>";

    }


              ?>

        
      </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Title
                    <i class="star">*</i>&nbsp;&nbsp;:</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="" placeholder="Masukkan Judul" name="title">
            
                  </div>
                </div>

                  <div class="form-group">
                     <label for="" class="col-sm-2 control-label">Body <i class="star">*</i>&nbsp;&nbsp;:</label>
                     <div class="col-sm-9">
                         <div class="container">
                      <textarea id="pagedownMeDangerously" class="form-control" name="thread">
                        Ini adalah Jquery Pagedown

                        Dengan editor ini anda dapat langsung melakukan preview.

                        Tekan enter 2x untuk ganti baris.

                        Untuk modifikasi tampilan bisa dengan script html
                        </textarea>
                      </div>
                      </div>
                    </div>
                    <div class="form-group">

                     

                      </div>
              <!--
                    <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Upload Image</label>
                  <div class="col-sm-4">
                   
                    
</div>
                  </div>
                

                </div>
--> 
               <div class="form-group">
    <label for="judul" class="col-sm-2 control-label">Capcay <i class="star">*</i>&nbsp;&nbsp;:</label></label>

    <div class="col-sm-9">
      <?php echo $cap_img; ?><i>&nbsp;&nbsp;Isi dengan benar sesuai gambar</i>
      <input type="text" name="kode_captcha" id="inputEmail3" placeholder="capcay">
    </div>
  </div>


                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-2">
                    <input type="submit" class="login" name="submit" value="Post" data-original-title="" title="">
                  </div>
                </div>
              </form>


   
    
<!-- Grid bagian kanan | Kontainer utama -->    
  <div class="nav-right"></div>    

</div>
    <!-- Container grid ends! -->

