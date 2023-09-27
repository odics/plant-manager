<?php

function getDaysToHarvest(string $projectedHarvest): string
{
    $projected_harvest = new DateTime($projectedHarvest);
    $current_date = new DateTime(date('Y-m-d'));
    $days_to_harvest = $projected_harvest->diff($current_date);
    $date_to_string = $days_to_harvest->format('%m %d');

    if ($date_to_string[0] === "0") {
        if (substr($date_to_string, -1) <= 1) {
            return substr($date_to_string, -1) . " DAY";
        } else {
            return substr($date_to_string, -1) . " DAYS";
        }
    } else {
        return $days_to_harvest->format('%m MONTHS AND %d DAY(S)');
    }
}
