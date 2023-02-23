<html>

<head>
    <script>
    let copyText = document.querySelector(".abc");
    copyText.querySelector("button").addEventListener("click", function() {

        copyText.classList.add("active");
    });
    alert('hello');
    </script>
</head>

</html>


<?php



plugin_by_sifat_function();

function plugin_by_sifat_function() {

?>
<div class="rr-star-admin">Replace # with your rating 1 to 5</div>
<span class="rr-url-output">[star rating="#"]</span>

<hr>

<form action="" method="post" name='rr-form' class="rr-url">
    <span>
        <p>Enter Your Link</p>
        <input type="url" name="rr_button_url" placeholder="Enter Your Link..." required>
        <input type="submit" name="rr_button_submit" value="Generate Deal Button">
    </span>
</form>

<?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $rr_button_url = $_POST['rr_button_url'];

        echo '<span class="rr-url-output">[deal link="' . $rr_button_url . '"]</span>';
    ?>
<div class="abc">
    <button>Copy Text</button>
</div>


<?php
    }
}



?>
<style>
.rr-url {
    margin-bottom: 15px;
}

.rr-url input[type="url"] {
    width: 100%;
    padding: 5px 15px;
    margin-bottom: 10px;
    border-radius: 2px;
    background: #f0f0f0;
    border-color: #ddd;
}

.rr-url input[type="submit"] {
    background: #333;
    border: unset;
    color: #fff;
    padding: 8px 15px;
    border-radius: 4px;
}

.rr-url input[type="submit"]:hover {
    background: #000;
}

.rr-url-output {
    background: #f0f0f0;
    padding: 5px 8px;
    box-shadow: 0px 0px 3px 2px #e0e0e0 inset;
    line-height: 2.2;
}

.rr-star-admin {
    margin-bottom: 10px;
}
</style>
<?php

?>