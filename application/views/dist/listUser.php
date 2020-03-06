<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>List Pengguna</h1>
          </div>
          <div class="card">
                  <div class="card-header">
                    <h4>Pengguna</h4>
                  </div>
                  <div class="card-body">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Username</th>
                          <th scope="col">Password</th>
                          <th scope="col">E-mail</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Sapto</td>
                          <td>Password</td>
                          <td>ggg@email.com</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Saptyo</td>
                          <td>Password</td>
                          <td>ggg@email.com</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Sapgo</td>
                          <td>Password</td>
                          <td>ggg@email.com</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
          <div class="section-body">
          </div>
        </section>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>