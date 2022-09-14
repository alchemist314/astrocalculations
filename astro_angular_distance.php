<?php
ini_set("display_errors", 1);
ini_set("error_reporting", E_WARNINGS);

define('QUERY_LOG', false);
define('PATH_TO_SWETEST', '/var/www/html/astro_cycle');

$aPlanetsName = array("sun", "moon", "mercury", "venus", "mars", "jupiter", "saturn", "uran", "neptun", "pluton");
$aZodiacName = array("Ari", "Tau", "Gem", "Cnc", "Leo", "Vir", "Lib", "Sco", "Sgr", "Cap", "Aqr", "Psc");

$aOrbs[conj1] = 0;
$aOrbs[conj2] = 0;
$aOrbs[sekst1] = 52;
$aOrbs[sekst2] = 68;
$aOrbs[kvad1] = 82;
$aOrbs[kvad2] = 98;
$aOrbs[trin1] = 112;
$aOrbs[trin2] = 128;
$aOrbs[opp1] = 172;
$aOrbs[opp2] = 180;

// // ALL IN ONE CHART (SUN)
//$sAllInOne = true;
$sAllInOne = false;

$aPlnShow[sun] = true;

//$aPlnShow[moon]=true;
//$aPlnShow[mercury]=true;
//$aPlnShow[venus]=true;
//$aPlnShow[mars]=true;
//$aPlnShow[jupiter]=true;
//$aPlnShow[saturn]=true;
//$aPlnShow[uran]=true;
//$aPlnShow[neptun]=true;
//$aPlnShow[pluton]=true;

$aPlnFlag[first][sun] = true;
//$aPlnFlag[first][moon] = true;
//$aPlnFlag[first][mercury] = true;
$aPlnFlag[first][venus] = true;
$aPlnFlag[first][mars] = true;
$aPlnFlag[first][jupiter] = true;
$aPlnFlag[first][saturn] = true;
$aPlnFlag[first][uran] = true;
$aPlnFlag[first][neptun] = true;
$aPlnFlag[first][pluton] = true;

//$aPlnFlag[second][sun] = true;
//$aPlnFlag[second][moon] = true;
//$aPlnFlag[second][mercury] = true;

$aPlnFlag[second][venus] = true;
$aPlnFlag[second][mars] = true;
$aPlnFlag[second][jupiter] = true;
$aPlnFlag[second][saturn] = true;
$aPlnFlag[second][uran] = true;
$aPlnFlag[second][neptun] = true;
$aPlnFlag[second][pluton] = true;

$aAspFlag[60] = true;
$aAspFlag[120] = true;

$aAspFlag[0] = true;
$aAspFlag[90] = true;
$aAspFlag[180] = true;

$aPlnFlag[negative][sun] = true;
//$aPlnFlag[negative][moon]=true;
//$aPlnFlag[negative][mercury]=true;

$aPlnFlag[negative][venus] = true;
$aPlnFlag[negative][mars] = true;
$aPlnFlag[negative][jupiter] = true;
$aPlnFlag[negative][saturn] = true;
$aPlnFlag[negative][uran] = true;
$aPlnFlag[negative][neptun] = true;
$aPlnFlag[negative][pluton] = true;

//$aPlnFlag[positive][sun] = true;
//$aPlnFlag[positive][moon] = true;
//$aPlnFlag[positive][mercury] = true;

$aPlnFlag[positive][venus] = true;
$aPlnFlag[positive][mars] = true;
$aPlnFlag[positive][jupiter] = true;
$aPlnFlag[positive][saturn] = true;
$aPlnFlag[positive][uran] = true;
$aPlnFlag[positive][neptun] = true;
$aPlnFlag[positive][pluton] = true;

////$aOrbFlag[positive][sun][60] = true;
//$aOrbFlag[positive][moon][60] = true;
//$aOrbFlag[positive][mercury][60] = true;

$aOrbFlag[positive][venus][60] = true;
$aOrbFlag[positive][mars][60] = true;
$aOrbFlag[positive][jupiter][60] = true;
$aOrbFlag[positive][saturn][60] = true;
$aOrbFlag[positive][uran][60] = true;
$aOrbFlag[positive][neptun][60] = true;
$aOrbFlag[positive][pluton][60] = true;

