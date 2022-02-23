{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
{{-- <table border="1" width="500">
  <tr>
    <th>
      Nama
    </th>
    <th>
      Value
    </th>
    <th>
      Hasil
    </th>
  </tr>
  <tr>
    <td>
      Haaaa
    </td>
    <td>
      <input type="text" name="" id="input001"> --}}
      {{--  <button onclick="btn001()">Check</button> --}}
   {{--  </td>
    <td id="hasil">
    </td>
  </tr>
</table>

<h1 id="text-geo">GEO</h1>
<button id="btn">CLICK HILANG</button>
<button id="btn-show">CLICK MUNCUL</button> --}}

<!DOCTYPE html> 
<html> 
<head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>StopWatch</title>
  <style>
    body 
    {         
      background-color: #efefef;
      margin:0;  padding:0;
      user-select:none;

    }     

    h1 
    {         
      font-size: 45px; 
      position:relative; 
      margin-top:2%;          
    } 

    button,#lap
    {
      display:inline-block;
      font-size:18px;
      width:43%;height:48px;
      margin:2%; color:white;
      font-weight:bolder;
      outline:none; border:0;
      border-radius:5px;
      background-color:teal;
      box-shadow:0 1px 3px rgba(0,0,0,0.12), 0 3px 5px rgba(0,0,0,0.3);
      cursor:pointer ;
      outline:none;
      transition:0.1s;

    }
    button:active
    {
      box-shadow:0 0 black;
      transform:scale(0.94);
    }
    #begin
    {     
      background-image:-webkit-linear-gradient(right,#06beb6,#48b1bf);
    } 

    #reset 
    {     
      background-image: -webkit-linear-gradient(left,#141e30,#243b55);   
    }     

    #controls 
    {         
      margin-left: 7px;         
      width: 310px;         height:70px;     
    }
    #lap
    {
      width:8%; margin-top:0px;
    }
  </style>
</head> 
<body>

 <center> 
  <h1 id="output" ><b>00:00:00:00</b></h1> 
</center>

<center>
  <div id="controls" >

   <button id= "begin" onclick="begin()" > <div id="start">START</div></button>     

   <button onclick="reset()" id="reset" >RESET</button> 
 </div>
</center>
<center>
 <button id="lap" onclick="noteLap()">Lap</button>      
</center>

<audio id="click" autoplay loop>
  <source src="https://dl-web.dropbox.com/s/so2l579qs7alolb/Stopwatch%203.mp3?dl=0" 
  type = "audio/mp3">

</audio>

<script>
  // "use strict"

  var time = 0; 
  var i = 0;
  var isrunning = false; 
  var lap = "00:00:00:00";
  var isready;


//to start or stop
function begin()
{   
  var aud =document.getElementById("click");

    //if clock is stop i.e when start 
    if(!isrunning)
    {         
     isrunning = true;  
     increment(); 
     aud.play(); isready =aud.play();
     document.getElementById("start").innerHTML = "PAUSE";     
     document.getElementById("begin").style.backgroundImage="-webkit-linear-gradient(left,#cb2d3e,#ef473a)";             } 
   //when pause i.e while running     
   else{ isrunning = false; 

    if(isready !== undefined )    
    {
      aud.pause();
    } document.getElementById("start").innerHTML = "RESUME";         document.getElementById("begin").style.backgroundImage = "-webkit-linear-gradient(right,#06beb6,#48b1bf)";             
  } 

}

//To increase time by 1 every 10 milliseconds
function increment()
{     
  if(isrunning)
  {         
    setTimeout(

      function()
      {             
        time++;     var t = time/10;

    //to set time
    var milli = time % 10;
    var secs = Math.floor(t % 60);
    var mins = Math.floor(t/60);             
    var hours = Math.floor(t/3600);             

    //minor changes
    if(mins < 10)
     {   mins = "0" + mins;   } 
   if(milli < 10)
     {   milli = milli + "0" ; } 
   if(hours < 10)
     {   hours = "0" + hours; } 
   if(secs < 10)
     {   secs = "0" + secs;   } 

//output  
lap =  hours + ":" + mins + ":" + secs + ":" + milli;

document.getElementById("output").innerHTML = lap  ; 

increment();},100) 

  }      
} 

//to set things to 00:00:00:00    
function reset()
{     
  isrunning = false;     time = -1; 
  console.log("----session ended-----");
  i=0;

  var aud =document.getElementById("click");

  if(isready !== undefined )    
  {
    aud.pause();
  }
  document.getElementById("start").innerHTML = "Start";     document.getElementById("output").innerHTML = "00:00:00:00";     document.getElementById("begin").style.backgroundImage = "-webkit-linear-gradient(right,#06beb6,#48b1bf)";         

} 

function noteLap()
{   i++;
  console.log("Lap " + i + " on : " + lap); 
} 
</script>           
</body>

</html>

{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $("#input001").on("keyup", function() {
    if ($(this).val() >= 0 && $(this).val() < 6) {
      $("#hasil").css({
        'background-color': 'red'
      })
    } else if ($(this).val() >= 6 && $(this).val() <= 10) {
      $("#hasil").css({
        'background-color': 'green'
      })
    } else {
      alert("Lebih/Kurang dari 10")
    }
  }) 

  $("#btn").on("click", function() {
    $("#text-geo").hide()
  })

  $("#btn-show").on("click", function () {
    $("#text-geo").show()
    $("#text-geo").text("IQBAL")  })

  function munculinText(nama) {
    $("#text-geo").show()
    $("#text-geo").text(nama)
  }
</script> --}}