<div class="row mt-5">
    <div class="row-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Data Mapel</div>
                <div class="col-4">
                    <a href="?m=mapel&s=add" class="btn btn-large btn-primary float-end">Tambah</a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-striped
                table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Mapel</th>
                            <th>Jam Pelajaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once('config.php');
                        $sql = "SELECT * FROM mapel";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            $no = 1;
                            while ($r = mysqli_fetch_assoc($result)) {
                                echo '<tr>
                                        <td>' . $no . '</td>
                                        <td>' . $r['mapel'] . '</td>
                                        <td>' . $r['jam_pelajaran'] . '</td>
                                        <td>
                                            <a href="?m=mapel&s=edit&id=' . $r['id'] . '" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="?m=mapel&s=delete&id=' . $r['id'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin kelas akan dihapus, Hapus 1 kelas akan menghapus semua data mapel\')">Hapus</a>
                                        </td>
                                    </tr>';
                                $no++;
                            }
                        } else {
                            echo "<tr>
                                    <td colspan='5' align='center'>Data Kosong</td>
                                     </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>