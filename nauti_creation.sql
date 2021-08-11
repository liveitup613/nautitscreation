-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2021 at 10:21 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nauti_creation`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblfaqs`
--

CREATE TABLE `tblfaqs` (
  `ID` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblguestbook`
--

CREATE TABLE `tblguestbook` (
  `ID` int(11) NOT NULL,
  `Client` varchar(50) NOT NULL,
  `Feedback` text NOT NULL,
  `Avatar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblguestbook`
--

INSERT INTO `tblguestbook` (`ID`, `Client`, `Feedback`, `Avatar`) VALUES
(1, 'ALEX PEREX', 'One of the nicest people I have ever met! She has a true enthusiasm for her craft and is more than willing to develop creative ideas for any event! I am in love with her product and plan on being an extremely long term customer!', '9.png'),
(2, 'CANDI SPAIN ADCOCK', 'Came to Port Aransas to visit a friend a few weeks ago and she had your pineapple mango jelly for breakfast. I am obsessed!!! Needless to say I brought 6 jars of a variety of your jellys and apple butter back  in my suitcase. Now I need to know how to get some shipped!!!', '7.png'),
(3, 'CRACE BALLI', 'Oh..M..G..!\nFinally tried to Maui Pineapple Mango/Ghost Pepper Infused Creation on my Pork Ribs!!! If you want a little kick with that tropical flavor, this is it!! Next I\'ll try it on my Salmon!', '1.png'),
(4, 'LEANN MINNERS', 'Sooooo... I might be just a little addicted. These jelly \"creations\" are amazing!! They are bursting with flavor and the  spicy ones have just the right amount of heat. Soooo good!! Love that they are made here on our island', '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tblrecipes`
--

CREATE TABLE `tblrecipes` (
  `ID` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Ingredients` text NOT NULL,
  `Process` text NOT NULL,
  `DateAdded` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblrecipes`
--

INSERT INTO `tblrecipes` (`ID`, `Title`, `Ingredients`, `Process`, `DateAdded`) VALUES
(1, 'Margarita Jalapeno Wings Recipe', '<div><span style=\"font-weight: bold;\">Chicken Wings – 20 each</span></div><div><span style=\"font-weight: bold;\">Jalapeno Margarita Jelly – 1 Cup</span></div><div>Lime Sea Salt – 1 Tablespoon</div><div>Himalayan Salt – 2 Tablespoons</div><div>Ground Pepper – 2 Tablespoons&nbsp;</div><div>Extra Light Olive Oil – 1 Tablespoon</div><div>Baked Beans – (2) 15oz Cans&nbsp;</div><div>Spankin Bacon – 1 Cup</div><div>Ketchup – 1 Cup&nbsp;</div><div>Mustard – ½ Cup</div><div>Brown Sugar – ½ Cup</div><div>Bacon – 6 Strips</div><div>Onion – ½ Cup</div><div>Bell Pepper – ½ Cup&nbsp;</div><div>Cayenne Pepper – 1 Tablespoon</div><div>Limes – 4&nbsp;</div>', '<p style=\"line-height: 1.4;\"><span style=\"font-family: Arial; font-size: 14px;\">Cross cut bacon horizontally in thin strips</span></p><p style=\"line-height: 1.4;\"><span style=\"font-size: 14px;\">Chop onion and bell pepper</span></p><p style=\"line-height: 1.4;\"><span style=\"font-size: 14px;\">Place beans a large Backing dish</span></p><p style=\"line-height: 1.4;\"><span style=\"font-size: 14px;\">Mix in ketchup, mustard, brown sugar, Spankin bacon, cayenne, salt and pepper and begin slow cook process cover at 200 degrees and slow simmer for four hours</span></p><p style=\"line-height: 1.4;\"><span style=\"font-size: 14px;\">While beans are cooking</span></p><ul><li style=\"line-height: 1.4;\"><span style=\"font-size: 14px;\">Salt bacon, onion and bell pepper</span></li><li style=\"line-height: 1.4;\"><span style=\"font-size: 14px;\">Line cookie sheet with parchment paper</span></li><li style=\"line-height: 1.4;\"><span style=\"font-size: 14px;\">Place wings (spaced evenly) on cookie sheet and season with salt and pepper</span></li></ul><p style=\"line-height: 1.4;\"><span style=\"font-size: 14px;\">Uncover beans and mix in sauteed bacon, onion, an dbell pepper and place beans and wings into oven</span></p><p style=\"line-height: 1.4;\"><span style=\"font-size: 14px;\">Cook beans for 30 to 45 minutes, or until done</span></p><p style=\"line-height: 1.4;\">During wing baking process - turn on grill and pre-heat to medium to medium high heat</p><p style=\"line-height: 1.4;\">Coat grill with oil</p><p style=\"line-height: 1.4;\">Remove wings from oven after 30 minutes and place on grill while beans finish</p><p style=\"line-height: 1.4;\">Grill wings 4 to 5 minutes per side</p><p style=\"line-height: 1.4;\">While wings grill, in a bowl, mix jelly with lime salt</p><p style=\"line-height: 1.4;\">Remove wings, turn grill to high heat, and while grill is heating up coat wings with mixture</p><p style=\"line-height: 1.4;\">Flash wings on grill and then re-coat prior to plating</p><p style=\"line-height: 1.4;\">Zest and slice lime - sprinkle lime zest over wings and place lime slice with each plate of wings</p><p style=\"line-height: 1.4;\"><br></p>', 1626273582),
(3, 'Nauti T’s Cocktail Mix-Ins', '', '<p class=\"MsoNormal\" align=\"center\" style=\"margin-bottom:0cm;text-align:center\"><span style=\"font-size:14.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif\">The\nprocess is very straightforward, simply add one to two teaspoons full of your\nfavorite jelly creation to your standard cocktail recipe to replace all simple\nsugars, agaves, sweeteners, or fruits.<o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" align=\"center\" style=\"margin-bottom:0cm;text-align:center\"><span style=\"font-size:14.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif\">&nbsp;</span></p>\n\n<p class=\"MsoNormal\" align=\"center\" style=\"margin-bottom:0cm;text-align:center\"><span style=\"font-size:14.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif\">If\nutilizing a shaker, simply add, shake, and pour. The jelly part of the creation\nwill adhere to the ice, while the vibrant flavors and colors make their way to\nyour glass.<o:p></o:p></span></p>\n\n<p class=\"MsoNormal\" align=\"center\" style=\"margin-bottom:0cm;text-align:center\"><span style=\"font-size:14.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif\">&nbsp;</span></p>\n\n<p class=\"MsoNormal\" align=\"center\" style=\"margin-bottom:0cm;text-align:center\"><span style=\"font-size:14.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif\">If\nmixing, or stirring, place creation into a microwave safe dish and heat for 10\nto 15 seconds to make the creation more pliable and thinner for easier mixing\nand even distribution throughout your cocktail!<o:p></o:p></span></p>', 1626212592);

-- --------------------------------------------------------

--
-- Table structure for table `tblrecipe_images`
--

CREATE TABLE `tblrecipe_images` (
  `ID` int(11) NOT NULL,
  `RecipeID` int(11) NOT NULL,
  `Attach` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblrecipe_images`
--

INSERT INTO `tblrecipe_images` (`ID`, `RecipeID`, `Attach`) VALUES
(1, 1, 'resource1.jpg'),
(13, 3, 'resource1626208730.jpg'),
(14, 3, 'resource16262087301.jpg'),
(15, 3, 'resource16262087302.jpg'),
(16, 1, 'resource1626249775.jpg'),
(17, 1, 'resource16262497751.jpg'),
(18, 1, 'resource16262497752.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblresources`
--

CREATE TABLE `tblresources` (
  `ID` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Attach` text NOT NULL,
  `Thumbnail` varchar(50) NOT NULL,
  `Type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblresources`
--

INSERT INTO `tblresources` (`ID`, `Title`, `Attach`, `Thumbnail`, `Type`) VALUES
(6, 'Maui Gold Pineapple', 'resource1625767042.png', '', 'Ingredient Resource'),
(7, 'Peaches from Fredesburg', 'resource1625767074.png', '', 'Ingredient Resource'),
(8, 'Test Ingredients', 'resource1625767687.png', '', 'Ingredient Resource'),
(10, 'championship', 'resource1625838785.jpg', '', 'Photo'),
(11, '', 'resource1625838828.jpg', '', 'Photo'),
(12, '', 'photo3.jpg', '', 'Photo'),
(13, '', 'photo4.jpg', '', 'Photo'),
(14, '', 'photo5.jpg', '', 'Photo'),
(15, '', 'photo6.jpg', '', 'Photo'),
(16, '', 'photo7.jpg', '', 'Photo'),
(17, '', 'photo8.jpg', '', 'Photo'),
(18, '', 'photo9.jpg', '', 'Photo'),
(19, '', 'photo10.jpg', '', 'Photo'),
(20, '', 'photo11.jpg', '', 'Photo'),
(21, '', 'photo12.jpg', '', 'Photo'),
(22, '', 'photo13.jpg', '', 'Photo'),
(23, '', 'photo14.jpg', '', 'Photo'),
(24, '', 'photo15.jpg', '', 'Photo'),
(25, '', 'photo16.jpg', '', 'Photo'),
(26, '', 'photo17.jpg', '', 'Photo'),
(27, '', 'photo18.jpg', '', 'Photo'),
(46, 'championship', 'QAwGa2R658k', '', 'Video'),
(47, '', 'zrEpr0RJa1M', '', 'Video'),
(48, '', 'nEDQL2OTpIw', '', 'Video'),
(49, '', 'alFvfJYYwOc', '', 'Video'),
(50, '', 'resource1625941665.mp4', 'resource1625941665.jpg', 'Video'),
(51, '', 'resource1625941674.mp4', 'resource1625941674.jpg', 'Video'),
(52, 'Tutorial Test', 'resource1626116549.mp4', 'resource1626116549.jpg', 'Tutorial'),
(53, 'Tutorial Test Number 2', 'resource1626117748.mp4', 'resource1626117748.jpg', 'Tutorial');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `Name`, `Password`, `Phone`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `tblvalues`
--

CREATE TABLE `tblvalues` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Value` text NOT NULL,
  `Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblvalues`
--

INSERT INTO `tblvalues` (`ID`, `Name`, `Value`, `Type`) VALUES
(1, 'Location', '14254 South Padre Island Drive Corpus Christi, TX 78418', 'Contact'),
(2, 'Phone', '(865) 803-7382', 'Contact'),
(3, 'Email', 'NautiTs@nautitscreations.com, liveitup613@outlook.com', 'Contact'),
(4, 'Tue', '8.00 am - 5.00 pm', 'Hour'),
(5, 'Wed', '8.00 am - 5.00 pm', 'Hour'),
(6, 'Thu', '8.00 am - 5.00 pm', 'Hour'),
(7, 'Fri', '8.00 am - 5.00 pm', 'Hour'),
(8, 'Sat', 'Closed', 'Hour'),
(9, 'Sun', 'Closed', 'Hour'),
(10, 'facebook', 'https://m.facebook.com/CTChandmade/', 'Social'),
(11, 'youtube', 'https://youtube.com/channel/UCq7cPeWWgAQwPHgyrggH2mw', 'Social'),
(12, 'twitter', 'https://mobile.twitter.com/creationsnauti', 'Social'),
(13, 'instagram', 'https://instagram.com/nautitscreations?utm_medium=copy_link', 'Social'),
(14, '', 'Island Market IGA, North Padre Island, Texas', 'Local Store'),
(16, '', 'A La Mode Gelateria, North Padre Island, Texas', 'Local Store'),
(17, '', 'Family Center IGA, Port Aransas, Texas', 'Local Store'),
(18, '', 'Island Wind, Port Aransas, Texas', 'Local Store'),
(19, '', 'Third Coast Shack, Port Aransas, Texas', 'Local Store'),
(20, '', 'Made in Corpus Christi, Texas', 'Local Store'),
(21, '', 'Coastal Trend, Corpus Christi, Texas', 'Local Store'),
(22, '', 'Snake Farm Pie Company, Port Aransas, Texas(Nauti T\'s Infused)', 'Local Store'),
(23, '', 'Staples Street Meat Market, Corpus Christi, Texas', 'Local Store'),
(24, '', 'Lonestar BBQ Pro Shop, San Antonio, Texas', 'Local Store'),
(25, '', 'Lonestar BBQ Pro Shop, San Antonio, Texas', 'Local Store'),
(26, '', 'Famingo Ranch, Ingleside and Portland, Texas', 'Local Store'),
(27, '', 'Fig and Honey Lavish Grazing, Fresno, California', 'Local Store'),
(28, '', 'Rowdy Maui, Rockport, Texas', 'Local Store'),
(29, 'testa', 'aeadfgadf', 'FAQ'),
(30, '', 'Hello from Nauti T’s Creations. I am Tisha Gavlik, owner and sole creator. I pride myself in doing what I love. My inspiration is all of you, MY CUSTOMERS. This truly is my love and passion, and my reward is the smile my creations put on customer’s faces. My goal is to produce a unique creation that will always have you coming back for more; whether, it be one of our regular flavors, or modern blends with added jalapeno and ghost-pepper infused. I use only top-quality fresh ingredients in every creation. I take care in being the most creative I can be. Each creation is created with love, hard work and the utmost care and quality by hand in small batches. Understanding this process, of hand-making these creations in small batches the old-fashioned way, is what gives these handmade creations their own individual personality and character. You are truly getting a one-of-a-kind creation.<br />\n<br />\nIt all began over a decade ago, while residing in Tennessee, I was invited by a co-worker for our dental practice,to learn how to pick, prep and can blackberry preserve the old fashioned way based on her years of experience. Being a California girl, I showed up in shorts, a tank top and sandals. She laughed knowing I was new to this, and explained this is a farm, and there is a chance for snakes and other critters at the blackberry patches. We went out spent the day picking the best blackberries, de-seeding them,creating and canning the jelly. I had always cooked and baked, and seemed to have a natural gift and palate, and this turned out to be my husband’s favorite creation. For the next few years, I experimented with a variety of ingredients until I created my own individualized jelly base. Then routinely created and canned not only the blackberry, but multiple variations for friends and family as a hobby and gifts.<br />\n<br />\nIn2016, my husband and I moved to North Padre Island, Texas to be closer to my husbands family to assist and be available in emergent situations. I was actively seeking employment in my trained dentalprofession;however, the market was saturated, with very little openings, and most practices were not inclined to hire and pay someone with over twenty years’ experience. Therefore, to supplement income, I took on side jobs as a nanny. In 2017, while at a customer’s house performing nanny duties, I tripped on a decorative nautical rope. The fall resulted in a ten-inch spiral fracture in my left femur. In addition to a full-length rod, I later required a full hip replacement due to the severity of the initial fracture. I was non-weight bearing for the six weeks and bound to a walker for the next six months.<br />\n<br />\nSince I was home bound, I began to create jellies again, for friends and family.I needed something to do to occupy my time. As I sat in my walker rolling around in the kitchen I made the decision to take my creations to the Island Farmers Market, to gauge customers responses. I first experimented with my blackberry jelly, and since I was in Texas I added jalapeno for heat. I also decided all my creations would only feature the freshest ingredients, with no additives or preservatives, made the old fashioned way, hand crafted in small batches, using locally sourced sustainable produce to the degree possible. When this option was not available for certain flavors, I researched and use only the best produce available. As an example, all pineapple creations feature Maui Gold pineapples, shipped fresh from Maui, Hawaii, and peaches sourced from local orchards in Fredericksburg, Texasto ensure you, the customer, gets nothing but the best in every creation.The response was over-whelming. I sold out within the first hour at my first market.<br />\n<br />\nSo, I investedall my savings to start Nauti T’s Creations, a name to keep with the theme of my island.At this time, I operated under the Texas Cottage Law out of my house and invested all profits back into the company to sustaingrowth.<br />\n<br />\nI continued to experiment and amplify my creations with heat from both jalapeno and ghost pepper. To expand my presence and reach, in addition to local farmers markets, I also added larger shows with hundreds of vendors, and thousands of customers, like the Peddler Shows and Holiday Markets in Port Aransas and Rockport. During this time, I worked very hard to do whatever it took to get my name out and increase my presence. I went to local businesses and passed out samples, talked with managers, sent out mass emails, went to every market and show available, and sent out messages through Facebook and Instagram. You name it, I did it. At one point I almost gave up, as no one wanted to give me a chance as a home-based business operating under the Texas Cottage Laws.<br />\n<br />\nI decided I had to take the leap, and become an LLC and a real business to elevate Nauti T’s to the next level. I acquired all necessary permits, licenses, certifications, and insurance to ensure I operated in complete compliance and safely. I located a commercial kitchen to operate out of and the magic began! Shortly after this, I received a message on Instagram from Flamingo Ranch in Ingleside stating she would love to feature our creations in her store!! I was so thrilled and full of excitement, my first real store! I continued to reach out to local businesses, and the response was overwhelming! It seemed my hard work was paying off.Nauti T’s name, unique flavor profiles, and quality gourmet tastes were getting recognized.<br />\n<br />\nSo much so, that during this time, I was approached and invited to participate in the World Food Championships. I participated in the Texas Super Chef Throwdown qualifier in 2018 and 2019 in Port Aransas. In 2019, I qualified for the “Big Show”, and cooked as a first time chef in the World Food Championships, and made it all the way to the Super Qualifier, and my creations were featured and infused in several competitor’s dishes, with one making Top-Ten! I had expanded my reach, and now had my creationsin front of a wholenew audience to include chefs, alcohol manufactures and distributors, and local small business.<br />\n<br />\nThis is such awonderful experience, and I continue to learn and strive to perfect my craft. It has been a long hard road to get to this point, and I would not change any of it. Sometimes the bad things that happen in our lives put us directly on the path to the best things that will ever happen to us. I thought I had lost it all, my mobility, my career, and my income. Little did I know how much good would come of something so horrific.<br />\n<br />\nI’ve grown, learned and perfected these amazing creations. Customers routinely use my creations for dessert toppings, meat marinades, glazes, sauces or to add that special “pop” to their favorite adult beverage, not just on toast or cream cheese. These creations have been featured by multiple chefs for award winning dishes, including myself. I am honored to be able share Nauti T\'s Creations with you, promising you my best with every bite. You are the reason I am here today and I want to Thank each and everyone of you!<br />\n<br />\nRemember, “It’s NOT just jelly…It’s a CREATION!”', 'Our Journey'),
(31, 'Second Faq', 'This is the second fAQ', 'FAQ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblguestbook`
--
ALTER TABLE `tblguestbook`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblrecipes`
--
ALTER TABLE `tblrecipes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblrecipe_images`
--
ALTER TABLE `tblrecipe_images`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblresources`
--
ALTER TABLE `tblresources`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblvalues`
--
ALTER TABLE `tblvalues`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblguestbook`
--
ALTER TABLE `tblguestbook`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblrecipes`
--
ALTER TABLE `tblrecipes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblrecipe_images`
--
ALTER TABLE `tblrecipe_images`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tblresources`
--
ALTER TABLE `tblresources`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblvalues`
--
ALTER TABLE `tblvalues`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
