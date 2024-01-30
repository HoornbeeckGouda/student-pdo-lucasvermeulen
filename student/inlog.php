<?php
include('header.php')

?>
<form method="POST" action="function/validation.php" >
    <label for="html" >Rol:</label>
    <input type="text" id="rol" name="rol">

    <label for="html" >PASSWORD:</label>
    <input type="PASSWORD" id="PASSWORD" name="password" >

    <input type="submit" value="Submit">
</form> 

<?php   
include('footer.php')
?>
