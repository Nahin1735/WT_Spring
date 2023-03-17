<!DOCTYPE html>
<html>
    <head>
        <body>
            
<?php


$name=$email=$dob=$gender=$degree=$blood_grp=$Date=$Month=$Year="";



if($_SERVER["REQUEST_METHOD"] == "POST"){

    {$name = ($_POST["name"]);
        $email = ($_POST["email"]);
        
        if(isset($_POST['gender'])  ||isset($_POST['degree'])  ){

        if(isset($_POST['dob'])){
          $dob=$_POST['dob'];}
          
          //---$_POST(['Date'],['Month'],['Year']); ---//
          if(isset($_POST['Date'])){
            $dob=$_POST['Date'];}
            if(isset($_POST['Month'])){
              $dob=$_POST['Month'];}
              if(isset($_POST['Year'])){
                $dob=$_POST['Year'];}

        $gender= ($_POST["gender"]);
        $degree= ($_POST["degree"]);}


        $blood_grp= ($_POST["blood_grp"]);}
    


}




?>


<h2></h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    name: <input type="text" name="name"><br>
    email:<input type="text" name="email"><br>

    dob:<select dob="Date">
        <option value="">Select date</option>
        <?php for ($i = 1; $i <= 31; $i++) : ?>
        <option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
        <?php endfor; ?>
      </select>

      <select dob="Month">
        <option value="">Select month</option>
        <?php for ($i = 1; $i <= 12; $i++) : ?>
        <option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
        <?php endfor; ?>
      </select>

      <select dob="Year">
        <option value="">Select year</option>
        <?php  for($i = 1953; $i < 1999; $i++) : ?>
        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php endfor; ?>
      </select><br>

    gender:<input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">female<br>

    degree: 
    <input type="checkbox" name="degree" value="SSC">SSC
    <input type="checkbox" name="degree" value="HSC">HSC
    <input type="checkbox" name="degree" value="BSc">BSc
    <input type="checkbox" name="degree" value="MSc">MSc<br>

    blood_grp:
    <select name="blood_grp">
        <option value="">Select</option>
            <option value="A+">A+</option>
                <option value="B+">B+</option>
    </select><br>
    <input type="submit" name="submit" value="submit">


<?php

echo "<h2> All inputs:<br></h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $dob;
echo $Date; 
echo $Month; 
echo $Year;
echo "<br>";
echo $gender;
echo "<br>";
echo $degree;
echo "<br>";
echo $blood_grp;
echo "<br>";

?>









        </body>
    </head>
</html>