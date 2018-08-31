let listItem = document.getElementById('list-item-input');

document.getElementById('addButton').addEventListener('click', function() {
	addItem(listItem.value);
});

document.getElementById('task-list').addEventListener('click', removeItem
);

function removeItem(e) {
	if (e.target.innerHTML ===  '×' ) {
	e.target.parentElement.parentElement.remove();
	}
};


function addItem(task) {

	let span = document.createElement("span");
	span.appendChild(document.createTextNode("\u00D7"));
	
	let button = document.createElement("button");
	button.className = "close";
	button.appendChild(span);
	
	let node = document.createElement("li");
	node.className = "list-group-item";
	node.appendChild(document.createTextNode(task));
	node.appendChild(button);

	document.getElementById("task-list").appendChild(node); 
};

