var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {
  if ((xhttp.readyState = 4 && xhttp.status == 200)) xhttp.responseText;
};
xhttp.open("GET", "includes/dbConfig.php?action=is_logged_in", false);
xhttp.send();

//alert(xhttp.responseText);
if (xhttp.responseText == "")
  window.location.href = "http://localhost/pharmacy/register.php";

if (xhttp.responseText == "false")
  window.location.href = "http://localhost/pharmacy/index.php";
