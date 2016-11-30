-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2016 at 04:32 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_b`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `password`) VALUES
(1, 'Zulham', 'asegaf@ymail.com', 'acc8bd29630c8a070acdd84b4511d006');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id_ann` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `title` varchar(120) NOT NULL,
  `content` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id_ann`, `id_user`, `title`, `content`, `date_created`) VALUES
(1, 22, 'Test', 'Test', '2016-10-19 17:00:00'),
(15, 27, 'Five body types of boy groups? ', '\r\nThe average height & weight of Korean men in their 20''s is 174cm & 73kg.\r\n\r\n\r\n1) Skinny\r\nGroups that can wear female clothes and weigh +50kg. ''Skinny'' is a standardized expression to describe them. Usually, groups with fast and stylistic choreographies tend to have this body type.\r\n\r\n\r\n\r\n2) Slim\r\nThey''re not entirely skinny but slim. Their manliness is just between ''boy'' and ''man''. This body type is suited for showy performances.\r\n\r\n\r\n\r\n3) Tall\r\nIt applies to groups with an average height of +180cm. Just by standing, they fill up the stage. The unique aura of tall groups can''t be copied by other groups.\r\n\r\n\r\n\r\n4) Solid\r\nIt''s not like they have excellent abs or huge muscles but they have enough arm muscles. Their concept is manliness and charisma.\r\n\r\n\r\n\r\n5) Muscular & healthy\r\nThe ultimate healthiness. They''re the ones that get called ''beast-dols''. Showing off their abs on a variety show is a must. This body type is suited for groups with extreme manliness and energy. This body type finally reaches the average weight of men.\r\n\r\n=\r\n\r\nInstiz: Five body types of boy groups\r\n\r\n- They''re just all slim or skinny... Male idols who look muscular and big are actually all skinny in real life ??\r\n\r\n- VIXX forest... But VIXX is also too skinny...\r\n\r\n- SHINee looks skinny but they have muscles on their shoulders and all. Don''t just think of SHINee''s old image and consider them skinny.\r\n\r\n- EXO applies to all of them but they''re just so skinny... sobs\r\n\r\n- Muscular 2PM 2AM baby\r\n\r\n- When they first debut, their bodies are unique. But after 3 years, all of them turn skinny...\r\n', '2016-10-26 05:42:41'),
(16, 27, 'BTS'' main fansite issues an apology & backfires + Armies leaving before Infinite & SHINee''s stages ', '\r\nThis OP is the one who posted the earlier Pann of BTS'' main fansite.\r\nAfter BTS'' main fansite got exposed, it brought a lot of criticisms to the fandom. BTS fans claimed that the controversial posts were already removed on the fansite. However, the OP tracked down the fansite and still found the posts.\r\n\r\n\r\n"There''s this vibe of small companies. I''m not discriminating or insulting anyone but there really is. I can clearly feel the lack of money in them. There''s this old-fashioned characteristic of small companies, but BTS doesn''t have it. They had it until Part 1 but since then, the vibe disappeared from them completely."\r\n\r\n"I saw a comment that said their cousin was a fan of them (tn: When BTS fans say ''them'', they mean EXO) and they really hate us. I realized how popular we are ???? This is the reality ???? Popularity and antis rise together."\r\n\r\n"We don''t even have any controversy but they''re bringing such weird excuses to bash us. It''s so funny how they can''t even criticize BTS'' past or talent since these controversies are easy to attack with ???"\r\n- Agreed ???? Past and talent are big controversies but we''re flawless, right?\r\n- Because they know they''ll get backfired. They don''t have the right to criticize someone else''s talent or past.\r\n\r\n"I think most people know about our fandom work (tn: streaming, bulk buying, etc) by now. But their results won''t be as good as ours. Our results were good because this fansite team worked hard and collaborated well. Just because they do it, it doesn''t mean that they''ll do well. It still frustrates me. I''m so mean. I don''t want them to do it, it''s only our way."\r\n\r\n-\r\n\r\nPann: BTS fans are even lying now\r\n\r\n1. [+457, -49] Ah, I really don''t want to be associated with them. It pisses me off enough that they insulted my bias indirectly. I can''t imagine how upset EXO fans are ??? BTS fans, you guys are amazing <3\r\n\r\n2. [+421, -42] It won''t be enough even if they shut their mouths but they''re lying ???? How far will they go? I''m scared.\r\n\r\n3. [+393, -37] I know they''re rude ones but I really hate them. Why don''t they realize that it''ll come back to them? BTS is also from a small company.\r\n\r\n4. [+133, -11] Those posts are posted on a category that only A-level fans have access to.\r\n\r\n\r\n(To become an A-level fan, you have to prove that you streamed ''Fire'' 10,000 times and 2 BTS albums)\r\n\r\n\r\n5. [+129, -105] You guys already had small company vibes since you copied EXO and SHINee ???? I''m fucking pissed. Honestly, we don''t own virtual world concepts but it''s true that you guys copied it ?? Also the uniforms. I didn''t want to say this because I''ve always wanted to avoid them but they''re just so pathetic.\r\n\r\n6. [+99, -6] They dragged EXO systematically on Jjuk Bbang cafe, Women''s Generation cafe, DC Gallery''s Male Celebrities, and Twitter. I don''t doubt that they''re doing the same thing on the main fansite. This is the level of the core fans, all other fans in the fandom must be no different ??\r\n\r\n7. [+74, -19] Hey you BTS fans, stop trying to change the subject. It doesn''t matter how the OP managed to get to the main fansite. It doesn''t change the fact that you guys gathered and bashed other artists.\r\n\r\n8. [+70, -7] Go participate in the Olympics and win a gold medal for ''victim cosplay''. I''m sure you''ll easily win.\r\n\r\n=\r\n\r\n\r\nThe fansite''s apology, translations by PEACHISODA\r\n\r\nBefore we begin the letter, we would like to apologize to the artists and their fandoms who were mentioned in the posts and to ARMYs who were targeted without even knowing the reason.\r\n\r\nOn 23rd October around 11PM, screenshots of some posts and comments which were posted in the "FREE Board" (hereinafter "Free Room") of BTSdotcom (board where only members who go through the process of fan verification have the access to) were uploaded on various community sites.\r\n\r\nThe relevant screenshots showed criticizing remarks directed to other artists and not BTS, despite them not mentioning the artists'' names. After reviewing, we confirmed that these posts were actually posted in the Free Room. We offer a sincere apology to many people who were upset by these screenshots that reached outside because we didn''t take an action fast enough.\r\n\r\nAdmins have forbidden members from mentioning other artists and fandoms regardless by their names or indirectly by giving hints if they are not directly involved with BTS through our Basic Rules. Furthermore, even if they are directly involved with BTS, we strictly manage the board. However, due to managing the site, organizing group order, mass streaming, we couldn''t take any immediate action and due to this reason we couldn''t be tough on every post and every comment. We feel deeply responsible. We apologize from the bottom of our hearts.\r\n\r\nAlso, during the early days of opening the site, the verifying process wasn''t difficult and we were able to come up with the current procedure after making many changes. For this reason, not all members went through the current verification process. This created the difference between members but we managed the site without realizing this. We''re terribly sorry and we will come up with a solution for this issue as well.\r\n\r\nLastly, as a site, we have taken the following actions to fulfill our responsibility.\r\n\r\n1) We have temporarily closed the board (Free Room) that caused this issue.\r\n2) We will get rid of the members who wrote these posts in the following ways.\r\n3) We are currently investigating to find the members who sympathized with these posts by commenting on them and we will get rid of them equally.\r\n\r\n[Relevant members]\r\n"They use everything to slander them (BTS) but they don''t mention our boys'' talent or pre debut past"\r\n- (ID and nickname are mentioned in the original post)\r\n"there are many rumors about blocking Korean celebrities in China", "I think the trace left by us as the first small company boy idol is really amazing", "We''re always criticized about our general popularity", "ah the responses from namcho are hilarious" (namcho - community sites with more male users than female users), "honestly they didn''t even start in a small company, it was a f***ing small company so don''t you think this is really huge...?", "no seriously...they''re the bosses of f***ing small companies but I can''t smell the vibe of a f***ing small company" etc\r\n- (ID and nickname mentioned in the original post)\r\n"other fandoms are planning on mass streaming after reading our posts"\r\n- (" " ")\r\n"Honestly, I think they care too much about our boys." (currently it''s been edited)\r\n- (" " ")\r\n"Seriously why are they so scared? ???????"\r\n- (" " ")\r\n\r\n[Our action]\r\n- Reveal their nickname\r\n- The relevant members will not be able to log in for an indefinite period of time\r\n\r\nWe will try to improve the site to stop similar things from happening in the future and do our best to create clean fansite culture by monitoring continuously.\r\nWe are terribly sorry to everyone who felt uncomfortable due to this problem and we truly apologize for causing a problem as a fan community site that has our group''s name as our title.\r\n\r\n\r\n\r\nAfter posting the apology, the staff said in an announcement that people had manipulated their posts to put the fansite in a bad light. They mentioned this comment "It''s actually amazing that BTS is the first idol group to succeed from a small company." as an example of how people twisted their words.\r\n\r\nAlso, the staff said they''ll delete ''ranting'' section which is one of the categories of ''Free Board''. But because the Free Board itself became controversial, people are demanding them to delete the entire Free Board.\r\n\r\n-\r\n\r\nPann: The class of main fansite''s apology\r\n\r\n1. [+239, -5] It wasn''t even manipulations in the first place but they said it was. We demanded proofs and all they could say is people took one Army''s words out of context. They didn''t even know what they were talking about and yet they were writing the apology. Of course they''ll think we manipulated it ???? They''re trying so hard to come off as victims until the end.\r\n\r\n2. [+214, -16] We wanted a sincere apology, not a feedback that blames rude fans ??\r\n\r\n3. [+208, -8] It''s not an apology, it''s a bunch of excuses ??\r\n\r\n4. [+62, -3] I realized they''re out of their minds when I read this\r\n\r\n\r\n"EXO-roach spy who got into the fansite by buying albums and proving streaming vs fansite members whose words weren''t as harsh as the ones people shouted at them - who''s a bigger idiot?"\r\n\r\n\r\n5. [+49, -3] The way they''re avoiding to take responsibilities is amazing\r\n\r\n6. [+45, -1] New post on insulting EXO ??\r\n\r\n\r\n(BTS fan claiming the origin of ''first week sales'' trend because of their high sales)\r\n\r\n=\r\n\r\nPann: Armies gave a feedback with excuses, not an apology\r\n\r\n1. [+132, -29] They still don''t know what they did wrong ????\r\n\r\n\r\n"Hard-working BTSdot-nim, you''re working hard ?? This incident is just a step... Thanks for the quick feedback"\r\n\r\n\r\n2. [+120, -8] They need to be more specific. It sounds like excuses than an apology. They have to explain clearly what they''ll do in the future. Even Armies on Pann are more detailed and clear.\r\n\r\n3. [+111, -8] I first want to apologize for the feedback and the rude fans. Currently, BTS'' Fantalk is full of fake fans and trolls, there''s barely any real fans. In this morning, we talked about BTSdot''s feedback with normal fans and a lot of us said there should be a new feedback. I know it''s tiring and upsetting to wait for it. But please know that it''s hard for Armies on Pann to gather and take actions. I''m sorry.\r\n\r\n4. [+37, -3] I''m on a lot of sites and Armies on Pann are the nicest... They''re the quickest and their apology and clarifications are really good. Clarifications for BTS'' May controversies are all written on Pann ?? Other websites should be as good as them.\r\n\r\n5. [+34, -2] What ???? They''re supposed to apologize other fans but they''re also apologizing for Armies in the first sentence ??? They can talk about that later, how can they say this in an official apology ?? I''ve never seen this kind of an apology ??\r\n\r\n=\r\n\r\nAt Busan One Asia Festival, the stage order was BTS - Infinite - SHINee. After Infinite was done with their performance, they said, "People, don''t leave! Shiny people are coming soon!" But BTS fans were already leaving by then.\r\n\r\n\r\nPann: Half of the Armies left before the closing\r\n\r\n1. [+194, -25] Armies always cosplay as pitiful victims online but this is the offline reality ???? The fact that they''re dragging other artists on their fansites is also reality. Way too amazing~\r\n\r\n2. [+194, -10] It''s really shitty manners to leave right after their own stage but I can forgive them since tomorrow was Monday ?? But the ground floor is a complete mess. Searching on Twitter gave me results of young BTS fans standing on chairs to watch the stage. They have no manners ??\r\n\r\n3. [+178, -10] Most Armies had left before SHINee''s stage ????\r\n', '2016-10-26 05:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `title` varchar(120) NOT NULL,
  `content` text NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `id_admin`, `title`, `content`, `date_created`) VALUES
(391, 1, '[BBOY] Red Bull BC One World Final Japan 2016', 'Date: December 3, 2016\r\nLocation: Aichi Prefectural Gymnasium, Nagoya, Japan\r\nTime: 5pm-9:30pm\r\nTickets: Ticket sales starts on 28th Oct, 2016\r\n\r\nAs Red Bull BC One enters its 13th year, big changes are on the horizon. In order to open up the event year-round to the wider community, we’re getting rid of the six regional Finals and replacing them with Red Bull BC One Camps all over the world. We’re going back to the core of what breaking is all about: culture. The World Final will once again be invitation only, with the exception of one name to be determined by a Last Chance Cypher where all Cypher winners throughout the year will compete for one open spot that will conclude the line-up.\r\n\r\nOn December 3, the World Final is returning to Japan, this time in the incredible city of Nagoya, the country’s third largest city and a bustling hub for Hip Hop. Sixteen of the best B-Boys on the planet will go head-to-head in knockout battles to determine who will be the one. The event will be broadcast live on Red Bull TV.\r\n\r\nKicking off 2016, camps will be held in countries including France, Italy, Japan, South Africa, and Ukraine, with new countries being announced soon. Check redbullbcone.com for details on a camp near you. These three-day events will include jams, workshops, open battles, talks, exhibitions, theatre shows and more, celebrating Hip Hop, dance and culture. Each will focus on sharing knowledge, making connections and having fun. \r\n\r\nThe camps will reflect the creative landscape of the local scene and will incorporate other elements of Hip Hop, urban dance and creative expression, alongside breaking. They will then culminate in a Red Bull BC One Cypher where the winner will get a chance to battle for a place at the World Final.\r\n\r\nThe World Final is returning to its roots of being invitation only, with one open spot to be determined by a Last Chance Cypher. Throughout 2016, Cyphers will take place in every corner of the globe, with winners being flown to the Last Chance Cypher in Nagoya, to take place on December 1, two days before the World Final.\r\n\r\nThis Last Chance Cypher will represent an incredible cultural exchange as B-Boys will come in from all over the world to prove their skills on the dance floor and battle in an attempt to earn that one coveted spot on the ultimate stage. The winner will compete in the World Final alongside a line-up of Wild Card entries, chosen by an international team of B-Boy experts. \r\n\r\nLast year, millions of spectators tuned in from around the world to see USA’s Victor take the belt in Rome. Each year the stakes become higher and the competition tougher, as breakers continue to evolve the art form. It will be an unbelievable week of events not to be missed.\r\n\r\nRed Bull BC One was founded in 2004 in Biel, Switzerland. Over the years, the championship has moved from Germany to Brazil, South Africa, France, the USA, Japan, Russia, South Korea and Italy. Today it remains a key event in Hip Hop culture, helping to push the culture forward while respecting the original format of one-on-one battles.', '2016-10-26'),
(392, 1, '#BCONE Instagram of the Week', 'Who said that breaking and classical music didn''t fit? They do! Check out this amazing shot by wienerhiphopball. Want to be featured as the #BCONE Instagram of the Week? Tag your photos, and we pick the best each Monday!', '2016-10-26'),
(393, 1, 'B-Boy Life on the Road: DJ Lean Rock', 'DJ Lean Rock is no stranger to travel. Since the age of 16, he has been traveling the world consistently as a B-Boy of the world famous Floor Lords crew and as a professional DJ playing for the biggest B-Boy competitions and the Red Bull BC One World Final twice. Just before his upcoming European summer tour, DJ Lean Rock took some time to answer a few questions about his “B-Boy Life on the Road”\r\n\r\nWhat is your next B-Boy related destination?\r\nOutbreak Europe.\r\n\r\nFirst time in Slovakia?\r\nNo, I’ve been to Slovakia over 10 times.\r\n\r\nWho do you leave behind when you go on your next trip?\r\nMy girlfriend and my dog.\r\n\r\nIs it easy or hard for them you being away?\r\nIf it’s a short trip, then it’s easy for them. If it’s a long trip like when I go on a tour for 3 weeks to a month, then… it’s a little tough.\r\n\r\nWhat is your favourite airport?\r\nHmmm. I am not really a fan of airports. For really short lines (within USA), I would say Burbank Airport. For cleanliness, I would say Zurich Airport. For food, I would say Austin and Nashville, really good BBQ.\r\n\r\nI don’t leave the house without…?\r\nClothes for one haha. My toothbrush, toothpaste and deodorant. If I’m DJ’ing, it will be my laptop, Serato box (if needed), headphones, slipmats, Serato records and maybe a few extra records. I used to always have gummy bears too. But now it’s pistachios.\r\nBest B-Boy related travel companion(s)?\r\nEl Nino, Nasty Ray, Jeremy HK and Keebz because they’re always down for a good time.\r\n\r\nWhat does your upcoming travel to Outbreak Europe look like from door to door?\r\nIt’s long. It takes me about 45 minutes normally to get to LAX. Then, I fly to Amsterdam for a day, which will take at least 10 hours from L.A. I spend a day in Amsterdam, and I leave the next day to fly to Vienna in Austria, which will be another 2 hours of flying. I have another 3-hour drive from Vienna to Banska Bystrica in Slovakia – the city of Outbreak Europe.\r\n\r\nWhat do you expect from Outbreak Europe this year.\r\nNo sleep and lots of fun.\r\n\r\nOne last travel advice?\r\nFor anyone that hates jet lag, rest well and drink loads of water. I usually drink 2 litres of water before and during long flights. Eat healthy and light before getting on the plane. Don’t eat the food on the plane, unless you’re in first class. When you get to your destination, make time for sightseeing, meet some locals, eat good food and if you’re a DJ like me… get some records.\r\n\r\nOutbreak Europe takes place in the city of Banska Bystrica Slovakia from July 29th – 31st.', '2016-10-26'),
(394, 1, '8 Indian B-Boys Trace the Journey of the Dance Form', '“What appeals most to me about the art form is its rawness and the freedom to just let go and express a side of you which I never thought existed.”\r\n\r\n B-Boy ET (Guatam Jeevan)\r\n\r\n \r\n\r\nThe brewing excitement in the days leading up to Red Bull BC One’s 2016 edition in India is tangible. As the four cities where events will take place prep for the event, we caught up with some of the leading B-Boys in the country. Here, we dig a little deeper and speak to the most dedicated of the lot that has been pushing this form for years now about how the art form came to India and how it has been evolving over the years. Some of the country’s best B-Boys offer advice for the next generation. Read on for more.  \r\nSumit Suvarna, Beast Mode (Mumbai)\r\n\r\nB-Boy Ninja is one of the most iconic names in Indian breaking history, having organized one of the first jams in the country back in 2006. Having trained in New York and California to learn the authentic form of breaking, he is an inspiration for many aspiring B-Boys and B-Girls. \r\n\r\nOn how the B-Boy scene in India has evolved since he first began\r\nThere was no one when we started, and when we would practice on the roads, people used to think we were doing kung fu (laughs). I used to practice outside my house, and a lot of kids would come and watch. Over time, the acceptance grew, especially thanks to the shows on MTV and the Red Bull BC One which opened up B-Boying to a much wider audience.  \r\n\r\nIn Bangalore, the scene was pretty young, and the scene was brought over by kids from Dubai. B-Boy Hotshot is a name you can’t ignore, who kicked off the scene in Kolkata, and Kim Mogen from Shillong has fought hard for opportunities in a place where resources are scarce. \r\n\r\nIn Delhi, Heera has been a staunch supporter of b-boying, and has been a mentor to several of the leading B-Boys of today. In Mumbai, Gautam ET Jeevan is leading the game. He started off as India’s first popper, and now he’s a B-Boy, too.\r\n\r\nSocial media has also changed a lot, making it easier for aspiring B-Boys to work on their techniques in a way we couldn’t do before. \r\n\r\nSome advice for the new generation of B-Boys\r\nJust create, don’t imitate. The best dancers have got their own unique styles. Indians need to find their own. We have just been blindly copying other styles, and that’s why we’re not growing. \r\nGautam Jeevan, Freak n Stylz (Mumbai)\r\n\r\nB-Boy ET got into B-Boying when he came across a music video featuring the art form, by RUN DMC, and there’s been no looking back since. He has been a dedicated student of the art, constantly researching the origins of the dance form. He''s also one of the first members of Freak n Stylz Crew, the first crew to be formed in India, which is now nine years old. They were closely followed by the UDK crew, as the second ones in the country, with Paritosh at the helm.\r\n\r\nOn how the B-Boy scene in India has evolved since he first began \r\nThe scene began with no more than five to six B-Boys back when I started. It has grown to thousands across the country now.We had one or two jams back in the day which we organized ourselves and called friends and fellow B-Boys to support us. And now, there are major events with international judges happening every month.\r\n\r\nThe biggest shortcoming for B-Boying in the country, in all honesty, is that 90% of the B-Boys are in their teens or early 20s so they are exploited by corporate houses, Bollywood, event organizers etc. They’re also not paid well as most B-Boys are often just hunting to make a quick buck, and this is what destroys the market completely.\r\n\r\nSome advice for the new generation of B-Boys\r\nNever forget why you started dancing — it was never to win competitions but for a feeling you get when you dance which makes you happy.\r\n\r\nRespect the B-Boys who have paved the way for you — if it wasn''t for them, you probably wouldn''t have been attracted to the art in the first place.\r\n\r\nKnow your worth — if you want to make money through B-Boying, command it through your skills and behavior. Don''t be a sellout.\r\nKim Mugen, Tribal Beatz Crew (Shillong)\r\n\r\nB-Boy Kim started off as one of the core members of Mizoram’s Tribal Beatz Crew, and has been a pioneer and promoter of B-Boy culture in the North-Eastern states. His zeal for breaking gives him a sense of purpose and strength he builds on every day, and he’s been going strong for more than five years. \r\n\r\nOn how the B-Boy scene in India has evolved since he first began\r\nWell, in a worldly perspective, it has grown. Jams and shows happen on a far more regular basis compared to the time I started out. The B-Boy movement is a complex and highly expressive one, and the number of participants has been growing in this culture.\r\n\r\nHip Hop can sometimes have a very negative impact as well, with gang culture and drug use influence. I just don''t want my brothers to go down a path they will regret; this dance should be for spiritual growth and lead into the direction of Truth.\r\n\r\nSome advice for the new generation of B-Boys\r\nFind yourself, seek truth.\r\n\r\nBe careful in following false role models and false doctrines of this culture.\r\n\r\nSeek the Holy Spirit and the bible for advice.\r\n\r\nMatthew 4:4 Man does not live on food alone but by every word of God.\r\n\r\n4_edit.jpg\r\nNaser Azzeh, Black Ice Crew (Bangalore)\r\n\r\nB-Boy Nas was inspired to try breaking because of videos he came across on YouTube that had gone viral. With a lot of hard work and determination, his crew started imitating what they saw and have now developed their own styles and started to create their own moves.  \r\n\r\nOn how the B-Boy scene in India has evolved since he first began\r\nThe scene in India was very small eight years ago, and we have come a long way since then. Personally, I feel Bangalore welcomed this culture in with open arms, as we have the highest number of jams happening per year in India. It''s growing quickly and it isn''t gonna slow down any time soon!\r\n\r\nSome advice for the new generation of B-Boys\r\nTake your time to learn the foundation of the dance and the history because that''s the most important thing. \r\n\r\nEverything has to be built strong from the start. \r\n\r\nGive everything you have to Hip Hop, and Hip Hop will return great things to you in the future!\r\nLikith Achaiah, Black Ice Crew (Bangalore)\r\n\r\nFirst introduced to B-Boying in high school by a student who had returned to India from Dubai, Likith got into the art much later. With Black Ice Crew being formed in 2008, his passion for the art form grew, and some important challenges he’s faced along the way include the lack of studio space to practice, family support and adequate training and guidance. \r\n\r\nOn how the B-Boy scene in India has evolved since he first began\r\nThe scene has evolved exponentially. Dancers are well connected through social media, and there are many events and jams that happen all across the country which help dancers grow.Shortcomings in the space would include a lack of investors, promoters and sponsors for privately-organized jams. \r\n\r\nSome advice for the new generation of B-Boys\r\nTrain hard and also take your time to understand the dance and culture. \r\n\r\nTry to be original. \r\n\r\nDon''t forget to warm up before practice.\r\nJayanta Samaddar, Break Guruz (Kolkata)\r\n\r\nB-Boy Hotshot believes he is an artist first, then a dancer, then a B-Boy. Art came first, then dancing in general (inspired by Michael Jackson), and eventually, he discovered breaking in 2008, when he was 16. Completely self-taught, he started out at a time when there were no more than 10-15 B-Boys, and Break Guruz, the crew he co-founded, is one of the first crews of India formed in June of 2008. \r\n\r\n“What I like about the crew is, we don''t just share dance and go back home. We share life, as B-Boys and beyond B-Boys. To me, that is the essence of the philosophy of the B-Boy... we don''t just break, but we live life with that philosophy of a B-Boy. That is what Break Guruz means.” \r\n\r\nOn how the B-Boy scene in India has evolved since he first began\r\nHailing from a small town called Bhadreshwar, 40 kms from Kolkata, I had to fight societal stereotypes. I think a reason why my B-Boy style is the way it is, is because I have fought these stereotypes all my life. \r\n\r\nWe carried a rivalry with Freak n Stylz crew, a score which needed to be settled. So, we travelled to Mumbai in 2009 to battle them, along with other B-Boys from Chandigarh and Jalandhar. To me, this is the single most important event in Indian B-Boy history. For the first time, B-Boys of India travelled across cities and states for Hip Hop, out of curiosity to know about other B-Boys, and to test our skills against theirs.\r\n\r\nTeaching myself was also a challenge, but that hunger that arose out of the energy of the dance and love for Hip Hop music saw me through. I trained eight hours a day and I believe I''m just getting better and evolving. Now, I pop as well.\r\n\r\nSome advice for the new generation of B-Boys\r\nThere is a lack of diversity, and many B-Boys are similar to some famous B-Boys. Originality thrives in isolation. I don''t mean to say be physically isolated, but mentally you should reject the impulse to do what others are doing.\r\n\r\nYou need to pause and dig deep. Indian B-Boys, grew up in a different environment than the original B-Boys in the Bronx. Unless you dig deep, you cannot accurately represent that idea that you want to represent in the first place.\r\n\r\nStudy great artists. To bring something new to the table, you need to look outside the table. Do something apart from breaking to draw inspiration from. Play an instrument, a sport, anything.\r\n\r\n3_edit.jpg\r\nNaresh Gopal, Third Eye Crew (Chennai)\r\n\r\nB-Boy Nash kicked off his career as a professional dancer when he was 16, inspired by watching B-Boy Gonza from 99 Flavour, Thailand, and he cites B-Boy Bunny (Roc Fresh Crew) as his inspiration closer to home, along with Pravin and Bala from Fifth Element Crew, Chennai. He flew to Thailand, Malaysia and Bangkok for professional training, to which he dedicated a few years, and then started his own crew in India, the Third Eye Crew.\r\n\r\nOn how the B-Boy scene in India has evolved since he first began\r\nThough B-Boying isn’t a part of Indian dance traditionally, people here are so interested in and crazy about this style. Even the less-educated people who have had less exposure, perhaps from a lower socio-cultural strata, are showing more interest towards this style, and I’m sure this is going to reach Himalayan heights.  \r\n\r\nSome advice for the new generation of B-Boys\r\nNo break to break.\r\n\r\nBe disciplined on the floor, and a Charlie Chaplin among all.\r\n\r\nFollow the creator, not the creation. \r\n\r\n1.jpg\r\nBharat Rajodiya, Tandav (New Delhi)\r\n\r\nB-Boy Rawdr’s fascination of B-Boying grew from the first time he came across the dance form. His crew Tandav was formed in 2010, with six other co-founding members from different areas of the capital. \r\n\r\nOn how the B-Boy scene in India has evolved since he first began\r\nI feel it is now that India is really being put on the map, in terms of B-Boying. The Internet has really made a great difference and given us a platform to discover as well as show the world our skills. Freaknstylz and Roc Fresh Crew have been doing some great work since 2006, and that’s how I discovered the art form. \r\n\r\nWhen we started out, we had to find like-minded people without any sort of reference. The only thing we had was Orkut, and we used that to network to a certain extent. We were among the first to organize jams in the city, and now, we have massive competitions like Red Bull BC One; the change is immense.  \r\n\r\nSome advice for the new generation of B-Boys\r\nThere is no originality. The only reason India is being held back is because the new generation is only aping the styles of other. Korea, for example, has a B-Boy scene that flourished in five years. We need to work on our own unique styles to really make an impact.Don’t do it if you just want to imitate others. There are a few kids who are crazy and original, and I’m counting on them to carry the legacy forward. \r\n\r\nText by Aditi Dharmadhikari', '2016-10-26');

-- --------------------------------------------------------

--
-- Table structure for table `comment_post`
--

CREATE TABLE `comment_post` (
  `id_comment` int(11) NOT NULL,
  `id_post` int(11) DEFAULT NULL,
  `id_user_comment` int(11) DEFAULT NULL,
  `content_comment` text NOT NULL,
  `date_created_comment` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_post`
