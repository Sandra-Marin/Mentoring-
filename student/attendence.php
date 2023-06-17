
<!DOCTYPE html>
<html>
	<head>
		<style>
			table, th, td {
				border: 1px solid rgb(211, 211, 206);
			}
			table.center {
				margin-left: auto; 
				margin-right: auto;
			}
			.hide {
				display: none;
			}
			.show {
				display: block;
			}
		</style>
		<title>ATTENDANCE ANALYSIS</title>
	</head>
	
	<body>
	<form method="post" action="attconn.php">
			<div id="semester1" class="show">
				<fieldset>
					<legend>Semester 1</legend>
					<table border="1" style="text-align: center;" class="center">
						<caption>Attendance</caption>
						<thead>
							<tr>
								<th>Subject Names</th>
								<th>Subject 1</th>
								<th>Subject 2</th>
								<th>Subject 3</th>
								<th>Subject 4</th>
								<th>Subject 5</th>
								<th>Subject 6</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><label for="s1_percentage">Percentage</label></td>
								<td><input type="text" id="s1_subject1" name="s1_subject1" placeholder="Subject 1"></td>
								<td><input type="text" id="s1_subject2" name="s1_subject2" placeholder="Subject 2"></td>
								<td><input type="text" id="s1_subject3" name="s1_subject3" placeholder="Subject 3"></td>
								<td><input type="text" id="s1_subject4" name="s1_subject4" placeholder="Subject 4"></td>
								<td><input type="text" id="s1_subject5" name="s1_subject5" placeholder="Subject 5"></td>
								<td><input type="text" id="s1_subject6" name="s1_subject6" placeholder="Subject 6"></td>
							</tr>
							<!-- add more rows for other subjects -->
						</tbody>
					</table>
				</fieldset>
			</div>
			
			<div id="semester2" class="show">
				<fieldset>
					<legend>Semester 2</legend>
					<table border="1" style="text-align: center;" class="center">
						<caption>Attendance</caption>
						<thead>
							<tr>
								<th>Subject Names</th>
								<th>Subject 1</th>
								<th>Subject 2</th>
								<th>Subject 3</th>
								<th>Subject 4</th>
								<th>Subject 5</th>
								<th>Subject 6</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><label for="s2_percentage">Percentage</label></td>
								<td><input type="text" id="s2_subject1" name="s2_subject1" placeholder="Subject 1"></td>
								<td><input type="text" id="s2_subject2" name="s2_subject2" placeholder="Subject 2"></td>
								<td><input type="text" id="s2_subject3" name="s2_subject3" placeholder="Subject 3"></td>
								<td><input type="text" id="s2_subject4" name="s2_subject4" placeholder="Subject 4"></td>
								<td><input type="text" id="s2_subject5" name="s2_subject5" placeholder="Subject 5"></td>
								<td><input type="text" id="s2_subject6" name="s2_subject6" placeholder="Subject 6"></td>
							</tr>
							<!-- add more rows for other subjects -->
						</tbody>
					</table>
				</fieldset>
			</div>

			<div id="semester3" class="show">
				<fieldset>
					<legend>Semester 3</legend>
					<table border="1" style="text-align: center;" class="center">
						<caption>Attendance</caption>
						<thead>
							<tr>
								<th>Subject Names</th>
								<th>Subject 1</th>
								<th>Subject 2</th>
								<th>Subject 3</th>
								<th>Subject 4</th>
								<th>Subject 5</th>
								<th>Subject 6</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><label for="s3_percentage">Percentage</label></td>
								<td><input type="text" id="s3_subject1" name="s3_subject1" placeholder="Subject 1"></td>
								<td><input type="text" id="s3_subject2" name="s3_subject2" placeholder="Subject 2"></td>
								<td><input type="text" id="s3_subject3" name="s3_subject3" placeholder="Subject 3"></td>
								<td><input type="text" id="s3_subject4" name="s3_subject4" placeholder="Subject 4"></td>
								<td><input type="text" id="s3_subject5" name="s3_subject5" placeholder="Subject 5"></td>
								<td><input type="text" id="s3_subject6" name="s3_subject6" placeholder="Subject 6"></td>
							</tr>
							<!-- add more rows for other subjects -->
						</tbody>
					</table>
				</fieldset>
			</div>

			<div id="semester4" class="show">
				<fieldset>
					<legend>Semester 4</legend>
					<table border="1" style="text-align: center;" class="center">
						<caption>Attendance</caption>
						<thead>
							<tr>
								<th>Subject Names</th>
								<th>Subject 1</th>
								<th>Subject 2</th>
								<th>Subject 3</th>
								<th>Subject 4</th>
								<th>Subject 5</th>
								<th>Subject 6</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><label for="s4_percentage">Percentage</label></td>
								<td><input type="text" id="s4_subject1" name="s4_subject1" placeholder="Subject 1"></td>
								<td><input type="text" id="s4_subject2" name="s4_subject2" placeholder="Subject 2"></td>
								<td><input type="text" id="s4_subject3" name="s4_subject3" placeholder="Subject 3"></td>
								<td><input type="text" id="s4_subject4" name="s4_subject4" placeholder="Subject 4"></td>
								<td><input type="text" id="s4_subject5" name="s4_subject5" placeholder="Subject 5"></td>
								<td><input type="text" id="s4_subject6" name="s4_subject6" placeholder="Subject 6"></td>
							</tr>
							<!-- add more rows for other subjects -->
						</tbody>
					</table>
				</fieldset>
			</div>

			<div id="semester5" class="show">
				<fieldset>
					<legend>Semester 5</legend>
					<table border="1" style="text-align: center;" class="center">
						<caption>Attendance</caption>
						<thead>
							<tr>
								<th>Subject Names</th>
								<th>Subject 1</th>
								<th>Subject 2</th>
								<th>Subject 3</th>
								<th>Subject 4</th>
								<th>Subject 5</th>
								<th>Subject 6</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><label for="s5_percentage">Percentage</label></td>
								<td><input type="text" id="s5_subject1" name="s5_subject1" placeholder="Subject 1"></td>
								<td><input type="text" id="s5_subject2" name="s5_subject2" placeholder="Subject 2"></td>
								<td><input type="text" id="s5_subject3" name="s5_subject3" placeholder="Subject 3"></td>
								<td><input type="text" id="s5_subject4" name="s5_subject4" placeholder="Subject 4"></td>
								<td><input type="text" id="s5_subject5" name="s5_subject5" placeholder="Subject 5"></td>
								<td><input type="text" id="s5_subject6" name="s5_subject6" placeholder="Subject 6"></td>
							</tr>
							<!-- add more rows for other subjects -->
						</tbody>
					</table>
				</fieldset>
			</div>

			<div id="semester6" class="show">
				<fieldset>
					<legend>Semester 6</legend>
					<table border="1" style="text-align: center;" class="center">
						<caption>Attendance</caption>
						<thead>
							<tr>
								<th>Subject Names</th>
								<th>Subject 1</th>
								<th>Subject 2</th>
								<th>Subject 3</th>
								<th>Subject 4</th>
								<th>Subject 5</th>
								<th>Subject 6</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><label for="s6_percentage">Percentage</label></td>
								<td><input type="text" id="s6_subject1" name="s6_subject1" placeholder="Subject 1"></td>
								<td><input type="text" id="s6_subject2" name="s6_subject2" placeholder="Subject 2"></td>
								<td><input type="text" id="s6_subject3" name="s6_subject3" placeholder="Subject 3"></td>
								<td><input type="text" id="s6_subject4" name="s6_subject4" placeholder="Subject 4"></td>
								<td><input type="text" id="s6_subject5" name="s6_subject5" placeholder="Subject 5"></td>
								<td><input type="text" id="s6_subject6" name="s6_subject6" placeholder="Subject 6"></td>
							</tr>
							<!-- add more rows for other subjects -->
						</tbody>
					</table>
				</fieldset>
			</div>

			<div id="semester7" class="show">
				<fieldset>
					<legend>Semester 7</legend>
					<table border="1" style="text-align: center;" class="center">
						<caption>Attendance</caption>
						<thead>
							<tr>
								<th>Subject Names</th>
								<th>Subject 1</th>
								<th>Subject 2</th>
								<th>Subject 3</th>
								<th>Subject 4</th>
								<th>Subject 5</th>
								<th>Subject 6</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><label for="s7_percentage">Percentage</label></td>
								<td><input type="text" id="s7_subject1" name="s7_subject1" placeholder="Subject 1"></td>
								<td><input type="text" id="s7_subject2" name="s7_subject2" placeholder="Subject 2"></td>
								<td><input type="text" id="s7_subject3" name="s7_subject3" placeholder="Subject 3"></td>
								<td><input type="text" id="s7_subject4" name="s7_subject4" placeholder="Subject 4"></td>
								<td><input type="text" id="s7_subject5" name="s7_subject5" placeholder="Subject 5"></td>
								<td><input type="text" id="s7_subject6" name="s7_subject6" placeholder="Subject 6"></td>
							</tr>
							<!-- add more rows for other subjects -->
						</tbody>
					</table>
				</fieldset>
			</div>

			<div id="semester8" class="show">
				<fieldset>
					<legend>Semester 8</legend>
					<table border="1" style="text-align: center;" class="center">
						<caption>Attendance</caption>
						<thead>
							<tr>
								<th>Subject Names</th>
								<th>Subject 1</th>
								<th>Subject 2</th>
								<th>Subject 3</th>
								<th>Subject 4</th>
								<th>Subject 5</th>
								<th>Subject 6</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><label for="s8_percentage">Percentage</label></td>
								<td><input type="text" id="s8_subject1" name="s8_subject1" placeholder="Subject 1"></td>
								<td><input type="text" id="s8_subject2" name="s8_subject2" placeholder="Subject 2"></td>
								<td><input type="text" id="s8_subject3" name="s8_subject3" placeholder="Subject 3"></td>
								<td><input type="text" id="s8_subject4" name="s8_subject4" placeholder="Subject 4"></td>
								<td><input type="text" id="s8_subject5" name="s8_subject5" placeholder="Subject 5"></td>
								<td><input type="text" id="s8_subject6" name="s8_subject6" placeholder="Subject 6"></td>
							</tr>
							<!-- add more rows for other subjects -->
						</tbody>
					</table>
				</fieldset>
			</div>




			<tr>
        <td colspan="7">
            <input type="submit" name="submit" value="Submit">
        </td>
    </tr>
	
	<div class="navigation-buttons">
  <a href="nav.php" class="back-button">Back</a>
  <a href="result.php" class="next-button">Next</a>
</div>

		</form>
		
	</body>
</html>
