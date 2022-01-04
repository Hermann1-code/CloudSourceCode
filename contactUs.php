<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CloudSourceCode | Contact us</title>
    <link rel="stylesheet" href="styles/0133a29CSS/CloudCode01.css" />
    <link rel="stylesheet" href="styles/0133a29CSS/CloudCode02.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
      crossorigin="anonymous"
    />
</head>
<body>
    <!-- Navbar -->
    <?php require_once("includes/header01.php") ?>

    <!-- contact -->
    <section id="contact">
      <div class="title">
        <h2>Contact us</h2>
        <p style="font-size: larger;">
        The various service team of <strong class="titer">CloudSourceCode</strong> is available to journalists or individuals for any information, contact or information request. Email us to tell us more about what you want.
        </p>
      </div>
      <div class="contact">
        <div class="contact-form">
            <span class="Getmessage">Your message has been sent successfully. Thank you for your loyalty !</span>
          <form onsubmit="event.preventDefault()" method="" action="" id="form">
            <div class="row">
              <div class="input50">
                <input type="text" id="FirstName" name="FirstName" placeholder="First Name *" required>
                <!-- <small>Error message</small> -->
              </div>
              <div class="input50">
                <input type="text" name="LastName" placeholder="Last Name">
              </div>
            </div>
            <div class="row">
              <div class="input50">
                <input type="email" id="email" name="email" placeholder="Email *" required>
                <!-- <small>Error message</small> -->
              </div>
              <div class="input50">
                <input type="text" name="objet" placeholder="Subject">
              </div>
            </div>
            <div class="row">
              <div class="input100">
                <textarea name="message" id="message" placeholder="Message *" required></textarea>
                <!-- <small>Error message</small> -->
              </div>
            </div>
            <div class="row" style="width: 22%;">
              <div class="input100">
                <input type="submit" value="Send">
              </div>
            </div>
          </form>
        </div>
        <div class="contact-info">
          <div class="info-box">
            <img
              src="styles/0133a29IMG/0133a29SVG/address.png"
              class="contact-icon"
              alt=""
            />
            <div class="details">
              <h4>Address</h4>
              <p>28 Neon Tower, New York City, USA</p>
            </div>
          </div>
          <div class="info-box">
            <img
              src="styles/0133a29IMG/0133a29SVG/email.png"
              class="contact-icon"
              alt=""
            />
            <div class="details">
              <h4>Email</h4>
              <a href="mailto:anyone@example.com">anyone@example.com</a>
            </div>
          </div>
          <div class="info-box">
            <img
              src="styles/0133a29IMG/0133a29SVG/call.png"
              class="contact-icon"
              alt=""
            />
            <div class="details">
              <h4>Call</h4>
              <a href="tel:+19785555555">+1 978 555 5555</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <?php require_once("includes/footer01.php") ?>
</body>
</html>