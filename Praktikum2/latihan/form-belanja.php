<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
    <div class="row">
		<div class="col-md-6">
        <h2>belanja online</h2>
        <form action="form_hasil.php" method="POST">
        <div class="form-group row">
                <label for="customer" class="col-4 col-form-label">CUSTOMER</label> 
                <div class="col-8">
                <input id="customer" name="customer" placeholder="Nama Customer" type="text" required="required" class="form-control">
                </div>
        </div>
        <div class="form-group row">
            <label class="col-4">PILIH PRODUK</label>
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required="required"> 
                    <label for="produk_0" class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas" required="required"> 
                    <label for="produk_1" class="custom-control-label">KULKAS</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required"> 
                    <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label">JUMLAH</label> 
                <div class="col-8">
                <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            </div>
            </form>
		</div>
		<div class="col-md-6">
			<div class="list-group">
				 <a href="#" class="list-group-item list-group-item-action active">daftar harga</a>
				<div class="list-group-item">
					TV: Rp. 4.200.000
				</div>
				<div class="list-group-item">
					<p class="list-group-item-text">
						Kulkas: Rp. 3.100.000
					</p>
				</div>
				<div class="list-group-item justify-content-between">
					Mesin cuci : Rp.3.800.000
				</div> <a href="#" class="list-group-item list-group-item-action active justify-content-between">harga dapat berubah setiap saat</a>
			</div>
		</div>
	</div>
    <hr>
</body>
</html>