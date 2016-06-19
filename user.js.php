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
		window.document.title = data.data.name + " - nice bot bro";
		//var seconds = (Date.now() / 1000 | 0) - (data.timestamp / 1000 | 0)
		//if (seconds > 0)
		//  id("name").innerText += " (" + seconds + ") seconds ago";
		
		id("points").innerText = data.data.points
		id("calories").innerText = data.data.calories
		id("flags").innerText = data.data.flags
		id("messageCount").innerText = data.data.messageCount
		id("characterCount").innerText = data.data.characterCount
		id("gachiGASM").innerText = data.data.gachiGASM
		
		if (data.data.items.length > 0)
		{
			var html = "<table class='table'>";
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
