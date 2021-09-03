<!DOCTYPE html>
<html lang="en">
<?php include("includes/head.php") ?>
<?php require_once("includes/connection.php") ?>
<?php require_once("includes/functions.php") ?>
<?php 
    if(intval($_GET["subj"]) == 0){
        redirect_to("content.php");
    }
    if(isset($_POST['submit'])){
        $errors = array();

//         $id = $_GET["subj"];
//         $menu_name = $_POST["menu_name"];
//         $position = $_POST["position"];
//         $visible = $_POST["visible"];
        
//         $query = "UPDATE subjects SET
//                     menu_name = '{$menu_name}'
//                     WHERE id = {$id}";
//                     if ($db->query($query) === TRUE) {
//     echo "New record created successfully";
    
//     exit;
//   } else {
//     echo "Error: " . $query . "<br>" . $db->error;
//   }
    
        

        if(empty($errors)){
            $id = $_GET["subj"];
            $menu_name = $_POST["menu_name"];
            $position = $_POST["position"];
            $visible = $_POST["visible"];
            $id2 = $_GET["subj"];


            $query = "UPDATE subjects SET
                        menu_name = '{$menu_name}',
                        position = '{$position}',
                        visible = '{$visible}'


                        WHERE id = {$id}";
                          if ($db->query($query) === TRUE) {
                            $message = "New record created successfully";
                            echo $message;
                            // echo "><a href=\"edit_subject.php?subj=" . urlencode($subject["id"]) . "\">
                            header("Location: edit_subject.php?subj=" .$id2);
                            
                            exit;
                          } else {
                            echo "Error: " . $query . "<br>" . $db->error;
                          }
                        }
    }
?>
<style>
.bold { font-weight:1000;}
</style>
<body>
    <div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">        
        <?php include("includes/header.php") ?>
        <?php find_select_page();?>

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
            <h2 class=" text-c-blue f-w-600 ">Edit Subject: <?php echo $sel_page["menu_name"]; ?></h2>
            <div style="border-radius: 20px; " class="bg-light p-3 br-2">
            <h1 class=" p-2 f-w-600">
            
            <?php
            if( empty($sel_page["id"]) ){
            ?></h1>
            <?php if(!empty($message)) { echo "<p class=\"message\">" .  $message ."</p>"; } ?>
            <?php if(!isset($new_page)) {$new_page = false; } ?>
            <form action="edit_subject.php?subj= <?php echo urlencode($sel_subject["id"]); ?>" method="POST">
            <p>Subject Name: <input type="text" name="menu_name" value="<?php echo $sel_page["menu_name"]; ?>" id="menu_name" /></p>
            <p>Position: <select name="position">
            <?php 
                            if(!$new_page){
                                $page_set = get_pages_for_subjects($sel_page["subject_id"]);
                                $page_count = mysqli_num_rows($page_set);
                            }
                            else {
                                $page_set = get_pages_for_subjects($sel_subject["id"]);
                                $page_count = mysqli_num_rows($page_set) + 1;
                            }
                            for($count=1; $count<= $page_count; $count++) {
                                echo "<option value =\"{$count}\"";
                                if($sel_page['position'] == $count) { echo " selected";  }
                                echo ">{$count}</option>";
                            }
                            ?>
                             </select></p>
                <p>Visible: <input type="radio" name="visible" value="0" <?php
                if($sel_subject['visible'] == 0) {echo "checked"; }?>/> No 
                            <input type="radio" name="visible" value="1" <?php
                if($sel_subject['visible'] == 1) {echo "checked"; }?>/> Yes</p>
                <button type="submit" name="submit" class="btn btn-primary">Edit Subject</button>
            </form>
            <br/>
            <h2>
            <button class=" btn btn-warning"><a class="text-white f-w-600" href="content.php">Cancel</button>
            <button class=" btn btn-danger"><a class="text-white f-w-600" 
            href="delete.php?subj=<?php echo urlencode($sel_subject['id'])?>" OnClick="return confirm('Are You Sure');")>Delete</button>

            </h2>  
            <h3>
                Pages in the Subjects:
            </h3>
            <?php
            $subject_pages = get_pages_for_subjects($sel_subject["id"]);
            while($page = $subject_pages->fetch_assoc()) {
                echo "<li><a href=\"content.php?page={$page['id']}\">
                {$page["menu_name"]} </a></li> ";
            }
            ?>
            <a href="new_page.php?subj=<?php echo $sel_subject["id"]; ?>">Add a new page</a>  
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
<!--
                                            
                                          

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