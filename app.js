let listItem = document.getElementById('list-item-input');

let addButton = document.getElementById('addButton');

addButton.addEventListener('click', function() {
	addItem(listItem.value);
}, false);

function addItem(task) {
	let taskItem = task;
	
	let htmlListItem = `<li class="list-group-item">${task} 
 					<button type="button" class="close" aria-label="Close">
  					<span aria-hidden="true">&times;</span>
					</button>
					</li>`
	let span = document.createElement("span");
	let spanText = document.createTextNode("\u00D7")
	span.appendChild(spanText);
	
	let button = document.createElement("button");
	button.className = "close";
	button.appendChild(span);
	
	let node = document.createElement("li");                 
	let textnode = document.createTextNode(taskItem);
	node.className = "list-group-item";
	node.appendChild(textnode);
	node.appendChild(button);
	
	
	
	document.getElementById("task-list").appendChild(node); 
};

