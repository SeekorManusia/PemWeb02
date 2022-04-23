<!DOCTYPE html>
<html lang="ID">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<title>FORM BELANJA</title>
</head>

<body class="bg-light">
	<div class="container-fluid" style="position: fixed; top: 45%; left: 45%; transform: translate(-45%, -45%);">
		<div class="m-auto">
			<h3 class="text-center">FORM BELANJA</h3>
			<hr class="featurette-divider mx-auto">
			<div class="row justify-content-between">
				<form class="col-12 col-md-6 pb-3 pb-md-0" method="POST" action="form_belanja.php">
					<div class="form-group row">
						<label for="customer" class="col-4 col-form-label text-end">Customer</label>
						<div class="col-6">
							<div class="input-group mb-3">
								<input id="customer" name="customer" type="text" class="form-control" value="" placeholder="Nama Customer" aria="Customer" aria-describedby="basic-addon1">
							</div>
						</div>
					</div>
					<div class="form-group row align-items-center">
						<label for="produk" class="col-4 col-form-label text-end">Pilih Produk</label>
						<div class="col-6">
							<div class="form-check form-check-inline">
								<input class="form-check-input" checked type="radio" name="produk" id="inlineRadio1" value="TV">
								<label class="form-check-label" for="inlineRadio1">TV</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="produk" id="inlineRadio2" value="KULKAS">
								<label class="form-check-label" for="inlineRadio2">KULKAS</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="produk" id="inlineRadio3" value="MESIN CUCI">
								<label class="form-check-label" for="inlineRadio3">MESIN CUCI</label>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="jumlah" class="col-4 col-form-label text-end">Jumlah</label>
						<div class="col-6">
							<div class="input-group mb-3">
								<input id="jumlah" name="jumlah" type="number" min="0" class="form-control" value="" placeholder="Jumlah" aria-label="Jumlah" aria-describedby="basic-addon2">
							</div>
						</div>
					</div>
					<div class="form-group row">
						<div class="offset-4 col-6">
							<input type="submit" class="btn btn-success" value="Simpan" name="submit">
						</div>
					</div>
				</form>
				<div class="col-12 col-sm-8 offset-sm-2 col-md-4">
					<ul class="list-group">
						<li class="list-group-item active" aria-current="true">Daftar Harga</li>
						<li class="list-group-item">KULKAS : 6.500.000</li>
						<li class="list-group-item">TV : 6.700.000</li>
						<li class="list-group-item">MESIN CUCI : 5.900.000</li>
						<li class="list-group-item active">Terimakasih</li>
					</ul>
				</div>
			</div>
			<hr class="featurette-divider mx-auto">
		</div>
	</div>
</body>

</html>