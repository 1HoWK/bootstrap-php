<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Like page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
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
  <script>
    function back() {
      window.history.back();
    }
  </script>
</head>

<body>
  <?php include './navbar-after-login.php'; ?>

  <div class="container mt-5" style="margin-bottom: 12rem;">
    <div class="d-flex flex-row bd-highlight mb-3 align-items-center">
      <div class="p-1 bd-highlight">
        <button class="back-button" onclick="back()">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
          </svg>
        </button>
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
            <button class="btn btn-primary rounded-pill custom-button-bg">Unlike</button>
          </div>
        </div>
        <div class="row mt-5 align-items-center">
          <div class="col">
            <input type="text" class="form-control text-center rounded-pill custom-input-disabled"
              value="3D Animation Designer" disabled />
          </div>
          <div class="col-auto">
            <button class="btn btn-primary rounded-pill custom-button-bg">Unlike</button>
          </div>
        </div>
        <div class="row mt-5 align-items-center">
          <div class="col">
            <input type="text" class="form-control text-center rounded-pill custom-input-disabled" value="Event manager"
              disabled />
          </div>
          <div class="col-auto">
            <button class="btn btn-primary rounded-pill custom-button-bg">Unlike</button>
          </div>
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