<!DOCTYPE html>
<html>
    <head>
        <meta charset =  "utf-8"/>
        <title>Lucky Numbers</title>
        <link href = "css/styles.css" rel = "stylesheet" type = "text/css" />
        <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet"> 
    </head>
    <body>
        <header>
            <figure id = "logo">
                <img height = 200px width = 400px src = "logo.jpg">
            </figure>
            <hr width = "50%"/>
            <h2>Your Lucky Numbers:</h2>
        </header>
        <main>
            <div id = "fortune">
                <?php
                    function displayLuckyNums()
                    {
                        $luckyNums = array();
                        
                        for($i = 0; $i < 10; $i++)
                        {
                            $key = rand(1,99);
                            
                            if(in_array($key, $luckyNums))
                            {
                                $i--;
                            }
                            else 
                            {
                                array_push($luckyNums, $key);
                            }
                            echo "<script>console.log('Here')</script>";
                        }
                        
                        for($i = 0; $i < 10; $i++)
                        {
                            echo $luckyNums[$i]." ";
                            array_pop($luckyNums);
                        }
                        // $fortune = rand(1,5);
            
                        // switch($fortune)
                        // {
                        //     case 1: echo "5, 41, 7, 84, 37";
                        //             break;
                        //     case 2: echo "23, 4, 77, 16, 52";
                        //             break;
                        //     case 3: echo "70, 21, 3, 12, 66";
                        //             break;
                        //     case 4: echo "18, 47, 98, 45, 2";
                        //             break;
                        //     case 5: echo "1, 17, 54, 47, 77";
                    }
                    
                ?>
            </div>
            <figure id = "Lucky Nums">
                <nav>
                <a href="luckyNumbers.php">
                    <div class="container2">
                    <img src="fortuneCookieNum2.jpg" alt="originalCookie" style="width:400px; height:350px; border:0;">
                    <div class="centered2"><?php displayLuckyNums(); ?></div>
                    </div>
                </a> 
                </nav>
            </figure>
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
            &copy; Sovreign-Ariel S. McCarthy <br/>
        </footer>
    </body>
</html>