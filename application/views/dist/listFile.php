<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>List File</h1>
          </div>
          <div class="card">
                  <div class="card-header">
                    <h4>Files</h4>
                  </div>
                  <div class="card-body">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Judul Surat</th>
                          <th scope="col">Kategori</th>
                          <th scope="col">Tanggal masuk</th>
                          <th scope="col">Pengirim</th>
                          <th scope="col">Ditujukan</th>
                          <th scope="col">Deadline</th>
                          <th scope="col">File</th>
                          <th scope="col">Hapus</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Kunjungan</td>
                          <td>Surat Tugas</td>
                          <td>02-08-2020</td>
                          <td>Bank BPD</td>
                          <td>Bapak sapto</td>
                          <td>10-08-2020</td>
                          <td>file</td>
                          <td></td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Kunjungan</td>
                          <td>Surat Tugas</td>
                          <td>02-08-2020</td>
                          <td>Bank BPD</td>
                          <td>Bapak sapto</td>
                          <td>-</td>
                          <td>file</td>
                          <td></td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Kunjungan</td>
                          <td>Surat Tugas</td>
                          <td>02-08-2020</td>
                          <td>Bank BPD</td>
                          <td>Bapak sapto</td>
                          <td>-</td>
                          <td>file</td>
                          <td></td>
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