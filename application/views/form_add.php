<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css';?>">
    <style media="screen">
      .center{
        margin: 0 auto;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div class="container">
        <h1>Belajar CRUD Menggunakan Codeigniter</h1><br>
        <div class="col-sm-6">
          <form class="" action="<?php echo base_url().'index.php/mahasiswa/insert_data';?>" method="post">
            <div class="panel panel-default center">
      			<div class="panel-heading">
      				<b>Form Input Data</b>
      			</div>
      			<div class="panel-body">
      				<div class="form-gruf">
      				  <label for="">Nomor Induk mahasiswa</label>
                <input type="text" name="nim" class="form-control" value="">
      				</div>
              <div class="form-gruf">
      				  <label for="">Nama Mahasiswa Dan Semester</label>
                <input type="text" name="nama" class="form-control" value="">
      				</div>
              <div class="form-gruf">
      				  <label for="">Semester</label>
                <input type="text" name="semester" class="form-control" value="">
      				</div>
              <div class="form-gruf">
      				  <label for="">Alamat</label>
                <textarea name="alamat" class="form-control" ></textarea>
      				</div>
              <div class="form-gruf">
      				  <label for="">Jenis Kelamin</label>
                <select class="form-control" name="jk">
                  <option value="">Pilih Jenis Kelamin</option>
                  <option value="L">Laki-Laki</option>
                  <option value="P">Perempuan</option>
                </select>
      				</div>
              <div class="form-gruf">
      				  <label for="">Nomor Handpone</label>
                <input type="text" name="no_hp" class="form-control" value="">
      				</div>
      			</div>
            <div class="panel-footer" >
              <input type="submit" name="btn_simpan" value="Simpan" class="btn btn-primary">
            </div>
      		</div>
          </form>
        </div>
    </div>
  </body>
</html>
