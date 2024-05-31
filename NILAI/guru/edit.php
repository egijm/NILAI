<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Edit Guru</div>
                <div class="col-4">
                    <a href="?m=guru&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>

<?php
include_once('config.php');
$id = $_GET['id'];
$sql = "SELECT * FROM guru WHERE id='$id'";
$result = mysqli_query($con, $sql);
$r = mysqli_fetch_assoc($result)
?>

            <div class="card-body">
                <form action="?m=guru&s=update" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="number" name="nip" value="<?= $r['nip']; ?>" class="form-control" placeholder="Nomor Induk Guru" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="nama" value="<?= $r['nama']; ?>" class="form-control" placeholder="Nama Guru" required>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="btn-check" name="jk" id="option5" value="L" autocomplete="off" <?= ($r['jk'] == 'L') ? 'checked' : ''; ?>>
                        <label class="btn" for="option5">Laki-Laki</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="btn-check" name="jk" id="option6" value="P" autocomplete="off" <?= ($r['jk'] == 'P') ? 'checked' : ''; ?>>
                        <label class="btn" for="option6">Perempuan</label>
                    </div>
                    <br>
                    <div class="mb-3">
                        <input type="text" name="tempat_lahir" value="<?= $r['tempat_lahir']; ?>" class="form-control" placeholder="Tempat Lahir" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" placeholder="Tanggal Lahir" name="tanggal_lahir" value="<?= $r['tanggal_lahir']; ?>" class="form-control" onblur="(this.type='text')" onfocus="(this.type='date')" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="telepon" value="<?= $r['telepon']; ?>" class="form-control" placeholder="Telepon" required>
                    </div>
                    <div class="mb-3">
                        <img src="guru/foto/<?= $r['foto']; ?>" alt="Gambar tidak ada" height="400px" title="Foto Sebelumnya">
                    </div>
                    <div class="mb-3">
                        <label for="">Masukan Foto (Jika diganti)</label>
                        <input type="file" name="foto" class="form-control" accept="image/*">
                    </div>

                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?= $r['id']; ?>">
                        <input type="hidden" name="old_foto" value="<?= $r['foto']; ?>">
                        <input type="reset" class="btn btn-secondary">&nbsp;
                        <input type="submit" value="Update" name="update" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>