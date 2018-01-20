var ft_list = [];

function addList() {
	var text = prompt("");
	if (text.length > 0) {
		var div = document.createElement("div");
		var textNode = document.createTextNode(text);
		div.onclick = removeList;
		div.appendChild(textNode);
		document.getElementById("ft_list").appendChild(div);
		ft_list.push(text);
		setCookie("ft_list", JSON.stringify(ft_list), 7);
	}
}

function removeList() {
	var node = this.parentNode;
	var i = 0;
	while (node.childNodes.item(i) != this)
		i++;
	ft_list.splice(i, 1);
	setCookie("ft_list", JSON.stringify(ft_list), 7);
	this.parentNode.removeChild(this);
}

function setCookie(cname, cvalue, exdays) {
	var d = new Date();
	d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
	var expires = "expires=" + d.toUTCString();
	document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/;";
	var x = document.cookie;
}

function getCookie(cname) {
	var name = cname + "=";
	var decodeCookie = decodeURIComponent(document.cookie);
	var ca = decodeCookie.split(";");
	for (var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') {
			c = c.substring(1);
		}
		if (c.indexOf(name) == 0) {
			return c.substring(name.length, c.length);
		}
	}
	return "";
}

window.onload = function() {
	if (document.cookie.length != 0) {
		ft_list = JSON.parse(getCookie("ft_list"));
		ft_list.forEach(function(text) {
			var div = document.createElement("div");
			var textNode = document.createTextNode(text);
			div.onclick = removeList;
			div.appendChild(textNode);
			document.getElementById("ft_list").appendChild(div);
		});
	}
}
