
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"><head>

</head>

<!-- UW_CLOCK -->
 
<link rel="stylesheet" href="flipclock/flipclock.css">
<style>
body {		
position:absolute;	
	background-color:#000;
	text-align:center;
	margin:0 auto;
	top:0px;left:0px;right:0px;bottom:0px;
}


.container {
	display:block;
	width:1000px;
	height:736px;
	
	position:relative;
	margin-left: auto;
	margin-right: auto;
	background-image:url(mp_mock2.jpg);
	
}
.toprightcontainer
{
	float:right;
	margin: 5px 45px 0 0;
	height:90px;
	width:600px;

	

}
.uw_text{
	vertical-align:top;
	display:inline-block;
	width:360px;
	height:68px;
	padding-right:20px;

	font-family:Verdana, Geneva, sans-serif;
	font-size:36px;
	font-weight:bold;
	letter-spacing:-.8px;
	line-height:34px;
	text-align:right;
	vertical-align:bottom;


}
.uw_clock_border{
	vertical-align:top;
	display:inline-block;
	background-color:#CCC;
	width:210px;
	height:62px;
	padding:1px;
	border-radius: 4px;
	margin: 20px 0 0 0;
	
}

.flip-clock-wrapper{
	margin:5px;
	text-align:center;

}

.flip-clock-wrapper ul {
	width: 20px;
	height: 38px;
	line-height:38px;
	margin:1px;
	border-radius: 3px;
	
}

.flip-clock-wrapper ul li a div div.inn{
	color:#f1f1f1;
	border-radius: 3px;
}

.flip-clock-label
{
	font:10px "Helvetica Neue",Helvetica,sans-serif;
	font-weight:bold;
	text-transform:uppercase;
	color:#333 !important
}

.top,.bottom
{
	display:none;
}
.flip-clock-divider .flip-clock-label{
	left:-45px;
	top:39px;
}

.flip-clock-divider
{
	width: 7px;
}
.flip-clock-wrapper ul li a div div.inn
{
	font-size:32px;
}
.flip-clock-wrapper ul li a div.up:after
{
	top:17px;
	height:2px;
}

</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="flipclock/prefixfree.min.js"></script>
<script src="flipclock/flipclock.min.js"></script>
</head>
<body>
<div class="container">
    <div class="toprightcontainer">
    	<div class="uw_text" ></div>
        <div class="uw_clock_border">
        <div id="uw_clock" ></div>
        </div>
    </div>
</div>

<script type="text/javascript">
	var enddate='07/28/2013'; //Event Ending
	var countdownini=0;
	//var d1 = new Date(); //client-side init
	//var n1 = d1.getTime();
	var n1 = <?=strtotime("now")*1000?>; //server-side init

	
	var d2 = new Date(enddate);
	var n2 = d2.getTime(); 
	
	if (n2<n1) {
	var countdownini=0;
	}
	else
	{
	var countdownini=(n2-n1)/1000;
	}
	
	//n2=n1+4000; //test 4 seconds
	var countdowntext='Ends<br/>Soon!';
	
	if (countdownini<86400){
		countdowntext='Ends<br/>Today!';
	}else if (countdownini<172800){
		countdowntext='Ends<br/>Tomorrow!';
	}else if (countdownini<604800){
		countdowntext='Ends<br/>This Week!';
	}else if(countdownini<1209600){
		countdowntext='Ends<br/>in Two Weeks!';}
		
	$('div.uw_text').html(countdowntext);
	
	
	alert(countdownini);
	var clock = $('#uw_clock').FlipClock(countdownini, 
	{
		clockFace: 'DailyCounter',
		countdown: true
		//on event stop callback
	});
	
	$('#uw_clock').FlipClock( 
    {}); 


</script>

<!-- END UW_CLOCK -->
	</body>
</html>
