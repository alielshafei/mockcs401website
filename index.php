<?php
session_start();
$_SESSION['signupErr'] = array();
$_SESSION['loginErr'] = array();
// echo "<pre>" . print_r($_COOKIE,1) . "</pre>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elsh Wear & Tear</title>
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="icon" sizes="57x57" href="Images/logo.png" />
</head>

<body>
    <header>
        <a href="index.php"><img src="Images/logo.png" alt="logo" class="logo"></a>
        <nav>
            <ul>
                <li>
                    <?php
                            if(count($_COOKIE)>1){
                            echo "
                            <div class = 'complexNav'
                                <ul>
                                    <li><button>
                                            <img src='Images/user.png' alt='user' class='user'>
                                        </button> 
                                        <div class='dropdown-content'>
                                            <a href='logout.php'>Logout</a>
                                        </div>
                                    </li>
                                    <li>
                                        <strong><h3>Welcome!
                                        </strong></h3>
                                    </li>
                                </ul>
                            </div>";

                            }

                            else {
                                echo "
                                <button>
                                    <a href=login.php>
                                        <img src='Images/user.png' alt='user' class='user'>
                                    </a>
                                </button> 
                                <div class='dropdown-content'>
                                    <a href='login.php'>Login</a>
                                    <a href='signUp.php'>Sign Up</a>
                                </div>";
                            }
                        ?>



                </li>
                <li><a href="Accessories.php">
                        <h3>Accessories</h3>
                    </a></li>
                <li><a href="women.php">
                        <h3>Women</h3>
                    </a></li>
                <li><a href="men.php">
                        <h3>Men</h3>
                    </a></li>
                <li class="home"><a href="index.php">
                        <h3>Home</h3>
                    </a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <img src="Images/main3.png" alt="main" class="main">
        <a href=""><img src="Images/logo.png" alt="logo" class="masterLogo"></a>
    </div>

    <section>
        <H1><q>Welcome to Elsh Wear & Tear, your best source for mens and womens denim wear and accessories !</q></H1>

        <div class="mainSection">
            <div class="leftSection">
                <img src="/Images/user2.png" alt="user2" class="users">
                <p>
                    <!-- The moment I recieved my large denim jacket, I could tell instantly that the quality was top of the line!
                    I would recommend these jackets and products to anyone who is interested. -->
                    The pain itself is pain, it loves the main adipisicing process. No pain was born among them, but in 
                    the enduring of the great services, the main purpose of these events was not to be unencumbered. 
                    Resilience takes on all pain, but it will come when it seeks to catch him with debts; Hard work, 
                    obstacles, choice as we accuse the wise man of pleasure, but that indulgence often escapes; We deem 
                    the very annoyances which must be avoided, those who are right to welcome him, for those whom we praise 
                    should be rejected by any one of us with greater sorrows! 
                </p>
            </div>

            <div class="rightSection">
                <img src="/Images/user1.png" alt="user1" class="users">
                <p>The pain itself is pain, it loves the main adipisicing process. No pain was born among them, but in 
                    the enduring of the great services, the main purpose of these events was not to be unencumbered. 
                    Resilience takes on all pain, but it will come when it seeks to catch him with debts; Hard work, 
                    obstacles, choice as we accuse the wise man of pleasure, but that indulgence often escapes; We deem 
                    the very annoyances which must be avoided, those who are right to welcome him, for those whom we praise 
                    should be rejected by any one of us with greater sorrows! 
            </div>
        </div>

    </section>

    <div class="buttonArea">
        <button class="orderButton"><a href="order.php">Order Now!</a></button>

    </div>

    <div class="footer">

        <img src="Images/facebook.svg" alt="facebook">
        <img src="Images/instagram.svg" alt="instagram">
        <img src="Images/youtube.svg" alt="youtube">

    </div>

    <ul class="footerFinal">
        <li><a href="#">
                <h4>Terms and Conditions</h4>
            </a> </li>
        <li><a href="#">
                <h4>Contact Us</h4>
            </a></li>
    </ul>

    </div>

</body>

</html>