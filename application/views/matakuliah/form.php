<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php echo form_open("matakuliah/save") ?>
<div class="container">
  <div class="row">
    <div class="col-lg-7 mx-auto" style="border: 2px solid black; margin-top: 100px; ">
<h3 class="text-center" >Form Input Matakuliah</h3>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-4">
      <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="sks" class="col-4 col-form-label">SKS</label> 
    <div class="col-4">
      <input id="sks" name="sks" placeholder="Jumlah sks" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-4">
      <input id="kode" name="kode" placeholder="Masukkan kode" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-4">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
    <?php echo form_close() ?>
  </div>