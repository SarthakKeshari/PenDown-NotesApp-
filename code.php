<?php
    session_start();
    include('dbconn.php');


    if(isset($_POST['save_note_btn']))
    {
        $note_title = $_POST['note_title'];
        $note_content = $_POST['note_content'];

        date_default_timezone_set('Asia/Kolkata');
        $date_time = explode(" ",date('d-m-y h:i:s'));
        $note_id = date('dmyhis');

        $postData = [
            'name'=>'Sarthak',
            // 'notes'=>[['noteID'=>$note_id, 'date'=>$date_time[0], 'time'=>$date_time[1], 'title'=>$note_title, 'content'=>$note_content]],
            'notes'=>[$note_id => ['date'=>$date_time[0], 'time'=>$date_time[1], 'title'=>$note_title, 'content'=>$note_content]],
        ];
        $refTable = "Notes_Keeper";
        $postRef = $database
                        ->getReference($refTable)
                        ->push($postData);

        
        echo "Noted Successfully";
        header("Location: take_notes.php");
        exit(0);
    }

?>