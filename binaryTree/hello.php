<?php
session_start();
include 'conn.php';
include 'auth.php';
 $date=date('d/m/Y');
$name2=$_SESSION['username2'];
$query1="Select * from users where dealer_name='$name2' ";
$result = mysqli_query($con, $query1);
$num_rows = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<?php
include 'link.php';
?>
 
<style type="text/css">

.block{

    
}

}
 .bet{
font-size: 1.0vw;
color:#EEDFCC;
 }
  .btn20{
       font-size: 1.0vw;
  color:#EEDFCC; 
 }
  .det {
 font-size: 1.3vw;
 color: #EEDFCC;
}
  @media only screen and (max-width: 600px) {
       .det {
 font-size: 3.0vw;
 color: #EEDFCC;

}

 .btn20{ padding:9px;
 height:27px;
   font-size: 2.0vw;
  color:#EEDFCC; 
 }


}
</style>
</head>

<body class="dark-edition"  onload="myFunction()">
  <div class="wrapper ">
<?php
include 'header.php';
?>
<?php
include 'nav2.php';
?>
    <div class="main-panel">
      <!-- Navbar -->

      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
               
              <div class="row" style=" background-color:black;  margin-top:-40px;">
    
                    <div class="col-md-12 block" >
              <div class="card" style=" color:black; background-color:black">
                <div class="card-header card-header-primary" id="cardbtn" style=" border-style: solid;
   border-color:gold; background-color:gold;"> 
                  <h4 class="card-title "><b class="bet" id="logg"></b><a  href="#modal2" id="card25" data-toggle="modal" data-id="5" style="display:none;" data-name="card5" onclick="myFunction()" ><img  src="<?php echo $win;?>" style="margin-left:70px; position:absolute" id="card1" height="50px" width="40px"/></a><a type="submit" data-id="A" id="25" href="dashboard4.php?id=UK017.88" class="btn  pull-right  btn20 " style="background: #228b22;  border-radius:5px;">Place <i class="material-icons" >double_arrow</i></a>
                  
                   <script>
                function myFunc() {
                setInterval(function(){ 
                const now=new Date();
             	const hou=now.getHours();
             	const minu=now.getMinutes();
             	const seco=now.getSeconds();
               if(hou==00){
                 document.getElementById("25").href="dashboard4.php?id=UK017.88"; 
                 document.getElementById("logg").innerHTML =" Game 00:00-01:00"; 
                 
                 if(minu>=58){
               
                document.getElementById("25").style.visibility = "hidden";

                }
                }
                 else if(hou==01){
                      document.getElementById("25").href="dashboard4.php?id=UK035.76"; 
                      document.getElementById("logg").innerHTML =" Game 01:00-02:00"; 
                       if(minu>=58){
               
                document.getElementById("25").style.visibility = "hidden";

                }
                 } 
                 else if(hou==02){
                      document.getElementById("25").href="dashboard4.php?id=UK053.64"; 
                       document.getElementById("logg").innerHTML ="Game 02:00-03:00"; 
                        if(minu>=58){
               
                document.getElementById("25").style.visibility = "hidden";

                }
                 }
                  else if(hou==03){
                      document.getElementById("25").href="dashboard4.php?id=UK071.52"; 
                       document.getElementById("logg").innerHTML ="Game 03:00-04:00"; 
                        if(minu>=58){
               
                document.getElementById("25").style.visibility = "hidden";

                }
                 }
                  else if(hou==04){
                      document.getElementById("25").href="dashboard4.php?id=UK089.40"; 
                      document.getElementById("logg").innerHTML ="Game 04:00-05:00"; 
                       if(minu>=58){
               
                document.getElementById("25").style.visibility = "hidden";

                }
                 }
                  else if(hou==05){
                      document.getElementById("25").href="dashboard4.php?id=UK107.28"; 
                      document.getElementById("logg").innerHTML ="Game 05:00-06:00"; 
                       if(minu>=58){
               
                document.getElementById("25").style.visibility = "hidden";

                }
                 }
                  else if(hou==06){
                      document.getElementById("25").href="dashboard4.php?id=UK125.16"; 
                      document.getElementById("logg").innerHTML ="Game 06:00-07:00"; 
                       if(minu>=58){
               
                document.getElementById("25").style.visibility = "hidden";

                }
                 }
                  else if(hou==07){
                      document.getElementById("25").href="dashboard4.php?id=UK143.04"; 
                      document.getElementById("logg").innerHTML ="Game 07:00-08:00"; 
                       if(minu>=58){
               
                document.getElementById("25").style.visibility = "hidden";

                }
                 }
                  else if(hou==08){
                      document.getElementById("25").href="dashboard4.php?id=UK160.92"; 
                      document.getElementById("logg").innerHTML ="Game 08:00-09:00"; 
                       if(minu>=58){
               
                    document.getElementById("25").style.visibility = "hidden";
                    
                      

                }
                 }
                  else if(hou==09){
                      document.getElementById("25").href="dashboard4.php?id=UK178.80"; 
                      document.getElementById("logg").innerHTML ="Game 09:00-10:00"; 
                       if(minu>=58){
               
                document.getElementById("25").style.visibility = "hidden";

                }
                 }
                  else if(hou==10){
                      document.getElementById("25").href="dashboard4.php?id=UK196.68"; 
                      document.getElementById("logg").innerHTML ="Game 10:00-11:00";
                       if(minu>=58){
               
                document.getElementById("25").style.visibility = "hidden";

                }
                 }
                  else if(hou==11){
                      document.getElementById("25").href="dashboard4.php?id=UK214.56"; 
                      document.getElementById("logg").innerHTML ="Game 11:00-12:00"; 
                       if(minu>=58){
               
                document.getElementById("25").style.visibility = "hidden";
                         
                }
                 }
                  else if(hou==12){
                      document.getElementById("25").href="dashboard4.php?id=UK232.44"; 
                      document.getElementById("logg").innerHTML ="Game 12:00-13:00"; 
                       if(minu>=58){
                    
                document.getElementById("25").style.visibility = "hidden";

                }
                 }
                  else if(hou==13){
                      document.getElementById("25").href="dashboard4.php?id=UK250.32"; 
                      document.getElementById("logg").innerHTML ="Game 13:00-14:00"; 
                       if(minu>=58){
                    
                document.getElementById("25").style.visibility = "hidden";

                }
                 }
                  else if(hou==14){
                      document.getElementById("25").href="dashboard4.php?id=UK268.20"; 
                       document.getElementById("logg").innerHTML ="Game 14:00-15:00"; 
                        if(minu>=58){
                      
                document.getElementById("25").style.visibility = "hidden";

                }
                 }
                  else if(hou==15){
                      document.getElementById("25").href="dashboard4.php?id=UK286.08"; 
                      document.getElementById("logg").innerHTML ="Game 15:00-16:00"; 
                       if(minu>=58){
               
                document.getElementById("25").style.visibility = "hidden";

                }
                 }
                  else if(hou==16){
                      document.getElementById("25").href="dashboard4.php?id=UK303.96"; 
                      document.getElementById("logg").innerHTML ="Game 16:00-17:00"; 
                       if(minu>=58){
               
                document.getElementById("25").style.visibility = "hidden";

                }
                 }
                  else if(hou==17){
                      document.getElementById("25").href="dashboard4.php?id=UK321.84"; 
                      document.getElementById("logg").innerHTML ="Game 17:00-18:00"; 
                       if(minu>=58){
               
                document.getElementById("25").style.visibility = "hidden";

                }
                 }
                  else if(hou==18){
                      document.getElementById("25").href="dashboard4.php?id=UK339.72"; 
                      document.getElementById("logg").innerHTML ="Game 18:00-19:00"; 
                       if(minu>=58){
               
                document.getElementById("25").style.visibility = "hidden";

                }
                 }
                  else if(hou==19){
                      document.getElementById("25").href="dashboard4.php?id=UK357.60"; 
                      document.getElementById("logg").innerHTML ="Game 19:00-20:00"; 
                       if(minu>=58){
               
                document.getElementById("25").style.visibility = "hidden";

                }
                 }
                  else if(hou==20){
                      document.getElementById("25").href="dashboard4.php?id=UK375.48"; 
                      document.getElementById("logg").innerHTML ="Game 20:00-21:00"; 
                       if(minu>=58){
               
                document.getElementById("25").style.visibility = "hidden";

                }
                 }
                  else if(hou==21){
                      document.getElementById("25").href="dashboard4.php?id=UK393.36"; 
                      document.getElementById("logg").innerHTML ="Game 21:00-22:00"; 
                       if(minu>=58){
               
                document.getElementById("25").style.visibility = "hidden";

                }
                 }
                  else if(hou==22){
                      document.getElementById("25").href="dashboard4.php?id=UK411.24"; 
                      document.getElementById("logg").innerHTML ="Game 22:00-23:00";
                       if(minu>=58){
               
                document.getElementById("25").style.visibility = "hidden";

                }
                 }
                  else if(hou==23){
                      document.getElementById("25").href="dashboard4.php?id=UK429.12"; 
                      document.getElementById("logg").innerHTML ="Game 23:00-00:00"; 
                       if(minu>=58){
               
                document.getElementById("25").style.visibility = "hidden";

                }
                 }
                 
                     
                     else{
                  
                     document.getElementById("card25").style.visibility = "hidden";
               
                    }

                },20);
                    
                }
                myFunc();
           
                $(document).ready(function(){
                	var str=document.getElementById("logg").textContent;
                        
                        	function myFunction2() {
                          setInterval(function(){ 
                          const now=new Date();
                         		const hou=now.getHours();
                         		const minu=now.getMinutes();
                         		const seco=now.getSeconds();
                         		 var res = str.substr(5,2);
                         		
                        if(hou==res){
                        
                             if(minu==59){
                             
                                if(seco>=50){
                                 		
                                 var res2 = str.substr(5,11);
                                 document.getElementById("carses").innerHTML =" Result Out For Game Session " + res2 ; 
                                 var res3="11:00-12:00";
                                 load_data(res2);
                                 document.getElementById('card25').click();
                                   }
                            }
                         	if(minu==00){
                              if(seco<=05){
                             		function timedRefresh(timeoutPeriod) {
                                	setTimeout("location.reload(true);",timeoutPeriod);
                                }
                                window.onload = timedRefresh(2000);
                               }
                        } 
                        
                       
                        }
                    
                        },7000);
                        }
                        myFunction2();
                        
                        
                        
                        
                        //load_data();
                        
                         function load_data(query)
                         {
                          $.ajax({
                           url:"fetchcar.php",
                           method:"POST",
                           data:{query:query},
                           dataType:"JSON",
                           success:function(data)
                           {
                             var res4=data.name;
                            
                            var res5 = res4.slice(0,-4);
                    
                             myFunction(res5);
                            
                           }
                          });
                         }
                        
                           
                          
                        
                        // setInterval(function(){
                        // var str=document.getElementById("logg").textContent;
                        //  var res2 = str.substr(5,11);
                        //  var res3="11:00-12:00";
                        //   load_data(res3);
                         
                        
                        // },10000);
                          });
                        
                   </script>
                

                 </h4> 
                 <div id="myBlinkingDiv" style="color:red;"><b>Live</b></div>
                </div>
                <script>
       var blink_speed = 300; // every 1000 == 1 second, adjust to suit
