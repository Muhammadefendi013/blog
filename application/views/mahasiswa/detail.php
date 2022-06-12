<div class="col-md-12 p-3">
 <h3>Detail Mahasiswa</h3>
    <table border="3" class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>IPK</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$siswa->id?></td>
                <td><?=$siswa->nim?></td>
                <td><?=$siswa->nama?></td>
                <td><?=$siswa->gender?></td>
                <td><?=$siswa->tmp_lahir?></td>
                <td><?=$siswa->tgl_lahir?></td>
                <td><?=$siswa->ipk?></td>
            </tr>
        </tbody>
    </table>
    <div class="col-md-5 mb-2" >
        <div class="card">
            <div class="card-body">
                <div class="align-items-center text-center">
                    <img src="<?=base_url()?>uploads/photos/<?=$siswa->id?>.jpg" width="300"/>
                    <div class="mt-4">
                        <h4><?=$siswa->nama?></h4>
                        <p>Foto Mahasiswa</p>
                        <br/>
                        <a href="https://www.instagram.com/m_fendy13/" target="_blank"><button class="btn btn-outline-info">Instagram</button></a>
                        <br/>
                        <br/>
                        <?php echo form_open_multipart('mahasiswa/upload');?>
                        <input type="file" name="foto" size="300"/>
                        <input type="hidden" name="idmahasiswa" value="<?=$siswa->id?>"/>
                        <br/>
                        <br/>
                        <input type="submit" value="Upload Foto" class="btn btn-primary"/>
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>