--

INSERT INTO `comment_post` (`id_comment`, `id_post`, `id_user_comment`, `content_comment`, `date_created_comment`) VALUES
(1, 12, 30, 'oke gan', '2016-11-05 17:00:00'),
(2, 12, 30, 'eh ga jadi ding', '2016-11-06 03:04:28'),
(3, 12, 27, 'yahhhh :(', '2016-11-06 03:04:54'),
(4, 11, 27, 'terus ? ', '2016-11-06 07:15:01'),
(5, 11, 27, 'kenapa gan ? ', '2016-11-06 07:15:11'),
(6, 11, 27, 'kenapa beb ?? ', '2016-11-06 07:15:20'),
(7, 14, 27, 'Testing from Lynxs', '2016-11-07 00:33:38'),
(8, 15, 24, 'garing', '2016-11-07 02:04:33');

-- --------------------------------------------------------

--
-- Table structure for table `community`
--

CREATE TABLE `community` (
  `id_comm` int(11) NOT NULL,
  `comm_name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `community`
--

INSERT INTO `community` (`id_comm`, `comm_name`, `type`, `date_created`) VALUES
(1, 'VAP', 'Dance', '2016-09-25'),
(2, 'EDC', 'Dance', '2016-09-25'),
(3, 'KDC', 'Dance', '2016-09-25'),
(4, 'UDC', 'Dance', '2016-09-27'),
(5, 'SDC', 'Dance', '2016-09-27'),
(6, 'BDC', 'Dance', '2016-09-27');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_comm` int(11) NOT NULL,
  `title` varchar(120) NOT NULL,
  `content` text NOT NULL,
  `date_event` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id_chat` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `content` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `guid` varchar(100) NOT NULL,
  `timestamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message`, `nickname`, `guid`, `timestamp`) VALUES
(20, 'asd', 'Lynxs', '9a235a84-3b8c-2e75-1037-a05df41e4d4a', 1477633537),
(21, 'asdklasjdklasd', 'Lynxs', '9a235a84-3b8c-2e75-1037-a05df41e4d4a', 1477633554),
(22, 'askldjaskldjaklsdjlkasjdlkajsdkl', 'Lynxs', '9a235a84-3b8c-2e75-1037-a05df41e4d4a', 1477633557),
(23, 'aslkdjkalsjdklasjdklajsdkl', 'Lynxs', '9a235a84-3b8c-2e75-1037-a05df41e4d4a', 1477633560),
(24, 'asdlkjaslkdjalksdjklasjdklajsdkljaklsdjkalsdjklasd', 'Lynxs', '9a235a84-3b8c-2e75-1037-a05df41e4d4a', 1477633563),
(25, 'daklsdjlkasjdlkajsdkljaskldjas', 'Lynxs', '9a235a84-3b8c-2e75-1037-a05df41e4d4a', 1477633565),
(26, 'lkasdjlkasjdklajsdklajskldjaklsdas', 'Lynxs', '9a235a84-3b8c-2e75-1037-a05df41e4d4a', 1477633566),
(27, 'lkasdjlkasjdklasjdklajsdkljasklda', 'Lynxs', '9a235a84-3b8c-2e75-1037-a05df41e4d4a', 1477633568),
(28, 'lasjdklajsdkljaskldjkalsdjklasjkdlas', 'Lynxs', '9a235a84-3b8c-2e75-1037-a05df41e4d4a', 1477633569),
(29, 'asjdklasjdkljasdlkjaskldjaklsdjklasdjlkasd', 'Lynxs', '9a235a84-3b8c-2e75-1037-a05df41e4d4a', 1477633571),
(30, 'asjdklajsdkl', 'Lynxs', 'f1ab0886-2e63-c4a7-b643-bdc8309a7662', 1477634613),
(31, 'asdjaksdjaklsd', 'Lynxs', 'f1ab0886-2e63-c4a7-b643-bdc8309a7662', 1477634615),
(32, 'djlkasjdklajsdklajskldjaklsd', 'Lynxs', 'f1ab0886-2e63-c4a7-b643-bdc8309a7662', 1477634617),
(33, 'lkasjdlkasjdkl', 'Lynxs', 'f1ab0886-2e63-c4a7-b643-bdc8309a7662', 1477634619),
(34, 'AASFSG', 'Lynxs', '1855384a-6e99-d536-8029-d603f4114134', 1477635876),
(35, 'hai', 'Lynxs', '63383dcc-e6b5-c954-377a-aefcfdb48469', 1477660488),
(36, 'zulham', 'Lynxs', '03d1b5a4-8685-ca5c-bc46-0a15f27f3341', 1477709934),
(37, 'lalala', 'Lynxs', '03d1b5a4-8685-ca5c-bc46-0a15f27f3341', 1477709937),
(38, 'lalalala', 'Lynxs', '03d1b5a4-8685-ca5c-bc46-0a15f27f3341', 1477709939),
(39, 'lalalala', 'Lynxs', '03d1b5a4-8685-ca5c-bc46-0a15f27f3341', 1477709941),
(40, 'lalala', 'Lynxs', '03d1b5a4-8685-ca5c-bc46-0a15f27f3341', 1477709942),
(41, 'alalala', 'Lynxs', '03d1b5a4-8685-ca5c-bc46-0a15f27f3341', 1477709943),
(42, 'alalala', 'Lynxs', '03d1b5a4-8685-ca5c-bc46-0a15f27f3341', 1477709944),
(43, 'lalalala', 'Lynxs', '03d1b5a4-8685-ca5c-bc46-0a15f27f3341', 1477709945),
(44, 'hey', 'Zulham', 'f319dff0-0bd1-3567-1181-b8c246419c16', 1477801112),
(45, 'jlkjlkjlkjlk', 'Lynxs', 'a08d7613-e607-fb19-ae76-f756a31c0721', 1477875715),
(46, 'asjdlkjaslkd', 'Lynxs', 'a7a2d978-326e-a7c7-8791-1c4ecbbed1c3', 1477879963),
(47, 'asdasd', 'Lynxs', 'a7a2d978-326e-a7c7-8791-1c4ecbbed1c3', 1477879966),
(48, 'asdasd', 'Lynxs', 'a7a2d978-326e-a7c7-8791-1c4ecbbed1c3', 1477879967),
(49, 'asndajsdkasd', 'Lynxs', '0ed2619d-f6b1-9ec4-90a5-35fc83085824', 1477972404),
(50, 'hai', 'Lynxs', '0ed2619d-f6b1-9ec4-90a5-35fc83085824', 1477972405),
(51, 'hello', 'Lynxs', '0ed2619d-f6b1-9ec4-90a5-35fc83085824', 1477972407),
(52, 'Hai ... ', 'Lynxs', '2fbfea98-7502-fb9e-bcbc-a5ea3ace578f', 1478076302),
(53, 'hjkhk', 'Lynxs', '510abf86-28a3-f808-fda4-9a512b2032a3', 1478484370),
(54, 'asdasd', 'Lynxs', 'd458fdb7-97f8-4960-c5cd-6e4c16ae35e0', 1478576621),
(55, 'hai', 'Laila', '906e0668-cdd0-9457-479c-547b967538ae', 1478749332),
(56, 'kenapa jQuery110209022377053078587_1478749338027', 'Lynxs', '7c7fc90b-b2ea-40ef-334f-a88578235822', 1478749343),
(57, 'ga kenapa kenapa', 'Laila', '906e0668-cdd0-9457-479c-547b967538ae', 1478749359),
(58, 'lah jQuery1102031703763754867276_1478749351382', 'Lynxs', '7c7fc90b-b2ea-40ef-334f-a88578235822', 1478749365),
(59, 'zz', 'Lynxs', '7c7fc90b-b2ea-40ef-334f-a88578235822', 1478749399),
(60, 'bodo amat :p', 'Laila', '906e0668-cdd0-9457-479c-547b967538ae', 1478749407),
(61, 'haii', 'Lynxs', 'f5de8cd6-ee4d-4ee1-df06-344fadde4e09', 1479344171),
(62, 'kenapa jQuery110208197861837329039_1479344153529', 'Lynxs', 'null', 1479344383),
(63, 'kenapa jQuery110201521198749934205_1479344157037', 'Laila', 'null', 1479344393),
(64, 'test', 'Lynxs', 'c99540a0-968f-f646-e8f8-a150e929d174', 1479775176);

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id_photo` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `photo_name` varchar(120) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `title` varchar(120) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id_photo`, `id_user`, `photo_name`, `date_created`, `title`, `content`) VALUES
(1, 27, '1463411950102.jpg', '2016-10-25 17:00:00', '', ''),
(2, 27, '1464016946943.jpg', '2016-10-21 11:46:53', '', ''),
(3, 27, '1464016963272.jpg', '2016-10-21 12:00:47', '', ''),
(4, 27, '1464016971474.jpg', '2016-10-21 12:00:47', '', ''),
(5, 27, '1464016978142.jpg', '2016-10-21 12:03:58', '', ''),
(6, 27, '1464017000799.jpg', '2016-10-21 12:03:58', '', ''),
(7, 27, '1464017009903.jpg', '2016-10-21 12:03:58', '', ''),
(8, 27, '1464017017615.jpg', '2016-10-21 12:03:58', '', ''),
(9, 27, '1464017282059.jpg', '2016-10-21 12:03:58', '', ''),
(10, 27, '1464017442673.jpg', '2016-10-21 12:04:50', '', ''),
(11, 27, '1464017681657.jpg', '2016-10-21 12:04:50', '', ''),
(12, 27, '1464017792970.jpg', '2016-10-21 12:04:50', '', ''),
(13, 27, '1464497871900.jpg', '2016-10-21 12:04:50', '', ''),
(14, 27, 'DSC_0181.JPG', '2016-10-21 12:04:50', '', ''),
(15, 27, 'DSC_0331.JPG', '2016-10-21 12:05:09', '', ''),
(16, 27, 'P_20160227_113600.jpg', '2016-10-21 12:05:09', '', ''),
(17, 27, '10394049_10202376428046713_7036902841110505366_n.jpg', '2016-11-16 15:12:23', '', ''),
(18, 27, 'mtf_YxrHP_139.jpg.jpg', '2016-11-16 15:19:31', '', ''),
(19, 27, 'C360_2016-07-26-17-16-54-391.jpg', '2016-11-17 03:27:21', '', ''),
(20, 27, 'C360_2016-07-13-12-05-08-021.jpg', '2016-11-20 10:01:10', '', ''),
(21, 24, 'IMG_20160225_193713.jpg', '2016-11-20 10:42:01', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `content` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `privacy` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `id_user`, `content`, `date_created`, `privacy`) VALUES
(4, 27, 'gens ,,,\r\nbuat yang tampil tanggal ####\r\nnanti harap latian di gedung ##### \r\njam ####', '2016-10-10 01:30:44', 0),
(6, 27, 'Geng sorry gua lagi sakit ,, \r\nnanti gua latian lagi klo udah sembuh\r\nthanks ya', '2016-10-12 05:48:30', 0),
(11, 30, 'Garing', '2016-10-23 06:13:25', 0),
(12, 27, 'Nanti latihan seperti biasa ya geng,\r\nJam 16.30 di Auditorium UNNES\r\n--------------------------------------\r\nNB : No Ngaret', '2016-10-26 05:37:55', 0),
(13, 24, 'gua lagi gabut', '2016-10-30 04:16:42', 0),
(14, 30, 'Testing', '2016-11-07 00:30:44', 0),
(15, 24, 'UDC sepi ', '2016-11-07 00:33:09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_comm` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` char(32) NOT NULL,
  `birth` date NOT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `status` bit(1) NOT NULL DEFAULT b'0',
  `is_online` int(11) NOT NULL DEFAULT '0',
  `photo_profile` varchar(120) NOT NULL DEFAULT 'user.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_comm`, `name`, `email`, `password`, `birth`, `gender`, `status`, `is_online`, `photo_profile`) VALUES
