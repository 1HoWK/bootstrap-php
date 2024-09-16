<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employer Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../assets/css/globals.css">
    <script>
        function redirectToJobListing() {
            window.location.assign('job-listing.php');
        }

        function redirectToUploadJob() {
            window.location.assign('upload-job.php');
        }

        function redirectToApplicant() {
            window.location.assign('applicant.php');
        }
    </script>
</head>

<body>
    <?php include './navbar-after-login.php'; ?>
    <div class="container mt-5">
        <div class="row">
            <h1>Edit Employer Profile</h1>
            <div class="col-md-8">
                <div class="mb-3">
                    <label for="companyName" class="form-label">Company Name:</label>
                    <input type="text" class="form-control bg-light" id="companyName" value="">
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
                    <label for="ssm" class="form-label">SSM:</label>
                    <input type="text" class="form-control bg-light" id="ssm" value="">
                </div>
                <div class="mb-3 d-flex justify-content-evenly">
                    <button type="submit" class="btn btn-outline-primary w-25 w-md-50 rounded-pill">Cancel</button>
                    <button type="button"
                        class="btn btn-primary w-25 w-md-50 custom-button-bg rounded-pill">Save</button>
                </div>
            </div>
            <div class="col-md-4 d-flex flex-column align-items-center">
                <img src="../../assets/image/wd-logo.png" alt="Profile Picture" class="img-fluid mb-4"
                    style="width: 350px; height: 200px;">
                <button type="button" class="btn btn-primary mb-4 w-50 w-md-25 custom-button-bg rounded-pill"
                    onclick="redirectToJobListing()">Job
                    Listings</button>
                <button type="button" class="btn btn-primary mb-4 w-50 w-md-25 custom-button-bg rounded-pill"
                    onclick="redirectToUploadJob()"">Upload
                    Job</button>
                <button type=" button" class="btn btn-primary mb-4 w-50 w-md-25 custom-button-bg rounded-pill"
                    onclick="redirectToApplicant()">Application</button>
                <button type="button" class="btn btn-outline-primary w-50 w-md-25 rounded-pill">Log Out</button>
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