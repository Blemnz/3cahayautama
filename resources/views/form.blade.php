<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>3 CAHAYA UTAMA | Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    
    <div class="container-fluid">
        <div class="row py-1 px-4">
            <div class="py-3 d-flex">
                <img src="img/logo.png" alt="" width="6%">
                <h1>Form untuk pemesanan</h1><hr>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="/order" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="nama" class="form-label">Nama</label>
                          <input type="text" class="form-control" id="nama"  name="name" required> 
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Kirim</label>
                            <input type="text" class="form-control" id="alamat" aria-describedby="emailHelp" name="address" required>
                            <div id="emailHelp" class="form-text">Isikan dengan alamat lengkap tujuan kirim</div>
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Produk</label>
                            <select class="form-select" name="product" required>
                                @foreach ($products as $product)
                                <option value="{{ $product->product }}">{{ $product->product }}</option>
                                @endforeach
                            </select>
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Keteranan Produk</label>
                            <select class="form-select" name="description" required>
                                @foreach ($products as $product)
                                <option value="{{ $product->description }}">{{ $product->description }}</option>
                                @endforeach
                            </select>
                          </div>  
                        <button type="submit" class="btn btn-primary">Pesan</button>
                      </form>
                      <div class="my-3">
                        <h3>Catatan</h3><hr>
                        <p>*Free ongkir</p> 
                        <p>*Free jasa bongkar</p>
                        <p>* 130.000 aja ke supir sisanya sudah di untuk bongkar subsidi kantor</p>
                        <p>*pembayaran COD pas barang datang di proyek sebelum di bongkar wajib di transfer</p>
                    </div>
                </div>
              </div>
        </div>
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>