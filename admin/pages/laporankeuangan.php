<h1 class="page-header">LAPORAN KEUANGAN</h1>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>#</th>
			<th>Laporan Keuangan</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
 <?php
 $i = 1;
 foreach ($list_keuangan as $lk) { ?>
		<tr>
			<td><?= $i ?></td>
			<td><?= $lk['Laporan'] ?></td>
			<td><a href="list_keuangan.php?id=<?php echo $ib['id_keuangan']?>">Lihat</td>
		</tr>
		<?php  
		$i++;
		} ?>
	</tbody>
</table>