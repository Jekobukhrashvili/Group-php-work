<?php 

    if ($_POST['fullname'] && $_POST['email'] && $_POST['phonenumber'] && $_POST['message']) {
        echo $_POST['fullname'] . ", your for is submitted.";
    }

