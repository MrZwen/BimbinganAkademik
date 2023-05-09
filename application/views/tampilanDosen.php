<html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tampilan Dosen</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Tampilan Dosen</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
<?php
  if (empty($konten)){

    echo '';

  }
  else  {
    echo $konten ;
  }
?>


</body>
</html>