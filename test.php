
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    
  </body>
  </html>    
  <form method="POST" >      
<select name="cars" id="cars"  >
  <option value="1" name='12' >Volvo</option>
  <option value="2" name='12' >Saab</option>
  <option value="3" name='12' >Mercedes</option>
  <option value="4">Audi</option>
</select>
<input type="submit" class="btn btn-primary" value="sub" name="submit"  ></button>
</form>
<?php 

if(isset($_POST)){
  var_dump($_POST);
}

?>