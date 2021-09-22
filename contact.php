<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/app.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="shortcut icon" href="./assets/images/favicon.png">
    <title>HDFC Bank | Transaction History</title>
  </head>
  <body>
    <?php 
      include "./components/header.php";
    ?>
    <main class="crtbanking">
      <div class="crtComponent">
        <?php
            require "./components/all-in-one-component.php"
        ?>
        <div class="compMainNav">
          <h2>~~ Contact Us ~~</h2>
          <div class="contact">
              <h1>HDFC Bank</h1>
              <hr>
              <div class="contactDetails">
                  <h4><strong>Address:</strong> Ground Floor, Venus Apartment, Mumbai, India </h4>
                  <h4><strong>Phone:</strong> +91 75739 19585</h4>
                  <h4><strong>Fax:</strong> (020)876456</h4>
                  <h4><strong>Email: </strong> hdfcbank@query.com</h4>
              </div>
              <hr>

          </div>
          </div>
        </div>
      </div>
    </main>
    <?php 
        include './components/footer.php';
    ?>
  </body>
</html>
