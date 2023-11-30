<?php // HEADER 
require('./templates/header.php');
?>
<?php
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    $province = $_POST['province'];
    $gender  = $_POST['gender'];
    $subject  = $_POST['Subject'];
}
?>
<div class="card mb-3">
    <div class="card-header">Province</div>
    <div class="card-body">
        <h2 class="display-3"><?php if (isset($province)) {echo $province;} ?></h2>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header">Gender</div>
    <div class="card-body">
        <?php if (isset($gender)) {
             if ($gender == "Male"){
                echo '<img class='.'"rounded-circle w-25 h-"'.' src="./images/male.png" alt="">';
             } else{
                 echo '<img class='.'"rounded-circle w-25"'.'  src="./images/female.png" alt="">';
             }
        } ?>
    </div>
</div>
<div class="card">
    <div class="card-header">Subject</div>
    <div class="card-body">
        <?php
         if (isset($subject)){
             foreach($subject as $item){
                 echo '<button class='.'"btn btn-primary m-2"'. ">$item</button>";
             }
         }
        ?>
    </div>
</div>

<?php // FOOTER 
require("./templates/footer.php");
?>