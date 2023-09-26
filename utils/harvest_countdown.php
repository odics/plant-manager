<?php

function getDaysToHarvest(string $projectedHarvest): string
{
    $projected_harvest = new DateTime($projectedHarvest);
    $current_date = new DateTime(date('Y-m-d'));
    $days_to_harvest = $projected_harvest->diff($current_date);

    return $days_to_harvest->format('%d');
}
