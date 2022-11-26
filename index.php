<?php
require_once 'Speedometer.php';

echo '10 Km = ' . Speedometer::convertToMiles(10) . 'Miles <br>';
echo '10 Miles = ' . Speedometer::convertToKm(10) . 'Km';