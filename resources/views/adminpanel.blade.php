<!doctype html>
<link rel="stylesheet" type="text/css" href="css/adminpanel.css">
<header role="banner">
  <h1>Admin Panel</h1>
  <ul class="utilities">
    <br>
    <li class="users"><a href="#">My Account</a></li>
    <li class="logout warn"><a href="">Log Out</a></li>
  </ul>
</header>

<style>
  #districtdiv, #schooldiv, #teacherdiv{
    display:none;
  }
</style>

<nav role='navigation'>
  <ul class="main">
    <li class="dashboard" onclick="showdivision()"><a>Divisions</a></li>
    <li class="dashboard" onclick="showdistrict()"><a>Districts</a></li>
    <li class="edit" onclick="showschool()"><a>Schools</a></li>
    <li class="write" onclick="showteacher()"><a>Facilitators</a></li>
    <!-- <li class="comments"><a href="#">Ads</a></li>
    <li class="users"><a href="#">Manage Users</a></li> -->
  </ul>
</nav>


 <main role="main">
  
  
  <div>
      <!-- @if(isset(Auth::user()->email))
      <div clas="alert alert-danger success-block">
          <strong> 
              Welcome {{Auth::user()->email}}
          </strong>
          <br/>
          <a href="{{ url('/logout') }}">Logout</a>
      </div>
     else 
      <script>window.location="/district";</script>
    @endif   -->
  </div>

  <div class="division" id="divisiondiv">
  <body>

 <!-- Message -->
     @if(Session::has('message'))
        <p >{{ Session::get('message') }}</p>
     @endif

     <!-- Form -->
     <form method='post' action='/upload' enctype='multipart/form-data' >
       {{ csrf_field() }}
       <input type='file' name='file' >
       <input type='submit' name='submit' value='Submit'>
     </form>
     <table>
        <tr>
          <td>Divisions: </td>
        </tr>      
     </table>
  <!-- <form action="{{url('/upload')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
    <div class="form-group">
        <label for="upload-file">Upload</label>
        <input type="file" name="upload-file" class="form-control">
    </div>  
    <input class="btn btn-success" type="submit" value="Upload File" name="submit">  
</form> -->
  
  <!-- <br>
  <div>
      <td><a href=""><button type="button" class="btn btn-primary">Add</button></a></td>
  </div>
   <br> 
  <div class="container-fluid">
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Region</th>
            <th>Division</th>
            <th>District</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
      </table>
    </div>
  </div> -->
</body>
</div>

<div class="district" id="districtdiv">
<body>
   <!-- Message -->
     @if(Session::has('message'))
        <p >{{ Session::get('message') }}</p>
     @endif

     <!-- Form -->
     <form method='post' action='/upload/district' enctype='multipart/form-data' >
       {{ csrf_field() }}
       <input type='file' name='file' >
       <input type='submit' name='submit' value='Submit'>
     </form>
     <table>
        <tr>
          <td>Districts: </td>
        </tr>      
     </table>
</body>
</div>

<!-- <div class="school" id="schooldiv">
  <body>
  <br>
  <div>
      <td><a href=""><button type="button" class="btn btn-primary">Add</button></a></td>
  </div>
   <br> 
  <div class="container-fluid">
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>School Name</th>
            <th>School Address</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
</body>
</div>

<div class="teachers" id="teacherdiv">
  <body>
  <br>
  <div>
      <td><a href=""><button type="button" class="btn btn-primary">Add</button></a></td>
  </div>
   <br> 
  <div class="container-fluid">
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Contact Number</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
</body>
</div>
   -->
  <!-- <section class="panel important">
    <h2>Write a post</h2>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="twothirds">
          Blog title:<br/>
          <input type="text" name="title" size="40"/><br/><br/>
          Content:<br/>    
          <textarea name="newstext" rows="15" cols="67"></textarea><br/>  
        </div>
        <div>
          <input type="submit" name="submit" value="Save" />
        </div>
        </div>
      </form>
  </section>  -->

</main>

<script>
  function showdivision() {
  document.getElementById("divisiondiv").style.display = "block";
  document.getElementById("districtdiv").style.display="none";
  document.getElementById("schooldiv").style.display = "none";
  document.getElementById("teacherdiv").style.display = "none";
  }
</script>

<script>
  function showdistrict() {
  document.getElementById("divisiondiv").style.display = "none";
  document.getElementById("districtdiv").style.display="block";
  document.getElementById("schooldiv").style.display = "none";
  document.getElementById("teacherdiv").style.display = "none";
  }
</script>

<!-- <script>
  function showschool() {
  document.getElementById("districtdiv").style.display = "none";
  document.getElementById("schooldiv").style.display = "block";
  document.getElementById("teacherdiv").style.display = "none";
  }
</script>

<script>
  function showteacher() {
  document.getElementById("districtdiv").style.display = "none";
  document.getElementById("schooldiv").style.display = "none";
  document.getElementById("teacherdiv").style.display = "block";
  }
</script> -->