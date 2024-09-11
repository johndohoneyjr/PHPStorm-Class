## Unit Test with Github Copilot

CoPilot has many powerful  features with "slash" Commands.  In CoPilot Chat, our prompt is simple, highlight the PHP code to test then in the CoPilot prompt window enter:

```
/test
```

CoPilot generated the PHPUnit tests:

```php
use PHPUnit\Framework\TestCase;

class DateDifferenceTest extends TestCase
{
    public function calculatesDifferenceBetweenTwoDates()
    {
        $date1 = '2023-10-01';
        $date2 = '2023-10-10';
        $this->assertEquals(9, dateDifference($date1, $date2));
    }

    public function calculatesDifferenceWhenDatesAreSame()
    {
        $date1 = '2023-10-01';
        $date2 = '2023-10-01';
        $this->assertEquals(0, dateDifference($date1, $date2));
    }

    public function calculatesDifferenceWhenDatesAreInReverseOrder()
    {
        $date1 = '2023-10-10';
        $date2 = '2023-10-01';
        $this->assertEquals(9, dateDifference($date1, $date2));
    }

    public function calculatesDifferenceAcrossMonths()
    {
        $date1 = '2023-09-30';
        $date2 = '2023-10-01';
        $this->assertEquals(1, dateDifference($date1, $date2));
    }

    public function calculatesDifferenceAcrossYears()
    {
        $date1 = '2022-12-31';
        $date2 = '2023-01-01';
        $this->assertEquals(1, dateDifference($date1, $date2));
    }
}
```
Create a sub-directory in your project called ./test

Save this to ./test/DateDifferenceTest.php

## PHPUnit Configuration

CoPilot can help with configuration, so the following prompt help me configure PHPUnit -- I already had composer installed

```
how do i run this test in jetbrains phpstorm
```
To run PHPUnit tests in JetBrains PhpStorm, follow these steps:

1. **Install PHPUnit**: Ensure PHPUnit is installed in your project. You can install it using Composer:
    ```sh
    composer require --dev phpunit/phpunit
    ```

2. **Configure PHPUnit in PhpStorm**:
    - Open PhpStorm.
    - Go to `File` > `Settings` (or `PhpStorm` > `Preferences` on macOS).
    - Navigate to `Languages & Frameworks` > `PHP` > `Test Frameworks`.
    - Click the `+` icon to add a new test framework.
    - Select `PHPUnit` and configure it to use the Composer autoloader. The path should be `vendor/autoload.php`.

3. **Create a Test Configuration**:
    - Go to `Run` > `Edit Configurations`.
    - Click the `+` icon and select `PHPUnit`.
    - Name your configuration (e.g., `DateDifferenceTest`).
    - Set the `Test Scope` to `Directory` and select the `tests` directory.
    - Ensure the `Use alternative configuration file` option is unchecked unless you have a custom `phpunit.xml` file.

4. **Run the Tests**:
    - Open the `DateDifferenceTest.php` file in the `tests` directory.
    - Right-click on the file and select `Run 'DateDifferenceTest'`.
    - Alternatively, you can select the test configuration you created from the run/debug configurations dropdown and click the run button.

This will execute your PHPUnit tests within PhpStorm, and you will see the results in the Run tool window.