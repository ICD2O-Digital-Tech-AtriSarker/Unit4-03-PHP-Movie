
<b>
  <?php
    // Code
    if(isset($_POST['age'])) 
    {
      // Get user input, years of age
      $age = floatval($_POST['age']);

      // When the user’s age allows them to go to an R-rated movie alone
      // When the user’s age allows them to go to a PG-13 movie alone
      // When the user’s age allows them to go to a G or PG movie alone
      // When the user’s age does not allow them to go to a movie alone
      // When the user’s age is a decimal, web page should not allow this entry
      // When the user’s age is a negative number, web page should not allow this entry
      // When nothing is entered, web page should ask them to please input their age.
      $message = "";
      if (is_nan($age)) {
        $message = "Please Enter Input!";
      }
      else if ($age <= 0) {
        $message = "Please Enter Positive Input!";
      }
      else if (str_contains(strval($age), ".")) {
        $message = "Please Enter Positive Integer!";
      }
      else if ($age >= 17) {
        $message = "Allowed to see R-rated movies alone!";
      }
      else if ($age >= 13) {
        $message = "Allowed to see PG-13 movies alone!";
      }
      else if ($age >= 8) {
        $message = "Allowed to see PG movies alone!";
      }
      else {
        $message = "Not allowed to see movies alone!";
      }

      // Display Result
      echo $message;
    }
    else {
      // Default
      echo "Results will be shown here...";
    }
  ?>
</b> 
