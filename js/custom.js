var loginid =  "loginbuttom";
changeWelcom(loginid);

function changeWelcom(loginid) {
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function () {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById(loginid).innerHTML=this.responseText;
		}
	}
		
	  xmlhttp.open("POST", "../custom.php", true);
	  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	  xmlhttp.send();
	}