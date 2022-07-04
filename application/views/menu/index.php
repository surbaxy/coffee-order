<div>
	<h1 style="text-align: center; padding-top:25px">Menu Makanan dan Minuman</h1>
</div>
<div id="menu" class="menu">
	<div class="container">
		<div class="row mt-5">
			<?php foreach ($menu as $m) : ?>
				<div class="col-lg-3">
					<div class="shadow p-3 mb-5 bg-white">
						<img src="<?= base_url('assets/img/menu/') . $m['image']; ?>" class="img-fluid">
						<div class="text-center mt-3">
							<h5><?= $m['kopi']; ?></h5>
							<p>IDR <?= number_format($m['harga'],2,',','.'); ?></p>
							<a href="<?= base_url('menu/pesan/') . $m['id']; ?>" class="btn btn-pesan" style="background-color: darkorange;"">Pesan</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="row justify-content-center mt-2">
			<?= $this->pagination->create_links(); ?>
		</div>
	</div>
</div>