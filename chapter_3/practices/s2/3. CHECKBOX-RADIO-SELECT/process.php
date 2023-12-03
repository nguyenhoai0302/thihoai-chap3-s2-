<?php 
    // HEADER
    require_once("templates/header.php");
?>
<?php
// YOUR CODE HERE
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $province = $_POST["province"];
    $subject = $_POST["subject"];
    $gender = $_POST["gender"];

    $maleImage = "images/male.png";
    $femaleImage = "images/female.png";
}

?>
    <div class="card mb-3">
        <div class="card-header">Province</div>
        <div class="card-body">
            <h2 class="display-3"><?php echo $province; ?></h2>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">Gender</div>
        <div class="card-body">

        <!-- YOUR CODE HERE [gender] -->
        <?php 
            if ($gender == "Male") {
                echo '<img src="' . $maleImage . '" alt="Male" style=" width: 10%; height: auto;">';
            } else {
                echo '<img src="' . $femaleImage . '" alt="Female" style="width: 10%; height: auto;">';
            }
        ?>
        </div>
    </div>
    <div class="card">
        <div class="card-header">Subject</div>
        <div class="card-body">
        <?php 
            // YOUR CODE HERE [subject]
            if (isset($subject)) {
                foreach($subject as $value){
                    echo   '<button type="submit" class="btn btn-primary me-3">' . $value . '</button>';
                }
            }
        ?>
        </div>
    </div>

<?php 
    // FOOTER 
    require_once("templates/footer.php");
?>