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
            <h2>View stats by username</h2>
<div class="row">
    <div class="col md-8"><input autofocus id="userinput" type="text" class="form-control" placeholder="username" /></div>
    <div class="col md-2"><a id="userlink" href="#"><div class="btn" id="viewbutton">View</div></a><br /></div>
</div>
<br />
<br />
<h3 id="name"></h3>
<div class="row">
    <div class="col md-6"><table id="stats" style="display:none" class="table table-bordered">
    <thead><th>stat</th><th>value</th></thead>
    <tbody>
        <tr><td>points</td><td id="points"></td></tr>
        <tr><td>calories</td><td id="calories"></td></tr>
        <tr><td>flags</td><td id="flags"></td></tr>
        <tr><td>messageCount</td><td id="messageCount"></td></tr>
        <tr><td>characterCount</td><td id="characterCount"></td></tr>
        <tr><td>gachiGASM</td><td id="gachiGASM"></td></tr>
    </tbody>
    </table></div>
    <div class="col md-6" id="items" />
</div><br />

        </div>
    </div>
    <script type="text/javascript" src="/bot/script.js"></script>
    <script>
        selectHeaderItem("User")

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
	fwrite($fp, "USER ".$_GET['handler']);
	while (!feof($fp)) {
	   echo fgets($fp, 128);
	}
	fclose($fp);
}
}
else
{
echo "true";
}
?>

if (error) {
}
else {
	if (data.success) {
		id("stats").style.display = ""
		id("name").innerText = data.data.name
		id("points").innerText = data.data.points
		id("calories").innerText = data.data.calories
		id("flags").innerText = data.data.flags
		id("messageCount").innerText = data.data.messageCount
		id("characterCount").innerText = data.data.characterCount
		id("gachiGASM").innerText = data.data.gachiGASM
		
		if (data.data.items.length > 0)
		{
			var html = "<table class='table table-bordered'>";
			html += "<thead><tr><th>item</th><th>amount</th></tr></thead><tbody>";
			for (var i = 0; i < data.data.items.length; i++)
			{
				html += "<tr><td>" + data.data.items[i][0] + "</td>"
				html += "<td>" + data.data.items[i][1] + "</td>"
			}
			html += "</tbody></table>";
			id("items").innerHTML = html;
		}
	}
	else {
		id("name").innerText = "invalid id";
	}
}

id("userinput").onchange = changed;

function changed() { id('userlink').href = '/bot/user/' + id('userinput').value; }

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