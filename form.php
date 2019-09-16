
<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://goliath.hypixel.net/cdn-cgi/apps/head/rsjQeg9CKMkfLDB8kU7GG-F1JRE.js"></script><link rel="shortcut icon" href="https://goliath.hypixel.net/favicon.png" type="image/x-icon">
<link rel="apple-touch-icon-precomposed" href="https://goliath.hypixel.net/favicon.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.22.0/css/uikit.min.css">
<style> 
  html, body {
      font-size: 16px;
      font-family: "Open Sans", sans-serif;
      font-family: 300;
      background: #222 !important;
  }

  .uk-button-success {
      background-color: #74bd68;
      color: #fff;
  }

  .uk-panel.uk-panel-box {
      background-color: #E8E8E8 !important;
      background: #E8E8E8;
      border-radius: 2px;
      padding: 0 10px 18px 15px;
  }

  .uk-form-row + .uk-form-row {
      margin-top: 5px !important;
  }

  .uk-form-horizontal .uk-form-label {
      width: 3px !important;
      text-align: right;
      margin-right: 0px;
  }

  .uk-form-horizontal .uk-form-controls .uk-button {
      margin-left: 100px !important;
  }

  .uk-form-controls .uk-button {
      margin-left: 100px !important;
  }
  @media (min-width: 960px) {
      .uk-form-horizontal .uk-form-controls {
          margin-left: 85px !important;
      }
  }
  .jumbotron {
    margin-top: 100px;
    margin-bottom: 100px;
    margin-left: 400px;
    margin-right: 400px;
  }
  .error {
    color: #FF0000;
  }
</style>
</head>
<body class="uk-height-1-1">

<?php
// define variables and set to empty values
$q1Err = $q2Err = $q3Err = $q4Err = $q5Err = $q6Err = $q7Err = $q8Err = $q9Err = $q10Err = "";
$q1 = $q2 = $q3 = $q4 = $q5 = $q6 = $q7 = $q8 = $q9 = $q10 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["q1"])) {
    $q1Err = "Dit moet u verplicht invullen!";
  } else {
    $q1 = test_input($_POST["q1"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$q1)) {
      $q1Err = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["q2"])) {
    $q2Err = "Dit moet u verplicht invullen!";
  } else {
    $q2 = test_input($_POST["q2"]);
    // check if e-mail address is well-formed
    if (!filter_var($q2, FILTER_VALIDATE_EMAIL)) {
      $q2Err = "Invalid Datum format";
    }
  }
    
  if (empty($_POST["q3"])) {
    $q3Err = "Dit moet u verplicht invullen!";
  } else {
    $q3 = test_input($_POST["q3"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$q3)) {
      $q3Err = "Invalid URL";
    }
  }

  if (empty($_POST["q4"])) {
    $q4Err = "Dit moet u verplicht invullen!";
  } else {
    $q4 = test_input($_POST["q4"]);
  }

  if (empty($_POST["q5"])) {
    $q5Err = "Dit moet u verplicht invullen!";
  } else {
    $q5 = test_input($_POST["q5"]);
  }

  if (empty($_POST["q6"])) {
    $q6Err = "Dit moet u verplicht invullen!";
  } else {
    $q6 = test_input($_POST["q6"]);
  }

  if (empty($_POST["q7"])) {
    $q7Err = "Dit moet u verplicht invullen!";
  } else {
    $q7 = test_input($_POST["q7"]);
  }

  if (empty($_POST["q8"])) {
    $q8Err = "Dit moet u verplicht invullen!";
  } else {
    $q8 = test_input($_POST["q8"]);
  }

  if (empty($_POST["q9"])) {
    $q9Err = "Dit moet u verplicht invullen!";
  } else {
    $q9 = test_input($_POST["q9"]);
  }

  if (empty($_POST["q10"])) {
    $q10Err = "Dit moet u verplicht invullen!";
  } else {
    $q10 = test_input($_POST["q10"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="new-form">
  <div class="jumbotron">
    <div class="form-group col-md-6">
      <h1>Meld misdaad anoniem <span class="badge badge-secondary"></span></h1>
      <p><span class="error">* required field</span></p>

      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        Beschrijf zo uitgebreid mogelijk de situatie waarover je wilt melden. <br>
        <input type="text" name="name" value="<?php echo $q1;?>">
        <span class="error">* <?php echo $q1Err;?></span>
        <br><br>

        Op welke datum heeft dit plaatsgevonden of gaat dit gebeuren? <br>
        <input type="date" name="email" value="<?php echo $q2;?>">
        <span class="error">* <?php echo $q2Err;?></span>
        <br><br>

        <h1>Weet je wie de dader is?</h1> <br>

        Kan je meer vertellen over deze persoon of personen? <br>
        <input type="tel" name="website" value="<?php echo $q3;?>">
        <span class="error">* <?php echo $q3Err;?></span>
        <br><br>

        Weet je het telefoonnummer van de dader(s)? <br>
        <input type="tel" name="website" value="<?php echo $q4;?>">
        <span class="error">* <?php echo $q4Err;?></span>
        <br><br>

        <h1>Waar speelt dit?</h1> <br>

        Woonplaats? <br>
        <input type="text" name="website" value="<?php echo $q5;?>">
        <span class="error">* <?php echo $q5Err;?></span>
        <br><br>

        Weet je het adres? <br>
        <input type="text" name="website" value="<?php echo $q6;?>">
        <span class="error">* <?php echo $q6Err;?></span>
        <br><br>

        <h1>Voertuigen</h1> <br>

        Gebruikt de dader een voertuig? <br>
        <input type="text" name="website" value="<?php echo $q7;?>">
        <span class="error">* <?php echo $q7Err;?></span>
        <br><br>

        <h1>Overige vragen</h1> <br>

        Heb je het bovenstaande zelf waargenomen of heb je het van iemand anders gehoord? <br>
        <input type="text" name="website" value="<?php echo $q8;?>">
        <span class="error">* <?php echo $q8Err;?></span>
        <br><br>

        Heb je nog meer informatie die van belang kan zijn ? <br>
        <input type="text" name="website" value="<?php echo $q9;?>">
        <span class="error">* <?php echo $q9Err;?></span>
        <br><br>

        Kan de dader weten dat jij de melder bent? <br>
        <input type="text" name="website" value="<?php echo $q10;?>">
        <span class="error">* <?php echo $q10Err;?></span>
        <br><br>

        <input class="btn btn-primary" type="submit" value="Submit"> 
      </form>
    </div>
  </div>
</div>
</body>
</html>