var countdown=0;
//var d1 = new Date(); //client-side init
//var rightnow = d1.getTime();
//var enddate='07/29/2013'; //Event Date

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

//n2=n1+4000; //test 4 seconds
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


//alert(countdown);
var clock = $('#uw_clock').FlipClock(countdown, 
{
	clockFace: 'DailyCounter',
	countdown: true
});
