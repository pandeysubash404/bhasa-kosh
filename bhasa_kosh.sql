CREATE DATABASE `bhasa_kosh`;
--
-- Database: `bhasa_kosh`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `language` varchar(50) NOT NULL,
  `categories` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `email`, `title`, `language`, `categories`, `content`, `created_at`, `updated_at`) VALUES
(2, 'pandeysubash404@gmail.com', 'मैथिल भाषा के समृद्ध धरोहर का संरक्षण', 'Mathali', 'Culture', '<p dir=\"ltr\"><strong>मैथिल भाषा के समृद्ध धरोहर का संरक्षण</strong></p>\r\n<p><strong><br><br><br><br></strong></p>\r\n<p dir=\"ltr\"><img src=\"https://lh3.googleusercontent.com/4uwcJzlMWEa1JYU83DfBfd3ETnXQPUdFSqzvrYUa4IZ72wMWMoe1MLUQyIadH6ZbrrwfPa2NcDDG0BfSDhFBuhNwkyTeYpG-Pob8RPMmlVeyWVQtXNB7HqPEfIYUAMp4_Jt3xxX3lbY2XnUyUkw90FY\" width=\"708\" height=\"409\"></p>\r\n<p><strong><br><br><br></strong></p>\r\n<p dir=\"ltr\">https://mithilalifestyleandculturedesign.files.wordpress.com/2020/08/screenshot_2020_0831_164126.png</p>\r\n<p><strong><br><br><br><br><br><br><br><br><br><br><br></strong></p>\r\n<p dir=\"ltr\">मैथिल भाषा, अक्सर साउथ एशिया के भाषा धागा में एक महत्वपूर्ण स्थान रखती है, जो विशेष रूप से नेपाल के कुछ हिस्सों और भारत के बिहार और झारखंड राज्यों में बोली जाती है। मैथिली एक ऐसी भाषा है जिसमें इतिहास, साहित्य, और एक जीवंत समुदाय होता है।</p>\r\n<p><strong><br><br></strong></p>\r\n<p dir=\"ltr\"><strong>भाषा की धरोहर:</strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">मैथिली भाषा इंडो-आर्यन भाषा परिवार के सदस्य है और इसकी जड़ें संस्कृत के साथ हैं। इसका रिच लिटररी इतिहास प्राचीन कालों में जाता है, साक्षर संस्कृत ग्रंथों में मैथिली का प्रयोग का प्रमाण है। दशकों के साथ, मैथिली एक अलग भाषा के रूप में विकसित हुई, जिसमें अपना लिपि और व्याकरण है।</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\"><strong>मैथिली साहित्य:</strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">मैथिली की ताजगी में से एक है उसके साहित्य का। विद्यापति ठाकुर, जिन्हें अक्सर मैथिली साहित्य के शेक्सपीयर के रूप में जाना जाता है, ने प्रेम कविताओं, भक्ति गीतों, और महाकाव्यों की बड़ी संख्या का निर्माण किया। उनकी रचनाएँ आज भी कवियों और लेखकों को प्रेरित करती हैं, और उनकी विरासत मैथिली संस्कृति का अभिन्न हिस्सा रही है।</p>\r\n<p><strong><br><br></strong></p>\r\n<p dir=\"ltr\"><strong>सांस्कृतिक महत्व:</strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">मैथिली भाषा केवल संवाद का एक तरीका नहीं है, बल्कि यह उन लोगों की संस्कृति, परंपराओं, और पहचान को भी लेकर जाती है जो मिथिला क्षेत्र के हैं। मैथिली गीत, नृत्य, और धार्मिक आयोजनों का महत्वपूर्ण हिस्सा है, जैसे कि छठ पूजा, जहां भाषा सूर्य देव की पूजा में मुख्य भूमिका निभाती है।</p>\r\n<p dir=\"ltr\"><strong>पहचान और चुनौतियाँ:</strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">भारत में, मैथिली को भारतीय संविधान के आठवें अनुसूची के तहत एक प्रमुख भाषा के रूप में मान्यता प्राप्त है। इस पहचान ने भाषा की सुरक्षा और प्रचार को बढ़ावा दिया है। हालांकि, जैसे ही महाजनों की भाषा, मैथिली भी समकालिन दुनिया में बढ़ते हुए विकास और विकास के लिए खतरों का सामना करती है।</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\"><strong>संरक्षण प्रयास:</strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">मैथिली भाषा के संरक्षण और पुनर्जीवन की सुनिश्चिति के लिए प्रयास हो रहे हैं। शिक्षात्मक पहल, सांस्कृतिक उत्सव, और साहित्यिक संघों के लोग मैथिली को युवा पीढ़ियों के बीच प्रोत्साहित करने के लिए बेहद मेहनत कर रहे हैं। ऑनलाइन प्लेटफार्म और डिजिटल संसाधनों का उपयोग भी मैथिली साहित्य और स्रोतों के लिए पहुँच बढ़ा दिया है।</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\"><strong>निष्कर्ष:</strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">मैथिली भाषा, मिथिला क्षेत्र की संस्कृति के समृद्धि के इस साक्षर होती है की कहानी की पुष्पांजलि में एक साक्षर है। उसका साहित्य, परंपराएँ, और पहचान भाषा के साथ जुड़ी होती है, जिससे यह समुदाय की एकत्रित स्मृतियों का महत्वपूर्ण हिस्सा रहता है। हालांकि चुनौतियाँ हैं, मैथिली बोलने वालों की दृढ़ इच्छाशक्ति और भाषा प्रेमियों के प्रयासों से इस भाषा की जीवंतता की आशा बनी रहती है।</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">दुनिया में जो अक्सर वैश्विक भाषाओं को पसंद करती है, विशिष्ट प्रांतिक भाषाओं जैसे मैथिली का संरक्षण केवल शब्दों की ही नहीं, बल्कि लोगों की कहानियों, गीतों, और आत्मा की सुरक्षा है। मैथिली, जिसकी अकालिक सौंदर्य है, द्विभाषिक विविधता की महत्वपूर्णता और धन्यता की मात्र हिंसा बनती है।</p>\r\n<p><strong><br><br><br><br><br></strong></p>\r\n<p dir=\"ltr\"><strong>&nbsp;&nbsp;मैथिली लोकनृत्य: भाषा का आदान-प्रदान</strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">मैथिली भाषा के विशेष रूप से प्रतिपादित और समर्थनित लोकनृत्य का एक महत्वपूर्ण हिस्सा है। ये लोकनृत्य न केवल मनोरंजन के लिए होते हैं, बल्कि मैथिली भाषा और संस्कृति का अभिन्न हिस्सा हैं।</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\"><strong>भाषिक धरोहर:</strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">मैथिली एक इन्डो-आर्यन भाषा परिवारको सदस्य हो र संस्कृतको साथ यसको जड़हरू साझा गरेको छ। यसको धनी साहित्यिक परम्परा प्राचीन समयदेखि सुरु भएको छ, र संस्कृतको लागि प्रमुख मैथिली लेखक विद्यापति ठाकुरको यस्तो काममा पनि प्रमुख योगदान छ।</p>', '2023-10-07 23:42:06', '2023-10-07 23:42:06'),
(3, 'pandeysubash404@gmail.com', 'छठ पूजा: मैथिली संस्कृति का महत्वपूर्ण त्योहार', 'Mathali', 'Culture', '<p dir=\"ltr\"><strong>**छठ पूजा: मैथिली संस्कृति का महत्वपूर्ण त्योहार**</strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">मैथिली समुदाय की संस्कृति में बहुत सारे त्योहार और पर्व मनाए जाते हैं, लेकिन उनमें से एक खास त्योहार है \'छठ पूजा\'। छठ पूजा मैथिली समुदाय के लोगों के लिए एक महत्वपूर्ण त्योहार है जो सूर्य देव की पूजा के रूप में मनाया जाता है। इसे छठी मां के पूजन के रूप में भी जाना जाता है और यह त्योहार मैथिल समुदाय की गर्वशाली परंपरा का हिस्सा है।</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\"><strong>**छठ पूजा का महत्व:**</strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">1. **सूर्य देव का पूजन:** छठ पूजा में सूर्य देव की पूजा की जाती है, जिसे हम भगवान सूर्य के प्रति अपनी श्रद्धा और भक्ति का प्रतीक मानते हैं। इस त्योहार में सूर्य देव के आगे अर्घ्य और व्रत किया जाता है।</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">2. **सांस्कृतिक महत्व:** छठ पूजा मैथिल समुदाय की सांस्कृतिक और पारंपरिक महत्वपूर्णता का प्रतीक है। यह त्योहार मैथिल समुदाय की विशेषता और एकता का प्रतीक माना जाता है, जो लोगों को एक साथ लाता है।</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">3. **नैतिक मूल्य:** छठ पूजा नैतिक मूल्यों को प्रमोट करता है, जैसे कि संयम, धैर्य, और त्याग। इसमें व्रत करने वाले व्रतियों के लिए यह एक मानसिक और आत्मिक अनुभव भी होता है।</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">**छठ पूजा की प्रक्रिया:**</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">1. **घाट पर जाना:** छठ पूजा की प्रक्रिया उस दिन शुरू होती है, जब पर्व के मान्यताओं के अनुसार प्राचीन घाट पर जाते हैं।</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">2. **खाद्य पदार्थ:** छठ पूजा के दौरान व्रतियों को विशेष प्रकार के खाद्य पदार्थ, जैसे कि घीया, चना, खुर्पानी, और ताजा फल खाना चाहिए।</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">3. **छठी मां का पूजन:** पूजन के बाद, छठी मां का पूजन किया जाता है, जिसमें सूर्य देव का आराधना किया जाता है।</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">4. **सूर्यास्त और संध्या अर्घ्य:** छठ पूजा के अंत में, सूर्यास्त और संध्या अर्घ्य करने का प्रतीक्रिया होता है, जिसमें व्रतियों और उनके परिवारजन एक समुद्र या झील के किनारे जाते हैं।</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">**समापन:**</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p dir=\"ltr\">छठ पूजा मैथिल समुदाय के</p>\r\n<p>&nbsp;</p>', '2023-10-08 02:28:34', '2023-10-08 02:28:34'),
(4, 'pandeysubash404@gmail.com', 'Maithili Proverbs ( मैथिली फकरा )', 'Mathali', 'Culture', '<p><strong>Maithili Proverbs ( मैथिली फकरा )</strong><br><strong>&nbsp;</strong><br>Maithili is a prominent language spoken in the Terai region of Nepal and some part of India. It is native to land of Mithila. Mithila is known to be a kingdom ruled by King Janak, father of Sita in the ancient times (Treta Yug - त्रेता युग). Janakpur, commonly known as Janakpur Dham was the capitol of Mithila. It remains the heart of Mithila during modern days as well.&nbsp;<br>As rich as Maithili is as a language, there is not enough digital presence of the language and its contents online. This is one small effort to collect Maithili proverbs spoken in my household while I was growing up. Feel free to add any new ones you have.&nbsp;</p>\r\n<p style=\"padding-left: 40px;\">हम सुनरा, हमर पिया सुनरी, गामक लोग बनरा बनरी<br>लिख लोढही पढ पथ्थर, सोह्र दुना आठ<br>बापके नाम लत्तिफत्ति, बेटाके नाम परोर&nbsp;<br>हम चलाबी दिल्ली, हमरा चलाबे घरक बिल्ली<br>कनियेंटा घर, वैमे कनियाँ बर<br>जुरैछौ त फ़ुरैछौ?&nbsp;<br>छौ त ठाउँ द के पाद नै त पैद्तो छल आ भाइग्तो चल<br>छ अना के मुर्गी, न अना के मसल्ला<br>घर मे छोरा आ शहर मे धिन्धोरा<br>खसी के जान जाय, खेबैया कहे सुवादे नै<br>लात जुत्ता खाइचि, मरजादसे रहैची<br>हल्लुक माइट बिलाय कोरे<br>छोट खिखिर के मोट नाङ्गैर<br>माय जी गाय सनक, पुत जी कसाय सनक<br>बारीक पटुवा तीत<br>घरके मुर्गी दाइल बराबर<br>एक बापुत दल, सब बापुत चल<br>मुंह न कान, बाबुराम<br>अपने मोने तीन मन<br>माइर के ससरी, खाइके पसरी<br>राम भजनमे आलसी, भोजन मे होंसियार<br>ईये बिए पास, लिए दिए साफ<br>भोजके बेर मे कुम्हर रोपनाइ<br>बाप मैरगेल अन्हरियेमे, बेटाके नाम पावरहाउस<br>गाय बिकगेल चरवाहिये मे<br>बाह्र महाजन पुंजी नाश<br>गेल भैँस पायन मे ( परु सहित )<br>खायले हाय न, नहाय ल भोरे<br>नांच न जाने, अङ्ग्ना टेढ़<br>हाथी चले बजार, कुत्ता भुके हजार<br>राम नाम लड्डु, ग़ो्पाल नाम घी, हरि नाम मिस्रि, घोइर घोइर पि<br>ज्याह खातिर भिन भेलु, स्याह परल बखरा<br>एक गून माईर आ चाईर गून बपरहाईर<br>.....more coming soon!</p>', '2023-10-08 03:20:20', '2023-10-08 03:20:20'),
(5, 'pandeysubash404@gmail.com', 'Maithili Proverbs ( मैथिली फकरा )', 'English', 'Culture', '<p><strong>Maithili Proverbs ( मैथिली फकरा )</strong><br>&nbsp;<br>Maithili is a prominent language spoken in the Terai region of Nepal and some part of India. It is native to land of Mithila. Mithila is known to be a kingdom ruled by King Janak, father of Sita in the ancient times (Treta Yug - त्रेता युग). Janakpur, commonly known as Janakpur Dham was the capitol of Mithila. It remains the heart of Mithila during modern days as well.&nbsp;<br>As rich as Maithili is as a language, there is not enough digital presence of the language and its contents online. This is one small effort to collect Maithili proverbs spoken in my household while I was growing up. Feel free to add any new ones you have.&nbsp;</p>\r\n<p>हम सुनरा, हमर पिया सुनरी, गामक लोग बनरा बनरी<br>लिख लोढही पढ पथ्थर, सोह्र दुना आठ<br>बापके नाम लत्तिफत्ति, बेटाके नाम परोर&nbsp;<br>हम चलाबी दिल्ली, हमरा चलाबे घरक बिल्ली<br>कनियेंटा घर, वैमे कनियाँ बर<br>जुरैछौ त फ़ुरैछौ?&nbsp;<br>छौ त ठाउँ द के पाद नै त पैद्तो छल आ भाइग्तो चल<br>छ अना के मुर्गी, न अना के मसल्ला<br>घर मे छोरा आ शहर मे धिन्धोरा<br>खसी के जान जाय, खेबैया कहे सुवादे नै<br>लात जुत्ता खाइचि, मरजादसे रहैची<br>हल्लुक माइट बिलाय कोरे<br>छोट खिखिर के मोट नाङ्गैर<br>माय जी गाय सनक, पुत जी कसाय सनक<br>बारीक पटुवा तीत<br>घरके मुर्गी दाइल बराबर<br>एक बापुत दल, सब बापुत चल<br>मुंह न कान, बाबुराम<br>अपने मोने तीन मन<br>माइर के ससरी, खाइके पसरी<br>राम भजनमे आलसी, भोजन मे होंसियार<br>ईये बिए पास, लिए दिए साफ<br>भोजके बेर मे कुम्हर रोपनाइ<br>बाप मैरगेल अन्हरियेमे, बेटाके नाम पावरहाउस<br>गाय बिकगेल चरवाहिये मे<br>बाह्र महाजन पुंजी नाश<br>गेल भैँस पायन मे ( परु सहित )<br>खायले हाय न, नहाय ल भोरे<br>नांच न जाने, अङ्ग्ना टेढ़<br>हाथी चले बजार, कुत्ता भुके हजार<br>राम नाम लड्डु, ग़ो्पाल नाम घी, हरि नाम मिस्रि, घोइर घोइर पि<br>ज्याह खातिर भिन भेलु, स्याह परल बखरा<br>एक गून माईर आ चाईर गून बपरहाईर<br>.....more coming soon!</p>', '2023-10-08 04:51:37', '2023-10-08 04:51:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int NOT NULL,
  `AdminUserName` varchar(255) DEFAULT NULL,
  `AdminPassword` varchar(255) DEFAULT NULL,
  `AdminEmailId` varchar(255) DEFAULT NULL,
  `userType` int DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` int NOT NULL,
  `CategoryName` varchar(200) DEFAULT NULL,
  `Description` mediumtext,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `Is_Active` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblcomments`
--

CREATE TABLE `tblcomments` (
  `id` int NOT NULL,
  `postId` int DEFAULT NULL,
  `name` varchar(120) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `comment` mediumtext,
  `postingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int NOT NULL,
  `PageName` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext,
  `Description` longtext,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblposts`
--

CREATE TABLE `tblposts` (
  `id` int NOT NULL,
  `PostTitle` longtext,
  `CategoryId` int DEFAULT NULL,
  `SubCategoryId` int DEFAULT NULL,
  `PostDetails` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `Is_Active` int DEFAULT NULL,
  `PostUrl` mediumtext,
  `PostImage` varchar(255) DEFAULT NULL,
  `viewCounter` int DEFAULT NULL,
  `postedBy` varchar(255) DEFAULT NULL,
  `lastUpdatedBy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblsubcategory`
--

CREATE TABLE `tblsubcategory` (
  `SubCategoryId` int NOT NULL,
  `CategoryId` int DEFAULT NULL,
  `Subcategory` varchar(255) DEFAULT NULL,
  `SubCatDescription` mediumtext,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `Is_Active` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`) VALUES
('Subash Pandey', 'pandeysubash404@gmail.com', 'subash');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcomments`
--
ALTER TABLE `tblcomments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblposts`
--
ALTER TABLE `tblposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  ADD PRIMARY KEY (`SubCategoryId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblcomments`
--
ALTER TABLE `tblcomments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblposts`
--
ALTER TABLE `tblposts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  MODIFY `SubCategoryId` int NOT NULL AUTO_INCREMENT;

