<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Reseller Login</title>

    <style>
        * {
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        *:before, *:after {
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            background: #2c3338;
            color: #606468;
            font: 87.5%/1.5em 'Open Sans', sans-serif;
            margin: 0;
        }

        a {
            color: #eee;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        input {
            border: none;
            font-family: 'Open Sans', Arial, sans-serif;
            font-size: 14px;
            line-height: 1.5em;
            padding: 0;
            -webkit-appearance: none;
        }

        p {
            line-height: 1.5em;
        }

        .clearfix {
            *zoom: 1;
        }
        .clearfix:before, .clearfix:after {
            content: ' ';
            display: table;
        }
        .clearfix:after {
            clear: both;
        }

        .container {
            left: 50%;
            position: fixed;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        /* ---------- LOGIN ---------- */
        #login {
            width: 280px;
        }

        #login form span {
            background-color: #363b41;
            border-radius: 3px 0px 0px 3px;
            color: #606468;
            display: block;
            float: left;
            height: 50px;
            line-height: 50px;
            text-align: center;
            width: 50px;
        }

        #login form input {
            height: 50px;
        }

        #login form input[type="text"], input[type="password"] {
            background-color: #3b4148;
            border-radius: 0px 3px 3px 0px;
            color: #606468;
            margin-bottom: 1em;
            padding: 0 16px;
            width: 230px;
        }

        #login form input[type="submit"] {
            border-radius: 3px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
            background-color: #ffa16e;
            color: #000;
            font-weight: bold;
            margin-bottom: 2em;
            text-transform: uppercase;
            width: 280px;
        }

        #login form input[type="submit"]:hover {
            background-color: #ffa16e;
        }

        #login > p {
            text-align: center;
        }

        #login > p span {
            padding-left: 5px;
        }
    </style>
</head>
<body>

<div class="container">

    <div id="login" class="mx-auto">

        @if(request('success') === "0")<div class="alert alert-danger" role="alert">Credentials doesn't match, Try again!!</div>@endif

        <form method="post">@csrf

            <fieldset class="clearfix">

                <p><span class="">E</span><input type="text" name="email" placeholder="Email" required></p>
                <p><span class="">P</span><input type="password" name="password"  placeholder="Password" required></p>
                <p><input type="submit" value="Sign In"></p>

            </fieldset>

        </form>
            <p><a href="{{ route('login') }}">Appframe Panel Login</a></p>
    </div> <!-- end login -->

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
{{--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>--}}
</body>
</html>