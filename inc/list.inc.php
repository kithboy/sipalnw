            <div data-role="collapsible" data-theme="a" data-content-theme="a" data-collapsed="false"<? /*if($showlist) echo('data-collapsed="false"');*/ ?>>
                <h3>Line Stickers ของไทย</h3>
                <ul data-role="listview" data-inset="true" data-filter="true">

<?
			while($row = mysql_fetch_array($data)){
?>
                    <li><a href="?id=<?=$row['linesticker_id']?>"><div style="width:50px; height:50px; background:url('boximages/tabimages/<?=$row['linesticker_id']?>-tab.png') center no-repeat; background-size:100%; display:inline-block; margin:-16px 0 0 -16px; position:absolute;" />&nbsp;</div><div style="display:inline-block; margin-left:30px;"><?=$row['linesticker_title']?></div></a></li>
<?	}	?>
                </ul>
            
                <p>ผู้ที่ทำสติ๊กเกอร์สำหรับไลน์ที่สนใจลงรายละเอียดและลิ้งค์ซื้อ สามารถติดต่อได้ทาง <a href="https://www.facebook.com/mydogfaceboy">fb:ด.ช.หน้าหมา</a> หรือติดต่อ admin@dogdiri.com<br />
                For Thai Line Sticker Creator who interested to public Stickers with DOGDIRI Portal, contact admin@dogdiri.com or Facebook page.</p>
                <a href="https://www.facebook.com/messages/mydogfaceboy" data-role="button" data-theme="b">Contact via Facebook</a>
            </div>
        
            <div style="margin:10px 0 10px 0; text-align:center;">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- dogdiri-mobile -->
                <ins class="adsbygoogle"
                     style="display:inline-block;width:320px;height:50px"
                     data-ad-client="ca-pub-9746620852103465"
                     data-ad-slot="3766413738"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
