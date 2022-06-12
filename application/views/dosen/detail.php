<div class="col-md-12 p-3">
 <h3>Daftar Dosen</h3>
    <table border="3" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Nidn</th>
                <th>Pendidikan</th>
            </tr>
        </thead>
        <tbody>
 <tr>
    <td><?=$dosen->id?></td>
    <td><?=$dosen->nama?></td>
    <td><?=$dosen->gender?></td>
    <td><?=$dosen->tmp_lahir?></td>
    <td><?=$dosen->tgl_lahir?></td>
    <td><?=$dosen->nidn?></td>
    <td><?=$dosen->pendidikan?></td>
 </tr>
</tbody>
</table>
<div class="col-md-5 mb-3" >
        <div class="card">
            <div class="card-body">
                <div class="align-items-center text-center">
                    <img src="<?=base_url()?>uploads/photos/<?=$dosen->id?>.jpg" width="300"/>
                    <div class="mt-4">
                        <h4><?=$dosen->nama?></h4>
                        <p>Foto Dosen</p>
                        <?php echo $error;?>
                        <br/>
                        <br/>
                        <a href="https://www.instagram.com/gigihzhafrans_/" target="_blank"><button class="btn btn-outline-info">Instagram</button></a>
                        <br/>
                        <br/>
                        <?php echo form_open_multipart('dosen/upload');?>
                        <input type="file" name="foto" size="300"/>
                        <input type="hidden" name="iddosen" value="<?=$dosen->id?>"/>
                        <br/>
                        <br/>
                        <input type="submit" value="Upload Foto" class="btn btn-primary"/>
</form>
</div>