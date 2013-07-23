


var countdownini=0;
//var d1 = new Date(); //client-side init
//var n1 = d1.getTime();



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

if (countdownini<1){
	countdowntext='';
}else if (countdownini<86400){
	countdowntext='Ends<br/>Today!';
}else if (countdownini<172800){
	countdowntext='Ends<br/>Tomorrow!';
}else if (countdownini<604800){
	countdowntext='Ends<br/>This Week!';
}else if(countdownini<1209600){
	countdowntext='Ends<br/>in Two Weeks!';}
	
$('div.uw_text').html(countdowntext);


//alert(countdownini);
var clock = $('#uw_clock').FlipClock(countdownini, 
{
	clockFace: 'DailyCounter',
	countdown: true
});
