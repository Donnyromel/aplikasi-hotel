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
              <form class="form-horizontal" method="post" action="<?php echo base_url('kamar_tipe/simpan') ?>">
                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Id kamar</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="id_kamar_tipe" placeholder="id" required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Kamar Tipe</label>
                    <select class="form-control" style="width: 20%;" name="nama_kamar_tipe" required>
                      <option value="0" selected>- Pilih -</option>
                      <option value="Single Room">Single Room</option>
                      <option value="Twin Room">Twin Room</option>
                      <option value="Double Room">Double Room</option>
                      <option value="Family Room">Family Room</option>
                    </select>
                  </div>
                 
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Fasilitas</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="fasilitas" placeholder="fasilitas" required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-8">
                      <input type="file" class="form-control" name="gambar" placeholder="gambar" required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="harga" placeholder="harga" required>
                    </div>
                  </div>
                  </div>
                  <div class="card-footer clearfix">
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-sm btn-default">Reset</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

