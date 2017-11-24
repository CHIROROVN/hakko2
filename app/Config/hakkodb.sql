-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 24 Novembre 2017 à 10:26
-- Version du serveur :  10.1.16-MariaDB
-- Version de PHP :  5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hakkodb`
--

-- --------------------------------------------------------

--
-- Structure de la table `m_user`
--

CREATE TABLE `m_user` (
  `u_id` int(11) NOT NULL,
  `u_name` text COLLATE utf8_unicode_ci,
  `u_login` text COLLATE utf8_unicode_ci,
  `u_passwd` text COLLATE utf8_unicode_ci,
  `remember_token` text COLLATE utf8_unicode_ci,
  `u_free1` text COLLATE utf8_unicode_ci,
  `u_free2` text COLLATE utf8_unicode_ci,
  `u_free3` text COLLATE utf8_unicode_ci,
  `u_free4` text COLLATE utf8_unicode_ci,
  `u_free5` text COLLATE utf8_unicode_ci,
  `last_date` datetime DEFAULT NULL,
  `last_kind` int(2) DEFAULT NULL COMMENT '0:Insert, 1:Update, 9:Delete',
  `last_ipadrs` text COLLATE utf8_unicode_ci,
  `last_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Table m_user';

-- --------------------------------------------------------

--
-- Structure de la table `t_info`
--

