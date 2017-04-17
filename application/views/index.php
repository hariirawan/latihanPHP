<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
    <script src="<?php echo base_url().'assets/js/jquery.js';?>" charset="utf-8"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.js';?>" charset="utf-8"></script>
  </head>
  <body>
    <div class="container">
      <h1>Belajar CRUD Menggunakan Codeigniter</h1><br>
      <div class="msg">
        <?php echo $this->session->flashdata('pesan'); ?>
      </div>
      <p><a href="<?php echo base_url().'index.php/mahasiswa/form_add'?>" class="btn btn-primary btn-sm">Tambah Data</a></p>
      <table class="table table-bordered">
        <tr>
          <th>No</th>
          <th>Nim</th>
          <th>Nama</th>
          <th>Semester</th>
          <th>Alamat</th>
          <th>Jenis Kelamin</th>
          <th>Nomor Handpone</th>
          <th>Aksi</th>
        </tr>
        <?php
        $no=1;
        foreach ($data1->result_array() as $d) {
        ?>
        <tr>
          <td ><?php echo $no; ?></td>
          <td><?php echo $d["nim"]; ?></td>
          <td><?php echo $d["nama"]; ?></td>
          <td><?php echo $d["semester"]; ?></td>
          <td><?php echo $d["alamat"]; ?></td>
          <td><?php echo $d["jk"]; ?></td>
          <td><?php echo $d["no_hp"]; ?></td>
          <td>
            <a href="<?php echo base_url().'index.php/mahasiswa/edit_data/'.$d['nim'];?>" class="btn btn-primary btn-sm">Edit</a>&nbsp;
            <a href="<?php echo base_url().'index.php/mahasiswa/delete_data/'.$d['nim'];?>" class="btn btn-danger btn-sm">Delete</a>
          </td>
        </tr>
        <?php
        $no++;
        }
        ?>
      </table>
    </div>
    <script>
    $('.msg').slideDown('slow').delay(1000).slideUp('slow');
    </script>
  </body>
</html>
