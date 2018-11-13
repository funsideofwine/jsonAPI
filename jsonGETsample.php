<!DOCTYPE html>
<html>
<body>

<h2>Create JSON string from a JavaScript array.</h2>

<p id="demo"></p>

<script>

obj = { "table":"tbl_members", "first_name":"rol" };
dbParam = JSON.stringify(obj);
xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("demo").innerHTML = this.responseText;
    }
};
xmlhttp.open("GET", "api_get.php?x=" + dbParam, true);
xmlhttp.send();

</script>

</body>
</html>
