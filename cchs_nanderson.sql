CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
(1, 'Sunset Overdrive', '', '24.99', '0.00', 133, '/~cchs_nanderson/images/40tubs/sunset_overdrive.png', '2020-04-20 18:52:40'),
(2, 'Retro Favor', '', '14.99', '24.99', 320, '/~cchs_nanderson/images/40tubs/retro_favor.png', '2020-04-20 18:52:40'),
(3, 'Vapor Waves', '', '14.99', '24.99', 334, '/~cchs_nanderson/images/40tubs/vapor_waves.png', '2020-04-20 18:52:40'),
(4, 'Beach Side', '', '24.99', '0.00', 81, '/~cchs_nanderson/images/40tubs/beach_side.png', '0000-00-00 00:00:00'),
(5, 'Amazing Mango', '', '14.99', '24.99', 895, '/~cchs_nanderson/images/40tubs/amazing_mango.png', '0000-00-00 00:00:00'),
(6, 'Groovy Smoothie', '', '24.99', '0.00', 256, '/~cchs_nanderson/images/40tubs/groovy_smoothie.png', '0000-00-00 00:00:00'),
(7, 'Midnight Blues', '', '24.99', '0.00', 126, '/~cchs_nanderson/images/40tubs/midnight_blues.png', '2021-12-10 18:52:40'),
(8, 'Lazy Lemon', '', '24.99', '0.00', 1, '/~cchs_nanderson/images/40tubs/lazy_lemon.png', '2022-02-10 18:52:40'),
(9, 'Number 9', '', '24.99', '0.00', 1, '/~cchs_nanderson/images/40tubs/lazy_lemon.png', '2022-02-10 18:52:40'),
(10, 'Number 10', '', '24.99', '0.00', 1, '/~cchs_nanderson/images/40tubs/lazy_lemon.png', '2022-02-10 18:52:40'),
(11, 'Number 11', '', '24.99', '0.00', 1, '/~cchs_nanderson/images/40tubs/lazy_lemon.png', '2022-02-10 18:52:40');

ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `products`
  MODIFY `id` int(2) ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
