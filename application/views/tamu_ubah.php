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
              <?php foreach ($tamu->result() as $value): ?>
              <form class="form-horizontal" method="post" action="<?php echo base_url('tamu/update') ?>">
                <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ID Tamu</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" name="id_tamu" value="<?php echo $value->id_tamu; ?>">
                    <input type="hidden" class="form-control" name="nik" value="<?php echo $value->nik; ?>">
                      </div>
                  </div>                
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">NIK</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="nik" value="<?php echo $value->nik; ?>">
                        <input type="hidden" class="form-control" name="id_tamu" value="<?php echo $value->id_tamu; ?>">
                      </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Tamu</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name='nama_lengkap' value="<?php echo $value->nama_lengkap; ?>">
                        <input type="hidden" class="form-control" name="nama_lengkap" value="<?php echo $value->nama_lengkap; ?>">
                      </div>
                      </div>
                      <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="tipe_identitas" placeholder="tipe_identitas" required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kewarganegaraan</label>
                    <div class="col-sm-4">
                      <select class="form-control" style="width: 100%;" name="kewarganegaraan" required>
                        <option value="0" selected>- Pilih -</option>
                        <option value="wni">WNI</option>
                        <option value="wna">WNA</option>
                      </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="alamat" placeholder="alamat" required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Provinsi</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="provinsi" placeholder="provinsi" required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Telepon</label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" name="no_telp" placeholder="no_telp" required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="email" placeholder="email" required>
                    </div>
                  </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                  <button type="reset" class="btn btn-sm btn-default">Reset</button>
                </div>
              </form>
              <?php endforeach; ?>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->