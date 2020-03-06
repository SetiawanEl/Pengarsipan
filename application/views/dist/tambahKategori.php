<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Tambah Kategori</h1>
          </div>
          <div class="card">
                  <div class="card-header">
                    <h4>Tambah Kategori</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="Nama_Kategori">Nama Kategori</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Tambahkan Nama Kategori">
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-primary">Submit</button>
                  </div>
                </div>
          <div class="section-body">
          </div>
        </section>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>