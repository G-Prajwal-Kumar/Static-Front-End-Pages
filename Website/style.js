var menuList = document.getElementById("links");

menuList.style.maxHeight = "0px";


function togglemenu(){
	if (menuList.style.maxHeight == "0px")
	{
		menuList.style.maxHeight = "170px";
	
	}
	else
	{
		menuList.style.maxHeight = "0px";
		
	}	
}

function toggle(btn){
	btn.classList.toggle("active");

	if (menuList.style.maxHeight == "0px")
	{
		menuList.style.maxHeight = "170px";
	
	}
	else
	{
		menuList.style.maxHeight = "0px";
		
	}
}