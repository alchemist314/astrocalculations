<?php

ini_set("display_errors", 1);
ini_set("error_reporting", E_WARNING);
ini_set("max_execution_time", 600);
ini_set("memory_limit", "600M");
ini_set("default_socket_timeout", 600);

define('QUERY_LOG', false);
define('PATH_TO_SWETEST', '/var/www/html/astro_cycle');

$aPlanetsName = array("sun", "moon", "mercury", "venus", "mars", "jupiter", "saturn", "uran", "neptun", "pluton");
$aZodiacName = array("Ari", "Tau", "Gem", "Cnc", "Leo", "Vir", "Lib", "Sco", "Sgr", "Cap", "Aqr", "Psc");

//$aPlnChart['sun'] = true;
//$aPlnChart['moon']=true;
//$aPlnChart['mercury']=true;
//$aPlnChart['venus']=true;
//$aPlnChart['mars']=true;
$aPlnChart['jupiter'] = true;
//$aPlnChart['saturn'] = true;
//$aPlnChart['uran'] = true;
//$aPlnChart['neptun']=true;
//$aPlnChart['pluton']=true;
//$aPlnShow['sun'] = true;
//$aPlnShow['moon']=true;
//$aPlnShow['mercury']=true;
//$aPlnShow['venus']=true;
//$aPlnShow['mars']=true;
$aPlnShow['jupiter'] = true;
//$aPlnShow['saturn']=true;
//$aPlnShow['uran']=true;
//$aPlnShow['neptun']=true;
//$aPlnShow['pluton']=true;


$sBirthDateTime = "05.02.1981 02:25:00";
$sStartDate = "01.01.2021";
$sDays = (365 * 2);
$sLatitude = "37.35";
$sLongitude = "55.45";

$aEXP_Date = explode(".", $sStartDate);
$sStartYear = $aEXP_Date[2];
$sStartMonth = $aEXP_Date[1];
$sStartDay = $aEXP_Date[0];

$sConfDayCountFull = 100;
$sConfMinYear = $sStartYear;

$aResultQuery = fQueryExecutor('planet', $sBirthDateTime, 1, 1);

for ($l = 0; $l < count($aResultQuery); $l++) {
    $aArrClean = fTrueExplode($aResultQuery[$l]);
    $sPlnGRD = $aArrClean[1];
    $aPlanetsGRD_First[] = $sPlnGRD;
    $aPlnInSign_First[] = fSignByGRD($sPlnGRD);
}

$aResultQuery = fQueryExecutor('house', $sBirthDateTime, 1, 1, $sLatitude, $sLongitude);
for ($l = 0; $l < 12; $l++) {
    $aArrClean = fTrueExplode($aResultQuery[$l]);
    $sPlnGRD = $aArrClean[1];
    $aHouseGRD_First[] = $sPlnGRD;
    $aHouseInSign_First[] = fSignByGRD($sPlnGRD);
}

foreach ($aPlanetsGRD_First as $sGRD) {
    $aPlnInHouse[] = fPlnInHouse($sGRD, $aHouseGRD_First);
}

for ($m = 0; $m < $sDays; $m++) {
    $sDateTime = date('d.m.Y H:i:S', mktime(12, 0, 0, $sStartMonth, $sStartDay + $m, $sConfMinYear));
    $sDate = date('d.m.Y', mktime(12, 0, 0, $sStartMonth, $sStartDay + $m, $sConfMinYear));

    $aResultQuery = fQueryExecutor('planet', $sDateTime, 1, 1);
    unset($aArrClean, $aArrFinal, $aPlanetsGRD);

    for ($l = 0; $l < count($aResultQuery); $l++) {
        $aArrClean = fTrueExplode($aResultQuery[$l]);
        $aPlanetsGRD[] = $aArrClean[1];
        unset($k);
        foreach ($aPlanetsName as $sPlanetName) {
            if (($aPlnShow[$sPlanetName] == true) && ($k == $l)) {
                $aDataNames[] = $sDate;
                $aPlnDataArray[$sPlanetName][] = fPlnInHouse($aArrClean[1], $aHouseGRD_First) + 1;
                $sHouse = fPlnInHouse($aArrClean[1], $aHouseGRD_First);
                $sNextHouse = $sHouse + 1;
                $sNextHouse > 11 ? $sNextHouse = 0 : "";
                $sPreviousHouse = $sHouse - 1;
                $sPreviousHouse < 0 ? $sPreviousHouse = 11 : "";
            }
            $k++;
        }
    }
}

foreach ($aPlanetsName as $sPlanetName) {
    if ($aPlnShow[$sPlanetName] == true) {
        $aDiapason = fViewHouseDiapason($aDataNames, $aPlnDataArray[$sPlanetName]);
    }
}

foreach ($aDiapason as $sDate => $sValue) {
    $aDataNames[$sTestPlanet][] = $sDate;
    $aDataValues[$sTestPlanet][] = $sValue;
}

