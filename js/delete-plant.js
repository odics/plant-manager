const deletePlantButtons = document.querySelectorAll(".delete");
const deletePlantModal = document.querySelector("#modal");
const deletePlantModalOverlay = document.querySelector("#modal-overlay");
const modalBody = document.querySelector(".card-text");
const cancelButton = document.querySelector("#modal-cancel");
const plantID = document.querySelector("#plantID");

cancelButton.addEventListener("click", (e) => {
    e.preventDefault();
    deletePlantModal.classList.toggle("active");
    deletePlantModalOverlay.classList.toggle("active");
})

deletePlantButtons.forEach((button) => {
    button.addEventListener("click", (e) => {
        e.preventDefault();
        plantID.value = button.dataset['plantId'];
        modalBody.innerHTML = "Are you sure you want to delete your " + button.dataset['plantName'] + " plant?"
        console.log(button.dataset)
        deletePlantModal.classList.toggle("active");
        deletePlantModalOverlay.classList.toggle("active");
        document.querySelector("#delete-plant").submit;
    })
})