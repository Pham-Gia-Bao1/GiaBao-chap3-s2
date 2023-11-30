<?php require_once 'templates/header.php' ?>

<?php
$colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];

if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    $subject = $_POST['Subject'];
}
?>

<div class="card">
    <div class="card-body">
        <?php
        // subjects
        if (isset($subject)) {
            foreach ($subject as $item) {
                if ($item == "HTML") {
                    $color = "m-3 btn btn-" . $colors[0];
                    echo "<button class=\"$color\">$item</button>";
                }
                if ($item == "CSS") {
                    $color = "m-3 btn btn-" . $colors[1];
                    echo "<button class=\"$color\">$item</button>";
                }
                if ($item == "JavaScript") {
                    $color = "m-3 btn btn-" . $colors[2];
                    echo "<button class=\"$color\">$item</button>";
                }
                if ($item == "PHP") {
                    $color = "m-3 btn btn-" . $colors[5];
                    echo "<button class=\"$color\">$item</button>";
                }
            }
        }
        ?>
    </div>
</div>

<?php require_once 'templates/footer.php' ?>