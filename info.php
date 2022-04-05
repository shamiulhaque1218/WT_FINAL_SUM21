<html>
    <body>
    <div id="doner">

<button type="button" onclick="loadDoc()">Doner List</button>
</div>

<script>
function loadDoc() {
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("doner").innerHTML =
this.responseText;
}
};
xhttp.open("GET", "Doner/allDoner.php", true);
xhttp.send();
 }
</script>
    </body>
</html>