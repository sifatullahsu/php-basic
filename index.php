<?php
include 'asset/header.php';





?>


<p id="demo">This is Sifat</p>

<button onclick="sifat()">Change Text</button>

<br>

<img src="" alt="">
<img src="asset/img/pic_bulboff.gif" alt="" id="bulb">

<button onclick="document.getElementById('bulb').src = 'asset/img/pic_bulboff.gif'">Turn Off light</button>
<button onclick="document.getElementById('bulb').src = 'asset/img/pic_bulbon.gif'">Turn On light</button>

<br>

<p id="test"></p>
<p id="test1"></p>
<p id="test2"></p>
<p id="pi"></p>



<script>
var x;
var y;
var z;

const PI = 3.1416;

x = 10;
y = 12;

z = x + y;
document.getElementById('test').innerHTML = "test = " + x + " + " + y + " = " + z;

if (true) {
    let x;
    let y;

    x = 20;
    y = 8;
    z = x + y;

    document.getElementById('test1').innerHTML = "test1 = " + x + " + " + y + " = " + z;

}

z = x + y;
document.getElementById('test2').innerHTML = "test = " + x + " + " + y + " = " + z;
document.getElementById('pi').innerHTML = PI;





function sifat() {
    document.getElementById('demo').innerHTML = "SIFAT";
    document.getElementById('demo').style.fontSize = '35px';
    alert('Bangladesh');
}
</script>


<p id="myname">This is the text that I need to replace. W3school</p>

<button onclick="myName()">Click Me</button>


<script>
function myName() {
    let my = document.getElementById('myname').innerHTML;

    document.getElementById('myname').innerHTML = my.replace('W3school', 'Team Bangladesh');
}
</script>


<?php










echo "<br><br><br><br>";


$db = new mysqli('localhost', 'root', '', 'php');

if (mysqli_connect_errno($db)) {
    echo 'Database Connection Faild...<br>';
} else {
    echo 'Connection Successfully Completed<br>';
}

echo $db->server_info;


// Create a Table into a DB
// Table : Persons > Colimns: (PersonID, FirstName, LastName, Address, City)
$create = "CREATE TABLE  Persons( PersonID int, FirstName varchar(255), LastName varchar(255), Address varchar(255), City varchar(255) );";
$db->query($create);


// Insert Data Into a DB Table.
// Table : tbl_user > Columns: (id, name, email, skill)
$insert = "INSERT INTO tbl_user VALUES ('7', 'Tom B. Erichsen', 'erichsen@email.com', 'JAVA');";
$db->query($insert);



// Update a Table_Cell Into a DB Table
// Table : tbl_user > Columns: (skill) > Row: (id='1')
$update = "UPDATE tbl_user SET skill='JS' WHERE id='1' ";
$db->query($update);



$insert_1 = "INSERT INTO tbl_user VALUE('8', 'Rifat', 'rifat@email.com', 'PHP');";
$db->query($insert_1);

$update_1 = "UPDATE tbl_user SET skill = 'mySQL' WHERE id = '8'";
$db->query($update_1);


$select_1 = "SELECT * FROM tbl_user";
$my_result = $db->query($select_1);

echo $br = "<br>";

//var_dump($my_result->fetch_object());

echo $br . $br;

while ($data = $my_result->fetch_object()) {
    $id = $data->id;
    $name = $data->name;
    $email = $data->email;
    $skill = $data->skill;

    echo "$id - $name - $email - $skill $br";
}

echo $br . $br;




$select = "SELECT * FROM tbl_user";
$results = $db->query($select);

while ($data = $results->fetch_object()) {
?>
<style>
table,
th,
td {
    border: 1px solid #ddd;
    border-collapse: collapse;
    border-spacing: 0;
}
</style>
<table>
    <tr>
        <td><?php echo $data->id; ?></td>
        <td><?php echo $data->name; ?></td>
        <td><?php echo $data->email; ?></td>
        <td><?php echo $data->skill; ?></td>
    </tr>
</table>
<?php
}

// ==================== Prepare Statement Start ======================= //

echo $br . $br;


// Fetch data from Database Table

$sql = "SELECT * FROM tbl_user";

$stmt = $db->prepare($sql);
$stmt->execute();
$stmt->bind_result($id, $name, $email, $skill);

while ($stmt->fetch()) {
    echo "$id - $name - $email - $skill $br";
}


$the_sql = "SELECT name FROM tbl_user";

$the_stmt = $db->prepare($the_sql);
$the_stmt->execute();
$the_stmt->bind_result($name);

while ($the_stmt->fetch()) {
    echo "$name $br";
}


// False Condition
if (1 == 2) {

    // Insert data into Database Table
    // Auto increment

    $sql_1 = "INSERT INTO tbl_user(name, email, skill) VALUES(?,?,?)";

    $stm_1 = $db->prepare($sql_1);
    $stm_1->bind_param('sss', $name, $email, $skill);

    $name = 'Ariful Islam 1';
    $email = 'ariful@email.com';
    $skill = 'php, java';

    $stm_1->execute();
}


// False Condition
if (1 == 2) {

    // Query 'name' from 'tbl_user' table & ID no. '12'

    $sql_3 = "SELECT name FROM tbl_user WHERE id = ?";
    $stmt_3 = $db->prepare($sql_3);
    $stmt_3->bind_param('i', $id);
    $id = 12;
    $stmt_3->execute();
    $stmt_3->bind_result($name);
    $stmt_3->fetch();
    echo $br . $br . $name;
}

// ==================== Prepare Statement End ======================= //





include 'asset/footer.php';