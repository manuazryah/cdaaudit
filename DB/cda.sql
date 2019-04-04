-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 04, 2019 at 03:54 AM
-- Server version: 5.6.41-84.1-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cdaaudit_cda`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `about_content` longtext,
  `who_we_are` mediumtext,
  `what_we_are` mediumtext,
  `our_approach` mediumtext,
  `why_choose_cda` longtext,
  `social_responsibility` longtext,
  `vision_mission` longtext,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about_content`, `who_we_are`, `what_we_are`, `our_approach`, `why_choose_cda`, `social_responsibility`, `vision_mission`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, '<p style=\"text-align:justify\">CDA Accounting and Bookkeeping Services LLC is a central hub for all the Management Consulting and Accounting Services you need in Dubai. From Advisory Services to Tax Auditing, we offer highly professional &amp;&nbsp;valued services to an inclusive clientele. Powered by a group of professionals who are not just skilled but also passionate about the services they excel at, CDA can offer the best experience and the results. No matter whether you are looking for CFO Services, Accounts&nbsp;outsourcing or Standard Bookkeeping Services for your firm, CDA is capable of delivering.</p>\r\n\r\n<p style=\"text-align:justify\">This company was founded and mentored by Mr. Mohammad Darwish, who worked as the Finance Director for the Office of Shaik Zayed, Abu Dhabi. Since the beginning, it has been offering quality services to different portfolio of companies in UAE and we have associated companies registered in UK as well as in India. A registered professional service organization in Dubai, CDA has been designed to deliver sustainable financial discipline and control to its customers when it comes to accounting. CDA is also an expert when it comes to the various budgeting and cost-benefit analysis projects you may have.</p>\r\n\r\n<p>A group of people who are qualified and experienced in areas such as Auditing and Assurance, Accounting and Advisory, and Business and Management Consultancy is the real strength behind CDA. The experience in International Financal&nbsp;Reporting Standards and UAE VAT laws helps the team deliver the best results regardless of where your company is based out of.</p>\r\n\r\n<p>There is a reason why CDA Accounting and Bookkeeping Service LLC pops up when you search for the best accounting &amp;&nbsp;bookkeeping services near me. Through the years of experience, CDA has understood the importance of Confidentiality and Integrity when it comes to the different accounting services. CDA also boasts one of the top customer retention rates among accounting and bookkeeping firms in Dubai.</p>\r\n', 'We are a group of professionals who try to offer the best financial consultancy services to our clientele. We offer standard and custom-tailored services, based on the specific requirements from our clients. ', 'CDA Accounting and Bookkeeping Services LLC is one of the trusted and popular Accounting Firms registered in Dubai & serving across UAE with variety of clients. ', 'We follow a beyond-the-numbers approach that analyzes the beneficiary organization first and then delivers the custom-tailored actions, ensuring the best results.', '<p>For the past five years, CDA Accounting and Bookkeeping Services LLC has been one of the reputed management consulting &amp; accounting service providers in Dubai. It has been possible due to some values that we follow at CDA, starting from expertise-filled professionals until the streamlined execution of the services. Be it CFO Services or some internal auditing for your firm, our team has years of experience to help you.</p>\r\n\r\n<ul>\r\n	<li>An Experienced Team</li>\r\n	<li>Wide Exposure to Market</li>\r\n	<li>Custom-Tailored Services</li>\r\n	<li>Quick &amp; Trusted Support</li>\r\n	<li>A Diverse Clientele</li>\r\n	<li>One-Stop Solution Provider</li>\r\n</ul>\r\n', '<p style=\"text-align:justify\">At CDA Accounting and Bookkeeping Services LLC, we do not take the nature, the society or our employees for granted. We follow a number of steps to make sure that CDA protects the environment, provides back to the community and preserves humane values that matter. Our Corporate Social Responsibility sector has been made up of a few sub-areas, each of which is&nbsp;dedicated to the Community, Team and Environment.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Giving back to the community, CDA has launched a number of charity programs. CDA also volunteers a few networking events that work as a platform for bringing together bright minds. In addition to this, CDA Accounting and Bookkeeping Services LLC&nbsp;offers a healthy work environment. Paperless billing and power-efficient office equipment make it easy for CDA to enhance the overall nature-friendliness.</p>\r\n', '<p style=\"text-align:justify\">CDA Accounting and Bookkeeping Services LLC was founded with a vision of providing quality Bookkeeping, Accounting and Financial Consultancy services to both regional firms in UAE and International organizations. It also envisions a world that has financial stability, discipline and transparency.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">The mission of CDA Accounting and Bookkeeping Services LLC is to become a comprehensive and centralized hub of accounting, bookkeeping, outsourcing and other finance-related services. We aim to create and break records as it comes to ethical values, performance and the ultimate quality of the services offered. CDA also wants to build a platform that combines passionate and skilled professionals, who have expertise in offering financial services to a diverse clientele.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">We also follow a bunch of core values at CDA Accounting and Bookkeeping Services LLC.</p>\r\n\r\n<p style=\"text-align:justify\">Quality, Delivered &mdash; CDA wants to provide the highest-quality service to its customers, no matter the nature or volume of the project. Our teams have the sufficient skill-set and are trained to work towards the ultimate satisfaction of our clients.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Adapt, Learn &mdash; With all due respect to the conventions, CDA believes change is inevitable. One of our core values is to learn with the world and adapt according to the changes. From technical infrastructure to various strategic approaches, CDA has taken turns that matter.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Respect &amp; Credibility &mdash; We deliver respect to every client that approaches CDA. Our idea is to give priority to everyone, as the world is an equal place. This helps CDA become a credible organization in the long run.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Unique &mdash; CDA Accounting and Bookkeeping Services LLC aims to become a different accounting firm, for all the right reasons. From adapting to the environmental changes to offering services that meet with current demands, everything is made with a difference.</p>\r\n', 1, 1, 1, '2019-01-14', '2019-02-10 10:53:21');

-- --------------------------------------------------------

--
-- Table structure for table `admin_posts`
--

