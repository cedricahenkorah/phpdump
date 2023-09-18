<?php
/* ---- sessions ---- */

/*
sessions are a way to store information (in variables) to be used across multiple pages. Unlike cookies, sessions are stored on the server.
*/
session_start();

if (isset($_POST['submit'])){
    // $name =  filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = htmlspecialchars($_POST['age']);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    
    $password = $_POST['password'];

    if ($username == 'John' && $password == 'password') {
        $_SESSION['username'] = $username;
        header('Location: /phpcrash/extras/dashboard.php');
    } else {
        echo 'incorrect login';
    }
}

?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=nana&age=22">Click</a>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<div>
    <label for="username">Username: </label>
    <input type="text" name="username">
</div>
<div>
    <label for="password">Password: </label>
    <input type="password" name="password">
</div>
<input type="submit" value="Submit" name="submit">
</form>