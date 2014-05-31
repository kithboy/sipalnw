<?

include("inc/dbcns.php");

$memberId = 1;
$rid = $_REQUEST['rid'];
$vote = $_REQUEST['score'];

mysql_query("INSERT INTO `membervotereporter` (`memberId`, `reporterId`, `timestamp`, `score`) VALUES ('".$memberId."', '".$rid."', '', '".$vote."');");
//die();
header("Location: index.php");

?>