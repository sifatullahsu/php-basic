<?php include 'header.php'; ?>

<div class="main-body-section">
    <div class="container">

        <?php
        session_start();
        $br = "<br>";

        $_SESSION['username'] = "sifat";
        $_SESSION['password'] = "12345";



        echo "The username is " . $_SESSION['username'] . $br;
        // session_unset();
        echo "The password is " . $_SESSION['password'] . $br;

        session_destroy();



        ?>

    </div>
</div>

<?php include 'footer.php'; ?>