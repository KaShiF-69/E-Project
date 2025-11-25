-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2025 at 10:25 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elegancesalon`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointment_id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `service` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` enum('pending','confirmed','completed','cancelled') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointment_id`, `name`, `email`, `service`, `date`, `time`, `status`) VALUES
(35, 'xyz', 'xyz@gmail.com', 'Massage', '2025-11-26', '13:50:00', 'pending'),
(36, 'kashif', 'kashif@gmail.com', 'Haircut', '2025-11-29', '14:57:00', 'pending'),
(37, 'demo', 'demo@gmail.com', 'Skin Care', '2025-11-26', '15:01:00', 'pending'),
(38, 'ali', 'ali@gmail.com', 'Manicure', '2025-11-30', '15:08:00', 'pending'),
(39, 'ali', 'ali@gmail.com', 'Manicure', '2025-11-30', '15:08:00', 'pending'),
(40, 'ali', 'ali@gmail.com', 'Manicure', '2025-11-30', '15:08:00', 'pending'),
(41, 'abc', 'abc@gmail.com', 'Makeup', '2025-11-28', '15:11:00', 'pending'),
(42, 'abc', 'abc@gmail.com', 'Makeup', '2025-11-28', '15:11:00', 'pending'),
(43, 'abc', 'abc@gmail.com', 'Makeup', '2025-11-28', '15:11:00', 'pending'),
(44, 'abc', 'abc@gmail.com', 'Makeup', '2025-11-28', '15:11:00', 'pending'),
(45, 'abc', 'abc@gmail.com', 'Makeup', '2025-11-28', '15:11:00', 'pending'),
(46, 'zafar', 'zafar@gmail.com', 'Pedicure', '2025-11-30', '15:57:00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(150) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 'kashif', 'kashif@gmail.com', 'abc', 'xyz', '2025-11-20 17:09:23');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `client_name` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `image` varchar(1000) NOT NULL,
  `rating` int(11) DEFAULT NULL CHECK (`rating` between 1 and 5),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `client_id`, `client_name`, `message`, `image`, `rating`, `created_at`) VALUES
(1, NULL, 'Ariana Lopez', 'Great service! My haircut and skincare treatment were perfect. I left feeling refreshed and pampered.', 'testimonial-1.jpg', NULL, '2025-11-20 17:39:01'),
(2, NULL, 'Sofia Martinez', 'Lovely salon! The manicure and pedicure were relaxing, and my nails look amazing.', 'testimonial-2.jpg', NULL, '2025-11-20 17:41:56'),
(3, NULL, 'Emma Reynolds', 'Fantastic experience! The massage was calming and the makeup came out beautifully.', 'testimonial-3.jpg', NULL, '2025-11-20 17:45:56'),
(4, NULL, 'Natalie Carter', 'Top-quality service every time. From haircuts to skincare, Elegance Salon never disappoints.', 'testimonial-4.jpg', NULL, '2025-11-20 17:48:30'),
(5, NULL, 'Lila Sharma', 'Wonderful service! My pedicure and skincare session were relaxing and professionally done.', 'testimonial-2.jpg', NULL, '2025-11-20 17:49:46'),
(6, NULL, 'Chloe Bennett', 'Absolutely loved my haircut and makeup. Friendly staff and beautiful results every time!', 'testimonial-4.jpg', NULL, '2025-11-20 17:51:27');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_description` varchar(1000) NOT NULL,
  `quantity` int(11) DEFAULT 0,
  `reorder_level` int(11) DEFAULT 5,
  `cost_price` decimal(10,0) DEFAULT NULL,
  `item_img` varchar(300) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`item_id`, `item_name`, `item_description`, `quantity`, `reorder_level`, `cost_price`, `item_img`, `supplier_id`) VALUES
