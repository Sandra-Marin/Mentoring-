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
    <form method="post" action="analysisconn.php">
        <table style="width:100%">
            <caption>
                <th colspan="7"> Department of CSE
                    School of Engineering and Technology
                    CHRIS(Deemed to be University)
                    <!-- <img src = "img\christ.jpg" style = "width : 500px; length: 500px"> -->
                    <img src="img\christ.jpg" style = "width : 300px; height: 100px">
                </th>
            </caption>

            <tr>
                <th>Q.No</th>
                <th>
                <label for="QUESTION">QUESTION</label>   
                </th>
                <th class="td1">Jun - Sep</th>
                <th class="td1">Oct - Jan</th>
                <th class="td1">Feb - May</th>
                
            </tr>
            
            <tr>
                <td>1</td>
                <td>Class participation</td>
                <td><input type="text" name="class_participation" id="class_participation_1" value=""></td>
                <td><input type="text" name="class_participation" id="class_participation_2" value=""></td>
                <td><input type="text" name="class_participation" id="class_participation_3" value=""></td>
                
            </tr>
            <tr>
                <td>2</td>
                <td>Attendance</td>
                <td><input type="text" name="Attendance" id="Attendance_1" value=""></td>
                <td><input type="text" name="Attendance" id="Attendance_2" value=""></td>
                <td><input type="text" name="Attendance" id="Attendance_3" value=""></td>
                
            </tr>
            <tr>
                <td>3</td>
                <td>Results</td>
                <td><input type="text" name="Results" id="Results_1" value=""></td>
                <td><input type="text" name="Results" id="Results_2" value=""></td>
                <td><input type="text" name="Results" id="Results_3" value=""></td>
                
               </tr>
            <tr>
                <td>4</td>
                <td>Co curricular</td>
                <td><input type="text" name="Co_curricular" id="co_curricular_1" value=""></td>
                <td><input type="text" name="Co_curricular" id="co_curricular_2" value=""></td>
                <td><input type="text" name="Co_curricular" id="co_curricular_3" value=""></td>
               
                </tr>
            <tr>
                <td>5</td>
                <td> Extra curricular </td>
                <td><input type="text" name="Extra_curricular" id="Extra_curricular_1" value=""></td>
                <td><input type="text" name="Extra_curricular" id="Extra_curricular_2" value=""></td>
                <td><input type="text" name="Extra_curricular" id="Extra_curricular_3" value=""></td>
                
            </tr>
            <tr>
                <td>6</td>
                <td>Innovation</td>

                <td><input type="text" name="Innovation" id="Innovation_1" value=""></td>
                <td><input type="text" name="Innovation" id="Innovation_2" value=""></td>
                <td><input type="text" name="Innovation" id="Innovation_3" value=""></td>
                
            </tr>
            <tr>
                <td>7</td>
                <td>Personality</td>
                <td><input type="text" name="Personality" id="Personality_1" value=""></td>
                <td><input type="text" name="Personality" id="Personality_2" value=""></td>
                <td><input type="text" name="Personality" id="Personality_3" value=""></td>
                
                </tr>
            <tr>
                <td>8</td>
                <td>Overall</td>
                <td><input type="text" name="Overall" id="Overall_1" value=""></td>
                <td><input type="text" name="Overall" id="Overall_2" value=""></td>
                <td><input type="text" name="Overall" id="Overall_3" value=""></td>
                
               
               
                </tr>
           
				<tr>
        <td colspan="7">
            <input type="submit" name="submit" value="Submit">
        </td>
    </tr>
</form>
<div class="navigation-buttons">
    <a href="nav.php" class="back-button">Back</a>
    <a href="Report form.php" class="next-button">Next</a>
</div>
    </table>
    
</form>
</body>

</html>