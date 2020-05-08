<?php 
	
	require "../function.php";

  $keyword = $_GET["keyword"];
  $query = "SELECT * FROM apotek WHERE
                  nama LIKE '%".$keyword."%' OR
                  alamat LIKE '%".$keyword."%'
                ";
  $apotek = query($query);

 ?>
<tr class="rounded-top">
	<th class="rounded-top"></th>
	<?php 
		if ($sortNama == "sortNamaASC" ) {
			$caret = "fa-caret-down";
		}else{
			$caret = "fa-caret-up";
		}
	 ?>
	<th>
		<a href="index.php?page=informasi&&<?= $sortNama; ?>" style="color: #000 !important;">Nama Apotek
		</a>
	</th>
	<th>Alamat</th>
</tr>
 <?php foreach ($apotek as $row ) : ?>
	<tr>
			<td>
				<img src="img/<?= $row['foto']; ?>">
			</td>
			<td style="width: 25%;">
				<a href="index.php?page=informasi&&detail&&id=<?= $row['id']; ?>&&hal=<?= $halaktif ?>">
					<?php echo $row['nama']; ?>
				</a>
			</td>
			<td><?php echo $row['alamat'] ?></td>
	</tr>
 <?php endforeach; ?>