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
            <h2>Welcome to the secret api <img class="emote" src="/img/emotes/bttv-54fb961b01abde735115de01.png" /></h2>
<table class="table">
<thead>
  <tr>
    <th>path</th>
    <th>decription</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td><code>GET /bot/api/user/{username}</code></td>
    <td>info of a user</td>
  </tr>
  <tr>
    <td><code>GET /bot/api/top/{item}</code><br />
    <code>GET /bot/api/top/{item}/count</code></td>
    <td>top 50 per item</td>
  </tr>
  <tr>
    <td><code>GET /bot/api/recipes</code></td>
    <td>recipes</td>
  </tr>
  <tr>
    <td><code>GET /bot/api/list/items</code></td>
    <td>list of the names of all available items</td>
  </tr>
</tbody>
</table>

        </div>
    </div>
    <script type="text/javascript" src="/bot/script.js"></script>
    <script>
        addHeaderItem("Api", "api")
selectHeaderItem("Api")

    </script>
</body>
</html>
