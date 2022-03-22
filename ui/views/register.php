<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Sign Up - Hill</title>

        <link rel="stylesheet" type="text/css" href="/ui/styles/main.css">
        <link rel="stylesheet" type="text/css" href="/ui/styles/navbar.css">
        <link rel="stylesheet" type="text/css" href="/ui/styles/signup.css">
        <link rel="stylesheet" type="text/css" href="/ui/styles/footer.css">
        <link rel="stylesheet" type="text/css" href="/ui/styles/cards.css">

    </head>
    <body>

        <header class="navbar">
            <div class="navbar_container">
                <h1>hill</h1> 
            </div>

            <nav class="navbar__items">
                <a href="">Latest</a>
                <a href="">Categories</a>
                <a href="">Privacy Policy</a>
            </nav>
        </header>

        <div class="signup">
            <form method="POST" action="/user/register">
                <h1>Create your account.</h1> 

                <input type="text" name="name" placeholder="Name" />
                <input type="text" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <input type="password" name="passwordConfirm" placeholder="Confirm the password" />
                <button type="submit">Create account</button>


                <?php if(isset($_SESSION["error"])) { ?>

                    <span class="card__error" style="margin-top: 20px;"><?= $this->e($_SESSION['error']) ?></span>

                <?php } session_unset(); ?>

            </form>
        </div>
 
        <footer>
            <main>
                <nav>
                    <h1>About</h1>
                    <ul>
                        <li><a href="">Label1<a></li>
                        <li><a href="">Label2<a></li>
                        <li><a href="">Label3<a></li>
                    </ul>
                </nav>

                <nav>
                    <h1>Services</h1>
                    <ul>
                        <li><a href="">Label1<a></li>
                        <li><a href="">Label2<a></li>
                        <li><a href="">Label3<a></li>
                    </ul>
                </nav>

                <nav>
                    <h1>Contact</h1>
                    <ul>
                        <li><a href="">Label1<a></li>
                        <li><a href="">Label2<a></li>
                        <li><a href="">Label3<a></li>
                    </ul>
                </nav>
            </main> 
        </footer>

    </body>
</html>
