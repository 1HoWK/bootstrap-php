<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Job</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body>
    <?php include './navbar-after-login.php'; ?>

    <div class="container mt-5">
        <div class="row">
            <h1>View Job</h1>
            <div class="col-md-8">
                <form action="" method="/">
                    <div class="mb-3">
                        <label for="jobTitle" class="form-label">Job Title:</label>
                        <input type="text" class="form-control" id="jobTitle" value="Graphic Designer" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="companyName" class="form-label">Company Name:</label>
                        <input type="text" class="form-control" id="companyName" value="Western Digital Malaysia" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="jobLocation" class="form-label">Job Location:</label>
                        <input type="text" class="form-control" id="jobLocation" value="Cheras, Kuala Lumpur" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="allowance" class="form-label">Allowance:</label>
                        <input type="text" class="form-control" id="allowance" value="RM800" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="workingHours" class="form-label">Working Hours:</label>
                        <input type="text" class="form-control" id="workingHours" value="Full Time" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description:</label>
                        <textarea class="form-control" aria-label="With textarea" id="description" value="" disabled>This is the default text that will appear in the textarea.</textarea>
                        </div>
                    <div class="mb-3">
                        <label for="requirement" class="form-label">Requirement:</label>
                        <input type="text" class="form-control" id="requirement" value="CGPA 3.0" disabled>
                    </div>
                </form>
            </div>
            <div class="col-md-4 d-flex flex-column align-items-center">
                <div class="mt-auto d-flex justify-content-center w-100">
                    <button type="button"
                        class="btn btn-primary mb-3 w-50 w-md-25 custom-button-bg rounded-pill">Edit</button>
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