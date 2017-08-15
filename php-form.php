<!DOCTYPE>
<html>
<head>
    <title>PHP Form</title>
</head>
<body>
<?php
    $name = '';
    $passowrd = '';
    $comments = '';
    $gender = '';
    $tc = '';
    $color = '';
    $languages = array();

    if (isset($_POST['submit'])) {
        $ok = true;
        if (!isset($_POST['name']) || $_POST['name'] === '') {
            $ok = false;
        } else {
            $name = $_POST['name'];
        }
        if (!isset($_POST['password']) || $_POST['password'] === '') {
            $ok = false;
        } else {
            $password= $_POST['password'];
        }
        if (!isset($_POST['comments']) || $_POST['comments'] === '') {
            $ok = false;
        } else {
            $comments = $_POST['comments'];
        }
        if (!isset($_POST['gender']) || $_POST['gender'] === '') {
            $ok = false;
        } else {
            $gender = $_POST['gender'];
        }
        if (!isset($_POST['tc']) || $_POST['tc'] === '') {
            $ok = false;
        } else {
            $tc = $_POST['tc'];
        }
        if (!isset($_POST['color']) || $_POST['color'] === '') {
            $ok = false;
        } else {
            $color = $_POST['color'];
        }
        if (!isset($_POST['languages']) || count($_POST['languages']) === 0
            || !is_array($_POST['languages'])) {
            $ok = false;
        } else {
            $languages = $_POST['languages'];
        }

        // process form
        if ($ok) {
            printf('User name: %s
            <br />Password: %s
            <br />Gender: %s
            <br />Color: %s
            <br />Language(s): %s
            <br />Comments: %s
            <br />T&amp;C: %s',
                htmlspecialchars($_POST['name']),
                htmlspecialchars($_POST['password']),
                htmlspecialchars($_POST['gender']),
                htmlspecialchars($_POST['color']),
                htmlspecialchars(implode(', ',$_POST['languages'])),
                htmlspecialchars($_POST['comments']),
                htmlspecialchars($_POST['tc'])
            );
        }
    }
//echo $_POST['pwd'];
?>
<form method="post" action=''>

    Username:<input type='text' name='name' value="<?php
        echo htmlspecialchars($name);
     ?>"/><br />
    Password:<input type='password' name='password' value="<?php
        echo htmlspecialchars($password);
     ?>"/><br />
    Gender:
        <input type='radio' name ='gender' value="f" />Female
        <input type='radio' name ='gender' value="m" />Male<br />
    Favorite color:
        <select name='color'>
            <option value="#f00">Red</option>
            <option value="#0f0">Green</option>
            <option value="#00f">Blue</option>
        </select><br />
    Languages Spoken:
        <select name="languages[]" multiple size="3">
            <option value="en">English</option>
            <option value="fr">French</option>
            <option value="it">Italian</option>
        </select><br />
    Comments: <textarea name="comments"><?php
        echo htmlspecialchars($comments);
     ?></textarea><br />
    <input type="checkbox" name="tc" value="ok" />I accept the T&amp;C<br />
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
