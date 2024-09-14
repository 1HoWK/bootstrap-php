<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../assets/css/globals.css">
</head>

<body>
    <?php include './navbar-after-login.php'; ?>
    <div class="container mt-5">
        <div class="row">
            <!-- Left Hand Side -->
            <h1>Profile</h1>
            <div class="col-md-8">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Username:</label>
                        <input type="text" class="form-control" id="name" value="John Doe" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" value="john.doe@example.com" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Contact Number:</label>
                        <input type="tel" class="form-control" id="phone" value="+1234567890" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Introduction:</label>
                        <textarea class="form-control" aria-label="With textarea" disabled></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="resume" class="form-label">Resume:</label>
                        <input type="text" class="form-control" id="resume" value="resume.pdf" disabled>
                        <!-- <input type="file" class="form-control mt-2" id="resume-upload">
                        <button type="button" class="btn btn-primary mt-2">Upload Resume</button> -->
                    </div>
                    <div class="mb-3 d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary w-25">Edit Profile</button>
                    </div>
                </form>
            </div>
            <!-- Right Hand Side -->
            <div class="col-md-4 d-flex flex-column align-items-center">
                <img src="../../assets/image/profile-icon.png" alt="Profile Picture"
                    class="img-fluid rounded-circle mb-4 border border-secondary mb-4"
                    style="width: 150px; height: 150px;">
                <button type="button" class="btn btn-success mb-4 w-25">Application</button>
                <button type="button" class="btn btn-danger  w-25">Log Out</button>
            </div>
        </div>
    </div>

    <?php include './footer.php'; ?>

    <!-- CDN for Bootstrap 5.1.3 dependencies  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>