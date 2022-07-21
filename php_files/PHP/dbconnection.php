<?php

$conn = mysqli_connect('localhost','root','','testdb');


$sql ="CREATE TABLE IF EXISTS `article` (
  `id` int NOT NULL,
  `Title` varchar(1000) NOT NULL,
  `Image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `HeaderImage` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Introduction` mediumtext NOT NULL,
  `Description` text NOT NULL,
  `LastMod` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Language` varchar(2) NOT NULL,
  `KeyWords` varchar(1000) NOT NULL,
  `State` int NOT NULL,
  `NumVisit` int NOT NULL,
  `IdTheme` int NOT NULL,
  `IdUser` int NOT NULL,
  `IdHost` int NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

  $result = mysqli_query($conn, $sql)


?>
