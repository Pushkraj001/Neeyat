

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `mentor` (
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `Pincode` varchar(100) NOT NULL,
  `work` varchar(100) NOT NULL,
  `aadhar` varchar(100) NOT NULL,
  `local` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `aoi` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `mentee` (
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `Pincode` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `email` varchar(12) NOT NULL,
  `aoi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




CREATE TABLE `contact` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `chatbot` (
  `id` varchar(100) NOT NULL,
  `messages` varchar(100) NOT NULL,
  `responses` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




INSERT INTO TABLE`chatbot` (`id`, `messages`, `response`) VALUES
(1, 'Hey', 'Hello'),
(2, 'Hi','Hello'),
(3, 'What is your name?','My name is Muaz. i am a chat-bot. How may i help you?'),
(4, 'How can I contact my mentor?', 'You can register yourself and see which mentors are there for your field.'),
(5, 'How to contact mentor?', '1st of all you have to register after that you will get the list of mentors.'),
(6, 'How neeyat works?', ' It works on algo which makes the relation between Mentors and Mentees'),
(7, 'Where to get books?', 'Yes you can visit our book page.'),
(8, 'How to get books?', '1st of all you have to register yourself and after that you can add to cart the books you want'),
(9, 'How can I donate books?', '1st you have to click on photo And upload it and put price on that.'),
(10, 'What will be the time for interaction with mentees or mentor?', 'You can interact with them in between 9 AM to 6 PM.'),
(11, 'Where to meet?', 'It depends on mentor and mentee online or offline'),
(12, 'What is the procedure for registration as a mentee?', 'You have to fill a form and after that you will be redirected to the list of mentors'),
(13, 'What is neeyat?', 'It is a website which helps underprivileged students an oppurtunity to study.'),
(14, 'Can I learn for my JEE entrance exam also?', 'You can get Mentor for that also'),
(15, 'Can a person older than 18 also learn through this?', 'No its just for under privileged kids'),
(16, 'Can I donate money?', 'Yes!!! You can visit our donate page'),
(17, 'Can I get physics by HC Verma book?', 'Yes!!! You can visit our book page'),
(18, 'Hello', 'Hi');


