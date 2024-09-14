<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../assets/css/globals.css">
</head>
<style>
    .custom-border {
        border-radius: 1rem !important;
    }
</style>

<body>
    <?php include './navbar-after-login.php'; ?>

    <div class="container text-center mb-5">
        <h1 class="text-center my-5">Let's Find You A Job !</h1>

        <div class="row justify-content-center">
            <div class="col-md-8"></div>
            <div class="input-group mb-3 input-group-lg w-50">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                    </svg></span>
                <input type="text" class="form-control bg-light" placeholder="Find your job" aria-label="Find job"
                    aria-describedby="basic-addon1">
            </div>
        </div>
        <?php
        $jobs = [
            [
                "title" => "Graphic Designer",
                "salary" => "4500",
                "location" => "Kuala Lumpur",
                "likes" => 90,
                "jobType" => "Full Time"

            ],
            [
                "title" => "UI/UX Designer",
                "salary" => "3500",
                "location" => "Perak",
                "likes" => 600,
                "jobType" => "Full Time"
            ],
            [
                "title" => "3D Animator",
                "salary" => "3000",
                "location" => "Pahang",
                "likes" => 60,
                "jobType" => "Full Time"
            ]
        ];
        ?>
        <h2 class="text-start mt-3 w-75">Recommended Jobs</h2>
        <?php foreach ($jobs as $job): ?>
            <div class="row g-0 border border-secondary custom-border my-3">
                <div class="col-md-8 left-side p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5><?php echo $job["title"]; ?></h5>
                        </div>
                        <div>
                            <p><?php echo $job["likes"]; ?> <u>LIKES</u></p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                <path
                                    d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73z" />
                            </svg>
                            <p class="mb-0 ms-1">RM<?php echo $job["salary"]; ?></pc>
                        </div>
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                            </svg>
                            <p class="mb-0 ms-1"><?php echo $job["location"]; ?></p>
                        </div>
                        <div class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-clock-fill" viewBox="0 0 16 16">
                                <path
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                            </svg>
                            <p class="mb-0 ms-1"><?php echo $job["jobType"]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 right-side d-flex justify-content-center align-items-center">
                    <button class="btn btn-primary w-75">View</button>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
    <?php include './footer.php'; ?>
    <!-- CDN for Bootstrap 5.1.3 dependencies  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>`