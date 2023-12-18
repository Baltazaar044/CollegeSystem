// Function for calculating grades
const calculate = () => {
    // Getting input from user into height variable.
    let cgpi = document.querySelector("#cgpi").value;
    var grades = "";
    var percentage;  
    // let performance="";
 
    // Input is string so typecasting is necessary. */
    let totalgrades = parseFloat(cgpi) 

 
    // Checking the condition for the providing the
    // grade to student based on percentage
    
    if(totalgrades>= 7){
      percentage = (7.4*totalgrades)+12;
    }

   else{
      percentage = (7.1*totalgrades)+12;

   }
      if (percentage <= 80 && percentage >= 76) {
       grades = "O";
    } else if (percentage <= 79 && percentage >= 75) {
       grades = "A";
    } else if (percentage <=  74.99&& percentage >=70 ) {
       grades = "B";
    } else if (percentage <=  69.99&& percentage >=60 ) {
        grades = "C";
     } else if (percentage <= 59.99&& percentage >=55 ) {
        grades = "D";
     } else if (percentage <=  54.99&& percentage >=50 ) {
        grades = "E";
     } else if (percentage <=  49.99&& percentage >=45 ) {
        grades = "P";
     }  else {
       grades = "F";
    }
    // Checking the values are empty if empty than
    // show please fill them
    if (cgpi == "") { document.querySelector("#showdata").innerHTML = "Please enter all the fields";
    } else {
       // Checking the condition for the fail and pass
       if (percentage >= 45) {
       document.querySelector(
          "#showdata"
       ).innerHTML =
          ` Out of 10 cgpi your total is ${totalgrades}
          and percentage is ${percentage}%. <br>
          Your grade is ${grades}. You are Pass. `;
       } else {
          document.querySelector(
             "#showdata"
       ).innerHTML =
          ` Out of 10 cgpi your total is ${totalgrades}

          and percentage is ${percentage}%. <br>
          Your grade is ${grades}. You are Fail. `;
       }
    }
 };

 const calculatesgpi= () => {
    // Getting input from user into height variable.
    let sgpi1 = document.querySelector("#sgpi1").value;
    let sgpi2 = document.querySelector("#sgpi2").value;
    let sgpi3 = document.querySelector("#sgpi3").value;
    let sgpi4 = document.querySelector("#sgpi4").value;
    let sgpi5 = document.querySelector("#sgpi5").value;
    let sgpi6 = document.querySelector("#sgpi6").value;
    let sgpigrade = "";
    // let performance="";
 
    // Input is string so typecasting is necessary. */
    let totalsgpi = parseFloat(sgpi1) +
    parseFloat(sgpi2) +
    parseFloat(sgpi3) +
    parseFloat(sgpi4) +
    parseFloat(sgpi5) +
    parseFloat(sgpi6) ;
 

 let overall = totalsgpi/6;
 if (overall <= 10 && overall >= 9) {
    sgpigrade = "O";
 } else if (overall <= 9 && overall >= 8) {
    sgpigrade = "A";
 } else if (overall <= 8 && overall >= 7) {
    sgpigrade = "B";
 } else if (overall <=  7 && overall >=6 ) {
     sgpigrade = "C";
  } else if (overall <= 6 && overall >= 5 ) {
     sgpigrade = "D";
  } else if (overall <=  5 && overall >= 4 ) {
     sgpigrade = "E";
  } else if (overall <=  4&& overall >=3.99 ) {
     sgpigrade = "P";
  }  else {
    sgpigrade = "F";
 }
 // Checking the values are empty if empty than
 // show please fill them
 if (sgpi1== ""|| sgpi2== "" || sgpi3== "" || sgpi4== ""|| sgpi5== "" || sgpi6== "") { document.querySelector("#showdata2").innerHTML = "Please enter all the fields";
 } else {
    // Checking the condition for the fail and pass
    if (overall >= 3.99) {
    document.querySelector(
       "#showdata2"
    ).innerHTML =
       ` Out of 10 cgpi your 
       and Overall Cgpi is ${overall}. <br>
       Your grade is ${sgpigrade}. You are Pass. `;
    } else {
       document.querySelector(
          "#showdata2"
    ).innerHTML =
       ` Out of 10 cgpi your total is ${totalsgpi}

       and percentage is ${overall}%. <br>
       Your grade is ${sgpigrade}. You are Fail. `;
    }
 }
};

