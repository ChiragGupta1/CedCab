<?php
$cabType = $_REQUEST["carType"];
$luggage = $_REQUEST["luggage"];
$currentLoc = $_REQUEST["currentLoc"];
$destn = $_REQUEST["destn"];
$fare = '';
$luggage1 = '';

$totalDist = abs($currentLoc-$destn);
echo "Total distance: " . $totalDist . ", ";

if ($luggage == '' || $luggage == 0) {
    $luggage1 = 0;
}
elseif (0 < $luggage && $luggage <= 10) {
    $luggage1 = 50;
}
elseif (10 < $luggage && $luggage <= 20) {
    $luggage1 = 100;
}
elseif ($luggage > 20) {
    $luggage1 = 200;
}

if ($cabType == 50) {
    if ($totalDist <= 10) {
        $fare = 13.50 * $totalDist;
    }
    elseif (10 < $totalDist && $totalDist <= 60) {
        $fare = (13.50 * 10) + (12.00 * ($totalDist - 10));
    }
    elseif (60 < $totalDist && $totalDist <= 160) {
        $fare = (13.50 * 10) + (12.00 * 50) + (10.20 * ($totalDist - 60));
    }
    elseif (160 < $totalDist) {
        $fare = (13.50 * 10) + (12.00 * 50) + (10.20 * 100) + (8.50 * ($totalDist - 160));
    }
    echo "Total Fare: " . ($fare + $cabType);
}elseif ($cabType == 150) {
    if ($totalDist <= 10) {
        $fare = 14.50 * $totalDist;
        echo "Total Fare: " . ($fare + $luggage1 + $cabType);
    }
    elseif (10 < $totalDist && $totalDist <= 60) {
        $fare = (14.50 * 10) + (13.00 * ($totalDist - 10));
        echo "Total Fare: " . ($fare + $luggage1 + $cabType);
    }
    elseif (60 < $totalDist && $totalDist <= 160) {
        $fare = (14.50 * 10) + (13.00 * 50) + (11.20 * ($totalDist - 60));
        echo "Total Fare: " . ($fare + $luggage1 + $cabType);
    }
    elseif (160 < $totalDist) {
        $fare = (14.50 * 10) + (13.00 * 50) + (11.20 * 100) + (9.50 * ($totalDist - 160));
        echo "Total Fare: " . ($fare + $luggage1 + $cabType);
    }
    else {
        echo "Total Fare: " . ($cabType);
    }
}elseif ($cabType == 200) {
    if ($totalDist <= 10) {
        $fare = 15.50 * $totalDist;
        echo "Total Fare: " . ($fare + $luggage1 + $cabType);
    }
    elseif (10 < $totalDist && $totalDist <= 60) {
        $fare = (15.50 * 10) + (14.00 * ($totalDist - 10));
        echo "Total Fare: " . ($fare + $luggage1 + $cabType);
    }
    elseif (60 < $totalDist && $totalDist <= 160) {
        $fare = (15.50 * 10) + (14.00 * 50) + (12.20 * ($totalDist - 60));
        echo "Total Fare: " . ($fare + $luggage1 + $cabType);
    }
    elseif (160 < $totalDist) {
        $fare = (15.50 * 10) + (14.00 * 50) + (12.20 * 100) + (10.50 * ($totalDist - 160));
        echo "Total Fare: " . ($fare + $luggage1 + $cabType);
    }
    else {
        echo "Total Fare: " . ($cabType);
    }
}elseif ($cabType == 250) {
    if ($totalDist <= 10) {
        $fare = 16.50 * $totalDist;
        echo "Total Fare: " . ($fare + (2 * $luggage1) + $cabType);
    }
    elseif (10 < $totalDist && $totalDist <= 60) {
        $fare = (16.50 * 10) + (15.00 * ($totalDist - 10));
        echo "Total Fare: " . ($fare + (2 * $luggage1) + $cabType);
    }
    elseif (60 < $totalDist && $totalDist <= 160) {
        $fare = (16.50 * 10) + (15.00 * 50) + (13.20 * ($totalDist - 60));
        echo "Total Fare: " . ($fare + (2 * $luggage1) + $cabType);
    }
    elseif (160 < $totalDist) {
        $fare = (16.50 * 10) + (15.00 * 50) + (13.20 * 100) + (11.50 * ($totalDist - 160));
        echo "Total Fare: " . ($fare + (2 * $luggage1) + $cabType);
    }
    else {
        echo "Total Fare: " . ($cabType);
    }
}
?>