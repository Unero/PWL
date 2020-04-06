<div class="container mt-2">
	<div class="col-md-12">
		<h1 class="text-center mb-3">Data Mahasiswa</h1>
	</div>
	<table class="table table-striped table-bordered" id="list_mhs">
		<thead>
			<tr>
				<th>#</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Jurusan</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$no = 1;
				foreach($mahasiswa as $mhs){ ?>
			<tr>
				<td><?= $no++;?></td>
				<td><?= $mhs->nama;?></td>
				<td><?= $mhs->email;?></td>
				<td><?= $mhs->jurusan;?></td>
			</tr>
				<?php } ?>
		</tbody>
	</table>
</div>
