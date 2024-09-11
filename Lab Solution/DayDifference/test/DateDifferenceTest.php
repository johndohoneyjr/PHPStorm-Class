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