CREATE TABLE `najwa` (
  `ic` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `mother` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `najwa` (`ic`, `name`, `father`, `mother`, `address`, `phone`, `hobby`, `age`, `gender`, `email`, `images`) VALUES
('011120100182', 'Sharifah Najwa Adriana Binti Syed Mohd Razaleigh', 'Syed Mohd Razaleigh Bin Syed Abdul Rahman', 'Najashah Binti Arshad', 'Shah Alam, Selangor', '0124449183', 'Playing PC Games', 22, 'Female', '2022901149@student.uitm.edu.my', 'najwa.jpg');
