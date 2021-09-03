<!DOCTYPE html>
<html lang="en">
<?php include("includes/head.php") ?>
<?php require_once("includes/connection.php") ?>
<?php require_once("includes/functions.php") ?>
<?php
    find_select_page();
?>
<style>
.bold { font-weight:1000;}
</style>
<body>
    <div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">        
        <?php include("includes/header.php") ?>
        <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <nav class="pcoded-navbar">
                <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                <div class="pcoded-inner-navbar main-menu">
                <div class="p-4">
                    <?php navigation($sel_subject, $sel_page); ?>
                </div><br/><br/>
                    
                </div>
            </nav>
            <div class="pcoded-content">
            <div class="pcoded-inner-content">
            <div class="main-body">
            <div class="page-wrapper">
            <div class="page-body">
            <div class="row">
            <!-- card1 start -->
            <div class="col-md-12 col-xl-12 w-75">
            <div class="card ">
            <div class="card-block-small">
            <div class=" widget-card-1">
            <i class="icofont icofont-ui-home bg-c-pink card1-icon"></i></div>        
            <h2 class=" text-c-blue f-w-600 ">Add Subject</h2>
            <div style="border-radius: 20px; " class="bg-light p-3 br-2">
            <h1 class=" p-2 f-w-600">
            
            <?php
            if(empty($sel_subject["id"]) && empty($sel_page["id"]) ){
            ?></h1>
            <form action="create_subject.php" method="post">
                <?php $new_page=true; ?>
                <p>Subject Name: <input type="text" name="menu_name" value="" id="menu_name" /></p>
                <p>Position: <select name="position">
                            <?php 
                            $subject_set = get_all_subjects();
                            $subject_counts = mysqli_num_rows($subject_set);
                            for($count=1; $count <= $subject_counts+1; $count++){
                                echo "<option value =\"{$count}\" >{$count}</option>";
                                var_dump();
                            }
                            ?>
                             </select></p>
                <p>Visible: <input type="radio" name="visible" value="0" /> No 
                            <input type="radio" name="visible" value="1" /> Yes</p>
                <button type="submit" class="btn btn-primary">Add Subject</button>
            </form>
            <br/>
            <h2>
            <button class=" btn btn-warning"><a class="text-white f-w-600" href="content.php">Cancel</button>
            </h2>    
            <h1><?php
            } else{
                if(empty($sel_subject["id"])){
                    echo $sel_page["menu_name"]; echo "<br/>";
                   echo"<h2>"; echo $sel_page["content"]; echo"</h2>";
                }else{ echo $sel_subject["menu_name"]; }
            }

            ?>                           
            </h1>
            </div> 
            <h2>
            </h2>                                
            </div>
        </div>
    </div>
</div>
<!-- card1 end -->
                                            
                                          

<?php include("includes/footer.php") ?>

                                           
      
<!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<!-- am chart -->
<script src="assets/pages/widget/amchart/amcharts.min.js"></script>
<script src="assets/pages/widget/amchart/serial.min.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="assets/pages/todo/todo.js "></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript " src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
    $window.scroll(function(){
        if ($window.scrollTop() >= 200) {
         nav.addClass('active');
     }
     else {
         nav.removeClass('active');
     }
 });
</script>
</body>

</html>