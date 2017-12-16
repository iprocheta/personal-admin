<?php include 'connection.php';?>
<?php include 'sidebar.php';?>
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>

        <div id="page-wrapper">

            <div class="container-fluid">

                
                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="page-header">Contact</h1>
                        </div>

                        <div class="col-lg-4">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <label>Upload featured image</label>
                            </div>
                            <div class="panel-body">
                                <input type="file">
                                <input type="submit" value="Upload">
                            </div>
                        </div>
                       
                                </div>
                        <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i>Write your contact details</li>
                        </ol>
                    </div>
                </div>
                
                
                
                <div class="col-lg-6 ">
                      <form role="form">
                          <div class="form-group">
                                <label>Your Name</label>
                                <input class="form-control" placeholder="Enter your name">
                                <label>Position</label>
                                <input class="form-control" placeholder="Enter your position">
                                </div>
                                </form>
                                </div>
                                <div class="col-lg-2"></div>
                                <div class="col-lg-4">
                        
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Click to add social media link</button>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">your social media link</h4>
        </div>
        <div class="modal-body">
        
          <form role="form">
                          <div class="form-group">
                               
                                <input class="form-control" placeholder="Facebook link....">
                              <input class="form-control" placeholder="Twitter link....">
                              <input class="form-control" placeholder="Google+ link....">
                              <input class="form-control" placeholder="Linkedin link....">
                              <input class="form-control" placeholder="Flicker link....">
                              <input class="form-control" placeholder="instragram link....">
                              <input class="form-control" placeholder="other link....">
                            </div>
                          
                        </form> 
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Save</button>
        </div>
      </div>
    </div>
  </div>

                          </div>
                          <br>
                          <br>
                          <div class="col-lg-2"></div>
                          <div class="col-lg-4">
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal2">Click to add contact details</button>

<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">your contact details</h4>
        </div>
        <div class="modal-body">
       
          <form role="form">
                          <div class="form-group">
                               <label>Address</label>
                               <textarea class="form-control" rows="3"></textarea>
                               <label>Phone number</label>
                                <input class="form-control" placeholder="Enter phone number">
                                <label>Home number</label>
                                <input class="form-control" placeholder="Enter home number">
                                <label>E-mail address</label>
                                <input class="form-control" placeholder="Enter email address">
                                <label>website address</label>
                                <input class="form-control" placeholder="Enter website address">
                            </div>
                          
                        </form> 
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Save</button>
        </div>
      </div>
    </div>
  </div>
</div>
                                <div class="col-lg-10">
                    <form action="" method="post">
                    <label>Write message</label>
            <textarea class="ckeditor" name="editor"></textarea>
            <input type="submit" value="Insert">
            <input type="submit" value="Reset">
            <input type="submit" value="Update">
        </form>
                    
                    </div>

                    
                 
      </div>
      <center>
     <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="Reset" class="btn btn-warning">Reset</button>
                            <button type="submit" class="btn btn-success">Update</button>
       </center> 
     </div>

  </div>
  
</body>
</html>
<?php include 'editor.php';?>
