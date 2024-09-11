# Web Application in PHP using Jet Brains PHPStorm

This lab assumes you have installed JetBrains PHPStorm, Apache Web Server, PHP, and have conffigured Github Copilot with JetBrains by installing the Plugin and Logging into your GIthub Account

Your Github Administrator has linked your Github Login for a Github CoPilot License

Problem:  We got a gig with a parking garage that charges by the day.  The owner wants to write a simple web page that accepts 2 dates, and prints out the number of days for charging the parking customer

We will first ask Copilot by entering a prompt to create the date difference function

```
write a php function that takes two dates and determines the number of days difference between them
```

Now try this in your Copilot Chat window ...
You should see a response similar to the following

```php
function dateDifference($date1, $date2) {
    $datetime1 = new DateTime($date1);
    $datetime2 = new DateTime($date2);
    $interval = $datetime1->diff($datetime2);
    return $interval->days;
}
````
Copilot will maintain the state of this conversation, so there is no need to restate anything you have previously instructed, unless a correction is in order.

Next we want to prompt CoPilot to create the web experience

```
write a php program that display a model dialog that accepts 2 dates, then calls dateDifference and displays the result in a popup message box
```
Copilot will respond but not exactly as follows:

To create a PHP program that displays a dialog to accept two dates, calls the dateDifference function, and displays the result in a popup message box, you can use a combination of PHP and JavaScript. 
Here is a simple example:
 - Create an HTML form to accept two dates.
 - Use JavaScript to handle the form submission and display the result in a popup message box.
 - Use PHP to calculate the date difference.

```html
<!DOCTYPE html>
<html>
<head>
    <title>Date Difference Calculator</title>
    <script>
        function showDateDifference() {
            var date1 = document.getElementById('date1').value;
            var date2 = document.getElementById('date2').value;

            if (date1 && date2) {
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'calculate.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        alert('The difference in days is: ' + xhr.responseText);
                    }
                };
                xhr.send('date1=' + date1 + '&date2=' + date2);
            } else {
                alert('Please enter both dates.');
            }
        }
    </script>
</head>
<body>
    <h1>Date Difference Calculator</h1>
    <form onsubmit="event.preventDefault(); showDateDifference();">
        <label for="date1">Date 1:</label>
        <input type="date" id="date1" name="date1" required>
        <br>
        <label for="date2">Date 2:</label>
        <input type="date" id="date2" name="date2" required>
        <br>
        <button type="submit">Calculate Difference</button>
    </form>
</body>
</html>
```
## Save the html to a file called datecalc.html

## Create a separate PHP file named calculate.php to handle the date difference calculation:

```php
<?php
function dateDifference($date1, $date2) {
    $datetime1 = new DateTime($date1);
    $datetime2 = new DateTime($date2);
    $interval = $datetime1->diff($datetime2);
    return $interval->days;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];
    echo dateDifference($date1, $date2);
}
?>
'''
This setup includes an HTML form for input, JavaScript to handle the form submission and display the result, and PHP to calculate the date difference.

** Debug the CoPilot generated scaffolding

1. Ensure your PHP environment is properly setup in PHPStorm
2. Use the IDE to debug your work