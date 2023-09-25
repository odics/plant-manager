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
        $query = $this->pdo->prepare(query: 'SELECT `id`, `plant_name`, `date_planted`, `projected_harvest`,
       `cultivar`, `img_src` FROM `plants`;');

        $query->execute();

        return $query->fetchAll();
    }

}