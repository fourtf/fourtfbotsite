selectHeaderItem("Recipes")

var error = <?php
$fp = fsockopen("127.0.0.1", 5200, $errno, $errstr, 10);

if (!$fp)
{
        echo "$errstr ($errno)<br />\n";
}
else
{
        echo 'false; var data = ';
        fwrite($fp, "RECIPES");
        while (!feof($fp)) {
           echo fgets($fp, 128);
        }
        fclose($fp);
}
?>

if (error) {
        id("results").innerText = "internal error";
}
else {
        if (data.success) {
	        if (data.data.length > 0)
        	{
                	var html = "<table class='table'>";
                	html += "<thead><th>item</th><th>cost</th></thead>";
                	html += "<tbody"
                	for (var i = 0; i < data.data.length; i++)
               		{
                        	html += "<tr><td>" + data.data[i][0] + "</td>"
                        	html += "<td>" + data.data[i][1] + "</td></tr>"
                	}
                	html += "</tbody>"
                	html += "</table>";
                	id("results").innerHTML = html;
                }
        }
        else {
        	id("results").innerHTML = "internal error";
        }
}
