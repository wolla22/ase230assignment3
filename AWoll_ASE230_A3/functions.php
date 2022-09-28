<?php
    function dob_calc($birth) {
        $dob=date_create($birth, timezone_open("America/New_York"));
        $current_date=date_create(date('Y-F-j'), timezone_open("America/New_York"));
        $diff = date_diff($dob, $current_date);
        echo $diff->format("%Y years old!<br>");
    }

    function since_dob($birthday) {
        $dob_start=date_create($birthday);
        $current_date=date_create(date('Y-F-j'));
        $diff = date_diff($dob_start, $current_date);
        echo $diff->format("%Y years, %M months, %D days<br>");
    }
?>