(19, 1, 'Farid', 'farid.istiqlal@gmail.com', '88ac0ad1fce39846dac8a313513d85a2', '0000-00-00', 'Male', b'0', 0, 'user.jpg'),
(20, 1, 'fitri', 'fitrianisah310@gmail.com', 'e66305d3e0e3b697b8ec8f9ad5ea8954', '0000-00-00', 'Female', b'1', 0, 'user.jpg'),
(22, 2, 'muslim nuryogi', 'muslim.nuryogi@gmail.com', 'f26510790b446ab7d8939c97b29ea287', '0000-00-00', 'Male', b'0', 0, 'user.jpg'),
(23, 1, 'senja', 'ayuningtyassenja@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0000-00-00', 'Female', b'0', 0, 'user.jpg'),
(24, 4, 'Zulham', 'asegaf@ymail.com', 'acc8bd29630c8a070acdd84b4511d006', '0000-00-00', 'Male', b'1', 0, 'C360_2016-07-13-12-04-06-644.jpg'),
(27, 1, 'Lynxs', 'zulham724@gmail.com', 'acc8bd29630c8a070acdd84b4511d006', '0000-00-00', 'Male', b'1', 1, 'IMG_20160207_112209.jpg'),
(28, 4, 'Bungsu', 'bungsuadi6@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', '0000-00-00', 'Male', b'0', 0, 'user.jpg'),
(30, 1, 'Laila', 'lailatulkhusna38@gmail.com', '8a6afed87cbcb4f9bbd3d7781dc3fe51', '0000-00-00', 'Female', b'1', 0, 'IMG_20160811_180534.jpg'),
(31, 1, 'aye', 'hutabalianaye@gmail.com', '2ceb341dcb5a760d26fc9ce1d7769bd2', '0000-00-00', 'Female', b'1', 0, 'user.jpg'),
(32, 1, 'Ahmad Najibullah', 'adjiepunya@gmail.com', '670b14728ad9902aecba32e22fa4f6bd', '0000-00-00', 'Male', b'0', 0, 'user.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `video_url` varchar(500) NOT NULL,
  `title` varchar(120) NOT NULL,
  `content` text NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `id_user`, `video_url`, `title`, `content`, `date_created`) VALUES
