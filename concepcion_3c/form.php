<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="post" action="output.php">
        <p><label for="inp01">Account:</label>
        <input type="text" name="account" id="inp01" size="40"></p>

        <p><label for="inp02">Password:</label>
        <input type="password" name="pw" id="inp02" size="40"></p>

        <p><label for="inp03">Nick Name:</label>
        <input type="text" name="nick" id="inp03" size="40"></p>

        <p>Preferred Time:</br>
        <input type="radio" name="when" value="am">AM</br>
        <input type="radio" name="when" value="pm">PM</br>

        <p>Classes Taken:<br>
        <input type="checkbox" name="class1" value="si502"> SI502 - Networked Tech<br>
        <input type="checkbox" name="class2" value="si539"> SI539 - App Engine<br>
        <input type="checkbox" name="class3" value="si543"> SI543 - Java<br></p>

        <p><label for="inp06">Which soda: </label>
        <select name="soda" id="inp06">
            <option value="0"> --Please Select--</option>
            <option value="1"> Coke</option>
            <option value="2"> Pepsi--</option>
            <option value="3"> Mountain Dew</option>
            <option value="4"> Orange Juice</option>
            <option value="5"> Lemonade</option>
        </select></p>

        <p><label for="inp07">Which Snack:</label>
        <select name="snack" id="inp07">
            <option value="">--Please Select--</option>
            <option value="chips">Chips</option>
            <option value="peanuts">Peanuts</option>
            <option value="cookie">Cookie</option>
        </select></p>

        <p><label for="inp09">Which are awesome?</label><br>
        <select multiple="multiple" name="code[]" id="inp09">
            <option value="python">Python </option>
            <option value="css">CSS </option>
            <option value="html">HTML </option>
            <option value="php">PHP </option>
        </select></p>

        <p><input type="submit" name="dopost" value="Submit"></p>
    </form>
</body>
</html>