CREATE TABLE `admin_posts` (
  `id` int(11) NOT NULL,
  `post_name` varchar(280) DEFAULT NULL,
  `admin` int(11) DEFAULT NULL,
  `cms_contents` int(11) DEFAULT '0',
  `status` int(11) DEFAULT NULL,
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` datetime DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_posts`
--

INSERT INTO `admin_posts` (`id`, `post_name`, `admin`, `cms_contents`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'Super Admin', 1, 1, 1, 1, 1, '2017-03-09 00:00:00', '2018-06-08 08:50:43');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `employee_code` varchar(280) DEFAULT NULL,
  `user_name` varchar(280) DEFAULT NULL,
  `password` varchar(280) DEFAULT NULL,
  `name` varchar(280) DEFAULT NULL,
  `email` varchar(280) DEFAULT NULL,
  `phone_number` varchar(280) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` datetime DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `post_id`, `employee_code`, `user_name`, `password`, `name`, `email`, `phone_number`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 1, '005', 'testing', '$2y$13$PGnWl5oyvJnWiUt6d41Byu8ZWSOh0VmyYshHpD.vVRsfP1lOD9kJO', ' CDA Admin', 'manu@azryah.com', '9876543210', 1, 10, 1, '2017-03-16 00:00:00', '2019-01-15 09:02:20');

-- --------------------------------------------------------

--
-- Table structure for table `affiliation`
--

CREATE TABLE `affiliation` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `affiliation`
--

INSERT INTO `affiliation` (`id`, `title`, `logo`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'UAECA', 'png', 1, 1, 1, '2019-02-04', '2019-02-06 08:00:42'),
(2, 'ACCA', 'png', 1, 1, 1, '2019-02-04', '2019-02-06 08:00:33'),
(3, 'CMA', 'png', 1, 1, 1, '2019-02-04', '2019-02-06 08:00:27'),
(4, 'Dubai Chamber', 'png', 1, 1, 1, '2019-02-04', '2019-02-06 08:00:21'),
(5, 'DED', 'png', 1, 1, 1, '2019-02-04', '2019-02-06 08:00:15');

-- --------------------------------------------------------

--
-- Table structure for table `baner_images`
--

CREATE TABLE `baner_images` (
  `id` int(11) NOT NULL,
  `about` varchar(100) DEFAULT NULL,
  `services` varchar(100) DEFAULT NULL,
  `why_cda` varchar(100) DEFAULT NULL,
  `blog` varchar(100) DEFAULT NULL,
  `contact_us` varchar(100) DEFAULT NULL,
  `our_team` varchar(100) DEFAULT NULL,
  `news` varchar(100) DEFAULT NULL,
  `career` varchar(100) DEFAULT NULL,
  `consultation` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `baner_images`
--

INSERT INTO `baner_images` (`id`, `about`, `services`, `why_cda`, `blog`, `contact_us`, `our_team`, `news`, `career`, `consultation`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'jpg', 'jpg', 'jpg', 'jpg', 'jpg', 'jpg', 'jpg', 'jpg', 'jpg', 1, 1, 1, '2019-01-14', '2019-01-24 12:12:49');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `canonical_name` varchar(255) DEFAULT NULL,
  `small_description` text,
  `detailed_description` longtext,
  `meta_title` varchar(100) DEFAULT NULL,
  `meta_keyword` text,
  `meta_description` text,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `author`, `date`, `title`, `canonical_name`, `small_description`, `detailed_description`, `meta_title`, `meta_keyword`, `meta_description`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'png', 'admin', '2019-01-17', 'Business and Accounting Advisory Services , Proper VAT Planning & Execution, Effective Monitoring of Cash flow- How they can help a Business Succeed?', 'business-and-accounting-advisory-services-proper-vat-planning-execution-effective-monitoring-of-cash-flow-how-they-can-help-a-business-succeed', 'Almost every business owner understands the need of keeping their financial books right. This is mostly due to the legal implications of failing to do so. For instance, in a region like United Arab Emirates, incompliance towards financial laws would invite serious issues to the company’s existence.\r\n\r\n', '<p dir=\"ltr\" style=\"text-align:justify\">Almost every business owner understands the need of keeping their financial books right. This is mostly due to the legal implications of failing to do so. For instance, in a region like United Arab Emirates, incompliance towards financial laws would invite serious issues to the company&rsquo;s existence.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">As it happens, however, things are different from this conventional notion. Use of financial services, such as accounting and accounting services, VAT Planning and Execution, Cash-flow monitoring, can help a business succeed.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">In this article, we would be discussing how these services would be beneficial for your organization, in a way or another.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>Transparency and Productivity</strong></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">When you start employing business and accounting advisory services, things become clearer and better. You will have a clear idea about what is happening inside the financial sector of your organization. This would be helpful in two major ways.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">First, you would know how much money is being received and spent. Second, you can get rid of the potential human errors and biases that would happen if you were to set up an accounting team in-house. Because you will be hiring some of the best accounting and bookkeeping service providers, you don&rsquo;t have to worry about legal constraints either.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Trust us, it&rsquo;s great to have an organization with truly transparent flow of money and other resources. Since you are tracking all the expenses and income, you would have a clear idea about the financial sector. It will be useful in the data analytics sector as well.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>Legal Compliance and Tax Savings</strong></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">If your organization generates revenue beyond a particular point, you are required to pay taxes. As it comes to areas like Dubai, the laws are becoming stricter. If you don&rsquo;t understand VAT planning and execution, you may be in proper trouble as well. And, VAT services can really be helpful at times.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Understanding the VAT policies and complying with them is an essential part for sustaining your organization in places like Dubai. Given that you are getting the VAT Consultancy services from a reputed company, there will be some ways to enable tax savings as well. You can even get to a point where the tax savings make an impressive contribution to the end-profit.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">At the end of the day, VAT Consultancy services offer you peace of mind and tax savings. There are firms to assist you throughout the VAT process &mdash; from registration to filings. It&rsquo;s also great that you are saving a big amount of money.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>Better Cash-flow Management</strong></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">The lack of cash-flow monitoring is a reason why a huge number of companies fail in the industry. That&rsquo;s also the reason why you should avail one of the cash-flow monitoring and due vigilance services. This would help you understand where you are spending and where you are earnings &mdash; thus leading to better decisions.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">In this age, your business decisions must be based on data. Data-driven analysis and decision-making would help you achieve better profit, without compromising the sustainability aspect. Of course, the first step will be the establishment of a proper tracking system. In the long run, you would not have to worry about scenes where you don&rsquo;t have funds for essential tasks.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Cash-flow management is probably the best service you can get for your business. You would not only save a lot of money but bring about sustainable financial management into the company. As far as an expanding firm is concerned, these are just awesome.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>Summing Up</strong></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Apparently, these are three areas where accounting, VAT management and cash-flow management services would help your business. The money you invest in these services would come back to you doubled in some time for sure. So, make sure that you outsource the financial services to a reputed firm, if you cannot afford setting up a dedicated department in your organization.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n', 'Business and Accounting Advisory Services , Proper Vat planning and execution Effective Monitoring o', 'Business and Accounting Advisory Services', 'Almost every business owner understands the need of keeping their financial books right. This is mostly due to the legal implications of failing to do so. For instance, in a region like United Arab Emirates, incompliance towards financial laws would invite serious issues to the company’s existence.', 1, 1, 1, '2019-01-14', '2019-02-19 11:57:06'),
(2, 'png', 'admin', '2019-01-17', '5 Key Benefits of Outsourcing Accounting Activities', '5-key-benefits-of-outsourcing-accounting-activities', 'There is no doubt over that accounting activities are essential in every organization. It does not matter how small or big your organization is, you have to keep everything under transparent eyes. That is why you would have to enable consistent services of accounting and bookkeeping all along.\r\n\r\n', '<p dir=\"ltr\" style=\"text-align:justify\">There is no doubt over that accounting activities are essential in every organization. It does not matter how small or big your organization is, you have to keep everything under transparent eyes. That is why you would have to enable consistent services of accounting and bookkeeping all along.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Today, however, you don&rsquo;t have to set up a dedicated finance department in your company to do this &mdash; you have options for outsourcing a number of accounting activities. The last time we checked, however, not many people understand the actual benefits of this outsourcing.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">In this article, we will be talking about the five key benefits of doing so.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>#1 Cost-Efficient Management</strong></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">In case you did not know, setting up and maintaining a dedicated finance department can cost you a lot. On the other hand, when it comes to outsourcing, the monetary requirements are very low. One thing you have to note here is that there is no compromise over quality. You are actually hiring a group of people who have enough experience with these accounting activities. Because there are no strings attached, both parties can offer the best experience at the end of the day. To say the least, outsourcing accounting activities is the best way to save money.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>#2 Transparency</strong></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">This benefit is applicable if you are getting the services from a reputed accounting service provider from your region. Once hired, you won&rsquo;t have to worry about the issues of transparency. Outsourcing services do make sure that you receive a comprehensive report about the current financial state. This would be helpful when you want to get rid of fraud and other human errors involved in the process. Because you are hiring a third-party entity for fact checks, you don&rsquo;t have to worry about internal frauds either. Just so you know, internal frauds are very common in organizations.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>#3 Easy to Manage</strong></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Just so you know, setting up a financial department is not just about the monetary efforts. When you add a new department to your organization, the whole structure would have to be changed. That&rsquo;s not something practical for most people out there. When you are outsourcing, however, there is no need to worry. The new team would enable the smooth functioning of the same department. You don&rsquo;t have to worry about wages, cash-flow, inter-team co-ordination or anything else, for that matter. This ease of use should be a noticeable reason as to why you should outsource.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>#4 State-of-the-art Professionals</strong></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Let&rsquo;s consider the scenario where you are hiring a number of professionals for your new finance team. The problem is that you will have to pay a lot of money to get some of the best professionals with experience in the industry. When you outsource accounting services, the company would be bringing a team that is well-versed in all types of activities. For instance, if you want to bring VAT Consultancy and management, you&rsquo;d get utmost accuracy and transparency from the team. What&rsquo;s better, you may also be able to get tax savings in the long run.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>#5 Always Up to Date</strong></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">In a dedicated department environment, you may not always have access to the cutting-edge technology. In other words, it may not be possible to update to the latest software and infrastructure. As far as outsourcing goes, everything is taken care of by the provider organization. It&rsquo;s very likely that they are using some of the industry&rsquo;s best software and hardware to carry out accounting activities. So, in turn, your organization would have access to this better technology &mdash; without actually spending a fortune on it. This will have an impact on overall productivity as well.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">If you don&rsquo;t think outsourced accounting services aren&rsquo;t effective even after all these, we don&rsquo;t know whether you will ever be. So, as we said earlier, make sure that you choose one of the best service providers from your region.</p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n&nbsp;</p>\r\n', '5 Key Benefits of Outsourcing Accounting Activities', 'Outsourcing Accounting Activities', '5 Key Benefits of Outsourcing Accounting Activities', 1, 1, 1, '2019-01-14', '2019-02-17 09:54:33'),
(3, 'png', 'admin', '2019-01-17', 'Accounting Services – Taking Your Business To The Next Level', 'accounting-services-taking-your-business-to-the-next-level', 'We often think accounting services are quite underrated. Not many business owners understand how useful they can be for their organization. To say the least, the right accounting services can take your business to a new level.', '<p dir=\"ltr\" style=\"text-align:justify\">We often think accounting services are quite underrated. Not many business owners understand how useful they can be for their organization. To say the least, the right accounting services can take your business to a new level. In this article, we are going to explore how. Just so you know, all these things are applicable only when you get the services from a reputed, trustworthy and professional-friendly provider. In that case, you can actually expect more benefits than you think.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>Better Productivity</strong></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Productivity in your organization is dependent on many things and financial stability is one of them. If you&rsquo;re sure that your organization has a stable way of managing finances, you can focus on the important things. It is best if you can outsource services and achieve better results, but even otherwise, things are fine. Peace of mind is not the only thing that accounting services can offer you. There are instances when a deeper insight from the financial sector can offer you better productivity. Considering the long-term future of your firm, it&rsquo;s all important.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>Data-driven Decisions</strong></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">When you have the right accounting and bookkeeping services for help, you don&rsquo;t have to take hunch-based decisions. Instead, there will be data-driven insights to help you make the final point. For instance, suppose you are confused about making the next level of investment. Instead of taking a leap of faith, you can actually check how well your organization has been performing for the past financial year or the quarter. This would help you take a decision that would not harm the stability of your organization. Taking such steps is vital and you would have better confidence in the end.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>Legal Compliance</strong></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">Complying with legality is probably the best way to make sure that your business makes it to the top position elsewhere. For instance, we can take the case of Value Added Tax, which is really important in areas such as Dubai and United Arab Emirates as a whole. Now, in order to smoothen the whole process of VAT, you need the right financial records, accounting books. This is where the necessity of accounting and bookkeeping has come in. By keeping these services at your disposal, you will be able to keep track of the VAT needs and even get some tax savings in some time.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\"><strong>Growth Analysis &amp; Tracking</strong></p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">We already talked about the convenience of having your financial information available anytime of the day. Financial records will also help you maintain business transactions focused on your company&rsquo;s growth. Not only will you be tracking the transactions as to see whether your company is growing, but you will also be going data-driven all the time. If you get the accounting services from a trusted and professional firm, there are chances that you will be accompanied by some professional advice for financial discipline as well as the overall growth.</p>\r\n\r\n<p dir=\"ltr\" style=\"text-align:justify\">So, these are just some ways how accounting service can take your business to the next level. It must also be noted that availing these services has become such an easy task, especially if you are planning to do outsourcing.</p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n&nbsp;</p>\r\n', 'Accounting Services – Taking Your Business To The Next Level', 'Accounting Services ', 'Accounting Services – Taking Your Business To The Next Level', 1, 1, 1, '2019-01-14', '2019-02-17 09:55:16');

-- --------------------------------------------------------

--
-- Table structure for table `career_content`
--

CREATE TABLE `career_content` (
  `id` int(11) NOT NULL,
  `title` mediumtext,
  `description` mediumtext,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `career_content`
--

INSERT INTO `career_content` (`id`, `title`, `description`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, '<p><span>Be</span> A Part Of Our<br />\r\nGrowth And Success</p>\r\n', '<p>We offer competitive salaries, great benefits, a friendly and relaxed atmosphere.</p>\r\n\r\n<p>We&#39;ve built a team that does great work and has an awesome time doing it and we&#39;re always looking for more smart people.</p>\r\n', 1, 1, 1, '2019-01-24', '2019-01-24 07:10:01');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `client_name` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_name`, `image`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'Free Trade & Retail Trading', 'png', 0, 1, 1, '2019-01-14', '2019-02-03 07:37:49'),
(2, 'Construction, Contracting &  Real Estate', 'png', 1, 1, NULL, '2019-01-14', '2019-01-14 10:01:40'),
(3, 'Oil &Gas Offshore', 'png', 1, 1, 1, '2019-01-14', '2019-04-02 10:26:11'),
(4, 'Hospitality & Medical Sector', 'png', 1, 1, 1, '2019-01-14', '2019-04-02 10:29:34'),
(5, 'Free trade & Trading', 'png', 0, 1, 1, '2019-01-14', '2019-02-03 07:24:55');

