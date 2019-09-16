
<!DOCTYPE html>
<html lang="en-gb" dir="ltr" class="uk-height-1-1">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Anoniem melden</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://goliath.hypixel.net/cdn-cgi/apps/head/rsjQeg9CKMkfLDB8kU7GG-F1JRE.js"></script><link rel="shortcut icon" href="https://goliath.hypixel.net/favicon.png" type="image/x-icon">
<link rel="apple-touch-icon-precomposed" href="https://goliath.hypixel.net/favicon.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.22.0/css/uikit.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<style>
        html, body {
            font-size: 16px;
            font-family: "Open Sans", sans-serif;
            font-family: 300;
            background: #222 !important;
            overflow: hidden;
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
        .login {
            width: 400px;
            background-color: #ffffff;
            box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
            margin: 100px auto;
        }
        .login h1 {
            text-align: center;
            color: #5b6574;
            font-size: 24px;
            padding: 20px 0 20px 0;
            border-bottom: 1px solid #dee0e4;
        }
        .login form {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding-top: 20px;
        }
        .login form label {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50px;
            height: 50px;
            background-color: #3274d6;
            color: #ffffff;
        }
        .login form input[type="password"], .login form input[type="text"] {
            width: 310px;
            height: 50px;
            border: 1px solid #dee0e4;
            margin-bottom: 20px;
            padding: 0 15px;
        }
        .login form input[type="submit"] {
            width: 100%;
            padding: 15px;
            margin-top: 20px;
            background-color: #3274d6;
            border: 0;
            cursor: pointer;
            font-weight: bold;
            color: #ffffff;
            transition: background-color 0.2s;
        }
        .login form input[type="submit"]:hover {
            background-color: #2868c7;
            transition: background-color 0.2s;
        }
    </style>
</head>
<body class="uk-height-1-1">
    <div class="login">
        <h1>Admin - Inloggen</h1>
        <form action="authenticate.php" method="post">
            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="username" placeholder="Gebruikersnaam" id="username" required>
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" placeholder="Wachtwoord" id="password" required>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>