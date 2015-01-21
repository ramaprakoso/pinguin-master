<table class="table table-bordered">
        <thead>
          <tr>
            <th>Kategori</th>
            <th>Thread</th>
            <th>Posting</th>
            <th>Post terakhir</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach($category as $row){
          ?>
          <tr> <!-- Baris / row, kalo td nya kolom -->
            <td><a href="<?php echo site_url();?>dashboard/thread/<?php echo $row->id_cat;?>" class="kategori"><?php echo $row->category;?></a><br>
            <p class="deks"><?php echo $row->deskripsi;?></p></td>
            <td><?php echo $row->total_thread;?></td>
            <td><?php echo $row->total_comment;?></td>
            <td>Oleh <a href="#user" class="user"><?php echo $row->username;?></a><br><span><?php echo $row->waktu_terasuakhir;?></span>
            </td>
          </tr>
          <?php
          }
          ?>  
        
            
        </tbody>
      </table>