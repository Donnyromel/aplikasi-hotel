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
                        <a class="nav-link active" aria-current="page" href="#kamar">Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#fasilitas">Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#about">About</a>
                    </li>
                    <li class="nav-item">
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

      </section>
    </div>
    </div>
    <br>

                <div class="banner text-center">
                <section class="py
                -5" id="kamar">
        <div class="container">
            <div class="row">
                <h1>Kamar</h1>
            </div>
            
    </div>
    </div>
    </div>
    </div>
    <br>

   
        <div class="container">
            <div class="row">
                <div class="col-sm-3 ">
                    <div class="card">
                    <img class="card-img-top" src="<?php echo base_url() ?>/assets/img/kamar8.jpg">
                        <div class="card-body">
                        <h6 class="card-title">Single Room</h6>
                            <img class="mb-2 me-2" src="<?php echo base_url() ?>/assets/icon/wifi.png" alt="Icon 1" width="10%" />
                            <img class="mb-2 me-2" src="<?php echo base_url() ?>/assets/icon/ac.png" alt="Icon 1" width="10%" />
                            <img class="mb-2 me-2" src="<?php echo base_url() ?>/assets/icon/television.png" alt="Icon 1" width="10%" />
                            <img class="mb-2 me-2" src="<?php echo base_url() ?>/assets/icon/air.png" alt="Icon 1" width="10%" />
                            <img class="mb-2" src="<?php echo base_url() ?>/assets/icon/kopi.png" alt="Icon 1" width="10%" />
                            <img class="mb-2" src="<?php echo base_url() ?>/assets/icon/telpon.png" alt="Icon 1" width="10%" />
                            <p class="card-text">Kamar ukuran 37m2, TV, AC, Kamar Mandi, Telepon, Kopi, & Air Mineral</p>
                            <strong>Rp.250.000</strong>
                            </br>
                            </br> 
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Booking</button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Fasilitas Hotel</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="post" action="<?php echo base_url('reservasi/simpan') ?>">
                                                <div class="mb-3">
                                                <label for="check_in" class="form-label">Check in</label>
                                                <input type="date" class="form-control" name="check_in">
                                                </div>
                                                <div class="mb-3">
                                                <label for="time_in" class="form-label">Jam Masuk</label>
                                                <input type="time" class="form-control" name="time_in">
                                                </div>
                                                <div class="mb-3">
                                                <label for="check_out" class="form-label">Check Out</label>
                                                <input type="date" class="form-control" name="check_out">
                                                </div>
                                                <div class="mb-3">
                                                <label for="time_out" class="form-label">Jam Keluar</label>
                                                <input type="time" class="form-control" name="time_out">
                                                </div>
                                                <div class="mb-3">
                                                <label for="biaya" class="form-label">Biaya</label>
                                                <input type="text" class="form-control" name="biaya">
                                                </div>
                                                <button type="submit" class="btn btn-sm btn-primary">Pesan sekarang</button>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 ">
                    <div class="card">
                    <img class="card-img-top" src="<?php echo base_url() ?>/assets/img/kamar1.jpg">
                        <div class="card-body">
                        <h6 class="card-title">Double Room</h6>
                            <img class="mb-2 me-2" src="<?php echo base_url() ?>/assets/icon/wifi.png" alt="Icon 1" width="10%" />
                            <img class="mb-2 me-2" src="<?php echo base_url() ?>/assets/icon/ac.png" alt="Icon 1" width="10%" />
                            <img class="mb-2 me-2" src="<?php echo base_url() ?>/assets/icon/television.png" alt="Icon 1" width="10%" />
                            <img class="mb-2 me-2" src="<?php echo base_url() ?>/assets/icon/air.png" alt="Icon 1" width="10%" />
                            <img class="mb-2" src="<?php echo base_url() ?>/assets/icon/kopi.png" alt="Icon 1" width="10%" />
                            <img class="mb-2" src="<?php echo base_url() ?>/assets/icon/telpon.png" alt="Icon 1" width="10%" />
                            <img class="mb-2" src="<?php echo base_url() ?>/assets/icon/bath.png" alt="Icon 1" width="10%" />
                            <p class="card-text">Kamar ukuran 40m2, TV, AC, Wifi, bed/twin bed, breakfast, kopi/teh & air mineral, kamar mandi, bathtub dan air panas</p>
                            <strong>Rp.500.000</strong>
                            </br>
                            </br>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Booking</button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Fasilitas Hotel</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="post" action="<?php echo base_url('reservasi/simpan') ?>">
                                                <div class="mb-3">
                                                <label for="check_in" class="form-label">Check in</label>
                                                <input type="date" class="form-control" name="check_in">
                                                </div>
                                                <div class="mb-3">
                                                <label for="time_in" class="form-label">Jam Masuk</label>
                                                <input type="time" class="form-control" name="time_in">
                                                </div>
                                                <div class="mb-3">
                                                <label for="check_out" class="form-label">Check Out</label>
                                                <input type="date" class="form-control" name="check_out">
                                                </div>
                                                <div class="mb-3">
                                                <label for="time_out" class="form-label">Jam Keluar</label>
                                                <input type="time" class="form-control" name="time_out">
                                                </div>
                                                <button type="submit" class="btn btn-sm btn-primary">Pesan sekarang</button>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 ">
                    <div class="card">
                    <img class="card-img-top" src="<?php echo base_url() ?>/assets/img/kamar2.jpg">
                        <div class="card-body">
                        <h6 class="card-title">Twin Room</h6>
                            <img class="mb-2 me-2" src="<?php echo base_url() ?>/assets/icon/wifi.png" alt="Icon 1" width="10%" />
                            <img class="mb-2" src="<?php echo base_url() ?>/assets/icon/ac.png" alt="Icon 1" width="10%" />
                            <img class="mb-2 me-2" src="<?php echo base_url() ?>/assets/icon/television.png" alt="Icon 1" width="10%" />
                            <img class="mb-2 me-2" src="<?php echo base_url() ?>/assets/icon/bath.png" alt="Icon 1" width="10%" />
                            <img class="mb-2" src="<?php echo base_url() ?>/assets/icon/room-service.png" alt="Icon 1" width="10%" />
                            <img class="mb-2" src="<?php echo base_url() ?>/assets/icon/air.png" alt="Icon 1" width="10%" />
                            <img class="mb-2" src="<?php echo base_url() ?>/assets/icon/kopi.png" alt="Icon 1" width="10%" />
                            <img class="mb-2" src="<?php echo base_url() ?>/assets/icon/telpon.png" alt="Icon 1" width="10%" />
                            <img class="mb-2" src="<?php echo base_url() ?>/assets/icon/cleaning.png" alt="Icon 1" width="10%" />
                            <img class="mb-2" src="<?php echo base_url() ?>/assets/icon/swimming.png" alt="Icon 1" width="10%" />
                            <p class="card-text">Kamar ukuran 45m2, TV, AC, telepon, wifi, kamar mandi, bathtub, air panas, cleaning service, breakfast, swimming pool, air mineral & kopi/teh</p>
                            <strong>Rp.750.000</strong>
                            </br>
                            </br> 

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Booking</button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Fasilitas Hotel</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="post" action="<?php echo base_url('reservasi/simpan') ?>">
                                                <div class="mb-3">
                                                <label for="check_in" class="form-label">Check in</label>
                                                <input type="date" class="form-control" name="check_in">
                                                </div>
                                                <div class="mb-3">
                                                <label for="time_in" class="form-label">Jam Masuk</label>
                                                <input type="time" class="form-control" name="time_in">
                                                </div>
                                                <div class="mb-3">
                                                <label for="check_out" class="form-label">Check Out</label>
                                                <input type="date" class="form-control" name="check_out">
                                                </div>
                                                <div class="mb-3">
                                                <label for="time_out" class="form-label">Jam Keluar</label>
                                                <input type="time" class="form-control" name="time_out">
                                                </div>
                                                <button type="submit" class="btn btn-sm btn-primary">Pesan sekarang</button>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 ">
                    <div class="card">
                    <img class="card-img-top" src="<?php echo base_url() ?>/assets/img/kamar3.jpg">
                        <div class="card-body">
                        <h6 class="card-title">Family Room</h6>
                            <img class="mb-2 me-2" src="<?php echo base_url() ?>/assets/icon/wifi.png" alt="Icon 1" width="10%" />
                            <img class="mb-2" src="<?php echo base_url() ?>/assets/icon/ac.png" alt="Icon 1" width="10%" />
                            <img class="mb-2 me-2" src="<?php echo base_url() ?>/assets/icon/television.png" alt="Icon 1" width="10%" />
                            <img class="mb-2 me-2" src="<?php echo base_url() ?>/assets/icon/bath.png" alt="Icon 1" width="10%" />
                            <img class="mb-2" src="<?php echo base_url() ?>/assets/icon/room-service.png" alt="Icon 1" width="10%" />
                            <img class="mb-2" src="<?php echo base_url() ?>/assets/icon/air.png" alt="Icon 1" width="10%" />
                            <img class="mb-2" src="<?php echo base_url() ?>/assets/icon/kopi.png" alt="Icon 1" width="10%" />
                            <img class="mb-2" src="<?php echo base_url() ?>/assets/icon/swimming.png" alt="Icon 1" width="10%" />
                            <img class="mb-2" src="<?php echo base_url() ?>/assets/icon/cleaning.png" alt="Icon 1" width="10%" />
                            <img class="mb-2" src="<?php echo base_url() ?>/assets/icon/parking-area.png" alt="Icon 1" width="10%" />
                            <p class="card-text">Kamar ukuran 47m2, TV, AC, telepon, wifi, kamar mandi, bathtub, air panas, cleaning service, breakfast, swimming pool, parkir area dan air mineral & kopi/teh</p>
                            <strong>Rp.1.000.000</strong>
                            </br>
                            </br>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Booking</button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Fasilitas Hotel</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="post" action="<?php echo base_url('reservasi/simpan') ?>">
                                                <div class="mb-3">
                                                <label for="check_in" class="form-label">Check in</label>
                                                <input type="date" class="form-control" name="check_in">
                                                </div>
                                                <div class="mb-3">
                                                <label for="time_in" class="form-label">Jam Masuk</label>
                                                <input type="time" class="form-control" name="time_in">
                                                </div>
                                                <div class="mb-3">
                                                <label for="check_out" class="form-label">Check Out</label>
                                                <input type="date" class="form-control" name="check_out">
                                                </div>
                                                <div class="mb-3">
                                                <label for="time_out" class="form-label">Jam Keluar</label>
                                                <input type="time" class="form-control" name="time_out">
                                                </div>
                                                <button type="submit" class="btn btn-sm btn-primary">Pesan sekarang</button>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

