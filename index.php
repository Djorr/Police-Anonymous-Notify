
<!DOCTYPE html>
<html lang="en-gb" dir="ltr" class="uk-height-1-1">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Anoniemmelden</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
    </style>
</head>
<body class="uk-height-1-1">
    <div class="uk-vertical-align uk-text-center uk-height-1-1">
        <div class="uk-vertical-align-middle" style="width: 640px;">
            <form class="uk-panel uk-panel-box uk-form uk-form-horizontal" action="/attemptlogin" method="post">
                <input type="hidden" name="redirect" value="/home">
                <h1>Welkom!</h1>
                <span>Maak nu volledig anoniem een melding aan!</span><br><br>
                <a class="btn btn-primary" href="/form.php" role="button">Plaats een melding</a>
            </form>
        </div>
    </div>
</body>
</html>