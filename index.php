<? include("inc/dbcns.php");
$memberId = 1;
?>
<!doctype html>
<html>
<head>
    <title>Soccer Duck</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="scripts/jquerymobile/jquery.mobile-1.4.2.min.css">
    <link rel="stylesheet" href="scripts/jquerymobile/dogdiriportal.min.css">
    <link rel="stylesheet" href="scripts/jquerymobile/jquery.mobile.icons.min.css">
    <script src="scripts/jquery-1.7.1.min.js"></script>
    <script src="scripts/jquerymobile/jquery.mobile-1.4.2.min.js"></script>
</head>
<body>
    <div data-role="page">
 
 
<?
$page = $_REQUEST['page'];

if(isset($_REQUEST['rid'])){
	$rid = $_REQUEST['rid'];
	$data = mysql_query("SELECT * FROM reporter WHERE reporterId = '".$rid."'");
	$row = mysql_fetch_array($data);

?>

        <div data-role="header">
            <h1>Soccer Duck</h1>
            <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-icon-back ui-btn-icon-left ui-btn-icon-notext">Back</a>
            <a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-icon-left ui-icon-comment ui-btn-icon-notext">Button</a>
        </div><!-- /header -->
 
        <div data-role="content">
        
        	<? if($page=='home'){ ?>
            
            	<div style="margin:0"><img src="boximages/football.jpg" style="width:100%"></div>
            
            <? } ?>
        
        
	        <div data-role="fieldcontain">

            	<div data-role="collapsible" data-collapsed="false">
                    <h4><?=$row['firstname']." ".$row['lastname']?></h4>
                    <div style="text-align:center;">
                        <img src="boximages/<?=$row['reporterId']?>.jpg" style="width:100%; max-width:320px;">
                    </div>
                    <h4><?=$row['nickName']?></h4>
                    <p><?=$row['reporterDetail']?></p>
                    <a href="vote.php?rid=<?=$row['reporterId']?>&score=2" data-role="button" data-inline="true" data-theme="b">ช๊อบชอบ</a>
                    <a href="vote.php?rid=<?=$row['reporterId']?>&score=1" data-role="button" data-inline="true" data-theme="a">เฉ๊ยเฉย</a>
                    <a href="vote.php?rid=<?=$row['reporterId']?>&score=-1" data-role="button" data-inline="true" data-theme="a">ไม่ชอบเบย</a>

<br><br>
                	<form action="comment.php" method="post">

                        จะบอกไรจ้ะ<br>
                        <input type="hidden" name="rid" id="rid" value="<?=$rid?>">
                        <textarea id="membercomment" name="membercomment"></textarea>
                        <input type="submit" data-role="button" name="submit" id="submit" data-theme="b" value="ส่งเบย">
                    </form>
<br><br>
                <div data-role="collapsible" data-collapsed="false">
					<h4>Comment เพียบเรย</h4>
                    <ul data-role="listview" data-inset="true">
	<?
        $data = mysql_query("SELECT * FROM comment WHERE reporterId = '".$rid."'");
                while($row = mysql_fetch_array($data)){
    ?>
                        <li><?=$row['detail']?></li>
    
    <?	}	?>
                    </ul>
                </div>
                
                
            </div>
<?
}

if($page=='rank'){
	//no view

?>

                <div data-role="collapsible" data-collapsed="false">
					<h4>Ranking พากษ์เทพๆ</h4>
                    <ul data-role="listview" data-inset="true">
	<?
        $data = mysql_query("SELECT reporter.reporterId, reporter.firstName, reporter.lastName, reporter.nickName, COALESCE( SUM( membervotereporter.score ) , 0 ) ss,
SUM(CASE 
             WHEN  membervotereporter.score = 1  THEN 1
             ELSE 0
           END) AS vote1, 
SUM(CASE 
             WHEN  membervotereporter.score = 2  THEN 1
             ELSE 0
           END) AS vote2, 
SUM(CASE 
             WHEN  membervotereporter.score = -1  THEN 1
             ELSE 0
           END) AS voteMinus1 
FROM reporter
LEFT JOIN membervotereporter ON reporter.reporterid = membervotereporter.reporterid
GROUP BY reporter.firstName
ORDER BY SUM( membervotereporter.score ) DESC;
");
                while($row = mysql_fetch_array($data)){
    ?>
                        <li><a href="index.php?rid=<?=$row['reporterId']?>"><img src="boximages/<?=$row['reporterId']?>.jpg"><br><?=$row['nickName']?> (<?=$row['ss']?>)</a>
                        	<div>
                            	<div style="height:8px; background:#06C; width:<?=($row['vote1']*100/$row['ss'])?>%">&nbsp;</div>
                            	<div style="height:8px; background:#CC0; width:<?=($row['vote2']*100/$row['ss'])?>%">&nbsp;</div>
                            	<div style="height:8px; background:#F00; width:<?=($row['voteMinus1']*100/$row['ss'])?>%">&nbsp;</div>
                            
                            </div>
                        </li>
    
    <?	}	?>
                    </ul>
                </div>

<?
}
if($page=='' || $page=='list' || $page=='home'){

?>
            <div data-role="collapsible" data-theme="a" data-content-theme="a" data-collapsed="false"<? /*if($showlist) echo('data-collapsed="false"');*/ ?>>
                <h4>List จ้า</h4>
                <ul data-role="listview" data-inset="true" data-filter="true">

<?
	$data = mysql_query("SELECT * FROM reporter");
			while($row = mysql_fetch_array($data)){
?>
                    <li><a href="index.php?page=list&rid=<?=$row['reporterId']?>"><?=$row['firstName']." ".$row['lastName']?></a></li>

<?	}
	?>
                </ul>
            </div>
<? } ?>
            
            
        <div data-role="footer" data-position="fixed">
            <div data-role="navbar" >
                <ul>
                    <li><a href="index.php?page=home" data-icon="home">บ้านเก๊าเอง</a></li>
                    <li><a href="index.php?page=list" data-icon="bullets">รายชื่อจ้า</a></li>
                    <li><a href="index.php?page=rank" data-icon="user">ลำดับอ้ะ</a></li>
                    <!--li><a href="#team.php" data-icon="lock">รายชื่อทีมเทพๆ</a></li-->
                </ul>
            </div><!-- /navbar -->
        </div><!-- /footer -->
                        
        </div><!-- /content -->
  
    </div><!-- /page -->
</body>
</html>