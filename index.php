<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BrowserInfoTester</title>
    </head>
    <body>
        <?php
            echo "<pre>";

            error_reporting(E_ALL);
            ini_set("display_errors", 1);

            include_once "../weblibs/php/DateTime.php";
            include_once "../weblibs/php/BrowserInfo.php";
            use weblibs\php\BrowserInfo;
            use weblibs\php\DateTime;

            define("TEST_FILE_PATH", "User Agent List.txt");
            define("BROWSCAP_FILE_PATH", "php_browscap.txt");
            $dt = new DateTime();
            //print $_SERVER['HTTP_USER_AGENT'] . "\n";

            $b  = new BrowserInfo();
            //$b->print_r();

            //print_r($_SERVER);

        //    function detect_engine()
        //    {
        //        /****** browser engine detection **************/
        //        //browsers
        //        define("UNKNOWN", 0);
        //        define("TRIDENT", 1);
        //        define("GECKO", 2);
        //        define("PRESTO", 3);
        //        define("WEBKIT", 4);
        //        define("VALIDATOR", 5);
        //        define("ROBOTS", 6);
        //
        //if(!isset($_SESSION["info"]['browser'])) {
        //    $_SESSION["info"]['browser']['engine'] = UNKNOWN;
        //    $_SESSION["info"]['browser']['version'] = UNKNOWN;
        //    $_SESSION["info"]['browser']['platform'] = 'Unknown';
        //
        //    $navigator_user_agent = ' ' . strtolower($_SERVER['HTTP_USER_AGENT']);
        //
        //    if (strpos($navigator_user_agent, 'linux')) :
        //        $_SESSION["info"]['browser']['platform'] = 'Linux';
        //    elseif (strpos($navigator_user_agent, 'mac')) :
        //        $_SESSION["info"]['browser']['platform'] = 'Mac';
        //    elseif (strpos($navigator_user_agent, 'win')) :
        //        $_SESSION["info"]['browser']['platform'] = 'Windows';
        //    endif;
        //
        //    if (strpos($navigator_user_agent, "trident")) {
        //        $_SESSION["info"]['browser']['engine'] = TRIDENT;
        //        $_SESSION["info"]['browser']['version'] = floatval(substr($navigator_user_agent, strpos($navigator_user_agent, "trident/") + 8, 3));
        //    }
        //    elseif (strpos($navigator_user_agent, "webkit")) {
        //        $_SESSION["info"]['browser']['engine'] = WEBKIT;
        //        $_SESSION["info"]['browser']['version'] = floatval(substr($navigator_user_agent, strpos($navigator_user_agent, "webkit/") + 7, 8));
        //    }
        //        elseif (strpos($navigator_user_agent, "presto")) {
        //        $_SESSION["info"]['browser']['engine'] = PRESTO;
        //        $_SESSION["info"]['browser']['version'] = floatval(substr($navigator_user_agent, strpos($navigator_user_agent, "presto/") + 6, 7));
        //    }
        //    elseif (strpos($navigator_user_agent, "gecko")) {
        //        $_SESSION["info"]['browser']['engine'] = GECKO;
        //        $_SESSION["info"]['browser']['version'] = floatval(substr($navigator_user_agent, strpos($navigator_user_agent, "gecko/") + 6, 9));
        //    }
        //    elseif (strpos($navigator_user_agent, "robot"))
        //        $_SESSION["info"]['browser']['engine'] = ROBOTS;
        //    elseif (strpos($navigator_user_agent, "spider"))
        //        $_SESSION["info"]['browser']['engine'] = ROBOTS;
        //    elseif (strpos($navigator_user_agent, "bot"))
        //        $_SESSION["info"]['browser']['engine'] = ROBOTS;
        //    elseif (strpos($navigator_user_agent, "crawl"))
        //        $_SESSION["info"]['browser']['engine'] = ROBOTS;
        //    elseif (strpos($navigator_user_agent, "search"))
        //        $_SESSION["info"]['browser']['engine'] = ROBOTS;
        //    elseif (strpos($navigator_user_agent, "w3c_validator")) 
        //        $_SESSION["info"]['browser']['engine'] = VALIDATOR;
        //    elseif (strpos($navigator_user_agent, "jigsaw"))
        //        $_SESSION["info"]['browser']['engine'] = VALIDATOR;
        //
        //echo "<pre>\n\nEngine detected: ".$_SESSION["info"]['browser']['engine'];
        //switch($_SESSION["info"]['browser']['engine']) {
        //    case UNKNOWN: echo " (unknown)";
        //    break;
        //    case TRIDENT: echo " (trident)";
        //    break;
        //    case GECKO: echo " (gecko)";
        //    break;
        //    case PRESTO: echo " (presto)";
        //    break;
        //    case WEBKIT: echo " (Webkit)";
        //    break;
        //    case VALIDATOR: echo " (validator)";
        //    break;
        //    case ROBOTS: echo " (robot)";
        //}
        //echo "\nEngine version: ".$_SESSION["info"]['browser']['version'];
        //echo "\nPlataform detected: ".$_SESSION["info"]['browser']['platform'];
        //echo " \n\n</pre>";
        //    }
        //}
        //
        //    function browser_info($agent=null) 
        //    {
        //        // Declare known browsers to look for
        //        $known = array('msie', 'firefox', 'safari', 'webkit', 'opera', 'netscape',
        //          'konqueror', 'gecko');
        //
        //        // Clean up agent and build regex that matches phrases for known browsers
        //        // (e.g. "Firefox/2.0" or "MSIE 6.0" (This only matches the major and minor
        //        // version numbers.  E.g. "2.0.0.6" is parsed as simply "2.0"
        //        $agent = strtolower($agent ? $agent : $_SERVER['HTTP_USER_AGENT']);
        //        $pattern = '#(?<browser>' . join('|', $known) .
        //          ')[/ ]+(?<version>[0-9]+(?:\.[0-9]+)?)#';
        //
        //        // Find all phrases (or return empty array if none found)
        //        if (!preg_match_all($pattern, $agent, $matches)) return array();
        //
        //        // Since some UAs have more than one phrase (e.g Firefox has a Gecko phrase,
        //        // Opera 7,8 have a MSIE phrase), use the last one found (the right-most one
        //        // in the UA).  That's usually the most correct.
        //        $i = count($matches['browser'])-1;
        //        return array($matches['browser'][$i] => $matches['version'][$i]);
        //      }
        //
        //    function getBrowser($u_agent = null)
        //    {
        //            if ($u_agent == null) {
        //                $u_agent = $_SERVER['HTTP_USER_AGENT'];
        //            }
        //    $bname = 'Unknown';
        //    $platform = 'Unknown';
        //    $version= "";
        //
        //    //First get the platform?
        //    if (preg_match('/linux/i', $u_agent)) {
        //        $platform = 'Linux';
        //    }
        //    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        //        $platform = 'Mac';
        //    }
        //    elseif (preg_match('/windows|win32/i', $u_agent)) {
        //        $platform = 'Windows';
        //    }
        //   
        //    // Next get the name of the useragent yes seperately and for good reason
        //    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
        //    {
        //        $bname = 'Internet Explorer';
        //        $ub = "MSIE";
        //    }
        //    elseif(preg_match('/Firefox/i',$u_agent))
        //    {
        //        $bname = 'Mozilla Firefox';
        //        $ub = "Firefox";
        //    }
        //    elseif(preg_match('/Chrome/i',$u_agent))
        //    {
        //        $bname = 'Google Chrome';
        //        $ub = "Chrome";
        //    }
        //    elseif(preg_match('/Safari/i',$u_agent))
        //    {
        //        $bname = 'Apple Safari';
        //        $ub = "Safari";
        //    }
        //    elseif(preg_match('/Opera/i',$u_agent))
        //    {
        //        $bname = 'Opera';
        //        $ub = "Opera";
        //    }
        //    elseif(preg_match('/Netscape/i',$u_agent))
        //    {
        //        $bname = 'Netscape';
        //        $ub = "Netscape";
        //    }
        //   
        //    // finally get the correct version number
        //    $known = array('Version', $ub, 'other');
        //    $pattern = '#(?<browser>' . join('|', $known) .
        //    ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
        //    if (!preg_match_all($pattern, $u_agent, $matches)) {
        //        // we have no matching number just continue
        //    }
        //   
        //    // see how many we have
        //    $i = count($matches['browser']);
        //    if ($i != 1) {
        //        //we will have two since we are not using 'other' argument yet
        //        //see if version is before or after the name
        //        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
        //            $version= $matches['version'][0];
        //        }
        //        else {
        //            $version= $matches['version'][1];
        //        }
        //    }
        //    else {
        //        $version= $matches['version'][0];
        //    }
        //   
        //    // check if we have a number
        //    if ($version==null || $version=="") {$version="?";}
        //   
        //    return array(
        //        'userAgent' => $u_agent,
        //        'name'      => $bname,
        //        'version'   => $version,
        //        'platform'  => $platform,
        //        'pattern'    => $pattern
        //    );
        //}

            // open and read file
            //$fileHanle = fopen(TEST_FILE_PATH, "r");
            //var_dump($fileHanle);

            //$fileContent          = fread($fileHanle);
            $dt->timerStart(); 
            $fileTestContent        = file(TEST_FILE_PATH);
            $fileBrowscapContent    = file(BROWSCAP_FILE_PATH);
            //var_dump($fileContent);
            $dt->timerStop("File readed in");

        //    $userAgent = filter_input(INPUT_SERVER, 'HTTP_USER_AGENT');
        //    print_r($userAgent . "\n");
        //    
        //    echo "in array: ";
        //    var_dump(in_array($userAgent, $fileBrowscapContent));

        //    $b = new BrowserInfo(true);
        //    $b->print_r();

        //    $dt->timerStart(); 
        //    detect_engine();
        //    $dt->timerStop("detect_engine in");
        //    
        //    $dt->timerStart(); 
        //    print_r(browser_info($userAgent));
        //    $dt->timerStop("browser_info in");
        //    
        //    
        //    
        //    $dt->timerStart(); 
        //    $ua=getBrowser();
        //    $yourbrowser= "Your browser: " . $ua['name'] . " " . $ua['version'] . " on " .$ua['platform'] . " reports: <br >" . $ua['userAgent'];
        //    print_r($ua);
        //    $dt->timerStop("getBrowser in");
        //  
        //    foreach ($fileTestContent as $value) {
        //        $dt->timerStart(); 
        //        $ua = getBrowser($value /*$fileTestContent[rand(0, count($fileTestContent))]*/);
        //        printf("Your browser: %-30s %-20s on %-10s\n", $ua['name'], $ua['version'],
        //               $ua['platform']);
        //        //print_r($ua);
        //        $dt->timerStop("getBrowser in");
        //    }

            $uagenttot = 0;
            $uagentidentok = 0;
            foreach ($fileTestContent as $value) {
                $dt->timerStart();
                $b->UserAgentString = str_replace('\n', '', $value);
                if (!$b->getBrowserInfo(false)->identificationStatus()) {
                    $b->printR();
                } else {
                    $uagentidentok++;
                }
                $dt->timerStop("getBrowser in");
                $uagenttot++;
            }

            print "identified ($uagentidentok / $uagenttot) - " 
                . round(($uagentidentok * 100) / $uagenttot, 2) . "%\n";

            echo "</pre>";
    
        ?>
    </body>
</html>
