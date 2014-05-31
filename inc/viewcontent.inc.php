<?
				$title = $row['linesticker_title'];
				$desc = $row['linesticker_desc'];
				$url = $row['linesticker_url'];
				$creator = $row['linesticker_creator'];
				$copyright = $row['linesticker_copyright'];
				$imgurl = $row['linesticker_imgurl'];
				$url_web = $row['linesticker_web'];
				$url_fb = $row['linesticker_fb'];
?>

            <div style="text-align:center;">
                <img src="<?=$imgurl?>" alt="image" style="margin: auto; width:100%; max-width:480px; border:1px #555555 solid;"/>
            </div>
            <a href="line://shop/detail/<?=$id?>" data-role="button" data-inline="true" data-theme="b">ซื้อผ่านแอพ</a>
            <a href="https://store.line.me/stickershop/detail?packageId=<?=$id?>" data-role="button" data-inline="true">ซื้อผ่านเวบ</a>
            <h4><?=$title?></h4>
            <h5 style="margin:0; margin-top:-20px;">โดย <?=$creator?></h5>
            <p><?=$desc?></p>
            <p><? if(isset($url_fb) && $url_fb!='') { ?><a href="<?=$url_fb?>">Facebook</a> <? } if(isset($url_web) && $url_web!=''){?><a href="<?=$url_web?>">Website</a><? } ?></p>
            <h5><?=$copyright?></h5>
            
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

