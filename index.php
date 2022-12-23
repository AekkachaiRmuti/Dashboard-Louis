<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Louis Menu</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,300;1,300&display=swap" rel="stylesheet">

</head>
<style>
*{
    font-family: 'Kanit', sans-serif;
}
    .rp {
        width: 10rem;
        align-items: center;

    }

    a {
        font-size: 20px;
    }

    /* body {
        background-color: #6FFDE8;
    } */
    html,
    body {
        margin: 0px;
        padding: 0px;
        background: Purple;
    }

    .background {
        position: absolute;
        display: block;
        top: 0px;
        left: 0px;
        z-index: 0;
    }


    .card {
        border-radius: 4px;
        background: #fff;
        box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
        transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
        padding: 14px 80px 18px 36px;
        cursor: pointer;

    }

    .ca:hover {
        transform: scale(2);
        box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
    }

    footer {
        position: fixed;
        bottom: 0px;
        left: 0px;
        padding: 10px;
        text-align: center;
        width: 100%;
        color: #FFFFFF;
        background-color: white;
    }

    * {
        margin: 0;
        padding: 0;
    }

</style>

<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js"></script>
    <script src="bootstrap/bootstrap.js"></script>

    <nav class="navbar sticky-top bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Louis Menu</a>
        </div>
    </nav>

    <section>
        <div class="conteiner-fluid p-3">
           
            <div class="row">
                <div class="col-lg-3 mt-3">
                    <div class="menu">
                        <div class="menu-text">
                            <div class="card">
                                <div class="card-body text-center">

                                    <center>
                                        <img class="rp card-title" src="img/repair.png" alt="">
                                    </center>

                                    <center>
                                        <a href="../Louis-Repair" class="card-text" target="_blank">ระบบแจ้งซ่อม</a>
                                    </center>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                
               
                <div class="col-lg-3 mt-3">
                    <div class="menu">
                        <div class="menu-text">
                            <div class="card">
                                <div class="card-body text-center">

                                    <center>
                                        <img class="rp card-title" src="img/laptop.png" alt="">
                                    </center>

                                    <center>
                                        <a href="../louisadhesive/connect_IT.php" class="card-text" target="_blank">แจ้งปัญหา IT</a>
                                    </center>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mt-3">
                    <div class="menu">
                        <div class="menu-text">
                            <div class="card">
                                <div class="card-body text-center">

                                    <center>
                                        <img class="rp card-title" src="img/itsupport.jpg" alt="">
                                    </center>

                                    <center>
                                        <a href="../it_support" class="card-text" target="_blank">IT Support (Sathon)</a>
                                    </center>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <span class="mb-3 mb-md-0 text-muted">© 2022 Louis Adhesive Tapes </span>
            </div>

            <!-- <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#twitter"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#instagram"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#facebook"></use>
                        </svg></a></li>
            </ul> -->
        </footer>
</body>



</html>