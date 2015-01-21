	<?php
				foreach ($thread as $key ) {
									
				 ?>
	<div id="thread" class="row">
		<a href="<?php echo site_url('post_reply/reply/'.$key->id_thread); ?>"><button class="btn btn-primary">Post Reply</button></a>
		<div class="col-md-3">
			<div class="user">
				<img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xpf1/v/t1.0-1/c12.0.160.160/p160x160/10520764_10202574242151037_2459714898310431127_n.jpg?oh=2f355596ac457b511229606b6384ab2b&oe=55191DFD&__gda__=1427108312_6691d759d5ad3a2eaa66bddbf354c0a7" alt="User">
				<ul class="user-detail">
					<li>Username : <a href="#"><?php echo $key->username; ?></a></li>
					<li>Status : Noob</li>
					<li>Post : <?php echo $hitung; ?></li>
					<li class="online">Lagi Online, nih!</li>
				</ul>
			</div>
		</div>

		<div class="col-md-9">
			<div class="thread-content">
				
				<h1 class="title"><?php echo $key->thread_title; ?></h1>
				<img src="img/yosemite.jpg" alt="main image">
				<p class="content"><?php echo $key->thread_desc; ?><br></p>
				<?php } ?>
			</div>
		</div>
	</div>
	
	<?php
				foreach ($reply as $mak ) {
									
				 ?>
	<div id="thread" class="row">
		Reply
		<div class="col-md-3">
			<div class="user">
				<img src="" alt="User">
				<ul class="user-detail">
					<li>Username : <a href="#"><?php echo $mak->username; ?></a></li>
					<li>Status : Noob</li>
					<li>Post : <?php echo $hitung; ?></li>
					<li class="online">Lagi Online, nih!</li>
				</ul>
			</div>
		</div>

		<div class="col-md-9">
			<div class="thread-content">
				
				<h1 class="title"><?php echo $mak->title_reply; ?></h1>
				
				<p class="content"><?php echo $mak->isi_reply; ?><br></p>
				
			</div>
		</div>
	</div>
	
<?php } ?>