CREATE TABLE `t_info` (
  `info_id` int(11) NOT NULL,
  `info_title` text COLLATE utf8_unicode_ci,
  `info_date` date DEFAULT NULL,
  `info_type` int(2) DEFAULT NULL,
  `info1_url` text COLLATE utf8_unicode_ci,
  `info2_file` text COLLATE utf8_unicode_ci,
  `info3_contents` longtext COLLATE utf8_unicode_ci,
  `info3_img` text COLLATE utf8_unicode_ci,
  `info3_url` text COLLATE utf8_unicode_ci,
  `info3_mail` text COLLATE utf8_unicode_ci,
  `info3_file` text COLLATE utf8_unicode_ci,
  `info3_filename` text COLLATE utf8_unicode_ci,
  `info_dspl_flag` int(2) DEFAULT NULL COMMENT 'NULL:Show, 1:Not Show',
  `info_top_flag` int(2) DEFAULT NULL COMMENT 'NULL:Normal, 1:Show Top Page',
  `info_start` datetime DEFAULT NULL,
  `info_end` datetime DEFAULT NULL,
  `info_free1` text COLLATE utf8_unicode_ci,
  `info_free2` text COLLATE utf8_unicode_ci,
  `info_free3` text COLLATE utf8_unicode_ci,
  `info_free4` text COLLATE utf8_unicode_ci,
  `info_free5` text COLLATE utf8_unicode_ci,
  `last_date` datetime DEFAULT NULL,
  `last_kind` int(2) DEFAULT NULL COMMENT '0:Insert, 1:Update, 9:Delete',
  `last_ipadrs` text COLLATE utf8_unicode_ci,
  `last_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Table t_info';

--
-- Contenu de la table `t_info`
--

INSERT INTO `t_info` (`info_id`, `info_title`, `info_date`, `info_type`, `info1_url`, `info2_file`, `info3_contents`, `info3_img`, `info3_url`, `info3_mail`, `info3_file`, `info3_filename`, `info_dspl_flag`, `info_top_flag`, `info_start`, `info_end`, `info_free1`, `info_free2`, `info_free3`, `info_free4`, `info_free5`, `last_date`, `last_kind`, `last_ipadrs`, `last_user`) VALUES
(1, '初嶺　麿代 はつね　まよ', '2017-11-24', 1, 'http://211.125.120.180/instructor#ins2', NULL, '経歴・保有資格\r\n静岡県出身　幼少の頃からクラシックバレエ、ピアノ、声楽などを習い、\r\n1992年約38倍率を１回めの受験で突破し宝塚音楽学校へ入学。\r\n1994年宝塚歌劇団入団。１９９５年雪組配属。\r\n1998年宙組発足メンバーとして宙組に組替え。宝塚歌劇団男役スターとして活躍。\r\n2007年『A/L怪盗ルパンの青春』ガ二マール警部役で宝塚歌劇団退団。\r\n\r\n主な出演作として『ファントム』若き日のキャリエール役『NEVER SAY GOODBYE』ピーター・キャラウェイ役。「龍馬伝」岩倉具視役。等\r\nまた、「エリザベート」ルドルフ少年役「ベルサイユのバラ」王太子役「風と共に去りぬ」スカーレットⅡ役などの女役、少年役を幅広くこなし、中性的な魅力で人気を博す。\r\nその他、CS放送宙組初代スカイレポーター、各組選抜メンバーによるTCAスペシャル公演、海外公演、ディナーショー出演など様々な経験を積む。\r\n退団後は「ドラキュラ」「COCO」などのミュージカルや「憑神」「イリアス」などのストレートプレイの舞台を軸に女優として活動。\r\n日韓合作公演『The Sound of Silence沈黙の声』ではヒロイン安藤美和役を好演。韓国公演と日本公演を成功させる。\r\n舞台の他、映画やドラマ出演、リポーター、ダンス講師、講演活動、LIVE活動など活躍の場を広げていくなかで、\r\n宝塚でのノウハウを活かしボディメイクやビューティアドバイザーとして全国でセミナーを精力的に開催。健康、美容のサポートを本格的に始動。\r\n2014年６月自身のスタジオ「Dance&Fitness Studio HatsuNe」を都内にて開講。\r\n２０１５年１月ホリプログループに所属。美容健康商品開発に力を入れ、HatsuNeメソッドを考案。\r\n２０１５年５月宝塚受験コースを開講。後進の指導、育成を本格的に開始。翌年、開講１年目にして当スタジオより宝塚音楽学校に２名合格者を輩出。', 'uploads/news_1.jpg\r\n', NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-23 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-24 00:00:00', NULL, '127.0.0.1', 1),
(2, '宮垣祐也（ゲスト講師） みやがきゆうや', '2017-11-24', 1, 'http://211.125.120.180/instructor', NULL, '経歴・保有資格\r\n1988年8月2日生まれ\r\n\r\n【主な舞台歴】\r\n\r\n瀬奈じゅんコンサート『A Live』、「エリザベート」、「ロミオ&ジュリエット」、「プロミセス・プロミセス」、「ブロードウェイミュージカルライブ」、「ザ・ビューティフル・ゲーム」、「Spinning Channel」、舞台「ファンタシースターオンライン2」等\r\n俳優、ダンサーとして活動している。\r\n皆様へメッセージ\r\n色々なものに縛られず、個性を大切に自由に。\r\n心を動かすことによって、振りの幅、周りの空間、世界観が広がるようなクラスにしたいと思います。\r\n\r\nとにかく縛られず自由に楽しんでほしいと思います！ ', 'uploads/news_3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-24 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-24 00:00:00', NULL, '127.0.0.1', 1),
(3, '松本　菜穂 まつもと　なほ', '2017-11-24', 2, '', 'http://nahomatsumoto528.wix.com/kizuna-alpha ', '経歴・保有資格\r\n3 歳から日舞、4 歳からバレエ、5 歳からピアノ、16歳からJAZZダンスを学ぶ。\r\n選抜香港公演参加 。宝塚退団後、多数ミュージカル出演、宝塚受験生指導振付、\r\n舞台出演に向けてダンス指導、体の使い方を伝えている。\r\nタップ、コンテンポラリ-，hip-hop、クラブJAZZ、ジャイロキネシスと様々な角度からダンスを学び、\r\n2007年からYogaをアシュタンガまで学ぶ。\r\n舞台で身体を酷使して来た結果、各所身体の痛みが起こり、身体の使い方を一から見直し、トレーニングを通して自分の体は自分で治す大切さに辿り着き、指導者として幅広い年齢層に対応する。\r\n＜主な出演歴＞\r\n2003年〜2013年「SHOCK」（堂本光一主演）現在も日舞振付指導で関わる、ジャニーズカウントダウン、演舞場「滝沢演舞城」（滝沢秀明主演）、「十二夜」(大地真央主演）「ビギンザビギン・春は爛漫」（森光子主演）など \r\n2011年舞台企画・構成・振付「KizuNa+α」ダンスと歌と芝居で繰り広げる エンターテインメントカンパニーを立ち上げる。\r\n皆様へメッセージ\r\n美容〜健康まで楽しくボディアンチエイジングしましょう！\r\n普段運動していない方でも受講頂けます\r\n\r\n\r\n松本菜穂KizuNa+αHP', 'uploads/news_2.jpg\r\n', NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-24 00:00:00', NULL, NULL, NULL, NULL, NULL, NULL, '2017-11-24 00:00:00', NULL, '127.0.0.1', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`u_id`);

--
-- Index pour la table `t_info`
--
ALTER TABLE `t_info`
  ADD PRIMARY KEY (`info_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `m_user`
--
ALTER TABLE `m_user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `t_info`
--
ALTER TABLE `t_info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