</section>
    </div>
    </div>
    <br>

                <div class="banner text-center">
                <section class="py-5" id="fasilitas">
        <div class="container">
            <div class="row">
                <h1>Fasilitas</h1>
            </div>
            
    </div>
    </div>
    </div>
    </div>
    <br>

   
        <div class="container">
            <div class="row">
                <div class="col-sm-3 ">
                    <div class="card">
                    <img class="card-img-top" src="<?php echo base_url() ?>/assets/img/food.jpg">
                        <div class="card-body">
                        <h6 class="card-title">Breakfast</h6>
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Fasilitas Hotel</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="post" action="<?php echo base_url('reservasi/simpan') ?>">
                                                <div class="mb-3">
                                                <label for="check_in" class="form-label">Check in</label>
                                                <input type="date" class="form-control" name="check_in">
                                                </div>
                                                <div class="mb-3">
                                                <label for="time_in" class="form-label">Jam Masuk</label>
                                                <input type="time" class="form-control" name="time_in">
                                                </div>
                                                <div class="mb-3">
                                                <label for="check_out" class="form-label">Check Out</label>
                                                <input type="date" class="form-control" name="check_out">
                                                </div>
                                                <div class="mb-3">
                                                <label for="time_out" class="form-label">Jam Keluar</label>
                                                <input type="time" class="form-control" name="time_out">
                                                </div>
                                                <div class="mb-3">
                                                <label for="biaya" class="form-label">Biaya</label>
                                                <input type="text" class="form-control" name="biaya">
                                                </div>
                                                <button type="submit" class="btn btn-sm btn-primary">Pesan sekarang</button>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 ">
                    <div class="card">
                    <img class="card-img-top" src="<?php echo base_url() ?>/assets/img/kolam.jpg">
                        <div class="card-body">
                        <h6 class="card-title">Swimming Pool</h6>
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Fasilitas Hotel</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="post" action="<?php echo base_url('reservasi/simpan') ?>">
                                                <div class="mb-3">
                                                <label for="check_in" class="form-label">Check in</label>
                                                <input type="date" class="form-control" name="check_in">
                                                </div>
                                                <div class="mb-3">
                                                <label for="time_in" class="form-label">Jam Masuk</label>
                                                <input type="time" class="form-control" name="time_in">
                                                </div>
                                                <div class="mb-3">
                                                <label for="check_out" class="form-label">Check Out</label>
                                                <input type="date" class="form-control" name="check_out">
                                                </div>
                                                <div class="mb-3">
                                                <label for="time_out" class="form-label">Jam Keluar</label>
                                                <input type="time" class="form-control" name="time_out">
                                                </div>
                                                <div class="mb-3">
                                                <label for="biaya" class="form-label">Biaya</label>
                                                <input type="text" class="form-control" name="biaya">
                                                </div>
                                                <button type="submit" class="btn btn-sm btn-primary">Pesan sekarang</button>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 ">
                    <div class="card">
                    <img class="card-img-top" src="<?php echo base_url() ?>/assets/img/ob.jpg">
                        <div class="card-body">
                        <h6 class="card-title">Cleaning Service</h6>
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Fasilitas Hotel</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="post" action="<?php echo base_url('reservasi/simpan') ?>">
                                                <div class="mb-3">
                                                <label for="check_in" class="form-label">Check in</label>
                                                <input type="date" class="form-control" name="check_in">
                                                </div>
                                                <div class="mb-3">
                                                <label for="time_in" class="form-label">Jam Masuk</label>
                                                <input type="time" class="form-control" name="time_in">
                                                </div>
                                                <div class="mb-3">
                                                <label for="check_out" class="form-label">Check Out</label>
                                                <input type="date" class="form-control" name="check_out">
                                                </div>
                                                <div class="mb-3">
                                                <label for="time_out" class="form-label">Jam Keluar</label>
                                                <input type="time" class="form-control" name="time_out">
                                                </div>
                                                <div class="mb-3">
                                                <label for="biaya" class="form-label">Biaya</label>
                                                <input type="text" class="form-control" name="biaya">
                                                </div>
                                                <button type="submit" class="btn btn-sm btn-primary">Pesan sekarang</button>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 ">
                    <div class="card">
                    <img class="card-img-top" src="<?php echo base_url() ?>/assets/img/parkir.jpg">
                        <div class="card-body">
                        <h6 class="card-title">Parking Area</h6>
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Fasilitas Hotel</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="post" action="<?php echo base_url('reservasi/simpan') ?>">
                                                <div class="mb-3">
                                                <label for="check_in" class="form-label">Check in</label>
                                                <input type="date" class="form-control" name="check_in">
                                                </div>
                                                <div class="mb-3">
                                                <label for="time_in" class="form-label">Jam Masuk</label>
                                                <input type="time" class="form-control" name="time_in">
                                                </div>
                                                <div class="mb-3">
                                                <label for="check_out" class="form-label">Check Out</label>
                                                <input type="date" class="form-control" name="check_out">
                                                </div>
                                                <div class="mb-3">
                                                <label for="time_out" class="form-label">Jam Keluar</label>
                                                <input type="time" class="form-control" name="time_out">
                                                </div>
                                                <div class="mb-3">
                                                <label for="biaya" class="form-label">Biaya</label>
                                                <input type="text" class="form-control" name="biaya">
                                                </div>
                                                <button type="submit" class="btn btn-sm btn-primary">Pesan sekarang</button>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </section>
    </div>
    </div>
    <br>

            
    </div>
    </div>
    </div>
    </div>
    <br>

   
    
