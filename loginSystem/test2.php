<!DOCTYPE html>
<html>
<head>
   <title>Student Grade Calculator</title>
   <!-- link for font -->
   <link href= "https://fonts.googleapis.com/css family=Righteous&display=swap"rel="stylesheet"/>
   <link rel="stylesheet" href="styles.css" />
   <script src="script.js"></script>
</head>
<body>
  <nav>
    <div class="logo">Menon</div>
    <input type="checkbox" id="click">
    <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
    </label>
    <ul>
        <li><a href = "marks_calculate.pdf" download > <b> download</b>  </a>  </li>
    </ul>
</nav>

    <h1>CGPI to Percentage Mumbai University & IDOL</h1>
    <div class="input-container">
      <input type="text" class="input" placeholder="Enter Your CGPI"
      id="cgpi" />
    </div>
         <input
         type="button"
         value="SHOW PERCENTAGE"
         class="form-button"
         onclick="calculate()" />
   <!-- for showing the result-->
   <div class="form showdata">
      <p id="showdata"></p>
   </div>

   <h1>SGPI to CGPI Mumbai University & IDOL</h1>
   <div class="input-container">
     <input type="text" class="input" placeholder="Enter Your SGPI"
     id="sgpi1" />
   </div>
   <div class="input-container">
    <input type="text" class="input" placeholder="Enter Your SGPI"
    id="sgpi2" />
  </div>
  <div class="input-container">
    <input type="text" class="input" placeholder="Enter Your SGPI"
    id="sgpi3" />
  </div>
  <div class="input-container">
    <input type="text" class="input" placeholder="Enter Your SGPI"
    id="sgpi4" />
  </div>
  <div class="input-container">
    <input type="text" class="input" placeholder="Enter Your SGPI"
    id="sgpi5" />
  </div>
  <div class="input-container">
    <input type="text" class="input" placeholder="Enter Your SGPI"
    id="sgpi6" />
  </div>
  <input
         type="button"
         value="Total CGPI"
         class="form-button2"
         onclick="calculatesgpi()" />
 
         <div class="form showdata">
            <p id="showdata2"></p>
         </div>

</body>
</html>