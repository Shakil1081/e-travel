-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2016 at 10:01 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `job_position` varchar(200) NOT NULL,
  `user_type` int(10) NOT NULL DEFAULT '2',
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `user_name`, `job_position`, `user_type`, `user_email`, `user_password`, `user_picture`) VALUES
(1, 'Anik', 'admin', 2, 'anrctg@gmailcom', '12345', ''),
(2, 'Taher', 'Desiner', 2, 'thaher@gmail.com', '12345', ''),
(3, 'Md Younus', '', 2, 'younus@gmail.com', '12345', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `id` int(1) NOT NULL,
  `customer_first_name` varchar(200) NOT NULL,
  `customer_last_name` varchar(200) NOT NULL,
  `customer_contact_number` varchar(200) NOT NULL,
  `customer_email` varchar(200) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_country` varchar(200) NOT NULL,
  `customer_city` varchar(200) NOT NULL,
  `customer_zipcode` varchar(200) NOT NULL,
  `customer_password` varchar(200) NOT NULL,
  `email_verified` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`id`, `customer_first_name`, `customer_last_name`, `customer_contact_number`, `customer_email`, `customer_address`, `customer_country`, `customer_city`, `customer_zipcode`, `customer_password`, `email_verified`) VALUES
(1, 'taher', '0', '01555', 'asdfds@gmail.com', 'O,R Nizam road, chitagong', '', '', '', '12345', 'yes'),
(3, 'md', 'hossen', '+8801818370509', 'anrctg@gmail.com', '118/a hillview r/a', 'Bangladesh', 'chittagong', '4209', '1234512345', ''),
(6, 'md', 'hossen', '+8801818370509', 'anrctg2@gmail.com', '118/a hillview r/a', 'Bangladesh', 'chittagong', '4209', 'abgghhsd', ''),
(7, 'Md', 'Hossen', '01818370509', 'anrctg3@gmail.com', '118/a', 'United States', 'ctg', '3433', 'dsafdas', ''),
(8, 'Md', 'Hossen', '01818370509', 'anrctg3@gmail.com', '118/a', 'United States', 'ctg', '3433', 'dsafdas', 'Yes'),
(9, 'anik2', 'anowr2', '+8801818370509', 'anowar@rocketmail.com', '118/a hillview r/a', 'Bangladesh', 'chittagong', '4209', '12345', 'Yes'),
(10, 'Md', 'hossen', '1818370509', 'anrclans3@gmail.com', '222', 'Bangladesh', 'ctg', '3433', '123456', ''),
(11, 'md', 'hossen', '1818370509', 'sddsfdsdsf@rocketmail.com', '118/a hillview r/a, road 6, panchlish', 'Bangladesh', 'chittagong', '4209', '12345', ''),
(12, 'md', 'hossen', '1818370509', 'dsfsdfdffsd@gmail.com', '118/a hillview r/a, road 6, panchlish', 'Bangladesh', 'chittagong', '4209', '12345', ''),
(13, 'Saiful', 'Islam', '01817-000000', 'msitarek.khan7@gmail.com', 'Oxygen', 'Bangladesh', 'Chittagong', '3433', '12345', ''),
(14, 'md', 'hossen', '+8801818370509', 'anrcdsfassaddsatg@gmail.com', '118/a hillview r/a', 'Bangladesh', 'chittagong', '4209', '1234512345', ''),
(15, 'md', 'hossen', '+8801818370509', 'andfdasfdsasdafsdrctg@gmail.com', '118/a hillview r/a', 'Bangladesh', 'chittagong', '4209', '1234512345', ''),
(16, 'md', 'hossen', '+8801818370509', 'anrcdsfsddsdsftg@gmail.com', '118/a hillview r/a', 'Bangladesh', 'chittagong', '4209', '1234512345', ''),
(17, 'md', 'hossen', '+8801818370509', 'aaaaaaaaaaaaaaaaaaaaaaaanrctg@gmail.com', '118/a hillview r/a', 'Bangladesh', 'chittagong', '4209', '1234512345', ''),
(18, 'md', 'hossen', '+8801818370509', 'anrcsdaadstg@gmail.com', '118/a hillview r/a', 'Bangladesh', 'chittagong', '4209', '1234512345', ''),
(19, 'Md', 'Yunus', '+8801818370509', 'younus.bitm@ygmail.com', '118/a hillview r/a', 'Bangladesh', 'chittagong', '4209', '122345', ''),
(20, 'md', 'hossen', '+8801818370509', 'fsadedfdfgfdsgfdg@gmail.com', '118/a hillview r/a', 'Bangladesh', 'chittagong', '4209', '1234512345', ''),
(21, 'md', 'hossen', '+8801818370509', 'anrcfdgvdsfgfdsgdsfgtg@gmail.com', '118/a hillview r/a', 'Bangladesh', 'chittagong', '4209', '1234512345', ''),
(22, 'md', 'hossen', '+8801818370509', 'anrcrtg@gmail.com', '118/a hillview r/a', 'Bangladesh', 'chittagong', '4209', '1234512345', ''),
(23, 'md', 'hossen', '+8801818370509', 'anrrerttrctg@gmail.com', '118/a hillview r/a', 'Bangladesh', 'chittagong', '4209', '1234512345', ''),
(24, 'md', 'hossen', '+8801818370509', 'anr445ctg@gmail.com', '118/a hillview r/a', 'Bangladesh', 'chittagong', '4209', '1234512345', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order_hotel`
--

CREATE TABLE `customer_order_hotel` (
  `id` int(11) NOT NULL,
  `customer_details_id` int(11) NOT NULL,
  `hotel_name` varchar(200) NOT NULL,
  `hotel_location` varchar(200) NOT NULL,
  `room_category` varchar(200) NOT NULL,
  `total_room` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `arrival_time` varchar(200) NOT NULL,
  `day_of_stay` varchar(200) NOT NULL,
  `date_of_order` varchar(200) NOT NULL,
  `payment_type` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order_hotel`
--

INSERT INTO `customer_order_hotel` (`id`, `customer_details_id`, `hotel_name`, `hotel_location`, `room_category`, `total_room`, `total_price`, `arrival_time`, `day_of_stay`, `date_of_order`, `payment_type`) VALUES
(2, 1, 'Ocean Paradise', 'Chittagong', 'A', 1, 1899, '', '1', '1480405091', NULL),
(3, 1, 'Ocean Paradise', 'Chittagong', 'A', 3, 17091, '2016-11-24', '3', '1480405138', NULL),
(4, 1, 'Ocean Paradise', 'Chittagong', 'A', 3, 17091, '2016-11-24', '3', '1480406395', NULL),
(5, 1, 'Ocean Paradise', 'Chittagong', 'A', 3, 17091, '2016-11-24', '3', '1480406440', NULL),
(6, 1, 'Ocean Paradise', 'Chittagong', 'A', 3, 17091, '2016-11-24', '3', '2929-1111-16161616', NULL),
(7, 1, 'Ocean Paradise', 'Chittagong', 'A', 3, 17091, '2016-11-24', '3', '2929-1111-16161616', NULL),
(8, 1, 'Ocean Paradise', 'Chittagong', 'A', 3, 17091, '2016-11-24', '3', '29-11-1616', NULL),
(9, 1, 'Ocean Paradise', 'Chittagong', 'A', 3, 17091, '2016-11-24', '3', '29-11-2016', NULL),
(10, 1, 'Ocean Paradise', 'Chittagong', 'A', 3, 17091, '2016-11-24', '3', '29-11-2016 9:12 am', NULL),
(11, 1, 'Ocean Paradise', 'Chittagong', 'A', 3, 17091, '2016-11-24', '3', '29-11-2016 /am30/ 9:13 am', NULL),
(12, 1, 'Ocean Paradise', 'Chittagong', 'A', 3, 17091, '2016-11-24', '3', '29-11-2016 /am30/ 8:14 am', NULL),
(13, 1, 'Ocean Paradise', 'Chittagong', 'A', 3, 17091, '2016-11-24', '3', '29-11-2016 /am30/ 8:14 am', NULL),
(14, 1, 'Ocean Paradise', 'Chittagong', 'A', 3, 17091, '2016-11-24', '3', '29-11-2016 ''am30'' 8:14 am', NULL),
(15, 1, 'Ocean Paradise', 'Chittagong', 'A', 3, 17091, '2016-11-24', '3', '29-11-2016  9:17 am', NULL),
(16, 1, 'Ocean Paradise', 'Chittagong', 'A', 3, 17091, '2016-11-24', '3', '29-11-2016  9:32 am', NULL),
(17, 1, 'Ocean Paradise', 'Chittagong', 'A', 3, 17091, '2016-11-24', '3', '29-11-2016  9:37 am', NULL),
(18, 1, 'Ocean Paradise', 'Chittagong', 'A', 3, 17091, '2016-11-24', '3', '29-11-2016  9:41 am', NULL),
(19, 1, 'Ocean Paradise', 'Chittagong', 'A', 3, 17091, '2016-11-24', '3', '29-11-2016  9:42 am', NULL),
(20, 1, 'Ocean Paradise', 'Chittagong', 'A', 3, 17091, '2016-11-24', '3', '29-11-2016  9:42 am', NULL),
(21, 1, 'Ocean Paradise', 'Chittagong', 'A', 3, 17091, '2016-11-24', '3', '29-11-2016  9:43 am', NULL),
(23, 6, 'Ocean Paradise', 'Chittagong', 'A', 3, 17091, '2016-11-30', '3', '29-11-2016  10:00 am', NULL),
(24, 7, 'Ocean Paradise', 'Chittagong', 'A', 5, 30384, '2016-11-30', '4', '29-11-2016  10:01 am', NULL),
(25, 7, 'Ocean Paradise', 'Chittagong', 'A', 5, 30384, '2016-11-30', '4', '29-11-2016  10:04 am', NULL),
(26, 9, 'Ocean Paradise', 'Chittagong', 'A', 3, 40500, '2016-11-30', '3', '29-11-2016  10:52 am', NULL),
(27, 9, 'Ocean Paradise', 'Chittagong', 'A', 1, 4500, '', '1', '29-11-2016  10:54 am', NULL),
(28, 9, 'Ocean Paradise', 'Chittagong', 'A', 1, 4500, '', '1', '29-11-2016  10:59 am', NULL),
(29, 9, 'Ocean Paradise', 'Chittagong', 'A', 1, 4500, '', '1', '29-11-2016  11:00 am', NULL),
(30, 10, 'Peninsula ', 'dsfsdsf', 'A', 2, 2181824, '2016-12-30', '2', '30-11-2016  7:04 pm', NULL),
(31, 3, 'Peninsula ', 'dsfsdsf', 'A', 2, 2181824, '2016-12-30', '2', '30-11-2016  7:04 pm', NULL),
(32, 11, 'Peninsula ', 'dsfsdsf', 'A', 1, 545456, '2016-12-21', '1', '30-11-2016  7:07 pm', NULL),
(33, 12, 'Peninsula ', 'dsfsdsf', 'A', 1, 545456, '2016-12-13', '1', '30-11-2016  7:08 pm', NULL),
(34, 12, 'Peninsula ', 'dsfsdsf', 'A', 1, 545456, '2016-12-13', '1', '30-11-2016  7:08 pm', NULL),
(35, 3, 'Peninsula ', 'dsfsdsf', 'A', 1, 545456, '2016-12-13', '1', '30-11-2016  7:11 pm', NULL),
(36, 3, 'Peninsula ', 'dsfsdsf', 'A', 1, 545456, '2016-12-13', '1', '30-11-2016  7:40 pm', NULL),
(37, 3, 'Peninsula ', 'dsfsdsf', 'A', 1, 545456, '2016-12-13', '1', '30-11-2016  7:43 pm', NULL),
(38, 3, 'Peninsula ', 'dsfsdsf', 'A', 1, 545456, '2016-12-13', '1', '30-11-2016  7:46 pm', NULL),
(39, 3, 'Peninsula ', 'dsfsdsf', 'A', 1, 545456, '2016-12-13', '1', '30-11-2016  7:46 pm', NULL),
(40, 19, 'Peninsula ', 'dsfsdsf', 'A', 1, 545456, '2016-12-22', '1', '01-12-2016  6:31 am', NULL),
(41, 19, 'Peninsula ', 'dsfsdsf', 'A', 1, 545456, '2016-12-22', '1', '01-12-2016  6:31 am', NULL),
(42, 3, 'Peninsula ', 'dsfsdsf', 'A', 1, 545456, '2016-12-08', '1', '01-12-2016  6:40 am', NULL),
(43, 20, 'Peninsula ', 'dsfsdsf', 'E', 5, 45000, '2016-12-23', '3', '01-12-2016  7:11 am', NULL),
(44, 20, 'Peninsula ', 'dsfsdsf', 'E', 5, 45000, '2016-12-23', '3', '01-12-2016  7:11 am', NULL),
(45, 20, 'Peninsula ', 'dsfsdsf', 'E', 5, 45000, '2016-12-23', '3', '01-12-2016  7:15 am', NULL),
(46, 20, 'Peninsula ', 'dsfsdsf', 'E', 5, 45000, '2016-12-23', '3', '01-12-2016  7:16 am', NULL),
(47, 20, 'Peninsula ', 'dsfsdsf', 'E', 5, 45000, '2016-12-23', '3', '01-12-2016  7:17 am', NULL),
(48, 21, 'Peninsula ', 'dsfsdsf', 'E', 3, 15000, '2016-11-30', '1', '01-12-2016  7:23 am', NULL),
(49, 21, 'Peninsula ', 'dsfsdsf', 'E', 3, 15000, '2016-11-30', '1', '01-12-2016  7:23 am', NULL),
(50, 21, 'Peninsula ', 'dsfsdsf', 'E', 3, 15000, '2016-11-30', '1', '01-12-2016  7:25 am', NULL),
(51, 21, 'Peninsula ', 'dsfsdsf', 'E', 1, 5000, '2016-12-13', '1', '01-12-2016  7:28 am', NULL),
(52, 3, 'Peninsula ', 'dsfsdsf', 'E', 1, 5000, '2016-11-30', '1', '01-12-2016  7:31 am', NULL),
(53, 22, 'Peninsula ', 'dsfsdsf', 'E', 1, 5000, '2016-12-14', '1', '01-12-2016  7:33 am', NULL),
(54, 22, 'Peninsula ', 'dsfsdsf', 'E', 1, 5000, '2016-12-14', '1', '01-12-2016  7:34 am', NULL),
(55, 23, 'Peninsula ', 'dsfsdsf', 'E', 1, 5000, '2016-12-22', '1', '01-12-2016  7:35 am', NULL),
(56, 24, 'Peninsula ', 'dsfsdsf', 'E', 3, 45000, '2016-12-22', '3', '01-12-2016  7:36 am', NULL),
(57, 24, 'Peninsula ', 'dsfsdsf', 'E', 3, 45000, '2016-12-22', '3', '01-12-2016  7:38 am', NULL),
(58, 24, 'Peninsula ', 'dsfsdsf', 'E', 3, 45000, '2016-12-22', '3', '01-12-2016  7:39 am', NULL),
(59, 24, 'Peninsula ', 'dsfsdsf', 'E', 3, 45000, '2016-12-22', '3', '01-12-2016  7:39 am', NULL),
(60, 24, 'Peninsula ', 'dsfsdsf', 'E', 3, 45000, '2016-12-22', '3', '01-12-2016  7:40 am', NULL),
(61, 24, 'Peninsula ', 'dsfsdsf', 'E', 1, 5000, '2016-12-15', '1', '01-12-2016  7:45 am', NULL),
(62, 24, 'Peninsula ', 'dsfsdsf', 'E', 1, 5000, '2016-12-15', '1', '01-12-2016  7:45 am', NULL),
(63, 24, 'Peninsula ', 'dsfsdsf', 'E', 1, 5000, '2016-12-15', '1', '01-12-2016  7:49 am', NULL),
(64, 24, 'Peninsula ', 'dsfsdsf', 'E', 1, 5000, '2016-12-15', '1', '01-12-2016  7:53 am', NULL),
(65, 24, 'Peninsula ', 'dsfsdsf', 'E', 1, 5000, '2016-12-15', '1', '01-12-2016  7:53 am', NULL),
(66, 24, 'Peninsula ', 'dsfsdsf', 'E', 1, 5000, '2016-12-15', '1', '01-12-2016  7:53 am', NULL),
(67, 24, 'Peninsula ', 'dsfsdsf', 'E', 1, 5000, '2016-12-15', '1', '01-12-2016  7:53 am', NULL),
(68, 13, 'Agrabad', 'dsfdsf', 'C', 4, 2399616, '2016-12-15', '6', '01-12-2016  2:15 pm', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `list_of_hotel`
--

CREATE TABLE `list_of_hotel` (
  `id` int(11) NOT NULL,
  `hotel_name` varchar(200) NOT NULL,
  `hotel_details` text NOT NULL,
  `hotel_address` text NOT NULL,
  `hotel_location` varchar(200) NOT NULL,
  `hotel_latitude` varchar(50) NOT NULL,
  `hotel_longitude` varchar(50) NOT NULL,
  `hotel_pictures` text NOT NULL,
  `hotel_contact_number` varchar(50) NOT NULL,
  `hotel_email` varchar(100) NOT NULL,
  `hotel_add_time` date NOT NULL,
  `hotel_update_time` varchar(200) NOT NULL DEFAULT 'Not update yet',
  `is_deleted` varchar(200) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_of_hotel`
--

INSERT INTO `list_of_hotel` (`id`, `hotel_name`, `hotel_details`, `hotel_address`, `hotel_location`, `hotel_latitude`, `hotel_longitude`, `hotel_pictures`, `hotel_contact_number`, `hotel_email`, `hotel_add_time`, `hotel_update_time`, `is_deleted`) VALUES
(30, 'Allegro Holiday Suites Cox''s Bazar ', 'Allegro Holiday Suites Cox''s bazar is the most modern and furnished with the branded fixture of 25 suite rooms in Coxâ€™s Bazar. This exclusive boutique style hotel is located in walking distance from both Laboni beach and Sugandha beach, in a convenient location with a view to offer best services to its valued clients and offers convenient access to many interesting sights within close vicinity. A world class amenity for you, Allegro Holiday Suites, is placed in the Tourism Capital of Bangladesh, Coxâ€™s Bazar. Our exclusive hospitality, management and stunning design will always make your holiday enjoyable every moment.', 'Plot-65,Block-b,Kolatoli Road,', 'Cox''s Bazar, Chittagong, Bangladesh', '21.4395', '92.0077.', 'assets/images/hotels/Alg.jpg,assets/images/hotels/alg1.jpg,assets/images/hotels/alg3.jpg,assets/images/hotels/alg4.jpg', 'Tel: +88 0341 51389-91 Mobile: 01618000700, 017131', 'reza@indigenousbd.com', '0000-00-00', 'Not update yet', 'No'),
(31, 'Hotel Agrabad', 'Hotel Agrabad with its 5 star guest facilities is the best business and leisure hotel in Chittagong. Hosting their guests in the 101 rooms and suites designed specifically with the worldâ€™s luxury and comfort in mind.\r\n\r\nThe hotel houses four different multi-cuisine restaurants to ensure the satisfaction of the taste-buds of guests from all around the world. For leisure and entertainment, guests can take advantage of the fully equipped fitness centre, the six lane swimming pool and rejuvenate at the authentic Thai spa.\r\n', 'Sabder Ali Road, Agrabad C/A,', 'Chittagong, Bangladesh', '22.3304', '91.8252', 'assets/images/hotels/ag.jpg,assets/images/hotels/ag1.jpg,assets/images/hotels/ag2.jpg,assets/images/hotels/ag3.jpg', ' +88031 -713311-8', 'info@agrabadhotels.com', '0000-00-00', 'Not update yet', '02-12-2016  9:48 am'),
(32, 'Ocean Paradise', 'Awaken to a tropical sea view as the light spills into your room. Spend the day basking in the sun or exploring other sights and sounds on the mountains, or coral reef islands.', '28-29 Hotel Motel Zone, Kolatoli Road ', 'Cox''s Bazar, Bangladesh', '21.4394636', '92.0077.', 'assets/images/hotels/oc (2).jpg,assets/images/hotels/oc.jpg,assets/images/hotels/oc3.png,assets/images/hotels/oc4.jpg', ' +88 0341 52370-9', 'reservation@oceanparadisehotel.com', '0000-00-00', 'Not update yet', 'No'),
(33, 'AB Garden Apartment Cox''s Bazar ', 'AB Garden is offering and excellent location with self-contained apartments. You are welcome to share the heavenly peace and happiness with AB Garden. Your happiness is its pleasure. Because, AB Garden ensured their customers& satisfaction. It offers comfortable and clean accommodation, convenient to all the amenities and beach. The atmosphere here is very warm, friendly and relaxed.An innovative alternative to luxurious Apartment with a huge choice of well-maintained apartments to suite every budget. All apartments are fully self-contain providing everything needed. The land of color, flaming, sun-sets, golden beaches, purple mountains are surrounded this excellent Apartment.', 'Plot-44,Block-b,Kolatoli Road,', 'Cox''s Bazar, Bangladesh', '21.4394636', '92.00773159999994', 'assets/images/hotels/ab.png,assets/images/hotels/ab1.jpg,assets/images/hotels/ab2.jpg', '01862-121666', 'info@abgarden.travel', '0000-00-00', 'Not update yet', 'No'),
(34, 'RADISSON BLU CHITTAGONG BAY VIEW', ':As the first upper upscale international accommodation in Chittagong City, the Radisson Blu Chittagong Bay View offers a modern lodging experience within walking distance M.A. Aziz Stadium and Chittagong Club Limited. Convenient amenities like free high-speed, wireless Internet, a Business Class Lounge and Chittagongâ€™s largest pillarless event facility allow business travelers to stay productive during their stay. When you''re winding down from a full day of activity, let the stress melt away with a swim in our circular infinity pool, a beverage from a pool bar or a visit to the hotel spa. After enjoying a restful nightâ€™s sleep in the contemporary furnishings of your room or suite, start your morning with a complimentary breakfast', 'S. Khaled Road, Lalkhan Bazar ', 'Chittagong, Bangladesh', '22.3304', '91.8252', 'assets/images/hotels/rc.jpg,assets/images/hotels/rc1.jpg,assets/images/hotels/rc2.jpg,assets/images/hotels/rc3.jpg,assets/images/hotels/rc4.jpg,assets/images/hotels/rc5 (2).jpg,assets/images/hotels/rc5.jpg', 'Tel: +88 031 619800 Ext. 4407 Tel: +88 031 619855 ', 'reservation.ctg@radisson.com', '0000-00-00', 'Not update yet', 'No'),
(35, 'RADISSON BLU DHAKA WATER GARDEN', ': Situated on seven beautiful acres of verdant gardens, the Radisson Blu Dhaka Water Garden is an oasis of calm and serenity in the heart of Dhaka''s primary commercial hub. Listen to the splash of numerous water features as you wind down after a day of meeting in our 3,000-square-meter event facilities or visiting nearby attractions such as the National Assembly Building and AhsanManzil. Ideal for business travelers and leisure travelers alike, the Radisson Blu offers the convenience of a business hotel and the ambience of a resort, just a ten-minute drive from the HazratShahjalal International Airport (DAC) and close to Dhaka''s diplomatic enclave. Set aside time to enjoy world-class amenities on site, including fresh cuisine at inventive restaurants, a sparkling outdoor pool, a relaxing spa, an adjacent golf course and airport transfers.', 'Airport Road Dhaka Cantonment ', 'Dhaka 1206 Bangladesh ', '21.4395', '92.0077', 'assets/images/hotels/rd.jpg,assets/images/hotels/rd1.jpg,assets/images/hotels/rd2.jpg,assets/images/hotels/rd3.jpg,assets/images/hotels/rd4.jpg,assets/images/hotels/rd5.jpg,assets/images/hotels/rd6.jpg', '+8802-983-4555', 'reservations.dhaka@radisson.com', '0000-00-00', 'Not update yet', 'No'),
(36, 'Ruposhi Bangla Hotel  ', ' Designed for both business and leisure travel, Hotel Ruposhi Bangla is ideally situated in Khilgaon; one of the city''s most popular locales. The excitement of the city center is only 2.0 km away. For those of you who want to venture out, National Museum, Liberation War Museum, Dhakeswari Temple are just some of the attractions available to visitors.', '1,Minto Road, GPO Box 504,Khilgaon', 'Dhaka, Bangladesh, 1000', '21.4395', '92.0077', 'assets/images/hotels/rb.jpg,assets/images/hotels/rb1.jpg,assets/images/hotels/rb2.jpg,assets/images/hotels/rb3.jpg', '+88 0341 52370-9', 'info@ruposhi banglahotel.com', '0000-00-00', 'Not update yet', 'No'),
(37, 'Sayeman Beach Resort', 'After fifty years of glorious past, Sayeman Beach Resort revives its famed legacy of comfort, elegance and impeccable service. An eminent landmark constructed in 1964, this legendary first private hotel of Cox''s Bazar is reborn, infusing modern sophistication into this vintage-chic, iconic hotel at a new beachfront location of Marine Drive, Kolatoli, Cox''s Bazar.', 'Marine Drive Road Jhilonja, kolatoli, ', 'Cox''s Bazar, Bangladesh', '21.4395', '92.0077.', 'assets/images/hotels/sb.jpg,assets/images/hotels/sb1.jpg,assets/images/hotels/sb2.jpg,assets/images/hotels/sb3.jpg,assets/images/hotels/sb4.jpg', 'Call +88 09610777888, +88 01755691917', 'vacation@sayemanresort.com', '0000-00-00', 'Not update yet', 'No'),
(38, 'Hotel The Cox Today', 'Hotel The Cox Today is one of the best five-star standard luxury hotel in Cox''s Bazar. It''s magnificent and uniquely located along the world''s longest natural beach in Cox''s Bazar and 10 minutes drive from The Airport. The comforts and charms of the architectural magnanimity complement the natural beauty and wonder of the Tourist destination of Cox''s Bazar. It''s an oasis which reflects contemporary style of living. We are committed to provide the guest with world class hospitality within affordable price:', 'Plot-7, Road-02, Hotel Motel Zone, Kolatoly Road', 'Cox''s Bazar, Bangladesh', '21.4395', '92.0077.', 'assets/images/hotels/ct.jpg,assets/images/hotels/ct1.jpg,assets/images/hotels/ct2.jpg,assets/images/hotels/ct3.jpg,assets/images/hotels/ct4.jpg', 'call+88-0341 52410-22', 'reservation@hotelthecoxtoday.com, info@hotelthecoxtoday.com', '0000-00-00', 'Not update yet', 'No'),
(39, 'The Peninsula Chittagong', 'Situated at the prestigious GEC circle of the Port City, our hotel provide superior services combining western sophistication and Chittgonian hospitality in a scenic and convenient location. Discover this unique retreat for business or pleasure just minutes from the commercial center surrounded by famous retail shops, restaurants and corporate offices. \r\n\r\nThe Peninsula Chittagong Hotel offers a premier setting for conferences, meetings, and corporate events. Treat your colleagues to a gracious environment, where personalized service is the standard. For your next important event, choose from our wide range of meetings rooms and venue options.\r\n\r\n', 'Bulbul Center 486/B O.R. Nizam Road ', 'Chittagong, Bangladesh', '22.3304', '91.8252', 'assets/images/hotels/pc.jpg,assets/images/hotels/pc1.jpg,assets/images/hotels/pc2.jpg,assets/images/hotels/pc3.jpg', 'call+88 031 2850860 ,+880-17-55554586', 'reservation@peninsulactg.com,info@peninsulactg.com', '0000-00-00', 'Not update yet', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `rooms_of_hotel`
--

CREATE TABLE `rooms_of_hotel` (
  `id` int(11) NOT NULL,
  `hotel_name` varchar(200) NOT NULL,
  `hotel_location` varchar(200) NOT NULL,
  `room_category` varchar(10) NOT NULL,
  `room_number` int(11) NOT NULL,
  `room_capability` int(10) NOT NULL,
  `room_price` varchar(200) NOT NULL,
  `room_details` text NOT NULL,
  `time_of_adding` varchar(200) NOT NULL,
  `time_of_last_update` varchar(255) NOT NULL,
  `is_deleted` varchar(200) NOT NULL DEFAULT 'No',
  `room_pictures` text NOT NULL,
  `user_review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms_of_hotel`
--

INSERT INTO `rooms_of_hotel` (`id`, `hotel_name`, `hotel_location`, `room_category`, `room_number`, `room_capability`, `room_price`, `room_details`, `time_of_adding`, `time_of_last_update`, `is_deleted`, `room_pictures`, `user_review`) VALUES
(7, 'The Peninsula Chittagong', 'Chittagong, Bangladesh', 'A', 401, 4, '10000', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at The Peninsula Chittagong , Chittagong is designed to meet the needs of business and leisure travellers to the city.', '02-12-2016  4:39 am', '', 'No', 'assets/images/rooms/pc5.jpg', ''),
(8, 'The Peninsula Chittagong', 'Chittagong, Bangladesh', 'A', 402, 4, '10000', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at The Peninsula Chittagong , Chittagong is designed to meet the needs of business and leisure travellers to the city.', '02-12-2016  4:39 am', '', '02-12-2016  9:48 am', 'assets/images/rooms/pc4.jpg', ''),
(9, 'The Peninsula Chittagong', 'Chittagong, Bangladesh', 'A', 403, 4, '10000', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at The Peninsula Chittagong , Chittagong is designed to meet the needs of business and leisure travellers to the city.', '02-12-2016  4:39 am', '', 'No', 'assets/images/rooms/pc6.jpg', ''),
(10, 'The Peninsula Chittagong', 'Chittagong, Bangladesh', 'A', 404, 4, '10000', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at The Peninsula Chittagong , Chittagong is designed to meet the needs of business and leisure travellers to the city.', '02-12-2016  4:40 am', '', 'No', 'assets/images/rooms/pc7.jpg', ''),
(11, 'Hotel Agrabad', 'Chittagong, Bangladesh', 'A', 101, 4, '12000', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at Hotel  Agrabad, Chittagong is designed to meet the needs of business and leisure travellers to the city.', '02-12-2016  4:54 am', '', 'No', 'assets/images/rooms/ag4.jpg,assets/images/rooms/ag5.jpg,assets/images/rooms/ag6.jpg,assets/images/rooms/ag7.jpg,assets/images/rooms/ag8.jpg,assets/images/rooms/ag9.jpg', ''),
(12, 'Hotel Agrabad', 'Chittagong, Bangladesh', 'A', 102, 4, '12000', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at Hotel  Agrabad, Chittagong is designed to meet the needs of business and leisure travellers to the city.', '02-12-2016  4:55 am', '', 'No', 'assets/images/rooms/ag4.jpg,assets/images/rooms/ag5.jpg,assets/images/rooms/ag6.jpg,assets/images/rooms/ag7.jpg,assets/images/rooms/ag8.jpg', ''),
(13, 'Hotel Agrabad', 'Chittagong, Bangladesh', 'A', 103, 4, '12000', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at Hotel  Agrabad, Chittagong is designed to meet the needs of business and leisure travellers to the city.', '02-12-2016  4:56 am', '', 'No', 'assets/images/rooms/ag4.jpg,assets/images/rooms/ag5.jpg,assets/images/rooms/ag6.jpg,assets/images/rooms/ag8.jpg,assets/images/rooms/ag9.jpg', ''),
(14, 'Hotel Agrabad', 'Chittagong, Bangladesh', 'B', 104, 4, '8000', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at Hotel  Agrabad, Chittagong is designed to meet the needs of business and leisure travellers to the city.', '02-12-2016  4:58 am', '', 'No', 'assets/images/rooms/ag4.jpg,assets/images/rooms/ag5.jpg,assets/images/rooms/ag7.jpg,assets/images/rooms/ag8.jpg,assets/images/rooms/ag9.jpg', ''),
(15, 'Hotel The Cox Today', 'Cox''s Bazar, Bangladesh', 'A', 4, 4, '1200', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at The Coxâ€™s Today, Coxâ€™s Bazar is designed to meet the needs of business and leisure travellers to the city.\r\n', '02-12-2016  5:00 am', '', 'No', 'assets/images/rooms/ct5.jpg,assets/images/rooms/ct6.jpg,assets/images/rooms/ct7.jpg,assets/images/rooms/ct8.jpg,assets/images/rooms/ct9.jpg', ''),
(16, 'Hotel The Cox Today', 'Cox''s Bazar, Bangladesh', 'A', 4, 4, '1200', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at The Coxâ€™s Today, Coxâ€™s Bazar is designed to meet the needs of business and leisure travellers to the city.\r\n', '02-12-2016  5:00 am', '', 'No', 'assets/images/rooms/ct5.jpg,assets/images/rooms/ct6.jpg,assets/images/rooms/ct7.jpg,assets/images/rooms/ct8.jpg,assets/images/rooms/ct9.jpg', ''),
(17, 'Hotel The Cox Today', 'Cox''s Bazar, Bangladesh', 'A', 4, 4, '1200', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at The Coxâ€™s Today, Coxâ€™s Bazar is designed to meet the needs of business and leisure travellers to the city.\r\n', '02-12-2016  5:00 am', '', 'No', 'assets/images/rooms/ct5.jpg,assets/images/rooms/ct6.jpg,assets/images/rooms/ct7.jpg,assets/images/rooms/ct8.jpg,assets/images/rooms/ct9.jpg', ''),
(18, 'Hotel The Cox Today', 'Cox''s Bazar, Bangladesh', 'B', 301, 4, '8000', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at The Coxâ€™s Today, Coxâ€™s Bazar is designed to meet the needs of business and leisure travellers to the city.\r\n', '02-12-2016  5:01 am', '', 'No', 'assets/images/rooms/ct5.jpg,assets/images/rooms/ct6.jpg,assets/images/rooms/ct7.jpg,assets/images/rooms/ct8.jpg,assets/images/rooms/ct9.jpg', ''),
(19, 'Sayeman Beach Resort', 'Cox''s Bazar, Bangladesh', 'A', 401, 2, '10000', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at Sayeman Beach Resort, Coxâ€™s Bazar is designed to meet the needs of business and leisure travellers to the city.', '02-12-2016  5:04 am', '', 'No', 'assets/images/rooms/sb5.jpg,assets/images/rooms/sb6.jpg,assets/images/rooms/sb7.jpg,assets/images/rooms/sb8.jpg', ''),
(20, 'Sayeman Beach Resort', 'Cox''s Bazar, Bangladesh', 'A', 402, 2, '10000', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at Sayeman Beach Resort, Coxâ€™s Bazar is designed to meet the needs of business and leisure travellers to the city.', '02-12-2016  5:04 am', '', 'No', 'assets/images/rooms/sb5.jpg,assets/images/rooms/sb6.jpg,assets/images/rooms/sb7.jpg,assets/images/rooms/sb8.jpg', ''),
(21, 'Sayeman Beach Resort', 'Cox''s Bazar, Bangladesh', 'B', 301, 2, '8000', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at Sayeman Beach Resort, Coxâ€™s Bazar is designed to meet the needs of business and leisure travellers to the city.', '02-12-2016  5:05 am', '', 'No', 'assets/images/rooms/sb5.jpg,assets/images/rooms/sb6.jpg,assets/images/rooms/sb7.jpg,assets/images/rooms/sb8.jpg', ''),
(22, 'Ruposhi Bangla Hotel  ', 'Dhaka, Bangladesh, 1000', 'A', 401, 2, '12000', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at Ruposhi Bangla Hotel, Dhaka is designed to meet the needs of business and leisure travellers to the city.', '02-12-2016  5:08 am', '', 'No', 'assets/images/rooms/rb5.jpg,assets/images/rooms/rb6.jpg,assets/images/rooms/rb7.jpg,assets/images/rooms/rb8.jpg,assets/images/rooms/rb9.jpg,assets/images/rooms/rb10.jpg', ''),
(23, 'Ruposhi Bangla Hotel  ', 'Dhaka, Bangladesh, 1000', 'A', 402, 2, '12000', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at Ruposhi Bangla Hotel, Dhaka is designed to meet the needs of business and leisure travellers to the city.', '02-12-2016  5:09 am', '', 'No', 'assets/images/rooms/rb5.jpg,assets/images/rooms/rb6.jpg,assets/images/rooms/rb7.jpg,assets/images/rooms/rb8.jpg,assets/images/rooms/rb9.jpg,assets/images/rooms/rb10.jpg', ''),
(24, 'Ruposhi Bangla Hotel  ', 'Dhaka, Bangladesh, 1000', 'A', 403, 2, '12000', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at Ruposhi Bangla Hotel, Dhaka is designed to meet the needs of business and leisure travellers to the city.', '02-12-2016  5:09 am', '', 'No', 'assets/images/rooms/rb5.jpg,assets/images/rooms/rb6.jpg,assets/images/rooms/rb7.jpg,assets/images/rooms/rb8.jpg,assets/images/rooms/rb9.jpg,assets/images/rooms/rb10.jpg', ''),
(25, 'RADISSON BLU DHAKA WATER GARDEN', 'Dhaka 1206 Bangladesh ', 'A', 401, 2, '12000', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at RADISSON BLU DHAKA WATER GARDEN, Dhaka is designed to meet the needs of business and leisure travellers to the city.', '02-12-2016  5:14 am', '', 'No', 'assets/images/rooms/rd9.jpg,assets/images/rooms/rd10.jpg,assets/images/rooms/rd11.jpg,assets/images/rooms/rd12.jpg,assets/images/rooms/rd13.jpg,assets/images/rooms/rd14.jpg', ''),
(26, 'RADISSON BLU DHAKA WATER GARDEN', 'Dhaka 1206 Bangladesh ', 'A', 402, 2, '12000', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at RADISSON BLU DHAKA WATER GARDEN, Dhaka is designed to meet the needs of business and leisure travellers to the city.', '02-12-2016  5:14 am', '', 'No', 'assets/images/rooms/rd9.jpg,assets/images/rooms/rd10.jpg,assets/images/rooms/rd11.jpg,assets/images/rooms/rd12.jpg,assets/images/rooms/rd13.jpg,assets/images/rooms/rd14.jpg', ''),
(27, 'RADISSON BLU DHAKA WATER GARDEN', 'Dhaka 1206 Bangladesh ', 'A', 403, 2, '12000', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at RADISSON BLU DHAKA WATER GARDEN, Dhaka is designed to meet the needs of business and leisure travellers to the city.', '02-12-2016  5:15 am', '', 'No', 'assets/images/rooms/rd9.jpg,assets/images/rooms/rd10.jpg,assets/images/rooms/rd11.jpg,assets/images/rooms/rd12.jpg,assets/images/rooms/rd13.jpg,assets/images/rooms/rd14.jpg', ''),
(28, 'Ocean Paradise', 'Cox''s Bazar, Bangladesh', 'A', 401, 2, '12000', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at Ocean Paradise, Coxâ€™s Bazar designed to meet the needs of business and leisure travellers to the city.', '02-12-2016  5:17 am', '', 'No', 'assets/images/rooms/oc5.jpg,assets/images/rooms/oc6.jpg,assets/images/rooms/oc7.jpg,assets/images/rooms/oc8.jpg', ''),
(29, 'Ocean Paradise', 'Cox''s Bazar, Bangladesh', 'A', 403, 2, '12000', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at Ocean Paradise, Coxâ€™s Bazar designed to meet the needs of business and leisure travellers to the city.', '02-12-2016  5:18 am', '', 'No', 'assets/images/rooms/oc5.jpg,assets/images/rooms/oc6.jpg,assets/images/rooms/oc7.jpg,assets/images/rooms/oc8.jpg', ''),
(30, 'Ocean Paradise', 'Cox''s Bazar, Bangladesh', 'A', 404, 2, '12000', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at Ocean Paradise, Coxâ€™s Bazar designed to meet the needs of business and leisure travellers to the city.', '02-12-2016  5:18 am', '', 'No', 'assets/images/rooms/oc5.jpg,assets/images/rooms/oc6.jpg,assets/images/rooms/oc7.jpg,assets/images/rooms/oc8.jpg', ''),
(31, 'Ocean Paradise', 'Cox''s Bazar, Bangladesh', 'A', 405, 2, '12000', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at Ocean Paradise, Coxâ€™s Bazar designed to meet the needs of business and leisure travellers to the city.', '02-12-2016  5:19 am', '', 'No', 'assets/images/rooms/oc5.jpg,assets/images/rooms/oc6.jpg,assets/images/rooms/oc7.jpg,assets/images/rooms/oc8.jpg', ''),
(32, 'Ruposhi Bangla Hotel  ', 'Dhaka, Bangladesh, 1000', 'A', 405, 2, '12000', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at Ocean Paradise, Coxâ€™s Bazar designed to meet the needs of business and leisure travellers to the city.', '02-12-2016  5:22 am', '', 'No', 'assets/images/rooms/rb5.jpg,assets/images/rooms/rb6.jpg,assets/images/rooms/rb7.jpg,assets/images/rooms/rb8.jpg,assets/images/rooms/rb9.jpg,assets/images/rooms/rb10.jpg', ''),
(33, 'RADISSON BLU DHAKA WATER GARDEN', 'Dhaka 1206 Bangladesh ', 'A', 405, 2, '12000', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at Ocean Paradise, Coxâ€™s Bazar designed to meet the needs of business and leisure travellers to the city.', '02-12-2016  5:23 am', '', 'No', 'assets/images/rooms/rd9.jpg,assets/images/rooms/rd10.jpg,assets/images/rooms/rd11.jpg,assets/images/rooms/rd12.jpg,assets/images/rooms/rd13.jpg,assets/images/rooms/rd14.jpg', ''),
(34, 'RADISSON BLU CHITTAGONG BAY VIEW', 'Chittagong, Bangladesh', 'A', 405, 2, '12000', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at RADISSON BLU CHITTAGONG BAY VIEW, Chittagong is designed to meet the needs of business and leisure travellers to the city.', '02-12-2016  5:24 am', '', 'No', 'assets/images/rooms/rc6.jpg,assets/images/rooms/rc7.jpg,assets/images/rooms/rc8 (2).jpg,assets/images/rooms/rc8.jpg', ''),
(35, 'RADISSON BLU CHITTAGONG BAY VIEW', 'Chittagong, Bangladesh', 'A', 401, 2, '12000', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at RADISSON BLU CHITTAGONG BAY VIEW, Chittagong is designed to meet the needs of business and leisure travellers to the city.', '02-12-2016  5:25 am', '', 'No', 'assets/images/rooms/rc6.jpg,assets/images/rooms/rc7.jpg,assets/images/rooms/rc8 (2).jpg,assets/images/rooms/rc8.jpg', ''),
(36, 'RADISSON BLU CHITTAGONG BAY VIEW', 'Chittagong, Bangladesh', 'A', 401, 2, '12000', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at RADISSON BLU CHITTAGONG BAY VIEW, Chittagong is designed to meet the needs of business and leisure travellers to the city.', '02-12-2016  5:25 am', '', 'No', 'assets/images/rooms/rc6.jpg,assets/images/rooms/rc7.jpg,assets/images/rooms/rc8 (2).jpg,assets/images/rooms/rc8.jpg', ''),
(37, 'RADISSON BLU CHITTAGONG BAY VIEW', 'Chittagong, Bangladesh', 'A', 401, 2, '12000', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at RADISSON BLU CHITTAGONG BAY VIEW, Chittagong is designed to meet the needs of business and leisure travellers to the city.', '02-12-2016  5:26 am', '', 'No', 'assets/images/rooms/rc6.jpg,assets/images/rooms/rc7.jpg,assets/images/rooms/rc8 (2).jpg,assets/images/rooms/rc8.jpg', ''),
(38, 'RADISSON BLU CHITTAGONG BAY VIEW', 'Chittagong, Bangladesh', 'A', 0, 5, '20000', 'Offering impeccable style and modern convenience in equal measure, our rooms are beautifully furnished, ornamented with unique, modern art and equipped with the latest technologies.\r\nThese bright, light filled spaces are among the largest accommodations offered by luxury hotels in Chittagong. Situated in an unrivalled position on Marine Drive, they afford unparalleled views across the ocean and shoreline. Opt for a room or suite with an ocean view and enjoy 24 hour in room dining, served by a personal butler, beside breathtaking vistas.\r\nEquipped with high speed WiFi access and served by a 24 hour personal butler, luxury accommodation at RADISSON BLU CHITTAGONG BAY VIEW, Chittagong is designed to meet the needs of business and leisure travellers to the city.', '02-12-2016  6:10 am', '', 'No', 'assets/images/rooms/rc6.jpg,assets/images/rooms/rc7.jpg,assets/images/rooms/rc8 (2).jpg,assets/images/rooms/rc8.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_order_hotel`
--
ALTER TABLE `customer_order_hotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_details_id` (`customer_details_id`);

--
-- Indexes for table `list_of_hotel`
--
ALTER TABLE `list_of_hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms_of_hotel`
--
ALTER TABLE `rooms_of_hotel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `customer_order_hotel`
--
ALTER TABLE `customer_order_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `list_of_hotel`
--
ALTER TABLE `list_of_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `rooms_of_hotel`
--
ALTER TABLE `rooms_of_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_order_hotel`
--
ALTER TABLE `customer_order_hotel`
  ADD CONSTRAINT `customer_order_hotel_ibfk_1` FOREIGN KEY (`customer_details_id`) REFERENCES `customer_details` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
