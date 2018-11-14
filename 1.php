<?php 



?>

<!DOCTYPE html>
<html>
<body>

<h2>Create JSON string from a JavaScript array.</h2>

<p id="demo"></p>

<script>

obj = { "table":"tbl_members", "first_name":"i" };
dbParam = JSON.stringify(obj);
xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("demo").innerHTML = this.responseText;
    }
};
//xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.open("POST", "2.php?x=" + dbParam, true);
//xmlhttp.open("GET", "2.php?x=" + dbParam, true);
xmlhttp.send();

</script>

</body>
</html>
