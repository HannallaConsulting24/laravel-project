
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drug Search</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="colorlib.com">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
        <link href="<?php echo e(asset('searchPage/css/main.css')); ?>" rel="stylesheet" />
      
</head>

<form action="<?php echo e(route('ndc.search')); ?>" method="GET">
    <input type="text" name="ndc" placeholder="Enter NDC" required>
    <button type="submit">Search</button>
</form>
<?php /**PATH C:\PharmacyTool\resources\views/searchby.blade.php ENDPATH**/ ?>