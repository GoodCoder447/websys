// Parker Slote
// 661387065

// Make it so program loads main onload, but will not load main after the initial opening.
// Had a problem where I had onload, and was changing the doc, and calling main again. Infinite loop
window.onload = function () {
  if (!window.opener) {
    main();
  }
};

// Main function
function main() {
	window.onload = null;
	var root = document.documentElement;

	var firstWrite = root.tagName + "<br/>";

	// Part 1
	var infoElement = document.getElementById("info");
	infoElement.innerHTML = getChild(document, 0);
	// Part 3
	var node = document.createElement("DIV");
	var textnode = document.createTextNode(part3Text);
	node.appendChild(textnode);
	document.body.appendChild(node);
	window.alert("yes");

	// PART 3
	var divs = document.getElementsByTagName("div");
	window.alert(divs[0].tagName);
	for(i = 0; i < divs.length; i++) {
		divs[i].addEventListener("mouseover", function() {
			this.style.backgroundColor = "#00ccff";
			this.style.paddingLeft = '10px';
		});
		divs[i].addEventListener("mouseout", function() {
			this.style.backgroundColor = "white";
			this.style.paddingLeft = '0px';
		});
	}
}


//Recursively goes through DOM and returns the info.
function getChild(element, count) {
	var dashes = "-".repeat(count);

	var write;
	if (count == 0) {
		element.addEventListener("click", function() {alerter(element.documentElement.tagName)});
		write = element.documentElement.tagName+= "<br/>";
		write += getChild(element.head, 1);
		write += getChild(element.body, 1);
		return write;
	}
	write = dashes+element.tagName + "<br/>";
	element.addEventListener("click", function() {alerter(element.tagName)});

	var kids = element.children;
	for(var i = 0; i < kids.length; i++) {
		write += getChild(kids[i], count+1);
	}
	return write;
}


// Alerts for part 2
function alerter(elementName) {
	alert(elementName);
}


// Text for part 3
var part3Text = "So there were 3 friends trapped on the desert.... \
They found a lamp that has a geni in it the geni said:I will give you \
1 wish each the first guy wished to be home same with the second one \
the third man's wish is \"I\'m lonely I wish my 2 friends were here\""


