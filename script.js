function id(x) { return document.getElementById(x) }

var headerContent = id("header-content");

function selectHeaderItem(x)
{
    for (var i = 0; i < headerContent.children.length; i++) {
        if (headerContent.children[i].firstChild.innerText == x) {
            headerContent.children[i].firstChild.className += " selected-header-item";
            break;
        }
    }
}

function addHeaderItem(x, url)
{
    headerContent.innerHTML += "<a href='/bot/"+url+"'><div class='header-item'>"+x+"</div></a>"
}
