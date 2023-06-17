<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="questionnaire.css">
    <title>QUESTIONNAIRE</title>
</head>
<body>
    <div class="main">
        <div class="questionnaire">
            <h2>Mandatory questionnaire</h2>
            <form method="post" action="questionnaireconn.php">
                <label for="fname">First name :</label>
                <br>
                <input type="text" name="fname" id="fname" placeholder="Enter your first name">
                <br><br>
                <label for="lname">Last name :</label>
                <br>
                <input type="text" name="lname" id="lname" placeholder="Enter your last name here">
                <br><br>
                <label for="regno">Register number :</label>
                <br>
                <input type="number" name="regno" id="regno" placeholder="Register number">
                <br><br>
                <label for="email">Email :</label>
                <br>
                <input type="email" name="email" id="email" placeholder="Enter your valid email">
                <br><br>
                <label for="class_progression">Class progression :</label>
                <br><br>
                &nbsp;&nbsp;&nbsp;
                <input type="radio" name="class_progression" id="class_progression1" value="1">
                &nbsp;&nbsp;
                <span id="1">1</span>
                &nbsp;&nbsp;
                <input type="radio" name="class_progression" id="class_progression2" value="2">
                &nbsp;&nbsp;
                <span id="2">2</span>
                &nbsp;&nbsp;
                <input type="radio" name="class_progression" id="class_progression3" value="3">
                &nbsp;&nbsp;
                <span id="3">3</span>
                &nbsp;&nbsp;
                <input type="radio" name="class_progression" id="class_progression4" value="4">
                &nbsp;&nbsp;
                <span id="4">4</span>
                &nbsp;&nbsp;
                <input type="radio" name="class_progression" id="class_progression5" value="5">
                &nbsp;&nbsp;
                <span id="5">5</span>
                &nbsp;&nbsp;

                <br><br>
                <label for="Peer_collaboration">Peer collaboration :</label>
                <br><br>
                &nbsp;&nbsp;&nbsp;
                <input type="radio" name="Peer_collaboration" id="Peer_collaboration1" value="1">
                &nbsp;&nbsp;
                <span id="1">1</span>
                &nbsp;&nbsp;
                <input type="radio" name="Peer_collaboration" id="Peer_collaboration2" value="2">
                &nbsp;&nbsp;
                <span id="2">2</span>
                &nbsp;&nbsp;
                <input type="radio" name="Peer_collaboration" id="Peer_collaboration3" value="3">
                &nbsp;&nbsp;
                <span id="3">3</span>
                &nbsp;&nbsp;
                <input type="radio" name="Peer_collaboration" id="Peer_collaboration4" value="4">
                &nbsp;&nbsp;
                <span id="4">4</span>
                &nbsp;&nbsp;
                <input type="radio" name="Peer_collaboration" id="Peer_collaboration5" value="5">
                &nbsp;&nbsp;
                <span id="5">5</span>
                &nbsp;&nbsp;
                <br><br>

                <label for="Subject 1">Subject 1 :</label>
                <br><br>
                &nbsp;&nbsp;&nbsp;
                <input type="radio" name="Subject_1" id="Subject_1_1" value="1">
                &nbsp;&nbsp;
                <span id="1">1</span>
                &nbsp;&nbsp;
                <input type="radio" name="Subject_1" id="Subject_1_2" value="2">
                &nbsp;&nbsp;
                <span id="2">2</span>
                &nbsp;&nbsp;
                <input type="radio" name="Subject_1" id="Subject_1_3" value="3">
                &nbsp;&nbsp;
                <span id="3">3</span>
                &nbsp;&nbsp;
                <input type="radio" name="Subject_1" id="Subject_1_4" value="4">
                &nbsp;&nbsp;
                <span id="4">4</span>
                &nbsp;&nbsp;
                <input type="radio" name="Subject_1" id="Subject_1_5" value="5">
                &nbsp;&nbsp;
                <span id="5">5</span>
                &nbsp;&nbsp;

                <br><br>

                <label for="Subject 2">Subject 2 :</label>
                <br><br>
                &nbsp;&nbsp;&nbsp;
                <input type="radio" name="Subject_2" id="Subject_2_1" value="1">
                &nbsp;&nbsp;
                <span id="1">1</span>
                &nbsp;&nbsp;
                <input type="radio" name="Subject_2" id="Subject_2_2" value="2">
                &nbsp;&nbsp;
                <span id="2">2</span>
                &nbsp;&nbsp;
                <input type="radio" name="Subject_2" id="Subject_2_3" value="3">
                &nbsp;&nbsp;
                <span id="3">3</span>
                &nbsp;&nbsp;
                <input type="radio" name="Subject_2" id="Subject_2_4" value="4">
                &nbsp;&nbsp;
                <span id="4">4</span>
                &nbsp;&nbsp;
                <input type="radio" name="Subject_2" id="Subject_2_4" value="5">
                &nbsp;&nbsp;
                <span id="5">5</span>
                &nbsp;&nbsp;
                <br><br>

                <label for="Subject 3">Subject 3 :</label>
                <br><br>
                &nbsp;&nbsp;&nbsp;
                <input type="radio" name="Subject_3" id="Subject_3_1" value="1">
                &nbsp;&nbsp;
                <span id="1">1</span>
                &nbsp;&nbsp;
                <input type="radio" name="Subject_3" id="Subject_3_2" value="2">
                &nbsp;&nbsp;
                <span id="2">2</span>
                &nbsp;&nbsp;
                <input type="radio" name="Subject_3" id="Subject_3_3" value="3">
                &nbsp;&nbsp;
                <span id="3">3</span>
                &nbsp;&nbsp;
                <input type="radio" name="Subject_3" id="Subject_3_4" value="4">
                &nbsp;&nbsp;
                <span id="4">4</span>
                &nbsp;&nbsp;
                <input type="radio" name="Subject_3" id="Subject_3_5" value="5">
                &nbsp;&nbsp;
                <span id="5">5</span>
                &nbsp;&nbsp;
                <br><br>

                <label for="Subject 4">Subject 4 :</label>
                <br><br>
                &nbsp;&nbsp;&nbsp;
                <input type="radio" name="Subject_4" id="Subject_4_1" value="1">
                &nbsp;&nbsp;
                <span id="1">1</span>
                &nbsp;&nbsp;
                <input type="radio" name="Subject_4" id="Subject_4_2" value="2">
                &nbsp;&nbsp;
                <span id="2">2</span>
                &nbsp;&nbsp;
                <input type="radio" name="Subject_4" id="Subject_4_3" value="3">
                &nbsp;&nbsp;
                <span id="3">3</span>
                &nbsp;&nbsp;
                <input type="radio" name="Subject_4" id="Subject_4_4" value="4">
                &nbsp;&nbsp;
                <span id="4">4</span>
                &nbsp;&nbsp;
                <input type="radio" name="Subject_4" id="Subject_4_5" value="5">
                &nbsp;&nbsp;
                <span id="5">5</span>
                &nbsp;&nbsp;
                <br><br>

                <label for="Subject 5 ">Subject 5 :</label>
                <br><br>
                &nbsp;&nbsp;&nbsp;
                <input type="radio" name="Subject_5" id="Subject_5_1" value="1">
                &nbsp;&nbsp;
                <span id="1">1</span>
                &nbsp;&nbsp;
                <input type="radio" name="Subject_5" id="Subject_5_2" value="2">
                &nbsp;&nbsp;
                <span id="2">2</span>
                &nbsp;&nbsp;
                <input type="radio" name="Subject_5" id="Subject_5_3" value="3">
                &nbsp;&nbsp;
                <span id="3">3</span>
                &nbsp;&nbsp;
                <input type="radio" name="Subject_5" id="Subject_5_4" value="4">
                &nbsp;&nbsp;
                <span id="4">4</span>
                &nbsp;&nbsp;
                <input type="radio" name="Subject_5" id="Subject_5_5" value="5">
                &nbsp;&nbsp;
                <span id="5">5</span>
                &nbsp;&nbsp;
                <br><br><br>

                <label for="Subject 6 ">Subject 6 :</label>
                <br><br>
                &nbsp;&nbsp;&nbsp;
                <input type="radio" name="Subject_6" id="Subject_6_1" value="1">
                &nbsp;&nbsp;
                <span id="1">1</span>
                &nbsp;&nbsp;
                <input type="radio" name="Subject_6" id="Subject_6_2" value="2">
                &nbsp;&nbsp;
                <span id="2">2</span>
                &nbsp;&nbsp;
                <input type="radio" name="Subject_6" id="Subject_6_3" value="3">
                &nbsp;&nbsp;
                <span id="3">3</span>
                &nbsp;&nbsp;
                <input type="radio" name="Subject_6" id="Subject_6_4" value="4">
                &nbsp;&nbsp;
                <span id="4">4</span>
                &nbsp;&nbsp;
                <input type="radio" name="Subject_6" id="Subject_6_5" value="5">
                &nbsp;&nbsp;
                <span id="5">5</span>
                &nbsp;&nbsp;
                <br><br><br>
                
                
                <tr>
                <td colspan="10">
            <input type="submit" name="submit" value="Submit">
        </td>
    </tr>
	
	<div class="navigation-buttons">
  <a href="nav.php" class="back-button">Back</a>
  <a href="overall report.php" class="next-button">Next</a>
</div>




            </form>

        </div>
    </div>

</body>

</html>