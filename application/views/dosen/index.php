<div class="col-md-12 p-3">
<?php 
$username = $this->session->userdata('username');
    if ($username) {
        echo "<h2>Selamat Datang $username</h2>";
    }
?>
 <h3 style="text-align: center;">Daftar Dosen</h3>
    <table border="3" class="table">
    <script>
            function hapusDosen(pesan){
                if (confirm(pesan)) {
                    return true;
                    
                } else {
                    return false;
                }
            }
        </script>
        <thead>
            <tr>
                <th>Nidn</th>
                <th>Nama</th>
                <th>Pendidikan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
<?php
    $nomor=1;
    foreach($dosen as $dsn){
?>
 <tr>
    <td><?=$dsn->nidn?></td>
    <td><?=$dsn->nama?></td>
    <td><?=$dsn->pendidikan?></td>
    <td>
        <a href="<?php echo base_url("index.php/dosen/detail/$dsn->id")?>"
        class="btn btn-info btn-lg active">Detail</a>
        &nbsp;
        <a href= <?php echo base_url("index.php/dosen/edit/$dsn->id")?> 
        class="btn btn-success btn-lg active" >Edit</a>
        &nbsp;
        <a href= <?php echo base_url("index.php/dosen/delete/$dsn->id")?> 
        class="btn btn-danger btn-lg active" onclick="return hapusDosen('Anda yakin mengahapus yang bernama <?php echo $dsn->nama?> ?')" >Hapus</a>
    </td>
 </tr>

<?php
$nomor++;

}
?>
</tbody>
</table>
<a href= <?php echo base_url("index.php/dosen/form")?> 
        class="btn btn-primary btn-lg active" >Tambah</a>
</div>