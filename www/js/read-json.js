// Define the path to the JSON file
const jsonPath = "js/seat-reservation.json";

// Fetch the JSON data
fetch(jsonPath)
    .then(response => response.json())
    .then(data => {
        // Loop through each section in the JSON data
        for (const section in data) {
            // Loop through each seat in the section
            for (const seat in data[section]) {
                if (!(seat === "")) {
                    // Get the corresponding HTML element
                    const seatElement = document.querySelector(`.${section} .seat[data-seat="${seat}"]`);
                    // Check if the seat is sold
                    if (data[section][seat].status === "sold" || data[section][seat].status === "reserved") {
                        // Add the "sold" class to the HTML element
                        seatElement.classList.add("sold");
                        try {
                            var name = data[section][seat]["reserved_by"]["Nom"];
                            if (name)
                                seatElement.setAttribute('title', "Réservé par " + name);
                            else
                                seatElement.setAttribute('title', "En cours de réservation");
                        } catch (e) {
                            seatElement.setAttribute('title', "En cours de réservation");
                        }
                    }
                }
            }
        }
    })
    .catch(error => {
        console.error("Error fetching JSON:", error);
    });
