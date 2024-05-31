<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Edit Siswa</div>
                <div class="col-4">
                    <a href="?m=siswa&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>

<?php
include_once('config.php');
$id = $_GET['id'];
$sql = "SELECT * FROM siswa WHERE id='$id'";
$result = mysqli_query($con, $sql);
$r = mysqli_fetch_assoc($result)
?>

            <div class="card-body">
                <form action="?m=siswa&s=update" method="post">
                    <div class="mb-3">
                        <input type="number" name="nis" value="<?= $r['nis']; ?>" class="form-control" placeholder="Nomor Induk Siswa" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="nama" value="<?= $r['nama']; ?>" class="form-control" placeholder="Nama Siswa" required>
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
                        <select name="kelas_id" class="form-control" required>
                        <option value="">Pilih Kelas</option>
                        <?php
                        require_once ('config.php');
                        $sql = "SELECT * FROM kelas ORDER BY kelas ASC";
                        $result = mysqli_query($con, $sql);
                        while ($rk = mysqli_fetch_assoc($result)) {
                            if ($rk['id'] == $r['kelas_id']) {
                                echo "<option value='$rk[id]' selected>$rk[kelas]</option>";
                            } else {
                                echo "<option value='$rk[id]'>$rk[kelas]</option>";
                            }               
                        }
                        ?>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <input type="hidden" name="id" value="<?= $r['id']; ?>">
                        <input type="reset" class="btn btn-secondary">&nbsp;
                        <input type="submit" value="Update" name="update" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>