const express = require('express');
const bodyParser = require('body-parser');
const fs = require('fs');

const app = express();
const port = 3000;

app.use(bodyParser.json());

app.post('/bookSeat', (req, res) => {
    const { seatId, state, firstName, lastName, email, phoneNumber } = req.body;

    // Load the current state of the seats from the JSON file
    let seats = {};
    try {
        const data = fs.readFileSync('seats.json', 'utf8');
        seats = JSON.parse(data);
    } catch (err) {
        console.error(err);
    }

    // Update the state of the booked seat in the seats object
    seats[seatId] = {
        state,
        firstName,
        lastName,
        email,
        phoneNumber,
    };

    // Save the updated seats object to the JSON file
    fs.writeFile('seats.json', JSON.stringify(seats), (err) => {
        if (err) {
            console.error(err);
            res.status(500).send('Error saving booking data');
        } else {
            res.send('Booking successful');
        }
    });
});

app.listen(port, () => {
    console.log(`Server listening on port ${port}`);
});
