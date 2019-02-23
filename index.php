<?php
require 'logic.php';
?>

<!DOCTYPE html>
<html lang='en'>
<head>

    <title>Greg's Website</title>
    <meta charset='utf-8'>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA"
          crossorigin="anonymous">

    <link href='/styles/app.css' rel='stylesheet'>

</head>
<body>
<h1>Week Day Finder</h1>
<h2>This program finds the week day associated with a date input by the user </h2>

<div>
    <section id='main'>

        <form method='POST' action='process.php'>

            <fieldset>
                <label>Select the month<br>
                    <select name='month' size='1' multiple>
                        <option value='January'>January</option>
                        <option value='February'>February</option>
                        <option value='March'>March</option>
                        <option value='April'>April</option>
                        <option value='May'>May</option>
                        <option value='June'>June</option>
                        <option value='July'>July</option>
                        <option value='August'>August</option>
                        <option value='September'>September</option>
                        <option value='October'>October</option>
                        <option value='November'>November</option>
                        <option value='December'>December</option>
                    </select>
                </label>

                <label>Enter the day number (must be from 1 - 31, inclusive)<br>
                    <input type='number'
                           name='day'
                           min='1'
                           max='31'
                           size='8'
                           autocomplete='off'
                           value='<?= $day ?? '' ?>'>
                </label>

                <label>Enter the year number (must be from 1900 - 2018, inclusive)<br>
                    <input type='number'
                           min='1900'
                           max='2018'
                           name='year'
                           size='8'
                           autocomplete='off'
                           value='<?= $year ?? '' ?>'>
                </label>

                <label>This is my birthday
                    <input type='checkbox' name='checked' <?php if (isset($checked) and $checked) echo 'checked' ?> >
                </label>

            </fieldset>

            <input type='submit' value='Submit' class='btn btn-primary'>

            <label>The week day for the input date is:<br>
                <input type='text' readonly name='weekDay' size='11' value='<?= $weekDay ?? '' ?>'>
            </label>
            <label>
                <input type='text'
                       readonly
                       name='birthday'
                       size='17'
                       style="border:none"
                       value='<?= $birthday ?? '' ?>'>
            </Label>

        </form>
    </section>
</div>
<footer>
    <a href='https://github.com/gjrett/p2'>View this project on Github</a>
</footer>

</body>
</html>