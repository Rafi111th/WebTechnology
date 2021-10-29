<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <style type="text/css">
    .err{
      color:#FF0000;;
    }
  </style>
</head>
<body>


  <?php
  // define variables and set to empty values

  $nameErr = $emailErr =$dobErr= $genderErr = $degreeErr= $bloodGroupErr = "";
  $name = $email = $dateofbirth= $gender = $degree= $bloodGroup="";

 /*name validation*/

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
      }
    }


   /* email validation*/

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    }



       /*dob validation*/


       if(empty($_POST["dd"]) or empty($_POST["mm"]) or empty($_POST["yyyy"]))
    {
    $dobErr="Full Date of birth input is requied";
    $dd = test_input($_POST["dd"]);
    $mm = test_input($_POST["mm"]);
    $yyyy = test_input($_POST["yyyy"]);

  }
  else
  {
    $dd = test_input($_POST["dd"]);
    $mm = test_input($_POST["mm"]);
    $yyyy = test_input($_POST["yyyy"]);

    if( !filter_var($dd,FILTER_VALIDATE_INT,array('options' => array(
            'min_range' => 1, 'max_range' => 31)))|
            !filter_var($mm,FILTER_VALIDATE_INT,array('options' => array(
            'min_range' => 1, 'max_range' => 12)))|
            !filter_var($yyyy,FILTER_VALIDATE_INT,array('options' => array(
            'min_range' => 1900, 'max_range' => 2012)))
        )
        
      {$dobErr="Must be valid numbers(dd:1-31,mm: 1-12,yyyy: 1900-2012)";}
  }


/* gender validation*/

    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender = test_input($_POST["gender"]);
    }
  }

/*Degree validation*/

  if(!isset($_POST["degree"]))
  {
    $degree="";    
  }
  else if (sizeof($_POST["degree"])<2)
  {
    $degreeErr="At least two must be selected";
  }


/* BloodGROUP validation*/

if(!isset($_POST["bloodGroup"]))
  {
    $bloodGroupErr="Must be selected";
  }
  else
  {
    if($_POST["bloodGroup"]=="blank")
    {
      $bloodGroupErr="Must be selected";
    }
  }
   




  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  ?>


	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;  ?>" method= "post">  
      

      <!-- name-->
      <label> 1. </label>
  <fieldset style="width: 500px"> 
              <legend > NAME</legend>
              <input type="text" name="name"> <span class=" err">*

      <?php 

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['name'];
    if (empty($nameErr)) {
      echo "Name is empty";
    } else {
      echo $nameErr;
    }
    }
      ?>
              </span>
              
              <hr> 

   </fieldset> <br> <br>

<!-- Email-->

 <label> 2. </label>
 <fieldset style="width:500px">
  <legend>EMAIL </legend>
  <input type="EMAIL" name="email" > <span class="err">*
    <?php
          if (isset($emailErr)) {
            // code...
            echo $emailErr;
          }

    ?>
    
  </span>
  <hr> 
 </fieldset > <br> 

 <!-- Date of Birth-->

 <label> 3. </label>
 
<fieldset style="width: 500px; ">
<legend>DATE OF BIRTH</legend>
<table>
<tr style="text-align: center;">
  <th style="font-weight: normal;"><label for="dd" >dd</label></th>
  <th></th>
  <th style="font-weight: normal;"><label for="mm" >mm</label></th>
  <th></th>
  <th style="font-weight: normal;"><label for="yyyy" >yyyy</label></th>
  <th></th>
</tr>
<tr>
<td><input type="text" name="dd" style="width: 30px" value="<?php echo $dd;?>"></td>
<td>/</td>
<td><input type="text" name="mm" style="width: 30px" value="<?php echo $mm;?>"></td>
<td>/</td>
<td><input type="text" name="yyyy" style="width: 30px;" value="<?php echo $yyyy;?>"></td>
<td style="padding-left: 10px"><span class="err">* <?php echo $dobErr;?></span></td>
</tr>
</table>
<hr>

</fieldset>

  

  <br>

 <label> 4. </label>
 <fieldset style="width:500px"> 
    
  
<legend> GENDER</legend>

    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="other">Other
    <span class="err">*
    <?php 
      if (isset($genderErr)) {
        echo $genderErr; 
      }
      ?>
      </span>

<hr>

  </fieldset> <br>

  <label>5. </label>
  <fieldset style="width:500px">

   <legend>DEGREE</legend>

  <input type="checkbox" id="degree" name="degree[]" value="ssc"> SSC
  <input type="checkbox" id="degree" name="degree[]" value="hsc"> HSC
  <input type="checkbox" id="degree" name="degree[]" value="bsc"> BSc
  <input type="checkbox" id="degree" name="degree[]" value="msc"> MSc
  <br>  
  <span class="err" >* 
<hr>
    <?php echo $degree;

    ?></span>      


      </fieldset><br>

      <!--bloodgroup-->

      <label> 6. </label>

   <fieldset style="width: 500px; ">
<legend> BLOOD GROUP</legend>
  <select name="bloodGroup" id="bloodGroup">
    <option value="blank">Select</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
  </select> 
  <br>  
  <span class="err" >* <?php echo $bloodGroupErr;?></span>  
  <hr>

  <input type="submit" name="submitbutton">
      </fieldset>
  
      </form>
  <?php 
  
    echo "<h1>Your Input</h1>";

    echo $name. "<br>";
    echo $email. "<br>";
    echo $dateofbirth. "<br>";
    echo $gender. "<br>";
    echo $degree. "<br>";
    echo $bloodGroup. "<br>";
  

   ?>


