<!DOCTYPE html>
<html>
<head>
    <style>
        table,
        th,td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,td {
            padding: 20px;
        }

        th {
            text-align: left;
        }

        .td1 {
            text-align: center;
        }

        .td2 {
            text-align: right;
        }
    </style>
</head>

<body>
    <form method="post" action="ratingconn.php">
        <table style="width:100%">
            <caption>
                <th colspan="7"> Department of CSE
                    School of Engineering and Technology
                    CHRIS(Deemed to be University)
                    <!-- <img src = "img\christ.jpg" style = "width : 500px; length: 500px"> -->
                    <!-- <img src="img\christ.jpg" style = "width : 300px; height: 100px"> -->
                </th>
            </caption>

            <tr>
                <th>STUDENT DETAILS</th>
                <th>
                    NAME:<input type="text" name="name" placeholder="Name"> <br>
                    REG NO:<input type="text" name="reg_no" placeholder="Reg_no:123456"> <br>
                    CLASS AND SECTION:<input type="text" name="class_section" placeholder="Eg: 1BTCSA"> <br>
                </th>
                <th class="td1" colspan="5">RATING</th>
            </tr>
            <tr>
                <td>Q.NO</td>
                <td>QUESTION</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Class participation</td>
                <td><input type="radio" name="class_participation" id="class_participation_1" value="1"></td>
                <td><input type="radio" name="class_participation" id="class_participation_2" value="2"></td>
                <td><input type="radio" name="class_participation" id="class_participation_3" value="3"></td>
                <td><input type="radio" name="class_participation" id="class_participation_4" value="4"></td>
                <td><input type="radio" name="class_participation" id="class_participation_5" value="5"></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Attendance</td>
                <td><input type="radio" name="Attendance" id="Attendance_1" value="1"></td>
                <td><input type="radio" name="Attendance" id="Attendance_2" value="2"></td>
                <td><input type="radio" name="Attendance" id="Attendance_3" value="3"></td>
                <td><input type="radio" name="Attendance" id="Attendance_4" value="4"></td>
                <td><input type="radio" name="Attendance" id="Attendance_5" value="5"></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Results</td>
                <td><input type="radio" name="Results" id="Results_1" value="1"></td>
                <td><input type="radio" name="Results" id="Results_2" value="2"></td>
                <td><input type="radio" name="Results" id="Results_3" value="3"></td>
                <td><input type="radio" name="Results" id="Results_4" value="4"></td>
                <td><input type="radio" name="Results" id="Results_5" value="5"></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Co curricular</td>
                <td><input type="radio" name="Co_curricular" id="co_curricular_1" value="1"></td>
                <td><input type="radio" name="Co_curricular" id="co_curricular_2" value="2"></td>
                <td><input type="radio" name="Co_curricular" id="co_curricular_3" value="3"></td>
                <td><input type="radio" name="Co_curricular" id="co_curricular_4" value="4"></td>
                <td><input type="radio" name="Co_curricular" id="co_curricular_5" value="5"></td>
            </tr>
            <tr>
                <td>5</td>
                <td> Extra curricular </td>
                <td><input type="radio" name="Extra_curricular" id="Extra_curricular_1" value="1"></td>
                <td><input type="radio" name="Extra_curricular" id="Extra_curricular_2" value="2"></td>
                <td><input type="radio" name="Extra_curricular" id="Extra_curricular_3" value="3"></td>
                <td><input type="radio" name="Extra_curricular" id="Extra_curricular_4" value="4"></td>
                <td><input type="radio" name="Extra_curricular" id="Extra_curricular_5" value="5"></td>

            </tr>
            <tr>
                <td>6</td>
                <td>Innovation</td>

                <td><input type="radio" name="innovation" id="innovation_1" value="1"></td>
                <td><input type="radio" name="innovation" id="innovation_2" value="2"></td>
                <td><input type="radio" name="innovation" id="innovation_3" value="3"></td>
                <td><input type="radio" name="innovation" id="innovation_4" value="4"></td>
                <td><input type="radio" name="innovation" id="innovation_5" value="5"></td>

            </tr>
            <tr>
                <td>7</td>
                <td>Personality</td>
                <td><input type="radio" name="personality" id="personality_1" value="1"></td>
                <td><input type="radio" name="personality" id="personality_2" value="2"></td>
                <td><input type="radio" name="personality" id="personality_3" value="3"></td>
                <td><input type="radio" name="personality" id="personality_4" value="4"></td>
                <td><input type="radio" name="personality" id="personality_5" value="5"></td>
            </tr>
            <tr>
                <td>8</td>
                <td>Overall</td>
                <td><input type="radio" name="overall" id="overall_1" value="1"></td>
                <td><input type="radio" name="overall" id="overall_2" value="2"></td>
                <td><input type="radio" name="overall" id="overall_3" value="3"></td>
                <td><input type="radio" name="overall" id="overall_4" value="4"></td>
                <td><input type="radio" name="overall" id="overall_5" value="5"></td>
            </tr>
            <br>
            <tr>
        <td colspan="7">
            <input type="submit" name="submit" value="Submit">
        </td>
    </tr>
	
	<div class="navigation-buttons">
  <a href="index.php" class="back-button">Back</a>
</div>
    </table>
    <br>
</form>
</body>

</html>