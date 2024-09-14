<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <title>How To Add Bootstrap 5 Timepicker - Techsolutionstuff</title>
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="form-group col-md-6">
            <label for="time">Time</label>
            <div class="input-group date" id="timePicker">
                <input type="text" class="form-control timePicker">
                <span class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
            </div>
        </div>
    </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script>
    let firstOpen = true;
    let time;

    $('#timePicker').datetimepicker({
        useCurrent: false,
        format: "hh:mm"
    }).on('dp.show', function() {
        if(firstOpen) {
            time = moment().startOf('day');
            firstOpen = false;
        } else {
            time = "01:00 PM"
        }
        $(this).data('DateTimePicker').date(time);
    });
</script>
</html>