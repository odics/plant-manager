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
        $query = $this->pdo->prepare(
            query: 'SELECT `plants`.`id`, `plants`.`plant_name`, `plants`.`date_planted`, 
            `plants`.`projected_harvest`,
            `plants`.`cultivar`, 
            `plants`.`img_src`, 
            `plants`.`plant_type`,
            `types_of_plant`.`plant_type`
            FROM `plants`
            LEFT JOIN `types_of_plant`
            ON `plants`.`plant_type` = `types_of_plant`.`id`'
        );

        $query->execute();
        return $query->fetchAll();
    }

    public function fetchNotesByPlantID(int $plant_id): array
    {
        $query = $this->pdo->prepare(
            query: "SELECT `plant_notes`.`id`, `plant_notes`.`note`, `plant_notes`.`plant_id`
            FROM `plant_notes`
            WHERE `plant_notes`.`plant_id` = $plant_id"
        );

        $query->execute();

        return $query->fetchAll();
    }

    public function fetchPlantTypes(): array
    {
        $query = $this->pdo->prepare("SELECT `id`, `plant_type` FROM `types_of_plant`");
        $query->execute();

        return $query->fetchAll();
    }

    public function addPlantType($plantType): void
    {
        $query = $this->pdo->prepare(
            "INSERT INTO `types_of_plant` (`plant_type`) VALUES (?);");

        $query->execute($plantType);
    }

    public function addNewPlant($plantType, $plantCultivar, $datePlanted, $projectedHarvest, $imgURL): void
    {
        $query = $this->pdo->prepare(
            "INSERT INTO `plants` (`plant_name`, 
                      `date_planted`, 
                      `projected_harvest`, 
                      `cultivar`, 
                      `img_src`, 
                      `plant_type`) 
                    VALUES (?, ?, ?, ?, ?, ?);");

        $params = [
            $plantType,
            $datePlanted,
            $projectedHarvest,
            $plantCultivar,
            $imgURL,
            $plantType
        ];

        $query->execute($params);
    }

}