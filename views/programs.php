<!DOCTYPE html>
<html>
<head>
    <title>Programs</title>
    <style>
        body {
            font-family: Arial;
            background: #f5f1e8;
            padding: 40px;
        }

        .program {
            background: white;
            padding: 20px;
            margin-bottom: 15px;
            border-left: 5px solid #a0522d;
        }

        .price {
            float: right;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2>Training Programs</h2>

<?php foreach ($courses as $c): ?>
    <div class="program">
        <span class="price">৳<?= $c['price'] ?></span>
        <h3><?= $c['title'] ?></h3>
        <p>Duration: <?= $c['duration'] ?></p>
    </div>
<?php endforeach; ?>

</body>
</html>