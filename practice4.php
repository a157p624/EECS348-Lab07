<html>

<head>
    <h1>EECS 348 Lab 07 Practice 4</h1>
</head>

<body>

    <form method=get>
      Size of the multiplicationtable: <input type=text name=size><br>
      <input type=submit value="Submit">
    </form>
    <table border="5">
    
    <?php
    if (isset($_GET["size"])) {
      $s = intval($_GET["size"]);
      for($r=1; $r<=$s; $r++) {
        echo "<tr>";
        for ($c=1; $c<=$s; $c++)
        {
          echo "<td>" . $r * $c . "</td>";
        }
        echo "</tr>";
      }
    }
    ?>
    
</body>

</html>