var t = setInterval(function () {
    var ele = document.getElementById('myBlinkingDiv');
    ele.style.visibility = (ele.style.visibility == 'hidden' ? '' : 'hidden');
}, blink_speed);



                </script>
                <div class="card-body" id="card1" >
                  <div class="table-responsive">
        
                  </div>
                </div>
              </div>
            </div>
             <?php
              
              $sesid="00:00-01:00";
              $query8="Select SUM(chips) AS chips_sum from report where username='$name2'AND session='$sesid' AND date='$date'";
              $result8 = mysqli_query($con, $query8);
              $row8 = mysqli_fetch_array($result8);
              $sum = $row8['chips_sum'];
              
              $result12 = mysqli_query($con, "Select SUM(proloss) AS prol from report where username='$name2' AND session='$sesid' AND date='$date' AND proloss > 0 ");
                 $row12 = mysqli_fetch_assoc($result12);   
                 $pro = $row12['prol'];
              $exp=$pro-$sum;
              
              date_default_timezone_set('Asia/Kolkata');
              $date=date('d/m/Y');
              $query9="Select win_card from hour_result where date='$date' AND session='$sesid' ";
              $result9 = mysqli_query($con, $query9);
              $row9 = mysqli_fetch_array($result9);
              $win = $row9['win_card'];
              $gif=substr($win,0,-4);
              ?>
               
               
               
               
   
              <div class="col-md-12 block"  style="margin-top:-40px;">
              <div class="card" style=" color:black; background-color:black">
                <div class="card-header card-header-primary" id="cardbtn1" style=" border-style: solid;
   border-color:gold;"> 
                  <h4 class="card-title "><b class="bet"> Game 00:00-01:00</b><a ><img src="wait.png" style="margin-left:70px; position:absolute" id="caard1" height="50px" width="40px"></a><a href="#modal2" data-toggle="modal" data-id="5" data-name="card5" onclick="myFunction('<?php echo $gif;?>')"><img src="<?php echo $win;?>" style="margin-left:70px; position:absolute" id="card1" height="50px" width="40px"/></a><a type="submit" data-id="A" id="00" href="dashboard4.php?id=UK017.88" class="btn  pull-right  btn20 " style="background: #228b22;  border-radius:5px;">Place   <i class="material-icons" >double_arrow</i></a>
                   <script>
                function myFunction() {
                setInterval(function(){ 
                const now=new Date();
             	const hou=now.getHours();
             	const minu=now.getMinutes();
                if(hou>00){
                 document.getElementById("caard1").style.visibility = "hidden";
                document.getElementById("card1").style.visibility = "visible";
                document.getElementById("00").style.visibility = "hidden";
                 document.getElementById("cardbtn1").style.backgroundColor = "#808080";
              document.getElementById("lock1").style.visibility = "visible";
              document.getElementById("exp1").style.visibility = "hidden";
                }
                else if(hou==00){
                if(minu>=58){
                document.getElementById("caard1").style.visibility = "visible";
                document.getElementById("card1").style.visibility = "hidden";
                document.getElementById("00").style.display="none"; 	
                document.getElementById("lock1").style.visibility = "hidden";

                }
               else{
                     document.getElementById("caard1").style.visibility = "hidden";
                     document.getElementById("lock1").style.visibility = "hidden";
                     document.getElementById("card1").style.visibility = "hidden";
                  }
                }
                     else{
                     document.getElementById("caard1").style.visibility = "hidden";
                     document.getElementById("card1").style.visibility = "hidden";
                     document.getElementById("lock1").style.visibility = "hidden";
                
                    }
                },10);
               
                }
                myFunction();

                   </script>
                 </h4> 
                 <p class="card-category"><pre><b class="det" style="color:green;"><b id="exp1">Exposure :  <?php echo"$sum";?> </b> P/L: <?php echo"$exp";?>      </b></pre><pre id="lock1" style="margin-bottom:-25px;"><b>Game Locked !          Winning Card  </b></pre></p>
                </div>
                <div class="card-body" id="card1" >
                  <div class="table-responsive">
        
                  </div>
                </div>
              </div>
            </div>
             <div class="col-md-12" style="margin-top:-40px;">    <?php
              $sesid="01:00-02:00";
              $query8="Select SUM(chips) AS chips_sum from report where username='$name2'AND session='$sesid' AND date='$date' ";
              $result8 = mysqli_query($con, $query8);
              $row8 = mysqli_fetch_array($result8);
              $sum = $row8['chips_sum'];
               $query12="Select SUM(proloss) AS prol from report where username='$name2'AND session='$sesid' AND date='$date'";
              $result12 = mysqli_query($con, $query12);
              $row12 = mysqli_fetch_array($result12);
              $pro = $row12['prol'];
              
              
              date_default_timezone_set('Asia/Kolkata');
              $date=date('d/m/Y');
              $query9="Select win_card from hour_result where date='$date' AND session='$sesid' ";
              $result9 = mysqli_query($con, $query9);
              $row9 = mysqli_fetch_array($result9);
              $win = $row9['win_card'];
              $gif1=substr($win,0,-4);
              ?>
              <div class="card"style=" color:black; background-color:black">
                <div class="card-header card-header-primary" id="cardbtn2"style=" border-style: solid;
   border-color:gold;">
                  <h4 class="card-title "><b class="bet"> Game 01:00-02:00</b><a><img src="wait.png" style="margin-left:70px; position:absolute" id="caard2"height="50px" width="40px"></a><a href="#modal2" data-toggle="modal" data-id="5" data-name="card5" onclick="myFunction('<?php echo $gif1;?>')"><img src="<?php echo $win;?>" style="margin-left:70px; position:absolute" id="card2" height="50px" width="40px"/></a><a type="button" href="dashboard4.php?id=UK035.76" id="01" class="btn btn-success pull-right  btn20 "style="background: #228b22;  border-radius:5px;">Place Bet</a>
                 </h4> 
                  <script>
                function myFunction() {
                setInterval(function(){ 
                const now=new Date();
             	const hou=now.getHours();
             	const minu=now.getMinutes();
                if(hou>01){
                 document.getElementById("caard2").style.visibility = "hidden";
                document.getElementById("card2").style.visibility = "visible";
                document.getElementById("01").style.visibility = "hidden";
                document.getElementById("cardbtn2").style.backgroundColor = "#808080";
                document.getElementById("lock2").style.visibility = "visible";
                document.getElementById("exp2").style.visibility = "hidden";
                }
                else if(hou==01){
                if(minu>=58){
                document.getElementById("caard2").style.visibility = "visible";
                document.getElementById("card2").style.visibility = "hidden";
                document.getElementById("01").style.display="none"; 	
                document.getElementById("lock2").style.visibility = "hidden";

                }
               else{
                     document.getElementById("caard2").style.visibility = "hidden";
                     document.getElementById("card2").style.visibility = "hidden";
                     document.getElementById("lock2").style.visibility = "hidden";

                  }
                }
                     else{
                     document.getElementById("caard2").style.visibility = "hidden";
                     document.getElementById("card2").style.visibility = "hidden";
                     document.getElementById("lock2").style.visibility = "hidden";
                       
                    }
                },10);
               
                }
                myFunction();

                   </script>
                <p class="card-category"><pre><b class="det" style="color:green;"><b id="exp2">Exposure :  <?php echo"$sum";?> </b> P/L: <?php echo"$exp";?>         </b></pre><pre id="lock2" style="margin-bottom:-25px;"><b>Game Locked !          Winning Card </b></pre></p>
                </div>
                
                <div class="card-body" id="card1" >
                  <div class="table-responsive">
        
                  </div>
                </div>
              </div>
            </div>
              <div class="col-md-12" style="margin-top:-40px;">
                  <?php
              $sesid="02:00-03:00";
              $query8="Select SUM(chips) AS chips_sum from report where username='$name2'AND session='$sesid'  AND date='$date' ";
              $result8 = mysqli_query($con, $query8);
              $row8 = mysqli_fetch_array($result8);
              $sum = $row8['chips_sum'];
               $result12 = mysqli_query($con, "Select SUM(proloss) AS prol from report where username='$name2' AND session='$sesid' AND date='$date' AND proloss > 0 ");
                 $row12 = mysqli_fetch_assoc($result12);   
                 $pro = $row12['prol'];
              $exp=$pro-$sum;
              
              
               date_default_timezone_set('Asia/Kolkata');
              $date=date('d/m/Y');
              $query9="Select win_card from hour_result where date='$date' AND session='$sesid' ";
              $result9 = mysqli_query($con, $query9);
              $row9 = mysqli_fetch_array($result9);
              $win = $row9['win_card'];
              $gif2=substr($win,0,-4);
              ?>
              <div class="card" style=" color:black; background-color:black;">
                <div class="card-header card-header-primary" id="cardbtn3"style=" border-style: solid;
   border-color:gold;">
                  <h4 class="card-title "><b  class="bet"> Game 02:00-03:00</b><a ><img src="wait.png" style="margin-left:70px; position:absolute" id="caard3"height="50px" width="40px"></a><a href="#modal2" data-toggle="modal" data-id="5" data-name="card5" onclick="myFunction('<?php echo $gif2;?>')"><img src="./<?php echo "$win";?>" style="margin-left:70px; position:absolute" id="card3" height="50px" width="40px"/></a><a type="submit" href="dashboard4.php?id=UK053.64" id="02" class="btn  pull-right  btn20 " style="background: #228b22;  border-radius:5px;">Place <i class="material-icons" >double_arrow</i></a>
                 </h4> 
                 <script>
                function myFunction() {
                setInterval(function(){ 
                const now=new Date();
             	const hou=now.getHours();
             	const minu=now.getMinutes();
                if(hou>02){
                 document.getElementById("caard3").style.visibility = "hidden";
                document.getElementById("card3").style.visibility = "visible";
                document.getElementById("02").style.visibility = "hidden";	
                document.getElementById("cardbtn3").style.backgroundColor = "#808080";
                document.getElementById("lock3").style.visibility = "visible";
                 document.getElementById("exp3").style.visibility = "hidden";
                }
                else if(hou==02){
                if(minu>=58){
                document.getElementById("caard3").style.visibility = "visible";
                document.getElementById("card3").style.visibility = "hidden";
                document.getElementById("02").style.display="none"; 
                document.getElementById("lock3").style.visibility = "hidden";

                }
               else{
                     document.getElementById("caard3").style.visibility = "hidden";
                     document.getElementById("card3").style.visibility = "hidden";
                     document.getElementById("lock3").style.visibility = "visible";
             
                  }
                }
                     else{
                     document.getElementById("caard3").style.visibility = "hidden";
                     document.getElementById("card3").style.visibility = "hidden";
                     document.getElementById("lock3").style.visibility = "hidden";

                     
                    }
                },10);
               
                }
                myFunction();

                   </script>
              <p class="card-category"><pre><b class="det" style="color:green;"><b id="exp3">Exposure :  <?php echo"$sum";?> </b> P/L: <?php echo"$exp";?>         </b></pre><pre id="lock3" style="margin-bottom:-25px;"><b>Game Locked !          Winning Card  </b></pre></p>
                </div>
                <div class="card-body" id="card1" >
                  <div class="table-responsive">
        
                  </div>
                </div>
              </div>
            </div>
             <div class="col-md-12" style="margin-top:-40px;  ">
                 <?php
              $sesid="03:00-04:00";
              $query8="Select SUM(chips) AS chips_sum from report where username='$name2'AND session='$sesid'  AND date='$date' ";
              $result8 = mysqli_query($con, $query8);
              $row8 = mysqli_fetch_array($result8);
              $sum = $row8['chips_sum'];
              $result12 = mysqli_query($con, "Select SUM(proloss) AS prol from report where username='$name2' AND session='$sesid' AND date='$date' AND proloss > 0 ");
                 $row12 = mysqli_fetch_assoc($result12);   
                 $pro = $row12['prol'];
              $exp=$pro-$sum;
              
               date_default_timezone_set('Asia/Kolkata');
              $date=date('d/m/Y');
              $query9="Select win_card from hour_result where date='$date' AND session='$sesid' ";
              $result9 = mysqli_query($con, $query9);
              $row9 = mysqli_fetch_array($result9);
              $win = $row9['win_card'];
              $gif3=substr($win,0,-4);
              ?>
              <div class="card" style=" color:black; background-color:black;
">
                <div class="card-header card-header-primary" id="cardbtn4"  style=" color:black; background-color:white; border-style: solid;
   border-color:gold;">
                  <h4 class="card-title "><b  class="bet"> Game 03:00-04:00</b><a  ><img src="wait.png" style="margin-left:70px; position:absolute" id="caard4"height="50px" width="40px"></a><a href="#modal2" data-toggle="modal" data-id="5" data-name="card5" onclick="myFunction('<?php echo $gif3;?>')" ><img src="<?php echo "$win";?>" style="margin-left:70px; position:absolute" id="card4" height="50px" width="40px"/></a><a type="submit" href="dashboard4.php?id=UK071.52" id="03" class="btn  pull-right  btn20 " style="background: #228b22;  border-radius:5px;">Place <i class="material-icons" >double_arrow</i></a>
                 </h4> 
                 <script>
                function myFunction() {
                setInterval(function(){ 
                const now=new Date();
             	const hou=now.getHours();
             	const minu=now.getMinutes();
                if(hou>03){
                 document.getElementById("caard4").style.visibility = "hidden";
                document.getElementById("card4").style.visibility = "visible";
                document.getElementById("03").style.visibility = "hidden";	
                document.getElementById("cardbtn4").style.backgroundColor = "#808080";
                document.getElementById("lock4").style.visibility = "visible";
                document.getElementById("exp4").style.visibility = "hidden";
                }
                else if(hou==03){
                if(minu>=58){
                document.getElementById("caard4").style.visibility = "visible";
                document.getElementById("card4").style.visibility = "hidden";
                document.getElementById("03").style.display="none"; 
                document.getElementById("lock4").style.visibility = "hidden";

                }
               else{
                     document.getElementById("caard4").style.visibility = "hidden";
                     document.getElementById("card4").style.visibility = "hidden";
                     document.getElementById("lock4").style.visibility = "hidden";

                  }
                }
                     else{
                     document.getElementById("caard4").style.visibility = "hidden";
                     document.getElementById("card4").style.visibility = "hidden";
                     document.getElementById("lock4").style.visibility = "hidden";

                     
                    }
                },10);
               
                }
                myFunction();

                   </script>
