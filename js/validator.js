const plantCultivarLabel = document.getElementById("cultivar-label");
const datePlantedLabel = document.getElementById("date-planted-label");
const projectedHarvestLabel = document.getElementById("proj-harvest-label");

const plantCultivarInput = document.getElementById("plant-cultivar");
const datePlantedInput = document.getElementById("date-planted");
const projectedHarvestInput = document.getElementById("projected-harvest");

const submitButton = document.getElementById("submit-new-plant");

plantCultivarInput.addEventListener("keydown", () => {
    if(plantCultivarLabel.classList.contains("error"))
    {
        plantCultivarLabel.classList.remove("error");
        plantCultivarLabel.innerHTML = "Plant cultivar";
    }
})

datePlantedInput.addEventListener("change", () => {
    if(datePlantedLabel.classList.contains("error"))
    {
        datePlantedLabel.classList.remove("error");
        datePlantedLabel.innerHTML = "Date planted";
    }
})

projectedHarvestInput.addEventListener("change", () => {
    if(projectedHarvestLabel.classList.contains("error"))
    {
        projectedHarvestLabel.classList.remove("error");
        projectedHarvestLabel.innerHTML = "Projected harvest";
    }
})

const validateForm = (cultivar, datePlanted, projectedHarvest) => {
    let isValidated = true;

    if (!cultivar) {
        plantCultivarLabel.classList.add("error");
        plantCultivarLabel.innerHTML = "Cultivar name is required";
        isValidated = false;
    }

    if (!datePlanted) {
        datePlantedLabel.classList.add("error");
        datePlantedLabel.innerHTML = "Date planted is required";
        isValidated = false;
    }

    if (!projectedHarvest) {
        projectedHarvestLabel.classList.add("error");
        projectedHarvestLabel.innerHTML = "Harvest date is required"
        isValidated = false;
    }

    return isValidated;
}
submitButton.addEventListener("click", (e) => {
    e.preventDefault();
    const isValidated = validateForm(
                                     plantCultivarInput.value,
                                     datePlantedInput.value,
                                     projectedHarvestInput.value);

    if(isValidated) {
        document.getElementById("new-plant-form").submit();
    }
})
