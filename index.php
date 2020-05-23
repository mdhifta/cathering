<?php
	include"inc/config.php";
	include"layout/header.php";
?>

		<div class="col-md-9">
			<div class="row">
			<div class="col-md-12">
			<h3>Favorite Menu</h3>

	<?php
					$i=0;
				  $result = $mysqli->query('SELECT * FROM produk ORDER BY id ASC limit 3');
					// $sql = mysqli_query("");
					if($result === FALSE){
            die(mysql_error());
          }

				while($obj = $result->fetch_object()){
						echo '<div class="col-md-4 content-menu">';
						echo '<a href="<?php echo $url; ?>menu.php?id='.$obj->id.'">';
						echo '			<img src="uploads/'.$obj->gambar.'"/>';
						echo '			<h4>'.$obj->nama.'</h4>';
						echo '		</a>';
						echo '<p>'.$obj->deskripsi.'</p>';
						echo '<p style="font-size:18px">Harga :'.$obj->harga.'</p>';
						echo '<p>
										<a href="<?php echo $url; ?>menu.php?id='.$obj->id.'?>" class="btn btn-success btn-sm" href="#" role="button">Lihat Detail</a>
										<a href="<?php echo $url; ?>keranjang.php?act=beli&&produk_id='.$obj->id.'?>" class="btn btn-info btn-sm" href="#" role="button">Pesan</a>
									</p>';
						echo '</div>';

						$i++;
				}
			?>



			</div>
			</div>
			<div class="row">
			<div class="col-md-12">
			<hr>
			<h3>Menu Terbaru</h3>
			<?php
					$i=0;
					$result = $mysqli->query('SELECT * FROM produk ORDER BY id DESC limit 3');
					// $k = mysqli_query("");
					while($obj = $result->fetch_object()){
						echo '<div class="col-md-4 content-menu">';
						echo '	<a href="<?php echo $url; ?>menu.php?id='.$obj->id.'?>">';
						echo '		<img src="uploads/'.$obj->gambar.'" width="100%">';
						echo '		<h4>'.$obj->nama.'</h4>';
						echo '	</a>';
						echo '	<p style="font-size:18px">Harga :'.$obj->harga.'</p>';
						echo '	<p>';
						echo '		<a href="<?php echo $url; ?>menu.php?id='.$obj->id.'" class="btn btn-success btn-sm" href="#" role="button">Lihat Detail</a>';
						echo '		<a href="<?php echo $url; ?>keranjang.php?act=beli&&produk_id='.$obj->id.'" class="btn btn-info btn-sm" href="#" role="button">Pesan</a>';
						echo '	</p>';
						echo '</div>';
						$i++;
				}
			?>

			</div>
			</div>
		</div>

    <?php include"layout/footer.php"; ?>
