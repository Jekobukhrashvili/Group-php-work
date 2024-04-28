<?php
 $navMenus = [

    [
        'btn1' => 'HOME',
        'btn2' => 'ABOUT',
        'btn3' => 'TREATMENT',
        'btn4' => 'DOCTORS',
        'btn5' => 'TESTIMONIAL',
        'btn6' => 'CONTACT US',
        'btn7' => 'LOGIN',
        'btn8' => 'SIGN UP',
    ]

];

function nav_menu_array($navMenus){
    foreach ($navMenus as $navMenu) {
        echo ' <ul class="navbar-nav  ">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">' . $navMenu['btn1'] . '<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">' . $navMenu['btn2'] . '</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="treatment.php">' . $navMenu['btn3'] . '</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="doctor.php">' . $navMenu['btn4'] . '</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="testimonial.php">' . $navMenu['btn5'] . '</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">' . $navMenu['btn6'] . '</a>
          </li>
        </ul> ';
      }
}

