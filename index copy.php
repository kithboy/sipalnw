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
 
        <div data-role="header">
            <h1>Soccer Duck</h1>
            <a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-icon-back ui-btn-icon-left ui-btn-icon-notext">Back</a>
            <a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-icon-left ui-icon-comment ui-btn-icon-notext">Button</a>
        </div><!-- /header -->
 
        <div data-role="content">
	        <div data-role="fieldcontain">

            	<div data-role="collapsible" data-collapsed="false">
                    <h4>ชื่อจ้า</h4>
                </div>
                
            </div>
            
            <div data-role="collapsible" data-theme="a" data-content-theme="a" data-collapsed="false"<? /*if($showlist) echo('data-collapsed="false"');*/ ?>>
                <h4>List จ้า</h4>
                <ul data-role="listview" data-inset="true" data-filter="true">

<?
			//while($row = mysql_fetch_array($data)){
?>
                    <li><a href="?id=xxx"><?=$row['linesticker_title']?></a></li>
<?	//}	?>
                </ul>
            </div>
            
        </div><!-- /content -->
 
        <div data-role="footer">
			<h4>2014 &copy;dogdiri</h4>
        </div><!-- /footer -->
 
    </div><!-- /page -->
</body>
</html>