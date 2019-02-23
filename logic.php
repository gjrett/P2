<?php
/*
 * This is the logic file for index.php; it's job is to check the
 * SESSION for results, and if available, store the results in variables we
 * can display in index.php
 */

session_start();

# Get `results` data from session, if available
if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];

    $day = $results['day'];
    $month = $results['month'];
    $year = $results['year'];
    $weekDay = $results['weekDay'];

    # TIP: Because the key values for $results all match the variable names we set them do,
    # we could simplify the above 4 lines using PHP's extract function:
    #
    # extract($results);
    #
    # http://php.net/manual/en/function.extract.php
}
# Clear session data so our search is cleared when the page is refreshed
session_unset();


/*
Day of the month number
Month offset array, monthOffset[0,6,2,2,5,0,3,5,1,4,6,2,4]
decadeOffset[1,6,5,3,2,0,6,4,3,1,0,5] 1900=0, 1910=1,…2000 = 10, 2010=11
Last part of year offset
leapYearOffsetEven[0,0,0,0,1,1,1,1,2,2]
leapYearOffsetOdd[0,0,1,1,1,1,2,2,2,2]
If month is Jan or Feb in a leap year, subtract 1
Divide by 7, remainder is day of the week
dayOfWeek[Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday]
*/