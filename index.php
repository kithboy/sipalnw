<? include("inc/dbcns.php"); ?>
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
                    <h4>เอกราช เก่งทุกทาง</h4>
                    <div style="text-align:center;">
                        <img src="boximages/1.jpg" style="width:100%; max-width:320px;">
                    </div>
                    <p>พากษ์ดีเป็นกลาง เนื้อหาแน่นมาก
Name : เอกราช เก่งทุกทาง 
Age : 40 ปี 
Education : ปริญญาตรี สังคมศาสตร์ จากมหาวิทยาลัยเกษตรศาสตร์ 
Career Highlights 
- ปัจจุบัน นักพากย์ฟุตบอล 
- พิธีกรรายการ “เรื่องเล่าเช้านี้” 
- ที่ปรึกษานิตยสาร FHM 
- อดีต บรรณาธิการนิตยสาร GM 
- คอลัมนิตส์ในหนังสือพิมพ์มติชน รายวัน ประชาชาติธุรกิจ 
- ผู้สื่อข่าวหนังสือพิมพ์สยามกีฬารายวัน  </p>
                    <a href="#vote" data-role="button" data-inline="true" data-theme="b">ช๊อบชอบ</a>
                    <a href="#unvote" data-role="button" data-inline="true" data-theme="a">เฉ๊ยเฉย</a>
                    <a href="#unvote" data-role="button" data-inline="true" data-theme="a">ไม่ชอบเบย</a>
                </div>
                
            </div>
            
            <div data-role="collapsible" data-theme="a" data-content-theme="a" data-collapsed="false"<? /*if($showlist) echo('data-collapsed="false"');*/ ?>>
                <h4>List จ้า</h4>
                <ul data-role="listview" data-inset="true" data-filter="true">

<?
			//while($row = mysql_fetch_array($data)){
?>
                    <li><a href="?id=xxx">เอกราช เก่งทุกทาง</a></li>
                    <li><a href="?id=xxx">วีระศักดิ์ นิลกลัด</a></li>
                    <li><a href="?id=xxx">อดิศร พึ่งยา</a></li>
                    <li><a href="?id=xxx">สาธิต กรีกุล</a></li>
                    <li><a href="?id=xxx">อิสรพงษ์ ผลมั่ง</a></li>
                    <li><a href="?id=xxx">เอกราช เก่งทุกทาง</a></li>
                    <li><a href="?id=xxx">วีระศักดิ์ นิลกลัด</a></li>
                    <li><a href="?id=xxx">อดิศร พึ่งยา</a></li>
                    <li><a href="?id=xxx">สาธิต กรีกุล</a></li>
                    <li><a href="?id=xxx">อิสรพงษ์ ผลมั่ง</a></li>
                    <li><a href="?id=xxx">เอกราช เก่งทุกทาง</a></li>
                    <li><a href="?id=xxx">วีระศักดิ์ นิลกลัด</a></li>
                    <li><a href="?id=xxx">อดิศร พึ่งยา</a></li>
                    <li><a href="?id=xxx">สาธิต กรีกุล</a></li>
                    <li><a href="?id=xxx">อิสรพงษ์ ผลมั่ง</a></li>
                    <li><a href="?id=xxx">เอกราช เก่งทุกทาง</a></li>
                    <li><a href="?id=xxx">วีระศักดิ์ นิลกลัด</a></li>
                    <li><a href="?id=xxx">อดิศร พึ่งยา</a></li>
                    <li><a href="?id=xxx">สาธิต กรีกุล</a></li>
                    <li><a href="?id=xxx">อิสรพงษ์ ผลมั่ง</a></li>
                    <li><a href="?id=xxx">เอกราช เก่งทุกทาง</a></li>
                    <li><a href="?id=xxx">วีระศักดิ์ นิลกลัด</a></li>
                    <li><a href="?id=xxx">อดิศร พึ่งยา</a></li>
                    <li><a href="?id=xxx">สาธิต กรีกุล</a></li>
                    <li><a href="?id=xxx">อิสรพงษ์ ผลมั่ง</a></li>
                    <li><a href="?id=xxx">เอกราช เก่งทุกทาง</a></li>
                    <li><a href="?id=xxx">วีระศักดิ์ นิลกลัด</a></li>
                    <li><a href="?id=xxx">อดิศร พึ่งยา</a></li>
                    <li><a href="?id=xxx">สาธิต กรีกุล</a></li>
                    <li><a href="?id=xxx">อิสรพงษ์ ผลมั่ง</a></li>
                    <li><a href="?id=xxx">เอกราช เก่งทุกทาง</a></li>
                    <li><a href="?id=xxx">วีระศักดิ์ นิลกลัด</a></li>
                    <li><a href="?id=xxx">อดิศร พึ่งยา</a></li>
                    <li><a href="?id=xxx">สาธิต กรีกุล</a></li>
                    <li><a href="?id=xxx">อิสรพงษ์ ผลมั่ง</a></li>
                    <li><a href="?id=xxx">เอกราช เก่งทุกทาง</a></li>
                    <li><a href="?id=xxx">วีระศักดิ์ นิลกลัด</a></li>
                    <li><a href="?id=xxx">อดิศร พึ่งยา</a></li>
                    <li><a href="?id=xxx">สาธิต กรีกุล</a></li>
                    <li><a href="?id=xxx">อิสรพงษ์ ผลมั่ง</a></li>
<?	//}	?>
                </ul>
            </div>
            
        </div><!-- /content -->
 
        <div data-role="footer">
			<h4>2014 &copy;Sipa lnw mak</h4>
        </div><!-- /footer -->
 
    </div><!-- /page -->
</body>
</html>