<p class="card-category"><pre><b class="det" style="color:green;"><b id="exp4">Exposure :  <?php echo"$sum";?> </b> P/L: <?php echo"$exp";?>      </b></pre><pre id="lock4" style="margin-bottom:-25px;"><b>Game Locked !          Winning Card  </b></pre></p>
                </div>
                <div class="card-body" id="card1" >
                  <div class="table-responsive">
        
                  </div>
                </div>
              </div>
            </div>
             <div class="col-md-12" style="margin-top:-40px;">
                 <?php
              $sesid="04:00-05:00";
              $query8="Select SUM(chips) AS chips_sum from report where username='$name2'AND session='$sesid' AND date='$date' ";
              $result8 = mysqli_query($con, $query8);
              $row8 = mysqli_fetch_array($result8);
              $sum = $row8['chips_sum'];
              
              $result12 = mysqli_query($con, "Select SUM(proloss) AS prol from report where username='$name2' AND session='$sesid' AND date='$date' AND proloss > 0 ");
                 $row12 = mysqli_fetch_assoc($result12);   
                 $pro = $row12['prol'];
              $exp=$pro-$sum;
              
               date_default_timezone_set('Asia/Kolkata');
              $date=date('d/m/Y');
              $query9="Select win_card from hour_result where date='$date' AND session='$sesid' ";
              $result9 = mysqli_query($con, $query9);
              $row9 = mysqli_fetch_array($result9);
              $win = $row9['win_card'];
              $gif4=substr($win,0,-4);
              ?>
              <div class="card" style=" color:black; background-color:black">
                <div class="card-header card-header-primary" id="cardbtn5" style=" border-style: solid;
   border-color:gold;">
                  <h4 class="card-title "><b  class="bet"> Game 04:00-05:00</b><a ><img src="wait.png" style="margin-left:70px; position:absolute" id="caard5"height="50px" width="40px"></a><a href="#modal2" data-toggle="modal" data-id="5" data-name="card5" onclick="myFunction('<?php echo $gif4;?>')"><img src="<?php echo $win;?>" style="margin-left:70px; position:absolute" id="card5" height="50px" width="40px"/></a><a type="submit" href="dashboard4.php?id=UK089.40" id="04" class="btn btn-success pull-right  btn20 "style="background: #228b22;  border-radius:5px;">Place <i class="material-icons" >double_arrow</i></a>
                 </h4> 
                 <script>
                function myFunction() {
                setInterval(function(){ 
                const now=new Date();
             	const hou=now.getHours();
             	const minu=now.getMinutes();
                if(hou>04){
                 document.getElementById("caard5").style.visibility = "hidden";
                document.getElementById("card5").style.visibility = "visible";
                document.getElementById("04").style.visibility = "hidden";	
                document.getElementById("cardbtn5").style.backgroundColor = "#808080";
                document.getElementById("lock5").style.visibility = "visible";
                     document.getElementById("exp5").style.visibility = "hidden";
                }
                else if(hou==04){
                if(minu>=58){
                document.getElementById("caard5").style.visibility = "visible";
                document.getElementById("card5").style.visibility = "hidden";
                document.getElementById("04").style.display="none";
                document.getElementById("lock5").style.visibility = "hidden";

                }
               else{
                     document.getElementById("caard5").style.visibility = "hidden";
                     document.getElementById("card5").style.visibility = "hidden";
                     document.getElementById("lock5").style.visibility = "hidden";

                  }
                }
                     else{
                     document.getElementById("caard5").style.visibility = "hidden";
                     document.getElementById("card5").style.visibility = "hidden";
                     document.getElementById("lock5").style.visibility = "hidden";

                     
                    }
                },10);
               
                }
                myFunction();

                   </script>
