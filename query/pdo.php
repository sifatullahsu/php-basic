<?php
include '../asset/header.php';



$host = "localhost";
$dbname = "php_pdo";

$dsn = "mysql:dbname=$dbname;host=$host;";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection Faild..." . $e->getMessage();
}

$br = "<br>";


if (0 == 1) {
    echo "PDO - Query Method - Select $br";

    $sql = "SELECT * FROM web_user";
    $result = $pdo->query($sql);

    foreach ($result as $value) {
        echo $value['id'] . ' - ' . $value['name'] . $br;
    }

    echo $br;
}


if (0 == 1) {
    echo "PDO - Prepare Method - Select $br";

    $sql = "SELECT * FROM web_user ";
    $result = $pdo->prepare($sql);
    $result->execute();

    foreach ($result as $value) {
        echo $value['id'] . ' - ' . $value['name'] . '<br>';
    }

    echo $br;
}


if (0 == 1) {
    echo "PDO - Prepare Method - Insert - Name Placeholder $br";

    $name = 'shafi ullah';
    $email = 'shafi@email.com';

    $sql = "INSERT INTO web_user(name, email) VALUES(:name, :email)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":name", $name, PDO::PARAM_STR);
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);
    $stmt->execute();

    echo $br;
}


if (0 == 1) {
    echo "PDO - Prepare Method - Insert - Question Mark Placeholder $br";

    $name = "Mofiz Uddin";
    $email = "mofiz@email.com";

    $sql = "INSERT INTO web_user (name, email) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $arr = [$name, $email];
    $stmt->execute($arr);

    echo $br;
}


/* Have the function TimeConvert(num) take the num parameter being passed and return the number of hours and minutes the parameter converts to (ie. if num = 63 then the output should be 1:3). Separate the number of hours and minutes with a colon.

Once your function is working, take the final output string and intersperse it character-by-character with your ChallengeToken.

Your ChallengeToken: on9davm8ref */


if (0 == 44) {

    $ch = curl_init('https://coderbyte.com/api/challenges/json/json-cleaning');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data = curl_exec($ch);
    curl_close($ch);


    print_r(json_decode($data, true));
}







include '../asset/footer.php';