(1, 27, '<iframe width="854" height="480" src="https://www.youtube.com/embed/l3FEela1-CI" frameborder="0" allowfullscreen></iframe>', 'BBOY', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '0000-00-00'),
(2, 27, '<iframe width="854" height="480" src="https://www.youtube.com/embed/EAF97JI2kIg" frameborder="0" allowfullscreen></iframe>', 'BBoy Pocket', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2016-10-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id_ann`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `comment_post`
--
ALTER TABLE `comment_post`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_post` (`id_post`),
  ADD KEY `id_user_comment` (`id_user_comment`);

--
-- Indexes for table `community`
--
ALTER TABLE `community`
  ADD PRIMARY KEY (`id_comm`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_comm` (`id_comm`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id_chat`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id_photo`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_comm` (`id_comm`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id_ann` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=395;
--
-- AUTO_INCREMENT for table `comment_post`
--
ALTER TABLE `comment_post`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `community`
--
ALTER TABLE `community`
  MODIFY `id_comm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id_photo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `announcement`
--
ALTER TABLE `announcement`
  ADD CONSTRAINT `announcement_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment_post`
--
ALTER TABLE `comment_post`
  ADD CONSTRAINT `comment_post_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_post_ibfk_2` FOREIGN KEY (`id_user_comment`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `event_ibfk_2` FOREIGN KEY (`id_comm`) REFERENCES `community` (`id_comm`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `forum`
--
ALTER TABLE `forum`
  ADD CONSTRAINT `forum_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_comm`) REFERENCES `community` (`id_comm`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
