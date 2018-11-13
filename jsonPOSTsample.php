

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
        obj = JSON.parse(this.responseText);
        for (x in obj) {
            txt += obj[x].first_name + "<br>";
        }
        document.getElementById("demo").innerHTML = txt;
    }
};
xmlhttp.open("POST", "api.php", true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send("x=" + dbParam);

</script>

</body>
</html>
