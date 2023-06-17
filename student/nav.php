<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> -->
      <!-- <span class="navbar-toggler-icon"></span> -->
    <!-- </button> -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="nav.php">Faculty Details</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <!-- <li><a class="dropdown-item" href="nav.php">Faculty</a></li> -->
            <li><a class="dropdown-item" href="attendence.php">Attendance</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="Result.php">Result</a></li>
            <li><a class="dropdown-item" href="overall report.php">Overall Report</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="calender.php">Mentoring Calender</a></li>
            <li><hr class="dropdown-divider"></li>
            <!-- <li><a class="dropdown-item" href="studlist.html">StudentList</a></li> -->
            <li><a class="dropdown-item" href="Report form.php">Report Form</a></li>
            <li><a class="dropdown-item" href="questionnaire.php">Questionnaire</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="analysis.php">Co-Curricular Analysis</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../logout.php">Logout</a>
         
        </li>
      </ul>
      <!-- <form class="d-flex" role="search">
        <input type="text" placeholder="Search faculty.." onkeyup="myFunction()" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names only..." title="Type in a name">
      <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
    </div>
  </div>
</nav>

<!-- <div class="topnav">
<a class="active" href="nav.php">Faculty</a>
  <a class="active" href="attendence.html">Attendance</a>
  <a class="active" href="result.html">Result</a>
  <a class="active" href="overall report.html">Overall Report</a>
  <a class="active" href="style.html">Style</a>
  <a class="active" href="rating.html">Rating</a>
  <a class="active" href="studlist.html">StudentList</a>
  <a class="active" href="trialserv.html">Co-Curricular Analysis</a>
  <a class="active" href="Report form.html">Report Form</a>
  <a class="active" href="questionnaire.html">Questionnaire</a>
  <a> Welcome To Mentee Application </a>
</div> -->

<!-- <div style="padding-left:16px">
  <p style="color:tomato;">Please Click on the Respective Buttons to Enter the data</p>
  <p>Please Check your respective faculty details below</p>
</div> -->
<style>
#myTable{
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  
}

#myTable th, #myTable td {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

#myTable tr:nth-child(even) {
  background-color: #dddddd;
}

#myTable tr.header {
  background-color: rgba(140, 82, 0, 0.6);
}

</style>



<!-- <h2>FAULTY Details</h2> -->

<table id="myTable">
  
