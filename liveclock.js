var myfont_face = "Arial";
var myfont_size = "50";
var myfont_color = "white";	
var mywidth = 80;
var old = "";

if (document.getElementById) { 
	document.write('<span id="LiveClockIE" style="width:'+mywidth+'px;"></span>'); 
}

function show_clock() {	
	var Digital = new Date();
	var hours = Digital.getHours();
	var minutes = Digital.getMinutes();
	if (minutes <= 9) { 
		minutes = "0"+minutes; 
	}		

	myclock = '';
	myclock += '<font style="color:'+myfont_color+'; font-family:'+myfont_face+'; font-size:'+myfont_size+'pt;">';
	myclock += hours+':'+minutes+' ';
	myclock += '</font>';	
	
	if (document.getElementById) {
		document.getElementById("LiveClockIE").innerHTML = myclock;
	}
	setTimeout("show_clock()",1000);
}