<?php
  if(isset($_POST['patientsName'])) {
    $patientsName = $_POST['patientsName'];
    $doctorsName = $_POST['doctorsName'];
    $distributionsName = $_POST['distributionsName'];
    $phoneNumber = $_POST['phoneNumber'];
    $symptoms = $_POST['symptoms'];
    $date = $_POST['date'];

    
    echo "Your appointment has been recorded, Thank You." . '<br>' . '<br>' ;
    echo "Your Name: " . "$patientsName" . '<br>' ;
    echo "Doctor's Name: " . "$doctorsName" . '<br>';
    echo "Distribution: " . "$distributionsName" . '<br>';
    echo "Your number: " . "$phoneNumber" . '<br>';
    echo "Your Symptoms: " . "$symptoms" . '<br>';
    echo "Date: " . "$date" . '<br>';
  }
    


