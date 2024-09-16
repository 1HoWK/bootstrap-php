<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jobseeker Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
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
            <h1>Edit Profile</h1>
            <div class="col-md-8">
                <form action="" method="/">
                    <div class="mb-3">
                        <label for="username" class="form-label">User Name:</label>
                        <input type="text" class="form-control bg-light" id="username" value="">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control bg-light" id="email" value="">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control bg-light" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="contactNumber" class="form-label">Contact Number:</label>
                        <input type="tel" class="form-control bg-light" id="contactNumber" value="">
                    </div>
                    <div class="mb-3">
                        <label for="introduction" class="form-label">Introduction:</label>
                        <textarea class="form-control bg-light" id="introduction" aria-label="With textarea"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="resumeFile" class="form-label">Resume:</label>
                        <input class="form-control  bg-light" type="file" id="resumeFile">
                    </div>
                    <div class="mb-3 d-flex justify-content-evenly">
                        <button type="submit" class="btn btn-outline-primary w-25 w-md-50">Cancel</button>
                        <button type="button" class="btn btn-primary w-25 w-md-50 custom-button-bg">Save</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4 d-flex flex-column align-items-center">
                <label for="profile-pic-upload" style="cursor: pointer;">
                    <img src="../../assets/image/profile-icon.png" alt="Profile Picture" class="img-fluid mb-4"
                        style="width: 200px; height: 200px;">
                    <input id="profile-pic-upload" type="file" accept="image/*" style="display: none;"
                        onchange="previewImage(event)">
                </label>
                <button type="button" class="btn btn-primary mb-4 w-50 w-md-25 custom-button-bg" onclick="redirectToApplication()">Application</button>
                <button type="button" class="btn btn-outline-primary w-50 w-md-25">Log Out</button>
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