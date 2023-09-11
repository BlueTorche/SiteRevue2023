const container = document.querySelector(".container");
const seatsParterre = document.querySelectorAll(".parterre .row .seat:not(.sold)");
const seatsBalcon = document.querySelectorAll(".balcon .row .seat:not(.sold)");
const count = document.getElementById("count");
const total = document.getElementById("total");

let ticketPriceParterre = 60;
let ticketPriceBalcon = 50;

// JSON data for the seats
let seatsData = {
    "parterre": {},
    "balcon": {}
};

// Update total and count
function updateSelectedCount() {
    const selectedSeatsParterre = document.querySelectorAll(".parterre .row .seat.selected");
    const selectedSeatsBalcon1 = document.querySelectorAll(".balcon1 .row .seat.selected");
    const selectedSeatsBalcon2 = document.querySelectorAll(".balcon2 .row .seat.selected");

    const selectedSeatsParterreCount = selectedSeatsParterre.length;
    const selectedSeatsBalconCount = selectedSeatsBalcon1.length + selectedSeatsBalcon2.length;

    count.innerText = selectedSeatsParterreCount + selectedSeatsBalconCount;
    total.innerText = selectedSeatsParterreCount * ticketPriceParterre + selectedSeatsBalconCount * ticketPriceBalcon;
}

function updateJSONfile() {
    const selectedSeatsParterre = document.querySelectorAll(".parterre .row .seat.selected");
    const selectedSeatsBalcon1 = document.querySelectorAll(".balcon1 .row .seat.selected");
    const selectedSeatsBalcon2 = document.querySelectorAll(".balcon2 .row .seat.selected");


    // Initialize an empty array to store the seat numbers
    let seatNumbersParterre = [];
    let seatNumbersBalcon1 = [];
    let seatNumbersBalcon2 = [];

    // Loop through the NodeList and retrieve the value of the data-seat attribute for each selected seat
    selectedSeatsParterre.forEach(seat => {
        seatNumbersParterre.push("parterre " + seat.getAttribute("data-seat"));
    });

    selectedSeatsBalcon1.forEach(seat => {
        seatNumbersBalcon1.push("balcon1 " + seat.getAttribute("data-seat"));
    });

    selectedSeatsBalcon2.forEach(seat => {
        seatNumbersBalcon2.push("balcon2 " + seat.getAttribute("data-seat"));
    });

    let quantityParterre = seatNumbersParterre.length;
    let quantityBalcon   = seatNumbersBalcon1.length + seatNumbersBalcon2.length;

    // Join the array of seat numbers into a comma-separated string
    let seatNumbersParterreString = seatNumbersParterre.join(",");
    let seatNumbersBalcon1String = seatNumbersBalcon1.join(",");
    let seatNumbersBalcon2String = seatNumbersBalcon2.join(",");

    //let seatNumbersString = seatNumbersParterreString + ',' + seatNumbersBalcon1String + ',' + seatNumbersBalcon2String;

    // Output the seat numbers in the error message
    console.log(`Selected seats Parterre: ${seatNumbersParterreString}`);
    console.log(`Selected seats Balcon1: ${seatNumbersBalcon1String}`);
    console.log(`Selected seats Balcon2: ${seatNumbersBalcon2String}`);

    if(count.innerText === "0")
        alert("Vous devez sélectionner des sièges pour pouvoir les payer !");
    else if(parseInt(count.innerText) > 40)
        alert("Vous ne pouvez pas sélectionner plus de 40 sièges en même temps !");
    else
        // Send the selected seats to the server
        window.location.href = "pay.php?placesParterre="+seatNumbersParterreString+
            "&placesBalcon1="+seatNumbersBalcon1String+
            "&placesBalcon2="+seatNumbersBalcon2String;
    
    /*const xhr = new XMLHttpRequest();
    xhr.open("POST", "pay.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                if (xhr.responseText === "error") {
                    alert("Erreur durant la réservation de siège : quelqu'un a probablement réservé les sièges. Recharger la page et réessayer. " + xhr.responseText);
                    console.log(xhr.responseText)
                    console.log(xhr.status)
                    window.location.href =("/reservation.php")
                }
            } else {
                alert("Sorry, there was an error updating the seat reservation. Please try again later. ");
                console.log(xhr.responseText)
            }
        }
    };
    xhr.send("places=" + seatNumbersString);*/

}

function generateCode(seat) {
    // Generate code containing the seat id
    return `R${seat}`;
}

// Seat click event
container.addEventListener("click", (e) => {
    if (e.target.classList.contains("seat") && !e.target.classList.contains("sold")) {
        e.target.classList.contains("selected") ? e.target.classList.remove("selected") : e.target.classList.add("selected")
        updateSelectedCount();
    }
    if (e.target.classList.contains("PayButton")) {
        updateJSONfile();
    }
});

// Initial count and total set
updateSelectedCount();
