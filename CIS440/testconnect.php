<?php 

//Connect to MySQL database
include('local-connect.php');

//Create a loop to return back tables from the database
$data = mysql_query("SELECT * FROM events") or die(mysql_error());
Print "<table border cellpadding=3>"; 
while($info = mysql_fetch_array( $data )) { Print "<tr>"; 
Print "<th>EventName:</th> <td>".$info['EventName'] . "</td> "; 
Print "<th>EventDate:</th> <td>".$info['EventDate'] . " </td>"; } Print "</table>"; 
Print "<th>EventTime:</th> <td>".$info['EventTime'] . "</td> "; 
Print "<th>EventLocation:</th> <td>".$info['EventLocation'] . " </td>"; } Print "</table>";
Print "<th>EventDescription:</th> <td>".$info['EventDescription'] . "</td> "; 
Print "<th>EventCost:</th> <td>".$info['EventCost'] . " </td>"; } Print "</table>"; 
Print "<th>EventSponsor:</th> <td>".$info['EventSponsor'] . "</td> "; 
Print "<th>EventSchool:</th> <td>".$info['EventSchool'] . " </td>"; } Print "</table>";
Print "<th>EventImg:</th> <td>".$info['EventImg'] . " </td>"; } Print "</table>";
Print "<th>EventEmail:</th> <td>".$info['EventEmail'] . "</td> "; 
Print "<th>EventPhoneNumber:</th> <td>".$info['EventPhoneNumber'] . " </td>"; } Print "</table>"; 
Print "<th>EventWebsiteAddress:</th> <td>".$info['EventWebsiteAddress'] . "</td> "; 
Print "<th>EventCategory:</th> <td>".$info['EventCategory'] . " </td></tr>"; } Print "</table>";    

// Close the database connection
mysql_close($dbc);

?>