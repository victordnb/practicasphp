<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Blog</title>
</head>
<!-- body -->
<body>
    <!-- header -->
    <header id="header">
        <!-- LOGO -->
        <div id="logo">
            <a href="index.php">
                <img src="img/logo.png" alt="logo">
                Blog of VideoGames
            </a>
        </div>

        <!-- Menu -->
        <nav id="nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Category 1</a></li>
                <li><a href="contact.php">Category 2</a></li>
                <li><a href="contact.php">Category 3</a></li>
                <li><a href="contact.php">Category 4</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Aside -->
    <div id="container">
        <aside id="sidebar">
            <div id="login" class="block-aside">
                <h3>Login</h3>
                <form action="login.php" method="post">
                    <Label for="email">Email</Label>
                    <input type="email" name="email" id="email" placeholder="Email">
                    <Label for="password">Password</Label>
                    <input type="password" name="password" id="password" placeholder="Password">
                    <input type="submit" value="Login">
                </form>
            </div>
            <div id="register" class="block-aside">
                <h3>Register</h3>
                <form action="register.php" method="post">
                    <Label for="name">Name</Label>
                    <input type="text" name="name" id="name" placeholder="Name">
                    <Label for="email">Email</Label>
                    <input type="email" name="email" id="email" placeholder="Email">
                    <Label for="password">Password</Label>
                    <input type="password" name="password" id="password" placeholder="Password">
                    <input type="submit" value="Register">
                </form>
            </div>
        </aside>




