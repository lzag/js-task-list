let listItem = document.getElementById('list-item-input');

let addButton = document.getElementById('addButton');

addButton.addEventListener('click', function() {
	addItem(listItem.value);
}, false);

function addItem(task) {
	let taskItem = task;
	let node = document.createElement("li");                 
	let textnode = document.createTextNode(taskItem);
	node.className = "list-group-item";
	node.appendChild(textnode);                             
	document.getElementById("task-list").appendChild(node); 
};

