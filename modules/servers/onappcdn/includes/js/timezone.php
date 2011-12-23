<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

$time_zone = array();

$time_zone[] = array("International Date Line West", "(GMT-11:00) International Date Line West");
$time_zone[] = array("Midway Island", "(GMT-11:00) Midway Island");
$time_zone[] = array("Samoa", "(GMT-11:00) Samoa");
$time_zone[] = array("Hawaii", "(GMT-10:00) Hawaii");
$time_zone[] = array("Alaska", "(GMT-09:00) Alaska");
$time_zone[] = array("Pacific Time (US &amp; Canada)", "(GMT-08:00) Pacific Time (US &amp; Canada)");
$time_zone[] = array("Tijuana", "(GMT-08:00) Tijuana");
$time_zone[] = array("Arizona", "(GMT-07:00) Arizona");
$time_zone[] = array("Chihuahua", "(GMT-07:00) Chihuahua");
$time_zone[] = array("Mazatlan", "(GMT-07:00) Mazatlan");
$time_zone[] = array("Mountain Time (US &amp; Canada)", "(GMT-07:00) Mountain Time (US &amp; Canada)");
$time_zone[] = array("Central America", "(GMT-06:00) Central America");
$time_zone[] = array("Central Time (US &amp; Canada)", "(GMT-06:00) Central Time (US &amp; Canada)");
$time_zone[] = array("Guadalajara", "(GMT-06:00) Guadalajara");
$time_zone[] = array("Mexico City", "(GMT-06:00) Mexico City");
$time_zone[] = array("Monterrey", "(GMT-06:00) Monterrey");
$time_zone[] = array("Saskatchewan", "(GMT-06:00) Saskatchewan");
$time_zone[] = array("Bogota", "(GMT-05:00) Bogota");
$time_zone[] = array("Eastern Time (US &amp; Canada)", "(GMT-05:00) Eastern Time (US &amp; Canada)");
$time_zone[] = array("Indiana (East)", "(GMT-05:00) Indiana (East)");
$time_zone[] = array("Lima", "(GMT-05:00) Lima");
$time_zone[] = array("Quito", "(GMT-05:00) Quito");
$time_zone[] = array("Caracas", "(GMT-04:30) Caracas");
$time_zone[] = array("Atlantic Time (Canada)", "(GMT-04:00) Atlantic Time (Canada)");
$time_zone[] = array("Georgetown", "(GMT-04:00) Georgetown");
$time_zone[] = array("La Paz", "(GMT-04:00) La Paz");
$time_zone[] = array("Santiago", "(GMT-04:00) Santiago");
$time_zone[] = array("Newfoundland", "(GMT-03:30) Newfoundland");
$time_zone[] = array("Brasilia", "(GMT-03:00) Brasilia");
$time_zone[] = array("Buenos Aires", "(GMT-03:00) Buenos Aires");
$time_zone[] = array("Greenland", "(GMT-03:00) Greenland");
$time_zone[] = array("Mid-Atlantic", "(GMT-02:00) Mid-Atlantic");
$time_zone[] = array("Azores", "(GMT-01:00) Azores");
$time_zone[] = array("Cape Verde Is.", "(GMT-01:00) Cape Verde Is.");
$time_zone[] = array("Casablanca", "(GMT+00:00) Casablanca");
$time_zone[] = array("Dublin", "(GMT+00:00) Dublin");
$time_zone[] = array("Edinburgh", "(GMT+00:00) Edinburgh");
$time_zone[] = array("Lisbon", "(GMT+00:00) Lisbon");
$time_zone[] = array("London", "(GMT+00:00) London");
$time_zone[] = array("Monrovia", "(GMT+00:00) Monrovia");
$time_zone[] = array("UTC", "(GMT+00:00) UTC");
$time_zone[] = array("Amsterdam", "(GMT+01:00) Amsterdam");
$time_zone[] = array("Belgrade", "(GMT+01:00) Belgrade");
$time_zone[] = array("Berlin", "(GMT+01:00) Berlin");
$time_zone[] = array("Bern", "(GMT+01:00) Bern");
$time_zone[] = array("Bratislava", "(GMT+01:00) Bratislava");
$time_zone[] = array("Brussels", "(GMT+01:00) Brussels");
$time_zone[] = array("Budapest", "(GMT+01:00) Budapest");
$time_zone[] = array("Copenhagen", "(GMT+01:00) Copenhagen");
$time_zone[] = array("Ljubljana", "(GMT+01:00) Ljubljana");
$time_zone[] = array("Madrid", "(GMT+01:00) Madrid");
$time_zone[] = array("Paris", "(GMT+01:00) Paris");
$time_zone[] = array("Prague", "(GMT+01:00) Prague");
$time_zone[] = array("Rome", "(GMT+01:00) Rome");
$time_zone[] = array("Sarajevo", "(GMT+01:00) Sarajevo");
$time_zone[] = array("Skopje", "(GMT+01:00) Skopje");
$time_zone[] = array("Stockholm", "(GMT+01:00) Stockholm");
$time_zone[] = array("Vienna", "(GMT+01:00) Vienna");
$time_zone[] = array("Warsaw", "(GMT+01:00) Warsaw");
$time_zone[] = array("West Central Africa", "(GMT+01:00) West Central Africa");
$time_zone[] = array("Zagreb", "(GMT+01:00) Zagreb");
$time_zone[] = array("Athens", "(GMT+02:00) Athens");
$time_zone[] = array("Bucharest", "(GMT+02:00) Bucharest");
$time_zone[] = array("Cairo", "(GMT+02:00) Cairo");
$time_zone[] = array("Harare", "(GMT+02:00) Harare");
$time_zone[] = array("Helsinki", "(GMT+02:00) Helsinki");
$time_zone[] = array("Istanbul", "(GMT+02:00) Istanbul");
$time_zone[] = array("Jerusalem", "(GMT+02:00) Jerusalem");
$time_zone[] = array("Kyiv", "(GMT+02:00) Kyiv");
$time_zone[] = array("Minsk", "(GMT+02:00) Minsk");
$time_zone[] = array("Pretoria", "(GMT+02:00) Pretoria");
$time_zone[] = array("Riga", "(GMT+02:00) Riga");
$time_zone[] = array("Sofia", "(GMT+02:00) Sofia");
$time_zone[] = array("Tallinn", "(GMT+02:00) Tallinn");
$time_zone[] = array("Vilnius", "(GMT+02:00) Vilnius");
$time_zone[] = array("Baghdad", "(GMT+03:00) Baghdad");
$time_zone[] = array("Kuwait", "(GMT+03:00) Kuwait");
$time_zone[] = array("Nairobi", "(GMT+03:00) Nairobi");
$time_zone[] = array("Riyadh", "(GMT+03:00) Riyadh");
$time_zone[] = array("Tehran", "(GMT+03:30) Tehran");
$time_zone[] = array("Abu Dhabi", "(GMT+04:00) Abu Dhabi");
$time_zone[] = array("Baku", "(GMT+04:00) Baku");
$time_zone[] = array("Moscow", "(GMT+04:00) Moscow");
$time_zone[] = array("Muscat", "(GMT+04:00) Muscat");
$time_zone[] = array("St. Petersburg", "(GMT+04:00) St. Petersburg");
$time_zone[] = array("Tbilisi", "(GMT+04:00) Tbilisi");
$time_zone[] = array("Volgograd", "(GMT+04:00) Volgograd");
$time_zone[] = array("Yerevan", "(GMT+04:00) Yerevan");
$time_zone[] = array("Kabul", "(GMT+04:30) Kabul");
$time_zone[] = array("Islamabad", "(GMT+05:00) Islamabad");
$time_zone[] = array("Karachi", "(GMT+05:00) Karachi");
$time_zone[] = array("Tashkent", "(GMT+05:00) Tashkent");
$time_zone[] = array("Chennai", "(GMT+05:30) Chennai");
$time_zone[] = array("Kolkata", "(GMT+05:30) Kolkata");
$time_zone[] = array("Mumbai", "(GMT+05:30) Mumbai");
$time_zone[] = array("New Delhi", "(GMT+05:30) New Delhi");
$time_zone[] = array("Sri Jayawardenepura", "(GMT+05:30) Sri Jayawardenepura");
$time_zone[] = array("Kathmandu", "(GMT+05:45) Kathmandu");
$time_zone[] = array("Almaty", "(GMT+06:00) Almaty");
$time_zone[] = array("Astana", "(GMT+06:00) Astana");
$time_zone[] = array("Dhaka", "(GMT+06:00) Dhaka");
$time_zone[] = array("Ekaterinburg", "(GMT+06:00) Ekaterinburg");
$time_zone[] = array("Rangoon", "(GMT+06:30) Rangoon");
$time_zone[] = array("Bangkok", "(GMT+07:00) Bangkok");
$time_zone[] = array("Hanoi", "(GMT+07:00) Hanoi");
$time_zone[] = array("Jakarta", "(GMT+07:00) Jakarta");
$time_zone[] = array("Novosibirsk", "(GMT+07:00) Novosibirsk");
$time_zone[] = array("Beijing", "(GMT+08:00) Beijing");
$time_zone[] = array("Chongqing", "(GMT+08:00) Chongqing");
$time_zone[] = array("Hong Kong", "(GMT+08:00) Hong Kong");
$time_zone[] = array("Krasnoyarsk", "(GMT+08:00) Krasnoyarsk");
$time_zone[] = array("Kuala Lumpur", "(GMT+08:00) Kuala Lumpur");
$time_zone[] = array("Perth", "(GMT+08:00) Perth");
$time_zone[] = array("Singapore", "(GMT+08:00) Singapore");
$time_zone[] = array("Taipei", "(GMT+08:00) Taipei");
$time_zone[] = array("Ulaan Bataar", "(GMT+08:00) Ulaan Bataar");
$time_zone[] = array("Urumqi", "(GMT+08:00) Urumqi");
$time_zone[] = array("Irkutsk", "(GMT+09:00) Irkutsk");
$time_zone[] = array("Osaka", "(GMT+09:00) Osaka");
$time_zone[] = array("Sapporo", "(GMT+09:00) Sapporo");
$time_zone[] = array("Seoul", "(GMT+09:00) Seoul");
$time_zone[] = array("Tokyo", "(GMT+09:00) Tokyo");
$time_zone[] = array("Adelaide", "(GMT+09:30) Adelaide");
$time_zone[] = array("Darwin", "(GMT+09:30) Darwin");
$time_zone[] = array("Brisbane", "(GMT+10:00) Brisbane");
$time_zone[] = array("Canberra", "(GMT+10:00) Canberra");
$time_zone[] = array("Guam", "(GMT+10:00) Guam");
$time_zone[] = array("Hobart", "(GMT+10:00) Hobart");
$time_zone[] = array("Melbourne", "(GMT+10:00) Melbourne");
$time_zone[] = array("Port Moresby", "(GMT+10:00) Port Moresby");
$time_zone[] = array("Sydney", "(GMT+10:00) Sydney");
$time_zone[] = array("Yakutsk", "(GMT+10:00) Yakutsk");
$time_zone[] = array("New Caledonia", "(GMT+11:00) New Caledonia");
$time_zone[] = array("Vladivostok", "(GMT+11:00) Vladivostok");
$time_zone[] = array("Auckland", "(GMT+12:00) Auckland");
$time_zone[] = array("Fiji", "(GMT+12:00) Fiji");
$time_zone[] = array("Kamchatka", "(GMT+12:00) Kamchatka");
$time_zone[] = array("Magadan", "(GMT+12:00) Magadan");
$time_zone[] = array("Marshall Is.", "(GMT+12:00) Marshall Is.");
$time_zone[] = array("Solomon Is.", "(GMT+12:00) Solomon Is.");
$time_zone[] = array("Wellington", "(GMT+12:00) Wellington");
$time_zone[] = array("Nukualofa", "(GMT+13:00) Nuku\'alofa");

$output = '<option value=""></option>';

foreach ($time_zone as $value)
    $output .= '<option value="'.$value[0].'">'.$value[1].'</option>';
?>
var OnAppUsersTZs;
OnAppUsersTZs = '<?php echo $output ?>';
