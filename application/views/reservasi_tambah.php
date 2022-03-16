<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0"><?php echo $subtitle; ?></h5>
              </div>
              <form class="form-horizontal" method="post" action="<?php echo base_url('reservasi/simpan') ?>">
              <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ID Reservasi</label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" name="id_reservasi" placeholder="id reservasi" required>
                    </div>
                  </div>                
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ID Tamu</label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" name="id_tamu" placeholder="id tamu" required>
                    </div>
                  </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Check In</label>
                    <div class="col-sm-8">
                      <input type="date" class="form-control" name="check_in" placeholder="check in" required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jam Masuk</label>
                    <div class="col-sm-8">
                      <input type="time" class="form-control" name="time_in" placeholder="time in" required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Check Out</label>
                    <div class="col-sm-8">
                      <input type="date" class="form-control" name="check_out" placeholder="check out" required>
                    </div>
                   </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jam Keluar</label>
                    <div class="col-sm-8">
                      <input type="time" class="form-control" name="time_out" placeholder="time out" required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Biaya</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="biaya" placeholder="bayar" required>
                    </div>
                  </div>
                    </div>
                  </div>
                
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                <button type="reset" class="btn btn-sm btn-default">Reset</button>
              </div>
            </form>