<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobseeker Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../assets/css/globals.css">
    <style>
        .custom-padding {
            padding-top: 4rem;
            padding-bottom: 4rem;
            padding-left: 2rem;
            padding-right: 2rem;
        }
    </style>
    <script>
        function redirectToSignup() {
            window.location.assign('sign-up.php');
        }
    </script>
</head>

<body>
    <?php include '../general/navbar-before-login.php'; ?>
    <div class="container d-flex justify-content-center">
        <div class="row my-5 border custom-border p-5 w-75" style="background-color: #002366;">
            <div
                class="col-md-6 order-md-1 text-dark bg-light custom-border d-flex flex-column align-items-center custom-padding">
                <h5 class="text-center">WELCOME TO</h5>
                <h1 class="mb-5 text-center">TALENT LAUNCH</h1>
                <form class="w-100">
                    <div class="mb-1 text-end">
                        <a href="#" class="text-secondary" onclick="redirectToSignup()"><small>Don't have an
                                account?</small></a>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label"><strong>Username/Email</strong></label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label"><strong>Password</strong></label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password">
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn btn-primary rounded-pill w-50 text-center custom-button-bg">Log
                            In</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 order-md-2 d-flex justify-content-center align-items-center">
                <img src="../../assets/image/talentlaunch_logo_new.png" class="img-fluid" max-height="100px"
                    width="350px" alt="" />
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>