<tr class="header">
  <!-- <th>Sl.No</th> -->
    <th>Name</th>
    <th>E-Mail</th>
    <th>Department</th>
    <th>Location</th>
  </tr>
  <tr>
  <!-- <td> 1</td> -->
    <td>ADDAPALLI V N KRISHNA</td>
    <td>adapalli.krishna@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>43,THIRD Floor,BLOCK II </td>
  </tr>
  <tr>
  <!-- <td> 2</td> -->
    <td>AJIT DANTI</td>
    <td>ajit.danti@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>325/cabin 56,FIRST Floor,BLOCK III </td>
  </tr>
  <tr>
    <!-- <td>3 </td> -->
    <td>ALOK KUMAR PANI</td>
    <td>alok.kumar@christuniversity.in</td>
    <td>	COMPUTER SCIENCE AND ENGINEERING</td>
    <td>153,SECOND Floor,BLOCK V </td>
  </tr>
  <tr>
   <!-- <td>4</td> -->
   <td> ANOOP G L</td>
    <td>anoop.gl@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>220/15,FIRST Floor,BLOCK II </td>
  </tr>
  <tr>
    <!-- <td>5</td> -->
    <td>ARUL V </td>
    <td>arul.v@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>531/149,SECOND Floor,BLOCK V </td>
  </tr>
  <tr>
   <!-- <td>6</td> -->
   <td>ARUNA S K </td>
    <td>aruna.sk@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>160,SECOND Floor,BLOCK V </td>
  </tr>
  <tr>
   <!-- <td>7</td> -->
   <td>BABU KUMAR S</td>
    <td>babu.kumar@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>135,FIRST Floor,BLOCK V </td>
  </tr>
  <tr>
   <!-- <td>8</td> -->
   <td>	BALACHANDRAN K</td>
    <td>balachandran.k@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>248,THIRD Floor,BLOCK II </td>
  </tr>
  <tr>
   <!-- <td>9</td> -->
   <td>		BALAMURUGAN M</td>
    <td>balamurugan.m@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>40,THIRD Floor,BLOCK II </td>
  </tr>
  <tr>
  <!-- <td>10</td> -->
   <td> BEJOY B J</td>
    <td>bejoy.bj@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>83,THIRD Floor,BLOCK III </td>
  </tr>
  <tr>
  <!-- <td>11</td> -->
   <td> BENNY THOMAS</td>
    <td>frbenny@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>Director,GROUND Floor,BLOCK I </td>
  </tr>
  <tr>
  <!-- <td>12</td> -->
   <td> BIJEESH T V</td>
    <td>bijeesh.tv@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>250/39,THIRD Floor,BLOCK II </td>
  </tr>
  <tr>
  <!-- <td>13</td> -->
   <td> BOPPURU RUDRA PRATHAP</td>
    <td>boppuru.prathap@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>325/45,GROUND Floor,BLOCK III </td>
  </tr>
  <tr>
  <!-- <td>14</td> -->
   <td> CHERUKURI RAVINDRANATH CHOWDARY</td>
    <td>cherukuri.ravindranath@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>1/1/IIIC,FOURTH Floor,BLOCK V </td>
  </tr>
  <tr>
  <!-- <td>15</td> -->
   <td> CHINTHAKUNTA MANJUNATH</td>
    <td>chinthakunta.manjunath@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>208/3/kengeri,FIRST Floor,BLOCK II </td>
  </tr>
  <tr>
  <!-- <td>16</td> -->
   <td> DANIEL D</td>
    <td>daniel.d@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>31,THIRD Floor,BLOCK II </td>
  </tr>
  <tr>
  <!-- <td>17</td> -->
   <td> DEBARKA MUKHOPADHYAY</td>
    <td>debarka.mukhopadhyay@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>516/139,FIRST Floor,BLOCK V </td>
  </tr>
  <tr>
  <!-- <td>18</td> -->
   <td> DEBASISH MUKHERJEE</td>
    <td>debasish.mukherjee@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>531,SECOND Floor,BLOCK V </td>
  </tr>
  <tr>
  <!-- <td>19</td> -->
   <td> DEEPA YOGISH</td>
    <td>deepa.yogish@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>145,SECOND Floor,BLOCK V</td>
