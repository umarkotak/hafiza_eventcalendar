<?php include "koneksi.php"; ?>
<?php

$sql = $conn->prepare('SELECT *, tbl_ruangan.nama as nama_ruangan FROM jadwalku
                       INNER JOIN tbl_ruangan ON jadwalku.id_ruangan = tbl_ruangan.id_ruangan
                       WHERE date < CURRENT_DATE ORDER BY jadwal_id ASC LIMIT 0, 3 ');
$data = array();
$sql->execute($data);
$jadwal_prev = $sql->fetchAll();

$sql = $conn->prepare('SELECT *, tbl_ruangan.nama as nama_ruangan  FROM jadwalku
                       INNER JOIN tbl_ruangan ON jadwalku.id_ruangan = tbl_ruangan.id_ruangan
                       WHERE date > CURRENT_DATE ORDER BY date DESC LIMIT 0, 5 ');
$data = array();
$sql->execute($data);
$jadwal_next = $sql->fetchAll();

?>

<div class="row">
    <div class="col-md-12">
        <h2>Home</h2>
        <p>here is your event calendar</p>
        <hr>

        <div class="row">
            <div class="col-md-7">
                <div id="eventCalendarHumanDate"></div>
            </div>

            <div class="col-md-5">
                <?php $running_text = array(); ?>
                <?php foreach ($jadwal_next as $jadwal): ?>

                    <?php $date_a = explode(" ", $jadwal['date'])[0]; ?>
                    <?php $date_b = date("Y-m-d"); ?>

                    <?php if ($date_a == $date_b): ?>
                        <?php echo $jadwal['date']; ?>
                        <div class="alert alert-success">
                            <p><?php echo $jadwal['title']; ?> - ID Ruangan : <?php echo $jadwal['nama_ruangan']; ?></p>
                            <?php array_push($running_text, $jadwal) ?>
                        </div>
                    <?php else: ?>
                        <div class="alert alert-info">
                            <p><?php echo $jadwal['title']; ?> - ID Ruangan : <?php echo $jadwal['nama_ruangan']; ?></p>
                        </div>
                    <?php endif ?>

                <?php endforeach ?>

                <?php foreach ($jadwal_prev as $jadwal): ?>
                    <div class="alert alert-danger">
                        <p><?php echo $jadwal['title']; ?> - ID Ruangan : <?php echo $jadwal['nama_ruangan']; ?></p>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid">
    <marquee>
        <b>| Agenda hari ini : </b>
        <?php foreach ($running_text as $jadwal): ?>
            <?php echo $jadwal['title']; ?> |
        <?php endforeach ?>
      </marquee>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="js/moment.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
<script>
    $(document).ready(function() {
        $("#eventCalendarHumanDate").eventCalendar({
            eventsjson: 'style/json/json.php',
            showDescription: 'true',
            jsonDateFormat: 'human'  // 'YYYY-MM-DD HH:MM:SS'
        });
    });

    $(function () {
        $('#date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss'
        });
    });
</script>
<script src="style/js/jquery.eventCalendar.js" type="text/javascript"></script>
