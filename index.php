<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ec, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
#hea{
    background-color:pink;
padding:20px;

}
















</style>







<body>
    <header id="hea">
<h2>Info</h2>

    </header>
    <form>
        <label>Name:</label>
        <input type="text" placeholder="">
        <br><br>


        <label>Address:</label>
        <input type="text" placeholder="">
        <br><br>


        <label>Age:</label>
        <input type="number" placeholder="">
        <br><br>

        <label for="Gender">Gender:</label>
        <label name ="Gender">Male</label>
        <input type="radio" name="Gender">
        <label name ="Gender">Female</label>

        <input type="radio" name="Gender">
        <br><br>

        <input type="submit">











    </form>

    <footer id="foo">
        <P>This is a php </P>






    </footer>

</body>
</html> -->




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=<<, initial-scale=1.0" />
    <title>Document</title>
  </head>

  <style>
    body {
      background-color: #bddde4;
    }
    .header-class {
      background-color: #9fb3df;
      padding: 9px;
      text-align: center;
      color: rgb(0, 0, 0);
    }
    .footer-class {
      background-color: #9fb3df;
      padding: 9px;
      text-align: center;
      bottom: 0;
      position: fixed;
      width: 100%;
    }
    form {
      background-color: rgb(244, 244, 244);
      padding: 20px;
      max-width: 400px;
      margin: 25px auto;
      border-radius: 10px;
      align-items: center;
      height: 200px;
    }
  </style>
  <body>
    <header class="header-class"><h2>Student</h2></header>
    <form>
      <label>Name:</label> 
      <input type="text" placeholder="" />
      <br /><br />

      <label>Address:</label>
      <input type="text" placeholder="" />
      <br /><br />

      <label for="Gender">Gender:</label>
      <label name="Gender"> Male </label>
      <input type="radio" name="Gender" checked />
      <label name="Gender"> female </label>
      <input type="radio" name="Gender" />
      <br /><br />

      <label>File upload:</label>
      <input type="file" placeholder="" />
      <br /><br />

      <input type="Submit" />
    </form>



    <?php
    echo"Hello";

    $age = 20;
    if($age>=20){
        echo"You can drink beer.";
    }
    else{  
        echo "You cant";

    }


echo"<br>";
$age = array(14,23,67,13,12,1,12,2);
echo "The age is: ";
echo "<br>";
  
    print_r($age);

    echo"<br>";

    foreach($age as $item)
    {
      echo $item . "<br>";
    }
    echo "<br>";


    echo count(value: $age);

    echo "<br>";


    for($i=0; $i< count($age); $i++)
    {
      echo  "<br>" . $age[$i] ;
    }

    





     ?>





    <footer class="footer-class">@2025 Namrata Bastola</footer>
  </body>
</html>
