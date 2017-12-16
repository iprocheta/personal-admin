<?php include 'connection.php';?>
<?php include 'sidebar.php';?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Your homepage details</h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i>create your user view details here
                            </li>
                        </ol>
                    </div>
                    <div class="col-lg-6 ">
                      <form role="form">
                          <div class="form-group">
                                <label>Your Name</label>
                                <input class="form-control" placeholder="Enter your name">
                                <label>Position</label>
                                <input class="form-control" placeholder="Enter your position">
                                <label>Social media link</label>
                                <input class="form-control" placeholder="Facebook link....">
                              <input class="form-control" placeholder="Twitter link....">
                              <input class="form-control" placeholder="Google+ link....">
                              <input class="form-control" placeholder="Linkedin link....">
                              <input class="form-control" placeholder="Flicker link....">
                              <input class="form-control" placeholder="instragram link....">
                              <input class="form-control" placeholder="other link....">
                            </div>
                          
                        </form> 
                        <center>
     <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="Reset" class="btn btn-warning">Reset</button>
                            <button type="submit" class="btn btn-success">Update</button>
       </center> 
                            
                        
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4">
                        <div class="form-group">
                                <label>Upload background image</label>
                                <input type="file">

                            
                            </div>
                        <div class="thumbnail">
                            <center><h5>Image preview</h5> </center>
                            <img class="img-responsive" alt="Emptry image" width="240" height="300">
                    </div>
                    <input type="submit" value="Upload">
                    
                </div>
        
              
      </div>
      

    </div>
  </div>

</body>

</html>
