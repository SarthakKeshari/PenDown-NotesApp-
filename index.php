<?php
    include('dbconn.php');
    include(__DIR__.'/includes/header.php');
    include(__DIR__.'/includes/navbar.php');
?>
    <div id="images">
        
    </div>

    <script>
        var w = window.innerWidth;
        let ele = document.getElementById('images');
        if(w>500)
        {
            ele.innerHTML = `
            <div class="position-absolute top-0 end-0 p-2">
                <img src="./img/creativity.png" alt="">
            </div>
            <div class="position-absolute top-50 p-4">
                <img class="w-50" src="./img/interview.png" alt="">
            </div>
            `;
        }
        else
        {
            ele.innerHTML = `
            <div class="position-absolute top-0 text-end end-0 pt-5">
                <img class="w-50 p-4" src="./img/interview.png" alt="">
            </div>
            <div class="position-absolute top-50 text-center end-0" style="z-index: -1">
                <img class="w-25" src="./img/books.png" alt="">
            </div>
            `;
        }
    </script>
    <div class="container-fluid" style="background-color: #70280920;">
        <div class="container p-4">
            <div class="row">
                <div>
                    <h1>Now, 
                        <br><span class="display-2">Pen Down</span> 
                        <br><i>without</i> a pen!
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container p-4 d-flex justify-content-center">
            <div class="row">
                <div>
                    <div class="text-center">
                        <div class="display-6 mb-2">Hey, don't look at me</div>
                        <div class="h5">Still being lazy to Register 🤔</div>
                        <br>
                        <br>
                        <div class="h2 mt-5">Store your notes and access them from anywhere and everywhere</div>
                        <div class="btn btn-dark btn-lg px-5">
                            <span class="h4 px-4">Register</span>
                        </div>
                        <br>
                        <small>Already have an account? <a href="#">Login</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include('includes/footer.php');
?>