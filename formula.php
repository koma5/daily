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

$J = date("z");
$L = 47.2167; //Rapperswil


$P = asin(0.39795*cos(0.2163108 + 2*atan(0.9671396*tan(0.00860*($J-186)))));
$D = 24 - (24/pi())*acos(    (sin(0.8333*pi()/180) + sin($L*pi()/180)*sin($P))   /   (cos($L*pi()/180)*cos($P))    );


echo "<h1>Rapperswil: </h1><small>on day ". $J ."</small><br>";
echo "day length: " . $D . "<br>";
echo "sunrise at: " . (12-$D/2) . "<br>";
echo "sunset at: " . (12+$D/2) . "<br>";
?>