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
            <h2>Available Commands</h2>
&lt;arguments&gt; are required and (arguments) are optional.<br /><br />

<table class="table ">
	<thead>
	<tr>
		<th>command</th>
		<th>description</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>!pointz &lt;user&gt;</td>
		<td>Whispers you the amount of points you/they have.</td>
	</tr>
	<tr>
		<td>!userpointz &lt;user&gt;</td>
		<td>Writes the amount of points you/they have in chat.</td>
	</tr>
	<tr>
		<td>!roulete &lt;count&gt; (item)</td>
		<td>Roulette points or items. (50:50)</td>
	</tr>
	<tr>
		<td>!buy</td>
		<td>Shows all the items in the shop.</td>
	</tr>
	<tr>
		<td>!buy &lt;count&gt; &lt;item&gt;</td>
		<td>Buy items for points.</td>
	</tr>
	<tr>
		<td>!eat &lt;count&gt; &lt;item&gt;</td>
		<td>Eat edible items and gain calories.</td>
	</tr>
	<tr>
		<td>!calories</td>
		<td>Check the amount of calories you have.</td>
	</tr>
	<tr>
		<td>!diet</td>
		<td>Roulette your calories. (66:33)</td>
	</tr>
	<tr>
		<td>!give &lt;user&gt; &lt;count&gt; &lt;item&gt;</td>
		<td>Give another user's items.</td>
	</tr>
	<tr>
		<td>!throw &lt;item&gt; at &lt;user&gt;</td>
		<td>Throw an item at a user.</td>
	</tr>
	<tr>
		<td>!fight &lt;user&gt; &lt;count&gt; (item)</td>
		<td>Duel a user for points or items.</td>
	</tr>
	<tr>
		<td>!trade (count) &lt;item&gt; for (count) &lt;item&gt;</td>
		<td>Open a trade that other users can join. Trade multiple items by using "and".</td>
	</tr>
	<tr>
		<td>!top &lt;item&gt;</td>
		<td>Writes the top 3 in chat.</td>
	</tr>
	<tr>
		<td>!vape (flavor)</td>
		<td>Vape in chat. You need a vape and liquid from the shop to vape.</td>
	</tr>
	<tr>
		<td>!whip &lt;user&gt;</td>
		<td>Whip someone. You need a whip from the !blackmarket to whip someone.</td>
	</tr>
	<tr>
		<td>!inspect &lt;item&gt;</td>
		<td>Writes the description of an item in chat. You need to own the item in order to inspect it.</td>
	</tr>
	<tr>
		<td>!messages (user)</td>
		<td>Check how many messages and character a user has written in chat.</td>
	</tr>
	</tbody>
</table>

        </div>
    </div>
    <script type="text/javascript" src="/bot/script.js"></script>
    <script>
        selectHeaderItem("Commands")

    </script>
</body>
</html>
