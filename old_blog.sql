-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2020 at 10:59 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE `category_table` (
  `categoryID` bigint(20) NOT NULL,
  `topic` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`categoryID`, `topic`) VALUES
(1, 'canyoning'),
(2, 'climbing'),
(3, 'hiking'),
(4, 'wildSwimming'),
(5, 'fellRunning'),
(6, 'kayaking'),
(7, 'cycling'),
(8, 'fishing'),
(9, 'coasteering'),
(10, 'camping'),
(11, 'family');

-- --------------------------------------------------------

--
-- Table structure for table `comment_table`
--

CREATE TABLE `comment_table` (
  `commentID` bigint(20) NOT NULL,
  `postID` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `publishedAt` datetime DEFAULT NULL,
  `postComment` text,
  `visitorID` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `postcategory_table`
--

CREATE TABLE `postcategory_table` (
  `postID` bigint(20) NOT NULL,
  `categoryID` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postcategory_table`
--

INSERT INTO `postcategory_table` (`postID`, `categoryID`) VALUES
(1, 10),
(2, 9),
(3, 8),
(4, 7),
(5, 6),
(6, 5),
(7, 4),
(8, 3),
(9, 2),
(10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `post_table`
--

CREATE TABLE `post_table` (
  `postID` bigint(20) NOT NULL,
  `blogID` bigint(20) NOT NULL,
  `categoryID` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `publishedAt` datetime DEFAULT NULL,
  `content` text,
  `postImage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_table`
--

INSERT INTO `post_table` (`postID`, `blogID`, `categoryID`, `title`, `publishedAt`, `content`, `postImage`) VALUES
(1, 1, 10, 'Britain: the joy of camping in the wild', '2001-01-20 00:00:00', 'Dartmoor is the only place in England where wild camping is legal. I could hear my heart beating. There was definitely movement outside. I drew the tent flaps and instinctively shut my eyes. When I opened them, in the light of the head torch, I was confronted with... a cow. Laughing, I crawled back into my tent and slept for several hours, until the pre-dawn light hit the canvas. When I peered outside, there was still no big cat for company, just the same cow. And so, from my elevated position, I waited for my favourite part of any wild camp to begin. Orange light beams began to permeate the clouds.\r\n', 'dartmoorTent.jpg'),
(2, 2, 9, 'Coasteering', '2008-12-19 00:00:00', 'Coasteering is such a great way to explore the unspoilt Pembrokeshire coastline. It is the closest thing most people get to a real wilderness experience out there on the edge of the land where rocky coast meets the wild ocean. It is truly breathtaking.\r\nI love the sense of freedom and adventure. One minute you are being swished around as if in a giant washing machine. The next, you are swimming through to an isolated cove or clambering up to a promontory. The cliffs are high, but you do not have to jump unless you want to.', 'CoasteeringUpCliff.jpg'),
(3, 3, 8, 'Fly fishing in Canada - why the Rockies will reel you in', '2003-04-20 00:00:00', 'I have fished around the Rockies a few times now and what is fascinating for the visiting angler is the sheer variety of species on hand. Alberta alone can boast 54 native species, with the giant bull trout the daddy of them all. They will even chase and try to eat a fish already on your line..even the memory is a heart-stopper!\r\n \r\nOne river almost above all that dominates the scene is the Bow that ends up roaring its way through Calgary itself. You can fish from its banks for nothing, just as long as you have paid for your provincial fishing licence. But the best way to really get in amongst the action is to visit one of the many tackle shops, where the advice is free and the equipment is tried and tested and tailored to the local conditions. One such example in Calgary is the Fish Tales Fly Shop. Another is the one run by the Orvis company.', 'FishingBanff.jpg'),
(4, 4, 7, 'Sprog Cycling The Trans Pennine Trail', '2004-06-20 00:00:00', 'Telling stories was one of the real unforeseen bonuses to our Trans Pennine Trail family bike ride. It often happened that one parent would cycle alongside one child. That meant we each told stories in a one-to-one dynamic. Stories about their childhood and about ours as well as made-up silly tales usually about the adventures of a worm named Wigs. We chatted and chatted about all sorts of stuff too. This individual attention gave a real boost to both children, the effects of which lasted well beyond the trip itself.\r\nBe prepared to judge how often it is feasible to stop for a hot chocolate, a snack, a playground or just a sit down.\r\nAs adults, it is tempting to just keep going but we wanted it to be fun for the children and for them to maintain their enthusiasm. We had a flask of hot water, a stash of chocolate powder, coffee and marshmallows, as well as a can of squirty cream (we never pretended to travel ultra light!) At times we squirted the cream straight into their mouths!', 'CyclingReservoirView.jpg'),
(5, 5, 6, 'Revelling in the River', '2001-01-20 00:00:00', 'Travelling down to the launch point at Langstone Bridge on a frosty Sunday morning, as the sun rose into a cloudless blue sky, it seemed a paddle around Hayling Island would be great way to banish those January blues. Although the temperature was -2C when we arrived, after we dressed, got our kit ready and moved the boats along the quay, we were all surprisingly hot. Partly that was because we knew we had a deadline..we were launching 4 hours after high water and this meant the water levels were dropping visibly each minute. As the water dropped greater expanses of mud were being exposed. The mud here is a special type that oozes, sucks and sticks to everything, so best avoided at all costs. As a result we carried our boats about 100m along the quay, to launch at the point of minimum mud, and then quickly we were under Langstone Bridge and through the disused railway bridge.', 'Kayaking.jpg'),
(6, 6, 5, 'Running in the Boot Marks of Wainwright', '2003-07-20 00:00:00', 'Wainwright spoke of the aura of romance that characterises Helvellyn, Englands third highest mountain. There is little romance, however, in the slog that is required to ascend from Thirlmere, the less attractive side of Helvellyn. But it is soon over, and the summit plateau offers a glimpse into a heavenly universe. The running is wonderful here. Following the line of the Bob Graham Round, I descended Lower Man, then White Side, from where a line of switchbacks leads rapidly to Patterdale.\r\nPlace Fell, an odd juxtaposition of dream and nightmare, passed, and as I run on, now skirting mountains to reach Askham, I have the feeling of being watched. I am. The runner behind has recovered. I catch a glimpse of him approaching and know my escape will be fruitless. He passes easily, clearly recovered from his bonk, and I have no response. It is enough to simply keep up the momentum of running.\r\nNothing could spoil this joy, though. I am reminded of two things as I run downhill to Askham. First, Wainwrights words that there is no other place quite like Lakeland and secondly, the most wonderful fortune I possess to have discovered the unending pleasure of running in the mountains.', 'fellandscape1.jpg'),
(7, 7, 4, 'Best Wild Swim in Wales', '2001-01-20 00:00:00', 'Llyn Gwynant and Elephant Rock.\r\nThis graceful lake shimmers under the great peak of Snowdon but is shallow enough to warm up nicely in the summer. Rising up on the western shore are the Elephant Rock cliffs, for easy jumps from a range of heights. There are several beaches along the eastern side, along the main road. Or Nantgwynant campsite on the lakeside makes for a perfect base. Limited parking spaces on A498 starting just north of YHA Bryn Gwynant (LL55 4NP), but it is probably easier to park in the campsite. Follow the footpath through the campsite to the main beach or to the stream footbridge, then double back, for Elephant Rock, or just swim out to it. ', 'WildSwimming.jpg'),
(8, 8, 3, 'The many ways that Hiking is good for you', '2003-02-20 00:00:00', 'Hiking in nature is not only good for our bodies, it is good for our moods, our minds, and our relationships, too\r\nI am a hiker. Born to hike as my husband likes to joke. It does my heart and soul good to strap on a pack and head out on a trail, especially when I am alone and can let my mind wander where it will.\r\n \r\nThe experience of hiking is unique, research suggests, conveying benefits beyond what you receive from typical exercise. Not only does it oxygenate your heart, it helps keep your mind sharper, your body calmer, your creativity more alive, and your relationships happier. And, if you are like me and happen to live in a place where nearby woods allow for hiking among trees, all the better. Evidence suggests that being around trees may provide extra benefits, perhaps because of certain organic compounds that trees exude that boost our mood and our overall psychological wellbeing.\r\nHiking in nature is so powerful for our health and well-being that some doctors have begun prescribing it as an adjunct to other treatments for disease. As one group of researchers puts it, The synergistic effect of physical activity and time spent in nature make hiking an ideal activity to increase overall health and wellness.', 'HikingPair.jpg'),
(9, 9, 2, 'Climbing in New Zealand', '2003-04-20 00:00:00', 'The North Island does not get enough mention when it comes to visiting New Zealand. The South Island has so much to offer, and most people have so little time, that it becomes the focus of their journey. There is much worth visiting up in the North though, which will make a separate post. But even when it comes to climbing alone, the North Island should not be disregarded.\r\nOne area that should be on a climbers radar is Mangaokewa, just south of Te Kuiti. It is a similar type of limestone to Paynes Ford, but with better bolting. So if you are into your short, overhanging, bouldery routes then this is for you!', 'ClimbingNZ.jpg'),
(10, 10, 1, 'Push your limits with Canyoning', '2003-11-19 00:00:00', 'Let us say you have got a fear of heights or you have never been in a canyon before. Maybe you are a bit unsure of yourself. Especially on top of big rocks. Well, there is every chance that by the end of the day, you will be jumping several metres into deep pools of water with a huge smile on your face. Willingly and all.\r\nThroughout the course of the day you will be faced with scrambles, slippy rocks, abseils, and jump into pools of water surrounded by scenery untouched by human hands. The more you do it, the more you will grow in confidence. And the more you will love doing it.', 'CayonFromBoat.jpeg'),
(54, 16, 11, 'Cycling with kids from Liverpool to Hull ', '2020-06-03 01:49:05', 'Our children (aged 7 and 9) were inspired by the Ultimate UK Cycle Route Planner of the UK that we put on our kitchen wall. Together, we decided to set off from Liverpool at October half-term and see if we could make it to Hull, using the Trans Pennine Trail (TPT).&#13;&#10;We asked friends and family to sponsor us and we raised some money for Cycling Without Age (Sheffield) and Ikodul Forest Trust (Nepal), as well as having a fabulous adventure.', 'postNo54.jpeg'),
(55, 17, 1, 'Canyoning: don&#39;t say we didn&#39;t warn you!', '2020-06-03 01:58:13', 'Canyoning is not too kind to footwear. Youâ€™re going out to the wild! Maybe youâ€™ve bought an awesome new pair of trainers or even hiking boots for doing so? Yeah donâ€™t wear them. Sorry. Weâ€™ve only got your own best interests at heart. Canyoning is unlikely to leave your footwear in a particularly pleasant state.&#13;&#10;&#13;&#10;Donâ€™t get us wrong, your shoes wonâ€™t be destroyed when you come out the canyon, but it will be very, very wet, and itâ€™s likely your shoes will have taken a few scrapes from all those rocks that youâ€™ll be climbing over too, so donâ€™t wear footwear that you want to keep peachy.&#13;&#10;', 'postNo55.jpeg'),
(56, 18, 5, 'Fell running: why I do it', '2020-06-03 02:05:55', 'I have been running for six-and-a-half hours. Like the bracken, my head is bowed, concentrating on the ground, counting steps: one to 100, then again, then I lose count. I glance behind. Another runner. We began the ascent â€“ some 500 vertical metres on a wall of bracken and heather, over a distance equivalent to three laps around a track â€“ together, but the gap was growing. He seems to wobble in the haze. I wonder if I should wait for him, but racing instinct overwhelms empathy. Negotiating a rim of scree and crag, I reach the summit, dart through a throng of tourists to touch the highest point, and fly downhill. I spring down grassy slopes, dizzy from the heat, feet aching after 35 miles, but certain about this: there was nowhere I would rather be.&#13;&#10;', 'postNo56.jpeg'),
(58, 17, 4, 'Discover Wild Swimming', '2020-06-03 02:16:45', 'With so many lakes, tarns, waterfalls and rivers, Wales is a paradise for wild swimming. Take your pick from countless rivers, waterfalls, natural lakes and manmade quarries. Water quality is generally excellent, and a hot spell will quickly warm up shallower waters.', 'postNo58.jpeg'),
(59, 16, 11, 'Micro Adventuring during Lockdown', '2020-06-03 02:21:09', 'Microadventure ideas to get your imagination going during lockdown.&#13;&#10;Run every street.&#13;&#10;Regular tree climbs.&#13;&#10;A moon walk. (Or this one.)&#13;&#10;A journey around your home.&#13;&#10;Sleep in your garden without a tent.&#13;&#10;Build a shelter.&#13;&#10;Go geocaching.&#13;&#10;Read one of these books and hatch a plan.&#13;&#10;Piles of advice for microadventures with kids.&#13;&#10;Thereâ€™s plenty more in my book Microadventures.', 'postNo59.png'),
(60, 17, 9, 'Take the plunge with Coasteering', '2020-06-03 02:23:41', 'This is the British coast at its rawest, wildest best; a fine place to pit yourself against the brute force of the ocean.&#13;&#10;A tiny voice inside me whispers, â€œDo it.â€ My heart thumps inside my chest like a hollow drum: duh duh, duh duh. I take a deep breath and exhale slowly, then I summon courageâ€”from some hidden compartment labelled â€˜foolishâ€™â€”and leap off the edge. Itâ€™s over in a flash and I smack the surface of the water hard, gulping seawater as I go down, spitting it out as I resurface.&#13;&#10;I let out an involuntary whoop of joy at the sheer buzz of it all, not to mention the exhilarating shock of the freezing cold water as it begins to seep through my neoprene wetsuit. Again, again â€¦ I think. And up and over the crags we climb to do it all over again, but not before weâ€™ve experienced a little more of what coasteering is about.&#13;&#10;', 'postNo60.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `registervisitor_table`
--

CREATE TABLE `registervisitor_table` (
  `visitorID` bigint(20) NOT NULL,
  `visitorName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwordHASH` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registervisitor_table`
--

INSERT INTO `registervisitor_table` (`visitorID`, `visitorName`, `email`, `passwordHASH`) VALUES
(1, 'happytraveller', 'harry@sky.com', '15648474'),
(2, 'speedfreak', 'dean13@venture.com', '75347823'),
(3, '2wheels2go', 'davybikes@wheels.co.uk', '135047172'),
(4, 'gregory', 'freddie@aol.com', '194746521'),
(5, 'walkingwithnature', 'ben89@outdoors.co.uk', '0254445870'),
(6, 'junglejane', 'janeJ@extreme.com', '314145219'),
(7, 'explorerdora', 'diane67@gout.mail', '373844568'),
(8, 'jumpingfrog', 'jasonk@outandabout.co.uk', '433543917'),
(9, 'gofish54', 'kev90@btinternet.com', '493243266'),
(10, 'seafarer', 'dantheman10@deadly.co.uk', '552942615');

-- --------------------------------------------------------

--
-- Table structure for table `register_table`
--

CREATE TABLE `register_table` (
  `blogID` bigint(20) NOT NULL,
  `blogName` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNumber` char(11) NOT NULL,
  `registeredAt` datetime NOT NULL,
  `lastLogin` datetime DEFAULT NULL,
  `intro` mediumtext,
  `aboutMe` text,
  `passwordHASH` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_table`
--

INSERT INTO `register_table` (`blogID`, `blogName`, `firstName`, `lastName`, `email`, `phoneNumber`, `registeredAt`, `lastLogin`, `intro`, `aboutMe`, `passwordHASH`) VALUES
(1, 'Great Escape', 'Nick', 'Bullock', 'nickbullock@climbing.com', '07891234567', '2001-01-20 00:00:00', '2001-02-20 00:00:00', 'The Greatest Escapes, places and routes to explore outside of the city.\r\n', 'Hi, I\'m Nick! A trained climber, hiker and outdoorser.', 'climbing1'),
(2, 'Vertical Life', 'Hannah', 'Sargeant', 'hannah@lovesclimbing.com', '07892712355', '2001-02-20 00:00:00', '2001-03-20 00:00:00', NULL, NULL, 'climbingforlife'),
(3, 'Wild Swimmer', 'Laura', 'Swan', 'laura@justkeepswimming.com', '07904777716', '2017-05-19 00:00:00', '2017-05-20 00:00:00', NULL, NULL, 'ilovemichaelphelps'),
(4, 'Family Hikes', 'Jo', 'May', 'jo@loveshiking.com', '07978467008', '2016-05-19 00:00:00', '2016-05-20 00:00:00', NULL, NULL, 'hikes1234'),
(5, 'The Great Outdoors', 'Aman', 'January', 'aman@lovesfellrunning.com', '07978467999', '2001-05-20 00:00:00', '2001-06-20 00:00:00', NULL, NULL, 'Htfaagit!2'),
(6, 'Mountaineering Monica', 'Monica', 'Bang', 'monica@mountain.com', '07978467999', '2001-05-20 00:00:00', '2001-06-20 00:00:00', NULL, NULL, 'TheHillsAreAlive'),
(7, 'Swiftly Sailing', 'Rachel', 'Green', 'rachel@sailingswiftly.com', '07978467101', '2001-05-20 00:00:00', '2001-06-20 00:00:00', NULL, NULL, 'WeWereOnABreak'),
(8, 'Smell something Fishy', 'Joey', 'July', 'Joey@julyfishing.com', '7978470972', '2001-08-20 00:00:00', '2001-09-20 00:00:00', NULL, NULL, 'HowYOUdoin'),
(9, 'Jumping Julie', 'Julie', 'Dooley', 'julie@loveswimming.com', '7978471963', '2001-09-20 00:00:00', '2001-10-20 00:00:00', NULL, NULL, 'Jumps12'),
(10, 'Walking and Hiking Adventures', 'Phoebe', 'August', 'phoebe@walkingorhiking.com', '7978472954', '2001-10-20 00:00:00', '2001-11-20 00:00:00', NULL, NULL, 'SmellyCat1'),
(16, 'Family Adventures', 'Maddie', 'Smith', 'family@gmail.com', '07904777777', '2020-06-03 00:43:45', '2020-06-03 02:19:12', 'A space to document my family&#39;s adventures in nature', 'Hi, I&#39;m Maddie, mum of 3. I love cycling and getting out in nature with my family.', '$2y$10$x1Up0uptLQ2eG7SV3ZdpmuMbrvjjKrSSM9Ch.gI33nIDMRzaDUFwK'),
(17, 'Water Babies', 'Anita', 'Smart', 'anita@gmail.com', '01895140442', '2020-06-03 00:55:11', '2020-06-03 10:53:09', 'Check in here for updates about my coasteering, canyoning and wild swimming adventures!', 'Anita the water baby', '$2y$10$ZJ5o2p/PMhbDpo1DBehdU.e4Thyuu6AnsQUs8IwQcPhLNPpz/rL72'),
(18, 'Fell Running Haven', 'Alma', 'Leaker', 'alma@gmail.com', '07902767816', '2020-06-03 01:03:36', '2020-06-03 02:03:59', 'Fell running stories with a love for the Lake District', 'Hi! I&#39;m Alma. I have caught the bug for fell running and am delighted that you stopped by to hear all about it.', '$2y$10$ySXa6zURoHYyz4KIEU4PDu2ids2742h7UPX979EgmjuyuxfOCBAKq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_table`
--
ALTER TABLE `category_table`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `comment_table`
--
ALTER TABLE `comment_table`
  ADD PRIMARY KEY (`commentID`),
  ADD KEY `postID` (`postID`),
  ADD KEY `visitorID` (`visitorID`);

--
-- Indexes for table `postcategory_table`
--
ALTER TABLE `postcategory_table`
  ADD KEY `postID` (`postID`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Indexes for table `post_table`
--
ALTER TABLE `post_table`
  ADD PRIMARY KEY (`postID`),
  ADD KEY `blogID` (`blogID`);

--
-- Indexes for table `registervisitor_table`
--
ALTER TABLE `registervisitor_table`
  ADD PRIMARY KEY (`visitorID`);

--
-- Indexes for table `register_table`
--
ALTER TABLE `register_table`
  ADD PRIMARY KEY (`blogID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_table`
--
ALTER TABLE `category_table`
  MODIFY `categoryID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `comment_table`
--
ALTER TABLE `comment_table`
  MODIFY `commentID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `post_table`
--
ALTER TABLE `post_table`
  MODIFY `postID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `registervisitor_table`
--
ALTER TABLE `registervisitor_table`
  MODIFY `visitorID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `register_table`
--
ALTER TABLE `register_table`
  MODIFY `blogID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment_table`
--
ALTER TABLE `comment_table`
  ADD CONSTRAINT `comment_table_ibfk_1` FOREIGN KEY (`postID`) REFERENCES `post_table` (`postID`),
  ADD CONSTRAINT `comment_table_ibfk_2` FOREIGN KEY (`visitorID`) REFERENCES `registervisitor_table` (`visitorID`);

--
-- Constraints for table `postcategory_table`
--
ALTER TABLE `postcategory_table`
  ADD CONSTRAINT `postcategory_table_ibfk_1` FOREIGN KEY (`postID`) REFERENCES `post_table` (`postID`),
  ADD CONSTRAINT `postcategory_table_ibfk_2` FOREIGN KEY (`categoryID`) REFERENCES `category_table` (`categoryID`);

--
-- Constraints for table `post_table`
--
ALTER TABLE `post_table`
  ADD CONSTRAINT `post_table_ibfk_1` FOREIGN KEY (`blogID`) REFERENCES `register_table` (`blogID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
