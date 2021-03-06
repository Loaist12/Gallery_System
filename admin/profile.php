<?php include("includes/header.php"); ?>
<?php if(!$session->is_signed_in()){redirect("login.php");} ?>
<?php

$user = new User();
?>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            
            <?php include("includes/top_nav.php");?>


            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php include("includes/side_nav.php"); ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                <div class="col-lg-12">
                        <h1 class="page-header">
                            Profile
                            <small>Subheading</small>
                        </h1>
                        <div class="col-md-6">
                            <img class="img-responsive" src="<?php echo $user->user_image_placehold() ?>" alt="">
                        </div>
                        <div class="col-md-6" >
                            <div  class="photo-info-box">
                                <div class="info-box-header">
                                    <h4>Save <span id="toggle" class="glyphicon glyphicon-menu-up pull-right"></span></h4>
                                </div>
                            <div class="inside">
                                <div class="box-inner">
                                    <p class="text">
                                    <span class="glyphicon glyphicon-calendar"></span> Uploaded on: April 22, 2030 @ 5:26
                                    </p>
                                    <p class="text ">
                                    Photo Id: <span class="data photo_id_box"></span>
                                    </p>
                                    <p class="text">
                                    Filename: <span class="data"></span>
                                    </p>
                                    <p class="text">
                                    File Type: <span class="data">JPG</span>
                                    </p>
                                    <p class="text">
                                    File Size: <span class="data"></span>
                                    </p>
                                </div>
                                <div class="info-box-footer clearfix">
                                <div class="info-box-delete pull-left">
                                    <a  href="delete_photo.php?id=<?php echo $photo->id; ?>" class="btn btn-danger btn-lg ">Delete</a>   
                                </div>
                                <div class="info-box-update pull-right ">
                                    <input type="submit" name="update" value="Update" class="btn btn-primary btn-lg ">
                                </div>   
                                </div>
                            </div>          
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include("includes/footer.php"); ?>