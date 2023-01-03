<?php
include 'html/header.php';
include 'html/footer.php';
?>

<?php
include('link/connect_database.php');
$id = $_GET['id'];

$query = "SELECT * FROM user1 WHERE id='$id'";

$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result)!=1){
  die("you are not allowed to edit ");
}
$row = mysqli_fetch_assoc($result);





?>
<style>
    .image-upload>input{
        display: none;
    }
</style>

<div class="container mt-3">
  <form action="link/dash_update.php" method="post"  enctype="multipart/form-data">
    <div class="row">
        <div class="col">
        <div class="image-upload">
  <label for="file-input">
    <img src="img/profile.jpg" style="width:200px;height:200px;border-radius:50%"/>
  </label>

  <input id="file-input" name="image" type="file"/>
</div>
        </div>
        <div class="col">
        <div class="card" style="width: 27rem;">
  <div class="card-body">
    <h5 class="card-title">About</h5>
    <hr/>
    <h6 class="card-subtitle mb-2 text-muted">Enter about you</h6>
    <textarea name="about"  cols="50" rows="5"></textarea>
    <button class="btn btn-success">Save</button>
  </div>
</div>
</div>
        </div>
   

<div class="row mt-5">
    <div class="col">
    <div class="card" style="width: 27rem;">
  <div class="card-body">
    <h5 class="card-title">Skills</h5>
    <hr/>
    <h6 class="card-subtitle mb-2 text-muted">What skills do you acquire</h6>
    <textarea name="skill" id="" cols="50" rows="5"></textarea>
    <button class="btn btn-success">Save</button>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card" style="width: 27rem;">
  <div class="card-body">
    <h5 class="card-title">Experience</h5>
    <hr/>
    <h6 class="card-subtitle mb-2 text-muted">Your Experience</h6>
    <textarea name="" id="" cols="50" rows="5"></textarea>
    <button class="btn btn-success">Save</button>
  </div>
</div>
        </div>
</div>
<div class="row mt-5">
    <div class="col">
    <div class="card" style="width: 27rem;">
  <div class="card-body">
    <h5 class="card-title">Education</h5>
    <hr/>
    <h6 class="card-subtitle mb-2 text-muted">Education status</h6>
    <textarea name="" id="" cols="50" rows="5"></textarea>
    <button class="btn btn-success">Save</button>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card" style="width: 27rem;">
  <div class="card-body">
    <h5 class="card-title">Project</h5>
    <hr/>
    <h6 class="card-subtitle mb-2 text-muted">Enter your recent projects</h6>
    <textarea name="" id="" cols="50" rows="5"></textarea>
    <input type="hidden" value="<?php echo "$id";?>">
    <button class="btn btn-success">Save</button>
  </div>
</div>
        </div>
</div>
</form>
</div>
