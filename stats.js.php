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