-- --------------------------------------------------------

--
-- Table structure for table `conditions`
--

CREATE TABLE `conditions` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `contents` longtext,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `conditions`
--

INSERT INTO `conditions` (`id`, `title`, `contents`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'Privacy Policy', '<p><strong>CDA Accounting &amp; Bookkeeping Services LLC</strong></p>\r\n\r\n<p><strong>Privacy Policy of https://www.cdaaudit.com/</strong></p>\r\n\r\n<p><strong>Privacy Policy</strong></p>\r\n\r\n<p><strong>Effective date: April 03, 2019</strong></p>\r\n\r\n<p>CDA Accounting &amp; Bookkeeping Services LLC (&quot;us&quot;, &quot;we&quot;, or &quot;our&quot;) operates the https://www.cdaaudit.com/ website (the &quot;Service&quot;).</p>\r\n\r\n<p>This page informs you of our policies regarding the collection, use, and disclosure of personal data when you use our Service and the choices you have associated with that data. Our Privacy Policy for CDA Accounting &amp; Bookkeeping Services LLC is created with the help of the Free Privacy Policy Generator.</p>\r\n\r\n<p>We use your data to provide and improve the Service. By using the Service, you agree to the collection and use of information in accordance with this policy. Unless otherwise defined in this Privacy Policy, terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, accessible from https://www.cdaaudit.com/</p>\r\n\r\n<h3><strong>Information Collection and Use</strong></h3>\r\n\r\n<h4><strong>Types of Data Collected</strong></h4>\r\n\r\n<h5><strong>Personal Data</strong></h5>\r\n\r\n<p>While using our Service, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you (&quot;Personal Data&quot;). Personally, identifiable information may include, but is not limited to:</p>\r\n\r\n<ul>\r\n	<li>Email address</li>\r\n	<li>First name and last name</li>\r\n	<li>Phone number</li>\r\n	<li>Cookies and Usage Data</li>\r\n</ul>\r\n\r\n<h4><strong>Usage Data</strong></h4>\r\n\r\n<p>We may also collect information how the Service is accessed and used (&quot;Usage Data&quot;). This Usage Data may include information such as your computer&#39;s Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that you visit, the time and date of your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p>\r\n\r\n<h4><strong>Tracking &amp; Cookies Data</strong></h4>\r\n\r\n<p>We use cookies and similar tracking technologies to track the activity on our Service and hold certain information.</p>\r\n\r\n<p>Cookies are files with small amount of data which may include an anonymous unique identifier. Cookies are sent to your browser from a website and stored on your device. Tracking technologies also used are beacons, tags, and scripts to collect and track information and to improve and analyze our Service.</p>\r\n\r\n<p>You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our Service.</p>\r\n\r\n<h4><strong>Examples of Cookies we use:</strong></h4>\r\n\r\n<ul>\r\n	<li>Session Cookies: We use Session Cookies to operate our Service.</li>\r\n	<li>Preference Cookies: We use Preference Cookies to remember your preferences and various settings.</li>\r\n	<li>Security Cookies: We use Security Cookies for security purposes.</li>\r\n</ul>\r\n\r\n<h3><strong>Use of Data</strong></h3>\r\n\r\n<p>CDA Accounting &amp; Bookkeeping LLC uses the collected data for various purposes:</p>\r\n\r\n<ul>\r\n	<li>To provide and maintain the Service</li>\r\n	<li>To notify you about changes to our Service</li>\r\n	<li>To allow you to participate in interactive features of our Service when you choose to do so</li>\r\n	<li>To provide customer care and support</li>\r\n	<li>To provide analysis or valuable information so that we can improve the Service</li>\r\n	<li>To monitor the usage of the Service</li>\r\n	<li>To detect, prevent and address technical issues</li>\r\n</ul>\r\n\r\n<h3><strong>Transfer of Data</strong></h3>\r\n\r\n<p>Your information, including Personal Data, may be transferred to &mdash; and maintained on &mdash; computers located outside of your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from your jurisdiction.</p>\r\n\r\n<p>If you are located outside United Arab Emirates and choose to provide information to us, please note that we transfer the data, including Personal Data, to United Arab Emirates and process it there.</p>\r\n\r\n<p>Your consent to this Privacy Policy followed by your submission of such information represents your agreement to that transfer.</p>\r\n\r\n<p>CDA Accounting &amp; Bookkeeping LLC will take all steps reasonably necessary to ensure that your data is treated securely and in accordance with this Privacy Policy and no transfer of your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of your data and other personal information.</p>\r\n\r\n<h3><strong>Disclosure of Data</strong></h3>\r\n\r\n<p>Legal Requirements</p>\r\n\r\n<p>CDA Accounting &amp; Bookkeeping LLC may disclose your Personal Data in the good faith belief that such action is necessary to:</p>\r\n\r\n<ul>\r\n	<li>To comply with a legal obligation</li>\r\n	<li>To protect and defend the rights or property of CDA Accounting &amp; Bookkeeping LLC</li>\r\n	<li>To prevent or investigate possible wrongdoing in connection with the Service</li>\r\n	<li>To protect the personal safety of users of the Service or the public</li>\r\n	<li>To protect against legal liability</li>\r\n</ul>\r\n\r\n<h3><strong>Security of Data</strong></h3>\r\n\r\n<p>The security of your data is important to us but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Data, we cannot guarantee its absolute security.</p>\r\n\r\n<h3><strong>Service Providers</strong></h3>\r\n\r\n<p>We may employ third party companies and individuals to facilitate our Service (&quot;Service Providers&quot;), to provide the Service on our behalf, to perform Service-related services or to assist us in analyzing how our Service is used.</p>\r\n\r\n<p>These third parties have access to your Personal Data only to perform these tasks on our behalf and are obligated not to disclose or use it for any other purpose.</p>\r\n\r\n<h3><strong>Links to Other Sites</strong></h3>\r\n\r\n<p>Our Service may contain links to other sites that are not operated by us. If you click on a third-party link, you will be directed to that third party&#39;s site. We strongly advise you to review the Privacy Policy of every site you visit.</p>\r\n\r\n<p>We have no control over and assume no responsibility for the content, privacy policies or practices of any third-party sites or services.</p>\r\n\r\n<h3><strong>Children&#39;s Privacy</strong></h3>\r\n\r\n<p>Our Service does not address anyone under the age of 18 (&quot;Children&quot;).</p>\r\n\r\n<p>We do not knowingly collect personally identifiable information from anyone under the age of 18. If you are a parent or guardian and you are aware that your Children has provided us with Personal Data, please contact us. If we become aware that we have collected Personal Data from children without verification of parental consent, we take steps to remove that information from our servers.</p>\r\n\r\n<h3><strong>Changes to This Privacy Policy</strong></h3>\r\n\r\n<p>We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page.</p>\r\n\r\n<p>We will let you know via email and/or a prominent notice on our Service, prior to the change becoming effective and update the &quot;effective date&quot; at the top of this Privacy Policy.</p>\r\n\r\n<p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>\r\n\r\n<h3><strong>Contact Us</strong></h3>\r\n\r\n<p>If you have any questions about this Privacy Policy, please contact us:</p>\r\n\r\n<p>By email: info@cdaaudit.com</p>\r\n', 1, NULL, 1, NULL, '2019-04-03 15:15:20'),
(2, 'Terms and Conditions', '<p>Welcome to CDA Accounting &amp; Bookkeeping LLC!</p>\r\n\r\n<p>These terms and conditions outline the rules and regulations for the use of CDA Accounting &amp;Bookkeeping LLC&#39;s Website, located at https://www.cdaaudit.com/.</p>\r\n\r\n<p>By accessing this website, we assume you accept these terms and conditions. Do not continue to use CDA Accounting &amp; Bookkeeping LLC if you do not agree to take all of the terms and conditions stated on this page.&nbsp;</p>\r\n\r\n<p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: &quot;Client&quot;, &quot;You&quot; and &quot;Your&quot; refers to you, the person log on this website and compliant to the Company&rsquo;s terms and conditions. &quot;The Company&quot;, &quot;Ourselves&quot;, &quot;We&quot;, &quot;Our&quot; and &quot;Us&quot;, refers to our Company. &quot;Party&quot;, &quot;Parties&quot;, or &quot;Us&quot;, refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client&rsquo;s needs in respect of provision of the Company&rsquo;s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>\r\n\r\n<h3><strong>Cookies</strong></h3>\r\n\r\n<p>We employ the use of cookies. By accessing CDA Accounting &amp; Bookkeeping LLC, you agreed to use cookies in agreement with the CDA Accounting &amp; Bookkeeping LLC&#39;s Privacy Policy.</p>\r\n\r\n<p>Most interactive websites use cookies to let us retrieve the user&rsquo;s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>\r\n\r\n<h3><strong>License</strong></h3>\r\n\r\n<p>Unless otherwise stated, CDA Accounting &amp; Bookkeeping LLC and/or its licensors own the intellectual property rights for all material on CDA Accounting &amp; Bookkeeping LLC. All intellectual property rights are reserved. You may access this from CDA Accounting &amp; Bookkeeping LLC for your own personal use subjected to restrictions set in these terms and conditions.</p>\r\n\r\n<p>You must not:</p>\r\n\r\n<ul>\r\n	<li>Republish material from CDA Accounting &amp; Bookkeeping LLC</li>\r\n	<li>Sell, rent or sub-license material from CDA Accounting &amp; Bookkeeping LLC</li>\r\n	<li>Reproduce, duplicate or copy material from CDA Accounting &amp; Bookkeeping LLC</li>\r\n	<li>Redistribute content from CDA Accounting &amp; Bookkeeping LLC</li>\r\n</ul>\r\n\r\n<p>This Agreement shall begin on the date hereof.</p>\r\n\r\n<p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. CDA Accounting &amp; Bookkeeping LLC does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of CDA Accounting &amp; Bookkeeping LLC, its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, CDA Accounting &amp; Bookkeeping LLC shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>\r\n\r\n<p>CDA Accounting &amp; Bookkeeping LLC reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>\r\n\r\n<p>You warrant and represent that:</p>\r\n\r\n<ul>\r\n	<li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>\r\n	<li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>\r\n	<li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy.</li>\r\n	<li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>\r\n</ul>\r\n\r\n<p>You hereby grant CDA Accounting &amp; Bookkeeping LLC a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>\r\n\r\n<h3><strong>Hyperlinking to our Content</strong></h3>\r\n\r\n<p>The following organizations may link to our Website without prior written approval:</p>\r\n\r\n<ul>\r\n	<li>Government agencies;</li>\r\n	<li>Search engines;</li>\r\n	<li>News organizations;</li>\r\n	<li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and</li>\r\n	<li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>\r\n</ul>\r\n\r\n<p>These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party&rsquo;s site.</p>\r\n\r\n<p>We may consider and approve other link requests from the following types of organizations:</p>\r\n\r\n<ul>\r\n	<li>commonly-known consumer and/or business information sources;</li>\r\n	<li>dot.com community sites;</li>\r\n	<li>associations or other groups representing charities;</li>\r\n	<li>online directory distributors;</li>\r\n	<li>internet portals;</li>\r\n	<li>accounting, law and consulting firms; and</li>\r\n	<li>educational institutions and trade associations.</li>\r\n</ul>\r\n\r\n<p>We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of CDA Accounting &amp; Bookkeeping LLC; and (d) the link is in the context of general resource information.</p>\r\n\r\n<p>These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party&rsquo;s site.</p>\r\n\r\n<p>If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to CDA Accounting &amp; Bookkeeping LLC. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.</p>\r\n\r\n<p>Approved organizations may hyperlink to our Website as follows:</p>\r\n\r\n<ul>\r\n	<li>By use of our corporate name; or</li>\r\n	<li>By use of the uniform resource locator being linked to; or</li>\r\n	<li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party&rsquo;s site.</li>\r\n</ul>\r\n\r\n<p>No use of CDA Accounting &amp; Bookkeeping LLC&#39;s logo or other artwork will be allowed for linking absent a trademark license agreement.</p>\r\n\r\n<h3><strong>iFrames</strong></h3>\r\n\r\n<p>Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>\r\n\r\n<h3><strong>Content Liability</strong></h3>\r\n\r\n<p>We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third-party rights.</p>\r\n\r\n<h3><strong>Reservation of Rights</strong></h3>\r\n\r\n<p>We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it&rsquo;s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>\r\n\r\n<h3><strong>Removal of links from our website</strong></h3>\r\n\r\n<p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links, but we are not obligated to or so or to respond to you directly.</p>\r\n\r\n<p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>\r\n\r\n<h3><strong>Disclaimer</strong></h3>\r\n\r\n<p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>\r\n\r\n<ul>\r\n	<li>limit or exclude our or your liability for death or personal injury;</li>\r\n	<li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>\r\n	<li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>\r\n	<li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>\r\n</ul>\r\n\r\n<p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.</p>\r\n\r\n<p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>\r\n', 1, NULL, 1, NULL, '2019-04-03 16:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts_info`
--

CREATE TABLE `contacts_info` (
  `id` int(11) NOT NULL,
  `contact_message` text,
  `address` text,
  `post_box` varchar(50) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `mobile` varchar(25) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `web` varchar(100) DEFAULT NULL,
  `map` text,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts_info`
--

INSERT INTO `contacts_info` (`id`, `contact_message`, `address`, `post_box`, `phone`, `mobile`, `email`, `web`, `map`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'We enjoy meeting business owners who are looking to get the most out of their accountant or tax advisor and we are well placed to advise you of the best tax position you could be in get your FREE CONSULTATION today.', '40th Floor, Citadel Tower, Business Bay, Dubai, PO Box : 5586', '5586', '+971 42 610 089', '+971 557 188 763‎', 'info@cdaaudit.com', 'www.cdaaudit.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.578640259772!2d55.258639214484006!3d25.183701638429103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f69d047294591%3A0x9ad7e353822dc797!2sCitadel+Tower!5e0!3m2!1sen!2sin!4v1548919737870', 1, 1, 1, '2019-01-14', '2019-02-10 10:45:12');

-- --------------------------------------------------------

--
-- Table structure for table `contact_enquiry`
--

CREATE TABLE `contact_enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `message` text,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_enquiry`
--

INSERT INTO `contact_enquiry` (`id`, `name`, `email`, `phone`, `company`, `message`, `date`) VALUES
(1, 'Charles ', 'charles@cdaaudit.com', '971 557188763', 'cd', 'dddddddddddd', '2019-02-11'),
(2, 'Charles ', 'charles@cdaaudit.com', '971 557188763', 'cd', 'dddddddddddd', '2019-02-11'),
(3, 'Meenu', 'aaaa@com', '945558447', 'ghjjek', 'Hhdjjd', '2019-02-13'),
(4, 'Manu', 'test@test.com', '9744787548', 'CDA', 'test', '2019-02-14'),
(5, 'Azryah', 'test@test.com', '9744787548', 'CDA', 'test', '2019-02-14'),
(6, 'Azryah', 'test@test.com', '9744787548', 'CDA', 'test', '2019-02-14'),
(7, 'Meenu', 'meenujoze@gmail.com', '0522322363', 'uae', 'Test', '2019-02-14'),
(8, 'Meenu', 'meenujoze@gmail.com', '0522322363', 'uae', 'Test', '2019-02-14'),
(9, 'Charles ', 'charles@cdaaudit.com', '971 557188763', 'cd', 'aaaa', '2019-02-14'),
(10, 'Meenu', 'meenujoze@gmail.com', '0522322363', 'cda', 'Test', '2019-02-14'),
(11, 'Meenu Jose', 'info@cdaaudit.com', '0522322363', 'CDA', 'test', '2019-02-16'),
(12, 'Meenu Jose', 'info@cdaaudit.com', '0522322363', 'CDA', 'test', '2019-02-16'),
(13, 'Meenu Jose', 'info@cdaaudit.com', '0522322363', 'CDA', 'test', '2019-02-16'),
(14, 'Meenu Jose', 'info@cdaaudit.com', '0522322363', 'CDA', 'test', '2019-02-16'),
(15, 'Meenu Jose', 'info@cdaaudit.com', '0522322363', 'CDA', 'test', '2019-02-16'),
(16, 'Charles', 'charles@cdaaudit.com', '0557188763', '555', 'Hhhh', '2019-04-03'),
(17, 'Charles', 'charles@cdaaudit.com', '0557188763', '555', 'Hhhh', '2019-04-03');

-- --------------------------------------------------------

--
-- Table structure for table `forgot_password_tokens`
--

CREATE TABLE `forgot_password_tokens` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forgot_password_tokens`
--

INSERT INTO `forgot_password_tokens` (`id`, `user_id`, `token`, `date`) VALUES
(1, 1, '9783501462', '0000-00-00'),
(2, 1, '1685209347', '0000-00-00'),
(3, 1, '0317654298', '0000-00-00'),
(4, 1, '9278631405', '0000-00-00'),
(5, 1, '8264570139', '0000-00-00'),
(6, 1, '3902467518', '0000-00-00'),
(7, 1, '8392065741', '0000-00-00'),
(8, 1, '9603825174', '0000-00-00'),
(9, 1, '0923457861', '0000-00-00'),
(10, 1, '4150239687', '0000-00-00'),
(11, 1, '1456827093', '0000-00-00'),
(12, 1, '3450928761', '0000-00-00'),
(13, 1, '2731086459', '0000-00-00'),
(14, 1, '8906142573', '0000-00-00'),
(15, 1, '1234685970', '0000-00-00'),
(16, 1, '3976152048', '0000-00-00'),
(17, 1, '5048369271', '0000-00-00'),
(18, 1, '4705328169', '0000-00-00'),
(19, 1, '0981375462', '0000-00-00'),
(20, 1, '7245038691', '0000-00-00'),
(21, 1, '0125693487', '0000-00-00'),
(23, 1, '4051238967', '0000-00-00'),
(24, 1, '5879164032', '0000-00-00'),
(25, 1, '9246530817', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `home_contents`
--

CREATE TABLE `home_contents` (
  `id` int(11) NOT NULL,
  `top_title` varchar(100) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `mobile` varchar(25) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT NULL,
  `welcome_content` mediumtext,
  `ceo_name` varchar(100) DEFAULT NULL,
  `ceo_message` text,
  `ceo_image` varchar(100) DEFAULT NULL,
  `service_description` text,
  `middle_title` varchar(100) DEFAULT NULL,
  `middle_description` text,
  `footer_about_content` text,
  `footer_address` text,
  `brochure` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home_contents`
--

INSERT INTO `home_contents` (`id`, `top_title`, `phone`, `mobile`, `email`, `facebook_link`, `twitter_link`, `linkedin_link`, `youtube_link`, `welcome_content`, `ceo_name`, `ceo_message`, `ceo_image`, `service_description`, `middle_title`, `middle_description`, `footer_about_content`, `footer_address`, `brochure`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, '“Delivering solutions where it counts “', '+971 426 100 89', '+971 557 188 763‎', 'info@cdaaudit.com', 'https://www.facebook.com/CDA-Accounting-Bookkeeping-Services-LLC-2264426423868017/?modal=admin_todo_tour', 'https://twitter.com/cda_llc', 'https://www.linkedin.com/in/cda-audit-services-a51391172/', 'https://www.instagram.com/cdaaccountingandbookkeeping/', '<p>CDA Accounting and Bookkeeping Services LLC is a one-stop solution provider for all the Management Consulting Services<strong> </strong>you need in Dubai. From <a href=\"https://www.cdaaudit.com/service/advisory-services-or-cfo-services\">Business Advisory Services in Dubai</a>&nbsp;to Tax Auditing, we offer a wide variety of services to an inclusive clientele. Powered by a group of professionals who are not just skilled but also passionate about the services they excel at, CDA can offer the best experience and the results.</p>\r\n\r\n<p>All our services are designed and executed with the topmost priority of Ethics. Without compromising the Quality and Ethics, CDA can deliver the best accounting and consulting services.&nbsp;</p>\r\n', 'Mohamedghalib Mohamed Darwish', 'At CDA Accounting and Bookkeeping Services LLC, we’ve been striving to offer the best financial consultancy services in Dubai for more than a few years. In the course of time, we’ve built an inclusive client-base and a professionals platform  to give out the best results.', 'jpg', 'CDA Accounting and Bookkeeping Services LLC is passionate when it comes to delivering the best services to our customers. Our services have been thought out, designed and executed in a way that you can have the most seamless finance management experience. You can check our bundled services to understand what you’re looking for.', 'Best Industry Practices', 'Every service offered by CDA Accounting and Bookkeeping Services LLC has been designed to match with a trusted line of industry practices. So, while we do the work, you can sit back and relax.', 'CDA Accounting and Bookkeeping Services LLC is a central hub for all the Management Consultant Services you need in Dubai. From Advisory Services to Tax Auditing, we offer a wide variety of services to an inclusive clientele.', '40th floor, Citadel tower Business Bay Dubai, PO Box : 5586', 'pdf', 1, NULL, 1, NULL, '2019-03-27 06:39:35'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2019-01-12', '2019-01-12 15:20:53');

-- --------------------------------------------------------

--
-- Table structure for table `job_openings`
--

CREATE TABLE `job_openings` (
  `id` int(11) NOT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `job_description` longtext,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job_openings`
--

INSERT INTO `job_openings` (`id`, `job_title`, `job_description`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'Business Development Manager', '<h4><strong>Job Description And Requirements</strong></h4>\r\n\r\n<p>We are looking for young energetic candidates who can build&nbsp;market position by locating, developing, defining, negotiating, and closing business relationships.</p>\r\n\r\n<ul>\r\n	<li>Contacting potential clients to establish rapport and arrange meetings.</li>\r\n	<li>Planning and overseeing new marketing initiatives.</li>\r\n	<li>Researching organizations and individuals to find new opportunities.</li>\r\n	<li>Increasing the value of current customers while attracting new ones.</li>\r\n	<li>Developing quotes and proposals for clients.</li>\r\n</ul>\r\n\r\n<h4><strong>Experience &amp; Qualification</strong></h4>\r\n\r\n<ul>\r\n	<li>MBA Finance or equivalent.</li>\r\n	<li>Minimum 3 year experience in sales, marketing or related field with Accounting/Auditing firms in UAE.</li>\r\n	<li>Excellent communication and negotiation skills.</li>\r\n</ul>\r\n', 1, 1, 1, '2019-02-19', '2019-02-24 13:14:01');

-- --------------------------------------------------------

--
-- Table structure for table `meta_tags`
--

CREATE TABLE `meta_tags` (
  `id` int(11) NOT NULL,
  `page_name` varchar(100) DEFAULT NULL,
  `meta_title` varchar(100) DEFAULT NULL,
  `meta_description` longtext,
  `meta_keyword` longtext,
  `page_url` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meta_tags`
--

INSERT INTO `meta_tags` (`id`, `page_name`, `meta_title`, `meta_description`, `meta_keyword`, `page_url`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'Home', 'CDA : Top Management Consulting Services | Accounting Firms in Dubai ', 'CDA aims to be leader in providing accounting & bookkeeping services in Dubai, UAE. We also provide management consulting services,VAT, auditing with years of experience.', 'Management Consulting Services, Financial services consulting firm Dubai, Accounting Firms in Dubai', '', 1, 1, 1, '2018-06-13', '2019-04-01 12:04:17'),
(2, 'About', 'Best Financial Services Consulting Firm in Dubai | Advisory Services : CDA', 'CDA Accounting & Bookkeeping LLC, one of the top financial services consulting firm in Dubai. Our success is measured by value of services that we deliver to our clients.', 'Financial Services Consulting Firm in Dubai, Advisory Services in Dubai', '', 1, 1, 1, '2018-12-28', '2019-03-27 06:06:22'),
(3, 'why-cda', 'Accounting Firms in Dubai | CDA Accounting & Bookkeeping LLC', 'CDA is one of the leading accouting firms in Dubai providing audit, tax consulting, debt advisory services in UAE. If you need any assistance related to our services, contact us!', 'Accounting firm in Dubai, Debt Advisory Services', '', 1, 1, 1, '2018-12-28', '2019-03-27 06:07:14'),
(4, 'blog', 'Blog', 'Blog', 'Blog', '', 1, 1, 1, '2018-12-28', '2019-01-15 07:29:39'),
(5, 'contact-us', 'Contact Us - CDA Accounting & Bookkeeping LLC', 'We provide wide range of services like accouting, bookkeeping, tax services, vat registration and business advice etc. For more info get in touch with us!', 'Management Consulting Services, Financial services consulting firm Dubai, Accounting Firms in Dubai', '', 1, 1, 1, '2018-12-28', '2019-03-27 06:07:51'),
(6, 'our team', 'our team', 'our team', 'our team', '', 1, 1, 1, '2018-12-28', '2019-01-15 07:30:12'),
(7, 'News', 'News', 'News', 'News', '', 1, 1, 1, '2018-12-28', '2019-01-15 07:30:12'),
(8, 'Careers', 'Careers', 'Careers', 'Careers', '', 1, 1, 1, '2018-12-28', '2019-02-10 09:44:26'),
(9, 'Consultation', 'Consultation', 'Consultation', 'Consultation', '', 1, 1, 1, '2018-12-28', '2019-01-15 07:30:12'),
(10, 'Privacy Policy', 'Privacy Policy', 'Privacy Policy', 'Privacy Policy', '', 1, 1, 1, '2018-12-28', '2019-01-15 07:30:12'),
(11, 'Terms and Conditions', 'Terms and Conditions', 'Terms and Conditions', 'Terms and Conditions', '', 1, 1, 1, '2018-12-28', '2019-01-15 07:30:12');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1531202974),
('m130524_201442_init', 1531202978);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `canonical_name` varchar(255) DEFAULT NULL,
  `small_description` text,
  `detailed_description` longtext,
  `meta_title` varchar(100) DEFAULT NULL,
  `meta_keyword` text,
  `meta_description` text,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image`, `author`, `date`, `title`, `canonical_name`, `small_description`, `detailed_description`, `meta_title`, `meta_keyword`, `meta_description`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'jpg', 'admin', '2019-01-14', 'Professional lorem ipsum generator orem for typographers', 'professional-lorem-ipsum-generator-orem-for-typographers', 'It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a \'ready-made\' text to sing with the', '<p style=\"text-align:justify\">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry.</p>\r\n\r\n<p style=\"text-align:justify\">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry.</p>\r\n\r\n<p style=\"text-align:justify\">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry.</p>\r\n', 'Professional', 'Professional lorem ipsum generator orem for typographers', 'Professional lorem ipsum generator orem for typographers', 1, 1, 1, '2019-01-14', '2019-01-15 04:59:30'),
(2, 'jpg', 'admin', '2019-01-14', 'Professional lorem ipsum generator orem for typographers', 'professional-lorem-ipsum-generator-orem-for-typographers', 'It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a \'ready-made\' text to sing with the', '<p style=\"text-align:justify\">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry.</p>\r\n\r\n<p style=\"text-align:justify\">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry.</p>\r\n\r\n<p style=\"text-align:justify\">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry.</p>\r\n', 'Professional', 'Professional lorem ipsum generator orem for typographers', 'Professional lorem ipsum generator orem for typographers', 1, 1, 1, '2019-01-14', '2019-01-28 04:51:50'),
(3, 'jpg', 'admin', '2019-01-14', 'Professional lorem ipsum generator orem for typographers', 'professional-lorem-ipsum-generator-orem-for-typographers', 'It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a \'ready-made\' text to sing with the', '<p style=\"text-align:justify\">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry.</p>\r\n\r\n<p style=\"text-align:justify\">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry.</p>\r\n\r\n<p style=\"text-align:justify\">Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry&#39;s standard dummy text Lorem Ipsum is simply text the printing and typesetting standard industry.</p>\r\n', 'Professional', 'Professional lorem ipsum generator orem for typographers', 'Professional lorem ipsum generator orem for typographers', 1, 1, 1, '2019-01-14', '2019-01-15 04:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `news_letter`
--

CREATE TABLE `news_letter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_letter`
--

INSERT INTO `news_letter` (`id`, `email`, `date`) VALUES
(1, 'charles@cdaaudit.com', '2019-02-12'),
(4, 'test@test.com', '2019-02-14'),
(5, 'capandiyaraj@gmail.com', '2019-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `our_team`
--

CREATE TABLE `our_team` (
  `id` int(11) NOT NULL,
  `heading` varchar(100) DEFAULT NULL,
  `description` longtext,
  `image` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `our_team`
--

INSERT INTO `our_team` (`id`, `heading`, `description`, `image`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'The Best Team for Best Results', '<p>At CDA Accounting and Bookkeeping Services LLC, we strive to ensure the best customer experience. In order to do that, CDA has also built one of the best teams in the financial service industry. Our team consists of experts from each field, be it accounting, auditing, analytics or reporting, with certifications from the UK and&nbsp;UAE . Because of this team, CDA is capable of delivering comprehensive reports that speak facts and ideas, instead of mere numbers. Our beyond-the-numbers approach have been devised by the team and the approach has had a notable success in the past.</p>\r\n', 'jpg', 1, 1, 1, '2019-01-24', '2019-02-10 09:40:37');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int(11) NOT NULL,
  `resume` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `resume`, `date`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'sample.pdf', '2019-02-14', 1, NULL, NULL, NULL, '2019-02-14 07:41:32'),
(2, 'sample.pdf', '2019-02-14', 1, NULL, NULL, NULL, '2019-02-14 07:42:48'),
(3, 'sample.pdf', '2019-02-14', 1, NULL, NULL, NULL, '2019-02-14 07:43:49'),
(4, 'sample.pdf', '2019-02-14', 1, NULL, NULL, NULL, '2019-02-14 07:45:35'),
(5, 'sample.pdf', '2019-02-14', 1, NULL, NULL, NULL, '2019-02-14 07:50:10'),
(6, 'sample.pdf', '2019-02-14', 1, NULL, NULL, NULL, '2019-02-14 07:54:04'),
(7, 'sample.pdf', '2019-02-14', 1, NULL, NULL, NULL, '2019-02-14 08:49:56'),
(8, 'seeni-it-resume.doc', '2019-02-17', 1, NULL, NULL, NULL, '2019-02-17 14:11:59'),
(9, 'harmain-iqbal-cv-updated-.pdf', '2019-02-18', 1, NULL, NULL, NULL, '2019-02-18 07:32:34'),
(10, 'harmain-iqbal-cv-updated-.pdf', '2019-02-18', 1, NULL, NULL, NULL, '2019-02-18 07:32:41'),
(11, 'harmain-iqbal-cv-updated-.pdf', '2019-02-18', 1, NULL, NULL, NULL, '2019-02-18 07:33:47'),
(12, 'ranganathan-cv.docx', '2019-02-20', 1, NULL, NULL, NULL, '2019-02-20 13:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_title` varchar(255) DEFAULT NULL,
  `canonical_name` varchar(255) DEFAULT NULL,
  `service_quote` text,
  `author` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `small_description` text,
  `detailed_description_title` varchar(255) DEFAULT NULL,
  `detailed_description` longtext,
  `image` varchar(100) DEFAULT NULL,
  `meta_title` varchar(100) DEFAULT NULL,
  `meta_keyword` text,
  `meta_description` text,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title`, `canonical_name`, `service_quote`, `author`, `designation`, `small_description`, `detailed_description_title`, `detailed_description`, `image`, `meta_title`, `meta_keyword`, `meta_description`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'Advisory Services Or CFO Services', 'advisory-services-or-cfo-services', 'Advisory and CFO Services would help you gather data-driven insights from professionals, which will help you take decisions that increase the productivity and results of your organization.', 'Selena gomaz', 'Genarel customer', '<p style=\"text-align:justify\">There are times when business organizations need authentic insights from professionals who understand a comprehensive idea of finance management. Setting up a finance department in the organization can be an impractical task for most companies and the monetary requirements can be high as well. These are reasons why you should consider getting advisory services and CFO services from a trusted company. You just have to choose a provider who employs the best minds, the best strategy and gains the best results in the end.</p>\r\n', 'CDA Advisory Services / CFO Services', '<p style=\"text-align:justify\">Advisory Services or CFO Services from CDA Accounting and Bookkeeping Services LLC are powered by a few professionals who have excelled in their own areas. Our team can help your company prioritize the strategy, analyze the important processes and boost profitability in the long run. If you are looking forward to make positive changes to your organization and business processes, the CFO services from CDA can help you for a long period of time. CFO services in Dubai, as offered by CDA, are optimized for different needs from various customer-bases we have. Our skilled consultants can also help your organization in a scenario of top-level management decision-making as well.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">The team at CDA Accounting and Bookkeeping Services LLC can help you improve any organization within a stipulated amount of time, thanks to timely planning and execution. We carry out a number of processes to make sure that the strategies are worth trying out, including feasibility studies and risk analysis reports. Even before something executed, CDA Advisory Services provides a clear idea about the potential outcomes also. Since CDA believes in sustainable transformations, the insights from the company would help our customers in attaining long-term benefits as well.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">From all aspects, CDA offers one of the best business advisory services in Dubai, UAE. Our team is well-versed in the legal aspects of each and every movement &mdash; because it counts.</p>\r\n', 'jpg', 'Best CFO Accounting Services in Dubai | CFO Services Dubai - CDA', 'CFO Services in Dubai , CFO accounting services Dubai, Business Advisory Services in Dubai', 'Our excellent advisory services and CFO services in Dubai provide you an experienced supports. Learn more about our cost effective way to manage your business finances.', 1, 1, 1, '2019-01-14', '2019-03-27 06:09:11'),
(2, 'Management Accounting & Bookkeeping', 'management-accounting-bookkeeping', 'Management Accounting and Bookkeeping are the primary steps to establish financial discipline and control over your organization.', 'Selena gomaz', 'Genarel customer', '<p style=\"text-align:justify\">Dubai has one of the well-kept regulations when it comes to Management Accounting and Bookkeeping. All registered companies in the country are required to maintain the books of account. In addition to this, UAE Commercial Company Law 2015 and UAE VAT Law demands that the books of account must be kept for five years at least. However, setting up a fully-fledged finance department can increase administrative burden in your organization.</p>\r\n', 'Management Accounting and Bookkeeping Services', '<p style=\"text-align:justify\">While there are many outsource accounting firms in Dubai, none matches the blend of experience and power that CDA Accounting and Bookkeeping Services LLC offers. Our accounting and bookkeeping services have been designed in such a way that organizations can have peace of mind. As a business owner, you wouldn&rsquo;t have to worry about the administrative burdens or the legalities. While CDA team takes care of the legality and technical aspects of bookkeeping, your business can focus on core activities, saving time as well as a lot of resources.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Our Management Accounting and Bookkeeping Services are completely flexible so that every organization can find a plan that suits their needs. Outsourcing this task also provides the benefit of having a number of professionals who work towards transparent account books. Since CDA team consists of professionals who have decades of experience in Dubai-based accounting &amp;&nbsp;auditing tasks and in-depth knowledge in Federal laws, there is no need to worry about unwanted troubles. Compared to setting up a dedicated department inside your organization, outsourcing these services can be cost-effective as well.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">CDA Accounting and Bookkeeping Services LLC not only offers the best accounting and bookkeeping services in Dubai but also ensures other benefits such as cost-effectiveness and financial discipline.</p>\r\n', 'jpg', 'CDA: Accounting & Bookkeeping in Dubai | Bookkeeping Services near me', 'Accounting & Bookkeeping Dubai , Bookkeeping services near me', 'At CDA, our tean of professionals providing best accounting & bookkeeping in Dubai. We offer an affordable and flexible auditing, accounting & bookkeeping services in UAE.', 1, 1, 1, '2019-01-14', '2019-03-27 06:09:47'),
(3, 'Internal Audit & Restructuring Corporate', 'internal-audit-restructuring-corporate', 'Internal auditing of your organization can help you find out the bottleneck areas, diagnose the root causes and optimize the entire process, thus improving cost control.', 'Selena gomaz', 'Genarel customer', '<p style=\"text-align:justify\">Internal Audit of your organization can be beneficial in many ways. It can help you increase the efficiency of operations, enable reliable reporting of finance statements, comply with the various regulations set by the government of Dubai and offer transparency and safety for your resources, employees and stakeholders. In light of all these, if you have an organization based in Dubai, you should conduct full-time or interim internal audits.</p>\r\n', 'Internal Audit and Restructuring Corporate Services', '<p style=\"text-align:justify\">Internal Audit&nbsp;services from CDA Accounting and Bookkeeping Services LLC have been designed to work seamlessly. As the administrator of an organization, you have fewer things to worry about. We carry out all the internal audits with a risk-based approach in mind. Our professional analysts and auditing experts create a clear understanding of the company and check if it complies with the golden rules of management as well as auditing needs. Post-analysis, CDA can also offer recommendations that would enable sustainable change in the organization. This is done by diagnosing the major issues, especially the bottleneck areas of the overall financial procedure. These areas are then optimized by bringing in the best control procedures. CDA can also help you establish and maintain financial co-ordination between various departments in your organization. It will be helpful when it comes to monitoring and controlling the critical procedures.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">CDA has been offering internal auditing services in Dubai for more than five years and the team has ample experience with organizations from various industries. A disciplined approach makes sure that no aspects of the organization are left unturned. Thanks to the years of experience, CDA can understand the big number of legalities and compliance requirements in the whole ordeal. At the end of the day, customers don&rsquo;t have to worry about potential risks either. CDA team has been well-trained when it comes to risk advisory service, regardless of the size and niche of the organization.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">At the end of the day, internal audit and restructuring corporate services from CDA offer not just satisfactory control but also risk management capability and cost-control financial practices to every organization.</p>\r\n', 'jpg', 'Internal Auditing Services in Dubai | Account Outsourcing Services UAE ', 'Accounts outsourcing Services , Internal auditing services in Dubai', 'Get the cost-effective internal auditing services in Dubai from experts at CDA. We are the best solution to outsouring your audit function , contact now - +971 426 100 89', 1, 1, 1, '2019-01-14', '2019-03-27 06:10:47'),
(4, 'VAT Consultancy & Tax Audit', 'vat-consultancy-tax-audit', 'Now that VAT Management has become a necessity, your organization should be ready to not just understand the basics of Value Added Tax but use the strategies for ultimate control.', 'Selena gomaz', 'Genarel customer', '<p style=\"text-align:justify\">Effective from 1<sup>st</sup> of January, 2018, Value Added Tax Laws and Regulations are implemented in UAE. While it offers a bunch of advantages for the business owner, there are some potential challenges as well. The idea is to tackle the whole ordeal of VAT management with the help of an experienced company for <strong>VAT consultancy in UAE</strong>. If your organization has a turnover that exceeds AED 375,000, it&rsquo;s mandatory to check the different aspects of VAT management. It should be understood that Value Added Tax is not a cost for the company. While there are a few misconceptions about the system, organizations can enhance the cashflow if they can properly plan and execute VAT procedure. This is where CDA VAT Consultancy services come in. CDA Accounting and Bookkeeping Services LLC was founded to address the difficulties many organization do have when it comes to the implementation of Import of Goods and Reverse Change Mechanism.</p>\r\n', 'VAT Consultancy and Tax Audit Services', '<p style=\"text-align:justify\">At CDA Accounting and Bookkeeping Services LLC, there is a dedicated team for VAT consultancy as well as tax auditing. The services are carried out by experts in the area, who have clear knowledge about both the federal and international laws of Value Added Tax. CDA can help you in making the VAT compliance hassle-free while saving resources in the long run. If your organization has not started paying tax yet, CDA can also help with VAT registration in UAE. Also, our service is personally tailored to meet the requirements of the customer.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">From VAT registration to keeping transparent records, every aspect of organizational Value Added Tax can be taken care of by the CDA team. Our service sector is noted for the richness of experience and the overall results that await customers in the end. Now that UAE government is making the rules stricter and stricter day by day, it&rsquo;s high time for every eligible organization to take care of VAT. If you don&rsquo;t want to spend a lot of money on setting up a dedicated desk and recruiting professionals, you can outsource the service from a trusted firm like CDA Accounting and Bookkeeping Services LLC.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">With the CDA service at your side, you don&rsquo;t have to worry about the complexities of VAT management. It&rsquo;s also capable of offering monetary benefits, trustworthy results, confidentiality and better cashflow.</p>\r\n', 'jpg', 'Tax Consultants & VAT Services in Dubai | VAT Registration in UAE - CDA', 'Tax consultant Dubai, VAT Registration in UAE,  VAT consultancy UAE,  Tax Consultants & VAT Services in Dubai', 'Are you looking for a knowledgeable experts in vat registration in UAE ? Get expert advice from our professionals at CDA. Our team also offer tax consultation in Dubai. ', 1, 1, 1, '2019-01-14', '2019-03-27 06:12:03'),
(5, 'Accounting Software Support', 'accounting-software-support', 'Accounting Software support services ensures the proper functioning of the Accounting Software you have in your organization, thus enhancing the final results as well.', 'Richard McClintock', 'Director', '<p>The right accounting experience is the result of the best Accounting Software and the knowledge to use. Even when you have purchased one of the best Accounting Software for your needs, things may go wrong. It may be because of the insufficient knowledge or the technological competence. This is where you can count on the Accounting Software support services from CDA Accounting and Bookkeeping Services LLC. Our services have been designed in such a way that your Accounting and Bookkeeping experience is enhanced.</p>\r\n', 'Accounting Software Support', '<p>CDA can help you set up the best accounting infrastructure for your organization. It does not matter whether you are a multi-national conglomerate or an upcoming start-up, the Accounting Team at CDA know which is the best tool for your needs. Our recommendations are based on previous experience as well as the intuitive design that an Accounting Software is offering. We believe that there is no point in having a fully-fledged Accounting Software if it does not smoothen the Bookkeeping process in an organization. Keeping this as the core idea, CDA can help you choose, set up and maintain the best Accounting Software. Our team also takes effort to make sure that our customers are well-versed with the various accounting conventions.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Our Accounting Software support services are available for daily needs as well as accounting conventions like auditing and VAT implementation. We want to make sure that our customers get the best Accounting as well as Bookkeeping experience and end-results that matter. At the end of the day, our team makes sure that the Accounting Software you have results in something great. If your organization or staff is having a tough time in understanding the nuances of an Accounting Software as well as how to use such a Software for advanced results, make sure you check out our services.</p>\r\n', 'jpg', 'Top Accounting Software Dealers in Dubai | UAE | CDA Consulting Services', 'Best Accounting software in UAE', 'When you are looking for accounting software in Dubai, CDA is the right solution. We are the leading authorized dealer of best accounting software in UAE. Visit website now!', 1, 1, 1, '2019-01-23', '2019-03-27 06:13:03'),
(6, 'Due Diligence & Valuation Services', 'due-diligence-valuation-services', 'Due Diligence and Valuation Services are necessary when you want to take investment as well as acquisition decisions for your organization.', 'Richard McClintock', 'Manager', '<p style=\"text-align:justify\">Proper financial insights and pointers are necessary when it comes to making an investment &mdash; or any finance transaction for that matter. If your organization is planning to expand the infrastructure, invest in another area or acquire a business, the financial background of the whole transaction is pivotal information. That is why you would need a Due Diligence and Valuation service for your firm many a time. CDA has been offering these services for more than five years, focusing on both small and big organizations.</p>\r\n', 'Due Diligence & Valuation Services', '<p style=\"text-align:justify\">Due Diligence and Valuation Services from CDA Accounting and Bookkeeping Services LLC are powered by a group of expert professionals, including auditors, financial analysts, CFOs, accountants and experts who are in the domain of management and consulting. Through the combined effort of all these professionals, CDA can deliver the best diligence and valuation service. As with Due Diligence service, CDA team would perform a comprehensive analysis of the company to be acquired by the organization. These well-planned decisions would help you in taking decisions that work out.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Our assessment task also involves analysis of the potential risks in the transaction. The core value here is to understand how the acquisition or the investment would impact the beneficiary organization and calculate the progress on the way. CDA employs a number of tools, such as investment return metrics to analyze the possible results in the future of the investment and the beneficiary. Last but not the least, our analysis and reporting team can also offer valuable suggestions to your organization, backed by data-based metrics and expert-based knowledge.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Even if you are slightly confused about making an investment or acquiring something for your organization, Due Diligence and Valuation services from CDA can clear your doubts through data-based metrics as well as analysis.</p>\r\n', 'jpg', 'Experts in Due Diligence Services in UAE | Valuation Services  - CDA', 'Due Diligence Services in UAE', 'We are the top Dubai-based company specializes in due diligence services in UAE. Learn more about due diligence and valuation services from CDA. We are here to help you!', 1, 1, 1, '2019-01-23', '2019-03-27 06:13:42');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `image`, `sub_title`, `link`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'CDA Accounting and Bookkeeping Services', 'jpg', 'Your Central Hub for Accounting Services', 'https://www.cdaaudit.com/service/accounting-software-support', 1, 1, 1, '2018-12-20', '2018-12-20 10:42:13'),
(2, 'Management Accounting & BookKeeping', 'jpg', 'For an Efficient Financial Structure', 'https://www.cdaaudit.com/service/management-accounting-bookkeeping', 1, 1, 1, '2018-12-20', '2018-12-20 10:39:22'),
(3, 'Internal Audit & Restructuring', 'jpg', 'Internal control Procedures & cost effective restructuring', 'https://www.cdaaudit.com/service/internal-audit-restructuring-corporate', 1, 1, 1, '2018-12-20', '2018-12-20 10:40:51'),
(4, 'Vat Consultancy & Tax Audit', 'jpg', 'Everything You Need to Deal with VAT', 'https://www.cdaaudit.com/service/vat-consultancy-tax-audit', 1, 1, 1, '2018-12-20', '2018-12-20 10:42:13');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `message` text,
  `author` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `message`, `author`, `designation`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'CDA is a highly professional company for Accounting and Bookkeeping services across UAE. I personally experienced their result-oriented approach and the services from CDA have been just awesome. On any day, I’d recommend their services.', 'Jithin Jacob', 'Assistant Manager - KPMG', 1, 1, 1, '2019-01-14', '2019-03-12 05:31:24'),
(2, 'When it comes to financial and accounting matters nobody can compete with him. I am sure that Charles & his team can satisfy all the clients as well. In my opinion he is very good in controlling cost & advising for better decision making. Such a hardworking and dedicated individual is just a reason why we love the whole experience from CDA.', 'Nabil Yasin', 'Managing Partner - Al Nahdah National Insurance Brokers Co. LLC', 1, 1, 1, '2019-01-14', '2019-01-31 09:01:15'),
(3, 'CDA is really great at completing works before deadline. At the same time, CDA gave us exceptional accuracy, highly responsive, highly professional and experts in IFRS & UAE VAT Laws. It’s also great to have reports and schedules that meet our requirements. Altogether, the services from CDA is worth having at any cost.', 'Thomas Esow', 'Finace Director - Al Andalous Electromechanical Works Co. LLC', 1, 1, 1, '2019-01-24', '2019-01-31 09:01:53');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `why_cda`
--

CREATE TABLE `why_cda` (
  `id` int(11) NOT NULL,
  `main_heading` varchar(100) DEFAULT NULL,
  `section1_content` longtext,
  `section1_image` varchar(100) DEFAULT NULL,
  `section2_title` varchar(100) DEFAULT NULL,
  `section2_sub_title` varchar(100) DEFAULT NULL,
  `section2_content` longtext,
  `section2_image` varchar(100) DEFAULT NULL,
  `why_choose_cda` longtext,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `why_cda`
--

INSERT INTO `why_cda` (`id`, `main_heading`, `section1_content`, `section1_image`, `section2_title`, `section2_sub_title`, `section2_content`, `section2_image`, `why_choose_cda`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'Accounting That’s Ready for Tomorrow', '<p style=\"text-align:justify\">CDA Accounting and Bookkeeping Services LLC is one of the most reputed accounting firms in Dubai. We do offer comprehensive financial services such as Internal Auditing, Tax Auditing, Management Accounting and Bookkeeping and VAT&nbsp;Consultancy to name a few. Our well-trained and experienced staff have been working on these projects for such an extent that they get it right every single time. CDA also takes a strategic approach while optimizing services for our customers, so that the ultimate results are impressive. No matter what, our services make no sort of compromise when it comes to quality and ethical stance.</p>\r\n\r\n<p style=\"text-align:justify\">Our comprehensive services can offer guaranteed cost savings in the long run. According to experts, a better and transparent financial workflow can help organizations diagnose the bottleneck areas and optimize them for enhanced productivity. The services from CDA can help you achieve this in the shortest time possible, all thanks to our experienced staff and data-analytics-based strategy making.</p>\r\n\r\n<p style=\"text-align:justify\">Our management consultancy and accounting services have been optimized for tomorrow. Experienced analysts at our firm take into consideration the various aspects of an organization before making decisions. We also offer tailor-made plans for businesses across UAE so that they can have the best results too. Regardless of the size and volume of the project, CDA Accounting and Bookkeeping Services LLC has a dedicated, well-trained and experienced team to provide the best results. Having served clients from various backgrounds &mdash; including popular industries such as Construction, Trading, Contracting, Real Estate, Oil &amp; Gas, Hospitality etc. &mdash;, our advisory services and internal auditing can assure a comprehensive output.</p>\r\n', 'jpg', 'OUR TEAM', 'The Best Team for Best Results', '<p>At CDA Accounting and Bookkeeping Services LLC, we strive to ensure the best customer experience. In order to do that, CDA has also built one of the best teams in the financial service industry. Our team consists of a lot of experts from each field, be it accounting, analytics or reporting. Because of this team, CDA is capable of delivering comprehensive reports that speak facts and ideas, instead of mere numbers. Our beyond-the-numbers approach have been devised by the team and the approach has had a notable success in the past.</p>\r\n', 'jpg', '<p>gg</p>\r\n', 1, 1, 1, '2019-01-14', '2019-02-10 08:50:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_posts`
--
ALTER TABLE `admin_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD KEY `fk-admin_users-post_id` (`post_id`);

--
-- Indexes for table `affiliation`
--
ALTER TABLE `affiliation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baner_images`
--
ALTER TABLE `baner_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_content`
--
ALTER TABLE `career_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conditions`
--
ALTER TABLE `conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts_info`
--
ALTER TABLE `contacts_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_enquiry`
--
ALTER TABLE `contact_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forgot_password_tokens`
--
ALTER TABLE `forgot_password_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_contents`
--
ALTER TABLE `home_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_openings`
--
ALTER TABLE `job_openings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_tags`
--
ALTER TABLE `meta_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_letter`
--
ALTER TABLE `news_letter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_team`
--
ALTER TABLE `our_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `why_cda`
--
ALTER TABLE `why_cda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_posts`
--
ALTER TABLE `admin_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `affiliation`
--
ALTER TABLE `affiliation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `baner_images`
--
ALTER TABLE `baner_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `career_content`
--
ALTER TABLE `career_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `conditions`
--
ALTER TABLE `conditions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts_info`
--
ALTER TABLE `contacts_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_enquiry`
--
ALTER TABLE `contact_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `forgot_password_tokens`
--
ALTER TABLE `forgot_password_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `home_contents`
--
ALTER TABLE `home_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_openings`
--
ALTER TABLE `job_openings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `meta_tags`
--
ALTER TABLE `meta_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news_letter`
--
ALTER TABLE `news_letter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `our_team`
--
ALTER TABLE `our_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `why_cda`
--
ALTER TABLE `why_cda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
