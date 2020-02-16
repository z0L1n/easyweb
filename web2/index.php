<html>
<body>

<code><span style="color: #000000">

<br /><span style="color: #0000BB">&lt;?php
<br />show_source</span><span style="color: #007700">(</span><span style="color: #DD0000">"5.php"</span><span style="color: #007700">);
<br />include(</span><span style="color: #DD0000">"config.php"</span><span style="color: #007700">);
<br /></span><span style="color: #0000BB">$fl</span><span style="color: #007700">=@</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">'a'</span><span style="color: #007700">];
<br /></span><span style="color: #0000BB">$ag</span><span style="color: #007700">=@</span><span style="color: #0000BB">$_GET</span><span style="color: #007700">[</span><span style="color: #DD0000">'b'</span><span style="color: #007700">];
<br />if(</span><span style="color: #0000BB">$fl</span><span style="color: #007700">==</span><span style="color: #0000BB">0&nbsp;</span><span style="color: #007700">and&nbsp;</span><span style="color: #0000BB">$fl</span><span style="color: #007700">){
<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$flag1</span><span style="color: #007700">;
<br />}
<br />if(!</span><span style="color: #0000BB">strcmp</span><span style="color: #007700">(</span><span style="color: #DD0000">'flag'</span><span style="color: #007700">,</span><span style="color: #0000BB">$ag</span><span style="color: #007700">)){
<br />&nbsp;&nbsp;&nbsp;&nbsp;exit();
<br />}
<br />else&nbsp;if(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$ag</span><span style="color: #007700">)==</span><span style="color: #0000BB">3</span><span style="color: #007700">){
<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">$flag2</span><span style="color: #007700">;
<br />}
<br /></span><span style="color: #0000BB">?&gt;
<br /></span>
<br />
<br />﻿</span>
</code>
<?php
error_reporting(0);
include("config.php");
$fl=@$_GET['a'];
$ag=@$_GET['b'];
if($fl==0 and $fl){
    echo $flag1;
}
if(!strcmp('flag',$ag)){
    exit();
}
elseif(strlen($ag)==3){
    echo $flag2;
}
?>










</body>
</html>