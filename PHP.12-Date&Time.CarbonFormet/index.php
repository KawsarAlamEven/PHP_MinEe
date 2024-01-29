<?php
// require_once "vendor/autoload.php";
// use Carbon\Carbon;
// echo Carbon::now();

// result:2024-01-29 03:04:09
echo "\n";




// require_once "vendor/autoload.php";
// use Carbon\Carbon;
// $c = new Carbon();
// echo Carbon::now();
// var_dump($c);

// result:
// object(Carbon\Carbon)#1 (3) {
//     ["date"]=>
//     string(26) "2021-07-21 12:00:00.000000"
//     ["timezone_type"]=>
//     int(3)
//     ["timezone"]=>
//     string(13) "Asia/Dhaka"
//   }
echo "\n";

// require_once "vendor/autoload.php";
// use Carbon\Carbon;
// $c = Carbon::now();
// echo Carbon::now();

// result: 2024-01-29 03:16:36
echo "\n";



//  Carbon::create($year, $month, $day, $hour, $minute, $second, $tz);

// require_once "vendor/autoload.php";
// use Carbon\Carbon;
// $c = Carbon::create(2021, 7, 22);
// var_dump($c);

// Result::
// object(Carbon\Carbon)#1 (3) {
//     ["date"]=>
//     string(26) "2021-07-22 12:00:00.000000"
//     ["timezone_type"]=>
//     int(3)
//     ["timezone"]=>
//     string(13) "Asia/Dhaka"
//   }
echo "\n";


// createFromDate() method
// require_once "vendor/autoload.php";
// use Carbon\Carbon;
// $c = Carbon::createFromDate(2021, 7, 22);

// var_dump($c);

// Result::
// object(Carbon\Carbon)#1 (3) {
//     ["date"]=>
//     string(26) "2021-07-22 12:00:00.000000"
//     ["timezone_type"]=>
//     int(3)
//     ["timezone"]=>
//     string(13) "Asia/Dhaka"
// }
echo "\n";



// createFromTime() method
// require_once "vendor/autoload.php";
// use Carbon\Carbon;
// $c = Carbon::createFromTime(12, 0, 0);

// var_dump($c);

//  Result::
// object(Carbon\Carbon)#1 (3) {
//     ["date"]=>
//     string(26) "2021-07-21 12:00:00.000000"
//     ["timezone_type"]=>
//     int(3)
//     ["timezone"]=>
//     string(13) "Asia/Dhaka" 
//   }
echo "\n";



//  createFromTimestamp() Method
// require_once "vendor/autoload.php";
// use Carbon\Carbon;
// $c = Carbon::createFromTimestamp(1626872400);

// var_dump($c);
//  Result::string(26) "2021-07-21 13:00:00.000000"
echo "\n";


// Human readable format
// require_once "vendor/autoload.php";
// use Carbon\Carbon;
// $c = new Carbon('first day of January 2008', 'Asia/Dhaka');
// var_dump($c);

//   Result::
// object(Carbon\Carbon)#1 (3) {
//     ["date"]=>
//     string(26) "2008-01-01 12:00:00.000000"
//     ["timezone_type"]=>
//     int(3)
//     ["timezone"]=>
//     string(13) "Asia/Dhaka"
//   }
echo "\n";



// two days after >> +2 days    -before two days >> -2 days
// require_once "vendor/autoload.php";
// use Carbon\Carbon;
// $c = new Carbon('+2 days');
// var_dump($c);
//result:: string(26) "2024-01-31 03:46:05.867314"
echo "\n";




// Note:: formation
// only date show
require_once "vendor/autoload.php";
use Carbon\Carbon;

$c = Carbon::now();
echo $c->toDateString();
// result:: 2024-01-29
echo "\n";


// date and time show
echo $c->toDateString();;
// result:: 2024-01-29
echo "\n";

echo $c->toDateTimeString();;
// result::  2024-01-29 04:13:08
echo "\n";

echo $c->toRssString();
// result::  Mon, 29 Jan 2024 04:14:30 +0000
echo "\n";

echo $c->toAtomString();
// result:: 2024-01-29T04:15:28+00:00
echo "\n";

echo $c->format('l jS \\of F Y h:i:s A');
// result:: Monday 29th of January 2024 04:16:02 AM
echo "\n";

// Human readable format
$c = new Carbon('first day of January 2008', 'Asia/Dhaka');
echo $c->diffForHumans();
// result:: 13 years ago
echo "\n";

    echo $c->year;
    echo $c->month;
    echo $c->day;
    echo $c->hour;
    echo $c->minute;
    echo $c->second;
    echo $c->timestamp;
    echo $c->timezone;              
    echo $c->timezoneName;          
// result:: 2008/1/10- 0-0-1199124000 - Asia/Dhaka - Asia/Dhaka
echo "\n";

// Setters
$c = Carbon::now();
    
$c->year = 2021;
$c->month = 7;
$c->day = 22;
$c->hour = 12;
$c->minute = 0;
$c->second = 0;
$c->timestamp = 1626872400;
$c->timezone = 'Asia/Dhaka';

