var d = new Date();
var hh = d.getHours();
var mm = d.getMinutes();
var ss = d.getSeconds();

hh = 24-hh;
if(hh<10){
	hh = '0'+hh;
}
mm = 59-mm;
if(mm<10){
	mm = '0'+mm;
}
ss = 60-ss;
if(ss<10){
	ss = '0'+ss;
}
$(".timepp1").text(hh);
$(".timepp2").text(mm);
$(".timepp3").text(ss);
function time(){
	var d = new Date();
	var hh = d.getHours();
	var mm = d.getMinutes();
	var ss = d.getSeconds();
	hh = 23-hh;
	if(hh<10){
		hh = '0'+hh;
	}
	mm = 59-mm;
	if(mm<10){
		mm = '0'+mm;
	}
	ss = 60-ss;
	if(ss<10){
		ss = '0'+ss;
	}
	$(".timepp1").text(hh);
	$(".timepp2").text(mm);
	
	
	$(".timepp3").text(ss);
}
var times = setInterval('time()',1000);






