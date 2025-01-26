<?php
// $mysqli = new mysqli("servername", "username", "password", "dbname");
// if ($mysqli->connect_error) {
//     exit('Could not connect');
// }

// koneksi ke database
$mysqli = new mysqli("localhost", "root", "", "ajaxdb");
if ($mysqli->connect_error) {
    exit('Could not connect: ' . $mysqli->connect_error);
}

$sql = "SELECT customerid, companyname, contactname, address, city, postalcode, country
FROM customers WHERE customerid = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cid, $cname, $name, $adr, $city, $pcode, $country);
$stmt->fetch();
$stmt->close();

// table
echo "<table>";
echo "<tr>";
echo "<th>CustomerID</th>";
echo "<th>CompanyName</th>";
echo "<th>ContactName</th>";
echo "<th>Address</th>";
echo "<th>City</th>";
echo "<th>PostalCode</th>";
echo "<th>Country</th>";
echo "</tr>";

echo "<tr>";
echo "<td>" . $cid . "</td>";
echo "<td>" . $cname . "</td>";
echo "<td>" . $name . "</td>";
echo "<td>" . $adr . "</td>";
echo "<td>" . $city . "</td>";
echo "<td>" . $pcode . "</td>";
echo "<td>" . $country . "</td>";
echo "</tr>";
echo "</table>";
