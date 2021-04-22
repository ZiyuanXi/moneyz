<!DOCTYPE html>
     <html> 
     <head> 
  <title>Schakelbord met for loop</title>
  <style>
    .bord{
      width: 270px;
      cellspacing: 0px;
      cellpadding: 0px;
      border: 2px solid black;
      border-collapse: collapse;
    }
    .zwart{
      height: 30px;
      width: 30px;
      background-color: black; 
    }
    .wit{
      height: 30px;
      width: 30px;
      background-color: white; 
    }
  </style>
  </head>

  <body> 
  <h3>Schakelbord</h3>
   <table class="bord">
      <?php
      for($row=1;$row<=8;$row++)
      {
          ?> 
          <tr> 
          <?php
          for($col=1;$col<=8;$col++)
          {
              $total=$row+$col;
              if($total%2==0)
              {
              ?>
                <td class="zwart"></td>
              <?php
              }
              else
              {
                ?>
                <td class="wit"></td>
                <?php
              }
          }?>
        </tr>
        <?php
      }
          ?>
  </table>
  </body>
  </html>