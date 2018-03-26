<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Circuit War 2018</title>

<link rel="icon" href="img/icon.png" type="image/x-icon">

<script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">

<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/script.js"></script>

</head>

<body>
<div class="container-main container-fluid">
  <div class="well">
<div class="intro">
<center>
<div id="name">Welcome to Circuit War 2018</div>

<center><div class="profile-pic animated bounceIn">
     <a href="javascript:void(0);">
       <img class="img-rounded img-responsive img-circle profile-img" src="img/icon.png" alt="profile pic">
     </a>
</div></center>

<div id="org_by">Organised by:</div><div id="org_name">Bio-Medical Department Dcrust,Murthal</div><br>

<div class="lets_register animated infinite pulse"><ul><li><a href="register.html" target="_blank">Register</a></li></ul></div>
<table>
<tr><th>Visitors</th><th>Registrations</th>
</tr>
<tr><td><div id="visitor_coun" class="animated bounceIn">
<?php
$handle = fopen("counter_a.cnf", "r");
if(!$handle){
 echo "143" ;
}
else {
	$counter = ( int ) fread ($handle,20) ;
	fclose ($handle) ;
	$counter++ ;
	echo $counter;
$handle =  fopen("counter_a.cnf", "w" ) ;
fwrite($handle,$counter) ;
fclose ($handle) ;
	}
?>
</div></td><td><div id="register_count" class="animated bounceIn">0
</div></td>
</tr>
</table>
</center>
</div>
<div class="about">
<div class="heading">--&nbsp;About&nbsp;--</div>

<div class="about_content">
  <p><b>Circuit war</b> is a Technical Event organised by <b>Bio-Medical Engineering Department</b> of <a href="http://dcrustm.ac.in/">DCRUST, Murthal</a> during <b>Technova.</b>
  Technova is the Technical Festival of <a href="http://dcrustm.ac.in/">DCRUST</a>. In this Event, the participants are devided into
  groups of two. A printed schematic circuit diagram is provided to each group and their task is to redesign
  the circuit on BreadBoard using given electronic components.</p><br>
  <p>This main aim of this contest it to make the participants familiear to basic electronic components and to encourage them to enhance their creativity.
  </p>
</div>

</div>
<div class="rules">
  <div class="heading">--&nbsp;Rules&nbsp;--</div>
  <div class="rules_content">
    <ol type="1">
      <li>This event is Open for all Branches (Any Branch, course or year).</li>
      <li>Registrations are mandatory for participation.</li>
      <li>Suitable prize will be given to the Winners.</li>
      <li>There will be two rounds in this contest:
        <ol type="a">
          <li><b>Round 1:</b> In this round, schematic will be given to the participants and  their task will be to replicate it on breadboard.</li>
          <li><b> Round 2:</b> In this round more complex schematic will be provided on paper sheet and the participants have to redesign it on breadboard.</li>
        </ol>
        <li><b>Time</b> and <b>Circuit clarity on breadboard</b> will be considered to evaluate points and form the basis of winning or losing the contest.</li>
        <li>Your participation for the contest is provisional.</li>
    </ol>
  </div>
</div>

<div class="register" id="register">
  <div class="heading">--&nbsp;Register&nbsp;--</div>
<center> <p class="register_content">Please follow <b><a href="register.html" target="_blank">this</a></b> link to register</p></center>
</div>
<div class="contact">
  <div class="heading">--&nbsp;Contact&nbsp;--</div>
  <center>

<table>
  <tr><td>Rohit (Bme-Final Year)</td> <td>Coordinator</td> <td>8607015140</td>
  </tr>
  <tr><td>Vishal (Bme-3rd Year)</td> <td>Co-Coordinator</td> <td>9050247393</td>
  </tr>
</table>

  </center>
</div>

  </div>
</div>
</body>
</html>
