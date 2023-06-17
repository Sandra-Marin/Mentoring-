<!-- saved from url=(0033)file:///D:/downfold/webpage2.html -->
<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-xOD+QJhR7EJu+njyfTksGSU6f0U6P4g9ZjG6mFugx1aU0UTlSgPpOVRy3/+q3IeT" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" integrity="sha384-H7KRJ3iL3pceJ01wZ+PGwAa/8jHJiCvKgak9thG7te+8fA/nkptTSB5r5Q+7F1z8" crossorigin="anonymous">
    <title>Report form</title>
</head>

<body>
    <form method="post" action="report formconn.php">

    <h3>A) Information of the mentor</h3>
    Name:
    <input type="text" name="name" size="15" maxlength="30" placeholder="Name">
    <br><br>
    Period of mentoring:
    <input type="text" name="period_of_mentoring" size="15" maxlength="30" placeholder="Period of mentoring">
    <br><br><br>
    <h3>B) Information of the mentees</h3>
    Name:
    <input type="text" name="mentee_name" size="15" maxlength="30" placeholder="Name">
    <br><br>
    Programme:
    <input type="text" name="programme" size="15" maxlength="30" placeholder="Programme">
    <br><br>
    Class:
    <input type="text" name="class" size="15" maxlength="30" placeholder="Class">
    <br><br>
    Reg no.:
    <input type="number" name="reg_no" size="15" maxlength="30" placeholder="Reg no.">
    <br><br>
    
    <table>
        <thead>
            <tr>
                <th>S.No.</th>
                <th>Date</th>
                <th>Time</th>
                <th>Discussion</th>
                <th>Action/Suggestion</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <td><textarea id="sno" name="sno"></textarea></td>
        <td><textarea id="sdate" name="sdate"></textarea></td>
        <td><textarea id="stime" name="stime"></textarea></td>
        <td><textarea id="discussion" name="discussion"></textarea></td>
        <td><textarea id="action_suggestion" name="action_suggestion"></textarea></td>
            <tr>
                <td col_name="sno"></td>
                
            </tr>
                
            </tr>
        </tbody>
</table>
  <button type="submit" name="submit">Submit</button>
  <div class="navigation-buttons">
  <a href="nav.php" class="back-button">Back</a>
  <a href="questionnaire.php" class="next-button">Next</a>
</div>
</form>

</body>

</html>