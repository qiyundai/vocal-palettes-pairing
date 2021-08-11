<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vocal Palettes & Pairing</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="container__content">
            <h1 class="title">Petite Opera Presents Vocal Palettes & Pairings</h1>
            <p>
                Join Petite Opera for this fabulous event that educates your palate, expands your musical palette and engages all of your senses over the course of one afternoon.
            </p>
            <p>
                Only 50 seats available. <strong> Reservations for attendance accepted through August 26.</strong><br>
                If you cannot attend, please consider donating!
            </p>
        </div>
        <div class="container__form">
            <form class="rsvp-form" action="">
                <label for="name">Full Name</label>
                <input id="name" name="name" type="text" required>
                <label for="phone">Phone Number</label>
                <input id="phone" name="phone" type="tel" required>
                <label for="email">E-Mail</label>
                <input id="email" name="email" type="email" required>
                <label for="party">Number of Guest(s)</label>
                <div class="container__form__party">
                    <input id="party" name="party" type="number" required>
                    <p>Donation* per person: $100.00</p>
                </div>
                <button>Submit</button>
            </form>
            <p>- or -</p>
            <a class="link-donate" href="">I just want to donate</a>
        </div>
    </div>
</body>

<footer>
    <script type="text/javascript" src="script.js"></script>
</footer>
</html>