</tr>
<tr>
  <!-- <td>20</td> -->
   <td> DIANA JEBA JINGLE I</td>
    <td>diana.jebajingle@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>325,FIRST Floor,BLOCK III</td>
  </tr>
  <tr>
  <!-- <td>21</td> -->
   <td> DIVYA VETRIVEERAN</td>
    <td>divya.vetriveeran@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>250/34,THIRD Floor,BLOCK II</td>
  </tr>
  <tr>
  <!-- <td>22</td> -->
   <td> GANESH KUMAR R</td>
    <td>ganesh.kumar@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>57,FIRST Floor,BLOCK III</td>
  </tr>
  <tr>
  <!-- <td>23</td> -->
   <td> GNANA PRAKASI O S</td>
    <td>gnana.prakasi@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>220/11,FIRST Floor,BLOCK II</td>
  </tr>
  <tr>
  <!-- <td>24</td> -->
   <td> GOKULAPRIYA R	</td>
    <td>r.gokulapriya@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>13,FIRST Floor,BLOCK II</td>
  </tr>
  <tr>
  <!-- <td>25</td> -->
   <td> GURUDAS V R</td>
    <td>gurudas.vr@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>38,THIRD Floor,BLOCK II</td>
  </tr>
  <tr>
  <!-- <td>26</td> -->
   <td> JAYAPANDIAN N</td>
    <td>jayapandian.n@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>220/12,FIRST Floor,BLOCK II</td>
  </tr>
  <tr>
  <!-- <td>27</td> -->
   <td> JENEFA J</td>
    <td>jenefa.j@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>37,THIRD Floor,BLOCK II</td>
  </tr>
  <tr>
  <!-- <td>28</td> -->
   <td> JENO LOVESUM S P</td>
    <td>jeno.lovesum@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>220/14/CSE Dept,FIRST Floor,BLOCK II</td>
  </tr>
  <tr>
  <!-- <td>29</td> -->
   <td> JULIAN BENADIT P	</td>
    <td>julian.p@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>54,FIRST Floor,BLOCK III</td>
  </tr>
  <tr>
  <!-- <td>30</td> -->
   <td> JYOTHI MANDALA</td>
    <td>jyothi.mandala@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>41,THIRD Floor,BLOCK III</td>
  </tr>
  <tr>
  <!-- <td>31</td> -->
   <td> JYOTHI THOMAS</td>
    <td>j.thomas@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>325,FIRST Floor,BLOCK III</td>
  </tr>
  <tr>
  <!-- <td>32</td> -->
   <td> KANMANI P</td>
    <td>kanmani.p@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>5,FIRST Floor,BLOCK V</td>
  </tr>
  <tr>
  <!-- <td>33</td> -->
   <td> KARTHIKEYAN H	</td>
    <td>karthikeyan.h@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>1,GROUND Floor,BLOCK II</td>
  </tr>
  <tr>
  <!-- <td>34</td> -->
   <td> KUKATLAPALLI PRADEEP KUMAR</td>
    <td>kukatlapalli.kumar@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>131,FIRST Floor,BLOCK V</td>
  </tr>
  <tr>
  <!-- <td>35</td> -->
   <td> KUMARI K</td>
    <td>kumari.k@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>215 Machine Learning Lab,FIRST Floor,BLOCK II</td>
  </tr>
  <tr>
  <!-- <td>36</td> -->
   <td> LALASA M</td>
    <td> </td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>257,THIRD Floor,BLOCK II</td>
  </tr>
  <tr>
  <!-- <td>37</td> -->
   <td> MANJUNATH RAMANNA LAMANI</td>
    <td> </td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>253,THIRD Floor,BLOCK II</td>
  </tr>
  <tr>
  <!-- <td>38</td> -->
   <td> MANOHAR M</td>
    <td>manohar.m@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>7,GROUND Floor,BLOCK II</td>
  </tr>
  <tr>
  <!-- <td>39</td> -->
   <td> MANU ELAPPILA</td>
    <td>manu.elappila@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>325/Cabin 53,FIRST Floor,BLOCK III</td>
  </tr>
  <tr>
  <!-- <td>40</td> -->
   <td> 	MARY ANITA E A</td>
    <td>maryanita.ea@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>255/35,THIRD Floor,BLOCK II</td>
  </tr>
  <tr>
  <!-- <td>41</td> -->
   <td> MAUSUMI GOSWAMI</td>
    <td>mausumi.goswami@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>59,FIRST Floor,BLOCK III</td>
  </tr>
  <tr>
  <!-- <td>42</td> -->
   <td> MELBIN J REENA</td>
    <td>melbin.reena@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>208/8,GROUND Floor,BLOCK II</td>
  </tr>
  <tr>
  <!-- <td>43</td> -->
   <td> MICHAEL MOSES T</td>
    <td>michael.moses@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>97,THIRD Floor,BLOCK III</td>
  </tr>
  <tr>
  <!-- <td>44</td> -->
   <td> MITHUN B N</td>
    <td>mithun.bn@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>42,THIRD Floor,BLOCK II</td>
  </tr>
  <tr>
  <!-- <td>45</td> -->
   <td> NATARAJAN K</td>
    <td>natarajan.k@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>159,SECOND Floor,BLOCK V</td>
  </tr>
  <tr>
  <!-- <td>46</td> -->
   <td> NAVEEN J</td>
    <td>naveen.j@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>250/36/CSE,THIRD Floor,BLOCK II</td>
  </tr>
  <tr>
  <!-- <td>47</td> -->
   <td> PRAVEEN KULKARNI</td>
    <td>praveen.kulkarni@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>220/16,FIRST Floor,BLOCK II</td>
  </tr>
  <tr>
  <!-- <td>48</td> -->
   <td> RAGHAVENDRA S</td>
    <td>s.raghavendra@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>208/6,GROUND Floor,BLOCK II</td>
  </tr>
  <tr>
  <!-- <td>49</td> -->
   <td> RAJKUMAR RAJAVEL</td>
    <td>rajkumar.rajavel@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>Room No. 516/ Cabin No. 136,FIRST Floor,BLOCK V</td>
  </tr>
  <tr>
  <!-- <td>50</td> -->
   <td> RAKOTH KANDAN SAMBANDAM		</td>
    <td>rakoth.kandan@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>220/11,FIRST Floor,BLOCK II</td>
  </tr>
  <tr>
  <!-- <td>51</td> -->
   <td> REKHA V	</td>
    <td>rekha.v@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>130,FIRST Floor,BLOCK V</td>
  </tr>
  <tr>
  <!-- <td>52</td> -->
   <td> SAMIKSHA SHUKLA</td>
    <td>samiksha.shukla@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>220/14,FIRST Floor,BLOCK II</td>
  </tr>
  <tr>
  <!-- <td>53</td> -->
   <td> SANDEEP KUMAR	</td>
    <td>sandeepkumar@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>250/44,THIRD Floor,BLOCK II</td>
  </tr>
  <tr>
  <!-- <td>54</td> -->
   <td> SANTANU ROY	</td>
    <td>santanu.roy@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td> </td>
  </tr>
  <tr>
  <!-- <td>55</td> -->
   <td> SANTHRUPTH B C	</td>
    <td>santhrupth.bc@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>343-82,THIRD Floor,BLOCK III</td>
  </tr>
  <tr>
  <!-- <td>56</td> -->
   <td> SATHISH KUMAR R	</td>
    <td>sathishkumar.r@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>325/49,FIRST Floor,BLOCK III</td>
  </tr>
  <tr>
  <!-- <td>57</td> -->
   <td> SATHISH P K	</td>
    <td>sathish.pk@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>09,FIRST Floor,BLOCK II</td>
  </tr>
  <tr>
  <!-- <td>58</td> -->
   <td> SHAMANTH N	</td>
    <td>shamanth.n@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>51,FIRST Floor,BLOCK III</td>
  </tr>
  <tr>
  <!-- <td>59</td> -->
   <td> SHARON ROJI PRIYA C	</td>
    <td>sharon.roji@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>325,FIRST Floor,BLOCK III</td>
  </tr>
  <tr>
  <!-- <td>60</td> -->
   <td> SHRIKANT SUBHASH TANGADE	</td>
    <td>shrikantsubhash.tangade@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>Room-516, Cabin-137,FIRST Floor,BLOCK V</td>
  </tr>
  <tr>
  <!-- <td>61</td> -->
   <td> SHRUTI JALAPUR	</td>
    <td>shruti.jalapur@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td> </td>
  </tr>
  <tr>
  <!-- <td>62</td> -->
   <td> SONAM V MAJU		</td>
    <td> </td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>253,THIRD Floor,BLOCK II</td>
  </tr>
  <tr>
  <!-- <td>63</td> -->
   <td> SUJATHA A K	</td>
    <td>sujatha.ak@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>33,THIRD Floor,BLOCK II</td>
  </tr>
  <tr>
  <!-- <td>64</td> -->
   <td> SUNDARA PANDIYAN S	</td>
    <td>sundarapandiyan.s@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>32,THIRD Floor,BLOCK II</td>
  </tr>
  <tr>
  <!-- <td>65</td> -->
   <td> VANDANA REDDY	</td>
    <td>vandana.reddy@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>47,FIRST Floor,BLOCK III</td>
  </tr>
  <tr>
  <!-- <td>66</td> -->
   <td> VINOD H C	</td>
    <td>vinod.hc@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>516/133,FIRST Floor,BLOCK V</td>
  </tr>
  <tr>
  <!-- <td>67</td> -->
   <td> XAVIER C	</td>
    <td>xavier.c@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>173,FOURTH Floor,BLOCK V</td>
  </tr>
  <tr>
  <!-- <td>68</td> -->
   <td> CHAITRA P C	</td>
    <td>chaitra.pc@christuniversity.in</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td></td>
  </tr>
  
</table>




</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>