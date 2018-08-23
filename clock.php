<?php
$yes="yesno";
?>
<html>
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="clock.css">
    </head>
    <body onload='alarm()'>
         
        <h1>ONLINE ROOM LOCKING PORTAL</h1>   
    <h2 id='clock'></h2>
  <div id='alarm'>

      
       
        </div>
        <script type="text/javascript">
           var sound = new Audio("https://www.freespecialeffects.co.uk/soundfx/animals/cuckoo.wav");
		sound.loop = true;
            
            var h2=document.getElementById('clock');
            var currentTime = setInterval(function(){
                var date=new Date();
                var hrs=date.getHours();
                var min=date.getMinutes();
                var sec =date.getSeconds();
                
                if(hrs>12)
        hrs=hrs-12;
    else
        hrs=hrs;
                
	 
               
                h2.textContent=addzero(hrs)+":"+addzero(min)+":"+addzero(sec);
            },1000);
            
            function addzero(time) {
		return (time < 10) ? "0" + time : time;
	
}
            
            
            
           
            
            function alarm(){
		
				
			 var alarmTime="04:21:00";
			 
			 
			 
            
    
            
   
	var h2 = document.getElementById('clock');
            
setInterval(function(){
	var date = new Date();
	
	var hrs = date.getHours();
	
	var min = date.getMinutes();
	
	var sec = date.getSeconds();
	
	
if(hrs>12)
        hrs=hrs-12;
    else
        hrs=hrs;
	 
	
	var currentTime = h2.textContent = addzero(hrs) + ":" + addzero(min) + ":" + addzero(sec);
    
	
	if (alarmTime == currentTime) {
window.location.href = "hostelautomation.php";

    }
	
},1000);
            
            }
            
        </script>
            
    
    </body>
</html>
