<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../assets/css/globals.css">

    <script>
        function back() {
            window.history.back();
        }
    </script>
</head>

<body>
    <?php include './navbar-after-login.php'; ?>

    <div class="container my-5">
        <div class="d-flex flex-row bd-highlight mb-3 align-items-center">
            <div class="p-1 bd-highlight">
                <button class="back-button" onclick="back()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                    </svg>
                </button>

            </div>
        </div>


        <div class="container mt-4 ">
            <div class="card border border-secondary" style="border-radius:0.8rem;">
                <div class="card-header" style="height: 3.5rem; border-radius:0.8rem; background-color:#002366;">
                </div>
                <div class="card-body" style="padding-left: 4rem; padding-right: 4rem;">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row mb-4">
                                <div class="col-auto">
                                    <img src="../../assets/image/wd-logo.png" class="img-fluid mt-1" alt="Company Logo"
                                        style="width: 50px; height: 30px;">
                                </div>
                                <div class="col">
                                    <div class="d-flex justify-content-between">
                                        <h2 class="mb-0">Graphic Designer</h2>
                                        <h5 class="mb- mt-2">100 <u>LIKES</u></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="my-5">
                                <h6 class="mb-2">Job Description:</h6>
                                <p class="">We are seeking a talented and creative Graphic Designer to join our
                                    dynamic team. The ideal candidate will have a keen eye for design, exceptional
                                    skills in visual communication, and a passion for creating engaging and innovative
                                    designs. You will work on a variety of projects, including branding, marketing
                                    materials, digital content, and more.</p>
                            </div>
                            <!-- CGPA Requirements and Posted Date -->
                            <div class="mb-4">
                                <h6 class="mb-2">CGPA Requirements</h6>
                                <p class="mb-0">CGPA: 3.0</p>
                            </div>
                            <p class="text-muted mt-5 mb-0">Posted 10 days ago</p>
                        </div>
                        <div class="col-md-4 d-flex justify-content-center align-items-center border border-secondary my-5"
                            style="border-radius:0.8rem;">
                            <div class="d-flex flex-column my-4">
                                <p><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                        class="bi bi-geo-alt-fill me-1" viewBox="0 0 16 16">
                                        <path
                                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                    </svg> Pahang, Malaysia</p>
                                <p><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                        class="bi bi-clock-fill me-1" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                    </svg> Full Time</p>
                                <p><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                        class="bi bi-envelope-fill me-1" viewBox="0 0 16 16">
                                        <path
                                            d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                                    </svg> zihao@gmail.com</p>
                                <p><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                        class="bi bi-currency-dollar me-1" viewBox="0 0 16 16">
                                        <path
                                            d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73z" />
                                    </svg> RM4000</p>
                                <button class="btn btn-primary apply-btn custom-button-bg rounded-pill">APPLY</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include '../general/footer.php'; ?>

    <!-- CDN for Bootstrap 5.1.3 dependencies  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>