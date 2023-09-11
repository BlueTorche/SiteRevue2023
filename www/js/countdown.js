// Set the date and time of the event (change this to your event's date and time)
const eventDate = new Date('April 28, 2023 20:00:00').getTime();

// Update the countdown timer every second
const countdown = setInterval(function() {
    // Get the current date and time
    const now = new Date().getTime();

    // Calculate the time remaining until the event date
    const timeRemaining = eventDate - now;

    // Calculate the days, hours, minutes, and seconds remaining
    const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
    const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

    // Update the countdown timer display
    document.getElementById('countdown').innerHTML = `
    <div>
      <span>${days}</span>
      <label>days</label>
    </div>
    <div>
      <span>${hours}</span>
      <label>hours</label>
    </div>
    <div>
      <span>${minutes}</span>
      <label>minutes</label>
    </div>
    <div>
      <span>${seconds}</span>
      <label>seconds</label>
    </div>
  `;

    // If the event date has passed, clear the countdown timer
    if (timeRemaining < 0) {
        clearInterval(countdown);
        document.getElementById('countdown').innerHTML = 'The event has already taken place!';
    }
}, 1000);
