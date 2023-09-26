const addPlantButton = document.getElementById("add-plant-type");
const modalOverlay = document.getElementById("modal-overlay");
const modal = document.getElementById("modal");
const modalCancelButton = document.getElementById("modal-cancel");
const addPlantTypeButton = document.getElementById("add-new-type");

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