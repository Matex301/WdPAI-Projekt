<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/public/css/start.css" rel="stylesheet">
    <link href="/public/css/tab.css" rel="stylesheet">
    <title>D&D Character Creator</title>
    <link rel="icon" type="image/x-icon" href="/public/img/favicon.ico">
</head>
<body>
    <div class="container">
        <div class="main">
            <p1 class="header">Character Creator</p1>
            <div class="logo">
                <img src="/public/img/logo.svg">
            </div>
            <div class="nav-tab">
                <button class="nav-button active" id="nav-button-login" onclick="openTab('login')">Login</button>
                <button class="nav-button" id="nav-button-register" onclick="openTab('register')">Register</button>
            </div>
            <?php
                if(isset($message)) {
                    echo '<div class="message">';
                    echo $message;
                    echo '</div>';
                }
            ?>
            <div class="tab-container">
                <div class="tab active" id="tab-login">
                    <form action="/login" method="post">
                        <input name="username" type="text" placeholder="Username" required>
                        <input name="password" type="password" placeholder="Password" required>
                        <button type="submit">Sign in</button>
                    </form>
                </div>
                <div class="tab" id="tab-register">
                    <form action="/register" method="post">
                        <input name="username" type="text" placeholder="Username" required>
                        <input name="email" type="email" placeholder="Email" required>
                        <input name="password" type="password" placeholder="Password" required>
                        <input name="rep-password" type="password" placeholder="Repeat Password" required>
                        <button type="submit">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="/public/js/tab.js"></script>
</body>
</html>