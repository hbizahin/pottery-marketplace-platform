-- ============================================================
--  Artisan Hearth — Pottery Marketplace
--  STEP 2 OF 2: Insert Sample Data
--
--  RUN THIS AFTER step1_create_tables.sql
--
--  Test login credentials after inserting:
--  ┌─────────────────────────┬──────────────┬──────────┐
--  │ Email                   │ Password     │ Role     │
--  ├─────────────────────────┼──────────────┼──────────┤
--  │ admin@hearth.com        │ admin123     │ admin    │
--  │ artist@hearth.com       │ artist123    │ artist   │
--  │ customer@hearth.com     │ customer123  │ customer │
--  │ student@hearth.com      │ student123   │ student  │
--  └─────────────────────────┴──────────────┴──────────┘
-- ============================================================

USE pottery_marketplace;

-- ============================================================
--  USERS (one of each role for testing)
--  Passwords are bcrypt hashed — plain text in table above
-- ============================================================
INSERT INTO Users (username, email, password_hash, role) VALUES
('admin_hearth',  'admin@hearth.com',    '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin'),
('sara_clay',     'artist@hearth.com',   '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'artist'),
('john_buyer',    'customer@hearth.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'customer'),
('mia_student',   'student@hearth.com',  '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'student');

-- ============================================================
--  ARTIST PROFILE (for sara_clay — user_id = 2)
-- ============================================================
INSERT INTO Artist_Profiles (user_id, bio, experience_level, photo_url, portfolio_url) VALUES
(2, 'I create handmade pottery inspired by nature and Bangladeshi traditions.', 'Intermediate', NULL, NULL);

-- ============================================================
--  CATEGORIES
-- ============================================================
INSERT INTO Categories (category_name) VALUES
('Vases'),
('Bowls'),
('Mugs'),
('Plates'),
('Decorative'),
('Tools');

-- ============================================================
--  PRODUCTS (artist_id = 2 is sara_clay)
--  image_url is NULL — will show default image from index.php
-- ============================================================
INSERT INTO Products (artist_id, category_id, name, description, price, stock_quantity, image_url, product_type) VALUES
(2,    1, 'Terracotta Vase',       'Handcrafted terracotta vase with earth tones.',  850.00, 10, NULL, 'pottery'),
(2,    3, 'Hand-thrown Mug',       'A cozy mug perfect for morning tea.',            450.00,  8, NULL, 'pottery'),
(2,    2, 'Glazed Serving Bowl',   'Wide bowl with a blue-grey glaze finish.',      1200.00,  5, NULL, 'pottery'),
(NULL, 6, 'Pottery Wheel Tool Set','Set of 8 essential shaping tools.',              650.00, 20, NULL, 'tool');

-- ============================================================
--  TRAINING PROGRAM (trainer_id = 2 is sara_clay)
-- ============================================================
INSERT INTO Training_Programs (trainer_id, title, description, duration, skill_level, price, max_students) VALUES
(2, 'Beginner Wheel Throwing', 'Learn the basics of throwing clay on a wheel.', '4 weeks', 'Beginner', 2500.00, 15);

-- ============================================================
--  STEP 2 COMPLETE. Your database is fully ready.
--  Browse each table in phpMyAdmin to verify the data.
-- ============================================================