<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <title>Uploading images</title>
  <style type="text/css">
    .brand {
      background: #cbb09c !important;
    }

    .brand-text {
      color: #cbb09c !important;
    }

    form {
      padding: 5rem;
    }

    .galery_container {
      padding: 3rem;
      display: grid;
      grid-gap: 20px 35px;

      grid-template-columns: repeat(3, 1fr);

    }
  </style>
</head>

<body class="grey lighten-4">
  <nav class="white z-depth-0">
    <div class="container">
      <a href="#" class="brand-logo brand-text">Image uploader</a>
      <ul id="nav-mobile" class="right hide-on-small-and-down">
        <li><a href="#" class="btn brand z-depth-0">Add a Image</a></li>
      </ul>
    </div>
  </nav>