<p class="card-category"><pre><b class="det" style="color:green;"><b id="exp5">Exposure :  <?php echo"$sum";?> </b> P/L: <?php echo"$exp";?>          </b></pre><pre id="lock5" style="margin-bottom:-25px;"><b>Game Locked !          Winning Card </b></pre></p>
                </div>
                <div class="card-body" id="card1" >
                  <div class="table-responsive">
        
                  </div>
                </div>
              </div>
            </div>
              <div class="col-md-12" style="margin-top:-40px;">
                  <?php
              $sesid="05:00-06:00";
              $query8="Select SUM(chips) AS chips_sum from report where username='$name2'AND session='$sesid' AND date='$date' ";
              $result8 = mysqli_query($con, $query8);
              $row8 = mysqli_fetch_array($result8);
              $sum = $row8['chips_sum'];
               $result12 = mysqli_query($con, "Select SUM(proloss) AS prol from report where username='$name2' AND session='$sesid' AND date='$date' AND proloss > 0 ");
                 $row12 = mysqli_fetch_assoc($result12);   
                 $pro = $row12['prol'];
              $exp=$pro-$sum;
               date_default_timezone_set('Asia/Kolkata');
              $date=date('d/m/Y');
              $query9="Select win_card from hour_result where date='$date' AND session='$sesid' ";
              $result9 = mysqli_query($con, $query9);
              $row9 = mysqli_fetch_array($result9);
              $win = $row9['win_card'];
              $gif5=substr($win,0,-4);
              ?>
              <div class="card" style=" color:black; background-color:black">
                <div class="card-header card-header-primary" id="cardbtn6" style=" border-style: solid;
   border-color:gold;">
                  <h4 class="card-title "><b  class="bet"> Game 05:00-06:00</b><a ><img src="wait.png" style="margin-left:70px; position:absolute" id="caard6"height="50px" width="40px"></a><a href="#modal2" data-toggle="modal" data-id="5" data-name="card5" onclick="myFunction('<?php echo $gif5;?>')" ><img src="<?php echo "$win";?>" style="margin-left:70px; position:absolute" id="card6" height="50px" width="40px"/></a><a type="submit" href="dashboard4.php?id=UK107.28" id="05" class="btn btn-success pull-right  btn20 "style="background: #228b22;  border-radius:5px;">Place <i class="material-icons" >double_arrow</i></a>
                 </h4> 
                 <script>
                function myFunction() {
                setInterval(function(){ 
                const now=new Date();
             	const hou=now.getHours();
             	const minu=now.getMinutes();
                if(hou>05){
                 document.getElementById("caard6").style.visibility = "hidden";
                document.getElementById("card6").style.visibility = "visible";
                document.getElementById("05").style.visibility = "hidden";
                document.getElementById("cardbtn6").style.backgroundColor = "#808080";
                document.getElementById("lock6").style.visibility = "visible";
                document.getElementById("exp6").style.visibility = "hidden";
                }
                else if(hou==05){
                if(minu>=58){
                document.getElementById("caard6").style.visibility = "visible";
                document.getElementById("card6").style.visibility = "hidden";
                document.getElementById("05").style.display="none"; 	
                document.getElementById("lock6").style.visibility = "hidden";

                }
               else{
                     document.getElementById("caard6").style.visibility = "hidden";
                     document.getElementById("card6").style.visibility = "hidden";
                     document.getElementById("lock6").style.visibility = "hidden";

                  }
                }
                     else{
                     document.getElementById("caard6").style.visibility = "hidden";
                     document.getElementById("card6").style.visibility = "hidden";
                     document.getElementById("lock6").style.visibility = "hidden";

                     
                    }
                },10);
               
                }
                myFunction();

                   </script>

               <p class="card-category"><pre id="pre1"><b class="det" style="color:green;"><b id="exp6">Exposure :  <?php echo"$sum";?> </b>P/L: <?php echo"$exp";?>          </b></pre><pre id="lock6" style="margin-bottom:-25px;"><b>Game Locked !          Winning Card  </b></pre></b></p>
                </div>
                <div class="card-body" id="card1" >
                  <div class="table-responsive">
        
                  </div>
                </div>
              </div>
            </div>
           <div class="col-md-12" style="margin-top:-40px;">
               <?php
              $sesid="06:00-07:00";
              $query8="Select SUM(chips) AS chips_sum from report where username='$name2'AND session='$sesid' AND date='$date' ";
              $result8 = mysqli_query($con, $query8);
              $row8 = mysqli_fetch_array($result8);
              $sum = $row8['chips_sum'];
               
              $result12 = mysqli_query($con, "Select SUM(proloss) AS prol from report where username='$name2' AND session='$sesid' AND date='$date' AND proloss > 0 ");
                 $row12 = mysqli_fetch_assoc($result12);   
                 $pro = $row12['prol'];
              $exp=$pro-$sum;
            //   $query12="Select SUM(proloss) AS prol from report where username='$name2'AND session='$sesid' AND date='$date' ";
            //   $result12 = mysqli_query($con, $query12);
            //   $row12 = mysqli_fetch_array($result12);
            //   $pro = $row12['prol'];
              
               date_default_timezone_set('Asia/Kolkata');
              $date=date('d/m/Y');
              $query9="Select win_card from hour_result where date='$date' AND session='$sesid' ";
              $result9 = mysqli_query($con, $query9);
              $row9 = mysqli_fetch_array($result9);
              $win = $row9['win_card'];
             
              $gif6=substr($win,0,-4);
              ?>
              <div class="card" style=" color:black; background-color:black">
                <div class="card-header card-header-primary" id="cardbtn7" style=" border-style: solid;
   border-color:gold;">
                  <h4 class="card-title "><b  class="bet"> Game 06:00-07:00</b><a ><img src="wait.png" style="margin-left:70px; position:absolute" id="caard7"height="50px" width="40px"></a><a href="#modal2" data-toggle="modal" data-id="5" data-name="card5" onclick="myFunction('<?php echo $gif6;?>')" ><img src="<?php echo "$win";?>"  style="margin-left:70px; position:absolute" id="card7" height="50px" width="40px"/></a><a type="submit" href="dashboard4.php?id=UK125.16" id="06" class="btn btn-success pull-right  btn20 "style="background: #228b22;  border-radius:5px;">Place <i class="material-icons" >double_arrow</i></a>
                 </h4> 
                 <script>
                function myFunction() {
                setInterval(function(){ 
                const now=new Date();
             	const hou=now.getHours();
             	const minu=now.getMinutes();
                if(hou>06){
                 document.getElementById("cardbtn7").style.backgroundColor = "#808080";
                 document.getElementById("caard7").style.visibility = "hidden";
                 document.getElementById("card7").style.visibility = "visible";
                 document.getElementById("06").style.visibility = "hidden";	
                 document.getElementById("lock7").style.visibility = "visible";
                 document.getElementById("exp7").style.visibility = "hidden";
                }
                else if(hou==06){
                if(minu>=58){
                document.getElementById("caard7").style.visibility = "visible";
                document.getElementById("card7").style.visibility = "hidden";
                document.getElementById("06").style.display="none"; 
                document.getElementById("lock7").style.visibility = "visible";

                }
               else{
                     document.getElementById("caard7").style.visibility = "hidden";
                     document.getElementById("card7").style.visibility = "hidden";
                     document.getElementById("lock7").style.visibility = "hidden";

                  }
                }
                 else
                     {
                     document.getElementById("caard7").style.visibility = "hidden";
                     document.getElementById("card7").style.visibility = "hidden";
                     document.getElementById("lock7").style.visibility = "hidden";

                    }
                },10);
               
                }
                myFunction();

                   </script>

               <p class="card-category"><pre><b class="det" style="color:green;"><b id="exp7">Exposure :  <?php echo"$sum";?> </b> P/L: <?php echo"$exp";?>            </b></pre><pre id="lock7" style="margin-bottom:-25px;"><b>Game Locked !          Winning Card  </b></pre></p>
                </div>
                <div class="card-body" id="card1" >
                  <div class="table-responsive">
        
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-12" style="margin-top:-40px;">
                <?php
              $sesid="07:00-08:00";
              $query8="Select SUM(chips) AS chips_sum from report where username='$name2'AND session='$sesid' AND date='$date' ";
              $result8 = mysqli_query($con, $query8);
              $row8 = mysqli_fetch_array($result8);
              $sum = $row8['chips_sum'];
              
              $result12 = mysqli_query($con, "Select SUM(proloss) AS prol from report where username='$name2' AND session='$sesid' AND date='$date' AND proloss > 0 ");
                 $row12 = mysqli_fetch_assoc($result12);   
                 $pro = $row12['prol'];
              $exp=$pro-$sum;
              
               date_default_timezone_set('Asia/Kolkata');
              $date=date('d/m/Y');
              $query9="Select win_card from hour_result where date='$date' AND session='$sesid' ";
              $result9 = mysqli_query($con, $query9);
              $row9 = mysqli_fetch_array($result9);
              $win = $row9['win_card'];
              $gif7=substr($win,0,-4);
              ?>
              <div class="card"style=" color:black; background-color:black">
                <div class="card-header card-header-primary" id="cardbtn8" style=" border-style: solid;
   border-color:gold;">
                  <h4 class="card-title "><b  class="bet"> Game 07:00-08:00</b><a ><img src="wait.png" style="margin-left:70px; position:absolute" id="caard8"height="50px" width="40px"></a><a href="#modal2" data-toggle="modal" data-id="5" data-name="card5" onclick="myFunction('<?php echo $gif7;?>')" ><img src="<?php echo $win;?>" style="margin-left:70px; position:absolute" id="card8" height="50px" width="40px"/></a><a type="submit" href="dashboard4.php?id=UK143.04" id="07" class="btn btn-success pull-right  btn20 " style="background: #228b22;  border-radius:5px;">Place <i class="material-icons" >double_arrow</i></a>
                 </h4> 
                 <script>
                function myFunction() {
                setInterval(function(){ 
                const now=new Date();
             	const hou=now.getHours();
             	const minu=now.getMinutes();
                if(hou>07){
                 document.getElementById("caard8").style.visibility = "hidden";
                document.getElementById("card8").style.visibility = "visible";
                document.getElementById("07").style.visibility = "hidden";
                document.getElementById("lock8").style.visibility = "visible";
                document.getElementById("cardbtn8").style.backgroundColor = "#808080";
                 document.getElementById("exp8").style.visibility = "hidden";

                }
                else if(hou==07){
                if(minu>=58){
                document.getElementById("caard8").style.visibility = "visible";
                document.getElementById("card8").style.visibility = "hidden";
                document.getElementById("07").style.display="none"; 
                document.getElementById("lock8").style.visibility = "hidden";

                }
               else{
                     document.getElementById("caard8").style.visibility = "hidden";
                     document.getElementById("card8").style.visibility = "hidden";
                    document.getElementById("lock8").style.visibility = "hidden";

                  }
                }
                     else{
                     document.getElementById("caard8").style.visibility = "hidden";
                     document.getElementById("card8").style.visibility = "hidden";
                     document.getElementById("lock8").style.visibility = "hidden";

                     
                    }
                },10);
               
                }
                myFunction();

                   </script>

               <p class="card-category"><pre><b class="det" style="color:green;"><b id="exp8">Exposure :  <?php echo"$sum";?> </b> P/L: <?php echo"$exp";?>     </b></pre><pre id="lock8" style="margin-bottom:-25px;"> <b>Game Locked !          Winning Card </b> </pre></p>
                </div>
                <div class="card-body" id="card1" >
                  <div class="table-responsive">
        
                  </div>
                </div>
              </div>
            </div>
                             
           <div class="col-md-12" style="margin-top:-40px;">
               <?php
              $sesid="08:00-09:00";
              $query8="Select SUM(chips) AS chips_sum from report where username='$name2'AND session='$sesid' AND date='$date' ";
              $result8 = mysqli_query($con, $query8);
              $row8 = mysqli_fetch_array($result8);
              $sum = $row8['chips_sum'];
              
              $result12 = mysqli_query($con, "Select SUM(proloss) AS prol from report where username='$name2' AND session='$sesid' AND date='$date' AND proloss > 0 ");
                 $row12 = mysqli_fetch_assoc($result12);   
                 $pro = $row12['prol'];
              $exp=$pro-$sum;
              
               date_default_timezone_set('Asia/Kolkata');
              $date=date('d/m/Y');
              $query9="Select win_card from hour_result where date='$date' AND session='$sesid' ";
              $result9 = mysqli_query($con, $query9);
              $row9 = mysqli_fetch_array($result9);
              $win = $row9['win_card'];
              $gif8=substr($win,0,-4);
              ?>
              <div class="card" style=" color:black; background-color:black">
                <div class="card-header card-header-primary" id="cardbtn9" style=" border-style: solid;
   border-color:gold;">
                  <h4 class="card-title "><b  class="bet"> Game 08:00-09:00</b><a ><img src="wait.png" style="margin-left:70px; position:absolute" id="caard9"height="50px" width="40px"></a><a href="#modal2" data-toggle="modal" data-id="5" data-name="card5" onclick="myFunction('<?php echo $gif8;?>')"><img src="<?php echo $win;?>" style="margin-left:70px; position:absolute" id="card9" height="50px" width="40px"/></a><a type="submit" href="dashboard4.php?id=UK160.92" class="btn btn-success pull-right  btn20 " id="08" style="background: #228b22;  border-radius:15px;">Place <i class="material-icons" >double_arrow</i></a>
                 </h4> 
                 <script>
                function myFunction() {
                setInterval(function(){ 
                const now=new Date();
             	const hou=now.getHours();
             	const minu=now.getMinutes();
                if(hou>08){
                 document.getElementById("cardbtn9").style.backgroundColor = "#808080";
                 document.getElementById("caard9").style.visibility = "hidden";
                document.getElementById("card9").style.visibility = "visible";
                document.getElementById("08").style.visibility = "hidden";	
                document.getElementById("lock9").style.visibility = "visible";
                document.getElementById("exp9").style.visibility = "hidden";

                }
                else if(hou==08){
                if(minu>=58){
                document.getElementById("caard9").style.visibility = "visible";
                document.getElementById("card9").style.visibility = "hidden";
                document.getElementById("08").style.display="none"; 
                document.getElementById("lock9").style.visibility = "hidden";

                }
               else{
                     document.getElementById("caard9").style.visibility = "hidden";
                     document.getElementById("card9").style.visibility = "hidden";
                     document.getElementById("lock9").style.visibility = "hidden";
                     
                  }
                }
                     else{
                     document.getElementById("caard9").style.visibility = "hidden";
                     document.getElementById("card9").style.visibility = "hidden";
                     document.getElementById("lock9").style.visibility = "hidden";
                     
                    }
                },10);
               
                }
                myFunction();

                   </script>

              <p class="card-category"><pre><b class="det" style="color:green;"><b id="exp9">Exposure :  <?php echo"$sum";?> </b> P/L: <?php echo"$exp";?>          </b></pre><pre id="lock9" style="margin-bottom:-25px;"><b>Game Locked !          Winning Card  </b></pre></p>
                </div>
                <div class="card-body" id="card1" >
                  <div class="table-responsive">
        
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12" style="margin-top:-40px;" >
                <?php
              $sesid="09:00-10:00";
              $query8="Select SUM(chips) AS chips_sum from report where username='$name2'AND session='$sesid' AND date='$date' ";
              $result8 = mysqli_query($con, $query8);
              $row8 = mysqli_fetch_array($result8);
              $sum = $row8['chips_sum'];
              $result12 = mysqli_query($con, "Select SUM(proloss) AS prol from report where username='$name2' AND session='$sesid' AND date='$date' AND proloss > 0 ");
                 $row12 = mysqli_fetch_assoc($result12);   
                 $pro = $row12['prol'];
              $exp=$pro-$sum;
              
               date_default_timezone_set('Asia/Kolkata');
              $date=date('d/m/Y');
              $query9="Select win_card from hour_result where date='$date' AND session='$sesid' ";
              $result9 = mysqli_query($con, $query9);
              $row9 = mysqli_fetch_array($result9);
              $win = $row9['win_card'];
              $gif9=substr($win,0,-4);
              ?>
              <div class="card" style=" color:black; background-color:black">
                <div class="card-header card-header-primary" id="cardbtn10" style=" border-style: solid;
   border-color:gold;">
                  <h4 class="card-title " ><b  class="bet"> Game 09:00-10:00</b><a ><img src="wait.png" style="margin-left:70px; position:absolute" id="caard10" height="50px" width="40px"></a><a href="#modal2" data-toggle="modal" data-id="5" data-name="card5" onclick="myFunction('<?php echo $gif9;?>')"><img src="<?php echo $win;?>" style="margin-left:70px; position:absolute" id="card10" height="50px" width="40px"/></a><a type="submit" href="dashboard4.php?id=UK178.80" id="09" class="btn btn-success pull-right  btn20 " style="background: #228b22;  border-radius:10px;">Place <i class="material-icons" >double_arrow</i></a>
                 </h4> 
                 <script>
                function myFunction() {
                setInterval(function(){ 
                const now=new Date();
             	const hou=now.getHours();
             	const minu=now.getMinutes();
                if(hou>09){
                document.getElementById("cardbtn10").style.backgroundColor = "#808080";
                document.getElementById("caard10").style.visibility = "hidden";
                document.getElementById("card10").style.visibility = "visible";
                document.getElementById("09").style.visibility = "hidden";
                document.getElementById("lock10").style.visibility = "visible";
                document.getElementById("exp10").style.visibility = "hidden";
                }
                else if(hou==09){
                if(minu>=58){
                document.getElementById("caard10").style.visibility = "visible";
                document.getElementById("card10").style.visibility = "hidden";
                document.getElementById("09").style.display="none"; 	
                document.getElementById("lock10").style.visibility = "hidden";
                }
               else{
                     document.getElementById("caard10").style.visibility = "hidden";
                     document.getElementById("card10").style.visibility = "hidden";
                     document.getElementById("lock10").style.visibility = "hidden";
                   
               }
                }
                     else{
                     document.getElementById("caard10").style.visibility = "hidden";
                     document.getElementById("card10").style.visibility = "hidden";
                     document.getElementById("lock10").style.visibility = "hidden";
                     
                    }
                },10);
               
                }
                myFunction();

                   </script>
              <p class="card-category"><pre><b class="det" style="color:green;"><b id="exp10">Exposure :  <?php echo"$sum";?> </b> P/L: <?php echo"$exp";?>          </b></pre><pre id="lock10" style="margin-bottom:-25px;"><b>Game Locked !          Winning Card </b> </pre></p>
                </div>
                <div class="card-body" id="card1" >
                  <div class="table-responsive">
        
                  </div>
                </div>
              </div>
            </div>
                  <div class="col-md-12" style="margin-top:-40px;">
                      <?php
              $sesid="10:00-11:00";
              $query8="Select SUM(chips) AS chips_sum from report where username='$name2'AND session='$sesid' AND date='$date' ";
              $result8 = mysqli_query($con, $query8);
              $row8 = mysqli_fetch_array($result8);
              $sum = $row8['chips_sum'];
               $result12 = mysqli_query($con, "Select SUM(proloss) AS prol from report where username='$name2' AND session='$sesid' AND date='$date' AND proloss > 0 ");
                 $row12 = mysqli_fetch_assoc($result12);   
                 $pro = $row12['prol'];
              $exp=$pro-$sum;
              
               date_default_timezone_set('Asia/Kolkata');
              $date=date('d/m/Y');
              $query9="Select win_card from hour_result where date='$date' AND session='$sesid' ";
              $result9 = mysqli_query($con, $query9);
              $row9 = mysqli_fetch_array($result9);
              $win = $row9['win_card'];
              $gif10=substr($win,0,-4);
              ?>
              <div class="card" style=" color:black; background-color:black">
                <div class="card-header card-header-primary" id="cardbtn11" style=" border-style: solid;
   border-color:gold;">
                  <h4 class="card-title "><b  class="bet"> Game 10:00-11:00</b> <a ><img src="wait.png" style="margin-left:70px; position:absolute" id="caard11"height="50px" width="40px"></a><a href="#modal2" data-toggle="modal" data-id="5" data-name="card5" onclick="myFunction('<?php echo $gif10;?>')"><img src="<?php echo $win;?>" style="margin-left:70px; position:absolute" id="card11" height="50px" width="40px"/></a><a type="submit" href="dashboard4.php?id=UK196.68" class="btn btn-success pull-right  btn20 " id="10" style="background: #228b22;  border-radius:5px;">Place <i class="material-icons" >double_arrow</i></a>
                 </h4> 
                 <script>
                function myFunction() {
                setInterval(function(){ 
                const now=new Date();
             	const hou=now.getHours();
             	const minu=now.getMinutes();
                if(hou>10){
                document.getElementById("cardbtn11").style.backgroundColor = "#808080";
                 document.getElementById("caard11").style.visibility = "hidden";
                document.getElementById("card11").style.visibility = "visible";
                document.getElementById("10").style.visibility = "hidden";	
                document.getElementById("lock11").style.visibility = "visible";
                document.getElementById("exp11").style.visibility = "hidden";
                    
                }
                else if(hou==10){
                if(minu>=58){
                document.getElementById("caard11").style.visibility = "visible";
                document.getElementById("card11").style.visibility = "hidden";
                document.getElementById("10").style.display="none"; 
                document.getElementById("lock11").style.visibility = "hidden";
                
                }
               else{
                     document.getElementById("caard11").style.visibility = "hidden";
                     document.getElementById("card11").style.visibility = "hidden";
                     document.getElementById("lock11").style.visibility = "hidden";
                  }
                }
                     else{
                     document.getElementById("caard11").style.visibility = "hidden";
                     document.getElementById("card11").style.visibility = "hidden";
                     document.getElementById("lock11").style.visibility = "hidden";
                     
                    }
                },10);
               
                }
                myFunction();

                   </script>
               <p class="card-category"><pre><b class="det" style="color:green;"><b id="exp11">Exposure :  <?php echo"$sum";?> </b> P/L: <?php echo"$exp";?>            </b></pre><pre id="lock11" style="margin-bottom:-25px;"><b>Game Locked !          Winning Card </b> </pre></p>
                </div>
                <div class="card-body" id="card1" >
                  <div class="table-responsive">
        
                  </div>
                </div>
              </div>
            </div>
                  <div class="col-md-12" style="margin-top:-40px;">
                      <?php
              $sesid="11:00-12:00";
              $query8="Select SUM(chips) AS chips_sum from report where username='$name2'AND session='$sesid' AND date='$date' ";
              $result8 = mysqli_query($con, $query8);
              $row8 = mysqli_fetch_array($result8);
              $sum = $row8['chips_sum'];
              $result12 = mysqli_query($con, "Select SUM(proloss) AS prol from report where username='$name2' AND session='$sesid' AND date='$date' AND proloss > 0 ");
                 $row12 = mysqli_fetch_assoc($result12);   
                 $pro = $row12['prol'];
              $exp=$pro-$sum;
              date_default_timezone_set('Asia/Kolkata');
              $date=date('d/m/Y');
              $query9="Select win_card from hour_result where date='$date' AND session='$sesid' ";
              $result9 = mysqli_query($con, $query9);
              $row9 = mysqli_fetch_array($result9);
              $win = $row9['win_card'];
              $gif11=substr($win,0,-4);
              ?>
              <div class="card" style=" color:black; background-color:black">
                <div class="card-header card-header-primary" id="cardbtn12" style=" border-style: solid;
   border-color:gold;">
                  <h4 class="card-title "><b  class="bet"> Game 11:00-12:00</b><a ><img src="wait.png" style="margin-left:70px; position:absolute" id="caard12"height="50px" width="40px"></a><a href="#modal2" data-toggle="modal" data-id="5" data-name="card5" onclick="myFunction('<?php echo $gif11;?>')" ><img src="<?php echo $win;?>" style="margin-left:70px; position:absolute" id="card12" height="50px" width="40px"/></a><a type="submit" href="dashboard4.php?id=UK214.56" class="btn btn-success pull-right  btn20 " id="11" style="background: #228b22;  border-radius:5px;">Place <i class="material-icons" >double_arrow</i></a>
                 </h4> 
                 <script>
                function myFunction() {
                setInterval(function(){ 
                const now=new Date();
             	const hou=now.getHours();
             	const minu=now.getMinutes();
                if(hou>11){
                document.getElementById("cardbtn12").style.backgroundColor = "#808080";
                 document.getElementById("caard12").style.visibility = "hidden";
                document.getElementById("card12").style.visibility = "visible";
                document.getElementById("11").style.visibility = "hidden";	
                document.getElementById("lock12").style.visibility = "visible";
                document.getElementById("exp12").style.visibility = "hidden";
                }
                else if(hou==11){
                if(minu>=58){
                document.getElementById("caard12").style.visibility = "visible";
                document.getElementById("card12").style.visibility = "hidden";
                document.getElementById("11").style.display="none"; 	
                document.getElementById("lock12").style.visibility = "hidden";
                }
               else{
                     document.getElementById("caard12").style.visibility = "hidden";
                     document.getElementById("card12").style.visibility = "hidden";
                     document.getElementById("lock12").style.visibility = "hidden";
                  }
                }
                     else{
                     document.getElementById("caard12").style.visibility = "hidden";
                     document.getElementById("card12").style.visibility = "hidden";
                     document.getElementById("lock12").style.visibility = "hidden";
                    }
                },10);
               
                }
                myFunction();

                   </script>
                 
               <p class="card-category"><pre><b class="det" style="color:green;"><b id="exp12">Exposure :  <?php echo"$sum";?> </b>  P/L: <?php echo"$exp";?>           </b></pre><pre id="lock12" style="margin-bottom:-25px;"><b>Game Locked !          Winning Card </b> </pre></p>
                </div>
                <div class="card-body" id="card1" >
                  <div class="table-responsive">
        
                  </div>
                </div>
              </div>
            </div>
                  <div class="col-md-12" style="margin-top:-40px;">
                      <?php
              $sesid="12:00-13:00";
              $query8="Select SUM(chips) AS chips_sum from report where username='$name2'AND session='$sesid' AND date='$date' ";
              $result8 = mysqli_query($con, $query8);
              $row8 = mysqli_fetch_array($result8);
              $sum = $row8['chips_sum'];
                $result12 = mysqli_query($con, "Select SUM(proloss) AS prol from report where username='$name2' AND session='$sesid' AND date='$date' AND proloss > 0 ");
                 $row12 = mysqli_fetch_assoc($result12);   
                 $pro = $row12['prol'];
              $exp=$pro-$sum;
               date_default_timezone_set('Asia/Kolkata');
              $date=date('d/m/Y');
              $query9="Select win_card from hour_result where date='$date' AND session='$sesid' ";
              $result9 = mysqli_query($con, $query9);
              $row9 = mysqli_fetch_array($result9);
              $win = $row9['win_card'];
              $gif12=substr($win,0,-4);
              ?>
              <div class="card" style=" color:black; background-color:black">
                <div class="card-header card-header-primary" id="cardbtn13" style=" border-style: solid;
                border-color:gold;">
                  <h4 class="card-title "><b  class="bet"> Game 12:00-13:00</b><a ><img src="wait.png" style="margin-left:70px; position:absolute" id="caard13"height="50px" width="40px"></a><a href="#modal2" data-toggle="modal" data-id="5" data-name="card5" onclick="myFunction('<?php echo $gif12;?>')" ><img src="<?php echo $win;?>" style="margin-left:70px; position:absolute" id="card13" height="50px" width="40px"/></a><a type="submit" href="dashboard4.php?id=UK232.44" class="btn btn-success pull-right  btn20 " id="12" style="background: #228b22;  border-radius:5px;">Place <i class="material-icons" >double_arrow</i></a>
                 </h4> 
                 <script>
                function myFunction() {
                setInterval(function(){ 
                const now=new Date();
             	const hou=now.getHours();
             	const minu=now.getMinutes();
                if(hou>12){
                document.getElementById("cardbtn13").style.backgroundColor = "#808080";
                 document.getElementById("caard13").style.visibility = "hidden";
                document.getElementById("card13").style.visibility = "visible";
                document.getElementById("12").style.visibility = "hidden";	
                document.getElementById("lock13").style.visibility = "visible";
                document.getElementById("exp13").style.visibility = "hidden";
                
                }
                else if(hou==12){
                if(minu>=58){
                document.getElementById("caard13").style.visibility = "visible";
                document.getElementById("card13").style.visibility = "hidden";
                document.getElementById("12").style.display="none"; 
                document.getElementById("lock13").style.visibility = "hidden";
                }
                 else{
                     document.getElementById("caard13").style.visibility = "hidden";
                     document.getElementById("card13").style.visibility = "hidden";
                     document.getElementById("lock13").style.visibility = "hidden";
                  }
               
                }
                     else{
                     document.getElementById("caard13").style.visibility = "hidden";
                     document.getElementById("card13").style.visibility = "hidden";
                     document.getElementById("lock13").style.visibility = "hidden";
                     
                    }
                },10);
               
                }
                myFunction();

                   </script>

               <p class="card-category"><pre><b class="det" style="color:green;"><b id="exp13">Exposure :  <?php echo"$sum";?> </b> P/L: <?php echo $exp;?>        </b></pre><pre id="lock13" style="margin-bottom:-25px;"><b>Game Locked !          Winning Card </b> </pre></p>
                </div>
                <div class="card-body" id="card1" >
                  <div class="table-responsive">
        
                  </div>
                </div>
              </div>
            </div>
                  <div class="col-md-12" style="margin-top:-40px;">
                      <?php
              $sesid="13:00-14:00";
              $query8="Select SUM(chips) AS chips_sum from report where username='$name2'AND session='$sesid' AND date='$date' ";
              $result8 = mysqli_query($con, $query8);
              $row8 = mysqli_fetch_array($result8);
              $sum = $row8['chips_sum'];
               
              $result12 = mysqli_query($con, "Select SUM(proloss) AS prol from report where username='$name2' AND session='$sesid' AND date='$date' AND proloss > 0 ");
                 $row12 = mysqli_fetch_assoc($result12);   
                 $pro = $row12['prol'];
              $exp=$pro-$sum;
              
               date_default_timezone_set('Asia/Kolkata');
              $date=date('d/m/Y');
              $query9="Select win_card from hour_result where date='$date' AND session='$sesid' ";
              $result9 = mysqli_query($con, $query9);
              $row9 = mysqli_fetch_array($result9);
              $win = $row9['win_card'];
              $gif13=substr($win,0,-4);
              ?>
              <div class="card" style=" color:black; background-color:black">
                <div class="card-header card-header-primary" id="cardbtn14" style=" border-style: solid;
   border-color:gold;">
                  <h4 class="card-title "><b  class="bet"> Game 13:00-14:00</b><a ><img src="wait.png" style="margin-left:70px; position:absolute" id="caard14"height="50px" width="40px"></a><a href="#modal2" data-toggle="modal" data-id="5" data-name="card5" onclick="myFunction('<?php echo $gif13;?>')" ><img src="<?php echo $win;?>" style="margin-left:70px; position:absolute" id="card14" height="50px" width="40px"/></a><a type="submit" href="dashboard4.php?id=UK250.32" class="btn btn-success pull-right  btn20 " id="13" style="background: #228b22;  border-radius:5px;">Place <i class="material-icons" >double_arrow</i></a>
                 </h4> 
                 <script>
                function myFunction() {
                setInterval(function(){ 
                const now=new Date();
             	const hou=now.getHours();
             	const minu=now.getMinutes();
                if(hou>13){
                document.getElementById("cardbtn14").style.backgroundColor = "#808080";
                 document.getElementById("caard14").style.visibility = "hidden";
                document.getElementById("card14").style.visibility = "visible";
                document.getElementById("13").style.visibility = "hidden";
                document.getElementById("lock14").style.visibility = " visible";
                document.getElementById("exp14").style.visibility = "hidden";
                
                }
                else if(hou==13){
                if(minu>=58){
                document.getElementById("caard14").style.visibility = "visible";
                document.getElementById("card14").style.visibility = "hidden";
                document.getElementById("13").style.display="none"; 	
                document.getElementById("lock14").style.visibility = "hidden";
                    
                }
                  else{
                     document.getElementById("caard14").style.visibility = "hidden";
                     document.getElementById("card14").style.visibility = "hidden";
                     document.getElementById("lock14").style.visibility = "hidden";
                  }
               
                }
                     else{
                     document.getElementById("caard14").style.visibility = "hidden";
                     document.getElementById("card14").style.visibility = "hidden";
                     document.getElementById("lock14").style.visibility = "hidden";
                    }
                },10);
               
                }
                myFunction();

                   </script>
                 
               <p class="card-category"><pre><b class="det" style="color:green;"><b id="exp14">Exposure : <?php echo"$sum";?> </b> P/L: <?php echo"$exp";?>         </b></pre><pre id="lock14" style="margin-bottom:-25px;"><b>Game Locked !          Winning Card  </b></pre></p>
                </div>
                <div class="card-body" id="card1" >
                  <div class="table-responsive">
        
                  </div>
                </div>
              </div>
            </div>
                  <div class="col-md-12" style="margin-top:-40px;">
                      <?php
              $sesid="14:00-15:00";
              $query8="Select SUM(chips) AS chips_sum from report where username='$name2'AND session='$sesid' AND date='$date' ";
              $result8 = mysqli_query($con, $query8);
              $row8 = mysqli_fetch_array($result8);
              $sum = $row8['chips_sum'];
               $result12 = mysqli_query($con, "Select SUM(proloss) AS prol from report where username='$name2' AND session='$sesid' AND date='$date' AND proloss > 0 ");
                 $row12 = mysqli_fetch_assoc($result12);   
                 $pro = $row12['prol'];
              $exp=$pro-$sum;
              
               date_default_timezone_set('Asia/Kolkata');
              $date=date('d/m/Y');
              $query9="Select win_card from hour_result where date='$date' AND session='$sesid' ";
              $result9 = mysqli_query($con, $query9);
              $row9 = mysqli_fetch_array($result9);
              $win = $row9['win_card'];
              $gif14=substr($win,0,-4);
              ?>
              <div class="card" style=" color:black; background-color:black">
                <div class="card-header card-header-primary" id="cardbtn15" style=" border-style: solid;
   border-color:gold;">
                  <h4 class="card-title "><b  class="bet"> Game 14:00-15:00</b><a ><img src="wait.png" style="margin-left:70px; position:absolute" id="caard15"height="50px" width="40px"></a><a href="#modal2" data-toggle="modal" data-id="5" data-name="card5" onclick="myFunction('<?php echo $gif14;?>')"><img src="<?php echo $win;?>" style="margin-left:70px; position:absolute" id="card15" height="50px" width="40px"/></a><a type="submit" href="dashboard4.php?id=UK268.20" id="14" class="btn btn-success pull-right  btn20 "style="background: #228b22;  border-radius:5px;">Place <i class="material-icons" >double_arrow</i></a>
                 </h4> 
                 <script>
                function myFunction() {
                setInterval(function(){ 
                const now=new Date();
             	const hou=now.getHours();
             	const minu=now.getMinutes();
                if(hou>14){
                    document.getElementById("cardbtn15").style.backgroundColor ="#808080";
                 document.getElementById("caard15").style.visibility = "hidden";
                document.getElementById("card15").style.visibility = "visible";
                document.getElementById("14").style.visibility = "hidden";	
                document.getElementById("lock15").style.visibility = "visible";
                document.getElementById("exp15").style.visibility = "hidden";
                    
                }
                else if(hou==14){
                if(minu>=58){
                document.getElementById("caard15").style.visibility = "visible";
                document.getElementById("card15").style.visibility = "hidden";
                document.getElementById("14").style.display="none"; 	
                document.getElementById("lock15").style.visibility = "hidden";
                }
                else{
                     document.getElementById("caard15").style.visibility = "hidden";
                     document.getElementById("card15").style.visibility = "hidden";
                     document.getElementById("lock15").style.visibility = "hidden";
                  }
               
                }
                     else{
                     document.getElementById("caard15").style.visibility = "hidden";
                     document.getElementById("card15").style.visibility = "hidden";
                     document.getElementById("lock15").style.visibility = "hidden";
                    }
                },10);
               
                }
                myFunction();

                   </script>
                 
              <p class="card-category"><pre><b class="det" style="color:green;"><b id="exp15">Exposure : <?php echo"$sum";?> </b> P/L: <?php echo"$exp";?>         </b></pre><pre id="lock15"  style="margin-bottom:-25px;"><b>Game Locked !          Winning Card  </b></pre></p>
                </div>
                <div class="card-body" id="card1" >
                  <div class="table-responsive">
        
                  </div>
                </div>
              </div>
            </div>
                  <div class="col-md-12" style="margin-top:-40px;">
                      <?php
              $sesid="15:00-16:00";
              $query8="Select SUM(chips) AS chips_sum from report where username='$name2'AND session='$sesid' AND date='$date' ";
              $result8 = mysqli_query($con, $query8);
              $row8 = mysqli_fetch_array($result8);
              $sum = $row8['chips_sum'];
               $result12 = mysqli_query($con, "Select SUM(proloss) AS prol from report where username='$name2' AND session='$sesid' AND date='$date' AND proloss < 0 ");
                 $row12 = mysqli_fetch_assoc($result12);   
                 $pro = $row12['prol'];
              $exp=$pro-$sum;
              
               date_default_timezone_set('Asia/Kolkata');
              $date=date('d/m/Y');
              $query9="Select win_card from hour_result where date='$date' AND session='$sesid' ";
              $result9 = mysqli_query($con, $query9);
              $row9 = mysqli_fetch_array($result9);
              $win = $row9['win_card'];
              $gif15=substr($win,0,-4);
              ?>
              <div class="card" style=" color:black; background-color:black">
                <div class="card-header card-header-primary" id="cardbtn16" style=" border-style: solid;
   border-color:gold;">
                  <h4 class="card-title "><b  class="bet"> Game 15:00-16:00</b><a ><img src="wait.png" style="margin-left:70px; position:absolute" id="caard16"height="50px" width="40px"></a><a href="#modal2" data-toggle="modal" data-id="5" data-name="card5" onclick="myFunction('<?php echo $gif15;?>')" ><img src="<?php echo $win;?>" style="margin-left:70px; position:absolute" id="card16" height="50px" width="40px"/></a><a type="submit" href="dashboard4.php?id=UK286.08" id="15" class="btn btn-success pull-right  btn20 " style="background: #228b22;  border-radius:5px;">Place <i class="material-icons" >double_arrow</i></a>
                 </h4>
                 <script>
                function myFunction() {
                setInterval(function(){ 
                const now=new Date();
             	const hou=now.getHours();
             	const minu=now.getMinutes();
                if(hou>15){
                document.getElementById("cardbtn16").style.backgroundColor = "#808080";    
                 document.getElementById("caard16").style.visibility = "hidden";
                document.getElementById("card16").style.visibility = "visible";
                document.getElementById("15").style.visibility = "hidden";
                document.getElementById("lock16").style.visibility = "visible";
                document.getElementById("exp16").style.visibility = "hidden";
                }
                else if(hou==15){
                if(minu>=58){
                document.getElementById("caard16").style.visibility = "visible";
                document.getElementById("card16").style.visibility = "hidden";
                document.getElementById("15").style.display="none"; 
                document.getElementById("lock16").style.visibility = "hidden";
                }
                else{
                     document.getElementById("caard16").style.visibility = "hidden";
                     document.getElementById("card16").style.visibility = "hidden";
                     document.getElementById("lock16").style.visibility = "hidden";
                  }
               
                }
                     else{
                     document.getElementById("caard16").style.visibility = "hidden";
                     document.getElementById("card16").style.visibility = "hidden";
                     document.getElementById("lock16").style.visibility = "hidden";
                     
                    }
                },10);
               
                }
                myFunction();

                   </script>
                 
              <p class="card-category"><pre><b class="det" style="color:green;"><b id="exp16">Exposure : <?php echo"$sum";?> </b> P/L: <?php echo"$exp";?>         </b></pre><pre id="lock16" style="margin-bottom:-25px;"><b>Game Locked !          Winning Card </b> </pre></p>
                </div>
                <div class="card-body" id="card1" >
                  <div class="table-responsive">
        
                  </div>
                </div>
              </div>
            </div>
                  <div class="col-md-12" style="margin-top:-40px;">
                      <?php
              $sesid="16:00-17:00";
              $query8="Select SUM(chips) AS chips_sum from report where username='$name2'AND session='$sesid' AND date='$date' ";
              $result8 = mysqli_query($con, $query8);
              $row8 = mysqli_fetch_array($result8);
              $sum = $row8['chips_sum'];
              $result12 = mysqli_query($con, "Select SUM(proloss) AS prol from report where username='$name2' AND session='$sesid' AND date='$date' AND proloss > 0 ");
                 $row12 = mysqli_fetch_assoc($result12);   
                 $pro = $row12['prol'];
                 $exp=$pro-$sum;
              
               date_default_timezone_set('Asia/Kolkata');
              $date=date('d/m/Y');
              $query9="Select win_card from hour_result where date='$date' AND session='$sesid' ";
              $result9 = mysqli_query($con, $query9);
              $row9 = mysqli_fetch_array($result9);
              $win = $row9['win_card'];
              $gif16=substr($win,0,-4);
              ?>
              <div class="card" style=" color:black; background-color:black">
                <div class="card-header card-header-primary" id="cardbtn17" style=" border-style: solid;
   border-color:gold;">
                  <h4 class="card-title "><b  class="bet"> Game 16:00-17:00</b><a ><img src="wait.png" style="margin-left:70px; position:absolute" id="caard17"height="50px" width="40px"></a><a href="#modal2" data-toggle="modal" data-id="5" data-name="card5" onclick="myFunction('<?php echo $gif16;?>')"><img src="<?php echo $win;?>" style="margin-left:70px; position:absolute" id="card17" height="50px" width="40px"/></a><a type="submit" href="dashboard4.php?id=UK303.96" class="btn btn-success pull-right  btn20 " id="16" style="background: #228b22;  border-radius:5px;">Place <i class="material-icons" >double_arrow</i></a>
                 </h4> 
                 <script>
                function myFunction() {
                setInterval(function(){ 
                const now=new Date();
             	const hou=now.getHours();
             	const minu=now.getMinutes();
                if(hou>16){
                document.getElementById("cardbtn17").style.backgroundColor = "#808080";    
                 document.getElementById("caard17").style.visibility = "hidden";
                document.getElementById("card17").style.visibility = "visible";
                document.getElementById("16").style.visibility = "hidden";
                document.getElementById("lock17").style.visibility = "visible";
                document.getElementById("exp17").style.visibility = "hidden";
                }
                else if(hou==16){
                if(minu>=58){
                document.getElementById("caard17").style.visibility = "visible";
                document.getElementById("card17").style.visibility = "hidden";
                document.getElementById("16").style.display="none"; 	
                document.getElementById("lock17").style.visibility = "hidden";
                    
                }
               else{
                     document.getElementById("caard17").style.visibility = "hidden";
                     document.getElementById("card17").style.visibility = "hidden";
                  document.getElementById("lock17").style.visibility = "hidden";
                   
               }
                }
                     else{
                     document.getElementById("caard17").style.visibility = "hidden";
                     document.getElementById("card17").style.visibility = "hidden";
                     document.getElementById("lock17").style.visibility = "hidden";
                    }
                },10);
               
                }
                myFunction();

                   </script>

               <p class="card-category"><pre><b class="det" style="color:green;"><b id="exp17">Exposure :  <?php echo"$sum";?> </b> P/L: <?php echo"$exp";?>        </b></pre><pre id="lock17" style="margin-bottom:-25px;"><b>Game Locked !          Winning Card </b> </pre></p>
                </div>
                <div class="card-body" id="card1" >
                  <div class="table-responsive">
        
                  </div>
                </div>
              </div>
            </div>
                  <div class="col-md-12" style="margin-top:-40px;">
                      <?php
              $sesid="17:00-18:00";
              $query8="Select SUM(chips) AS chips_sum from report where username='$name2'AND session='$sesid' AND date='$date' ";
              $result8 = mysqli_query($con, $query8);
              $row8 = mysqli_fetch_array($result8);
              $sum = $row8['chips_sum'];
               $result12 = mysqli_query($con, "Select SUM(proloss) AS prol from report where username='$name2' AND session='$sesid' AND date='$date' AND proloss > 0 ");
                 $row12 = mysqli_fetch_assoc($result12);   
                 $pro = $row12['prol'];
              $exp=$pro-$sum;
              
               date_default_timezone_set('Asia/Kolkata');
              $date=date('d/m/Y');
              $query9="Select win_card from hour_result where date='$date' AND session='$sesid' ";
              $result9 = mysqli_query($con, $query9);
              $row9 = mysqli_fetch_array($result9);
              $win = $row9['win_card'];
              $gif17=substr($win,0,-4);
              ?>
              <div class="card" style=" color:black; background-color:black">
                <div class="card-header card-header-primary" id="cardbtn18" style=" border-style: solid;
   border-color:gold;">
                  <h4 class="card-title "><b  class="bet"> Game 17:00-18:00</b><a ><img src="wait.png" style="margin-left:70px; position:absolute" id="caard18" height="50px" width="40px"></a><a href="#modal2" data-toggle="modal" data-id="5" data-name="card5" onclick="myFunction('<?php echo $gif17;?>')"><img src="<?php echo $win;?>" style="margin-left:70px; position:absolute" id="card18" height="50px" width="40px"/></a><a type="submit" href="dashboard4.php?id=UK321.84" id="17" class="btn btn-success pull-right  btn20 " style="background: #228b22;  border-radius:5px;">Place <i class="material-icons" >double_arrow</i></a>
                 </h4> 
                 <script>
                function myFunction() {
                setInterval(function(){ 
                const now=new Date();
             	const hou=now.getHours();
             	const minu=now.getMinutes();
                if(hou>17){
               document.getElementById("cardbtn18").style.backgroundColor = "#808080";        
                document.getElementById("caard18").style.visibility = "hidden";
                document.getElementById("card18").style.visibility = "visible";
                document.getElementById("17").style.visibility = "hidden";
                document.getElementById("lock18").style.visibility = "visible";
                document.getElementById("exp18").style.visibility = "hidden";
                }
                else if(hou==17){
                if(minu>=58){
                document.getElementById("caard18").style.visibility = "visible";
                document.getElementById("card18").style.visibility = "hidden";
                document.getElementById("17").style.display="none"; 	
                document.getElementById("lock18").style.visibility = "hidden";
                    
                }
               else{
                     document.getElementById("caard18").style.visibility = "hidden";
                     document.getElementById("card18").style.visibility = "hidden";
                     document.getElementById("lock18").style.visibility = "hidden";                  
                   
               }
                }
                     else{
                     document.getElementById("caard18").style.visibility = "hidden";
                     document.getElementById("card18").style.visibility = "hidden";
                     document.getElementById("lock18").style.visibility = "hidden";
                    }
                },10);
               
                }
                myFunction();

 
                   </script>
                 
               <p class="card-category"><pre><b class="det" style="color:green;"><b id="exp18">Exposure : <?php echo"$sum";?> </b> P/L: <?php echo"$exp";?>         </b></pre><pre id="lock18" style="margin-bottom:-25px;"><b>Game Locked !          Winning Card </b> </pre></p>
                </div>
                <div class="card-body" id="card1" >
                  <div class="table-responsive">
        
                  </div>
                </div>
              </div>
            </div>
                  <div class="col-md-12" style="margin-top:-40px;">
                      <?php
              $sesid="18:00-19:00";
              $query8="Select SUM(chips) AS chips_sum from report where username='$name2'AND session='$sesid' AND date='$date' ";
              $result8 = mysqli_query($con, $query8);
              $row8 = mysqli_fetch_array($result8);
              $sum = $row8['chips_sum'];
               $result12 = mysqli_query($con, "Select SUM(proloss) AS prol from report where username='$name2' AND session='$sesid' AND date='$date' AND proloss > 0 ");
                 $row12 = mysqli_fetch_assoc($result12);   
                 $pro = $row12['prol'];
              $exp=$pro-$sum;
               date_default_timezone_set('Asia/Kolkata');
              $date=date('d/m/Y');
              $query9="Select win_card from hour_result where date='$date' AND session='$sesid' ";
              $result9 = mysqli_query($con, $query9);
              $row9 = mysqli_fetch_array($result9);
              $win = $row9['win_card'];
              $gif18=substr($win,0,-4);
              ?>
              <div class="card" style=" color:black; background-color:black">
                <div class="card-header card-header-primary" id="cardbtn19" style=" border-style: solid;
   border-color:gold;">
                  <h4 class="card-title "><b  class="bet"> Game 18:00-19:00</b><a ><img src="wait.png" style="margin-left:70px; position:absolute" id="caard19" height="50px" width="40px"></a><a href="#modal2" data-toggle="modal" data-id="5" data-name="card5" onclick="myFunction('<?php echo $gif18;?>')"><img src="<?php echo $win;?>" style="margin-left:70px; position:absolute" id="card19" height="50px" width="40px"/></a><a type="submit" href="dashboard4.php?id=UK339.72" id="18" class="btn btn-success pull-right  btn20 " style="background: #228b22;  border-radius:5px;">Place <i class="material-icons" >double_arrow</i></a>
                 </h4> 
                 <script>
                function myFunction() {
                setInterval(function(){ 
                const now=new Date();
             	const hou=now.getHours();
             	const minu=now.getMinutes();
                if(hou>18){
                document.getElementById("cardbtn19").style.backgroundColor = "#808080";        
                 document.getElementById("caard19").style.visibility = "hidden";
                document.getElementById("card19").style.visibility = "visible";
                document.getElementById("18").style.visibility = "hidden";	
                document.getElementById("lock19").style.visibility = "visible";
                document.getElementById("exp19").style.visibility = "hidden";
                }
                else if(hou==18){
                if(minu>=58){
                document.getElementById("caard19").style.visibility = "visible";
                document.getElementById("card19").style.visibility = "hidden";
                document.getElementById("18").style.display="none"; 	
                document.getElementById("lock19").style.visibility = "hidden";
                }
               else{
                     document.getElementById("caard19").style.visibility = "hidden";
                     document.getElementById("card19").style.visibility = "hidden";
                     document.getElementById("lock19").style.visibility = "hidden";                  
                   
               }
                }
                     else{
                     document.getElementById("caard19").style.visibility = "hidden";
                     document.getElementById("card19").style.visibility = "hidden";
                     document.getElementById("lock19").style.visibility = "hidden";
                    }
                },10);
               
                }
                myFunction();

                   </script>
               <p class="card-category"><pre><b class="det" style="color:green;"><b id="exp19">Exposure : <?php echo"$sum";?> </b> P/L: <?php echo"$exp";?>       </b></pre><pre id="lock19" style="margin-bottom:-25px;"><b>Game Locked !          Winning Card </b> </pre></p>
                </div>
                <div class="card-body" id="card1" >
                  <div class="table-responsive">
        
                  </div>
                </div>
              </div>
            </div>
                  <div class="col-md-12" style="margin-top:-40px;">
                      <?php
              $sesid="19:00-20:00";
              $query8="Select SUM(chips) AS chips_sum from report where username='$name2'AND session='$sesid' AND date='$date' ";
              $result8 = mysqli_query($con, $query8);
              $row8 = mysqli_fetch_array($result8);
              $sum = $row8['chips_sum'];
              
              $result12 = mysqli_query($con, "Select SUM(proloss) AS prol from report where username='$name2' AND session='$sesid' AND date='$date' AND proloss > 0 ");
                 $row12 = mysqli_fetch_assoc($result12);   
                 $pro = $row12['prol'];
              $exp=$pro-$sum;
              
               date_default_timezone_set('Asia/Kolkata');
              $date=date('d/m/Y');
              $query9="Select win_card from hour_result where date='$date' AND session='$sesid' ";
              $result9 = mysqli_query($con, $query9);
              $row9 = mysqli_fetch_array($result9);
              $win = $row9['win_card'];
              $gif19=substr($win,0,-4);
              ?>
              <div class="card" style=" color:black; background-color:black">
                <div class="card-header card-header-primary" id="cardbtn20" style=" border-style: solid;
   border-color:gold;">
                  <h4 class="card-title "><b  class="bet"> Game 19:00-20:00</b><a ><img src="wait.png" style="margin-left:70px; position:absolute" id="caard20"height="50px" width="40px"></a><a href="#modal2" data-toggle="modal" data-id="5" data-name="card5" onclick="myFunction('<?php echo $gif19;?>')"><img src="<?php echo $win;?>" style="margin-left:70px; position:absolute" id="card20" height="50px" width="40px"/></a><a type="submit" href="dashboard4.php?id=UK357.60" id="19" class="btn btn-success pull-right  btn20 " style="background: #228b22;  border-radius:5px;">Place <i class="material-icons" >double_arrow</i></a>
                 </h4> 
                 <script>
                function myFunction() {
                setInterval(function(){ 
                const now=new Date();
             	const hou=now.getHours();
             	const minu=now.getMinutes();
                if(hou>19){
                document.getElementById("cardbtn20").style.backgroundColor = "#808080";        
                 document.getElementById("caard20").style.visibility = "hidden";
                document.getElementById("card20").style.visibility = "visible";
                document.getElementById("19").style.visibility = "hidden";	
                document.getElementById("lock20").style.visibility = "visible";
                document.getElementById("exp20").style.visibility = "hidden";
                    
                }
                else if(hou==19){
                if(minu>=58){
                document.getElementById("caard20").style.visibility = "visible";
                document.getElementById("card20").style.visibility = "hidden";
                document.getElementById("19").style.display="none"; 	
                document.getElementById("lock20").style.visibility = "hidden";
                    
                }
               else{
                     document.getElementById("caard20").style.visibility = "hidden";
                     document.getElementById("card20").style.visibility = "hidden";
                     document.getElementById("lock20").style.visibility = "hidden";
                   
               }
                }
                     else{
                     document.getElementById("caard20").style.visibility = "hidden";
                     document.getElementById("card20").style.visibility = "hidden";
                     document.getElementById("lock20").style.visibility = "hidden";
                    }
                },10);
               
                }
                myFunction();

                   </script>
               <p class="card-category"><pre><b class="det" style="color:green;"><b id="exp20">Exposure : <?php echo"$sum";?> </b> P/L: <?php echo"$exp";?>         </b></pre><pre id="lock20" style="margin-bottom:-25px;"><b>Game Locked !          Winning Card </b> </pre></p>
                </div>
                <div class="card-body" id="card1" >
                  <div class="table-responsive">
        
                  </div>
                </div>
              </div>
            </div>
                  <div class="col-md-12" style="margin-top:-40px;">
                      <?php
              $sesid="20:00-21:00";
              $query8="Select SUM(chips) AS chips_sum from report where username='$name2'AND session='$sesid' AND date='$date' ";
              $result8 = mysqli_query($con, $query8);
              $row8 = mysqli_fetch_array($result8);
              $sum = $row8['chips_sum'];
              
              $result12 = mysqli_query($con, "Select SUM(proloss) AS prol from report where username='$name2' AND session='$sesid' AND date='$date' AND proloss > 0 ");
                 $row12 = mysqli_fetch_assoc($result12);   
                 $pro = $row12['prol'];
              $exp=$pro-$sum;
              
               date_default_timezone_set('Asia/Kolkata');
              $date=date('d/m/Y');
              $query9="Select win_card from hour_result where date='$date' AND session='$sesid' ";
              $result9 = mysqli_query($con, $query9);
              $row9 = mysqli_fetch_array($result9);
              $win = $row9['win_card'];
              $gif20=substr($win,0,-4);
              ?>
              <div class="card" style=" color:black; background-color:black">
                <div class="card-header card-header-primary" id="cardbtn21" style=" border-style: solid;
   border-color:gold;">
                  <h4 class="card-title "><b  class="bet"> Game 20:00-21:00</b><a ><img src="wait.png" style="margin-left:70px; position:absolute" id="caard21"height="50px" width="40px"></a><a href="#modal2" data-toggle="modal" data-id="5" data-name="card5" onclick="myFunction('<?php echo $gif20;?>')"><img src="<?php echo $win;?>" style="margin-left:70px; position:absolute" id="card21" height="50px" width="40px"/></a><a type="submit" id="20" href="dashboard4.php?id=UK375.48" class="btn btn-success pull-right  btn20 " style="background: #228b22;  border-radius:5px;">Place <i class="material-icons" >double_arrow</i></a>
                 </h4> 
                 <script>
                function myFunction() {
                setInterval(function(){ 
                const now=new Date();
             	const hou=now.getHours();
             	const minu=now.getMinutes();
                if(hou>20){
                 document.getElementById("cardbtn21").style.backgroundColor = "#808080";
                 document.getElementById("caard21").style.visibility = "hidden";
                document.getElementById("card21").style.visibility = "visible";
                document.getElementById("20").style.visibility = "hidden";	
                document.getElementById("lock21").style.visibility = "visible";
                document.getElementById("exp21").style.visibility = "hidden";
                    
                }
                else if(hou==20){
                if(minu>=58){
                document.getElementById("caard21").style.visibility = "visible";
                document.getElementById("card21").style.visibility = "hidden";
                document.getElementById("20").style.display="none"; 	
                document.getElementById("lock21").style.visibility = "hidden";
                }
               else{
                     document.getElementById("caard21").style.visibility = "hidden";
                     document.getElementById("card21").style.visibility = "hidden";
                     document.getElementById("lock21").style.visibility = "hidden";                  
                   
               }
                }
                     else{
                     document.getElementById("caard21").style.visibility = "hidden";
                     document.getElementById("card21").style.visibility = "hidden";
                     document.getElementById("lock21").style.visibility = "hidden";
                    }
                },10);
               
                }
                myFunction();

                   </script>
               <p class="card-category"><pre><b class="det" style="color:green;"><b id="exp21">Exposure :  <?php echo"$sum";?> </b> P/L: <?php echo"$exp";?>       </b></pre><pre id="lock21" style="margin-bottom:-25px;"><b>Game Locked !          Winning Card </b> </pre></p>
                </div>
                <div class="card-body" id="card1" >
                  <div class="table-responsive">
        
                  </div>
                 </div>
                </div>
               </div>
                  <div class="col-md-12" style="margin-top:-40px;">
                      <?php
              $sesid="21:00-22:00";
              $query8="Select SUM(chips) AS chips_sum from report where username='$name2'AND session='$sesid' AND date='$date' ";
              $result8 = mysqli_query($con, $query8);
              $row8 = mysqli_fetch_array($result8);
              $sum = $row8['chips_sum'];
              
               $result12 = mysqli_query($con, "Select SUM(proloss) AS prol from report where username='$name2' AND session='$sesid' AND date='$date' AND proloss > 0 ");
                 $row12 = mysqli_fetch_assoc($result12);   
                 $pro = $row12['prol'];
              $exp=$pro-$sum;
              
               date_default_timezone_set('Asia/Kolkata');
              $date=date('d/m/Y');
              $query9="Select win_card from hour_result where date='$date' AND session='$sesid' ";
              $result9 = mysqli_query($con, $query9);
              $row9 = mysqli_fetch_array($result9);
              $win = $row9['win_card'];
              $gif21=substr($win,0,-4);
              ?>
              <div class="card" style=" color:black; background-color:black">
                <div class="card-header card-header-primary" id="cardbtn22" style=" border-style: solid;
                 border-color:gold;">
                 <h4 class="card-title "><b  class="bet"> Game 21:00-22:00</b><a ><img src="wait.png" style="margin-left:70px; position:absolute" id="caard22" height="50px" width="40px"></a><a href="#modal2" data-toggle="modal" data-id="5" data-name="card5" onclick="myFunction('<?php echo $gif21;?>')"><img src="<?php echo $win;?>" style="margin-left:70px; position:absolute" id="card22" height="50px" width="40px" /></a><a type="submit" id="21" href="dashboard4.php?id=UK393.36" class="btn btn-success pull-right  btn20 " style="background: #228b22;  border-radius:5px;">Place <i class="material-icons" >double_arrow</i></a>
                 </h4> 
                 <script>
                function myFunction() {
                setInterval(function(){ 
                const now=new Date();
             	const hou=now.getHours();
             	const minu=now.getMinutes();
                if(hou>21){
                document.getElementById("cardbtn22").style.backgroundColor = "#808080";    
                 document.getElementById("caard22").style.visibility = "hidden";
                document.getElementById("card22").style.visibility = "visible";
                document.getElementById("21").style.visibility = "hidden";	
                document.getElementById("lock22").style.visibility = "visible";
                document.getElementById("exp22").style.visibility = "hidden";
                    
                }
                else if(hou==21){
                if(minu>=58){
                document.getElementById("caard22").style.visibility = "visible";
                document.getElementById("card22").style.visibility = "hidden";
                document.getElementById("21").style.display="none"; 	
                document.getElementById("lock22").style.visibility = "hidden";
                    
                }
               else{
                     document.getElementById("caard22").style.visibility = "hidden";
                     document.getElementById("card22").style.visibility = "hidden";
                     document.getElementById("lock22").style.visibility = "hidden";
                  }
                }
                     else{
                     document.getElementById("caard22").style.visibility = "hidden";
                     document.getElementById("card22").style.visibility = "hidden";
                     document.getElementById("lock22").style.visibility = "hidden";
                     
                    }
                },10);
               
                }
                myFunction();

                   </script>
               <p class="card-category"><pre><b class="det" style="color:green;"><b id="exp22">Exposure :  <?php echo"$sum";?> </b> P/L: <?php echo"$exp";?>           </b></pre><pre id="lock22" style="margin-bottom:-25px;"><b>Game Locked !          Winning Card </b> </pre></p>
                </div>
                <div class="card-body" id="card1" >
                  <div class="table-responsive">
        
                  </div>
                </div>
              </div>
            </div>
         
         
              <div class="col-md-12" style="margin-top:-40px;">
                  <?php
              $sesid="22:00-23:00";
              $query8="Select SUM(chips) AS chips_sum from report where username='$name2'AND session='$sesid' AND date='$date' ";
              $result8 = mysqli_query($con, $query8);
              $row8 = mysqli_fetch_array($result8);
              $sum = $row8['chips_sum'];
              
              $result12 = mysqli_query($con, "Select SUM(proloss) AS prol from report where username='$name2' AND session='$sesid' AND date='$date' AND proloss > 0 ");
                 $row12 = mysqli_fetch_assoc($result12);   
                 $pro = $row12['prol'];
              $exp=$pro-$sum;
              
               date_default_timezone_set('Asia/Kolkata');
              $date=date('d/m/Y');
              $query9="Select win_card from hour_result where date='$date' AND session='$sesid' ";
              $result9 = mysqli_query($con, $query9);
              $row9 = mysqli_fetch_array($result9);
              $win = $row9['win_card'];
              $gif22=substr($win,0,-4);
              ?>
              <div class="card" style=" color:black; background-color:black">
                <div class="card-header card-header-primary" id="cardbtn23" style=" border-style: solid;
   border-color:gold;">
                  <h4 class="card-title "><b  class="bet"> Game 22:00-23:00</b><a ><img src="wait.png" style="margin-left:70px; position:absolute" id="caard23"height="50px" width="40px"></a><a href="#modal2" data-toggle="modal" data-id="5" data-name="card5" onclick="myFunction('<?php echo $gif22;?>')"><img src="<?php echo $win;?>" style="margin-left:70px; position:absolute" id="card23" height="50px" width="40px"/></a><a type="submit" href="dashboard4.php?id=UK411.24" id="22"class="btn btn-success pull-right  btn20 " style="background: #228b22;  border-radius:5px;">Place<i class="material-icons" >double_arrow</i></a>
                 </h4> 
                    <script>
                function myFunction() {
                setInterval(function(){ 
                const now=new Date();
             	const hou=now.getHours();
             	const minu=now.getMinutes();
                if(hou>22){
                document.getElementById("cardbtn23").style.backgroundColor = "#808080";    
                 document.getElementById("caard23").style.visibility = "hidden";
                document.getElementById("card23").style.visibility = "visible";
                document.getElementById("22").style.visibility = "hidden";
                document.getElementById("lock23").style.visibility = "visible";
                document.getElementById("exp23").style.visibility = "hidden";
                }
                else if(hou==22){
                if(minu>=58){
                document.getElementById("caard23").style.visibility = "visible";
                document.getElementById("card23").style.visibility = "hidden";
                document.getElementById("22").style.display="none"; 
                document.getElementById("lock23").style.visibility = "hidden";
                }
               else{
                     document.getElementById("caard23").style.visibility = "hidden";
                     document.getElementById("card23").style.visibility = "hidden";
                     document.getElementById("lock23").style.visibility = "hidden";
                  }
                }
                     else{
                     document.getElementById("caard23").style.visibility = "hidden";
                     document.getElementById("card23").style.visibility = "hidden";
                     document.getElementById("lock23").style.visibility = "hidden";
                     
                    }
                },10);
               
                }
                myFunction();
                  
                   </script>
               <p class="card-category"><pre><b class="det" style="color:green;"><b id="exp23">Exposure :  <?php echo"$sum";?> </b>  P/L: <?php echo"$exp";?>           </b></pre><pre id="lock23" style="margin-bottom:-25px;"><b>Game Locked !          Winning Card </b> </pre></p>
                </div>
                <div class="card-body" id="card1" >
                  <div class="table-responsive">
        
                  </div>
                </div>
              </div>
            </div>
            
              <div class="col-md-12" style="margin-top:-40px;">
                  <?php
              $sesid="23:00-00:00";
              $query8="Select SUM(chips) AS chips_sum from report where username='$name2'AND session='$sesid' AND date='$date' ";
              $result8 = mysqli_query($con, $query8);
              $row8 = mysqli_fetch_array($result8);
              $sum = $row8['chips_sum'];
              
              $result12 = mysqli_query($con, "Select SUM(proloss) AS prol from report where username='$name2' AND session='$sesid' AND date='$date' AND proloss > 0 ");
                 $row12 = mysqli_fetch_assoc($result12);   
                 $pro = $row12['prol'];
              $exp=$pro-$sum;
              
               date_default_timezone_set('Asia/Kolkata');
              $date=date('d/m/Y');
              $query9="Select win_card from hour_result where date='$date' AND session='$sesid' ";
              $result9 = mysqli_query($con, $query9);
              $row9 = mysqli_fetch_array($result9);
              $win = $row9['win_card'];
              $gif23=substr($win,0,-4);
              ?>
              <div class="card" style=" color:black; background-color:black">
                <div class="card-header card-header-primary" id="cardbtn24" style=" border-style: solid;
   border-color:gold;">
                  <h4 class="card-title "><b  class="bet"> Game 23:00-00:00</b><a ><img src="wait.png" style="margin-left:70px; position:absolute" id="caard24"height="50px" width="40px"></a><a href="#modal2" data-toggle="modal" data-id="5" data-name="card5" onclick="myFunction('<?php echo $gif23;?>')"><img src="<?php echo $win;?>" style="margin-left:70px; position:absolute" id="card24" height="50px" width="40px"/></a><a type="submit" href="dashboard4.php?id=UK429.12" class="btn btn-success pull-right  btn20 " id="23" style="background: #228b22; border-radius:15px;">Place <i class="material-icons" >double_arrow</i></a>
                 </h4> 
