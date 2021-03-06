<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fax Me</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/baf8152916.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js"></script>

    <script src="js/dropzone-5.7.0/dist/dropzone.js"></script>
</head>

<body onload="onload()">
    <div id="mainContent" class="container d-flex flex-column">
        <div class="jumbotron bg-secondary">
            <div class="d-flex justify-content-center">
                <h1 style="color: white">Fax-Me</h1>
            </div>
        </div>

        <div class="flex-grow-1 d-flex flex-column align-items-center justify-content-center">
            <div class="container flex-grow-1 d-flex flex-column align-items-center justify-content-center">
                <div id="uploadSquare" class=" d-flex flex-column align-items-center justify-content-center p-5">
                    <h5 style="margin-bottom: 0 !important; pointer-events: none">Drag or Click Here to Upload Files</h5>
                </div>
            </div>

            <footer class="container bg-secondary d-flex">
                <div id="footerContent" class="d-flex justify-content-between flex-grow-1">
                    <a href="https://www.rumel.io/">
                        <span class="d-flex align-items-center">
                            <i class="fas fa-home pr-1"></i>
                            <span>Back to Website</span>
                        </span>
                    </a>

                    <a href="https://github.com/Maxunm/Fax-Me">
                        <span class="d-flex align-items-center">
                            <i class="fas fa-code pr-1"></i>
                            <span>Repository</span>
                        </span>
                    </a>
                </div>
            </footer>
        </div>
    </div>
    <?php
    include("successToast.html");
    include("failureToast.html");
    ?>
</body>

</html>