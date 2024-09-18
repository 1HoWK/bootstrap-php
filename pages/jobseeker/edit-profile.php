<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jobseeker Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script>
        function redirectToEditProfile() {
            window.location.assign('edit-profile.php');
        }

        function redirectToApplication() {
            window.location.assign('application.php');
        }

        function redirectToProfile(event) {
            event.preventDefault();            
            window.location.assign('profile.php');
        }
        function previewNewProfileImage(event) {
            const imageFile = event.target.files[0];
            if (imageFile) {
                const fileReader = new FileReader();
                fileReader.onload = function (e) {
                    const imgElement = document.getElementById('profile-pic'); // refer to the element with this id
                    imgElement.src = e.target.result;
                };
                fileReader.readAsDataURL(imageFile);
            }
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
                        <button type="submit" class="btn btn-outline-primary w-25 w-md-50 rounded-pill"
                            onclick="redirectToProfile(event)">Cancel</button>
                        <button type="button"
                            class="btn btn-primary w-25 w-md-50 custom-button-bg rounded-pill">Save</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4 d-flex flex-column align-items-center">
                <label style="cursor: pointer;" class="d-inline-block position-relative">
                    <img id="profile-pic" src="../../assets/image/profile-icon.png" alt="Profile Picture"
                        class="img-fluid mb-2" style="width: 200px; height: 200px;">
                    <div
                        class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-secondary bg-opacity-50 text-white rounded-3">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-upload me-2" viewBox="0 0 16 16">
                                <path
                                    d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                                <path
                                    d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708z" />
                            </svg>
                            <span><strong>Upload</strong></span>
                        </div>
                    </div>
                    <input type="file" accept="image/*" style="display: none;" onchange="previewNewProfileImage(event)">
                </label>
                <button type="button" class="btn btn-primary mb-4 w-50 w-md-25 mt-5 custom-button-bg rounded-pill"
                    onclick="redirectToApplication()">Application</button>
                <button type="button" class="btn btn-outline-primary w-50 w-md-25 rounded-pill">Log Out</button>
            </div>
        </div>
    </div>

    <?php include '../general/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>