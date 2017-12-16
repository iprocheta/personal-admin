<?php include 'connection.php';?>
<?php include 'sidebar.php';?>
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>

        <div id="page-wrapper">

            <div class="container-fluid">

                
                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="page-header">Settings</h1>
                        </div>

                        
                        <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i>Edit your personal information</li>
                        </ol>
                    </div>
                
               <div class="col-lg-8"> 
             <form role="form">

                            <div class="form-group input-group">
                            
                               <label>username</label>
                                <input class="form-control" placeholder="Enter your username">
                                </div>
                                <div class="form-group input-group">
                            
                               <label>new password</label>
                                <input class="form-control" placeholder="new password">
                                </div>
                                <div class="form-group input-group">
                            
                               <label>confirm password</label>
                                <input class="form-control" placeholder="confirm password">
                                </div>
                            </form>
                            </div>
                            <div class="col-lg-8">
                        <div class="form-group">
                                <center> <label>Website footer</label></center>
                                <label>your name</label>
                                <input type="text" class="form-control" placeholder="name">
                                <label>copyright</label>
                              <input type="text" class="form-control" placeholder="copyright">
</div>
                            
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
