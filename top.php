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
            <h2>Top Item-Owners</h2>
<div class="row">
    <div class="col md-8"><select autofocus id="userinput" type="text" class="form-control" placeholder="item"><option>pointz</option></select></div>
    <div class="col md-2"><a id="userlink" href="#"><div class="btn" id="viewbutton">View</div></a><br /></div>
</div>
<br />
<br />
<h3 id="name"></h3>
    <div id="items" />
<br />

        </div>
    </div>
    <script type="text/javascript" src="/bot/script.js"></script>
    <script>
        selectHeaderItem("Top")

var error = <?php

$fp = fsockopen("127.0.0.1", 5200, $errno, $errstr, 10);
$param = strtolower(isset($_GET['handler']) ? $_GET['handler'] : 'pointz');

if (!$fp)
{
	echo "$errstr ($errno)<br />\n";
}
else
{
	echo 'false; var data = ';
	
	fwrite($fp, "TOP ".$param);
	while (!feof($fp)) {
		echo fgets($fp, 128);
	}
	fclose($fp);
}

echo "; ";
$fp = fsockopen("127.0.0.1", 5200, $errno, $errstr, 10);

if (!$fp)
{
        echo "$errstr ($errno)<br />\n";
}
else
{
	echo 'var data2 = ';
	fwrite($fp, "list items");
	while (!feof($fp)) {
		echo fgets($fp, 128);
	}
	fclose($fp);
}
?>

if (error) {
}
else {
	if (data.success) {
		id("name").innerText = "<?php echo $param; ?>"
		window.document.title = "top <?php echo $param; ?> - nice bot bro";
		if (data.data.length > 0)
		{
			var html = "<table class='table'>";
			html += "<thead><tr><th>#</th><th>user</th><th>amount</th></tr></thead><tbody>";
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

if (data2.success)
{
	for (var i = 0; i < data2.data.length; i++)
	{
		id("userinput").innerHTML += "<option" + (data2.data[i] == "<?php echo $param; ?>" ? " selected" : "") + ">" + data2.data[i] + "</option>";			
	}
}

id("userinput").onchange = changed;

function changed() { id('userlink').href = '/bot/top/' + id('userinput').value; }

id("userinput").addEventListener("keydown", function(event) {
    if (event.which == 13) {
        changed();
	event.preventDefault();
        id("viewbutton").click();
    }
})

    </script>
</body>
</html>
