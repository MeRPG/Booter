<?php
$conn = new mysqli(HOST, USER, PASSWORD, DATABASE);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE IF NOT EXISTS counter (counter INT(20) NOT NULL );";

if ($conn->query($sql) === TRUE) {
    $conn->query("INSERT INTO counter VALUES (0);");
}

$conn->query("UPDATE counter SET counter = counter + 1");

$count = $conn->query("SELECT counter FROM counter")->fetch_array();
?>

<!Doctype html>
<html>
    <head>
        <title>Super Swaggy Booter</title>
        <link rel="stylesheet" type="text/css" href="booter.css" />
    </head>
    <body>
        <center id="bod">
            <header><h1>Super Swaggy Booter</h1></header>
            <br>
            <input class="text" id="nomt" placeholder="IP or Hostname">
            <br>
            <input class="button" type="submit" value="Boot!" id="submit" onclick="document.getElementById('boot').style.visibility = 'visible'; document.getElementById('nom').innerHTML = document.getElementById('nomt').value;">
            <br>
            <table>
                <tr>
                    <td>
                        <img id="boot" src="http://phantomroms.com/wp-content/uploads/2014/11/boot-kickkick-boot---free-fashion-icons-txzp0oqy.png" style="visibility:hidden">
                    </td>
                    <td>
                        <p id="nom">
                    </td>
                </tr>
            </table>
        </center>
        <footer>
            <ul>
                <li id="count">Visits: <?=$count[0] ?> <span>NOTE: Not unique viewers</span></li>
                <li><a href="https://github.com/MeRPG/Booter/">Source</a></li>
                <li id="cred">By Jaxon Brown <span>+ dippoakabob</span></li>
            </ul>
        </footer>
        <script>
            document.getElementById("submit").onclick = function () {
                document.getElementById("boot").style.visibility = "visible";
                var bootIt = document.getElementById("nomt").value;
                document.getElementById("nom").innerHTML = bootIt;
            }
        </script>
    </body>
</html>