<?php require_once 'templates/header.php' ?>
<?php

$colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];
// CODE HERE 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['subject'])) {
        $selectedSubjects = $_POST['subject'];
        shuffle($colors);
    }
}
?>
    <div class="card">
        
        <div class="card-body">
            <?php
            // CODE HERE
            if (isset($selectedSubjects)) {
                foreach ($selectedSubjects as $index => $subject) {
                    $color = $colors[$index % count($colors)];
                    echo '<button type="submit" class="btn btn-' . $color . ' me-3">' . $subject . '</button>';
                }
            }
            ?>
        </div>
    </div>


<?php require_once 'templates/footer.php' ?>
