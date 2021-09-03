<?php require_once("connection.php") ?>
<?php 

    
    function redirect_to($location = NULL){
        if($location !=NULL){
            header("Location: {$location}");
        }
    }

    function confirm_query($reult_set){
        if(! $reult_set ) {
            die('Database Query Failed: ' . mysql_error());
         }    
    }

    function get_all_subjects(){
        global $db;
        $sql =  'SELECT * 
                FROM subjects 
                ORDER BY position ASC';
        $subject_set = $db->query($sql);
        confirm_query($subject_set);
        return $subject_set;
    }

    function get_pages_for_subjects($subject_id){
        global $db;
        $new = $subject_id;
        $sql =  'SELECT * 
                FROM pages 
                WHERE subject_id IN ('.$subject_id.') 
                ORDER BY position ASC';
        $page_set = $db->query($sql);
        confirm_query($page_set);
        return $page_set;
    }
    function get_subject_by_id($subject_id){
        global $db;
        $query = "SELECT *";
        $query .= "FROM subjects ";
        $query .= "WHERE id=" . $subject_id . " ";
        $query .= "LIMIT 1";
        $result_set = $db->query($query);
        confirm_query($result_set);
        if($subject = $result_set->fetch_assoc()) {
        return $subject;
        }else{
            return NULL;
        }
        // $subject = mysql_fetch_array($resly_set);
    }
    function get_page_by_id($page_id){
        global $db;
        $query = "SELECT *";
        $query .= "FROM pages ";
        $query .= "WHERE id=" . $page_id . " ";
        $query .= "LIMIT 1";
        $result_set = $db->query($query);
        confirm_query($result_set);
        if($page = $result_set->fetch_assoc()) {
        return $page;
        }else{
            return NULL;
        }
        // $page = mysql_fetch_array($resly_set);
    }

    function find_select_page(){
        global $sel_subject;
        global $sel_page;
        if(isset($_GET['subj'])){
            $sel_subject = get_subject_by_id($_GET['subj']);
            $sel_page = "NULL";
        }elseif(isset($_GET['page'])){
            $sel_subject = "NULL";
            $sel_page = get_page_by_id($_GET['page']);
        }else{
            $sel_subject = "NULL";
            $sel_page = "NULL";
        }
    }

    function navigation($sel_subject, $sel_page){
        $subject_set = get_all_subjects();
        while($subject = $subject_set->fetch_assoc()) {
            echo  "<ul class=\"pages\">";
            echo "<li";
            if($subject["id"] == $sel_subject){
            echo "<div class='bold'>";
            }
            echo "><a href=\"edit_subject.php?subj=" . urlencode($subject["id"]) . "\">
            {$subject["menu_name"]} </a></li> ";
            echo "</ul>";
            $new = $subject["id"];
            
            $page_set = get_pages_for_subjects($subject["id"]);
            while($page = $page_set->fetch_assoc()) {
                echo "<li";
                if($page["id"] == $sel_page){
               
                }
                echo "><a href=\"content.php?page=" . urlencode($page["id"]) . "\">
                {$page["menu_name"]} </a></li> ";
            }
        }
        return ;
    }
?>