let plants;

const searchInput = document.querySelector("#search-input");
const resultContainer = document.querySelector(".result-container");
const searchParams = document.querySelector("#search-params");
let params = searchParams.value;

searchParams.addEventListener("change", () => {
    params = searchParams.value;
})

const fetchAllPlants = async () => {
    try {
        const response = await fetch('api/fetch-all-plants.php');
        return await response.json();
    } catch {
        console.error("Could not fetch plants.")
    }
}

const searchPlants = (searchTerm) => {
    if (searchTerm === "") {
        resultContainer.innerHTML = "";
    } else {
        const regex = new RegExp(`^${searchTerm}`, 'gi');
        const results = plants.filter((plant) => {
            return params === "type" ? plant.plant_type.match(regex) : plant.cultivar.match(regex);
        })
        showSearchResults(results);
    }
}

const showSearchResults = (results) => {
    const resultHTML = results.map((result) => {
        return `<div class="search-result">
        <div class="result-img" style="background-image: url(${result.img_src})">
        </div>
        <div class="result-details">
            <div class="result-name">
                ${result.plant_type}
                <button class="btn-primary">View plant</button>
            </div>
            <div class="result-cultivar">
                <span>Cultivar: ${result.cultivar}</span>
                <span>Planted: ${result.date_planted}</span>
            </div>
        </div>
    </div>`
    }).join("")

    resultContainer.innerHTML = resultHTML;
}

window.addEventListener("DOMContentLoaded", async () => {
   try {
       plants = await fetchAllPlants();
   } catch {
       console.error("Error")
   }
})

searchInput.addEventListener("input", () => {
    searchPlants(searchInput.value);
})