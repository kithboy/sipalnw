<?
// hostname or ip of server
$servername='localhost';

// username and password to log onto db server
$dbusername='sipalnw';
$dbpassword='sipalnw';

// name of database
$dbname='sipalnw';

////////////// Do not  edit below/////////

connecttodb($servername,$dbname,$dbusername,$dbpassword);
function connecttodb($servername,$dbname,$dbuser,$dbpassword)
{
global $link;
$link=mysql_connect ("$servername","$dbuser","$dbpassword");
if(!$link){die("Could not connect to MySQL");}
mysql_select_db("$dbname",$link) or die ("could not open db".mysql_error());
}
///////////////////////////////

mysql_query("  SET 
				character_set_results = 'utf8',
				character_set_client = 'utf8', 
				character_set_connection = 'utf8', 
				character_set_database = 'utf8', 
				character_set_server = 'utf8'");
?>