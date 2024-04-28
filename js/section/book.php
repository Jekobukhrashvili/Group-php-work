<section class="book_section layout_padding">
<div class="container">
<div class="row">
<div class="col">
    <form action="./Book-appointment.php" method="POST">
    <h4>
        BOOK <span>APPOINTMENT</span>
    </h4>
    <div class="form-row ">
        <div class="form-group col-lg-4">
        <label for="inputPatientName">Patient Name </label>
        <input name="patientsName" type="text" class="form-control" id="inputPatientName" placeholder="" required>
        </div>
        <div class="form-group col-lg-4">
        <label for="inputDoctorName">Doctor's Name</label>
        <select name="doctorsName" class="form-control wide" id="inputDoctorName">
            <option value="First Doctor ">First Doctor  </option>
            <option value="Second Doctor ">Second Doctor</option>
            <option value="Third Doctor ">Third Doctor</option>
        </select>
        </div>
        <div class="form-group col-lg-4">
        <label for="inputDepartmentName">Department's Name</label>
        <select name="distributionsName" class="form-control wide" id="inputDepartmentName">
            <option value="First distribution">First distribution </option>
            <option value="Second distribution">Second distribution </option>
            <option value="Third distribution">Third distribution </option>
        </select>
        </div>
    </div>
    <div class="form-row ">
        <div class="form-group col-lg-4">
        <label for="inputPhone">Phone Number</label>
        <input name="phoneNumber" type="number" class="form-control" id="inputPhone" placeholder="XXXXXXXXXX" required>
        </div>
        <div class="form-group col-lg-4">
        <label for="inputSymptoms">Symptoms</label>
        <input name="symptoms" type="text" class="form-control" id="inputSymptoms" placeholder="" required>
        </div>
        <div class="form-group col-lg-4">
        <label for="inputDate">Choose Date </label>
        <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">
            <input name="date" type="text" class="form-control" readonly>
            <span class="input-group-addon date_icon">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            </span>
        </div>
        </div>
    </div>
    <div class="btn-box">
        <button type="submit" class="btn ">Submit Now</button>
    </div>
    </form>
</div>
</div>
</div>
</section>
