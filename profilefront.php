<?php include 'connection.php';?>
<?php include 'sidebar.php';?>
<script src="ckeditor/ckeditor.js" type="text/javascript"></script>

        <div id="page-wrapper">

            <div class="container-fluid">

                
                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="page-header">Profile</h1>
                        </div>

                        <div class="col-lg-4">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <label>Upload background image</label>
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
                                <i class="fa fa-dashboard"></i>Write a spoon of your work</li>
                        </ol>
                    </div>
                </div>
                
                 <div class="col-lg-10">
                    <form action="" method="post">
            <textarea class="ckeditor" name="editor"></textarea>
            <input type="submit" value="Insert">
            <input type="submit" value="Reset">
            <input type="submit" value="Update">
        </form>
                    
                    </div>
                    

                    
      </div>
     </div>
  </div>
  
</body>
</html>
<?php include 'editor.php';?>