<script>
                function myFunction() {
                setInterval(function(){ 
                const now=new Date();
             	const hou=now.getHours();
             	const minu=now.getMinutes();
                if(hou>23){
                document.getElementById("cardbtn24").style.backgroundColor = "#808080";    
                 document.getElementById("caard24").style.visibility = "hidden";
                document.getElementById("card24").style.visibility = "visible";
                document.getElementById("23").style.visibility = "hidden";
                document.getElementById("lock24").style.visibility = "visible";
                document.getElementById("exp24").style.visibility = "hidden";
                }
                else if(hou==23){
                if(minu>=58){
                document.getElementById("caard24").style.visibility = "visible";
                document.getElementById("card24").style.visibility = "hidden";
                document.getElementById("23").style.display="none"; 
                document.getElementById("lock24").style.visibility = "hidden";
                }
               else{
                     document.getElementById("caard24").style.visibility = "hidden";
                     document.getElementById("card24").style.visibility = "hidden";
                     document.getElementById("lock24").style.visibility = "hidden";
                  }
                }
                     else{
                     document.getElementById("caard24").style.visibility = "hidden";
                     document.getElementById("card24").style.visibility = "hidden";
                     document.getElementById("lock24").style.visibility = "hidden";
                    }
                },10);
               
                }
                myFunction();

                   </script>
                   
               <p class="card-category"><pre><b class="det" style="color:green;"><b id="exp24">Exposure :<?php echo"$sum";?>  </b>  P/L: <?php echo"$exp";?>        </b></pre><pre id="lock24" style="margin-bottom:-25px;"> <b>Game Locked !          Winning Card </b> </pre></p>
                </div>
                <div class="card-body" id="card1" >
                  <div class="table-responsive">
        
                  </div>
                </div>
              </div>
            </div>
 <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <a href="last_result.php"><div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  
                  <h3 class="card-title">Last Day Results</h3>
                </div>
                </a>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
             
             
             
             
      <div id="modal2" class="modal" style="margin:30vw auto;" >
        <form method="POST" id="singleAmountForm">
              
   <div class="modal-content" style="background-color: gold ; align-items:center;">
       <button type="button" class="close" style="float:right;margin-left:330px;" data-dismiss="modal">&times;</button>
