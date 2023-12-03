<?php require_once 'templates/header.php' ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $number = $_POST["number"];
    $message = $_POST["message"];
    $province = $_POST["province"];
    $subject = $_POST["subject"];
    $gender = $_POST["gender"];
}

?>
<table class="table table-striped table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Gender</th>
        <th>Subject</th>
    </tr>
    <?php
  
    ?>
        <tr>
            <td><?php echo $name ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $password; ?></td>
            <td><?php echo $number; ?></td>
            <td><?php echo $message; ?></td>
            <td><?php echo $province; ?></td>
            <td>
                <?php 
                   // subjects
                   if (isset($subject)) {
                    foreach($subject as $value){
                        echo $value . ' | ';
                    }
                }
                ?>
            </td>
            <td><?php echo $gender; ?></td>
        </tr>
 
</table>
<?php require_once 'templates/footer.php' ?>