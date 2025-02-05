<!DOCTYPE html>
<html lang="en">

<!-- Configuração da Página -->

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon-32x32.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  <link rel="stylesheet" href="global.css" />
  <link rel="stylesheet" href="style.css" />
  <script defer src=""></script>

  <title>Frontend Mentor | Contact form</title>
</head>

<!-- Início do Formulário -->

<body>
  
    
    <form class="row g-3" method="POST" action="includes/formhandler.php">
      <h2>Contact Us</h2>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">First Name *</label>
        <input name="firstname" type="text" class="form-control" id="inputName" />

      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Last Name *</label>
        <input name="lastname" type="text" class="form-control" id="inputLast" />

      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Email Address *</label>
        <input name="email" type="email" class="form-control" id="inputAddress" placeholder="" />
      </div>

      <div class="content-check">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault" />
          <label class="form-check-label" for="flexRadioDefault1">
            General Enquiry
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" />
          <label class="form-check-label" for="flexRadioDefault2">
            Support Request
          </label>
        </div>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Message *</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="check" name="consent" id="consent" />
        <label class="form-check-label" for="flexCheckDefault">
          I consent to being contacted by the team *
        </label>
        <div style="color:red">
        </div>
      </div>
      <button type="submit" class="btn btn-primary" id="myBtn">
        Submit
      </button>
    </form>
  


</body>

</html>