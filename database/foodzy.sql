-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2019 at 05:12 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodzy`
--

-- --------------------------------------------------------

--
-- Table structure for table `pizzas`
--

CREATE TABLE `pizzas` (
  `pid` int(11) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `pdes` text NOT NULL,
  `pricereg` int(11) NOT NULL,
  `pricemed` int(11) NOT NULL,
  `pricelar` int(11) NOT NULL,
  `ptype` varchar(10) NOT NULL,
  `pimage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pizzas`
--

INSERT INTO `pizzas` (`pid`, `pname`, `pdes`, `pricereg`, `pricemed`, `pricelar`, `ptype`, `pimage`) VALUES
(1, 'MARGHERITA', 'A hugely popular margherita, with a deliciously tangy single cheese topping', 75, 170, 315, 'veg', 'pizzas/margheritasingle.png'),
(2, 'DOUBLE CHEESE MARGHERITA', 'The ever-popular Margherita - loaded with extra cheese... oodies of it!', 120, 255, 410, 'veg', 'pizzas/margherita.png'),
(8, 'FARM HOUSE', 'A pizza that goes ballistic on veggies! Check out this mouth watering overload of crunchy, crisp capsicum, succulent mushrooms and fresh tomatoes.', 205, 385, 595, 'veg', 'pizzas/farmhouse.png'),
(9, 'PEPPY PANEER', 'Chunky paneer with crisp capsicum and spicy red pepper - quite a mouthful!', 205, 385, 595, 'veg', 'pizzas/peppypaneer.png'),
(10, 'MEXICAN GREEN WAVE', 'A pizza loaded with crunchy onions, crisp capsicum, juicy tomatoes and jalapeno with a liberal sprinkling of exotic Mexican herbs.\r\n\r\n', 205, 385, 595, 'veg', 'pizzas/mexgreen.png'),
(11, 'DELUXE VEGGIE', 'For a vegetarian looking for a BIG treat that goes easy on the spices, this one\'s got it all.. The onions, the capsicum, those delectable mushrooms - with paneer and golden corn to top it all.\r\n\r\n', 235, 450, 695, 'veg', 'pizzas/deluxeveg.png'),
(12, '5 PEPPER', 'Dominos introduces \"5 Peppers\" an exotic new Pizza. Topped wih red bell pepper, yellow bell pepper, capsicum, red paprika, jalapeno & sprinked with exotic herb\r\n\r\n', 235, 450, 695, 'veg', 'pizzas/five-peppers.png'),
(13, 'VEG EXTRAVAGANZA', 'A pizza that decidedly staggers under an overload of golden corn, exotic black olives, crunchy onions, crisp capsicum, succulent mushrooms, juicyfresh tomatoes and jalapeno - with extra cheese to go all around.', 235, 450, 695, 'veg', 'pizzas/vegextra.png'),
(14, 'CHEESE N CORN', 'Cheese I Golden Corn', 165, 305, 495, 'veg', 'pizzas/Corn_cheese.png'),
(15, 'PANEER MAKHANI', 'Paneer and Capsicum on Makhani Sauce', 205, 385, 595, 'veg', 'pizzas/PaneerMakhni.jpg'),
(16, 'VEGGIE PARADISE', 'Goldern Corn, Black Olives, Capsicum & Red Paprika', 205, 385, 595, 'veg', 'pizzas/VeggieParadise.jpg'),
(17, 'FRESH VEGGIE', 'Onion I Capsicum\r\n\r\n', 165, 305, 495, 'veg', 'pizzas/Fresh_Veggie-01.png'),
(18, 'PEPPER BARBECUE CHICKEN', 'Pepper Barbecue Chicken I Cheese', 165, 305, 495, 'non-veg', 'pizzas/PepperBarbecueChicken.jpg'),
(19, 'CHICKEN TIKKA', 'Chicken Tikka I Onion on Makhani Sauce', 235, 450, 695, 'non-veg', 'pizzas/ChickenTikka.jpg'),
(20, 'CHICKEN SAUSAGE', 'Chicken Sausage I Cheese', 165, 305, 495, 'non-veg', 'pizzas/266X265pix_Chicken_Sausage.png'),
(21, 'CHICKEN GOLDEN DELIGHT', 'Mmm! Barbeque chicken with a topping of golden corn loaded with extra cheese. Worth its weight in gold!', 235, 450, 695, 'non-veg', 'pizzas/golden.png'),
(22, 'NON VEG SUPREME', 'Bite into supreme delight of Black Olives, Onions, Grilled Mushrooms, Pepper BBQ Chicken, Peri-Peri Chicken, Grilled Chicken Rashers', 295, 555, 835, 'non-veg', 'pizzas/Non-Veg-Supreme.jpg'),
(23, 'CHICKEN DOMINATOR', 'Treat your taste buds with Double Pepper Barbecue Chicken, Peri-Peri Chicken, Chicken Tikka & Grilled Chicken Rashers', 295, 555, 835, 'non-veg', 'pizzas/ChickenDominator10.jpg'),
(24, 'PERI-PERI CHICKEN', 'Peri-Peri Chicken I Red Paprika\r\n\r\n', 205, 385, 595, 'non-veg', 'pizzas/Peri-PeriChicken.jpg'),
(25, 'PEPPER BARBECUE & ONION', 'Pepper Barbecue Chicken I Onion\r\n\r\n', 205, 385, 595, 'non-veg', 'pizzas/PepperBarbecueOnion.jpg'),
(26, 'CHICKEN FIESTA', 'Grilled Chicken Rashers I Peri-Peri Chicken I Onion I Capsicum', 235, 450, 695, 'non-veg', 'pizzas/chunky-chicken.png'),
(27, 'VEG LOADED', 'Tomato I Jalapeno I Grilled Mushroom I Beans in a fresh Pan Crust', 139, 0, 0, 'pz-mania', 'pizzas/PrimeLoadedL.jpg'),
(28, 'CHEESY', 'Orange Cheddar Cheese I Mozzarella', 95, 0, 0, 'pz-mania', 'pizzas/PrimeCheesyL.jpg'),
(29, 'CAPSICUM', 'Capsicum', 69, 0, 0, 'pz-mania', 'pizzas/CapsicumVeg.jpg'),
(30, 'ONION', 'onion', 59, 0, 0, 'pz-mania', 'pizzas/onion_veg.jpg'),
(31, 'GOLDEN CORN', 'Golden Corn', 75, 0, 0, 'pz-mania', 'pizzas/golden_corn_veg.jpg'),
(32, 'PANEER & ONION', 'Creamy Paneer I Onion', 89, 0, 0, 'pz-mania', 'pizzas/Paneer_Special.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` int(11) DEFAULT NULL,
  `password` text NOT NULL,
  `userImage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `phoneno`, `password`, `userImage`) VALUES
(6, 'rahul', 'gupta', 'rahul26021999@gmail.com', 2147483647, '123', 'userImages/17-09-2018-1537209884.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pizzas`
--
ALTER TABLE `pizzas`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `unique` (`pname`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pizzas`
--
ALTER TABLE `pizzas`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
