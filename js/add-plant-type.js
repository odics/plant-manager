const addPlantButton = document.querySelector("#add-plant-type");
const modalOverlay = document.querySelector("#modal-overlay");
const modal = document.querySelector("#modal");
const modalCancelButton = document.querySelector("#modal-cancel");
const addPlantTypeButton = document.querySelector("#add-new-type");
const plantTypeLabel = document.querySelector("#plant-type-label");
const plantTypeInput = document.querySelector("#plant-type");

modalCancelButton.addEventListener("click", (e) => {
    e.preventDefault();
    modalOverlay.classList.toggle("active");
    modal.classList.toggle("active");
})

addPlantButton.addEventListener("click", (e) => {
    e.preventDefault();
    modalOverlay.classList.toggle("active");
    modal.classList.toggle("active");
})

addPlantTypeButton.addEventListener("click", (e) => {
    e.preventDefault();
    if (!plantTypeInput.value) {
        plantTypeLabel.classList.add("error");
        plantTypeLabel.innerHTML = "Plant type is required";
    } else {
        document.querySelector("#plant-type-form").submit();
    }
})