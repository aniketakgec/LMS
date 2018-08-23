<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="hostelautomation.css">
    </head>
<body>
  
    <ul>
        <li><a href="#login">log in</a></li>
    </ul>
      <h3>HOSTEL REGISTRATION</h3>  
 
<div class="form">
    <form align="center" action="student_registration.php" method="POST">
    <input type="text" name="first" placeholder="FIRST NAME"><br>
	<input type="text" name="last" placeholder="LAST NAME"><br>
    <input type="text" name="email" placeholder="EMAIL"><br>
    <input type="text" name="contact" placeholder="CONTACT NO."><br>
        <input type="text" name="student_number" placeholder="STUDENT NO."><br>
    <input type="text" name="uid" placeholder="USERNAME"><br>
    <input type="password" name="pwd" placeholder="PASSWORD"><br>
        
    <label><input type="radio" name="gender" value="male">Male</label>
    <label><input type="radio" name="gender" value="female">Female</label>
    <label><input type="radio" name="gender" value="other">Other</label><br><br>
        
        <br><br> <label><input type="radio" name="room" value="single">Single</label>
        <label><input type="radio" name="room" value="double">Double</label>
        <label><input type="radio" name="room" value="triple">Triple</label><br><br>
    
        <br><br><br> <label><input type="radio" name="year" value="II">II Year</label>
        <label><input type="radio" name="year" value="III">III Year</label>
    <label><input type="radio" name="year" value="IV">IV Year</label><br><br>
     <br><br><br><br> <button  type="submit" name="submit" >submit</button>
		
		
		</form>
   </div> 
    
</body>
</html>