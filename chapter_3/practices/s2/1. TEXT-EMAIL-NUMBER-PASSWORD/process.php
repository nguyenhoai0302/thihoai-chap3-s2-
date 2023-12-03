<?php 
    // HEADER
    require_once('templates/header.php');
?>
<ul class="list-group">
<?php
   // YOUR CODE HERE
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $message = $_POST["message"];
}
?>
    <li class="list-group-item">Name: <?php echo $name; ?></li>
    <li class="list-group-item">Email: <?php echo $email; ?></li>
    <li class="list-group-item">Password: <?php echo $password; ?></li>
    <li class="list-group-item">Number: <?php echo $number; ?></li>
    <li class="list-group-item">Message: <?php echo $message; ?></li>

</ul>
<?php 
    // FOOTER
    require_once('templates/footer.php');
 ?>
