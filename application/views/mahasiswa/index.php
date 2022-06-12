<div class="col-md-12 p-3">
<?php 
$username = $this->session->userdata('username');
    if ($username) {
        echo "<h2>Selamat Datang $username</h2>";
    }
?>
 <h3 style="text-align: center;" >Daftar Mahasiswa</h3>
    <table border="3" class="table">
        <script>
            function hapusMahasiswa(pesan){
                if (confirm(pesan)) {
                    return true;
                    
                } else {
                    return false;
                }
            }
        </script>
        <thead>
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>IPK</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
 <?php
    $nomor=1;
    foreach($mahasiswa as $mhs){
 ?>
 <tr>
    <td><?=$nomor?></td>
    <td><?=$mhs->nim?></td>
    <td><?=$mhs->nama?></td>
    <td><?=$mhs->gender?></td>
    <td><?=$mhs->ipk?></td>
    <td>
        <a href="<?php echo base_url("index.php/mahasiswa/detail/$mhs->id")?>"
        class="btn btn-info btn-lg active">Detail</a>
        &nbsp;
        <a href= <?php echo base_url("index.php/mahasiswa/edit/$mhs->id")?> 
        class="btn btn-success btn-lg active" >Edit</a>
        &nbsp;
        <a href= <?php echo base_url("index.php/mahasiswa/delete/$mhs->id")?> 
        class="btn btn-danger btn-lg active" onclick="return hapusMahasiswa('Anda yakin mengahapus yang bernama <?php echo $mhs->nama?> ?')" >Hapus</a>
    </td>
</tr>
 
<?php
 $nomor++;
 
}
?>
 </tbody>
 </table>
    <a href= <?php echo base_url("index.php/mahasiswa/form")?> 
        class="btn btn-primary btn-lg active" >Tambah</a>
</div>