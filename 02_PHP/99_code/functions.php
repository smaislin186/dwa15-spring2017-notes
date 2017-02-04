<?php
function getCelsius(int $temperature, $includeUnit = true): String {

    $result = ($temperature - 32) / 1.8;

    if($includeUnit) {
        return $result .= ' F';
    }
    else {
        return $result;

    }
}

# Example usage
echo getCelsius(75); # Output: 23.8888888889 F
echo getCelsius(75, false); # Output: 23.8888888889
