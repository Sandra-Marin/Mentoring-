<!DOCTYPE html>
<html>
<head>
	<title>Student Report Form</title>
	<style>
		table {
		  width: 100%;
		  border-collapse: collapse;
		}
		th {
	  text-align: center;
	  padding: 8px;
	  border-bottom: 1px solid #ddd;
	}

	td {
	  text-align: left;
	  padding: 8px;
	  border-bottom: 1px solid #ddd;
	}

	button[type="submit"] {
	  padding: 12px 20px;
	  border: none;
	  border-radius: 4px;
	  cursor: pointer;
	  float: right;
	}

	@media screen and (max-width: 600px) {
		th, td {
			display: block;
		}
		th {
			text-align: right;
		}
	}
</style>
</head>
<body>
<form method="post" action="overallreportconn.php">
<table>
	<tr>
		<th colspan="7">OVERALL REPORT</th>
	</tr>
	<tr>
		<th>SI no.</th>
		<th>REG NO.</th>
		<th>NAME</th>
		<th>REMEDIAL CLASS</th>
		<th>CERTIFICATE</th>
		<th>PUBLICATIONS</th>
		<th>SPORTS/NCC</th>
	</tr>
	<tr>
		<td>1</td>
		<td><input type="text" name="reg_no_1" placeholder="reg no."></td>
		<td><input type="text" name="name_1" placeholder="name"></td>
		<td><input type="text" name="remedial_class_1" placeholder="remedial_class"></td>
		<td><input type="text" name="certificate_1" placeholder="certificate"></td>
		<td><input type="text" name="publications_1" placeholder="publications"></td>
		<td><input type="text" name="sports_ncc_1" placeholder="sports_ncc"></td>
	</tr>
	<tr>
		<td>2</td>
		<td><input type="text" name="reg_no_2" placeholder="reg no."></td>
		<td><input type="text" name="name_2" placeholder="name"></td>
		<td><input type="text" name="remedial_class_2" placeholder="remedial_class"></td>
		<td><input type="text" name="certificate_2" placeholder="certificate"></td>
		<td><input type="text" name="publications_2" placeholder="publications"></td>
		<td><input type="text" name="sports_ncc_2" placeholder="sports_ncc"></td>
	</tr>
	<tr>
		<td>3</td>
		<td><input type="text" name="reg_no_3" placeholder="reg no."></td>
		<td><input type="text" name="name_3" placeholder="name"></td>
		<td><input type="text" name="remedial_class_3" placeholder="remedial_class"></td>
		<td><input type="text" name="certificate_3" placeholder="certificate"></td>
		<td><input type="text" name="publications_3" placeholder="publications"></td>
		<td><input type="text" name="sports_ncc_3" placeholder="sports_ncc"></td>
	</tr>
	<tr>
		<td>4</td>
		<td><input type="text" name="reg_no_4" placeholder="reg no."></td>
		<td><input type="text" name="name_4" placeholder="name"></td>
		<td><input type="text" name="remedial_class_4" placeholder="remedial_class"></td>
		<td><input type="text" name="certificate_4" placeholder="certificate"></td>
		<td><input type="text" name="publications_4" placeholder="publications"></td>
		<td><input type="text" name="sports_ncc_4" placeholder="sports_ncc"></td>
	</tr>
	<tr>
		<td>5</td>
		<td><input type="text" name="reg_no_5" placeholder="reg no."></td>
		<td><input type="text" name="name_5" placeholder="name"></td>
		<td><input type="text" name="remedial_class_5" placeholder="remedial_class"></td>
		<td><input type="text" name="certificate_5" placeholder="certificate"></td>
		<td><input type="text" name="publications_5" placeholder="publications"></td>
		<td><input type="text" name="sports_ncc_5" placeholder="sports_ncc"></td>
	</tr>
	<tr>
		<td>6</td>
		<td><input type="text" name="reg_no_6" placeholder="reg no."></td>
		<td><input type="text" name="name_6" placeholder="name"></td>
		<td><input type="text" name="remedial_class_6" placeholder="remedial_class"></td>
		<td><input type="text" name="certificate_6" placeholder="certificate"></td>
		<td><input type="text" name="publications_6" placeholder="publications"></td>
		<td><input type="text" name="sports_ncc_6" placeholder="sports_ncc"></td>
	</tr>
	<tr>
		<td>7</td>
		<td><input type="text" name="reg_no_7" placeholder="reg no."></td>
		<td><input type="text" name="name_7" placeholder="name"></td>
		<td><input type="text" name="remedial_class_7" placeholder="remedial_class"></td>
		<td><input type="text" name="certificate_7" placeholder="certificate"></td>
		<td><input type="text" name="publications_7" placeholder="publications"></td>
		<td><input type="text" name="sports_ncc_7" placeholder="sports_ncc"></td>
	</tr>
	<tr>
		<td>8</td>
		<td><input type="text" name="reg_no_8" placeholder="reg no."></td>
		<td><input type="text" name="name_8" placeholder="name"></td>
		<td><input type="text" name="remedial_class_8" placeholder="remedial_class"></td>
		<td><input type="text" name="certificate_8" placeholder="certificate"></td>
		<td><input type="text" name="publications_8" placeholder="publications"></td>
		<td><input type="text" name="sports_ncc_8" placeholder="sports_ncc"></td>
	</tr>
	<tr>
		<td>9</td>
		<td><input type="text" name="reg_no_9" placeholder="reg no."></td>
		<td><input type="text" name="name_9" placeholder="name"></td>
		<td><input type="text" name="remedial_class_9" placeholder="remedial_class"></td>
		<td><input type="text" name="certificate_9" placeholder="certificate"></td>
		<td><input type="text" name="publications_9" placeholder="publications"></td>
		<td><input type="text" name="sports_ncc_9" placeholder="sports_ncc"></td>
	</tr>
	<tr>
		<td>10</td>
		<td><input type="text" name="reg_no_10" placeholder="reg no."></td>
		<td><input type="text" name="name_10" placeholder="name"></td>
		<td><input type="text" name="remedial_class_10" placeholder="remedial_class"></td>
		<td><input type="text" name="certificate_10" placeholder="certificate"></td>
		<td><input type="text" name="publications_10" placeholder="publications"></td>
		<td><input type="text" name="sports_ncc_10" placeholder="sports_ncc"></td>
	</tr>

	<tr>
        <td colspan="10">
            <input type="submit" name="submit" value="Submit">
        </td>
    </tr>
	
	<div class="navigation-buttons">
  <a href="nav.php" class="back-button">Back</a>
  <a href="calender.php" class="next-button">Next</a>
</div>
</table>
</body>
</html>

