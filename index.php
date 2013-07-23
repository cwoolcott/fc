<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"><head>
<html>
<head>
<!-- UW_CLOCK -->
<link rel="stylesheet" href="flipclock/flipclock.css">
<link rel="stylesheet" href="flipclock/uw_fc.css">

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
var enddate='07/29/2013'; //Event Ending
var n1 = <?php echo strtotime("now")*1000; ?>; //server-side init
</script>

<script src="flipclock/uw_fc.js"></script>

<!-- END UW_CLOCK -->
	</body>
</html>
