<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>HotelKu</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
        <img class="d-block mx-auto mb-4" src="<?php echo base_url() ?>/assets/icon/oyo.png" alt="" width="50" height="50">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="<?php echo base_url() ?>/assets/icon/hotel.png" alt="" width="72" height="57">
    <h1 class="display-5 fw-bold">HotelKu</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Aplikasi penyedia layanan pemesanan Hotel yang aman, mudah, dan terpecaya untuk customer yang kami hormati.</p>
      </div>
    
      <div class="box py-5">
            <div class="container">
              <div class="alert alert-primary" role="alert">
                Masukkan Data Diri anda terlebih dahulu
              </div>
              <form method="post" action="<?php echo base_url('tamu/simpan') ?>">
              <div class="mb-3">
                                                <label for="nik" class="form-label">NIK</label>
                                                <input type="text" class="form-control" name="nik">
                                                </div>
                                                <div class="mb-3">
                                                <label for="nama_depan" class="form-label">Nama Lengkap</label>
                                                <input type="text" class="form-control" name="nama_lengkap">
                                                </div>
                                                <div class="mb-3">
                                                <label for="tipe_identitas" class="form-label">Tipe Identitas</label>
                                                <select class="form-control" style="width: 100%;" name="tipe_identitas">
                                                    <option selected="selected">- Pilih -</option>
                                                    <option value="KTP">KTP</option>
                                                    <option value="SIM">SIM</option>
                                                    <option value="PASSPORT">PASSPORT</option>
                                                </select>
                                                </div>
                                                <div class="mb-3">
                                                <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                                                <select class="form-control" style="width: 100%;" name="kewarganegaraan">
                                                    <option selected="selected">- Pilih -</option>
                                                    <option value="WNI">WNI</option>
                                                    <option value="WNA">WNA</option>
                                                </select>
                                                </div>
                                                <div class="mb-3">
                                                <label for="nomor_identitas" class="form-label">Alamat</label>
                                                <input type="text" class="form-control" name="alamat">
                                                </div>
                                                <div class="mb-3">
                                                <label for="email" class="form-label">Provinsi</label>
                                                <input type="text" class="form-control" name="provinsi">
                                                </div>
                                                <div class="mb-3">
                                                <label for="nomor_identitas" class="form-label">Telepon</label>
                                                <input type="text" class="form-control" name="no_telp">
                                                </div>
                                                <div class="mb-3">
                                                <label for="nomor_identitas" class="form-label">Email</label>
                                                <input type="text" class="form-control" name="email">
                                                </div>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Pesan sekarang</button>
              </form>
            </div>
          </div>
          

         
          <script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.js"></script>
          <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
          <script>
            AOS.init();
          </script>


        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html> 