

<!DOCTYPE html>
<html>
<body>

<h2>Create JSON string from a JavaScript array using POST.</h2>

<p id="demo"></p>

<script>

obj = { "table":"tbl_members", "first_name":"rol" };
//obj = { "table":"customers", "limit":10 };
dbParam = JSON.stringify(obj);
xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(this.responseText);
        for (x in myObj) {
            txt += myObj[x].first_name + "<br>";
        }
        document.getElementById("demo").innerHTML = txt;
    }
};
xmlhttp.open("POST", "api_post.php", true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send("x=" + dbParam);

</script>

</body>
</html>
