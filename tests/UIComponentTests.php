<?php

require_once '../components/navbar.php';
require_once '../components/card.php';
require_once '../utils/harvest_countdown.php';

use PHPUnit\Framework\TestCase;

class UIComponentTests extends TestCase
{
    public function testSuccessfulCardRender()
    {
        $expected = '<div class="plant-card">
        <div class="header">
          <div class="plant-info">
            <span>Tomato</span>
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
          <div class="plant-pic" style="background-image: url(test)"></div>
        </div>
        <div class="body">
          <div class="plant-stats">
            <div class="stat-card">
              <div class="stat-container">
                <div class="stat-header">CULTIVAR</div>
                <div class="stat-info">Cherry</div>
              </div>
            </div>
            <div class="stat-card">
              <div class="stat-container">
                <div class="stat-header">DATE PLANTED</div>
                <div class="stat-info">2023-09-26</div>
              </div>
            </div>
            <div class="projected-harvest">
              <div class="stat-container">
                <div class="stat-header">PROJECTED HARVEST</div>
                <div class="stat-info-harvest">2023-12-30</div>
                <div class="stat-info-progress">
                  <div class="progress-wrapper">
                    <div class="progress-title">HARVEST COUNTDOWN</div>
                    <div class="days-left">' . getDaysToHarvest("2023-12-30") . ' DAYS</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>';

        // Act - Run the real function and pass in the input
        $result = renderPlantCard(
            "Tomato",
            "Cherry",
            "2023-09-26",
            "2023-12-30",
            "test"
        );

        // Assert - compare the expected result to the actual result
        $this->assertEquals($expected, $result);
    }
}