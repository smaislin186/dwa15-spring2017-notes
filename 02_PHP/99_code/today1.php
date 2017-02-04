<?php
date_default_timezone_set('America/New_York');
$day = date('l');

if(in_array($day, ['Friday', 'Saturday', 'Sunday'])) {
    $toDo = 'relax';
}
else {
    $toDo = 'work';
}
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Head code excluded for brevity -->
</head>
<body>
    <h1>Daily Planner</h1>
    <p>
        Today is <?php echo $day; ?>; it's time to <?php echo $toDo; ?>.
    </p>
</body>
</html>
