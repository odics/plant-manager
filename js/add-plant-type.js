const addPlantButton = document.getElementById("add-plant-type");
const modalOverlay = document.getElementById("modal-overlay");
const modal = document.getElementById("modal");
const modalCancelButton = document.getElementById("modal-cancel");
const addPlantTypeButton = document.getElementById("add-new-type");
const plantTypeLabel = document.getElementById("plant-type-label");
const plantTypeInput = document.getElementById("plant-type");

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
        document.getElementById("plant-type-form").submit();
    }
})