<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Edit File</h1>
          </div>
          <div class="card">
                  <div class="card-header">
                    <h4>Pilih File</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputState">Id File</label>
                        <select id="inputState" class="form-control">
                          <option selected>Choose...</option>
                          <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Judul Surat</label>
                      <input type="text" class="form-control" readonly="">
                    </div>
                    </div>
                </div>
          <div class="section-body">
          </div>
        </section>
        <section class="section">
          <div class="card">
                  <div class="card-header">
                    <h4>Edit File</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="inputAddress">Judul Surat</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="Masukan Judul Surat">
                    </div>
                    <div class="form-group">
                      <label for="inputAddress2">Pengirim</label>
                      <input type="text" class="form-control" id="inputAddress2" placeholder="Masukan Nama Pengirim">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="tglMasuk">Tanggal Masuk</label>
                        <input type="date" class="form-control" id="tglMasuk">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">Kategori</label>
                        <select id="inputState" class="form-control">
                          <option selected>Choose...</option>
                          <option>...</option>
                        </select>
                      </div>
                      <div class="form-group col-md-4">
                        <label for="inputState">Penerima</label>
                        <select id="inputState" class="form-control">
                          <option selected>Choose...</option>
                          <option>...</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="file">Upload File</label>
                      <input type="file" class="form-control" id="file">
                    </div>
                    <div class="form-group">
                      <label for="deadline">Deadline Tugas</label>
                      <input type="date" class="form-control" id="deadline">
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