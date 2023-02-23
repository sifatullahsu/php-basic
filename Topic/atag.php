<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>

    <div id="main">
        <div class="container">
            <div class="main-hf-section">
                <div class="container">
                    <h2>W3schools</h2>
                </div>
            </div>

            <div class="main-body-section">
                <div class="container">

                
                    <form action=" <?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                        <span> Username:</span>     
                        <input type="text" name="username" id="myInput"/>
                        <input type="submit" value="Submit"/>
                    </form>

                    
                    <?php
                        $br = "<br>";

                        if ( $_SERVER['REQUEST_METHOD'] == "POST" ){
                            $username = $_REQUEST['username'];
                            
                            $rr_empty = '<span style="color: red;">Username must not be empty...</span>';
                            $rr_not_empty = htmlspecialchars('<a href="' . $username . '">Read More</a>');

                            if ( empty( $username ) ){
                                echo $rr_empty;
                            } else {
                                echo '<span id="p3">' . $rr_not_empty . '</span>';
                            }
                        }

                        echo $br . $br. $br;

                    ?>

                    

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

                    <p id="p1">Hello, I'm TEXT 1</p>
                    <p id="p2">Hi, I'm the 2nd TEXT</p><br/>
                    
                    <button onclick="copyToClipboard('#p1')">Copy TEXT 1</button>
                    <button onclick="copyToClipboard('#p2')">Copy TEXT 2</button>
                    <button onclick="copyToClipboard('#p3')">Copy TEXT 2</button>
                    
                    
                    <script>
                        function copyToClipboard(element) {
                            var $temp = $("<input>");
                            $("body").append($temp);
                            $temp.val($(element).text()).select();
                            document.execCommand("copy");
                            $temp.remove();
                        }
                    </script>










                </div>
            </div>

            <div class="main-hf-section">
                <div class="container">
                    <h2>learn with live project</h2>
                </div>
            </div>

        </div>
        
    </div>

</body>
</html>

<?php


