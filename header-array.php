<?php 
   $infos = [

   [
      'number' => 'Call : +995 123456789',
      'email' => 'Email : Group-work@gmail.com',
      'location' => 'Georgia',
   ]

];

function info_array($infos){
   foreach ($infos as $info) {
      echo ' <div class="contact_nav">
        <a href="">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <span>
            ' . $info['number'] . '
          </span>
        </a>
        <a href="">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <span>
          ' . $info['email'] . '
          </span>
        </a>
        <a href="">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <span>
          ' . $info['location'] . '
          </span>
        </a>
      </div> ';
  }
}