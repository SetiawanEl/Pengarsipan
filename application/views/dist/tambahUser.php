<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Tambah File</h1>
          </div>
          <div class="card">
                  <div class="card-header">
                    <h4>Tambah File</h4>
                  </div>
                  <div class="card-body">
                      <div class="form-group col-md-6">
                        <label for="Username">Username</label>
                        <input type="text" class="form-control" id="Username" placeholder="Email">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
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