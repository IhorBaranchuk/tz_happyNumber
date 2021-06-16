<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Счастливый билет</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="app.css">
    <script src="script.js"></script>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-8">
            <form method="post" id="happyNumberForm" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="value_from">N - from</label>
                    <input type="number" name="value_from" placeholder="100000" required id="value_from" min="100000"
                           max="999999" class="form-control">
                </div>
                <div class="form-group">
                    <label for="value_to">N - to</label>
                    <input type="number" name="value_to" placeholder="999999" required id="value_to" min="100000"
                           max="999999" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Run</button>
            </form>
            <div id="result"></div>
        </div>
    </div>
</div>
</body>
</html>