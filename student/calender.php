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
<form method="post" action="calenderconn.php">
<table>
	<tr>
		<th colspan="10">OVERALL MENTORING REPORT</th>
	</tr>
	<tr>
    <th>SI no.</th>
    <th>Reg no.</th>
    <th>Name</th>
    <th>Date1</th>
    <th>Date2</th>
    <th>Date3 </th>
    <th>Date4</th>
    <th>Date5</th>
    <th>Date6</th>
	</tr>
	<tr>
		<td>1</td>
		<td><input type="text" name="reg_no_1" placeholder="reg no."></td>
		<td><input type="text" name="name_1" placeholder="name"></td>
		<td><input type="text" name="Date1_1" placeholder="Date 1"></td>
		<td><input type="text" name="Date2_1" placeholder="Date 2"></td>
		<td><input type="text" name="Date3_1" placeholder="Date 3"></td>
		<td><input type="text" name="Date4_1" placeholder="Date 4"></td>
        <td><input type="text" name="Date5_1" placeholder="Date 5"></td>
        <td><input type="text" name="Date6_1" placeholder="Date 6"></td>
	</tr>
	<tr>
		<td>2</td>
		<td><input type="text" name="reg_no_2" placeholder="reg no."></td>
		<td><input type="text" name="name_2" placeholder="name"></td>
		<td><input type="text" name="Date1_2" placeholder="Date 1"></td>
		<td><input type="text" name="Date2_2" placeholder="Date 2"></td>
		<td><input type="text" name="Date3_2" placeholder="Date 3"></td>
		<td><input type="text" name="Date4_2" placeholder="Date 4"></td>
        <td><input type="text" name="Date5_2" placeholder="Date 5"></td>
        <td><input type="text" name="Date6_2" placeholder="Date 6"></td>
	</tr>
	<tr>
		<td>3</td>
		<td><input type="text" name="reg_no_3" placeholder="reg no."></td>
		<td><input type="text" name="name_3" placeholder="name"></td>
		<td><input type="text" name="Date1_3" placeholder="Date 1"></td>
		<td><input type="text" name="Date2_3" placeholder="Date 2"></td>
		<td><input type="text" name="Date3_3" placeholder="Date 3"></td>
		<td><input type="text" name="Date4_3" placeholder="Date 4"></td>
        <td><input type="text" name="Date5_3" placeholder="Date 5"></td>
        <td><input type="text" name="Date6_3" placeholder="Date 6"></td>
	</tr>
	<tr>
		<td>4</td>
		<td><input type="text" name="reg_no_4" placeholder="reg no."></td>
		<td><input type="text" name="name_4" placeholder="name"></td>
		<td><input type="text" name="Date1_4" placeholder="Date 1"></td>
		<td><input type="text" name="Date2_4" placeholder="Date 2"></td>
		<td><input type="text" name="Date3_4" placeholder="Date 3"></td>
		<td><input type="text" name="Date4_4" placeholder="Date 4"></td>
        <td><input type="text" name="Date5_4" placeholder="Date 5"></td>
        <td><input type="text" name="Date6_4" placeholder="Date 6"></td>
	</tr>
	<tr>
		<td>5</td>
		<td><input type="text" name="reg_no_5" placeholder="reg no."></td>
		<td><input type="text" name="name_5" placeholder="name"></td>
		<td><input type="text" name="Date1_5" placeholder="Date 1"></td>
		<td><input type="text" name="Date2_5" placeholder="Date 2"></td>
		<td><input type="text" name="Date3_5" placeholder="Date 3"></td>
		<td><input type="text" name="Date4_5" placeholder="Date 4"></td>
        <td><input type="text" name="Date5_5" placeholder="Date 5"></td>
        <td><input type="text" name="Date6_5" placeholder="Date 6"></td>
	</tr>
	<tr>
		<td>6</td>
		<td><input type="text" name="reg_no_6" placeholder="reg no."></td>
		<td><input type="text" name="name_6" placeholder="name"></td>
		<td><input type="text" name="Date1_6" placeholder="Date 1"></td>
		<td><input type="text" name="Date2_6" placeholder="Date 2"></td>
		<td><input type="text" name="Date3_6" placeholder="Date 3"></td>
		<td><input type="text" name="Date4_6" placeholder="Date 4"></td>
        <td><input type="text" name="Date5_6" placeholder="Date 5"></td>
        <td><input type="text" name="Date6_6" placeholder="Date 6"></td>
	</tr>
	<tr>
		<td>7</td>
		<td><input type="text" name="reg_no_7" placeholder="reg no."></td>
		<td><input type="text" name="name_7" placeholder="name"></td>
		<td><input type="text" name="Date1_7" placeholder="Date 1"></td>
		<td><input type="text" name="Date2_7" placeholder="Date 2"></td>
		<td><input type="text" name="Date3_7" placeholder="Date 3"></td>
		<td><input type="text" name="Date4_7" placeholder="Date 4"></td>
        <td><input type="text" name="Date5_7" placeholder="Date 5"></td>
        <td><input type="text" name="Date6_7" placeholder="Date 6"></td>
	</tr>
	<tr>
		<td>8</td>
		<td><input type="text" name="reg_no_8" placeholder="reg no."></td>
		<td><input type="text" name="name_8" placeholder="name"></td>
		<td><input type="text" name="Date1_8" placeholder="Date 1"></td>
		<td><input type="text" name="Date2_8" placeholder="Date 2"></td>
		<td><input type="text" name="Date3_8" placeholder="Date 3"></td>
		<td><input type="text" name="Date4_8" placeholder="Date 4"></td>
        <td><input type="text" name="Date5_8" placeholder="Date 5"></td>
        <td><input type="text" name="Date6_8" placeholder="Date 6"></td>
	</tr>
	<tr>
		<td>9</td>
		<td><input type="text" name="reg_no_9" placeholder="reg no."></td>
		<td><input type="text" name="name_9" placeholder="name"></td>
		<td><input type="text" name="Date1_9" placeholder="Date 1"></td>
		<td><input type="text" name="Date2_9" placeholder="Date 2"></td>
		<td><input type="text" name="Date3_9" placeholder="Date 3"></td>
		<td><input type="text" name="Date4_9" placeholder="Date 4"></td>
        <td><input type="text" name="Date5_9" placeholder="Date 5"></td>
        <td><input type="text" name="Date6_9" placeholder="Date 6"></td>
	</tr>
	<tr>
		<td>10</td>
		<td><input type="text" name="reg_no_10" placeholder="reg no."></td>
		<td><input type="text" name="name_10" placeholder="name"></td>
		<td><input type="text" name="Date10" placeholder="Date 1"></td>
		<td><input type="text" name="Date2_10" placeholder="Date 2"></td>
		<td><input type="text" name="Date3_10" placeholder="Date 3"></td>
		<td><input type="text" name="Date4_10" placeholder="Date 4"></td>
        <td><input type="text" name="Date5_10" placeholder="Date 5"></td>
        <td><input type="text" name="Date6_10" placeholder="Date 6"></td>
	</tr>

	<tr>
        <td colspan="10">
            <input type="submit" name="submit" value="Submit">
        </td>
    </tr>
	
	<div class="navigation-buttons">
  <a href="nav.php" class="back-button">Back</a>
  <a href="Report form.php" class="next-button">Next</a>
</div>
</table>
</body>
</html>

