<?php 
    $sliders = [
        [   'active' => 'true',
            'name' => 'DIKO',
            'info' => 'Lorem',
            'btn' => 'Contact Us',
            'img' => './images/slider-img.jpg',
        ],

        [   
            'active' => 'false',
            'name' => 'hospitalss',
            'info' => 'Lorem ipsum',
            'btn' => 'Contact su',
            'img' => './images/slider-img.jpg',
        ],

        [   
            'active' => 'false',
            'name' => 'hospitalss',
            'info' => 'Lorem ipsum',
            'btn' => 'Contact su',
            'img' => './images/slider-img.jpg',
        ]
    ];

    function slider_array($sliders){
        foreach ($sliders as $slider){
            if ($slider['active'] == 'true'){
              echo ' <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail-box">
                      <div class="play_btn">
                        <button>
                          <i class="fa fa-play" aria-hidden="true"></i>
                        </button>
                      </div>
                      <h1>
                        Mico <br />
                        <span> Hospital </span>
                      </h1>
                      <p>
                        when looking at its layout. The point of using Lorem
                        Ipsum is that it has a more-or-less normal distribution
                        of letters, as opposed to
                      </p>
                      <a href=""> Contact Us </a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="img-box">
                      <img src="images/slider-img.jpg" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div> ';
            } 
            else {
            echo ' <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <div class="play_btn">
                      <button>
                        <i class="fa fa-play" aria-hidden="true"></i>
                      </button>
                    </div>
                    <h1>
                      Mico <br />
                      <span> Hospital </span>
                    </h1>
                    <p>
                      when looking at its layout. The point of using Lorem
                      Ipsum is that it has a more-or-less normal distribution
                      of letters, as opposed to
                    </p>
                    <a href=""> Contact Us </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.jpg" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>';
           }
          }
    }