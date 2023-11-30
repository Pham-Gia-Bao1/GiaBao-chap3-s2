<?php require_once 'templates/header.php' ?>
<table class="table table-striped table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Subject</th>
        <th>Gender</th>
    </tr>
    <?php
     if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST"){
        $name = $_POST['name'];
        $number = $_POST['number'];
        $email  = $_POST['email'];
        $password = $_POST['password'];
        $message = $_POST['message'];
        $province = $_POST['province'];
        $gender  = $_POST['gender'];
        $subject  = $_POST['Subject'];

     }
  
    ?>
        <tr>
            <td><?php if (isset($name)) {echo $name;} ?></td>
            <td><?php if (isset($email)) {echo $email;} ?></td>
            <td><?php if (isset($password)) {echo $password;} ?></td>
            <td><?php if (isset($number)) {echo $number;} ?></td>
            <td><?php if (isset($message)) {echo $message;}?></td>
            <td><?php if (isset($province)) {echo $province;} ?></td>
            <td>
                <?php 
                   // subjects
                   if (isset($subject)){
                    foreach($subject as $item){
                        echo "<p>$item</p>";
                    }
                }
                ?>
            </td>
            <td><?php if (isset($gender)) {echo $gender;}?></td>
        </tr>
 
</table>
<?php require_once 'templates/footer.php' ?>