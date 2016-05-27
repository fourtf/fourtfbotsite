<html>
<head>
    <title>nice bot bro</title>
    <link href="/bot/skyblue.css" rel="stylesheet" />
    <link href="/bot/style.css" rel="stylesheet" />
    <meta name="viewport" content="width=400" />
</head>
<body>
    <div id="header">
        <div id="header-content" class="flex">
            <a href="/bot"><div class="header-item"><strong>Fourtf Bot</strong></div></a>
            <a href="/bot/recipes"><div class="header-item">Recipes</div></a>
            <a href="/bot/user"><div class="header-item">User</div></a>
            <a href="/bot/top"><div class="header-item">Top</div></a>
        </div>
    </div>
    <div id="content">
        <div id="inner-content">
            <h2>Top item owners</h2>
<div class="row">
    <div class="col md-8"><select autofocus id="userinput" type="text" class="form-control" placeholder="item"><option>pointz</option></select></div>
    <div class="col md-2"><a id="userlink" href="/bot/top/pointz"><div class="btn" id="viewbutton">View</div></a><br /></div>
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
if (!empty($_GET['handler']))
{
$fp = fsockopen("127.0.0.1", 5200, $errno, $errstr, 10);

if (!$fp)
{
	echo "$errstr ($errno)<br />\n";
}
else
{
	echo 'false; var data = ';
	fwrite($fp, "TOP ".$_GET['handler']);
	while (!feof($fp)) {
	   echo fgets($fp, 128);
	}
	fclose($fp);
}
}
else
{
echo "true;";
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
		id("name").innerText = "<?php echo $_GET['handler']; ?>"
		if (data.data.length > 0)
		{
			var html = "<table class='table table-bordered'>";
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
		id("userinput").innerHTML += "<option>" + data2.data[i] + "</option>"
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