<?php
    include('dbconn.php');
    include(__DIR__.'/includes/header.php');
    include(__DIR__.'/includes/navbar.php');
?>
    <div class="container-fluid" style="background-color: gainsboro;">
        <div class="container p-4">
            <div class="row d-flex">
                <div id="add_note_div" class="note_buttons col-lg-3 col-md-4 col-sm-6 bg-light p-3 btn border d-flex flex-column align-items-center justify-content-center shadow-sm" data-bs-target="#addNoteModal" data-bs-toggle="modal">
                    <img src="img/add.png" alt="" class="img-fluid w-50">
                    <div class="h6 m-0 position-absolute w-100">
                        Add Note
                    </div>
                </div>
                <div class="modal fade" id="addNoteModal" tabindex="-1" aria-labelledby="addNoteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header h5">
                        New Note
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="code.php" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="noteTitle" class="col-form-label">Note Title</label>
                            <input type="text" name="note_title" class="form-control" id="noteTitle" required>
                        </div>
                        <div class="mb-3">
                            <label for="noteContent" class="col-form-label">Note Content</label>
                            <textarea class="form-control" name="note_content" id="noteContent" required></textarea>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="save_note_btn">Save Note</button>
                    </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="container p-4">
      <small class="text-secondary m-0">Your Notes</small>
      <hr class="mt-0">
      <div class="row">
        <?php
            $refTable = 'Notes_Keeper';
            $fetchData = $database
                            ->getReference($refTable)
                            ->getSnapshot()
                            ->getValue();

            // print_r($reference);

            if($fetchData > 0)
            {
                $i = 1;
                foreach($fetchData as $key => $row)
                {
                    // print_r(sizeof($row['notes']));
                    $offset = 0;
                    foreach($row['notes'] as $noteID => $note)
                    {
                        // print_r($note);
        ?>              
                        <div class="col-lg-3 col-md-4 col-sm-6 p-0 pe-2 pb-2">
                            <div class="card your_note_buttons note_buttons bg-light">
                                <div class="card-header d-flex justify-content-between align-items-start">
                                    <div class="h5 m-0"><?=$note['title'];?></div>
                                    <div class="dropdown">
                                        <button class="btn p-0  d-flex justify-content-between align-items-center" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="https://img.icons8.com/material-rounded/24/000000/menu-2.png" style="width: 20px;">
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                            <li>
                                                <form action="code.php" method="post">
                                                    <button type="submit" class="dropdown-item" href="#" value="<?=$noteID?>">Delete Note</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body" style="filter: blur(0px);">
                                    <p class="card-text">
                                        <?php
                                            if(strlen($note['content'])>25)
                                            {
                                                echo substr($note['content'],0,25)."...";
                                            }
                                            else
                                            {
                                                echo $note['content'];
                                            }
                                        ?></p>
                                </div>
                                <div class="card-footer py-1 border-0" style="background-color: white;">
                                    <small class="text-secondary float-start" style="font-size: 10px;">Time: <?=$note['time']?></small>
                                    <small class="text-secondary float-end" style="font-size: 10px;">Date: <?=$note['date']?></small>
                                </div>
                            </div>
                        </div>

            <?php   
                    $offset++;
                    }
                }
            }?>

      </div>
  </div>

  <script src="arrange.js"></script>

<?php
    include('includes/footer.php');
?>