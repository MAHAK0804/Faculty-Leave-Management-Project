<html>

<head>
    <title>
        Leave Arrangements
    </title>
    <link rel="stylesheet" type="text/css" href="css/Application form.css">
    </link>
</head>

<body>
    <header>
        <div class="topnav">
    
            <td style="float:left;"><img src="../nsp project/images/piet logo.jpg" width="6%" height="10%" style="margin-left: 40px; margin-top: 10px; margin-bottom: 10px;"></td>
            <td><a href="Application Form.php"><b>Application Form</b></a></td>
            <td><a href="contact.php"><b>Contact us</b></a></td>
           
            <td><a href="index.php"><b>Home</b></a></td>
        </div>
        </header>
        <br>
        <div class="line"></div>
      <br>
     <h1>   <b>
            <center>Leave Arrangements</center>
        </b>
</h1>
   
    <div class="slide-left">
        <center>
            <p>Please fill the Leave Arrangements FORM before to leave from work.</p>
        </center>
    </div>
    <center>
        <div class="container">
            <form action="leavearranagement.php"  method="POST">
                <table>
                    <tr>
                        <th style="font-size: 20px;">S No.</th>
                        <th style="font-size: 20px;" colspan="2"> Date</th>
                        <th style="font-size: 20px; " colspan="2">Name of alternative lecture</th>
                        <th style="font-size: 20px; " colspan="2"> Time</th>
                        <th style="font-size: 20px; " colspan="2"> Period</th>
                        <th style="font-size: 20px; " colspan="2"> Subject to taken</th>
                    </tr>
                    <tr>
                        <td colspan="1"><input type="text" name="no" size="2" maxlength="4" value="" colspan="2">
                        </td>
                        <td colspan="2"><input type="date" name="date">
                        </td>
                        <td colspan="2"><input type="text" name="lecture" size="35" maxlength="35" value="">
                        </td>
                        <td colspan="2"><input type="time" name="time" size="15" maxlength="15" value="">
                        </td>
                        <td colspan="2"><input type="text" name="period" size="15" maxlength="15" value="">
                        </td>
                        <td colspan="2"><input type="text" name="subject" size="25" maxlength="25" value="">
                        </td>
                    </tr>


                </table>
            </form>
        </div>
        <br><br>
        <div class="button">
            <center>

                <td>
                <input type="submit" name="savedata" value="Submit"></input>
                <!-- <input type="submit" name="data" value="Arranagements list"></input> -->
                </td>
        </div>
    </center>
    </center>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br>
    
    <div class="footer" id="footer">
        <center>
            <a href="#"><img src="images/instagram.jpg" width="3%" height="5%"></a>&nbsp&nbsp&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp&nbsp;
            <a href="https://www.linkedin.com/school/poornima-group-of-colleges/"><img src="images/linkedin.png"
                    width="3%" height="5%"></a>
            &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp;
            <a href="https://twitter.com/PIET_Jaipur?t=MxeihiSvkKGELVDUssC_TA&s=35"><img src="images/twitter.jpg"
                    width="3%" height="5%"></a>&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp;

        </center>
    </div>
    <?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "faculty";

    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn)
    {
    die("Error". mysqli_connect_error());
    }
    $no=$_POST['no'];
    $date=$_POST['date'];
    $lecture=$_POST['lecture'];
    $time=$_POST['time'];
    $period=$_POST['period'];
    $subject=$_POST['subject'];
    
     
    $sql = "INSERT INTO `leave arrangements` (`SNo`, `Date`, `Nameofalternativelecture`, `Time`, `Period`, `Subjecttotaken`) VALUES ('$no', '$data', '$lecture', '$time', '$period', '$subject');";
    $result = mysqli_query($conn, $sql);
        if ($no!="" && $date!="" && $lecture!="" && $time!="" && $period!="" && $subject!=""){
                //session_start();
                //$_SESSION['name'] = $row['name'];
            //    header("location: leavearranagement.php");
            echo "<script>alert('data inserted');</script>";
            } 
            else
            {
                //$showError = "Invalid Credentials";
                echo "<script>alert('Please fill all fields');</script>";
            }
        
        
} 
   
?>
</body>

</html>
