<?php 
session_start(); 
include "db_conn.php";

		$sql = "SELECT * FROM doctorlist";

		//echo phpinfo();
		$result = mysqli_query($conn, $sql);
        /*while ($row = $result->fetch_assoc()) {
            echo $row['user_name']."<br>";
        }*/ 
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo.ico" />
    <title>Doctor List</title>
    <link rel="stylesheet" href="doctorlist.css">
</head>
<body>
    <!--<div class="backimg">
        <img src="https://cdn.wallpapersafari.com/75/16/l7DFxK.jpg">
        
    </div>-->
    <div class="header">
                <div class="headlogo">
                    <a href="https://sheikh-tafsir.github.io/octo-journey.github.io/"><img src="images/code1.png" height="75" width="200"></a>
                </div>
                <div class="headbar">
                    <i class="fa-solid fa-xmark xmark" onclick="settmin()"></i>
                    <i class="fa fa-bars bars" onclick="settmax()"></i>
                </div>
                <div class="headmenu">
                    <a href="home.php">Home</a>
                    <a href="viewappointments.php">Appointments</a>
                    <a href="dash.php">Profile</a>
                    <button class="logout"><a href="logout.php">Logout</a></button>
                    <i class="fa-solid fa-sun light" onclick="settmode()"></i>
                    <i class="fa-solid fa-moon dark" onclick="settmode()"></i>
                </div>
    </div>
    <div class="headline">
            <h1 class="fir">DOCTOR &nbsp;</h1>
            <h1 class="sec">INFORMATION</h1>
    </div>
    <div class="doctor-info">
        
        <?php 
            $presdate=date(DATE_RFC822);
            $presdate=strval($presdate);
            $presday=substr($presdate,0,3);
            $presdatee=substr($presdate,5,2);
            $presmonth=substr($presdate,8,3);

            if($presday=='Sat'){
                $r1=date("d-m-Y", strtotime("+0 day"));
                $r2=date("d-m-Y", strtotime("+1 day"));
                $r3=date("d-m-Y", strtotime("+2 day"));
                $r4=date("d-m-Y", strtotime("+3 day"));
                $r5=date("d-m-Y", strtotime("+4 day"));
                $r6=date("d-m-Y", strtotime("+5 day"));
                $r7=date("d-m-Y", strtotime("+6 day"));
            }
            else if($presday=='Sun'){
                $r1=date("d-m-Y", strtotime("+6 day"));
                $r2=date("d-m-Y", strtotime("+0 day"));
                $r3=date("d-m-Y", strtotime("+1 day"));
                $r4=date("d-m-Y", strtotime("+2 day"));
                $r5=date("d-m-Y", strtotime("+3 day"));
                $r6=date("d-m-Y", strtotime("+4 day"));
                $r7=date("d-m-Y", strtotime("+5 day"));
            }
            else if($presday=='Mon'){
                $r1=date("d-m-Y", strtotime("+5 day"));
                $r2=date("d-m-Y", strtotime("+6 day"));
                $r3=date("d-m-Y", strtotime("+0 day"));
                $r4=date("d-m-Y", strtotime("+1 day"));
                $r5=date("d-m-Y", strtotime("+2 day"));
                $r6=date("d-m-Y", strtotime("+3 day"));
                $r7=date("d-m-Y", strtotime("+4 day"));
            }
            else if($presday=='Tue'){
                $r1=date("d-m-Y", strtotime("+4 day"));
                $r2=date("d-m-Y", strtotime("+5 day"));
                $r3=date("d-m-Y", strtotime("+6 day"));
                $r4=date("d-m-Y", strtotime("+0 day"));
                $r5=date("d-m-Y", strtotime("+1 day"));
                $r6=date("d-m-Y", strtotime("+2 day"));
                $r7=date("d-m-Y", strtotime("+3 day"));
            }
            else if($presday=='Wed'){
                $r1=date("d-m-Y", strtotime("+3 day"));
                $r2=date("d-m-Y", strtotime("+4 day"));
                $r3=date("d-m-Y", strtotime("+5 day"));
                $r4=date("d-m-Y", strtotime("+6 day"));
                $r5=date("d-m-Y", strtotime("+0 day"));
                $r6=date("d-m-Y", strtotime("+1 day"));
                $r7=date("d-m-Y", strtotime("+2 day"));
            }
            else if($presday=='Thu'){
                $r1=date("d-m-Y", strtotime("+2 day"));
                $r2=date("d-m-Y", strtotime("+3 day"));
                $r3=date("d-m-Y", strtotime("+4 day"));
                $r4=date("d-m-Y", strtotime("+5 day"));
                $r5=date("d-m-Y", strtotime("+6 day"));
                $r6=date("d-m-Y", strtotime("+0 day"));
                $r7=date("d-m-Y", strtotime("+1 day"));
            }
            else if($presday=='Fri'){
                $r1=date("d-m-Y", strtotime("+1 day"));
                $r2=date("d-m-Y", strtotime("+2 day"));
                $r3=date("d-m-Y", strtotime("+3 day"));
                $r4=date("d-m-Y", strtotime("+4 day"));
                $r5=date("d-m-Y", strtotime("+5 day"));
                $r6=date("d-m-Y", strtotime("+6 day"));
                $r7=date("d-m-Y", strtotime("+0 day"));
            }
            $r1=substr($r1,0,5);
            $r2=substr($r2,0,5);
            $r3=substr($r3,0,5);
            $r4=substr($r4,0,5);
            $r5=substr($r5,0,5);
            $r6=substr($r6,0,5);
            $r7=substr($r7,0,5);
            while ($row = $result->fetch_assoc()) {
                    $x=$row['name'];
                    $y=$_SESSION['user_name'];
                    $s1=strval($row['sat']." ".$r1);
                    $s2=strval($row['sun']." ".$r2);
                    $s3=strval($row['mon']." ".$r3);
                    $s4=strval($row['tue']." ".$r4);
                    $s5=strval($row['wed']." ".$r5);
                    $s6=strval($row['thu']." ".$r6);
                    $s7=strval($row['fri']." ".$r7);
                    //$_SESSION['appoint_doctor_name'] = $row['user_name'];
                    echo "<div class='doctor-box-1'>";
                    echo "<img class= 'img-doc' src='images/image1.jpg' alt='doctor-1'>";
                    echo "<div class='doc-info-writing'>";
                    echo "<h3 class='heading-2'>". $row['name']."<h3/>";
                    echo "<p class='heading-3'>". $row['specialist']."<p/>";
                    //echo "<button class='but' onclick='makeLarge()'>Select</button>";
                    echo "<form action='bookappointment.php' method='post'>";
                    echo "<p class='heading-4'>Book Slot</p>";
                    /*echo "<div class='calender'>";
                    echo "<p>sat</p>";
                    echo "<p>sun</p>";
                    echo "<p>mon</p>";
                    echo "<p>tue</p>";
                    echo "<p>wed</p>";
                    echo "<p>thu</p>";
                    echo "<p>fri</p>";
                    echo "</div>";*/
                    echo "<div class='calender'>";
                    echo "<div class='calinp'>";
                    echo "<input type='radio' class='slot' name='slot' value='$s1'>";
                    echo "<label>". $s1."</label>";
                    echo "</div>";
                    echo "<div class='calinp'>";
                    echo "<input type='radio' class='slot' name='slot' value='$s2'>";
                    echo "<label>". $s2."</label>";
                    echo "</div>";
                    echo "<div class='calinp'>";
                    echo "<input type='radio' class='slot' name='slot' value='$s3'>";
                    echo "<label>". $s3."</label>";
                    echo "</div>";
                    echo "<div class='calinp'>";
                    echo "<input type='radio' class='slot' name='slot' value='$s4'>";
                    echo "<label>". $s4."</label>";
                    echo "</div>";
                    echo "<div class='calinp'>";
                    echo "<input type='radio' class='slot' name='slot' value='$s5'>";
                    echo "<label>". $s5."</label>";
                    echo "</div>";
                    echo "<div class='calinp'>";
                    echo "<input type='radio' class='slot' name='slot' value='$s6'>";
                    echo "<label>". $s6."</label>";
                    echo "</div>";
                    echo "<div class='calinp'>";
                    echo "<input type='radio' class='slot' name='slot' value='$s7'>";
                    echo "<label>". $s7."</label>";
                    echo "</div>";
                    /*echo "<p>sun</p>";
                    echo "<p>mon</p>";
                    echo "<p>tue</p>";
                    echo "<p>wed</p>";
                    echo "<p>thu</p>";
                    echo "<p>8.00</p>";*/
                    echo "</div>";
                    echo "<input type='submit' value='Select' class='but'><br/>";
                    echo "<input type='text' name='dname' value='$x'>";
                    echo "<input type='text' name='pname' value='$y'>";
                    echo "</form>";
                    echo "</div>";
                    echo "</div>";
            }
        ?>
    </div>
</body>
<script>
    function makeLarge(){
        //alert("hello");


    }
</script>
</html>