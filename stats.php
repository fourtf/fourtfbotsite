<html>
<head>
    <title>nice bot bro</title>
    <link href="/bot/skyblue.min.css" rel="stylesheet" />
    <link href="/bot/style.css" rel="stylesheet" />
    <meta name="viewport" content="width=400" />
</head>
<body onresize="resize()" onload="resize()">
    <div id="header">
        <div id="header-content">
            <a href="/bot"><div class="header-item"><img src="/img/destructoid.png" style="vertical-align:top;height:2em;margin-bottom:-2em;z-index:100"/>&nbsp;</div></a>
            <a href="/bot/commands"><div class="header-item">Commands</div></a>
            <a href="/bot/stats"><div class="header-item">Stats</div></a>
            <a href="/bot/recipes"><div class="header-item">Recipes</div></a>
            <a href="/bot/user"><div class="header-item">User</div></a>
            <a href="/bot/top"><div class="header-item">Top</div></a>
        </div>
    </div>
    <div id="content">
        <div id="inner-content">
            <h2>Top Command-Uses</h2>
<!--<h3 id="name"></h3>-->
<div id="items" />
<br />

        </div>
    </div>
    <script type="text/javascript" src="/bot/script.js"></script>
    <script>
        selectHeaderItem("Stats")

var error = <?php

$fp = fsockopen("127.0.0.1", 5200, $errno, $errstr, 10);

if (!$fp)
{
	echo "$errstr ($errno)<br />\n";
}
else
{
	echo 'false; var data = ';
	
	fwrite($fp, "TOP commands 10");
	while (!feof($fp)) {
		echo fgets($fp, 128);
	}
	fclose($fp);
}?>

if (error) {
}
else {
	if (data.success) {
		if (data.data.length > 0)
		{
			var html = "<table class='table '>";
			html += "<thead><tr><th>#</th><th>command</th><th>uses</th></tr></thead><tbody>";
			for (var i = 0; i < data.data.length; i++)
			{
				html += "<tr><td>" + (i + 1) + "</td>"
				html += "<td>" + data.data[i][0] + "</td>"
				html += "<td>" + data.data[i][1] + "</td></tr>"
			}
			html += "</tbody></table>";
			id("items").innerHTML = html;
		}
	}
	else {
		id("name").innerText = "invalid id";
	}
}

    </script>
</body>
</html>
