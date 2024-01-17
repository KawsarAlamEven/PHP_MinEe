<?php
// time();
// date(format, date);

// symbol
// d - 01-31
// D- Web, Fri
// ---------
// m- 01-12
// M- Jan-Dec
// --------
// y- 24
// Y- 2024

// echo date('d-m-y');
// result: 17-01-24    today date show
// echo date('d/m/y');
// result: 17-01-24    today date show

//echo time();    //1970 year teke second time count hosse.
// result:1705465272

// echo date('d-m-y', time());
// result:17-01-24 ajker date ta dekabe.

// am-pm-hour-
// symbol
// a- am or pm 
// A- AM or PM
// g- 12-hours
// G- 24-Hours
// h- 01-12
// H- 00-23

// i- 00 to 59
// s- 00 59

//echo date('d-m-y H:i:s', time());
// result: 17-01-24 04:34:32

//echo date('d-m-y H:i:s a', time());
// result: 17-01-24 04:34:32 am        a   dd am 

// $date = "20-01-2024";
// echo strtotime($date);
// result:1705708800 

// $date = "20-01-2024";
// $date1 = strtotime($date);
// echo strtotime($date);

// echo date('d-m-y', strtotime('20-01-2024'));
// result:20-01-24
// echo date('d-m-y', strtotime("+1 week"));
// result:24-01-24
//echo date('d-m-y', strtotime("next Monday"));
// result:22-01-24   
//note: year, month, day, hour, miunte, second, next year, next month, next day.

//echo date("Y");
// result:2024 

//12100100 pm //H:i:s A

//echo date_default_timezone_get();
// result:UTC

// date_default_timezone_set("Asia/Dhaka");
// echo date_default_timezone_get();
// result:Asia/Dhaka

//echo mktime(12, 0, 0, 7, 21, 2021);
// result:1626868800
//echo date('d-m-y', mktime(12, 0, 0, 7, 21, 2021));
// result:21-07-21

// $startDate = strtotime("Friday");
// echo date('d-m-Y', $startDate);
// result:19-01-2024

// $endDate = strtotime("+1 Week");
// echo date('d-m-Y', $endDate );
// result:24-01-2024

//Loop  start date  to presnt date print
// $startDate = strtotime("Friday");
// $endDate = strtotime("+1 Week");

// while($startDate < $endDate ){
//     echo date("d-m-Y", $startDate). "\n";
//     $startDate = strtotime("+1 day", $startDate);
// }
// result:
// 21-01-2024
// 22-01-2024
// 23-01-2024
// 24-01-2024

$startDate = strtoTime("2024-01-01");
$endDate = strTotime("2024-01-16");

$diff = $endDate - $startDate;
echo $diff . "\n";  // only second
echo "Difference Between two dates: " . floor($diff / (60*60*24)) . "Days";
// result:Difference Between two dates: 15Days    

?>