//$aOrbFlag[positive][sun][120] = true;
//$aOrbFlag[positive][moon][120] = true;
//$aOrbFlag[positive][mercury][120] = true;

$aOrbFlag[positive][venus][120] = true;
$aOrbFlag[positive][mars][120] = true;
$aOrbFlag[positive][jupiter][120] = true;
$aOrbFlag[positive][saturn][120] = true;
$aOrbFlag[positive][uran][120] = true;
$aOrbFlag[positive][neptun][120] = true;
$aOrbFlag[positive][pluton][120] = true;

//$aOrbFlag[negative][sun][0] = true;
//$aOrbFlag[negative][moon][0] = true;
//$aOrbFlag[negative][mercury][0] = true;

$aOrbFlag[negative][venus][0] = true;
$aOrbFlag[negative][mars][0] = true;
$aOrbFlag[negative][jupiter][0] = true;
$aOrbFlag[negative][saturn][0] = true;
$aOrbFlag[negative][uran][0] = true;
$aOrbFlag[negative][neptun][0] = true;
$aOrbFlag[negative][pluton][0] = true;

//$aOrbFlag[negative][sun][90] = true;
//$aOrbFlag[negative][moon][90] = true;
//$aOrbFlag[negative][mercury][90] = true;

$aOrbFlag[negative][venus][90] = true;
$aOrbFlag[negative][mars][90] = true;
$aOrbFlag[negative][jupiter][90] = true;
$aOrbFlag[negative][saturn][90] = true;
$aOrbFlag[negative][uran][90] = true;
$aOrbFlag[negative][neptun][90] = true;
$aOrbFlag[negative][pluton][90] = true;

//$aOrbFlag[negative][sun][180] = true;
//$aOrbFlag[negative][moon][180] = true;
//$aOrbFlag[negative][mercury][180] = true;

$aOrbFlag[negative][venus][180] = true;
$aOrbFlag[negative][mars][180] = true;
$aOrbFlag[negative][jupiter][180] = true;
$aOrbFlag[negative][saturn][180] = true;
$aOrbFlag[negative][uran][180] = true;
$aOrbFlag[negative][neptun][180] = true;
$aOrbFlag[negative][pluton][180] = true;

$sBirthDateTime = "05.02.1981 02:25:00";
$sStartDate = "14.09.2022";

$aEXP_Date = explode(".", $sStartDate);
$sStartYear = $aEXP_Date[2];
$sStartMonth = $aEXP_Date[1];
$sStartDay = $aEXP_Date[0];

$sConfDayCountFull = 100;
$sConfMinYear = $sStartYear;

$aResultQuery = fQueryExecutor($sBirthDateTime, 1, 1);
for ($l = 0; $l < count($aResultQuery); $l++) {
    $aArrClean = fTrueExplode($aResultQuery[$l]);
    $sPlnGRD = str_replace(".", ",", $aArrClean[1]);
    $aPlanetsGRD_First[] = $sPlnGRD;
}

for ($m = 0; $m < 365; $m++) {
    $sDateTime = date('d.m.Y H:i:S', mktime(12, 0, 0, $sStartMonth, $sStartDay + $m, $sConfMinYear));
    $sDate = date('d.m.Y', mktime(12, 0, 0, $sStartMonth, $sStartDay + $m, $sConfMinYear));

    $aResultQuery = fQueryExecutor($sDateTime, 1, 1);

    unset($aArrClean, $aArrFinal, $aPlanetsGRD);

    for ($l = 0; $l < count($aResultQuery); $l++) {
        $aArrClean = fTrueExplode($aResultQuery[$l]);
        $sPlnGRD = str_replace(".", ",", $aArrClean[1]);
        $aPlanetsGRD[] = $sPlnGRD;
    }

    unset($aAspects);

    $aAspects = fAspByGRD($aPlanetsGRD_First, $aPlanetsGRD);
    $aGRDAspectsByDate[$sDate] = $aAspects[grd];

    foreach ($aPlanetsName as $sPlanetName) {
        $aDateArray_negative[$sPlanetName][$sDate] = 0;
        $aDateArray_positive[$sPlanetName][$sDate] = 0;
        fCalcPositiveNegative($sPlanetName, $aPlnFlag);
    }
}

