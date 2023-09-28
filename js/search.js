let plants;

const fetchAllPlants = async () => {
    try {
        const response = await fetch('api/fetch-all-plants.php');
        return await response.json();
    } catch {
        console.error("Could not fetch plants.")
    }
}

window.addEventListener("DOMContentLoaded", async () => {
   try {
       plants = await fetchAllPlants();
   } catch {
       console.error("Error")
   }

    console.log(plants);
})