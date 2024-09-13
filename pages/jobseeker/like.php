<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Like page</title>
  <!-- CDN for Bootstrap 5.1.3 dependencies  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../assets/css/globals.css">
  <style>
    .nav-link {
      color: #fafafa !important;
    }

    .custom-input-disabled {
      background-color: white !important;
      border-color: #B1AEAE !important;
      cursor: not-allowed;
    }
  </style>
</head>

<body>
  <?php include './navbar-after-login.php'; ?>

  <div class="container my-5">
    <div class="d-flex flex-row bd-highlight mb-3 align-items-center">
      <div class="p-1 bd-highlight">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left"
          viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
        </svg>
      </div>
      <div class="p-1 bd-highlight" style="margin-left: 18rem;">
        <h1>Like</h1>
      </div>
    </div>

    <div class="container row justify-content-center">
      <div class="col-md-6">
        <div class="row mt-5 align-items-center">
          <div class="col">
            <input type="text" class="form-control text-center rounded-pill custom-input-disabled"
              value="Graphic designer" disabled />
          </div>
          <div class="col-auto">
            <button class="btn btn-primary rounded-pill">Unlike</button>
          </div>
        </div>
        <div class="row mt-5 align-items-center">
          <div class="col">
            <input type="text" class="form-control text-center rounded-pill custom-input-disabled"
              value="3D Animation Designer" disabled />
          </div>
          <div class="col-auto">
            <button class="btn btn-primary rounded-pill">Unlike</button>
          </div>
        </div>
        <div class="row mt-5 align-items-center">
          <div class="col">
            <input type="text" class="form-control text-center rounded-pill custom-input-disabled" value="Event manager"
              disabled />
          </div>
          <div class="col-auto">
            <button class="btn btn-primary rounded-pill">Unlike</button>
          </div>
        </div>
        <div class="row mt-5 align-items-center">
          <div class="col">
            <input type="text" class="form-control text-center rounded-pill custom-input-disabled"
              value="Interior Designer" disabled />
          </div>
          <div class="col-auto">
            <button class="btn btn-primary rounded-pill">Unlike</button>
          </div>
        </div>
        <div class="row mt-5 align-items-center">
          <div class="col">
            <input type="text" class="form-control text-center rounded-pill custom-input-disabled"
              value="UI/UX Designer" disabled />
          </div>
          <div class="col-auto">
            <button class="btn btn-primary rounded-pill">Unlike</button>
          </div>
        </div>
        <div class="row mt-5 align-items-center">
          <div class="col">
            <input type="text" class="form-control text-center rounded-pill custom-input-disabled" value="Journalist"
              disabled />
          </div>
          <div class="col-auto">
            <button class="btn btn-primary rounded-pill">Unlike</button>
          </div>
        </div>
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