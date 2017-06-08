
<!DOCTYPE html>
<html>
    <head>
        <title>Главная</title>
        <?php require_once "head.php"?>
         <link rel="stylesheet" href="css/edventure.css">
    </head>
  

    <body> 

        <?php require_once "blocks/header.php"?>
        <div class= "layout">    
        
              <div class="content">
                  <p>Приключения</p>
                  <?php $mysqli=new MySQLi("localhost","root","","tania") or die("Ошибка соединения с базой данных");?>
                  
                  
<?php $mysqli=new MySQLi("localhost","root","","tania") or die("Ошибка соединения с базой данных"); ?>
<?php $result = $mysqli->query("SELECT * FROM books"); ?>
<table width="100%" border="2" class="tab">
  <thead>
  <tr>
    <td>№</td>
    <td>Название</td>
    <td>Описание</td>
  </tr>
  </thead>
  <?php while($myrow = $result->fetch_assoc()) { ?>
  <tr>
    <td><?php echo $myrow["id"]; ?></td>
    <td><?php echo $myrow["Name"]; ?></td>
    <td><?php echo $myrow["Description"]; ?>
      </td>
  </tr>
  <?php } ?>
</table>
              </div>   
         <?php require_once "blocks/right_col.php"?>
        </div>
       <?php require_once "blocks/footer.php"?>
  </body>
</html>