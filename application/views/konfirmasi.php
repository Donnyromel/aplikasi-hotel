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
    
      <div class="content">   
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0"><?php echo $title; ?></h5>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                      <th>No</th>
                      <th>Id</th>
                      <th>Id Tamu</th>
                      <th>Check In</th>
                      <th>Jam Masuk</th>
                      <th>Check Out</th>
                      <th>Jam Keluar</th>
                      <th>Biaya</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no=0;
                      foreach ($konfirmasi->result() as $value):
                        $no++;
                    ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $value->id_reservasi; ?></td>
                      <td><?php echo $value->id_tamu; ?></td>
                      <td><?php echo $value->check_in ?></td>
                      <td><?php echo $value->time_in ?></td>
                      <td><?php echo $value->check_out ?></td>
                      <td><?php echo $value->time_out ?></td>
                      <td><?php echo $value->biaya ?></td>
                      <td>
                      </td>
                    </tr>
                    <?php 
                      endforeach;
                    ?>
                  </tbody>
                </table> 
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