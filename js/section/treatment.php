<section class="treatment_section layout_padding">
<div class="side_img">
<img src="images/treatment-side-img.jpg" alt="">
</div>
<div class="container">
<div class="heading_container heading_center">
<h2>
    Hospital <span>Treatment</span>
</h2>
</div>

<?php include './js/variable.php'; ?>

<div class="row">
<?php 
foreach ($boxes as $boxes) {
echo '
<div class="col-md-6 col-lg-3">
<div class="box ">
<div class="img-box">
<img src="' . $boxes ['icon'] . '" alt="">
</div>
<div class="detail-box">
<h4>
' .$boxes ['title'] . '
</h4>
<p>
' .$boxes ['subtitle'] . '
</p>
<a href="">
'. $boxes ['click'] .'
</a>
</div>
</div>
</div>

';
}
?>