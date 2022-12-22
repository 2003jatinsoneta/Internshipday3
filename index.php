<html>
<body>
<h1><marquee>Hi its me jatin</marquee> 
<h1>
<?php
session_start();
if(isset($_SESSION['user'])){
?>
<h1>this is logged in to page</h1>
<button onclick="window.location.href='logout.php'" type="button">logout</button>
<?php
}
else
{
    ?>
    <h1>this is  not the logged in page </h1>
    <?php
}
?>
</body>
</html>