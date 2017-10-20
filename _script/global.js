// global site javascript functions

// this function activates the current page in the nav bar
function currentPage(){ 
	var navbarElements = document.getElementById('navElements').children;
	var pageName = window.location.pathname;
			
	for(var i = 0; i < navbarElements.length; i++){
		// convert array element into string for search
		var searchString = navbarElements[i].id.toString();
		
		//correct for index as home page's filename
		if(pageName.search("index") > 0) {
			pagename = "home";
		}
		
		// compare pagename to navbar elements and make the current page "active"
		if(pageName.search(searchString) > 0){
			navbarElements[i].className += " active";
			break;
		}
	}
}


function createEventListeners(){
	currentPage(); // alters navbar to reflect current page
}

window.onload = function(){
	createEventListeners();
}