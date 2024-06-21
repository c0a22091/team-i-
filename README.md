下記のSQL文を2024iというフォルダの中で実行する事でtableが作成されます。
-- テーブルの構造 `country_table`
--

CREATE TABLE `country_table` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `flight_table`
--

CREATE TABLE `flight_table` (
  `flight_id` int(11) NOT NULL,
  `flight_name` varchar(255) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `world_select` int(11) NOT NULL,
  `money` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `seet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `reservation_table`
--

CREATE TABLE `reservation_table` (
  `reservation_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `flight_id` int(11) DEFAULT NULL,
  `departure_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `mail_address` varchar(255) NOT NULL,
  `passport_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
