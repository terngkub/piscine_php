function newToDo() {
	text = prompt("");
	if (text.length > 0) {
		var div = document.createElement("div");
		var textNode = document.createTextNode(text);
		div.appendChild(textNode);
		document.getElementById("ft_list").appendChild(div);
	}
}

window.onload = function() {

	
}
