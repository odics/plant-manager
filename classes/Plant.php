<?php

class Plant
{
    private PDO $pdo;
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function fetchAllPlants(): array
    {
        $query = $this->pdo->prepare(query:
            'SELECT `plants`.`id`, `plants`.`plant_name`, `plants`.`date_planted`, 
            `plants`.`projected_harvest`,
            `plants`.`cultivar`, 
            `plants`.`img_src`, 
            `plants`.`plant_type`,
            `types_of_plant`.`plant_type`
            FROM `plants`
            LEFT JOIN `types_of_plant`
            ON `plants`.`plant_type` = `types_of_plant`.`id`');

        $query->execute();

        return $query->fetchAll();
    }

}