(1, 'Luxury Hair Oil', 'A deeply nourishing blend that strengthens roots, reduces hair fall, and restores natural shine. This lightweight oil absorbs quickly, leaving your hair smooth, silky, and revitalized without feeling greasy.', 0, 5, 500, 'hair_oil.jpg', NULL),
(2, 'Skin Glow Serum', 'A powerful brightening serum enriched with vitamins and antioxidants. Designed to hydrate the skin, fade dark spots, and enhance natural radiance for a fresh, dewy complexion.', 0, 5, 400, 'skin_serum.jpg', NULL),
(3, 'Makeup Brush Set', 'A premium all-in-one brush collection perfect for flawless makeup application. Soft bristles ensure smooth blending, while durable handles provide precision and control for both beginners and professionals.', 0, 5, 200, 'brush_set.jpg', NULL),
(4, 'Nail Polish Kit', 'A vibrant nail polish collection featuring long-lasting, chip-resistant shades. Ideal for creating stunning nail art or a simple classic finish from the comfort of your home.', 0, 5, 3000, 'nail_kit.jpg', NULL),
(5, 'Hair Straightener', 'A high-performance styling tool that delivers smooth, sleek, and salon-quality straight hair. Its fast-heating plates glide seamlessly, reducing frizz and adding instant shine.', 0, 5, 5000, 'straightener.jpg', NULL),
(6, 'Beauty Cream', 'A gentle daily cream that hydrates, brightens, and softens the skin. Infused with natural extracts, it helps even out skin tone and maintains healthy, glowing skin all day long.', 0, 5, 1000, 'beauty_cream.jpg', NULL),
(7, 'Face Cleanser', 'A refreshing cleanser formulated to remove dirt, oil, and impurities without stripping moisture. Leaves the skin clean, balanced, and naturally bright with every wash.', 0, 5, 800, 'cleanser.jpg', NULL),
(8, 'Premium Shampoo', 'A salon-grade shampoo that strengthens hair from root to tip. Helps repair damage, adds volume, and leaves hair soft, manageable, and luxuriously smooth after every use.', 0, 5, 1200, 'shampoo.jpg', NULL),
(13, 'example', '', 2, 5, 2, 'pak.webp', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `offer_id` int(11) NOT NULL,
  `offer_name` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` varchar(300) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`offer_id`, `offer_name`, `price`, `image`, `description`) VALUES
(1, 'Haircut', 800, 'price-1.jpg', 'Precision haircuts tailored to your face shape and lifestyle a modern, flattering look finished with expert styling.'),
(2, 'Makeup', 5000, 'price-2.jpg', 'Professional makeup for every occasion, from natural day looks to full glam long-lasting products and airbrush techniques.'),
(3, 'Manicure', 2000, 'price-3.jpg', 'Careful nail shaping, cuticle treatment and polish application for healthy, salon-fresh hands and long-lasting finish.'),
(4, 'Pedicure', 1800, 'price-4.jpg', 'Relaxing foot bath, exfoliation and nail care to restore softness and comfort, finished with your choice of polish.'),
(5, 'Massage', 2800, 'price-5.jpg', 'Therapeutic massage options to relieve tension, improve circulation and restore balance tailored to your needs.'),
(6, 'Skin Care', 3000, 'price-6.jpg', 'Customized facials and skin treatments using professional products to cleanse, hydrate and brighten your complexion.');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `image` varchar(1000) NOT NULL,
  `name` varchar(100) NOT NULL,
  `profession` varchar(1000) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `user_id`, `image`, `name`, `profession`, `phone`, `email`, `password`) VALUES
(12, NULL, 'team-1.jpg', 'Lily Taylor', 'Hair Specialist', '1234567890', 'lily@gmail.com', '123'),
(13, NULL, 'team-2.jpg', 'Olivia Smith', 'Nail Designer', '123456789', 'olivia@gmail.com', '123'),
(14, NULL, 'team-3.jpg', 'Ava Brown', 'Beauty Specialist', '123456789', 'ava@gmail.com', '123'),
(15, NULL, 'team-4.jpg', 'Amelia Jones', 'Spa Specialist', '123456789', 'amelia@gmail.com', '123'),
(16, NULL, 'team-4.jpg', 'Amelia Jones', 'Spa Specialist', '123456789', 'ameliajones@gmail.com', '123'),
(17, NULL, 'team-3.jpg', 'Ava Brown', 'Beauty Specialist', '123456789', 'avabrown@gmail.com', '123'),
(18, NULL, 'team-2.jpg', 'Olivia Smith', 'Nail Designer', '123456789', 'oliviasmith@gmail.com', '123'),
(19, NULL, 'team-1.jpg', 'Lily Taylor', 'Hair Specialist', '123456789', 'lilytaylor@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplier_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact_person` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `supplier_payment` decimal(10,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `role` enum('user','staff','admin') DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `phone`, `role`, `created_at`) VALUES
(4, 'kashif', 'kashif@gmail.com', '123', '123', 'admin', '2025-11-12 22:38:53'),
(5, 'abc', 'abc@gmail.com', '123', '123456789', 'user', '2025-11-12 22:39:58'),
(6, 'gvt', 'hello@gmail.com', '123', '1231241', 'user', '2025-11-13 12:54:32'),
(7, 'Aqib', 'Aqib@gmail.com', '555', '123123', 'staff', '2025-11-13 13:07:09'),
(8, 'ali', 'ali@gmail.com', '123', '123', 'staff', '2025-11-14 10:29:56'),
(13, 'asif', 'asif@gmail.com', '123', '0123456789', 'user', '2025-11-23 17:10:43'),
(14, 'wasif', 'wasif@gmail.com', '123', '9602742937', 'user', '2025-11-23 17:11:41'),
(22, 'moiz', 'moiz@gmail.com', '123', '23465457547', 'user', '2025-11-23 17:16:24'),
(24, 'azan', 'azan@gmail.com', '123', '3244545746', 'user', '2025-11-23 17:18:14'),
(25, 'hassan', 'hassan@gmail.com', '123', '36454376', 'user', '2025-11-23 17:21:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`supplier_id`) ON DELETE SET NULL;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
