<?php include 'connection.php';?>
<?php include 'sidebar.php';?>
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>
<div id="page-wrapper">
<div class="container-fluid">
<div class="row">
                    <div class="col-lg-8">
                        <h1 class="page-header">Resume</h1>
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
                                <i class="fa fa-dashboard"></i>write about your skill and experience</li>
                        </ol>
                    </div>
                     <div class="col-lg-10 ">
                     <center> <h3>Education</h3></center>
                      <form role="form">
                          <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" placeholder="Enter your educational institute name">
                                
                              
                            </div>
                          
                        </form> 
                        
                    
                    
                         <!-- <div class="col-lg-6"> -->

                        <form action="" method="post">
                <label>Write Short Description</label>
            <textarea class="ckeditor" name="editor"></textarea>
            <input type="submit" value="Insert">
            <input type="submit" value="Reset">
            <input type="submit" value="Update">
        </form>
                    
                    </div>  
                    <div class="col-lg-10 ">
                    <center><h3>Experience</h3></center>
                      <form role="form">
                          <div class="form-group">
                                <label>Posistion title</label>
                                <input class="form-control" placeholder="Enter your position name">
                                
                              
                            </div>
                          
                        </form> 
                        
                    
                    
                        <form action="" method="post">
                <label>Write Short Description</label>
            <textarea class="ckeditor" name="editor"></textarea>
            <input type="submit" value="Insert">
            <input type="submit" value="Reset">
            <input type="submit" value="Update">
        </form>
                    
                    </div> 
                    <div class="col-lg-10 ">
                    <center><h3>Skills</h3> </center>
                      <form role="form">
                          <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" placeholder="Enter your skills title">  
                                <label>Percentage</label>
                                <input class="form-control" placeholder="Enter the percantage number">  
                            </div>
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