###############################################################################
//NOW ONLY FUNCTIONS

    function fSignByGRD($sGRD) {
        if (($sGRD >= 0) and ($sGRD <= 30)) {
            $sGRD = abs(0 - $sGRD);
            $sSign = "Ari";
        }
        if (($sGRD > 30) and ($sGRD <= 60)) {
            $sGRD = abs(30 - $sGRD);
            $sSign = "Tau";
        }
        if (($sGRD > 60) and ($sGRD <= 90)) {
            $sGRD = abs(60 - $sGRD);
            $sSign = "Gem";
        }
        if (($sGRD > 90) and ($sGRD <= 120)) {
            $sGRD = abs(90 - $sGRD);
            $sSign = "Cnc";
        }
        if (($sGRD > 120) and ($sGRD <= 150)) {
            $sGRD = abs(120 - $sGRD);
            $sSign = "Leo";
        }
        if (($sGRD > 150) and ($sGRD <= 180)) {
            $sGRD = abs(150 - $sGRD);
            $sSign = "Vir";
        }
        if (($sGRD > 180) and ($sGRD <= 210)) {
            $sGRD = abs(180 - $sGRD);
            $sSign = "Lib";
        }
        if (($sGRD > 210) and ($sGRD <= 240)) {
            $sGRD = abs(210 - $sGRD);
            $sSign = "Sco";
        }
        if (($sGRD > 240) and ($sGRD <= 270)) {
            $sGRD = abs(240 - $sGRD);
            $sSign = "Sgr";
        }
        if (($sGRD > 270) and ($sGRD <= 300)) {
            $sGRD = abs(270 - $sGRD);
            $sSign = "Cap";
        }
        if (($sGRD > 300) and ($sGRD <= 330)) {
            $sGRD = abs(300 - $sGRD);
            $sSign = "Aqr";
        }
        if (($sGRD > 330) and ($sGRD <= 360)) {
            $sGRD = abs(330 - $sGRD);
            $sSign = "Psc";
        }
        return $sSign;
    }

    function fPlnInHouse($sPlnGRD, $aHouseGRD) {
        for ($l = 0; $l < 12; $l++) {
            ($l + 1) > 11 ? $sNextHouse = 0 : $sNextHouse = ($l + 1);
            ($l - 1) < 0 ? $sPreviousHouse = 11 : $sPreviousHouse = ($l - 1);
            if (($sPlnGRD >= $aHouseGRD[$l]) && ($sPlnGRD <= $aHouseGRD[$sNextHouse])) {
                $sPlnInHouse = $l;
            }
            if ($aHouseGRD[$sNextHouse] < $aHouseGRD[$l]) {
                if (($sPlnGRD >= $aHouseGRD[$l]) && ($sPlnGRD <= 360)) {
                    $sPlnInHouse = $l;
                }
            }
            if ($aHouseGRD[$sPreviousHouse] > $aHouseGRD[$l]) {
                if (($sPlnGRD >= 0) && ($sPlnGRD <= $aHouseGRD[$l])) {
                    $sPlnInHouse = $sPreviousHouse;
                }
            }
        }
        return $sPlnInHouse;
    }

    function fTrueExplode($sInputStr) {
        $sQuery = str_replace("' ", "'", $sInputStr);
        $aEXP = explode("'", $sQuery);
        $aEXP_Next = preg_split("/(( )|(  )|(   )|(    ))/", trim($aEXP[1]));
        foreach ($aEXP_Next as $sStr) {
            if (strlen($sStr) > 5) {
                $aArrClean[] = $sStr;
            }
        }

        return $aArrClean;
    }

    function fQueryExecutor($sQueryType, $sDateTime, $sPeriod, $sCount, $sLatitude = "37.35", $sLongitude = "55.45") {
        $aEXP = explode(" ", $sDateTime);
        $sDate = $aEXP[0];
        $sTime = $aEXP[1];
        switch ($sQueryType) {
            case "house":
                $sQuery = PATH_TO_SWETEST . "/swetest -edir./ -b" . $sDate . " -p -house" . $sLatitude . "," . $sLongitude . ",p -fZlaT -ut" . $sTime . " -head";
                break;
            case "planet":
                $sQuery = PATH_TO_SWETEST . "/swetest -eswe -b" . $sDate . " -p0123456789 -ut" . $sTime . " -fZlaT -head";
                break;
        }
        if (QUERY_LOG == true) {
            print $sQuery . "\n";
        }
        exec($sQuery, $aOut);
        return $aOut;
    }

    function fDateExplode($sDate) {
        $aEXP = explode(".", $sDate);
        $aResult[day] = $aEXP[0];
        $aResult[month] = $aEXP[1];
        $aResult[year] = $aEXP[2];
        return $aResult;
    }

    function fViewHouseDiapason($aNames, $aValues) {
    $k = 0;
    for ($l = 0; $l < count($aNames); $l++) {
        (($k % 2) == 0) ? $sColor = "#09a605;" : $sColor = "#000000;";
        if ($l == 0) {
            $sOldValue = $aValues[$l];
            print "<div style='color: " . $sColor . "'>" . $aNames[$l] . " " . $aValues[$l] . "</div>";
            $aResult[$aNames[$l]] = $aValues[$l];
        }
        if ($aValues[$l] !== $sOldValue) {
            print "<div style='color: " . $sColor . "'>" . $aNames[$l - 1] . " " . $aValues[$l - 1] . "</div>";
            $k++;
            (($k % 2) == 0) ? $sColor = "#09a605;" : $sColor = "#000000;";
            print "<div style='color: " . $sColor . "'>" . $aNames[$l] . " " . $aValues[$l] . "</div>";
            $aResult[$aNames[$l - 1]] = $aValues[$l - 1];
            $aResult[$aNames[$l]] = $aValues[$l];
        }
        if ($l == (count($aNames) - 1)) {
            print "<div style='color: " . $sColor . "'>" . $aNames[$l] . " " . $aValues[$l] . "</div>";
            $aResult[$aNames[$l]] = $aValues[$l];
            $k++;
        }
        $sOldValue = $aValues[$l];
    }
    return $aResult;
}
