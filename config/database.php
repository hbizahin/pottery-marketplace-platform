-- ============================================================
--  Artisan Hearth — Pottery Marketplace
--  STEP 1 OF 2: Create Database and All Tables
--
--  RUN THIS FIRST.
--  After running, check all 9 tables appear in phpMyAdmin.
--  Then run step2_sample_data.sql
-- ============================================================

CREATE DATABASE IF NOT EXISTS pottery_marketplace
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_general_ci;

USE pottery_marketplace;

-- ============================================================
--  TABLE 1: Users
-- ============================================================
CREATE TABLE Users (
    user_id       INT AUTO_INCREMENT PRIMARY KEY,
    username      VARCHAR(50)  NOT NULL UNIQUE,
    email         VARCHAR(100) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    role          ENUM('customer', 'artist', 'student', 'admin') NOT NULL DEFAULT 'customer',
    created_at    TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- ============================================================
--  TABLE 2: Artist_Profiles
-- ============================================================
CREATE TABLE Artist_Profiles (
    profile_id       INT AUTO_INCREMENT PRIMARY KEY,
    user_id          INT          NOT NULL,
    bio              TEXT,
    experience_level VARCHAR(100),
    photo_url        VARCHAR(255),
    portfolio_url    VARCHAR(255),
    FOREIGN KEY (user_id) REFERENCES Users(user_id) ON DELETE CASCADE
);

-- ============================================================
--  TABLE 3: Categories
-- ============================================================
CREATE TABLE Categories (
    category_id   INT AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(100) NOT NULL UNIQUE
);

-- ============================================================
--  TABLE 4: Products
-- ============================================================
CREATE TABLE Products (
    product_id     INT AUTO_INCREMENT PRIMARY KEY,
    artist_id      INT,
    category_id    INT,
    name           VARCHAR(150)   NOT NULL,
    description    TEXT,
    price          DECIMAL(10, 2) NOT NULL,
    stock_quantity INT            NOT NULL DEFAULT 0,
    image_url      VARCHAR(255),
    product_type   ENUM('pottery', 'tool') NOT NULL DEFAULT 'pottery',
    is_active      TINYINT(1)     NOT NULL DEFAULT 1,
    created_at     TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (artist_id)   REFERENCES Users(user_id)          ON DELETE SET NULL,
    FOREIGN KEY (category_id) REFERENCES Categories(category_id) ON DELETE SET NULL
);

-- ============================================================
--  TABLE 5: Cart
-- ============================================================
CREATE TABLE Cart (
    cart_id    INT AUTO_INCREMENT PRIMARY KEY,
    user_id    INT NOT NULL,
    product_id INT NOT NULL,
    quantity   INT NOT NULL DEFAULT 1,
    added_at   TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id)    REFERENCES Users(user_id)       ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES Products(product_id) ON DELETE CASCADE
);

-- ============================================================
--  TABLE 6: Orders
-- ============================================================
CREATE TABLE Orders (
    order_id         INT AUTO_INCREMENT PRIMARY KEY,
    customer_id      INT            NOT NULL,
    total_amount     DECIMAL(10, 2) NOT NULL,
    shipping_address TEXT           NOT NULL,
    payment_method   VARCHAR(50)    NOT NULL,
    status           ENUM('pending', 'completed', 'shipped', 'cancelled') DEFAULT 'pending',
    order_date       TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (customer_id) REFERENCES Users(user_id) ON DELETE CASCADE
);

-- ============================================================
--  TABLE 7: Order_Items
-- ============================================================
CREATE TABLE Order_Items (
    order_item_id     INT AUTO_INCREMENT PRIMARY KEY,
    order_id          INT            NOT NULL,
    product_id        INT            NOT NULL,
    quantity          INT            NOT NULL,
    price_at_purchase DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (order_id)   REFERENCES Orders(order_id)     ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES Products(product_id) ON DELETE CASCADE
);

-- ============================================================
--  TABLE 8: Training_Programs
-- ============================================================
CREATE TABLE Training_Programs (
    program_id   INT AUTO_INCREMENT PRIMARY KEY,
    trainer_id   INT            NOT NULL,
    title        VARCHAR(150)   NOT NULL,
    description  TEXT,
    duration     VARCHAR(50),
    skill_level  VARCHAR(50),
    price        DECIMAL(10, 2) NOT NULL DEFAULT 0.00,
    max_students INT            NOT NULL DEFAULT 20,
    created_at   TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (trainer_id) REFERENCES Users(user_id) ON DELETE CASCADE
);

-- ============================================================
--  TABLE 9: Enrollments
-- ============================================================
CREATE TABLE Enrollments (
    enrollment_id   INT AUTO_INCREMENT PRIMARY KEY,
    student_id      INT NOT NULL,
    program_id      INT NOT NULL,
    payment_status  ENUM('pending', 'paid') NOT NULL DEFAULT 'pending',
    enrollment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (student_id) REFERENCES Users(user_id)                ON DELETE CASCADE,
    FOREIGN KEY (program_id) REFERENCES Training_Programs(program_id) ON DELETE CASCADE
);

-- ============================================================
--  STEP 1 COMPLETE.
--  You should now see 9 tables in phpMyAdmin:
--  users, artist_profiles, categories, products, cart,
--  orders, order_items, training_programs, enrollments
--
--  Now run step2_sample_data.sql
-- ============================================================