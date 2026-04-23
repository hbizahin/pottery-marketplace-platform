<!DOCTYPE html>
<html>
<head>
    <title>Artists</title>
    <style>
        body {
            font-family: Arial;
            background: #f5f1e8;
            padding: 40px;
        }

        .grid {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card {
            width: 250px;
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .info {
            padding: 15px;
        }
    </style>
</head>
<body>

<h2>Artists</h2>

<div class="grid">
    <?php foreach ($artists as $a): ?>
        <div class="card">
            <img src="<?= $a['image'] ?>">
            <div class="info">
                <h3><?= $a['name'] ?></h3>
                <p><?= $a['bio'] ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>