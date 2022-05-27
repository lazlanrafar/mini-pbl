<?php
require 'config/index.php';
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( tambahPetugas($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'petugas.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'petugas.php';
			</script>
		";
	}


}
?>

<!DOCTYPE html>
<html class="loading" lang="en">
  <?php require 'partials/head.php' ?>
  <body
    class="vertical-layout vertical-menu-modern 2-columns navbar-floating footer-static"
    data-open="click"
    data-menu="vertical-menu-modern"
    data-col="2-columns"
  >
    <?php require 'partials/navbar.php' ?>
    <?php require 'partials/sidebar-petugas.php' ?>

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Tambah Petugas</h4>
                </div>
                <div class="card-body">
                  <form class="form" action="" method="post">
                    <div class="form-body">
                      <div class="row">
                        <div class="col-12">
                          <div class="form-label-group mb-2">
                            <input
                              type="text"
                              id="nama-petugas-floating"
                              class="form-control"
                              placeholder="Nama Petugas"
                              name="nama"
                              required
                            />
                            <label for="nama-petugas-floating"
                              >Nama Petugas</label
                            >
                          </div>
                        </div>
                        <div class="col-7">
                          <div class="form-label-group mb-2">
                            <input
                              type="tempat-lahir"
                              id="tempat-lahir-id-floating"
                              class="form-control"
                              name="tempat_lahir"
                              placeholder="Tempat Lahir"
                              required
                            />
                            <label for="tempat-lahir-id-floating"
                              >Tempat Lahir</label
                            >
                          </div>
                        </div>
                        <div class="col-5">
                          <div class="form-label-group mb-2">
                            <input
                              id="tanggal-lahir-floating"
                              type="date"
                              class="form-control"
                              placeholder="Tanggal Lahir"
                              name="tanggal_lahir"
                              required
                            />
                            <label for="tanggal-lahir-floating"
                              >Tanggal Lahir</label
                            >
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-label-group mb-2">
                            <input
                              type="email"
                              id="email-floating"
                              class="form-control"
                              name="email"
                              placeholder="Email"
                              required
                            />
                            <label for="email-floating">Email</label>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-label-group mb-2">
                            <input
                              type="text"
                              id="telepon-floating"
                              class="form-control"
                              name="telepon"
                              placeholder="Telepon"
                              required
                            />
                            <label for="telepon-floating">Telepon</label>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-label-group mb-2">
                            <textarea
                              type="text"
                              id="alamat-floating"
                              class="form-control"
                              name="alamat"
                              placeholder="Alamat"
                              required
                            ></textarea>
                            <label for="alamat-floating">Alamat</label>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex justify-content-end">
                        <button type="submit" name="submit" class="btn btn-primary mr-1 mb-1">
                          Submit
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <?php require 'partials/footer.php' ?>
    <?php require 'partials/scripts.php' ?>
  </body>
</html>
