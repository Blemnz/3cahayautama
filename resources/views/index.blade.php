<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>3 CAHAYA UTAMA</title>
    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    {{-- fontsend --}}
    {{-- style --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    {{-- styleend --}}
    {{-- icons --}}
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    {{-- iconsend --}}

    
  </head>
  <body>

    {{-- navbar --}}
    <nav class="navbar fixed-top navbar-expand-lg bg">
        <div class="container-fluid">
          {{-- navbar brand --}}
          <span class="navbar-brand" href="#">
            <img src="img/logo.png" alt="logo" width="70" class="d-inline-block align-text-center">
          </span>
          {{-- end --}}
      
          <div class="hide">
            <button class="btn btn-success">
              <a href="https://wa.me/6285797845026"><img src="img/wa.png" alt="" width="25" height="25" > WhatsApp Me</a>
            </button>
          </div>

          {{-- toggler --}}
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          {{-- end --}}
      
          {{-- link in toggler --}}
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto">
              <li class="nav-item px-1">
                <a class="nav-link" href="#home">Home</a>
              </li>
              <li class="nav-item px-1">
                <a class="nav-link" href="#products">produk</a>
              </li> 
              <li class="nav-item px-1">
                <a class="nav-link" href="#contact">Kontak</a>
              </li> 
              <li class="nav-item px-1 wa hide2">
                <button class="btn btn-success">
                  <a href="https://wa.me/6285797845026"><img src="img/wa.png" alt="" width="25" height="25" > WhatsApp Me</a>
                </button>
              </li>
            </ul>
            
            {{-- <button class="btn btn-outline-success" type="submit"><i data-feather="shopping-cart"></i></button> --}}
          </div>
          {{-- end --}}
        </div>
      </nav>
      {{-- navbar end --}}
    {{-- hero --}}
    <section class="hero" id="home">
      <main>
        <div class="content">
          <h2>BATARINGAN BANDUNG PROMO HARGA 475.000/M3 Pembayaran COD </h2>
          <h2>MINIMAL PEMESANAN 12,6 KUBIK KIRIMAN LANGSUNG PABRIK</h2>
          <h2>GRADE A</h2>
          <h2>KAMI DISTRIBUTOR BATARINGAN UNTUK MELAYANI WILAYAH JAWA BARAT</h2>
          <h2>BEKASI CIKARANG CIBITUNG KARAWANG BANDUNG SUBANG CIKAMPEK PURWAKARTA GARUT TASIKMALAYA</h2>
          <h3>085797845026</h3>
        </div>
      </main>
    </section>
    {{-- end --}}
    {{-- about --}}
    
    {{-- end --}}
    <section class="products" id="products">
      <h2>produk</h2>
      <div class="container-fluid">
        <div class="row justify-content-around">
          @foreach ($data as $product)
          <div class="col-md-4 py-2">
            <div class="card">
              <img src="{{ asset('storage/'.$product->image) }}" class="card-img-top" alt="...">  
              <div class="card-body">
                <h5 class="card-title">{{ $product->product }}</h5>
                <p class="card-text">{{ $product->description }}
                </p>
                <p class="card-text">@currency($product->price)</p>
                {{-- <a href="#" class="btn btn-primary"><i data-feather="shopping-cart"></i> Pesan</a> --}}
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>  
      {{ $data->links() }}
    </section>
    {{-- Contact --}}
    <section class="contacts" id="contact">
      <h2>Kontak <span>Kami</span></h2>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253480.31005988657!2d107.31323608671877!3d-6.934767399999987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9abfc0a1207%3A0xf5e36622741c260e!2sPABRIK%20BATA%20RINGAN%20465.000%2FM3%20Untuk%20pemesanan%2012.6%20M3%2C%20Eceran%20di%20560.000%2FM3!5e0!3m2!1sid!2sid!4v1713177084119!5m2!1sid!2sid"  style="border:0;" class="map" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="col-lg-6">
            <h3>Kontak</h3>
            <div class="contact">
              <h5>Email : <a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=bandungbata@gmail.com">bandungbata@gmail.com</a></h5>
              <h5>Nomor telpon : 085797845026</h5>
              <h5>Alamat : Jl Terusan kopo 350 </h5>
              <button type="button" class="btn btn-success"><a href="https://wa.me/085797845026"><img src="img/wa.png" alt="" width="25" height="25"> WhatsApp</a></button>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- testimoni --}}
    <section class="testimoni" id="testimoni">
      <h2>Testimoni</h2>
        <div class="row pt-5">
          <div class="col-lg-12">
            <div class="card mb-3" >
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="img/tes5.jpg" width="50%" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Testimoni</h5>
                    <p class="card-text">Kiriman cepat barang bagus bisa COD ..makasih gan</p>
                  </div>
                </div>
              </div>
            </div>  
          </div>
          <div class="col-lg-12">
            <div class="card mb-3" >
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="img/tes6.jpg" width="50%" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Testimoni</h5>
                    <p class="card-text">kualitas bagus ..harga pabrik</p>
                  </div>
                </div>
              </div>
            </div>  
          </div>          
        </div>
      </div>
    </section>
    {{-- end --}}
    <section class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 link">
          <a href="#home">Home</a>
          <a href="#products">produk</a>
          <a href="#contact">Kontak</a>
          <a href="#testimoni">Testimoni</a>
          </div>
          <div class="col-md-12 py-2 credit">
            <p>Created By Zenamudin | &copy
              2024.
            </p>
          </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script>
        feather.replace();
    </script>
  </body>
</html>

