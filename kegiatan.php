<?php include "koneksi.php"; ?>
<?php
    $sql = $conn->prepare('SELECT * FROM tbl_ruangan');
    $data = array();
    $sql->execute($data);

    $pilihan = $sql->fetchAll();
?>

<div class="row">
    <div class="col-md-12">
        <h2>Tambah Kegiatan</h2>
        <p>tambahkan kegiatan anda di halaman ini</p>
        <hr>

        <form class="form-horizontal" enctype="multipart/form-data" role="form" method="post" id="jadwal" name="jadwal" action="act_tambah_kegiatan.php">
            <div class="container-fluid">
                <div class="form-group">
                    <label>Tanggal Acara : </label>
                    <input type="date" name="date" class="form-control">
                </div>

                <div class="form-group">
                    <label>Jam Mulai : </label>
                    <input type="time" name="jam_mulai" class="form-control">
                </div>

                <div class="form-group">
                    <label>Jam Selesai : </label>
                    <input type="time" name="jam_selesai" class="form-control">
                </div>

                <div class="form-group">
                    <label>Nama Ruangan : </label>
                    <select name="id_ruangan" class="form-control">
                        <?php foreach ($pilihan as $pilih): ?>
                            <option value="<?php echo $pilih['id_ruangan'] ?>"><?php echo $pilih['nama']; ?></option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Judul : </label>
                    <input type="text" name="title" placeholder="Judul" class="form-control">
                </div>

                <div class="form-group">
                    <label>Uraian Acara</label>
                    <textarea name="description" placeholder="Uraian Acara" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary pull-right">Submit</button>
                </div>
            </div>
        </form>

    </div>
</div>
