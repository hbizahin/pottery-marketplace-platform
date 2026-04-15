<!DOCTYPE html>
<html>
<head>
    <title>My Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f1e8;
            margin: 0;
            padding: 40px;
            color: #3d2b1f;
        }

        .cart-wrapper {
            max-width: 1100px;
            margin: 0 auto;
        }

        h1 {
            margin-bottom: 30px;
        }

        .cart-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #fffaf3;
            border-radius: 16px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.06);
        }

        .cart-left {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .cart-left img {
            width: 90px;
            height: 90px;
            object-fit: cover;
            border-radius: 12px;
        }

        .cart-info h3 {
            margin: 0 0 8px;
        }

        .cart-info p {
            margin: 0;
            color: #7a5c48;
        }

        .cart-right {
            text-align: right;
        }

        .qty-form input {
            width: 60px;
            padding: 6px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        .btn {
            background: #a5522a;
            color: white;
            border: none;
            padding: 10px 16px;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-light {
            background: #e8d8c8;
            color: #5a3b28;
        }

        .summary {
            margin-top: 30px;
            background: #fffaf3;
            padding: 25px;
            border-radius: 16px;
            text-align: right;
            box-shadow: 0 4px 12px rgba(0,0,0,0.06);
        }
    </style>
</head>
<body>
    <div class="cart-wrapper">
        <h1>Your Cart</h1>

        <?php if (!empty($cartItems)): ?>
            <?php foreach ($cartItems as $item): ?>
                <div class="cart-item">
                    <div class="cart-left">
                        <img src="<?= $item['image']; ?>" alt="<?= htmlspecialchars($item['name']); ?>">
                        <div class="cart-info">
                            <h3><?= htmlspecialchars($item['name']); ?></h3>
                            <p>Price: ৳<?= $item['price']; ?></p>
                            <p>Subtotal: ৳<?= $item['price'] * $item['quantity']; ?></p>
                        </div>
                    </div>

                    <div class="cart-right">
                        <form class="qty-form" method="POST" action="index.php?controller=cart&action=update">
                            <input type="hidden" name="id" value="<?= $item['id']; ?>">
                            <input type="number" name="quantity" value="<?= $item['quantity']; ?>" min="1">
                            <button class="btn btn-light" type="submit">Update</button>
                        </form>
                        <br>
                        <a class="btn" href="index.php?controller=cart&action=remove&id=<?= $item['id']; ?>">Remove</a>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="summary">
                <h2>Total: ৳<?= $total; ?></h2>
                <button class="btn">Proceed to Checkout</button>
            </div>
        <?php else: ?>
            <p>Your cart is empty.</p>
        <?php endif; ?>
    </div>
</body>
</html>