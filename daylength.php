<?php

/*
  D = daylength
  L = latitude
  J = day of the year

  P = asin[.39795*cos(.2163108 + 2*atan{.9671396*tan[.00860*(J-186)]})]
                         _                                         _
                        / sin(0.8333*pi/180) + sin(L*pi/180)*sin(P) \
  D = 24 - (24/pi)*acos{  -----------------------------------------  }
                        \_          cos(L*pi/180)*cos(P)           _/
*/

$dayofyear = date("z"); //current day of the year
$longitude = 47.2167; //longitude of Rapperswil in Switzerland


$P = asin(0.39795*cos(0.2163108 + 2*atan(0.9671396*tan(0.00860*($dayofyear-186)))));
$daylength = 24 - (24/pi())*acos(    (sin(0.8333*pi()/180) + sin($longitude*pi()/180)*sin($P))   /   (cos($longitude*pi()/180)*cos($P))    );

$sunTransitTime = 12.389166666666666; //would have expected midday == 12 o'clock o.O
$sunriseTime = $sunTransitTime-$daylength/2;
$sunsetTime = $sunTransitTime+$daylength/2;

echo "<h1>Rapperswil: </h1>on day " . $dayofyear . "<br>";
echo "day length: " . $daylength . "<br>";
echo "sunrise at: " . $sunriseTime . "<br>";
echo "sunset at: " . $sunsetTime . "<br>";

?>