echo $c->toDateTimeString();
// result:: 2021-07-22 12:00:00


echo "\n";

$c = new Carbon('first day of January 2008', 'Asia/Dhaka');
echo $c->dayOfWeek;
echo $c->weekOfMonth;
echo $c->dayOfYear;
// result::2 - 1 - 1
echo "\n";

// timezone - tz
$c = Carbon::now();

echo $c->tz;
// result:: UTC
echo "\n";

$c->tz = 'Asia/Dhaka';
echo $c->tz;
// result:: Asia/Dhaka
echo "\n";

// date with time zone
$c = Carbon::createFromDate(2021,7,22, 'Asia/Dhaka');
echo $c->tz;
echo "\n";

//  time zone
$c = Carbon::now()->setTimeZone('Asia/Dhaka');
echo $c->tz;
echo "\n";

// Manipulating   add  And ssub
$c = Carbon::now();
    
echo $c->addYears(5)->toDateTimeString();
// result:: 2029-01-29 06:44:02
echo "\n";
echo $c->subYears(5)->toDateTimeString();
// result:: 2024-01-29 06:44:02
echo "\n";

echo $c->addMonths(5)->toDateTimeString();
// result:: 2024-06-29 06:44:02
echo "\n";
echo $c->subMonths(5)->toDateTimeString();
// result:: 2024-01-29 06:44:02
echo "\n";

echo $c->addDays(5)->toDateTimeString();
// result:: 2024-02-03 06:44:02
echo "\n";
echo $c->subDays(5)->toDateTimeString();
// result:: 2024-01-29 06:44:02
echo "\n";

echo $c->addWeeks(5)->toDateTimeString();
// result:: 2024-03-04 06:44:02
echo "\n";
echo $c->subWeeks(5)->toDateTimeString();
// result:: 2024-01-29 06:44:02
echo "\n";

echo $c->addHours(5)->toDateTimeString();
// result:: 2024-01-29 11:44:02
echo "\n";
echo $c->subHours(5)->toDateTimeString();
// result:: 2024-01-29 06:44:02
echo "\n";

echo $c->addMinutes(5)->toDateTimeString();
// result:: 2024-01-29 06:49:02
echo "\n";
echo $c->subMinutes(5)->toDateTimeString();
// result:: 2024-01-29 06:44:02
echo "\n";

echo $c->addSeconds(5)->toDateTimeString();
// result:: 2024-01-29 06:44:07
echo "\n";
echo $c->subSeconds(5)->toDateTimeString();
// result::  2024-01-29 06:44:02
echo "\n";


// eq // Equal
// ne // Not Equal
// gt // Greater Than
// gte // Greater Than or Equal
// lt // Less Than
// lte // Less Than or Equal

$startDate = Carbon::today();
$endDate = Carbon::today();

var_dump($startDate->eq($endDate));
// result:: bool(true)
var_dump($startDate->gt($endDate));
// result:: bool(false)
var_dump($startDate->gte($endDate));
// result:: bool(true)
var_dump($startDate->lt($endDate));
// result:: bool(false)
var_dump($startDate->lte($endDate));
// result:: bool(true)
echo "\n";

// find my age
// diffInDays
// diffInSeconds
// diffInWeeks
// diffInMonths
// diffInYears
// diffInWeekenddays

$A1 = new Carbon('01/01/2000');
$B2 = new Carbon('01/01/2021');
echo "I am " . $A1->diffInYears($B2) . " Years Old";
// result:: I am 21 Years Old
echo "\n";

//parse()
$A = Carbon::parse('+1 Days');
echo $A;
// result:: 2024-01-30 08:54:00
echo "\n";
echo $A->endOfDay();
// result::2024-01-30 23:59:59
echo "\n";


$A1 = Carbon::now();
$B2 = Carbon::parse('+2 weeks');
echo $A1->diffForHumans($B2);
// result:: 2 weeks before
echo "\n";


$c = Carbon::parse('2021-07-22 12:00:00');
echo $c->diffForHumans();
// result:: 2 years ago
echo "\n";



//modifiers
$c = Carbon::parse('2021-07-22 12:00:00');
    
echo $c->startOfDay();
2021-07-22 00:00:00
echo "\n";
echo $c->endOfDay();
2021-07-22 23:59:59
echo "\n";

echo $c->startOfMonth();
2021-07-01 00:00:00
echo "\n";
echo $c->endOfMonth();
2021-07-31 23:59:59
echo "\n";

echo $c->startOfYear();
2021-01-01 00:00:00
echo "\n";
echo $c->endOfYear();
2021-12-31 23:59:59
echo "\n";

echo $c->startOfDecade();
2020-01-01 00:00:00
echo "\n";
echo $c->endOfDecade();
2029-12-31 23:59:59
echo "\n";

echo $c->startOfCentury();
2001-01-01 00:00:00
echo "\n";
echo $c->endOfCentury();
2100-12-31 23:59:59
echo "\n";

echo $c->startOfWeek();
2100-12-27 00:00:00
echo "\n";
echo $c->endOfWeek();
2101-01-02 23:59:59
echo "\n";

?>