<!-- Footer -->
<footer class="bg-dark text-center text-white">
<!-- Grid container -->
<div class="container p-4">
<section class="py-5" id="about">
<!-- Section: Social media -->
<section class="mb-4">
  <!-- Ig -->

  <img class="mb-2 me-" src="<?php echo base_url() ?>/assets/icon/ig.png" alt="Icon 1" width="4%" />


  <!-- Fb -->
  
  <img class="mb-2 me-" src="<?php echo base_url() ?>/assets/icon/fb.png" alt="Icon 1" width="4%" />

  <!-- Google -->
  
  <img class="mb-2 me-" src="<?php echo base_url() ?>/assets/icon/google.png" alt="Icon 1" width="4%" />

  <!-- Wa -->
  
  <img class="mb-2 me-" src="<?php echo base_url() ?>/assets/icon/wa.png" alt="Icon 1" width="4%" />

  <!-- Linkedin -->
 
  <img class="mb-2 me-" src="<?php echo base_url() ?>/assets/icon/twitter.png" alt="Icon 1" width="4%" />

 
</section>
<!-- Section: Social media -->



<!-- Section: Text -->
<section class="mb-4">
  <p>
  Booking Hotel Online, Harga Murah & Banyak Promo di Traveloka
  HotelKu adalah aplikasi berbasis webyang menyediakan layanan serta reservasi hotel dengann murah,aman, dan terpecaya di Indonesia. 
  Terdapat berbagai macam hotel unggulan yang harganya dilengkapi dengan fasilitas terbaik. 
  Karena itu, aplikasi pemesanan hotel ini selalu jadi pilihan terbaik untuk pesan hotel unggulan di Indonesia. 
  Tidak  perlu bingung dalam menggunakan aplikasi ini,  karena aplikasi ini sudah dibuat user friendly.
Tunggu apalagi, mari gunakan HotelKU
  </p>
</section>
</div>
</div>
</div>
<!-- Section: Text -->



<!-- Copyright -->
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
 Copyright © 2022 HotelKu
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->
</div>
</div>
</div>




<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>