<!--      <video width="340" height="250"   id="videoPlayer" >-->
<!--  <source src="./gif/2.mp4" width="340" height="250" type="video/mp4"/>-->
<!--</video> -->
<div><b id="carses"></b></div>
 <img id="myImg" src="./A.png" width="300" height="200" style="margin-bottom:20px;">
    </div>
   
     
  </form> 
      </div>
      <script type="text/javascript">
      var vid = document.getElementById("videoPlayer"); 
  function playVid() { 
  vid.play(); 
  } 

  $(document).on("click", ".modal-trigger", function () {
  var myBookId = $(this).data('id');
  var name = $(this).data('name');
  


  $(".modal-content #applicantid").val( myBookId );
  $("#appli_name").val(name);
  $("#login-stat").val(email);
  
   });
    function myFunction(idi) {
  
  document.getElementById("myImg").src = idi+".gif";
  vid.play(); 
}

</script>
   
      
      
<script type="text/javascript">
 $(document).ready(function () {
            $('#cardbtn').click(function () {
                $('#card1').css('display', 'block');
            });
        });

</script>

    
      <script>
        const x = new Date().getFullYear();
        let date = document.getElementById('date');
        date.innerHTML = '&copy; ' + x + date.innerHTML;
      </script>
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 400);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
  
</body>

</html>