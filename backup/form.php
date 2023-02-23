<?php include 'header.php'; ?>
<div class="main-body-section">
    <div class="container">

        <?php

        // <script>alert("Hacked");</script>
        $br = "<br>";

        $full_name = $email = $comment = "";
        $full_nameErr = $emailErr = $commentErr = "";
        /* 
                        if( $_SERVER['REQUEST_METHOD'] == "POST" ){
                            $full_name      = validation ( $_REQUEST['full-name'] );
                            $email          = validation ( $_REQUEST['email'] );
                            $comment        = validation ( $_REQUEST['comment'] );

                            echo "Full Name: " . $full_name . $br . "Email: " . $email . $br . "Comments: " . $comment . $br;

                            if ( empty( $comment ) ){
                                echo "Comment is Empty... $br";
                            }
                        }
                        */

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            if (empty($_REQUEST['full-name'])) {
                $full_nameErr = "<span style='color: red;'>Name is required field...</span>";
            } else {
                $full_name = validation($_REQUEST['full-name']);
            }

            if (empty($_REQUEST['email'])) {
                $emailErr = "<span style='color: red;'>Email is required field...</span>";
            } elseif (!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)) {
                $emailErr = "<span style='color: red;'>Email is Not Validate...</span>";
            } else {
                $email = validation($_REQUEST['email']);
            }



            $comment = validation($_REQUEST['comment']);
        }

        echo $full_name . $br;
        echo $email . $br;
        echo $comment . $br;

        function validation($data)
        {
            $data = htmlspecialchars($data);
            $data = trim($data);
            $data = stripslashes($data);

            return $data;
        }

        ?>


        <form action=" <?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?> " method="post">

            <table>
                <tr>
                    <td>Full Name</td>
                    <td><input type="text" name="full-name">* <?php echo $full_nameErr; ?> </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email">* <?php echo $emailErr; ?> </td>
                </tr>
                <tr>
                    <td>Commernt</td>
                    <td><textarea name="comment" id="" cols="30" rows="6"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Submit"></td>
                </tr>
            </table>

        </form>

    </div>
</div>

<?php include 'footer.php'; ?>