<!DOCTYPE html>
<html>
    <head>
        <meta charset =  "utf-8"/>
        <title>Fortune Cookie</title>
        <link href = "css/styles.css" rel = "stylesheet" type = "text/css" />
        <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet"> 
    </head>
    <body>
        <header>
            <figure id = "logo">
                <img height = 200px width = 400px src = "logo.jpg">
            </figure>
            <hr width = "50%"/>
            <h2>Your Fortune:</h2>
        </header>
        <main>
            <div id = "fortune">
                <?php
                    function displayMessage()
                    {
                        $fortune = rand(1,5);
            
                        switch($fortune)
                        {
                            case 1: echo "<br/>Be what you like in others";
                                    break;
                            case 2: echo "<br/>Smile at the people you pass";
                                    break;
                            case 3: echo "All good things<br/>must come to an end<br/>(be prepared for this moment)";
                                    break;
                            case 4: echo "<br/> The bridge of practice is<br/>  the best road to success";
                                    break;
                            case 5: echo "Your future is determined<br/>by what<br/>you learn from your mistakes";
                        }
                    }
                ?>
            </div>
            <figure id = "Open Cookie">
                <nav>
                <a href="fortune.php">
                    <div class="container">
                    <img src="fortuneCookie.jpg" alt="originalCookie" style="width:400px; height:350px; border:0;">
                    <div class="centered"><?php displayMessage(); ?></div>
                    </div>
                </a> 
                </nav>
            </figure>
            <div id = "LuckyNums">
                <nav>
                    <a href="luckyNumbers.php">
                        <img src="fortuneCookieNum.jpg" alt="Check lucky numbers" style="width:400px; height:350px; border:0;">
                    </a> 
                </nav>
            </div>
            <div id = "Home">
                <nav>
                    <hr width = "20%"/>
                    <a href = "index.php">Home</a>
                    <hr width = "20%"/>
                </nav>
            </div>
        </main>
        <footer>
            <hr width = "50%"/>
            &copy; Morgan Hamilton <br/>
        </footer>
    </body>
</html>
