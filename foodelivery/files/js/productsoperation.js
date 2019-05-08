function ShowPopup(x)
{
	document.getElementById("popup").innerHTML=x;
	document.getElementById("popup").style.display="block";
	setTimeout('HidePopup()', 3000);
}
function PopupForNewProduct()
{
	
	ShowPopup("Продукт создан!");
}

function PopupForNewUser()
{
	
	ShowPopup("Регистрация прошла успешно!");
}