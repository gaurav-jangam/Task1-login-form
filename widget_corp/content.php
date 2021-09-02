<!DOCTYPE html>
<html lang="en">
<?php include("includes/head.php") ?>
<?php require_once("includes/connection.php") ?>
<?php
    if(isset($_GET['subj'])){
        $sel_subj = $_GET['subj'];
        $sel_page = "";
    }elseif(isset($_GET['page'])){
        $sel_subj = $_GET['page'];
        $sel_page = "";
    }else{
        $sel_subj = "0";
        $sel_page = "";
    }
?>
<body>
    <div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">        
        <?php require_once("includes/functions.php") ?>
        <?php include("includes/header.php") ?>
        <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <nav class="pcoded-navbar">
                <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                <div class="pcoded-inner-navbar main-menu">
                <div class="p-4">
                    <?php
                        $subject_set = get_all_subjects();
                        while($subject = $subject_set->fetch_assoc()) {
                            echo "<ul class=\"pages\">";
                            echo "<li class=\"selected\"><a href=\"content.php?subj=" . urlencode($subject["id"]) . "\">
                            {$subject["menu_name"]} </a></li> ";
                            echo "</ul>";
                            $new = $subject["id"];
                            $retval = get_pages_for_subjects($new);
                            while($result = $retval->fetch_assoc()) {
                            echo "<li class=\"selected\"><a href=\"content.php?page=" . urlencode($result["id"]) . "\">
                            {$result["menu_name"]} </a></li> ";
                            }
                        }
                    ?>
                </div><br/><br/><br/><br/>
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
            <h2 class="text-c-blue f-w-600">Content Area</h2>
            <h1 class="text-c-blue bg-light text-center pt-5 f-w-600">
            <?php echo $sel_subj; ?><br/>
            <?php echo $sel_page; ?><br/>
            </h1> 
            <!-- <p>Welcome to the staff area.</p>
            <ul class="pl-5" style="list-style-type:disc">
            <li> <a href="content.php">Manage Website</a></li>
            <li><a href="new_user.php">Add Staff User</a></li>
            <li><a href="logout.php">Logout</a></li> -->                                            
            </ul>
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