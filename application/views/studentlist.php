<main id="main" class="main">

<div class="pagetitle">
  <h1>Student  Tables</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">General</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">student_details</h5>
            <!-- <div class="search">
            <input type="text" placeholder="Search.." name="search">
            </div> -->
              <!-- Default Table -->
              <table class="table" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">Rollno</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Website</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Created</th>
                    <th scope="col">password</th>
                  </tr>
                </thead>
                <tbody >
                  <!-- <tr>
                    <th scope="row">1</th>
                    <td>52</td>
                    <td>PUSHPENDER KUMAR</td>
                    <td>pushpenderkumar@gmail.com</td>
                    <td>yfhdvjhav</td>
                    <td>hii</td>
                    <td>2</td>
                    <td>2024-07-29 11:10:26</td>
                    <td>12345</td>
                  </tr> -->
                  <?php
//           echo "<pre>";print_r($record);exit;
$i = 1; // its is used to print the serial no in series in the table
foreach ($record as $key => $value) // it is used to print all the value  in the table which is in the array.
{?>
                <tr>
                    <td scope="row"><?=$i++?></td>
                    <td><?=$value->Name?></td> 
                    <td><?=$value->Email?></td>
                    <td><?=$value->Website?></td>
                    <td><?=$value->Comment?></td>
                    <td><?=$value->Created?></td>
                    <td><?=$value->Gender?></td>
                    <td><?=$value->password?></td>
                    <td>
                        <!-- niche jo line h vo delete krne k liye use ki h pr hmein hr baar ek value / mein deni hogi kyuki vo ek argument lega delete krne k liye -->
                        <a href="<?php echo base_url('delete/') . $value->id ?>"class="btn btn-danger"onclick="return confirm('Are you sure ?')" > Delete</a>

                        <!-- it is used to  update the value in the form  -->
                       <a href="<?php echo base_url('update/') . $value->id ?>"class="btn btn-danger"> Update</a>

                    <td>
                </tr>
                <?php
}
?>
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>

        </div>
    </div>
    </div>
    </div>
    </section>
</main>
        <!-- basically hmne jo ye script lagai h vo bootsrap cdn mein jaake lagaai h aur ye pop, button in ja

</html>
<style>
    .logout{
        float: right;
    }
</style>