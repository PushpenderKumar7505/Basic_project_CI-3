
<main id="main" class="main">

<div class="pagetitle">
  <h1>Form Validation</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item active">Validation</li>
    </ol>
  </nav>
</div>
<!-- End Page Title -->

<section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Browser Default</h5>
              <p>Browser default validation with using the <code>required</code> keyword. Try submitting the form below. Depending on your browser and OS, you’ll see a slightly different style of feedback.</p>

              <!-- Browser Default Validation -->
              <form  action ="<?php echo base_url("student_form_submit"); ?>"class="row g-3 " method="post">
                <div class="col-md-4">
                  <label for="validationDefault01" class="form-label">Name</label>
                  <input type="text" class="form-control" id="validationDefault01" value="" name="Name" required>
                </div>
                <div class="col-md-4">
                  <label for="validationDefault02" class="form-label">Email</label>
                  <input type="email" class="form-control" id="validationDefault02" value="" name="E-mail" required>
                </div>
                <div class="col-md-4">
                  <label for="validationDefaultUsername" class="form-label">Website</label>
                  <div class="input-group">
                    <input type="text" class="form-control"  name="Website" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationDefault03" class="form-label">comment</label>
                  <input type="text" class="form-control" id="validationDefault03"  name="comment"required>
                </div>
                <!-- <div class="col-md-6">
                  <label for="validationDefault04" class="form-label">Created</label>
                  <input type="text" class="form-control" id="validationDefault03" required>
                </div> -->
                <div class="col-md-3">
                  <label for="validationDefault05" class="form-label">password</label>
                  <input type="password" class="form-control" id="validationDefault05"  name="password" required>
                </div>
                <label for="validationDefault06" class="form-label">Gender</label>
                <div class="row">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="radio" id="inlineRadio1" value="1">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="radio" id="inlineRadio2" value="2">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="radio" id="inlineRadio3" value="3">
                    <label class="form-check-label" for="inlineRadio3">others</label>
                </div>
                </div>

                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Submit form</button>
                  <!-- <button type="button"> <a href="StudentController/index">submit</a></button> -->
                </div>
              </form>
              <!-- End Browser Default Validation -->

            </div>
          </div>

        </div>
        </section>
</main>
















































    <!-- we passes the routes url to hit the website  -->
    <!-- <form action="<?php echo base_url("student_form_submit") ?>" method="post">
        Name: <input type="text" placeholder="Enter your name" name="Name"><br><br>
        E-MAIL: <input type="text" placeholder="Enter your email" name="E-mail"> <br><br>
        WEBSITE:<input type="text" placeholder="Enter your Website" name="Website"><br><br><br><br>
        Comment:<input type="text" placeholder="Enter your Comment" name="comment"><br><br>
        Password:<input type="password" placeholder="Enter your Password" name="password"><br><br>
        Gender:
        <input type="radio" name="radio" value="1" >Male
        <input type="radio" name="radio" value="2">Female
        <input type="radio"name="radio" value="3">others <br><br>
        <input type="submit" name="save"><br><br>
        <!-- <button type="button"> <a href="StudentController/index">submit</a></button> -->
    <!-- </form> --> -->