<!DOCTYPE>
<html>
<head>
    <title>PHP Form</title>
</head>
<body>
<form method="post" action=''>

    Username:<input type='text' name='txt' /><br />
    Password:<input type='password' name='pwd' /><br />
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
    Comments: <textarea name="comments"></textarea><br />
    <input type="checkbox" name="tc" value="ok" />I accept the T&amp;C< br />
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
