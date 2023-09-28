<?php

function getDaysToHarvest(string $projectedHarvest): string
{
    $projected_harvest = new DateTime($projectedHarvest);
    $current_date = new DateTime(date('Y-m-d'));
    $days_to_harvest = $projected_harvest->diff($current_date);
    $date_to_string = $days_to_harvest->format('%m %d');

    if (explode(" ", $date_to_string)[0] === "0") {
        if (explode(" ", $date_to_string)[1] == 0) {
            return explode(" ", $date_to_string)[1] . " DAYS";
        } else if (explode(" ", $date_to_string)[1] <= 1) {
            return explode(" ", $date_to_string)[1] . " DAY";
        } else {
            return explode(" ", $date_to_string)[1] . " DAYS";
        }
    } else {
        if (explode(" ", $date_to_string)[1] <= 1) {
            return $days_to_harvest->format('%m MONTHS AND %d DAY');
        } else {
            return $days_to_harvest->format('%m MONTHS AND %d DAYS');
        }
    }
}