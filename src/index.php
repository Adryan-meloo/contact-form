<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- displays site properly based on user's device -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./assets/images/favicon-32x32.png" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  <link rel="stylesheet" href="global.css" />
  <link rel="stylesheet" href="style.css" />
  <script defer src="script.js"></script>

  <title>Frontend Mentor | Contact form</title>
</head>

<?php

$FirstNameError = "";
$LastNameError = "";
$EmailError = "";
$flexRadioDefaultError = "";
$messageError = "";
$flexRadioDefault2Error = "";

$FirstName = "";
$LastName = "";
$Email = "";
$flexRadioDefault = "";
$message = "";
$flexRadioDefault2 = "";

$cont = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["PrimeiroNome"])) {
    $FirstNameError = "This field is required";
  }else{
    $FirstName = test_input($_POST["PrimeiroNome"]);
  }
  if (empty($_POST["SegundoNome"])) {
    $LastNameError = "This field is required";
  }else{
    $LastName = test_input($_POST["SegundoNome"]);
  }

  if (empty($_POST["email"])) {
    $EmailError = "Please enter valid email address";
  }else{
    $Email = test_input($_POST["email"]);
  }
  if (empty($_POST["flexRadioDefault"])) {
    $flexRadioDefaultError = "Please select a query type";
  }else{
    $flexRadioDefault = test_input($_POST["flexRadioDefault"]);
  }

  if (empty($_POST["message"])) {
    $messageError = "This field is required";
  }else{
    $message = test_input($_POST["message"]);
  }

  if (empty($_POST["flexRadioDefault2"])) {
    $flexRadioDefault2Error = "To submit this form, please consent to being contacted";
  }else{
    $flexRadioDefault2 = test_input($_POST["flexRadioDefault2"]);
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
}

?>

<body>
  <div class="container-main">
    <p>Contact Us</p>
    <form class="row g-3" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">First Name *</label>
        <input name="PrimeiroNome" type="text" class="form-control" id="inputName" value="<?php echo $FirstName?>"/>
        <div style="color:red"><?php echo $FirstNameError?></div>
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Last Name *</label>
        <input name="SegundoNome" type="text" class="form-control" id="inputLast" value="<?php echo $LastName?>" />
        <div style="color:red"><?php echo $LastNameError?></div>
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Email Address *</label>
        <input
          name="email"
          type="email"
          class="form-control"
          id="inputAddress"
          placeholder=""
          value="<?php echo $Email?>"
          />
      </div>
      <div style="color:red"><?php echo $EmailError?></div>
      <div class="content-check">
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="flexRadioDefault"
            id="flexRadioDefault1"
            
            />
          <label class="form-check-label" for="flexRadioDefault1">
            General Enquiry
          </label>
        </div>
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            name="flexRadioDefault"
            id="flexRadioDefault2"
             />
          <label class="form-check-label" for="flexRadioDefault2">
            Support Request
          </label>
        </div>
      </div>
      <div style="color:red"><?php echo $flexRadioDefaultError?></div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Message *</label>
        <textarea
          class="form-control"
          id="exampleFormControlTextarea1"
          rows="3"
          name="message"
          ></textarea>
          <div style="color:red"><?php echo $messageError?></div>
      </div>

      <div id="consent" class="form-check">
        <input
          class="form-check-input"
          type="checkbox"
          value="check"
          name="flexRadioDefault2"
          id="flexCheckDefault"
          
           />
        <label class="form-check-label" for="flexCheckDefault">
          I consent to being contacted by the team *
        </label>
        <div style="color:red">
          <?php echo $flexRadioDefault2Error?>
        </div>
      </div>
      <button type="submit" class="btn btn-primary" id="myBtn">
        Submit
      </button>
    </form>
  </div>

  <div id="modal" class="janela">
    <i class="fa-regular fa-circle-check"></i><span>Message Sent!</span>
    <p>Thanks for completing the form. We'll be in touch soon</p>
    <div id="progressBar" class="progressBar"></div>
  </div>
</body>

</html>