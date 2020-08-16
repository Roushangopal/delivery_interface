
<?php require "connection.php"; ?>
<?php
$name = $_POST['firstname'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state =$_POST['state'];
$zip = $_POST['zip'];


$name1 = $_POST['secondname'];
$email1 = $_POST['email1'];
$address1 = $_POST['address1'];
$city1 = $_POST['city1'];
$state1 =$_POST['state1'];
$zip1 = $_POST['zip1'];

$q = "insert into users(p_user,d_user,email,email1,address,address1,city,city1,zip,zip1,state,state1) values ('$name','$name1','$email','$email1','$address','$address1','$city','$city1','$zip','$zip1','$state','$state1')";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

if($num==1)
{
    ?>
    <script>
    window.alert('Successful!');
    window.location.href='form.php';
    </script>
    <?php
}
else
{
?>
<script>
window.alert('Invalid input!.');
window.location.href='form.php';
</script>
<?php
}

?>
