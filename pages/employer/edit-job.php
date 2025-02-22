<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Job</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../assets/css/globals.css">
    <script>
        function redirectToJobListing() {
            window.location.assign('job-listing.php');
        }
    </script>
</head>

<body>
    <?php include './navbar-after-login.php'; ?>

    <div class="container mt-5">
        <div class="row">
            <h1>Edit Job</h1>
            <div class="col-md-8">
                <form action="" method="/">
                    <div class="mb-3">
                        <label for="jobTitle" class="form-label">Job Title:</label>
                        <input type="text" class="form-control bg-light" id="jobTitle" value="">
                    </div>
                    <div class="mb-3">
                        <label for="companyName" class="form-label">Company Name:</label>
                        <input type="text" class="form-control bg-light" id="companyName" value="">
                    </div>
                    <div class="mb-3">
                        <label for="jobLocation" class="form-label">Job Location:</label>
                        <input type="text" class="form-control bg-light" id="jobLocation" value="">
                    </div>
                    <div class="mb-3">
                        <label for="allowance" class="form-label">Allowance:</label>
                        <input type="text" class="form-control bg-light" id="allowance" value="">
                    </div>
                    <div class="mb-3">
                        <label for="workingHours" class="form-label">Working Hours:</label>
                        <input type="text" class="form-control bg-light" id="workingHours" value="">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description:</label>
                        <textarea class="form-control bg-light" aria-label="With textarea" id="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="requirement" class="form-label">Requirement:</label>
                        <input type="text" class="form-control bg-light" id="requirement" value="">
                    </div>
                </form>
            </div>
            <div class="col-md-4 d-flex flex-column align-items-center">
                <div class="d-flex justify-content-between w-100 mt-auto">
                    <button type="submit" class="btn btn-outline-primary w-50 me-2 mb-3 rounded-pill" onclick="redirectToJobListing()">Cancel</button>
                    <button type="button"
                        class="btn btn-primary w-50 ms-2 mb-3 rounded-pill custom-button-bg">Save</button>
                </div>
            </div>
        </div>
    </div>

    <?php include '../general/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>