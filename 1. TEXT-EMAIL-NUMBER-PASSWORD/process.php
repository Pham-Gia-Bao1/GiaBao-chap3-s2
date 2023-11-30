<?php // HEADER
require("./templates/header.php");
?>
<ul class="list-group">
    <?php
    //get data from url 
    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_POST['name'];
        $number = $_POST['number'];
        $email  = $_POST['email'];
        $password = $_POST['password'];
        $message = $_POST['message'];
    }
    ?>
    <li class="list-group-item"><?php if (isset($name)) {echo $name;}?></li>
    <li class="list-group-item"><?php if (isset($email)) {echo $email;} ?></li>
    <li class="list-group-item"><?php if (isset($password)) {echo $password;} ?></li>
    <li class="list-group-item"><?php if (isset($number)) {echo $number;} ?></li>
    <li class="list-group-item"><?php if (isset($message)) {echo $message;} ?></li>

</ul>
<?php // FOOTER 
require("./templates/footer.php");
?>