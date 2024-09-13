<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CDN for Bootstrap 5.1.3 dependencies  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
        <link rel="stylesheet" href="../../assets/css/globals.css">
    <style>
        .custom-border {
            border-radius: 1.5rem;
        }

        .custom-padding {
            padding-top: 4rem;
            padding-bottom: 4rem;
            padding-left: 2rem;
            padding-right: 2rem;
        }
    </style>
</head>

<body>
    <?php include '../non-user/navbar-before-login.php'; ?>
    <div class="container d-flex justify-content-center">
        <div class="row my-5 border custom-border p-5 w-75" style="background-color: #002366;">
            <div
                class="col-md-6 order-md-1 text-dark bg-light custom-border d-flex flex-column align-items-center custom-padding">
                <h5 class="text-center">WELCOME TO</h5>
                <h1 class="mb-5 text-center">TALENT LAUNCH</h1>
                <form class="w-100">
                    <div class="mb-1 text-end">
                        <a href="#" class="text-secondary" onclick="window.location='login.php';"><small>Already have an account?</small></a>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label"><strong>Employer/Email</strong></label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label"><strong>Password</strong></label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password">
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn btn-primary rounded-pill w-50 text-center">Sign Up</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 order-md-2 d-flex justify-content-center align-items-center">
                <img src="../../assets/image/talentlaunch_logo_new.png" class="img-fluid" max-height="100px"
                    width="350px" alt="" />
            </div>
        </div>
    </div>
    <!-- CDN for Bootstrap 5.1.3 dependencies  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>