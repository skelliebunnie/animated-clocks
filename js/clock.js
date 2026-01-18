let clockContainer = document.querySelector("#clock");
let dateContainer = document.querySelector("#date");

let clockInterval = setInterval(function() {
	clockTimer();
}, 1000);

function clockTimer() {
	let d = new Date();
	clockContainer.innerHTML = d.toLocaleTimeString([], {hour: '2-digit', minute: '2-digit'});
	
	let dayNames = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"];
	let monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
	
	let weekday = dayNames[d.getDay()];
	let dt = d.getDate();
	let mt = monthNames[d.getMonth()];
	let yr = d.getFullYear();

	
	dateContainer.innerHTML = `${weekday} • ${mt} ${dt}, ${yr}`;
}