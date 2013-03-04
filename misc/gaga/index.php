<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lady Gaga o' Clock</title>
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<meta name = "viewport" content = "width = 800">
<!--[if IE]><script type="text/javascript" src="excanvas.js"></script><![endif]-->
<script type="text/javascript" src="coolclock.js"></script>
<script type="text/javascript" src="moreskins.js"></script>
<script type="text/javascript" src="colorfade.js"></script>

<script>
	function ColorLoopIn() 
	{
		fadeColor("title","#0000FF","#ACFF00",10,10,'b');

		setTimeout(ColorLoopOut,1000);
	}
	function ColorLoopOut() 
	{
		fadeColor("title","#ACFF00","#0000FF",10,10,'b');
		fadeColor("title","#0000FF","#ACFF00",10,10,'c');
		setTimeout(ColorLoopIn,1000);
	}
	
	function PickASong()
	{
		var SONGS = []
		SONGS[0] = "SONGS/lady_gaga-the_fame.mid.midi";
		SONGS[1] = "SONGS/lady_gaga-bad_romance.mid.midi";
		SONGS[2] = "SONGS/lady_gaga-dance_in_the_dark.mid.midi";
		SONGS[3] = "SONGS/lady_gaga-just_dance.mid.midi";
		SONGS[4] = "SONGS/lady_gaga-love_game.mid.midi";
		SONGS[5] = "SONGS/lady_gaga-monster.mid.midi";
		SONGS[6] = "SONGS/lady_gaga-paparazzi.mid.midi";
		SONGS[7] = "SONGS/lady_gaga-paper_gangster.mid.midi";
		SONGS[8] = "SONGS/lady_gaga-poker_face.mid.midi";
		SONGS[9] = "SONGS/lady_gaga-speechless.mid.midi";
		SONGS[10] = "SONGS/lady_gaga-telephone.mid.midi";
		
		var randomnumber=Math.floor(Math.random()*10)
		//
		document.getElementById("midi").innerHTML = "<embed src="+SONGS[randomnumber]+" hidden=\"true\" border=\"0\" width=\"0\" height=\"0\" autostart=\"true\" autoplay=\"true\" loop=\"false\" volume=\"100%\">";
	}
	
	function PickAPicture()
	{
		var PICS = []
		PICS[0] = "PICS/1.gif";
		PICS[1] = "PICS/2.gif";
		PICS[2] = "PICS/3.gif";
		PICS[3] = "PICS/4.gif";
		
		//
		var i = 0;
		while (i < PICS.length)
		{
			document.getElementById("picture").innerHTML = document.getElementById("picture").innerHTML + "<img width=\"740\" src="+PICS[i]+" /><br><br>";
		i = i + 1
		}
		
	}
	
		
	function init()
	{
		ColorLoopIn();
		CoolClock.findAndCreateClocks();
		PickASong();
		PickAPicture();
	}
	
	window.onload=init;
</script>

</head>
<body>

<div class="title" id="title">It's Lady Gaga o' Clock!</div>

<div id="content">
	<div id="midi"></div>
	<canvas id="c1" class="CoolClock:chunkySwissOnBlack:350"></canvas>
	<br><br>
	<div id="picture"></div>
</div>

<br><br>


<div id="content">It's STILL Lady Gaga o' Clock!</div>

<div style="clear:both;"></div>


<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-16326884-1");
pageTracker._trackPageview();
} catch(err) {}</script>

</body>
</html>