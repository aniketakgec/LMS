<html>
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body >
         
        <h1>Alarm clock</h1>   
    <h2 id='clock'></h2>
  <div id='alarm'>

        <label>
<div>
            <select id='hrs'></select>
        </div>
           </label>
           <label>
         <div>
            <select id='min'></select>
        </div>
           </label>
           <label>
         <div>
            <select id='sec'></select>
        </div>
           </label>
           <label>
           <div>
						<select id="ampm">
							<option value="AM">AM</option>
							<option value="PM">PM</option>
						</select>
					</div>
           </label>
       <div id='btn'>
        <div>
				<button  id='setButton' onClick='alarm()'>Set Alarm</button>
			</div>
            
        </div>
        </div>
        <script>
           var sound = new Audio("https://www.freespecialeffects.co.uk/soundfx/animals/cuckoo.wav");
		sound.loop = true;
            
            var h2=document.getElementById('clock');
            var currentTime = setInterval(function(){
                var date=new Date();
                var hrs=date.getHours();
                var min=date.getMinutes();
                var sec =date.getSeconds();
                var ampm=(date.getHours())<12?'AM':'PM';
                if(hrs>12)
        hrs=hrs-12;
    else
        hrs=hrs;
                
	 
               
                h2.textContent=addzero(hrs)+":"+addzero(min)+":"+addzero(sec)+":"+addzero(ampm);
            },500);
            
            function addzero(time) {
		return (time < 10) ? "0" + time : time;
	
}
            function hrs(){
                
                var select=document.getElementById('hrs');
                hrs=12;
                for(i=0 ;i<=hrs;i++){
                    select.options[select.options.length]=new Option(i<10?"0"+i:i,i);
                }
                    
                
            }
            
            hrs();
            
            
            
            function min(){
                
                var select=document.getElementById('min');
                min=59;
                for(i=0 ;i<=min;i++){
                    select.options[select.options.length]=new Option(i<10?"0"+i:i,i);
                }
                    
                
            }
            min();
            
            
            function sec(){
                
                var select=document.getElementById('sec');
                sec=59;
                for(i=0 ;i<=sec;i++){
                    select.options[select.options.length]=new Option(i<10?"0"+i:i,i);
                }
                    
                
            }
            
                sec();
            
            
            function alarm(){
                var hrs=document.getElementById('hrs');
                var min=document.getElementById('min');
                var sec=document.getElementById('sec');
                var ampm=document.getElementById('ampm');
            
            
            var selectedhrs = hrs.options[hrs.selectedIndex].value;
             var selectedmin=min.options[min.selectedIndex].value;
             var selectedsec=sec.options[sec.selectedIndex].value;
             var selectedampm=ampm.options[ampm.selectedIndex].value;
            
            var alarmTime = addzero(selectedhrs) + ":" + addzero(selectedmin) + ":" + addzero(selectedsec)+":"+ selectedampm; 
    
            
    document.getElementById('hrs').disabled = true;
	document.getElementById('min').disabled = true;
	document.getElementById('sec').disabled = true;
	document.getElementById('ampm').disabled = true;
	var h2 = document.getElementById('clock');
            
setInterval(function(){
	var date = new Date();
	
	var hrs = date.getHours();
	
	var min = date.getMinutes();
	
	var sec = date.getSeconds();
	
	var ampm = (date.getHours()) < 12 ? 'AM' : 'PM';
if(hrs>12)
        hrs=hrs-12;
    else
        hrs=hrs;
	 
	
	var currentTime = h2.textContent = addzero(hrs) + ":" + addzero(min) + ":" + addzero(sec)+":"+ ampm;
    
	
	if (alarmTime == currentTime) {
		sound.play();
    }
},500);
            
            }
            
        </script>
            
    
    </body>
</html>
