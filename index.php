<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UW Counter Demo</title>
<link rel="stylesheet" type="text/css" href="css/uw_fc.css">
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
</head>
<body>
<div id="container" class="content clearfix">
    <div class="toprightcontainer">
        <div class="uw_text">TEST</div>
    <div class="uw_clock_border">
        <div id="counter">				
            <div id="shading">&nbsp;</div>
        </div>
        <div id="numbers"></div>
     </div>		
    </div>   
</div> 
<script type="text/javascript" src="js/C3counter.js"></script>
<script type="text/javascript">
var countdown=0;

// Default options 
var enddate='07/28/2013'; //Event Ending
var rightnow = '<?php echo strtotime("now")*1000; ?>'; //server-side init

if (rightnow==""){rightnow=0};

var d2 = new Date(enddate);
var eventtime = d2.getTime(); 

if (eventtime<rightnow) {
	var countdown=0;
}
else
{
	var countdown=(eventtime-rightnow)/1000;
}

var countdowntext='Ends<br/>Soon!';

if (countdown<1){
	countdowntext='';
}else if (countdown<86400){
	countdowntext='Ends<br/>Today!';
}else if (countdown<172800){
	countdowntext='Ends<br/>Tomorrow!';
}else if (countdown<604800){
	countdowntext='Ends<br/>This Week!';
}else if(countdown<1209600){
	countdowntext='Ends<br/>in Two Weeks!';}
	
$('div.uw_text').html(countdowntext);

C3Counter("counter", { startTime :countdown },rightnow);
</script>
</body>
</html>