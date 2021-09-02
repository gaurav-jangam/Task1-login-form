<?php require_once("connection.php") ?>
<?php 
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
        $retval = $db->query($sql);
        confirm_query($retval);
        return $retval;
    }
?>