<?php
/* ---- $_GET & $_POST superglobals ---- */

/*
we can pass data through urls and forms using the $_GET and $_POST superglobals

$_GET - urls and forms
$_POST - forms
*/

if (isset($_POST['submit'])){
    echo $_POST['name'];
    echo $_POST['age'];
}

?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=nana&age=22">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
    <label for="name">Name: </label>
    <input type="text" name="name">
</div>
<div>
    <label for="name">Age: </label>
    <input type="text" name="age">
</div>
<input type="submit" value="Submit" name="submit">
</form>