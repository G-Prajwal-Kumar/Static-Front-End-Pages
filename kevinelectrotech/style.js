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