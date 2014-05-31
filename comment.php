<?

include("inc/dbcns.php");
$memberId = 1;
$rid = $_REQUEST['rid'];
$comment = $_REQUEST['membercomment'];
mysql_query("INSERT INTO `comment` (`commentID`, `reporterID`, `memberID`, `detail`, `time`, `read`) VALUES (NULL, '".$rid."', '".$memberId."', '".$comment."', NULL, '');");

header("Location: index.php");

?>