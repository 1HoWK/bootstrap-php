<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobseeker Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../assets/css/globals.css">
    <script>
        function redirectToEditProfile() {
            window.location.assign('edit-profile.php');
        }

        function redirectToApplication() {
            window.location.assign('application.php');
        }
    </script>
</head>

<body>
    <?php include './navbar-after-login.php'; ?>
    <div class="container mt-5">
        <div class="row">
            <h1>Profile</h1>
            <div class="col-md-8">
                <div class="mb-3">
                    <label for="username" class="form-label">User Name:</label>
                    <input type="text" class="form-control" id="username" value="Zi Hao" disabled>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" value="zihao@gmail.com" disabled>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" disabled>
                </div>
                <div class="mb-3">
                    <label for="contactNumber" class="form-label">Contact Number:</label>
                    <input type="tel" class="form-control" id="contactNumber" value="+60123546738" disabled>
                </div>
                <div class="mb-3">
                    <label for="introduction" class="form-label">Introduction:</label>
                    <textarea class="form-control" id="introduction" aria-label="With textarea" disabled></textarea>
                </div>
                <div class="mb-3">
                    <label for="resume" class="form-label">Resume:</label>
                    <input type="text" class="form-control" id="resume" value="resume.pdf" disabled>
                </div>
                <div class="mb-3 d-flex justify-content-end">
                    <button type="button" class="btn btn-primary w-25 w-md-50 custom-button-bg"
                        onclick="redirectToEditProfile()">Edit Profile</button>
                </div>
            </div>
            <div class="col-md-4 d-flex flex-column align-items-center">
                <img src="../../assets/image/profile-icon.png" alt="Profile Picture" class="img-fluid mb-4"
                    style="width: 200px; height: 200px;">
                <button type="button" class="btn btn-primary mb-4 w-50 w-md-25 custom-button-bg"
                    onclick="redirectToApplication()">Application</button>
                <button type="button" class="btn btn-primary w-50 w-md-25 custom-button-bg">Log Out</button>
            </div>
        </div>
    </div>

    <?php include '../general/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>