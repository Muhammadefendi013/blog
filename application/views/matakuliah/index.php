<div class="col-md-12 p-3">
<?php 
$username = $this->session->userdata('username');
    if ($username) {
        echo "<h2>Selamat Datang $username</h2>";
    }
?>
 <h3 style="text-align: center;">Daftar Matakuliah</h3>
    <table border="3" class="table">
    <script>
            function hapusMatakuliah(pesan){
                if (confirm(pesan)) {
                    return true;
                    
                } else {
                    return false;
                }
            }
        </script>
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>Sks</th>
                <th>Kode</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
 <?php
    $nomor=1;
    foreach($matakuliah as $matkul){
 ?>
 <tr>
    <td><?=$nomor?></td>
    <td><?=$matkul->nama?></td>
    <td><?=$matkul->sks?></td>
    <td><?=$matkul->kode?></td>
    <td>
        <a href= <?php echo base_url("index.php/matakuliah/delete/$matkul->id")?> 
        class="btn btn-danger btn-lg active" onclick="return hapusMatakuliah('Anda yakin mengahapus yang bernama <?php echo $matkul->nama?> ?')" >Hapus</a>
    </td>
</tr>
 
<?php
 $nomor++;
 
}
?>
 </tbody>
 </table>
 <a href= <?php echo base_url("index.php/matakuliah/form")?> 
        class="btn btn-primary btn-lg active" >Tambah</a>
</div>
</div>