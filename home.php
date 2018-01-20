<div class="row">
    <div class="col-md-12">
        <h2>Home</h2>
        <p>here is your event calendar</p>
        <hr>

        <div class="row">
            <div class="col-md-6">
                <div id="eventCalendarHumanDate"></div>
            </div>

            <div class="col-md-6">
                
            </div>
        </div>

    </div>
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
