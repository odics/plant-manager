<?php

require_once (__DIR__ . '/../utils/harvest_countdown.php');
function renderPlantCard(
    string $plantName,
    string $plantCultivar,
    string $datePlanted,
    string $projectedHarvest,
    string $imgSource
): void {
    echo '<div class="plant-card">
        <div class="header">
          <div class="plant-info">
            <span>' . $plantName . '</span>
            <div class="card-icons">
              <div class="header-icon">
                <i class="fa-regular fa-pen-to-square"></i>
              </div>
              <div class="header-icon">
                <i class="fa-solid fa-trash"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="pic-container">
          <div class="plant-pic" style="background-image: url(' . $imgSource . ')"></div>
        </div>
        <div class="body">
          <div class="plant-stats">
            <div class="stat-card">
              <div class="stat-container">
                <div class="stat-header">CULTIVAR</div>
                <div class="stat-info">' . $plantCultivar . '</div>
              </div>
            </div>
            <div class="stat-card">
              <div class="stat-container">
                <div class="stat-header">DATE PLANTED</div>
                <div class="stat-info">' . $datePlanted . '</div>
              </div>
            </div>
            <div class="projected-harvest">
              <div class="stat-container">
                <div class="stat-header">PROJECTED HARVEST</div>
                <div class="stat-info-harvest">' . $projectedHarvest . '</div>
                <div class="stat-info-progress">
                  <div class="progress-wrapper">
                    <div class="progress-title">HARVEST COUNTDOWN</div>
                    <div class="days-left">'. getDaysToHarvest($projectedHarvest) . ' DAYS</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>';
}
