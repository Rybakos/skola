<!DOCTYPE html>
<html>

<head>
 <title>Vzkazy</title>
 <meta charset="utf-8" />
 <style>
    iframe { border: solid 0px #000;
             height: 30px;
              }
 </style>
</head>
<body>
   <form method="post" action="contact_me.php" target="odpoved">

   <p><b>Jméno:</b><input type="text" name="jmeno" size="20"></p>
    <p><b>E-mail:</b><input type="text" name="email" size="20"></p>   
   <p><b>Váš názor:</b></p>
   <p><textarea rows="2" name="nazor" cols="20"></textarea></p>
   <p>
     <input type="submit" name="Odeslat">
     <input type="reset" value="Vymazat">
     </p>
   </form>
   
   <iframe scrolling="no" name="odpoved"></iframe>
   

</body>

</html>
