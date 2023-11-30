<?php // HEADER
   require("./templates/header.php");
   ?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $color = $_POST['color'];
        $range = $_POST['range'];
        $date = $_POST['date'];
    }
?>
    <div class="alert alert-secondary">
        <strong>Color: </strong> <span><?php //color; 
        if (isset($color)){
             echo $color;
        }
            ?></span>
    </div>
    <div class="alert alert-info">
        <strong>Range: </strong> <span><?php //range;
        if(isset($range)){
             echo $range;
        } ?></span>
    </div>
    <div class="alert alert-danger">
        <strong>Date: </strong> <span><?php //date;
        if(isset($date)){
            echo $date;
        } ?></span>
    </div>

<?php //FOOTER
   require("./templates/footer.php");
   ?>