fArrayPrepare();

foreach ($aGRDAspectsByDate as $sAspDate => $aAsp) {
    print "<br><b>" . $sAspDate . ":</b>";
    foreach ($aAsp as $sGRD => $aAspName) {
        foreach ($aAspName as $sAspName => $sRealGRD) {
            print "<br>&nbsp;&nbsp;&nbsp;&nbsp;" . $sAspName . " " . $sRealGRD;
        }
        print "<br>";
    }
}

if ($sAllInOne == true) {
    foreach ($aPlanetsName as $sPlanetName) {
        if ($sPlanetName !== "sun") {
            for ($l = 0; $l < count($aDataArray_negative_[$sPlanetName]); $l++) {
                $aDataArray_negative_[sun][$l] += $aDataArray_negative_[$sPlanetName][$l];
                $aDataArray_positive_[sun][$l] += $aDataArray_positive_[$sPlanetName][$l];
            }
        }
    }
}

fShowArray();

###############################################################################
//NOW ONLY FUNCTIONS

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

function fQueryExecutor($sDateTime, $sPeriod, $sCount) {
    $aEXP = explode(" ", $sDateTime);
    $sDate = $aEXP[0];
    $sTime = $aEXP[1];

    $sQuery = PATH_TO_SWETEST."/swetest -eswe -b" . $sDate . " -p0123456789 -ut" . $sTime . " -fZlaT -head";
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

function fAspByGRD($aPlanetsGRD_First, $aPlanetsGRD_Second) {

    global $aOrbs,
    $aAspFlag,
    $aPlnFlag,
    $aPlanetsName;

    $l = 0;
    $z = 0;
    $t = 0;
    $sDiff = 0;

    while ($t < 10) {
        $l = $t + 1;
        while ($l < 10) {

            $sCalcFlagFirst = false;
            $sCalcFlagSecond = false;
            foreach ($aPlanetsName as $sStr) {
                if (($aPlanetsName[$t] == $sStr) && ($aPlnFlag[first][$aPlanetsName[$t]] == true)) {
                    $sCalcFlagFirst = true;
                }
                if (($aPlanetsName[$l] == $sStr) && ($aPlnFlag[second][$aPlanetsName[$l]] == true)) {
                    $sCalcFlagSecond = true;
                }
            }
            if (($sCalcFlagFirst == true) && ($sCalcFlagSecond == true)) {
                $sDiff = abs($aPlanetsGRD_First[$t] - $aPlanetsGRD_Second[$l]);

                if ($sDiff > 180) {
                    $sDiff = abs($sDiff - 360);
                }

                if (($sDiff >= $aOrbs[sekst1] and $sDiff <= $aOrbs[sekst2]) && ($aAspFlag[60] == true)) {
                    $mass_grd_sek[] = $sDiff;
                    $asp1 = $t + 1;
                    $asp2 = $l + 1;
                    $aAspects[60][] = "$asp1" . ".6." . "$asp2";
                    $aAspects[name][60][] = $aPlanetsName[$asp1 - 1] . ".60." . $aPlanetsName[$asp2 - 1];
                    $aAspects[num][60][] = ($asp1 - 1) . ".60." . ($asp2 - 1) . " (" . $sDiff . ")";
                    $aAspects[grd][60][$aPlanetsName[$asp1 - 1] . ".60." . $aPlanetsName[$asp2 - 1]] = $sDiff;
                }

                if (($sDiff >= $aOrbs[kvad1] and $sDiff <= $aOrbs[kvad2]) && ($aAspFlag[90] == true)) {
                    $mass_grd_kvad[] = $sDiff;
                    $asp1 = $t + 1;
                    $asp2 = $l + 1;
                    $aAspects[90][] = "$asp1" . ".8." . "$asp2";
                    $aAspects[name][90][] = $aPlanetsName[$asp1 - 1] . ".90." . $aPlanetsName[$asp2 - 1];
                    $aAspects[num][90][] = ($asp1 - 1) . ".90." . ($asp2 - 1) . " (" . $sDiff . ")";
                    $aAspects[grd][90][$aPlanetsName[$asp1 - 1] . ".90." . $aPlanetsName[$asp2 - 1]] = $sDiff;
                }

                if (($sDiff >= $aOrbs[trin1] and $sDiff <= $aOrbs[trin2]) && ($aAspFlag[120] == true)) {
                    $mass_grd_trin[] = $sDiff;
                    $asp1 = $t + 1;
                    $asp2 = $l + 1;
                    $aAspects[120][] = "$asp1" . ".10." . "$asp2";
                    $aAspects[name][120][] = $aPlanetsName[$asp1 - 1] . ".120." . $aPlanetsName[$asp2 - 1];
                    $aAspects[num][120][] = ($asp1 - 1) . ".60." . ($asp2 - 1) . " (" . $sDiff . ")";
                    $aAspects[grd][120][$aPlanetsName[$asp1 - 1] . ".120." . $aPlanetsName[$asp2 - 1]] = $sDiff;
                }

                if (($sDiff >= $aOrbs[opp1] and $sDiff <= $aOrbs[opp2]) && ($aAspFlag[180] == true)) {
                    $mass_grd_opp[] = $sDiff;
                    $asp1 = $t + 1;
                    $asp2 = $l + 1;
                    $aAspects[180][] = "$asp1" . ".14." . "$asp2";
                    $aAspects[name][180][] = $aPlanetsName[$asp1 - 1] . ".180." . $aPlanetsName[$asp2 - 1];
                    $aAspects[num][180][] = ($asp1 - 1) . ".60." . ($asp2 - 1) . " (" . $sDiff . ")";
                    $aAspects[grd][180][$aPlanetsName[$asp1 - 1] . ".180." . $aPlanetsName[$asp2 - 1]] = $sDiff;
                }

                if (($sDiff >= $aOrbs[conj1] and $sDiff <= $aOrbs[conj2]) && ($aAspFlag[0] == true)) {
                    $mass_grd_soed[] = $sDiff;
                    $asp1 = $t + 1;
                    $asp2 = $l + 1;
                    $aAspects[0][] = "$asp1" . ".1." . "$asp2";
                    $aAspects[name][0][] = $aPlanetsName[$asp1 - 1] . ".0." . $aPlanetsName[$asp2 - 1];
                    $aAspects[num][0][] = ($asp1 - 1) . ".60." . ($asp2 - 1) . " (" . $sDiff . ")";
                    $aAspects[grd][0][$aPlanetsName[$asp1 - 1] . ".0." . $aPlanetsName[$asp2 - 1]] = $sDiff;
                }
            }
            $l++;
        }
        $t++;
    }
    return $aAspects;
}

function fCalcWeight($sGRD, $sRegExp, $aAspects, $aDateArray, $sDate) {
    foreach ($aAspects[name][$sGRD] as $sNum => $sPLN) {
        unset($sPrc);
        if (preg_match($sRegExp, $sPLN)) {
            if (!$sGRD == 0) {
                $sPrc = abs(10 - floor(abs(100 - (($aAspects[grd][$sGRD][$sPLN] * 100) / $sGRD))));
            } else {
                $sPrc = 10;
            }
            $aDateArray[$sDate] += $sPrc;
        }
    }

    return $aDateArray;
}

function fCalcPositiveNegative($sPlanetName, $aPlnFlag) {

    global $aDateArray_negative,
    $aDateArray_positive,
    $aAspects,
    $sDate,
    $aPlnFlag,
    $aOrbFlag;

    if ((!preg_match("/sun/", $sPlanetName)) && ($aPlnFlag[negative][sun] == true)) {
        //SUN
        $aOrbFlag[negative][sun][0] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(0, "/" . $sPlanetName . "\.0\.sun/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
        $aOrbFlag[negative][sun][90] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(90, "/" . $sPlanetName . "\.90\.sun/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
        $aOrbFlag[negative][sun][180] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(180, "/" . $sPlanetName . "\.180\.sun/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
    }

    if ((!preg_match("/moon/", $sPlanetName)) && ($aPlnFlag[negative][moon] == true)) {
        //MOON
        $aOrbFlag[negative][moon][0] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(0, "/" . $sPlanetName . "\.0\.moon/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
        $aOrbFlag[negative][moon][90] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(90, "/" . $sPlanetName . "\.90\.moon/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
        $aOrbFlag[negative][moon][180] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(180, "/" . $sPlanetName . "\.180\.moon/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
    }

    if ((!preg_match("/mercury/", $sPlanetName)) && ($aPlnFlag[negative][mercury] == true)) {
        //MERCURY
        $aOrbFlag[negative][mercury][0] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(0, "/" . $sPlanetName . "\.0\.mercury/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
        $aOrbFlag[negative][mercury][90] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(90, "/" . $sPlanetName . "\.90\.mercury/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
        $aOrbFlag[negative][mercury][180] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(180, "/" . $sPlanetName . "\.180\.mercury/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
    }

    if ((!preg_match("/venus/", $sPlanetName)) && ($aPlnFlag[negative][venus] == true)) {
        //VENUS
        $aOrbFlag[negative][venus][0] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(0, "/" . $sPlanetName . "\.0\.venus/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
        $aOrbFlag[negative][venus][90] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(90, "/" . $sPlanetName . "\.90\.venus/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
        $aOrbFlag[negative][venus][180] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(180, "/" . $sPlanetName . "\.180\.venus/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
    }
    if ((!preg_match("/mars/", $sPlanetName)) && ($aPlnFlag[negative][mars] == true)) {
        //MARS
        $aOrbFlag[negative][mars][0] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(0, "/" . $sPlanetName . "\.0\.mars/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
        $aOrbFlag[negative][mars][90] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(90, "/" . $sPlanetName . "\.90\.mars/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
        $aOrbFlag[negative][mars][180] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(180, "/" . $sPlanetName . "\.180\.mars/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
    }
    if ((!preg_match("/jupiter/", $sPlanetName)) && ($aPlnFlag[negative][jupiter] == true)) {
        //JUPITER
        $aOrbFlag[negative][jupiter][0] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(0, "/" . $sPlanetName . "\.0\.jupiter/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
        $aOrbFlag[negative][jupiter][90] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(90, "/" . $sPlanetName . "\.90\.jpiter/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
        $aOrbFlag[negative][jupiter][180] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(180, "/" . $sPlanetName . "\.180\.jupiter/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
    }
    if ((!preg_match("/saturn/", $sPlanetName)) && ($aPlnFlag[negative][saturn] == true)) {
        //SATURN
        $aOrbFlag[negative][saturn][0] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(0, "/" . $sPlanetName . "\.0\.saturn/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
        $aOrbFlag[negative][saturn][90] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(90, "/" . $sPlanetName . "\.90\.saturn/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
        $aOrbFlag[negative][saturn][180] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(180, "/" . $sPlanetName . "\.180\.saturn/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
    }
    if ((!preg_match("/uran/", $sPlanetName)) && ($aPlnFlag[negative][uran] == true)) {
        //URAN
        $aOrbFlag[negative][uran][0] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(0, "/" . $sPlanetName . "\.0\.uran/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
        $aOrbFlag[negative][uran][90] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(90, "/" . $sPlanetName . "\.90\.uran/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
        $aOrbFlag[negative][uran][180] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(180, "/" . $sPlanetName . "\.180\.uran/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
    }
    if ((!preg_match("/neptun/", $sPlanetName)) && ($aPlnFlag[negative][neptun] == true)) {
        //NEPTUN
        $aOrbFlag[negative][neptun][0] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(0, "/" . $sPlanetName . "\.0\.neptun/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
        $aOrbFlag[negative][neptun][90] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(90, "/" . $sPlanetName . "\.90\.neptun/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
        $aOrbFlag[negative][neptun][180] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(180, "/" . $sPlanetName . "\.180\.neptun/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
    }
    if ((!preg_match("/pluton/", $sPlanetName)) && ($aPlnFlag[negative][pluton] == true)) {
        //PLUTON
        $aOrbFlag[negative][pluton][0] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(0, "/" . $sPlanetName . "\.0\.pluton/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
        $aOrbFlag[negative][pluton][90] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(90, "/" . $sPlanetName . "\.90\.pluton/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
        $aOrbFlag[negative][pluton][180] == true ? $aDateArray_negative[$sPlanetName] = fCalcWeight(180, "/" . $sPlanetName . "\.180\.pluton/", $aAspects, $aDateArray_negative[$sPlanetName], $sDate) : "";
    }

    //POSITIVE ASPECTS

    if ((!preg_match("/sun/", $sPlanetName)) && ($aPlnFlag[positivee][sun] == true)) {
        //SUN
        $aOrbFlag[positive][sun][60] == true ? $aDateArray_positive[$sPlanetName] = fCalcWeight(60, "/" . $sPlanetName . "\.60\.sun/", $aAspects, $aDateArray_positive[$sPlanetName], $sDate) : "";
        $aOrbFlag[positive][sun][120] == true ? $aDateArray_positive[$sPlanetName] = fCalcWeight(120, "/" . $sPlanetName . "\.120\.sun/", $aAspects, $aDateArray_positive[$sPlanetName], $sDate) : "";
    }
    if ((!preg_match("/moon/", $sPlanetName)) && ($aPlnFlag[positive][moon] == true)) {
        //MOON    
        $aOrbFlag[positive][moon][60] == true ? $aDateArray_positive[$sPlanetName] = fCalcWeight(60, "/" . $sPlanetName . "\.60\.moon/", $aAspects, $aDateArray_positive[$sPlanetName], $sDate) : "";
        $aOrbFlag[positive][moon][120] == true ? $aDateArray_positive[$sPlanetName] = fCalcWeight(120, "/" . $sPlanetName . "\.120\.moon/", $aAspects, $aDateArray_positive[$sPlanetName], $sDate) : "";
    }
    if ((!preg_match("/mercury/", $sPlanetName)) && ($aPlnFlag[positive][mercury] == true)) {
        //MERCURY    
        $aOrbFlag[positive][mercury][60] == true ? $aDateArray_positive[$sPlanetName] = fCalcWeight(60, "/" . $sPlanetName . "\.60\.mercury/", $aAspects, $aDateArray_positive[$sPlanetName], $sDate) : "";
        $aOrbFlag[positive][mercury][120] == true ? $aDateArray_positive[$sPlanetName] = fCalcWeight(120, "/" . $sPlanetName . "\.120\.mercury/", $aAspects, $aDateArray_positive[$sPlanetName], $sDate) : "";
    }
    if ((!preg_match("/venus/", $sPlanetName)) && ($aPlnFlag[positive][venus] == true)) {
        //VENUS  
        $aOrbFlag[positive][venus][60] == true ? $aDateArray_positive[$sPlanetName] = fCalcWeight(60, "/" . $sPlanetName . "\.60\.venus/", $aAspects, $aDateArray_positive[$sPlanetName], $sDate) : "";
        $aOrbFlag[positive][venus][120] == true ? $aDateArray_positive[$sPlanetName] = fCalcWeight(120, "/" . $sPlanetName . "\.120\.venus/", $aAspects, $aDateArray_positive[$sPlanetName], $sDate) : "";
    }
    if ((!preg_match("/mars/", $sPlanetName)) && ($aPlnFlag[positive][mars] == true)) {
        //MARS    
        $aOrbFlag[positive][mars][60] == true ? $aDateArray_positive[$sPlanetName] = fCalcWeight(60, "/" . $sPlanetName . "\.60\.mars/", $aAspects, $aDateArray_positive[$sPlanetName], $sDate) : "";
        $aOrbFlag[positive][mars][120] == true ? $aDateArray_positive[$sPlanetName] = fCalcWeight(120, "/" . $sPlanetName . "\.120\.mars/", $aAspects, $aDateArray_positive[$sPlanetName], $sDate) : "";
    }
    if ((!preg_match("/jupiter/", $sPlanetName)) && ($aPlnFlag[positive][jupiter] == true)) {
        //JUPITER
        $aOrbFlag[positive][jupiter][60] == true ? $aDateArray_positive[$sPlanetName] = fCalcWeight(60, "/" . $sPlanetName . "\.60\.jupiter/", $aAspects, $aDateArray_positive[$sPlanetName], $sDate) : "";
        $aOrbFlag[positive][jupiter][120] == true ? $aDateArray_positive[$sPlanetName] = fCalcWeight(120, "/" . $sPlanetName . "\.120\.jupiter/", $aAspects, $aDateArray_positive[$sPlanetName], $sDate) : "";
    }
    if ((!preg_match("/saturn/", $sPlanetName)) && ($aPlnFlag[positive][saturn] == true)) {
        //SATURN
        $aOrbFlag[positive][saturn][60] == true ? $aDateArray_positive[$sPlanetName] = fCalcWeight(60, "/" . $sPlanetName . "\.60\.saturn/", $aAspects, $aDateArray_positive[$sPlanetName], $sDate) : "";
        $aOrbFlag[positive][saturn][120] == true ? $aDateArray_positive[$sPlanetName] = fCalcWeight(120, "/" . $sPlanetName . "\.120\.saturn/", $aAspects, $aDateArray_positive[$sPlanetName], $sDate) : "";
    }
    if ((!preg_match("/uran/", $sPlanetName)) && ($aPlnFlag[positive][uran] == true)) {
        //URAN
        $aOrbFlag[positive][uran][60] == true ? $aDateArray_positive[$sPlanetName] = fCalcWeight(60, "/" . $sPlanetName . "\.60\.uran/", $aAspects, $aDateArray_positive[$sPlanetName], $sDate) : "";
        $aOrbFlag[positive][uran][120] == true ? $aDateArray_positive[$sPlanetName] = fCalcWeight(120, "/" . $sPlanetName . "\.120\.uran/", $aAspects, $aDateArray_positive[$sPlanetName], $sDate) : "";
    }
    if ((!preg_match("/neptun/", $sPlanetName)) && ($aPlnFlag[positive][neptun] == true)) {
        //NEPTUN
        $aOrbFlag[positive][neptun][60] == true ? $aDateArray_positive[$sPlanetName] = fCalcWeight(60, "/" . $sPlanetName . "\.60\.neptun/", $aAspects, $aDateArray_positive[$sPlanetName], $sDate) : "";
        $aOrbFlag[positive][neptun][120] == true ? $aDateArray_positive[$sPlanetName] = fCalcWeight(120, "/" . $sPlanetName . "\.120\.neptun/", $aAspects, $aDateArray_positive[$sPlanetName], $sDate) : "";
    }
    if ((!preg_match("/pluton/", $sPlanetName)) && ($aPlnFlag[positive][pluton] == true)) {
        //PLUTON
        $aOrbFlag[positive][pluton][60] == true ? $aDateArray_positive[$sPlanetName] = fCalcWeight(60, "/" . $sPlanetName . "\.60\.pluton/", $aAspects, $aDateArray_positive[$sPlanetName], $sDate) : "";
        $aOrbFlag[positive][pluton][120] == true ? $aDateArray_positive[$sPlanetName] = fCalcWeight(120, "/" . $sPlanetName . "\.120\.pluton/", $aAspects, $aDateArray_positive[$sPlanetName], $sDate) : "";
    }
}

function fArrayPrepare() {

    global $aDataNames,
    $aDataArray_negative_,
    $aDataArray_positive_,
    $aDateArray_negative,
    $aDateArray_positive,
    $aPlanetsName;

    $k = 0;
    foreach ($aPlanetsName as $sPlanetName) {
        foreach ($aDateArray_negative[$sPlanetName] as $sDate => $sWeight) {
            $k < 1 ? $aDataNames[] = $sDate : "";
            $aDataArray_negative_[$sPlanetName][] = $sWeight;
        }
        foreach ($aDateArray_positive[$sPlanetName] as $sDate => $sWeight) {
            $aDataArray_positive_[$sPlanetName][] = $sWeight;
        }
        $k++;
    }
}

function fShowArray() {

    global $aPlanetsName,
    $aGraphParamConf,
    $aPlnShow,
    $aDataNames,
    $aDataArray_positive_,
    $aDataArray_negative_;

    print "<pre>";
    foreach ($aPlanetsName as $sPlanetName) {
        if ($aPlnShow[$sPlanetName] == true) {
            print_r($aDataNames);
            print_r($aDataArray_positive_[$sPlanetName]);
            print_r($aDataArray_negative_[$sPlanetName]);
        }
    }
    print "</pre>";
}

?>