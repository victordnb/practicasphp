<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css" >
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
    
        <!-- Main -->
        <div id="main">
            <h1>the last news</h1>
            <article>
                <h2>Title of entry</h2>
                <p>Lorem ipsum dolor sit am
                    amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </article>
        </div>

        <!-- footer -->
        <footer id="footer">
            <p>Copyright &copy; 2021</p>
        </footer>

                




