<?php

if(!isset($_SESSION)) session_start();

    $fileTxt = 'usersOn.txt';
    $timeOn = 120;
    $sep = '^^';
    $vst_id = '-vst-';


$uVon = isset($_SESSION['nume']) ? $_SESSION['nume'] : $_SERVER['SERVER_ADDR']. $vst_id;

    $rgxVst = '/^([0-9\.]*)'. $vst_id. '/i';
    $nrVst = 0;


    $addRow[] = $uVon. $sep. time();



if(is_writable($fileTxt)) {
    $ar_rows = file($fileTxt, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $nrRows = count($ar_rows);



if($nrRows>0) {
    for($i=0; $i<$nrRows; $i++) {
        $ar_line = explode($sep, $ar_rows[$i]);

if($ar_line[0]!=$uVon && (intval($ar_line[1])+$timeOn)>=time()) {
    $addRow[] = $ar_rows[$i];
            }
        }
    }
}

$nruvOn = count($addRow);
$usrOn = '';

for($i=0; $i < $nruvOn; $i++) {
    if(preg_match($rgxVst, $addRow[$i])) $nrVst++;
    else {

    $ar_usrOn = explode($sep, $addRow[$i]);
    $usrOn .= '<br/> - <i>'. $ar_usrOn[0]. '</i>';
    }
}

$nrUsr = $nruvOn - $nrVst;

$reOut = '<div id="uVon"><h4>Online: '. $nruvOn. '</h4>Visitors: '. $nrVst. '<br/>Users: '. $nrUsr. $usrOn. '</div>';


if(!file_put_contents($fileTxt, implode("\n", $addRow))) $reOut = 'Error: Recording file not exists, or is not writable';


if(isset($_GET['uVon']) && $_GET['uVon']=='showOn') $reOut = "document.write('$reOut');";

echo $reOut;

$file = file("count.txt");
$count = implode("", $file);
$count++;
$myFile = fopen("count.txt","w");
fputs($myFile,$count);
fclose($myFile);
?>
<span>Views: <?=$count?></span>

