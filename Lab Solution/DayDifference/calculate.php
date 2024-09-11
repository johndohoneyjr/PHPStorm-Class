<?php
function dateDifference($date1, $date2) {
    $datetime1 = new DateTime($date1);
    $datetime2 = new DateTime($date2);
    $interval = $datetime1->diff($datetime2);
    return $interval->days;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];
    echo dateDifference($date1, $date2);
}
?>
