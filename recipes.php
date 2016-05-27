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
            <h2>Recipes available for crafting</h2>
<div id="results"></div>

        </div>
    </div>
    <script type="text/javascript" src="/bot/script.js"></script>
    <script>
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
                	var html = "<table class='table table-bordered'>";
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

    </script>
</body>
</html>