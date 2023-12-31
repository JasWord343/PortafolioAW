<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  
  <link rel="stylesheet" href="style.css" />
  <!-- Font Awesome CDN Link -->
  <link rel="stylesheet" href="CSS/styles.css"/>
  <script src="JS/dashboard.js"></script>
</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <li>
          <a href="#" class="logo">
          <img src="img/yomerop.jpg" alt="Logo">
            <span class="nav-item">Carlos Torres</span>
          </a>
        </li>
        <li>
          <a href="index.html">
            <i class="fas fa-home"></i>
            <span class="nav-item">Home</span>
          </a>
        </li> 
        <li>
          <a href="ej1.php">
            <i class="fas fa-user"></i>
            <span class="nav-item">Ejercicio 1</span>
          </a>
        </li>
        <li>
          <a href="ej2.php">
            <i class="fas fa-wallet"></i>
            <span class="nav-item">Ejercicio 2</span>
          </a>
        </li>
        <li>
          <a href="ej3.php">
            <i class="fas fa-chart-bar"></i>
            <span class="nav-item">Ejercicio 3</span>
          </a>
        </li>
        <li>
          <a href="ej4.php">
            <i class="fas fa-tasks"></i>
            <span class="nav-item">Ejercicio 4</span>
          </a>
        </li>
        <li>
          <a href="ej5.php">
            <i class="fas fa-cog"></i>
            <span class="nav-item">Ejercicio 5</span>
          </a>
        </li>
      </ul>
    </nav>
    <section class="exercise2">
    <h2>Calcular área de un circulo</h2>
    <form method="post" action="">
        <label for="PI">valor de PI:</label>
        <input type="text" name="PI" id="PI" required><br><br>
        
        <label for="Radip">Radio:</label>
        <input type="text" name="Radio" id="Radio" required><br><br>
        
        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if (isset($_POST['calcular'])) {
        $PI = $_POST['PI'];
        $altura = $_POST['Radio'];
        
        $area = $PI * ($altura*$altura) ;
        
        echo "<p>El área del circulo es: " . $area . "</p>";
    }
    ?>
    </section>

    
  </div>
</body>
</html>
