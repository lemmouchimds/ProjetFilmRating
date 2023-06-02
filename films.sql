-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 02 juin 2023 à 14:02
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `maymovie`
--

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

CREATE TABLE `films` (
  `titre` varchar(20) NOT NULL,
  `affiche` varchar(300) NOT NULL,
  `emotion` varchar(20) NOT NULL,
  `année` int(4) NOT NULL,
  `description` text NOT NULL,
  `rating` int(1) NOT NULL,
  `realisateur` varchar(30) NOT NULL,
  `nbvisite` int(7) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`titre`, `affiche`, `emotion`, `année`, `description`, `rating`, `realisateur`, `nbvisite`) VALUES
('Shutter Island', 'https://i.pinimg.com/236x/20/16/5f/20165fb800ed5c0a3f4aec57732c2eca.jpg', 'melancolie', 2010, 'Teddy Daniels and Chuck Aule, two US marshals, are sent to an asylum on a remote island in order to investigate the disappearance of a patient, where Teddy uncovers a shocking truth about the place.', 0, 'Martin Scorsese', 0),
(' Blade Runner 2049', 'https://i.pinimg.com/236x/ba/ea/ad/baeaad96ffbf6bde642af086fbb48086.jpg', 'melancolie', 2017, 'K, an officer with the Los Angeles Police Department, unearths a secret that could create chaos. He goes in search of a former blade runner who has been missing for over three decades.', 0, 'Denis Villeneuve', 0),
('mommy', 'https://i.pinimg.com/236x/7a/d9/b3/7ad9b3754a38c576b860b2c521491b83.jpg', 'melancolie', 2014, 'Diane, a 46-year-old single widowed mother, struggles to cope with her teenage son\'s violent behaviour. However, she finds hope when a mysterious neighbour inserts herself into their household.', 0, ' Xavier Dolan', 0),
('Eternal Sunshine', 'https://i.pinimg.com/236x/08/9b/33/089b33eeca75b02e4af2484ee9e7339d.jpg', 'melancolie', 2004, 'Joel and Clementine begin a relationship after a train journey together. However, having had their memories clinically erased, they do not remember their tumultuous past.', 0, 'Michel Gondry', 0),
('her', 'https://i.pinimg.com/236x/f4/ad/55/f4ad55274604a04aec5255ce120eedbb.jpg', 'melancolie', 2013, 'Theodore Twombly, an introverted writer, buys an Artificial Intelligence system to help him write. However, when he finds out about the AI\'s ability to learn and adapt, he falls in love with it.', 0, 'Spike Jonze', 0),
('maman j\'ai raté l\'av', 'https://i.pinimg.com/236x/dd/67/51/dd6751a1fdafb8c7490e6b7d0ffd8370.jpg', 'Rire', 1990, ' jbhj n kj hj ', 0, 'chris columbus', 0),
('maman j\'ai raté l\'av', 'https://i.pinimg.com/236x/dd/67/51/dd6751a1fdafb8c7490e6b7d0ffd8370.jpg', 'Rire', 1990, ' jbhj n kj hj ', 0, 'chris columbus', 0),
('american psycho', 'https://i.pinimg.com/236x/d5/8b/5b/d58b5b684b6d2986a4c9ed989305e9d2.jpg', 'Suspens', 1990, 'dvbqiefbvhj dvhje fv', 0, 'chris columbus', 0),
('american psycho', 'https://i.pinimg.com/236x/d5/8b/5b/d58b5b684b6d2986a4c9ed989305e9d2.jpg', 'Suspens', 1990, 'dvbqiefbvhj dvhje fv', 0, 'chris columbus', 0),
('the batman', 'https://i.pinimg.com/236x/40/dc/a4/40dca41a2c29615de6e523848c1a9674.jpg', 'Suspens', 2022, 'bsiudcbiedbvizdb', 0, 'him', 0),
('in the mood for love', 'https://i.pinimg.com/236x/0b/2b/5a/0b2b5a37611b352a2c78b2b1243fa786.jpg', 'melancolie', 2000, 'In 1962, journalist Chow Mo-wan (Tony Leung Chiu Wai) and his wife move into a Hong Kong apartment, but Chow\'s spouse is often away on business. Before long, the lonely Chow makes the acquaintance of the alluring Su Li-zhen (Maggie Cheung Man-yuk), whose own significant other also seems preoccupied with work. As the two friends realize their respective partners are cheating on them, they begin to fall for one another; however, neither wants to stoop to the level of the unfaithful spouses.', 0, 'Wong Kar-wai', 0),
('in the mood for love', 'https://i.pinimg.com/236x/0b/2b/5a/0b2b5a37611b352a2c78b2b1243fa786.jpg', 'melancolie', 2000, 'In 1962, journalist Chow Mo-wan (Tony Leung Chiu Wai) and his wife move into a Hong Kong apartment, but Chow\'s spouse is often away on business. Before long, the lonely Chow makes the acquaintance of the alluring Su Li-zhen (Maggie Cheung Man-yuk), whose own significant other also seems preoccupied with work. As the two friends realize their respective partners are cheating on them, they begin to fall for one another; however, neither wants to stoop to the level of the unfaithful spouses.', 0, 'Wong Kar-wai', 0),
('in the mood for love', 'https://i.pinimg.com/236x/0b/2b/5a/0b2b5a37611b352a2c78b2b1243fa786.jpg', 'melancolie', 2000, 'In 1962, journalist Chow Mo-wan (Tony Leung Chiu Wai) and his wife move into a Hong Kong apartment, but Chow\'s spouse is often away on business. Before long, the lonely Chow makes the acquaintance of the alluring Su Li-zhen (Maggie Cheung Man-yuk), whose own significant other also seems preoccupied with work. As the two friends realize their respective partners are cheating on them, they begin to fall for one another; however, neither wants to stoop to the level of the unfaithful spouses.', 0, 'Wong Kar-wai', 0),
('drive', 'https://i.pinimg.com/236x/d9/76/0a/d9760a7c36e43ddda0e7621d2442e0d9.jpg', 'melancolie', 2011, 'A stuntman and getaway driver falls in love with Irene who is married to a criminal. In a bid to protect her from her husband and some gangsters, he decides to cross over to the other side of the law.', 0, ' Nicolas Winding Refn', 0),
('Joker', 'https://i.pinimg.com/236x/20/24/61/202461561d47628c08c9f91e76d3d7c0.jpg', 'melancolie', 2019, 'Forever alone in a crowd, failed comedian Arthur Fleck seeks connection as he walks the streets of Gotham City. Arthur wears two masks -- the one he paints for his day job as a clown, and the guise he projects in a futile attempt to feel like he\'s part of the world around him. Isolated, bullied and disregarded by society, Fleck begins a slow descent into madness as he transforms into the criminal mastermind known as the Joker.', 0, ' Todd Phillips', 0),
('Forrest Gump', 'https://i.pinimg.com/736x/8e/d7/a9/8ed7a9baeae932abec095d109d306fb3.jpg', 'Bonheur', 1994, 'Forrest, a man with low IQ, recounts the early years of his life when he found himself in the middle of key historical events. All he wants now is to be reunited with his childhood sweetheart, Jenny.', 0, ' Robert Zemeckis', 0),
('mr bean\'s holiday', 'https://i.pinimg.com/236x/ac/b0/e0/acb0e02aa5e263a13a3904aff8e9f213.jpg', 'Bonheur', 2007, 'Bean wins a holiday to France and sets out on his journey. However, when he unknowingly separates a father-son duo, he decides to reunite them.', 0, ' Steve Bendelack', 0),
('Porco Rosso', 'https://i.pinimg.com/736x/c3/46/ef/c346efe513c262970a57e1653f1e3aa3.jpg', 'Bonheur', 1992, 'In Italy in the 1930s, sky pirates in biplanes terrorize wealthy cruise ships as they sail the Adriatic Sea. The only pilot brave enough to stop the scourge is the mysterious Porco Rosso (Shuichiro Moriyama), a former World War I flying ace who was somehow turned into a pig during the war. As he prepares to battle the pirate crew\'s American ace, Porco Rosso enlists the help of spunky girl mechanic Fio Piccolo (Akemi Okamura) and his longtime friend Madame Gina (Tokiko Kato).', 0, 'Hayao Miyazaki', 0),
('Top Gun Maverick', 'https://i.pinimg.com/736x/28/7d/b3/287db31dc2a029e917d9c6470ee3065c.jpg', 'Bonheur', 2022, 'After more than 30 years of service as one of the Navy\'s top aviators, Pete \"Maverick\" Mitchell is where he belongs, pushing the envelope as a courageous test pilot and dodging the advancement in rank that would ground him. Training a detachment of graduates for a special assignment, Maverick must confront the ghosts of his past and his deepest fears, culminating in a mission that demands the ultimate sacrifice from those who choose to fly it.', 0, ' Joseph Kosinski', 0),
('Little Miss Sunshine', 'https://i.pinimg.com/236x/56/58/b7/5658b72662cfc604257d7c6b80a8bf6f.jpg', 'Bonheur', 2006, 'A family decide to travel across the country when their daughter wants to participate in a beauty pageant, unaware of what the journey has in store for them.', 0, 'Valerie Faris, Jonathan Dayton', 0),
('Paddington', 'https://i.pinimg.com/236x/e8/ac/c8/e8acc8e2dc69104f3796d9d366cd7b8c.jpg', 'Bonheur', 2014, 'A young bear who can walk and talk travels to London from the jungles of Peru. There, he is adopted by the Brown family and goes through many adventures in the big city.', 0, ' Paul King', 0),
('The Secret Life of W', 'https://i.pinimg.com/236x/ae/f1/7b/aef17bb8e94f9f192b58aaded0fc9aa4.jpg', 'melancolie', 2013, 'A man living a dull life dreams up romantic and action-filled scenarios in order to escape from monotony. When his own job is threatened, he sets out on a real romantic and action-packed journey.', 0, ' Ben Stiller', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
