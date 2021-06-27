-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 27 Jun 2021 pada 07.58
-- Versi server: 8.0.25-0ubuntu0.20.04.1
-- Versi PHP: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ktube`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `art_articles`
--

CREATE TABLE `art_articles` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `content` longtext NOT NULL,
  `category` varchar(100) NOT NULL DEFAULT '',
  `status` smallint NOT NULL DEFAULT '0',
  `date` int NOT NULL DEFAULT '0',
  `author` int NOT NULL DEFAULT '0',
  `allow_comments` enum('0','1') NOT NULL DEFAULT '1',
  `comment_count` int NOT NULL DEFAULT '0',
  `views` int UNSIGNED NOT NULL DEFAULT '0',
  `featured` enum('0','1') NOT NULL DEFAULT '0',
  `restricted` enum('0','1') NOT NULL DEFAULT '0',
  `article_slug` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `art_articles`
--

INSERT INTO `art_articles` (`id`, `title`, `content`, `category`, `status`, `date`, `author`, `allow_comments`, `comment_count`, `views`, `featured`, `restricted`, `article_slug`) VALUES
(1, 'aku', '<p>aku adalah binatang jalang dari kumpulann yang terbuang</p>', '1', 1, 1624264316, 3, '1', 0, 0, '0', '0', 'aku');

-- --------------------------------------------------------

--
-- Struktur dari tabel `art_categories`
--

CREATE TABLE `art_categories` (
  `id` int NOT NULL,
  `parent_id` int NOT NULL DEFAULT '0',
  `tag` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `published_articles` int UNSIGNED NOT NULL DEFAULT '0',
  `total_articles` int NOT NULL DEFAULT '0',
  `position` mediumint UNSIGNED NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  `meta_tags` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `art_categories`
--

INSERT INTO `art_categories` (`id`, `parent_id`, `tag`, `name`, `published_articles`, `total_articles`, `position`, `description`, `meta_tags`) VALUES
(1, 0, 'syair', 'puisi', 1, 1, 1, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `art_tags`
--

CREATE TABLE `art_tags` (
  `id` int NOT NULL,
  `article_id` int NOT NULL DEFAULT '0',
  `tag` varchar(255) NOT NULL DEFAULT '',
  `safe_tag` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_activity`
--

CREATE TABLE `pm_activity` (
  `activity_id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `activity_type` varchar(50) NOT NULL DEFAULT '',
  `time` int UNSIGNED NOT NULL DEFAULT '0',
  `object_id` int UNSIGNED NOT NULL DEFAULT '0',
  `object_type` varchar(50) NOT NULL DEFAULT '',
  `target_id` int UNSIGNED NOT NULL DEFAULT '0',
  `target_type` varchar(50) NOT NULL DEFAULT '',
  `hide` enum('0','1') NOT NULL DEFAULT '0',
  `metadata` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_ads`
--

CREATE TABLE `pm_ads` (
  `id` int UNSIGNED NOT NULL,
  `position` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `code` text NOT NULL,
  `active` enum('0','1') NOT NULL DEFAULT '1',
  `disable_stats` enum('0','1') NOT NULL DEFAULT '0',
  `protected` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `pm_ads`
--

INSERT INTO `pm_ads` (`id`, `position`, `description`, `code`, `active`, `disable_stats`, `protected`) VALUES
(1, 'Header', 'Appears on all pages right under the horizontal menu', '', '0', '1', 1),
(2, 'Footer', 'Appears on all pages right before the footer', '', '0', '1', 1),
(3, 'Video Player', 'Appears on video pages under the video player. (Recommended max. width: 540px)', '', '0', '1', 1),
(4, 'Article Page', 'Appears at the end of all articles (Recommended max. width: 540px)', '', '0', '1', 1),
(5, 'Index page', 'Appears as the first widget block on the right site of your homepage (Recommended max. width: 250px)', '', '0', '1', 1),
(6, 'Floating Skyscraper (Left)', 'Appears on the left side of the page container', '', '0', '1', 1),
(7, 'Floating Skyscraper (Right)', 'Appears on the right side of the page container', '', '0', '1', 1),
(900, 'In-Player Leaderboard ', 'This Leaderboard ad appears over the player. Recommended format: 728 x 90px.', '', '0', '1', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_ads_log`
--

CREATE TABLE `pm_ads_log` (
  `log_id` bigint UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `ad_id` mediumint NOT NULL DEFAULT '0',
  `ad_type` smallint NOT NULL DEFAULT '0',
  `impressions` int UNSIGNED NOT NULL DEFAULT '0',
  `clicks` int UNSIGNED NOT NULL DEFAULT '0',
  `skips` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_banlist`
--

CREATE TABLE `pm_banlist` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `reason` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_bin_rating_meta`
--

CREATE TABLE `pm_bin_rating_meta` (
  `vote_meta_id` int UNSIGNED NOT NULL,
  `uniq_id` varchar(10) NOT NULL DEFAULT '',
  `up_vote_count` int NOT NULL DEFAULT '0',
  `down_vote_count` int NOT NULL DEFAULT '0',
  `score` int NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `pm_bin_rating_meta`
--

INSERT INTO `pm_bin_rating_meta` (`vote_meta_id`, `uniq_id`, `up_vote_count`, `down_vote_count`, `score`) VALUES
(7, '14a4e06f8', 1, 0, 1),
(8, 'f9750eb53', 2, 0, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_bin_rating_votes`
--

CREATE TABLE `pm_bin_rating_votes` (
  `vote_id` int UNSIGNED NOT NULL,
  `uniq_id` varchar(10) NOT NULL DEFAULT '',
  `vote_value` tinyint(1) NOT NULL DEFAULT '0',
  `vote_ip` varchar(40) NOT NULL DEFAULT '',
  `user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `date` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `pm_bin_rating_votes`
--

INSERT INTO `pm_bin_rating_votes` (`vote_id`, `uniq_id`, `vote_value`, `vote_ip`, `user_id`, `date`) VALUES
(1, '14a4e06f8', 1, '127.0.0.1', 1, 1622275871),
(2, 'f9750eb53', 1, '10.55.1.38', 6, 1623566225),
(3, 'f9750eb53', 1, '10.55.1.38', 3, 1624269338);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_categories`
--

CREATE TABLE `pm_categories` (
  `id` smallint UNSIGNED NOT NULL,
  `parent_id` smallint UNSIGNED NOT NULL DEFAULT '0',
  `tag` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `published_videos` int UNSIGNED NOT NULL DEFAULT '0',
  `total_videos` int NOT NULL DEFAULT '0',
  `position` mediumint UNSIGNED NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  `meta_tags` text NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `pm_categories`
--

INSERT INTO `pm_categories` (`id`, `parent_id`, `tag`, `name`, `published_videos`, `total_videos`, `position`, `description`, `meta_tags`, `image`) VALUES
(6, 0, 'drama', 'drama', 0, 0, 3, '', '', ''),
(5, 0, 'keluarga', 'keluarga', 7, 7, 2, '', '', ''),
(4, 0, 'anime', 'anime', 0, 0, 1, '', '', ''),
(7, 0, 'series', 'series', 0, 0, 4, '', '', ''),
(8, 0, 'tv', 'tv', 0, 0, 5, '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_chart`
--

CREATE TABLE `pm_chart` (
  `uniq_id` varchar(10) NOT NULL DEFAULT '',
  `views` int UNSIGNED NOT NULL DEFAULT '0',
  `views_this` int NOT NULL DEFAULT '0',
  `views_last` int NOT NULL DEFAULT '0',
  `views_seclast` int NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `pm_chart`
--

INSERT INTO `pm_chart` (`uniq_id`, `views`, `views_this`, `views_last`, `views_seclast`) VALUES
('14a4e06f8', 1, 1, 0, 0),
('97d7e235d', 4, 4, 0, 0),
('66189809a', 4, 4, 0, 0),
('ac0266df0', 1, 1, 0, 0),
('d686e93cc', 4, 4, 0, 0),
('f9750eb53', 1, 1, 0, 0),
('87681fca4', 1, 1, 0, 0),
('40fa42791', 2, 2, 0, 0),
('940f3a2d4', 1, 1, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_comments`
--

CREATE TABLE `pm_comments` (
  `id` mediumint UNSIGNED NOT NULL,
  `uniq_id` varchar(50) DEFAULT NULL,
  `username` varchar(100) NOT NULL DEFAULT '',
  `comment` text NOT NULL,
  `added` int UNSIGNED NOT NULL DEFAULT '0',
  `user_ip` varchar(40) NOT NULL DEFAULT '',
  `user_id` mediumint NOT NULL DEFAULT '0',
  `approved` enum('0','1') NOT NULL DEFAULT '0',
  `up_vote_count` int UNSIGNED NOT NULL DEFAULT '0',
  `down_vote_count` int UNSIGNED NOT NULL DEFAULT '0',
  `score` int NOT NULL DEFAULT '0',
  `report_count` mediumint UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `pm_comments`
--

INSERT INTO `pm_comments` (`id`, `uniq_id`, `username`, `comment`, `added`, `user_ip`, `user_id`, `approved`, `up_vote_count`, `down_vote_count`, `score`, `report_count`) VALUES
(6, 'f9750eb53', 'zuhri', '***', 1623566355, '10.55.1.38', 6, '1', 0, 0, 0, 0),
(7, 'f9750eb53', 'zuhri', '*** ', 1623566444, '10.55.1.38', 6, '1', 0, 0, 0, 0),
(8, 'bb0739054', 'ILYAS', 'MANUK', 1624355975, '10.55.1.38', 0, '1', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_comments_reported`
--

CREATE TABLE `pm_comments_reported` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `comment_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_config`
--

CREATE TABLE `pm_config` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `pm_config`
--

INSERT INTO `pm_config` (`id`, `name`, `value`) VALUES
(1, 'contact_mail', 'you@gmail.com'),
(2, 'thumb_from', '2'),
(3, 'browse_page', '16'),
(4, 'browse_articles', '5'),
(5, 'player_w', '638'),
(6, 'player_h', '401'),
(7, 'player_w_index', '638'),
(8, 'player_h_index', '344'),
(9, 'player_w_favs', '575'),
(10, 'player_h_favs', '466'),
(11, 'player_w_embed', '640'),
(12, 'player_h_embed', '430'),
(13, 'isnew_days', '7'),
(14, 'ispopular', '100'),
(15, 'stopbadcomments', '1'),
(16, 'comments_page', '10'),
(17, 'template_f', 'apollo'),
(18, 'firstinstall', '1622275871'),
(19, 'counterhtml', 'halo'),
(20, 'voth_cat', '0'),
(21, 'views_from', '2'),
(22, 'fav_limit', '20'),
(23, 'version', '3.0'),
(24, 'seomod', '0'),
(25, 'new_videos', '24'),
(26, 'top_videos', '10'),
(27, 'chart_days', '7'),
(28, 'chart_last_reset', '1622275871'),
(29, 'guests_can_comment', '1'),
(30, 'comm_moderation_level', '0'),
(31, 'show_tags', '0'),
(32, 'shuffle_tags', '0'),
(33, 'tag_cloud_limit', '20'),
(34, 'show_stats', '0'),
(35, 'account_activation', '0'),
(36, 'issmtp', '0'),
(37, 'player_timecolor', '545454'),
(38, 'player_bgcolor', '5e5e5e'),
(39, 'player_autoplay', '1'),
(40, 'player_autobuff', '1'),
(41, 'player_watermarkurl', ''),
(42, 'player_watermarklink', ''),
(43, 'player_watermarkshow', 'fullscreen'),
(44, 'search_suggest', '1'),
(45, 'use_hq_vids', '1'),
(46, 'total_videoads', '0'),
(47, 'videoads_delay', '20'),
(48, 'default_lang', '1'),
(49, 'last_video', ''),
(50, 'top_videos_sort', 'views'),
(51, 'video_player', 'videojs'),
(52, 'gzip', '0'),
(53, 'mod_article', '0'),
(54, 'mail_server', 'ssl://smtp.gmail.com'),
(55, 'mail_port', '465'),
(56, 'mail_user', 'you@gmail.com'),
(57, 'mail_pass', ''),
(58, 'show_ads', '0'),
(59, 'total_videos', '7'),
(60, 'total_articles', '1'),
(61, 'total_pages', '2'),
(62, 'homepage_title', 'KariadiTube'),
(63, 'homepage_description', ''),
(64, 'homepage_keywords', ''),
(65, 'moderator_can', 'manage_users:1;manage_comments:1;manage_videos:1;manage_articles:1;'),
(66, 'last_autosync', '1622275871'),
(67, 'allow_user_uploadvideo', '1'),
(68, 'allow_user_uploadvideo_bytes', '2147483648'),
(69, 'jwplayerskin', 'modieus.zip'),
(70, 'video_sitemap_options', 'a:4:{s:14:\"media_keywords\";b:0;s:14:\"media_category\";b:0;s:12:\"item_pubDate\";b:0;s:10:\"last_build\";i:0;}'),
(71, 'auto_feature', '300'),
(72, 'bin_rating_allow_anon_voting', '1'),
(73, 'published_articles', '1'),
(74, 'published_videos', '7'),
(75, 'comment_default_sort', 'added'),
(76, 'comment_rating_hide_threshold', '3'),
(77, 'user_following_limit', '1000'),
(78, 'mod_social', '0'),
(79, 'activity_options', 'a:17:{s:6:\"follow\";i:1;s:8:\"unfollow\";i:0;s:5:\"watch\";i:0;s:4:\"like\";i:1;s:7:\"dislike\";i:1;s:8:\"favorite\";i:1;s:10:\"send-video\";i:0;s:12:\"upload-video\";i:1;s:13:\"suggest-video\";i:1;s:4:\"read\";i:0;s:7:\"comment\";i:1;s:4:\"join\";i:1;s:13:\"update-avatar\";i:1;s:12:\"update-cover\";i:1;s:6:\"status\";i:1;s:15:\"create-playlist\";i:1;s:15:\"update-playlist\";i:1;}'),
(80, 'pm_notifications_last_prune', '1622275871'),
(81, 'total_preroll_ads', '0'),
(82, 'preroll_ads_delay', '300'),
(83, 'default_tpl_customizations', 'YToyMDp7czo0OiJib2R5IjthOjI6e3M6MTY6ImJhY2tncm91bmQtaW1hZ2UiO3M6NDoibm9uZSI7czoxNjoiYmFja2dyb3VuZC1jb2xvciI7czo3OiIjZjRmNGY0Ijt9czoxNjoiaGVhZGVyLmhlYWRlci1iZyI7YTozOntzOjE2OiJiYWNrZ3JvdW5kLWltYWdlIjtzOjQ6Im5vbmUiO3M6MTY6ImJhY2tncm91bmQtY29sb3IiO3M6NzoiIzBhNDFhOCI7czoxOToiYm9yZGVyLWJvdHRvbS1jb2xvciI7czo3OiIjMGE0MWE4Ijt9czoxMToiLnBtLXRvcC1uYXYiO2E6NTp7czoxNjoiYmFja2dyb3VuZC1pbWFnZSI7czo0OiJub25lIjtzOjE2OiJiYWNrZ3JvdW5kLWNvbG9yIjtzOjc6IiMwMDAwMDAiO3M6MTA6ImJveC1zaGFkb3ciO3M6NDoibm9uZSI7czoxNjoiYm9yZGVyLXRvcC1jb2xvciI7czo3OiIjMDAwMDAwIjtzOjE5OiJib3JkZXItYm90dG9tLWNvbG9yIjtzOjc6IiMwMDAwMDAiO31zOjM0OiJ1bC5uYXYubmF2LXRhYnMgbGkgYS53aWRlLW5hdi1saW5rIjthOjI6e3M6MTE6InRleHQtc2hhZG93IjtzOjQ6Im5vbmUiO3M6NToiY29sb3IiO3M6NzoiI2YyZjJmMiI7fXM6MjI6Ii5uYXZzbGlkZS13cmFwIHVsIGxpIGEiO2E6MTp7czo1OiJjb2xvciI7czo3OiIjZjJmMmYyIjt9czoyMjoiLm5hdnNsaWRlLXdyYXAgdWwgbGkgaSI7YToxOntzOjU6ImNvbG9yIjtzOjc6IiNmMmYyZjIiO31zOjEzOiIjY29udGVudCBoMyBhIjthOjI6e3M6MTE6InRleHQtc2hhZG93IjtzOjQ6Im5vbmUiO3M6NToiY29sb3IiO3M6NzoiIzAwMGFjNiI7fXM6NDQ6IiNwbS1yZWxhdGVkIHVsLnBtLXVsLXNpZGVsaXN0LXZpZGVvcyBsaSBoMyBhIjthOjE6e3M6NToiY29sb3IiO3M6NzoiIzAwMGFjNiI7fXM6NTI6IiNwbS1yZWxhdGVkIHVsLnBtLXVsLXNpZGVsaXN0LXZpZGVvcyBsaSBoMyBhOnZpc2l0ZWQiO2E6MTp7czo1OiJjb2xvciI7czo3OiIjMDAwYWM2Ijt9czoyNzoiI2NvbnRlbnQgaDUubWVkaWEtaGVhZGluZyBhIjthOjI6e3M6MTE6InRleHQtc2hhZG93IjtzOjQ6Im5vbmUiO3M6NToiY29sb3IiO3M6NzoiIzAwMGFjNiI7fXM6MjE6Ii5oZWFkZXItbG9nbyA+IGgzID4gYSI7YToyOntzOjExOiJ0ZXh0LXNoYWRvdyI7czo0OiJub25lIjtzOjU6ImNvbG9yIjtzOjc6IiNmOWY5ZjkiO31zOjE3OiIuY29udGFpbmVyLWZvb3RlciI7YTozOntzOjExOiJ0ZXh0LXNoYWRvdyI7czo0OiJub25lIjtzOjE2OiJiYWNrZ3JvdW5kLWNvbG9yIjtzOjc6IiMwYTQxYTgiO3M6MTI6ImJvcmRlci1jb2xvciI7czo3OiIjMGE0MWE4Ijt9czo0NzoiLmNvbnRhaW5lci1mb290ZXIgZm9vdGVyIC5yb3ctZm9vdGVyLWhvcml6b250YWwiO2E6MTp7czoxMjoiYm9yZGVyLWNvbG9yIjtzOjc6IiMwYTQxYTgiO31zOjMwOiIucG0tbGFuZ3VhZ2UgLnBtLWxhbmd1YWdlLWxpc3QiO2E6MTp7czoxNjoiYmFja2dyb3VuZC1jb2xvciI7czo3OiIjMGE0MWE4Ijt9czo0OToiLmNvbnRhaW5lci1mb290ZXIgZm9vdGVyIC5yb3ctZm9vdGVyLWhvcml6b250YWwgcCI7YToyOntzOjExOiJ0ZXh0LXNoYWRvdyI7czo0OiJub25lIjtzOjU6ImNvbG9yIjtzOjc6IiMwMDAwMDAiO31zOjQ5OiIuY29udGFpbmVyLWZvb3RlciBmb290ZXIgLnJvdy1mb290ZXItaG9yaXpvbnRhbCBhIjthOjI6e3M6MTE6InRleHQtc2hhZG93IjtzOjQ6Im5vbmUiO3M6NToiY29sb3IiO3M6NzoiIzAwMDAwMCI7fXM6MjY6Ii5jb250YWluZXItZm9vdGVyIGZvb3RlciBhIjthOjI6e3M6MTE6InRleHQtc2hhZG93IjtzOjQ6Im5vbmUiO3M6NToiY29sb3IiO3M6NzoiIzAwMDAwMCI7fXM6NDU6Ii5jb250YWluZXItZm9vdGVyIGZvb3RlciAubGlzdC1zb2NpYWwtc2l0ZXMgaSI7YToxOntzOjU6ImNvbG9yIjtzOjc6IiMwMDAwMDAiO31zOjY2OiIuY29udGFpbmVyLWZvb3RlciBmb290ZXIgLnJvdy1mb290ZXItdmVydGljYWwgLmxpc3Qtc29jaWFsLXNpdGVzIGkiO2E6MTp7czo1OiJjb2xvciI7czo3OiIjMDAwMDAwIjt9czo1MjoiLmNvbnRhaW5lci1mb290ZXIgZm9vdGVyIC5wbS1sYW5ndWFnZSBhLmJ0bi5idG4tbGluayI7YToxOntzOjU6ImNvbG9yIjtzOjc6IiMwMDAwMDAiO319'),
(84, 'custom_logo_url', ''),
(85, 'article_widget_limit', '10'),
(86, 'new_page_limit', '50'),
(87, 'top_page_limit', '50'),
(88, 'allow_registration', '1'),
(89, 'allow_user_suggestvideo', '1'),
(90, 'maintenance_mode', '0'),
(91, 'maintenance_display_message', ''),
(92, 'thumb_video_w', '480'),
(93, 'thumb_video_h', '360'),
(94, 'thumb_article_w', '180'),
(95, 'thumb_article_h', '180'),
(96, 'thumb_avatar_w', '180'),
(97, 'thumb_avatar_h', '180'),
(98, 'allow_nonlatin_usernames', '1'),
(99, 'featured_autoplay', '1'),
(100, 'jwplayerkey', ''),
(101, 'auto_approve_suggested_videos', '1'),
(102, 'keyboard_shortcuts', '1'),
(103, 'show_addthis_widget', '0'),
(104, 'playingnow_limit', '9'),
(105, 'watch_related_limit', '10'),
(106, 'watch_toprated_limit', '10'),
(107, 'user_upload_daily_limit', '200'),
(108, 'spambot_prevention', 'none'),
(109, 'recaptcha_public_key', ''),
(110, 'recaptcha_private_key', ''),
(111, 'comment_system', 'on'),
(112, 'unread_system_messages', '0'),
(113, 'disable_indexing', '1'),
(114, 'rtl_support', '0'),
(115, 'allow_playlists', '1'),
(116, 'playlists_limit', '25'),
(117, 'playlists_items_limit', '100'),
(118, 'admin_welcome', '0'),
(119, 'admin_color_scheme', 'default'),
(120, 'vimeo_api_token', ''),
(121, 'register_time_to_submit', '3'),
(122, 'comment_system_primary', 'native'),
(123, 'comment_system_native', '1'),
(124, 'comment_system_facebook', '0'),
(125, 'comment_system_disqus', '0'),
(126, 'disqus_shortname', ''),
(127, 'fb_comment_sorting', 'social'),
(128, 'fb_app_id', ''),
(129, 'youtube_api_key', 'AIzaSyCJNN-N_28fY3VNRJNVtTqJ8JdNBuPZclc'),
(130, 'homepage_featured_limit', '10'),
(131, 'allow_embedding', '1'),
(132, 'timezone', 'Asia/Jakarta'),
(133, 'jwplayer7key', ''),
(134, 'homepage_featured_categories', 'a:0:{}'),
(135, 'eu_cookie_warning', '1'),
(136, 'eu_cookie_warning_position', 'floating'),
(137, 'allow_emojis', '0'),
(138, 'trashed_videos', '4'),
(139, 'auto_approve_suggested_videos_verified', '1'),
(140, 'allow_user_edit_video', '1'),
(141, 'allow_user_delete_video', '1'),
(142, 'cron_secret_key', 'e04af217875b0ee062665007215665ba'),
(143, 'oauth_facebook', '0'),
(144, 'oauth_twitter', '0'),
(145, 'oauth_fb_app_id', ''),
(146, 'oauth_fb_app_secret', ''),
(147, 'oauth_twitter_consumer_key', ''),
(148, 'oauth_twitter_consumer_secret', ''),
(149, 'download_thumb_res', 'medium'),
(150, 'csrfguard', '1'),
(151, 'series_per_page', '21'),
(152, 'featured_genres', 'a:0:{}'),
(153, 'jwplayer8key', ''),
(154, 'oauth_google', '0'),
(155, 'oauth_google_clientid', ''),
(156, 'mod_series', '0'),
(157, 'total_series', '0'),
(158, 'total_episodes', '0'),
(159, 'top_episodes_sort', 'views'),
(160, 'admin_ui_prefs', '{\"1\":{\"import_from\":\"youtube\",\"videos_pp\":25,\"pages_pp\":25,\"articles_pp\":25,\"cron_jobs_pp\":25,\"series_pp\":50,\"episodes_pp\":25,\"users_pp\":25,\"comments_pp\":25,\"\":20},\"3\":{\"import_from\":\"youtube\",\"videos_pp\":25,\"pages_pp\":25,\"articles_pp\":25,\"cron_jobs_pp\":25,\"series_pp\":50,\"episodes_pp\":25,\"users_pp\":25,\"comments_pp\":25},\"4\":{\"import_from\":\"youtube\",\"videos_pp\":25,\"pages_pp\":25,\"articles_pp\":25,\"cron_jobs_pp\":25,\"series_pp\":50,\"episodes_pp\":25,\"users_pp\":25,\"comments_pp\":25},\"5\":{\"import_from\":\"youtube\",\"videos_pp\":25,\"pages_pp\":25,\"articles_pp\":25,\"cron_jobs_pp\":25,\"series_pp\":50,\"episodes_pp\":25,\"users_pp\":25,\"comments_pp\":25}}');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_countries`
--

CREATE TABLE `pm_countries` (
  `countryid` smallint NOT NULL,
  `country` varchar(150) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `pm_countries`
--

INSERT INTO `pm_countries` (`countryid`, `country`) VALUES
(500, 'USA'),
(184, 'Albania'),
(301, 'Algeria'),
(240, 'American Samoa'),
(241, 'Andorra'),
(302, 'Angola'),
(303, 'Anguilla'),
(304, 'Antigua'),
(115, 'Antilles'),
(305, 'Argentina'),
(185, 'Armenia'),
(306, 'Aruba'),
(307, 'Australia'),
(308, 'Austria'),
(186, 'Azerbaijan'),
(187, 'Azores'),
(309, 'Bahamas'),
(310, 'Bahrain'),
(311, 'Bangladesh'),
(312, 'Barbados'),
(313, 'Barbuda'),
(315, 'Belgium'),
(316, 'Belize'),
(314, 'Belorus'),
(317, 'Benin'),
(318, 'Bermuda'),
(319, 'Bhutan'),
(320, 'Bolivia'),
(321, 'Bonaire'),
(188, 'Bosnia-Hercegovina'),
(322, 'Botswana'),
(324, 'Br. Virgin Islands'),
(323, 'Brazil'),
(325, 'Brunei'),
(326, 'Bulgaria'),
(327, 'Burkina Faso'),
(328, 'Burundi'),
(189, 'Caicos Island'),
(329, 'Cameroon'),
(330, 'Canada'),
(190, 'Canary Islands'),
(331, 'Cape Verde'),
(332, 'Cayman Islands'),
(333, 'Central African Republic'),
(334, 'Chad'),
(335, 'Channel Islands'),
(336, 'Chile'),
(337, 'China'),
(338, 'Colombia'),
(191, 'Commonwealth of Ind'),
(339, 'Congo'),
(242, 'Cook Islands'),
(192, 'Cooper Island'),
(340, 'Costa Rica'),
(193, 'Cote D\'Ivoire'),
(194, 'Croatia'),
(341, 'Curacao'),
(342, 'Cyprus'),
(343, 'Czech Republic'),
(344, 'Denmark'),
(345, 'Djibouti'),
(346, 'Dominica'),
(347, 'Dominican Republic'),
(348, 'Ecuador'),
(349, 'Egypt'),
(350, 'El Salvador'),
(351, 'England'),
(352, 'Equatorial Guinea'),
(353, 'Estonia'),
(354, 'Ethiopia'),
(355, 'Fiji'),
(356, 'Finland'),
(357, 'France'),
(358, 'French Guiana'),
(243, 'French Polynesia'),
(254, 'Futuna Island'),
(359, 'Gabon'),
(360, 'Gambia'),
(215, 'Georgia'),
(361, 'Germany'),
(362, 'Ghana'),
(216, 'Gibraltar'),
(363, 'Greece'),
(364, 'Grenada'),
(217, 'Grenland'),
(365, 'Guadeloupe'),
(366, 'Guam'),
(367, 'Guatemala'),
(368, 'Guinea'),
(369, 'Guinea-Bissau'),
(370, 'Guyana'),
(195, 'Haiti'),
(244, 'Holland'),
(371, 'Honduras'),
(372, 'Hong Kong'),
(373, 'Hungary'),
(374, 'Iceland'),
(375, 'India'),
(376, 'Indonesia'),
(377, 'Iran'),
(196, 'Iraq'),
(378, 'Ireland, Northern'),
(379, 'Ireland, Republic of'),
(197, 'Isle of Man'),
(380, 'Israel'),
(381, 'Italy'),
(382, 'Ivory Coast'),
(383, 'Jamaica'),
(384, 'Japan'),
(385, 'Jordan'),
(198, 'Jost Van Dyke Island'),
(218, 'Kampuchea'),
(199, 'Kazakhstan'),
(386, 'Kenya'),
(219, 'Kiribati'),
(239, 'Korea'),
(387, 'Korea, South'),
(256, 'Kosrae'),
(388, 'Kuwait'),
(200, 'Kyrgyzstan'),
(220, 'Laos'),
(389, 'Latvia'),
(390, 'Lebanon'),
(391, 'Lesotho'),
(221, 'Liberia'),
(392, 'Liechtenstein'),
(393, 'Lithuania'),
(394, 'Luxembourg'),
(395, 'Macau'),
(222, 'Macedonia'),
(396, 'Madagascar'),
(201, 'Madeira Islands'),
(202, 'Malagasy'),
(397, 'Malawi'),
(398, 'Malaysia'),
(399, 'Maldives'),
(100, 'Mali'),
(101, 'Malta'),
(102, 'Marshall Islands'),
(103, 'Martinique'),
(104, 'Mauritania'),
(105, 'Mauritius'),
(106, 'Mexico'),
(107, 'Micronesia'),
(203, 'Moldova'),
(108, 'Monaco'),
(223, 'Mongolia'),
(109, 'Montserrat'),
(110, 'Morocco'),
(111, 'Mozambique'),
(224, 'Myanmar'),
(112, 'Namibia'),
(225, 'Nauru'),
(113, 'Nepal'),
(114, 'Netherlands'),
(204, 'Nevis'),
(246, 'Nevis (St. Kitts)'),
(116, 'New Caledonia'),
(117, 'New Zealand'),
(118, 'Nicaragua'),
(119, 'Niger'),
(120, 'Nigeria'),
(226, 'Niue'),
(258, 'Norfolk Island'),
(205, 'Norman Island'),
(257, 'Northern Mariana Island'),
(121, 'Norway'),
(122, 'Oman'),
(123, 'Pakistan'),
(124, 'Palau'),
(125, 'Panama'),
(126, 'Papua New Guinea'),
(127, 'Paraguay'),
(128, 'Peru'),
(129, 'Philippines'),
(130, 'Poland'),
(260, 'Ponape'),
(131, 'Portugal'),
(132, 'Qatar'),
(133, 'Reunion'),
(134, 'Romania'),
(261, 'Rota'),
(135, 'Russia'),
(136, 'Rwanda'),
(137, 'Saba'),
(147, 'Saipan'),
(228, 'San Marino'),
(229, 'Sao Tome'),
(148, 'Saudi Arabia'),
(149, 'Scotland'),
(150, 'Senegal'),
(207, 'Serbia'),
(151, 'Seychelles'),
(152, 'Sierra Leone'),
(153, 'Singapore'),
(208, 'Slovakia'),
(209, 'Slovenia'),
(210, 'Solomon Islands'),
(154, 'Somalia'),
(155, 'South Africa'),
(156, 'Spain'),
(157, 'Sri Lanka'),
(138, 'St. Barthelemy'),
(206, 'St. Christopher'),
(139, 'St. Croix'),
(140, 'St. Eustatius'),
(141, 'St. John'),
(142, 'St. Kitts'),
(143, 'St. Lucia'),
(144, 'St. Maarten'),
(245, 'St. Martin'),
(145, 'St. Thomas'),
(146, 'St. Vincent'),
(158, 'Sudan'),
(159, 'Suriname'),
(160, 'Swaziland'),
(161, 'Sweden'),
(162, 'Switzerland'),
(163, 'Syria'),
(247, 'Tahiti'),
(164, 'Taiwan'),
(211, 'Tajikistan'),
(165, 'Tanzania'),
(166, 'Thailand'),
(248, 'Tinian'),
(167, 'Togo'),
(230, 'Tonaga'),
(249, 'Tonga'),
(250, 'Tortola'),
(168, 'Trinidad and Tobago'),
(251, 'Truk'),
(169, 'Tunisia'),
(170, 'Turkey'),
(212, 'Turkmenistan'),
(171, 'Turks and Caicos Island'),
(231, 'Tuvalu'),
(175, 'U.S. Virgin Islands'),
(172, 'Uganda'),
(173, 'Ukraine'),
(252, 'Union Island'),
(174, 'United Arab Emirates'),
(176, 'Uruguay'),
(262, 'United Kingdom'),
(232, 'Uzbekistan'),
(233, 'Vanuatu'),
(177, 'Vatican City'),
(178, 'Venezuela'),
(234, 'Vietnam'),
(235, 'Virgin Islands (Brit'),
(236, 'Virgin Islands (U.S.'),
(237, 'Wake Island'),
(179, 'Wales'),
(253, 'Wallis Island'),
(238, 'Western Samoa'),
(255, 'Yap'),
(180, 'Yemen, Republic of'),
(213, 'Yugoslavia'),
(181, 'Zaire'),
(182, 'Zambia'),
(183, 'Zimbabwe'),
(501, 'Kosova'),
(502, 'Afghanistan'),
(503, 'Libya'),
(504, 'Eritrea');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_cron_jobs`
--

CREATE TABLE `pm_cron_jobs` (
  `job_id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(100) NOT NULL DEFAULT '',
  `status` varchar(50) NOT NULL DEFAULT '',
  `state` varchar(50) NOT NULL DEFAULT '',
  `exec_frequency` int UNSIGNED NOT NULL DEFAULT '86400',
  `last_exec_time` int UNSIGNED NOT NULL DEFAULT '0',
  `rel_object_id` int UNSIGNED NOT NULL DEFAULT '0',
  `data` text NOT NULL,
  `created_time` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `pm_cron_jobs`
--

INSERT INTO `pm_cron_jobs` (`job_id`, `name`, `type`, `status`, `state`, `exec_frequency`, `last_exec_time`, `rel_object_id`, `data`, `created_time`) VALUES
(1, 'Video Status Checker', 'vscheck', 'stopped', 'ready', 259200, 0, 9, 'a:5:{s:9:\"sql_start\";i:0;s:12:\"time_started\";i:0;s:16:\"videos_processed\";i:0;s:13:\"video_sorting\";s:6:\"latest\";s:11:\"video_limit\";s:2:\"20\";}', 1622275871),
(2, 'Regular Sitemap', 'sitemap', 'stopped', 'ready', 604800, 0, 0, 'a:4:{s:8:\"progress\";i:0;s:20:\"sql_added_time_limit\";i:0;s:13:\"time_last_run\";i:0;s:12:\"time_started\";i:0;}', 1622275871),
(3, 'Video Sitemap', 'video-sitemap', 'stopped', 'ready', 604800, 0, 0, 'a:4:{s:8:\"progress\";i:0;s:20:\"sql_added_time_limit\";i:0;s:13:\"time_last_run\";i:0;s:12:\"time_started\";i:0;}', 1622275871);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_cron_log`
--

CREATE TABLE `pm_cron_log` (
  `log_id` int UNSIGNED NOT NULL,
  `job_id` int UNSIGNED NOT NULL DEFAULT '0',
  `time` int UNSIGNED NOT NULL DEFAULT '0',
  `notes` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_embed_code`
--

CREATE TABLE `pm_embed_code` (
  `id` int NOT NULL,
  `uniq_id` varchar(10) NOT NULL DEFAULT '',
  `embed_code` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_episodes`
--

CREATE TABLE `pm_episodes` (
  `episode_id` int UNSIGNED NOT NULL,
  `uniq_id` varchar(50) NOT NULL,
  `series_id` mediumint UNSIGNED NOT NULL DEFAULT '0',
  `season_no` smallint UNSIGNED NOT NULL DEFAULT '0',
  `episode_no` smallint UNSIGNED NOT NULL DEFAULT '0',
  `release_date` int UNSIGNED NOT NULL DEFAULT '0',
  `media_sources` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_genres`
--

CREATE TABLE `pm_genres` (
  `id` smallint UNSIGNED NOT NULL,
  `parent_id` smallint UNSIGNED NOT NULL DEFAULT '0',
  `tag` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_series` int UNSIGNED NOT NULL DEFAULT '0',
  `published_videos` int NOT NULL DEFAULT '0',
  `total_videos` int NOT NULL DEFAULT '0',
  `position` mediumint UNSIGNED NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  `meta_tags` text NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `pm_genres`
--

INSERT INTO `pm_genres` (`id`, `parent_id`, `tag`, `name`, `total_series`, `published_videos`, `total_videos`, `position`, `description`, `meta_tags`, `image`) VALUES
(1, 0, 'action', 'Action', 0, 0, 0, 1, '', '', ''),
(2, 0, 'adventure', 'Adventure', 0, 0, 0, 2, '', '', ''),
(3, 0, 'biography', 'Biography', 0, 0, 0, 4, '', '', ''),
(4, 0, 'comedy', 'Comedy', 0, 0, 0, 5, '', '', ''),
(5, 0, 'crime', 'Crime', 0, 0, 0, 6, '', '', ''),
(6, 0, 'drama', 'Drama', 0, 0, 0, 7, '', '', ''),
(7, 0, 'family', 'Family', 0, 0, 0, 8, '', '', ''),
(8, 0, 'fantasy', 'Fantasy', 0, 0, 0, 9, '', '', ''),
(9, 0, 'film-noir', 'Film-Noir', 0, 0, 0, 10, '', '', ''),
(10, 0, 'history', 'History', 0, 0, 0, 11, '', '', ''),
(11, 0, 'horror', 'Horror', 0, 0, 0, 12, '', '', ''),
(12, 0, 'music', 'Music', 0, 0, 0, 13, '', '', ''),
(13, 0, 'musical', 'Musical', 0, 0, 0, 14, '', '', ''),
(14, 0, 'mystery', 'Mystery', 0, 0, 0, 15, '', '', ''),
(15, 0, 'romance', 'Romance', 0, 0, 0, 16, '', '', ''),
(16, 0, 'sci-fi', 'Sci-Fi', 0, 0, 0, 17, '', '', ''),
(17, 0, 'sport', 'Sport', 0, 0, 0, 18, '', '', ''),
(18, 0, 'thriller', 'Thriller', 0, 0, 0, 19, '', '', ''),
(19, 0, 'war', 'War', 0, 0, 0, 20, '', '', ''),
(20, 0, 'western', 'Western', 0, 0, 0, 21, '', '', ''),
(21, 0, 'animation', 'Animation', 0, 0, 0, 3, '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_genre_relationships`
--

CREATE TABLE `pm_genre_relationships` (
  `id` bigint UNSIGNED NOT NULL,
  `item_id` int NOT NULL,
  `item_type` smallint UNSIGNED NOT NULL DEFAULT '1',
  `genre_id` smallint NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_import_csv_files`
--

CREATE TABLE `pm_import_csv_files` (
  `file_id` mediumint UNSIGNED NOT NULL,
  `filename` varchar(255) NOT NULL DEFAULT '',
  `upload_date` int UNSIGNED NOT NULL DEFAULT '0',
  `items_detected` mediumint UNSIGNED NOT NULL DEFAULT '0',
  `items_processed` mediumint UNSIGNED NOT NULL DEFAULT '0',
  `items_skipped` mediumint UNSIGNED NOT NULL DEFAULT '0',
  `items_with_error` mediumint UNSIGNED NOT NULL DEFAULT '0',
  `items_imported` mediumint UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_import_csv_items`
--

CREATE TABLE `pm_import_csv_items` (
  `item_id` int UNSIGNED NOT NULL,
  `file_id` mediumint UNSIGNED NOT NULL DEFAULT '0',
  `uniq_id` varchar(10) NOT NULL DEFAULT '',
  `video_title` varchar(100) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `yt_id` varchar(50) NOT NULL DEFAULT '',
  `yt_length` mediumint UNSIGNED NOT NULL DEFAULT '0',
  `yt_thumb` varchar(255) NOT NULL DEFAULT '',
  `category` varchar(30) NOT NULL DEFAULT '',
  `added` int UNSIGNED NOT NULL DEFAULT '0',
  `site_views` int NOT NULL DEFAULT '0',
  `url_flv` varchar(255) NOT NULL DEFAULT '',
  `source_id` smallint UNSIGNED NOT NULL DEFAULT '0',
  `featured` enum('0','1') NOT NULL DEFAULT '0',
  `restricted` enum('0','1') NOT NULL DEFAULT '0',
  `allow_comments` enum('0','1') NOT NULL DEFAULT '1',
  `allow_embedding` enum('0','1') NOT NULL DEFAULT '1',
  `video_slug` varchar(255) NOT NULL DEFAULT '',
  `mp4` varchar(200) NOT NULL DEFAULT '',
  `direct` varchar(200) NOT NULL DEFAULT '',
  `tags` text NOT NULL,
  `embeddable` enum('0','1') NOT NULL DEFAULT '0',
  `private` enum('0','1') NOT NULL DEFAULT '0',
  `geo-restriction` text NOT NULL,
  `has_errors` enum('0','1') NOT NULL DEFAULT '0',
  `errors` text NOT NULL,
  `processed` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_import_subscriptions`
--

CREATE TABLE `pm_import_subscriptions` (
  `sub_id` int UNSIGNED NOT NULL,
  `sub_name` varchar(255) NOT NULL DEFAULT '',
  `sub_type` varchar(20) NOT NULL DEFAULT '',
  `last_query_time` int UNSIGNED NOT NULL DEFAULT '0',
  `last_query_results` int UNSIGNED NOT NULL DEFAULT '0',
  `user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_internal_log`
--

CREATE TABLE `pm_internal_log` (
  `log_id` int UNSIGNED NOT NULL,
  `log_date` datetime NOT NULL,
  `log_info` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `pm_internal_log`
--

INSERT INTO `pm_internal_log` (`log_id`, `log_date`, `log_info`) VALUES
(1, '2021-05-29 15:11:11', 'Installed');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_languages`
--

CREATE TABLE `pm_languages` (
  `id` int NOT NULL,
  `label` varchar(255) NOT NULL DEFAULT '',
  `tag` varchar(2) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `pm_languages`
--

INSERT INTO `pm_languages` (`id`, `label`, `tag`) VALUES
(1, 'Abkhazian', 'ab'),
(2, 'Afar', 'aa'),
(3, 'Afrikaans', 'af'),
(4, 'Albanian', 'sq'),
(5, 'Amharic', 'am'),
(6, 'Arabic', 'ar'),
(7, 'Aragonese', 'an'),
(8, 'Armenian', 'hy'),
(9, 'Assamese', 'as'),
(10, 'Aymara', 'ay'),
(11, 'Azerbaijani', 'az'),
(12, 'Bashkir', 'ba'),
(13, 'Basque', 'eu'),
(14, 'Bengali (Bangla)', 'bn'),
(15, 'Bhutani', 'dz'),
(16, 'Bihari', 'bh'),
(17, 'Bislama', 'bi'),
(18, 'Breton', 'br'),
(19, 'Bulgarian', 'bg'),
(20, 'Burmese', 'my'),
(21, 'Byelorussian (Belarusian)', 'be'),
(22, 'Cambodian', 'km'),
(23, 'Catalan', 'ca'),
(24, 'Chinese (Simplified)', 'zh'),
(25, 'Chinese (Traditional)', 'zh'),
(26, 'Corsican', 'co'),
(27, 'Croatian', 'hr'),
(28, 'Czech', 'cs'),
(29, 'Danish', 'da'),
(30, 'Dutch', 'nl'),
(31, 'English', 'en'),
(32, 'Esperanto', 'eo'),
(33, 'Estonian', 'et'),
(34, 'Faeroese', 'fo'),
(35, 'Farsi', 'fa'),
(36, 'Fiji', 'fj'),
(37, 'Finnish', 'fi'),
(38, 'French', 'fr'),
(39, 'Frisian', 'fy'),
(40, 'Galician', 'gl'),
(41, 'Gaelic (Scottish)', 'gd'),
(42, 'Gaelic (Manx)', 'gv'),
(43, 'Georgian', 'ka'),
(44, 'German', 'de'),
(45, 'Greek', 'el'),
(46, 'Greenlandic', 'kl'),
(47, 'Guarani', 'gn'),
(48, 'Gujarati', 'gu'),
(49, 'Haitian Creole', 'ht'),
(50, 'Hausa', 'ha'),
(51, 'Hebrew', 'he'),
(52, 'Hindi', 'hi'),
(53, 'Hungarian', 'hu'),
(54, 'Icelandic', 'is'),
(55, 'Ido', 'io'),
(56, 'Indonesian', 'id'),
(57, 'Interlingua', 'ia'),
(58, 'Interlingue', 'ie'),
(59, 'Inuktitut', 'iu'),
(60, 'Inupiak', 'ik'),
(61, 'Irish', 'ga'),
(62, 'Italian', 'it'),
(63, 'Japanese', 'ja'),
(64, 'Javanese', 'jv'),
(65, 'Kannada', 'kn'),
(66, 'Kashmiri', 'ks'),
(67, 'Kazakh', 'kk'),
(68, 'Kinyarwanda (Ruanda)', 'rw'),
(69, 'Kirghiz', 'ky'),
(70, 'Kirundi (Rundi)', 'rn'),
(71, 'Korean', 'ko'),
(72, 'Kurdish', 'ku'),
(73, 'Laothian', 'lo'),
(74, 'Latin', 'la'),
(75, 'Latvian (Lettish)', 'lv'),
(76, 'Limburgish (Limburger)', 'li'),
(77, 'Lingala', 'ln'),
(78, 'Lithuanian', 'lt'),
(79, 'Macedonian', 'mk'),
(80, 'Malagasy', 'mg'),
(81, 'Malay', 'ms'),
(82, 'Malayalam', 'ml'),
(83, 'Maltese', 'mt'),
(84, 'Maori', 'mi'),
(85, 'Marathi', 'mr'),
(86, 'Moldavian', 'mo'),
(87, 'Mongolian', 'mn'),
(88, 'Nauru', 'na'),
(89, 'Nepali', 'ne'),
(90, 'Norwegian', 'no'),
(91, 'Occitan', 'oc'),
(92, 'Oriya', 'or'),
(93, 'Oromo (Afan Galla)', 'om'),
(94, 'Pashto (Pushto)', 'ps'),
(95, 'Polish', 'pl'),
(96, 'Portuguese', 'pt'),
(97, 'Punjabi', 'pa'),
(98, 'Quechua', 'qu'),
(99, 'Rhaeto-Romance', 'rm'),
(100, 'Romanian', 'ro'),
(101, 'Russian', 'ru'),
(102, 'Samoan', 'sm'),
(103, 'Sangro', 'sg'),
(104, 'Sanskrit', 'sa'),
(105, 'Serbian', 'sr'),
(106, 'Serbo-Croatian', 'sh'),
(107, 'Sesotho', 'st'),
(108, 'Setswana', 'tn'),
(109, 'Shona', 'sn'),
(110, 'Sichuan Yi', 'ii'),
(111, 'Sindhi', 'sd'),
(112, 'Sinhalese', 'si'),
(113, 'Siswati', 'ss'),
(114, 'Slovak', 'sk'),
(115, 'Slovenian', 'sl'),
(116, 'Somali', 'so'),
(117, 'Spanish', 'es'),
(118, 'Sundanese', 'su'),
(119, 'Swahili (Kiswahili)', 'sw'),
(120, 'Swedish', 'sv'),
(121, 'Tagalog', 'tl'),
(122, 'Tajik', 'tg'),
(123, 'Tamil', 'ta'),
(124, 'Tatar', 'tt'),
(125, 'Telugu', 'te'),
(126, 'Thai', 'th'),
(127, 'Tibetan', 'bo'),
(128, 'Tigrinya', 'ti'),
(129, 'Tonga', 'to'),
(130, 'Tsonga', 'ts'),
(131, 'Turkish', 'tr'),
(132, 'Turkmen', 'tk'),
(133, 'Twi', 'tw'),
(134, 'Uighur', 'ug'),
(135, 'Ukrainian', 'uk'),
(136, 'Urdu', 'ur'),
(137, 'Uzbek', 'uz'),
(138, 'Vietnamese', 'vi'),
(139, 'Volap&uuml;k', 'vo'),
(140, 'Wallon', 'wa'),
(141, 'Welsh', 'cy'),
(142, 'Wolof', 'wo'),
(143, 'Xhosa', 'xh'),
(144, 'Yiddish', 'yi'),
(145, 'Yoruba', 'yo'),
(146, 'Zulu', 'zu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_log`
--

CREATE TABLE `pm_log` (
  `id` int NOT NULL,
  `log_msg` text NOT NULL,
  `area` varchar(50) NOT NULL DEFAULT '',
  `added` int NOT NULL DEFAULT '0',
  `msg_type` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `pm_log`
--

INSERT INTO `pm_log` (`id`, `log_msg`, `area`, `added`, `msg_type`) VALUES
(1, 'SMTP connect() failed. https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting', 'Register Page', 1622277695, '0'),
(2, 'SMTP connect() failed. https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting', 'Register Page', 1623564605, '0'),
(3, 'Failed attempt to log in to Admin Area. (Username used: <em>ktube@gmail.com</em> / IP: <em>10.55.1.6</em>)', 'Admin login', 1624149637, '0'),
(4, 'Failed attempt to log in to Admin Area. (Username used: <em>ktube@gmail.com</em> / IP: <em>10.55.1.6</em>)', 'Admin login', 1624149650, '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_meta`
--

CREATE TABLE `pm_meta` (
  `id` bigint UNSIGNED NOT NULL,
  `item_id` int UNSIGNED NOT NULL DEFAULT '0',
  `item_type` smallint UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) NOT NULL DEFAULT '',
  `meta_value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `pm_meta`
--

INSERT INTO `pm_meta` (`id`, `item_id`, `item_type`, `meta_key`, `meta_value`) VALUES
(4, 1, 3, '_meta_keywords', ''),
(5, 1, 3, '_meta_description', ''),
(6, 2, 3, '_meta_keywords', ''),
(7, 2, 3, '_meta_description', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_notifications`
--

CREATE TABLE `pm_notifications` (
  `notification_id` bigint UNSIGNED NOT NULL,
  `to_user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `from_user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `activity_type` varchar(50) NOT NULL DEFAULT '',
  `time` int UNSIGNED NOT NULL DEFAULT '0',
  `seen` enum('0','1') NOT NULL DEFAULT '0',
  `metadata` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_pages`
--

CREATE TABLE `pm_pages` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `content` longtext NOT NULL,
  `author` int NOT NULL DEFAULT '0',
  `date` int UNSIGNED NOT NULL DEFAULT '0',
  `status` smallint NOT NULL DEFAULT '0',
  `page_name` varchar(255) NOT NULL DEFAULT '',
  `views` int UNSIGNED NOT NULL DEFAULT '0',
  `showinmenu` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `pm_pages`
--

INSERT INTO `pm_pages` (`id`, `title`, `content`, `author`, `date`, `status`, `page_name`, `views`, `showinmenu`) VALUES
(1, 'Terms of Agreement', '<h2>Code of Conduct</h2>\r\n<p>In using this Service, you must behave in a civil and respectful manner at all times. Further, you will not:</p>\r\n<ul>\r\n<li>Act in a deceptive manner by, among other things, impersonating any person;</li>\r\n<li>Harass or stalk any other person;</li>\r\n<li>Harm or exploit minors;</li>\r\n<li>Distribute \"spam\";</li>\r\n<li>Collect information about others; or</li>\r\n<li>Advertise or solicit others to purchase any product or service within the Site (unless you are an official partner or advertiser and have a written agreement with us).</li>\r\n</ul>\r\n<p>The Site owner has the right, but not the obligation, to monitor all conduct on and content submitted to the Service.</p>\r\n<hr />\r\n<h2>Membership</h2>\r\n<p>REGISTRATION: To fully use the the Service, you must register as a member by providing a user name, password, and valid email address. You must provide complete and accurate registration information and notify us if your information changes. If you are a business, government, or non-profit entity, the person whose email address is associated with the account must have the authority to bind the entity to this Agreement.</p>\r\n<p>USER NAME: We encourage you to use your real name. If you are a business, government, or non-profit entity, you must use the actual name of your organization. You may not use someone else\'s name, a name that violates any third party right, or a name that is obscene or otherwise objectionable.</p>\r\n<p>ACCOUNT SECURITY: You are responsible for all activity that occurs under your account, including any activity by unauthorized users. You must not allow others to use your account. You must safeguard the confidentiality of your password. If you are using a computer that others have access to, you must log out of your account after using the Service.</p>\r\n<hr />\r\n<h2>Content Restrictions</h2>\r\n<p>You may not upload, post, or transmit (collectively, \"submit\") any video, image, text, audio recording, or other work (collectively, \"content\") that:</p>\r\n<ul>\r\n<li>Infringes any third party\'s copyrights or other rights (e.g., trademark, privacy rights, etc.);</li>\r\n<li>Contains sexually explicit content or pornography (provided, however, that non-sexual nudity is permitted);</li>\r\n<li>Contains hateful, defamatory, or discriminatory content or incites hatred against any individual or group;</li>\r\n<li>Exploits minors;</li>\r\n<li>Depicts unlawful acts or extreme violence;</li>\r\n<li>Depicts animal cruelty or extreme violence towards animals;</li>\r\n<li>Promotes fraudulent schemes, multi level marketing (MLM) schemes, get rich quick schemes, online gaming and gambling, cash gifting, work from home businesses, or any other dubious money-making ventures; or Violates any law.</li>\r\n</ul>', 1, 1366891687, 1, 'terms-toa', 0, '0'),
(2, '404 Error', '<h3>Sorry, page not found!</h3>\r\n<p>The page you are looking for could not be found. Please check the link you followed to get here and try again.</p>', 1, 1366891687, 1, '404', 3, '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_playlists`
--

CREATE TABLE `pm_playlists` (
  `list_id` int UNSIGNED NOT NULL,
  `list_uniq_id` varchar(25) NOT NULL DEFAULT '',
  `user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `type` smallint NOT NULL DEFAULT '0',
  `items_count` int UNSIGNED NOT NULL DEFAULT '0',
  `date` int UNSIGNED NOT NULL DEFAULT '0',
  `visibility` smallint NOT NULL DEFAULT '0',
  `sorting` varchar(50) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `thumb_source` varchar(50) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `pm_playlists`
--

INSERT INTO `pm_playlists` (`list_id`, `list_uniq_id`, `user_id`, `type`, `items_count`, `date`, `visibility`, `sorting`, `title`, `description`, `thumb_source`) VALUES
(16, 'E573FE4E1819', 4, 4, 0, 1622879065, 0, 'date-added-desc', '', '', ''),
(15, '3C318355FB86', 4, 3, 0, 1622879065, 1, 'default', '', '', ''),
(14, 'D6486E276B58', 4, 2, 0, 1622879065, 1, 'default', '', '', ''),
(13, '5206D4E7901F', 4, 1, 0, 1622879065, 0, 'default', '', '', ''),
(24, '4B6E40BEF403', 6, 4, 1, 1623564475, 0, 'date-added-desc', '', '', ''),
(23, 'FB692FAE4BAB', 6, 3, 1, 1623564475, 1, 'default', '', '', ''),
(22, 'A719F4EFC6F1', 6, 2, 0, 1623564475, 1, 'default', '', '', ''),
(21, 'A418A2CEC953', 6, 1, 0, 1623564475, 0, 'default', '', '', ''),
(9, '8C0E0D487270', 3, 1, 0, 1622878552, 0, 'default', '', '', ''),
(10, 'E810145E1EFC', 3, 2, 0, 1622878552, 1, 'default', '', '', ''),
(11, 'F532FB79D8F9', 3, 3, 1, 1622878552, 1, 'default', '', '', ''),
(12, '38A5715145D5', 3, 4, 7, 1622878552, 0, 'date-added-desc', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_playlist_items`
--

CREATE TABLE `pm_playlist_items` (
  `list_item_id` bigint UNSIGNED NOT NULL,
  `list_id` int UNSIGNED NOT NULL DEFAULT '0',
  `video_id` int UNSIGNED NOT NULL DEFAULT '0',
  `position` smallint UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `pm_playlist_items`
--

INSERT INTO `pm_playlist_items` (`list_item_id`, `list_id`, `video_id`, `position`) VALUES
(1, 12, 5, 1),
(2, 12, 4, 2),
(3, 12, 3, 3),
(7, 12, 6, 4),
(6, 24, 6, 1),
(9, 23, 6, 1),
(10, 11, 6, 1),
(11, 12, 12, 5),
(12, 12, 8, 6),
(13, 12, 10, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_preroll_ads`
--

CREATE TABLE `pm_preroll_ads` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `duration` mediumint UNSIGNED NOT NULL DEFAULT '5',
  `user_group` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `impressions` int UNSIGNED NOT NULL DEFAULT '0',
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `code` text NOT NULL,
  `options` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_ratings`
--

CREATE TABLE `pm_ratings` (
  `id` varchar(10) NOT NULL DEFAULT '',
  `total_votes` mediumint UNSIGNED NOT NULL DEFAULT '0',
  `total_value` mediumint UNSIGNED NOT NULL DEFAULT '0',
  `used_ips` longtext,
  `which_id` int NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_reports`
--

CREATE TABLE `pm_reports` (
  `id` int NOT NULL,
  `r_type` enum('1','2') NOT NULL DEFAULT '1',
  `entry_id` varchar(20) NOT NULL DEFAULT '',
  `added` varchar(11) NOT NULL DEFAULT '',
  `reason` varchar(100) NOT NULL DEFAULT '',
  `submitted` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_searches`
--

CREATE TABLE `pm_searches` (
  `id` int NOT NULL,
  `string` varchar(100) NOT NULL DEFAULT '',
  `hits` mediumint NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `pm_searches`
--

INSERT INTO `pm_searches` (`id`, `string`, `hits`) VALUES
(1, 'martin', 1),
(2, 'rick', 1),
(3, 'aku', 1),
(4, 'article', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_series`
--

CREATE TABLE `pm_series` (
  `series_id` mediumint UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `series_slug` varchar(255) NOT NULL,
  `seasons` smallint UNSIGNED NOT NULL DEFAULT '0',
  `episodes` smallint UNSIGNED NOT NULL DEFAULT '0',
  `seasons_count` smallint UNSIGNED NOT NULL DEFAULT '0' COMMENT 'internal counter',
  `episodes_count` smallint UNSIGNED NOT NULL DEFAULT '0' COMMENT 'internal counter',
  `views` int UNSIGNED NOT NULL DEFAULT '0',
  `release_year` int NOT NULL DEFAULT '0',
  `date` int UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `featured` smallint NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_sources`
--

CREATE TABLE `pm_sources` (
  `source_id` smallint NOT NULL,
  `source_name` varchar(20) NOT NULL DEFAULT '',
  `source_rule` varchar(40) NOT NULL DEFAULT '',
  `url_example` varchar(100) NOT NULL DEFAULT '',
  `last_check` int UNSIGNED NOT NULL DEFAULT '0',
  `flv_player_support` enum('0','1') NOT NULL DEFAULT '0',
  `embed_player_support` enum('0','1') NOT NULL DEFAULT '0',
  `embed_code` text NOT NULL,
  `user_choice` varchar(15) NOT NULL DEFAULT '',
  `vscheck_support` enum('1','0') NOT NULL DEFAULT '0',
  `vscheck_autopilot` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `pm_sources`
--

INSERT INTO `pm_sources` (`source_id`, `source_name`, `source_rule`, `url_example`, `last_check`, `flv_player_support`, `embed_player_support`, `embed_code`, `user_choice`, `vscheck_support`, `vscheck_autopilot`) VALUES
(1, 'localhost', '/(.*?)\\.flv/i', '', 0, '1', '0', '', 'flvplayer', '1', '0'),
(2, 'other', '/(.*?)\\.flv/i', 'http://www.example.com/uploads/video.flv', 0, '1', '0', '', 'flvplayer', '1', '0'),
(3, 'youtube', '/youtube\\./i', 'http://www.youtube.com/watch?v=[VIDEO ID]', 0, '1', '1', '<iframe src=\"//www.youtube.com/embed/%%yt_id%%?hl=en_US&hd=%%use_hq_vids%%&cc_load_policy=1&rel=0&fs=1&autoplay=%%player_autoplay%%&color2=0x%%player_bgcolor%%&showsearch=0&showinfo=0&iv_load_policy=3&modestbranding=1\" width=\"100%\" height=\"%%player_h%%\" frameborder=\"0\" allowfullscreen></iframe>', 'flvplayer', '1', '0'),
(5, 'dailymotion', '/dailymotion\\./i', 'http://www.dailymotion.com/en/category/[VIDEO ID]_video-title-here', 0, '0', '1', '<iframe frameborder=\"0\" width=\"100%\" height=\"%%player_h%%\" src=\"//www.dailymotion.com/embed/video/%%yt_id%%&autoplay=%%player_autoplay%%&highlight=20A8E1&info=0&logo=0&related=0&startscreen=html&html=1\" allowfullscreen></iframe>', 'embed', '1', '0'),
(6, 'metacafe', '/metacafe\\.com/i', 'http://www.metacafe.com/watch/[VIDEO ID]/video_title_here/', 0, '1', '1', '<embed src=\"//www.metacafe.com/fplayer/%%yt_id%%/video.swf\" width=\"%%player_w%%\" height=\"%%player_h%%\" wmode=\"%%player_wmode%%\" pluginspage=\"//www.macromedia.com/go/getflashplayer\" type=\"application/x-shockwave-flash\" allowFullScreen=\"true\" allowScriptAccess=\"always\" name=\"Metacafe_%%yt_id%%\"> \r\n</embed>', 'flvplayer', '0', '0'),
(7, 'myspace', '/myspace\\.com/i', 'http://www.myspace.com/video/channel/video-title/123456781', 0, '1', '1', '<object width=\"%%player_w%%\" height=\"%%player_h%%\">\r\n <param name=\"allowFullScreen\" value=\"true\"/>\r\n <param name=\"wmode\" value=\"%%player_wmode%%\"/>\r\n <param name=\"movie\" value=\"//mediaservices.myspace.com/services/media/embed.aspx/m=%%yt_id%%,t=1,mt=video\"/>\r\n <embed src=\"//mediaservices.myspace.com/services/media/embed.aspx/m=%%yt_id%%,t=1,mt=video\" width=\"%%player_w%%\" height=\"%%player_h%%\" allowFullScreen=\"true\" type=\"application/x-shockwave-flash\" wmode=\"%%player_wmode%%\"></embed>\r\n</object>', 'embed', '0', '0'),
(9, 'veoh', '/veoh\\.com/i', 'http://www.veoh.com/collection/Artist-or-Group-Name/watch/[VIDEO ID]', 0, '0', '1', '<object width=\"%%player_w%%\" height=\"%%player_h%%\" id=\"veohFlashPlayer\" name=\"veohFlashPlayer\">\r\n <param name=\"movie\" value=\"//www.veoh.com/static/swf/webplayer/WebPlayer.swf?permalinkId=%%yt_id%%&player=videodetailsembedded&videoAutoPlay=%%player_autoplay%%&id=anonymous\"></param>\r\n <param name=\"allowFullScreen\" value=\"true\"></param>\r\n <param name=\"wmode\" value=\"%%player_wmode%%\"></param>\r\n <param name=\"allowscriptaccess\" value=\"always\"></param>\r\n <embed src=\"//www.veoh.com/static/swf/webplayer/WebPlayer.swf?permalinkId=%%yt_id%%&player=videodetailsembedded&videoAutoPlay=%%player_autoplay%%&id=anonymous\" type=\"application/x-shockwave-flash\" allowscriptaccess=\"always\" allowfullscreen=\"true\" width=\"%%player_w%%\" height=\"%%player_h%%\" id=\"veohFlashPlayerEmbed\" name=\"veohFlashPlayerEmbed\" wmode=\"%%player_wmode%%\"></embed>\r\n</object>', 'embed', '0', '0'),
(10, 'break', '/break\\.com/i', 'http://www.break.com/index/video-title-here.html', 0, '1', '1', '<object width=\"%%player_w%%\" height=\"%%player_h%%\">\r\n <param name=\"movie\" value=\"//embed.break.com/%%yt_id%%\"></param>\r\n <param name=\"wmode\" value=\"%%player_wmode%%\"></param>\r\n <param name=\"allowScriptAccess\" value=\"always\"></param>\r\n <embed src=\"//embed.break.com/%%yt_id%%\" type=\"application/x-shockwave-flash\" allowScriptAccess=\"always\" wmode=\"%%player_wmode%%\" width=\"%%player_w%%\" height=\"%%player_h%%\"></embed>\r\n</object>', 'flvplayer', '0', '0'),
(11, 'myvideo', '/myvideo\\.de/i', 'http://www.myvideo.de/watch/[VIDEO ID]/Video_title_here/', 0, '1', '1', '<object width=\"%%player_w%%\" height=\"%%player_h%%\">\r\n <param name=\"movie\" value=\"//www.myvideo.de/movie/%%yt_id%%\"></param>\r\n <param name=\"AllowFullscreen\" value=\"true\"></param>\r\n <param name=\"wmode\" value=\"%%player_wmode%%\"></param>\r\n <param name=\"AllowScriptAccess\" value=\"always\"></param>\r\n <embed src=\"//www.myvideo.de/movie/%%yt_id%%\" width=\"%%player_w%%\" height=\"%%player_h%%\" type=\"application/x-shockwave-flash\" allowscriptaccess=\"always\" allowfullscreen=\"true\" wmode=\"%%player_wmode%%\"></embed>\r\n</object>', 'flvplayer', '0', '0'),
(71, 'nhaccuatui', '/nhaccuatui\\.com/i', 'http://www.nhaccuatui.com/mv4u/xem-clip/cjidlr07OG3N/phai-lam-the-nao-wanbi-tuan-anh.html', 0, '0', '1', '<object width=\"%%player_w%%\" height=\"%%player_h%%\">\r\n <param name=\"movie\" value=\"%%url_flv%%\" />\r\n <param name=\"quality\" value=\"high\" />\r\n <param name=\"wmode\" value=\"%%player_wmode%%\" />\r\n <param name=\"allowscriptaccess\" value=\"always\" />\r\n <embed src=\"%%url_flv%%\" allowscriptaccess=\"always\" quality=\"high\" wmode=\"%%player_wmode%%\" type=\"application/x-shockwave-flash\" width=\"%%player_w%%\" height=\"%%player_h%%\">\r\n </embed>\r\n</object>', 'embed', '0', '0'),
(72, 'kure', '/kure\\.tv/i', 'http://www.kure.tv/otomobil/494-surucu/bmw-z4-test-surusu/151-Bolum/87652/', 0, '0', '1', '<iframe width=\"%%player_w%%\" height=\"%%player_h%%\" src=\"//www.kure.tv/VideoEmbed?ID=%%yt_id%%\" hspace=\"0\" vspace=\"0\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\"></iframe>', 'embed', '0', '0'),
(43, 'windows media player', '/-(.*?)\\.(wmv|asf|wma)/i', 'http://www.example.com/video.wmv', 0, '0', '1', '<object id=\"wmv\" width=\"%%player_w%%\" height=\"%%player_h%%\" classid=\"CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6\" type=\"application/x-oleobject\">\r\n<param name=\"URL\" value=\"%%url_flv%%\">\r\n<param name=\"AutoStart\" value=\"true\">\r\n<param name=\"ShowControls\" value=\"true\">\r\n<param name=\"ShowStatusBar\" value=\"false\">\r\n<param name=\"ShowDisplay\" value=\"false\">\r\n<param name=\"EnableFullScreenControls\" value=\"true\">\r\n<param name=\"FullScreenMode\" value=\"true\">\r\n<param name=\"wmode\" value=\"%%player_wmode%%\"></param> \r\n<embed type=\"application/x-mplayer2\" src=\"%%url_flv%%\" name=\"MediaPlayer\"\r\nwidth=\"%%player_w%%\" height=\"%%player_h%%\" ShowControls=\"1\" ShowStatusBar=\"0\" ShowDisplay=\"0\" AutoStart=\"%%player_autoplay%%\" EnableFullScreenControls=\"1\" FullScreenMode=\"1\" wmode=\"%%player_wmode%%\"></embed>\r\n</object>', 'embed', '0', '0'),
(69, 'veevr', '/veevr\\.com/i', 'http://veevr.com/videos/videoID', 0, '0', '1', '<iframe src=\"//veevr.com/embed/%%yt_id%%?w=%%player_w%%&h=%%player_h%%\" width=\"%%player_w%%\" height=\"%%player_h%%\" scrolling=\"no\" frameborder=\"0\"></iframe>', 'embed', '0', '0'),
(70, '123video.nl', '/123video\\.nl/i', 'http://www.123video.nl/playvideos.asp?MovieID=1234567', 0, '0', '1', '<object classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\" codebase=\"//fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0\" width=\"%%player_w%%\" height=\"%%player_h%%\">\r\n <param name=\"movie\" value=\"//www.123video.nl/123video_emb.swf?mediaSrc=%%yt_id%%\"></param>\r\n <param name=\"quality\" value=\"high\"></param>\r\n <param name=\"allowScriptAccess\" value=\"always\"></param>\r\n <param name=\"allowFullScreen\" value=\"true\"></param>\r\n <embed src=\"//www.123video.nl/123video_emb.swf?mediaSrc=%%yt_id%%\" quality=\"high\" width=\"%%player_w%%\" height=\"%%player_h%%\" allowfullscreen=\"true\" type=\"application/x-shockwave-flash\" allowscriptaccess=\"always\" pluginspage=\"//www.macromedia.com/go/getflashplayer\" />\r\n</object>', 'embed', '0', '0'),
(16, 'vimeo', '/vimeo\\.com/i', 'http://vimeo.com/[VIDEO ID]', 0, '1', '1', '<iframe src=\"//player.vimeo.com/video/%%yt_id%%?color=20A8E1&autoplay=%%player_autoplay%%&title=0&byline=0&badge=0\" width=\"100%\" height=\"%%player_h%%\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', 'flvplayer', '1', '0'),
(17, 'trilulilu', '/trilulilu\\.ro/i', 'http://www.trilulilu.ro/user/[VIDEO ID]', 0, '1', '1', '<object width=\"%%player_w%%\" height=\"%%player_h%%\"> <param name=\"wmode\" value=\"%%player_wmode%%\"></param> <param name=\"movie\" value=\"//embed.trilulilu.ro/video/%%username%%/%%yt_id%%.swf\"></param> <param name=\"allowFullScreen\" value=\"true\"></param> <param name=\"allowscriptaccess\" value=\"always\"></param> <param name=\"flashvars\" value=\"username=%%username%%&hash=%%yt_id%%&color=0x%%player_bgcolor%%\"></param> <embed src=\"//embed.trilulilu.ro/video/%%username%%/%%yt_id%%.swf\" type=\"application/x-shockwave-flash\" allowscriptaccess=\"always\" allowfullscreen=\"true\" width=\"%%player_w%%\" height=\"%%player_h%%\" wmode=\"%%player_wmode%%\" flashvars=\"username=%%username%%&hash=%%yt_id%%&color=0x%%player_bgcolor%%\"></embed> </object>', 'flvplayer', '0', '0'),
(18, 'bliptv', '/blip\\.tv/i', 'http://blip.tv/user/video-title-[VIDEO ID]', 0, '1', '1', '<embed src=\"//blip.tv/play/%%yt_id%%\" type=\"application/x-shockwave-flash\" width=\"%%player_w%%\" height=\"%%player_h%%\" allowscriptaccess=\"always\" allowfullscreen=\"true\" wmode=\"%%player_wmode%%\"></embed> ', 'embed', '0', '0'),
(19, 'sevenload', '/sevenload\\.com/i', 'http://en.sevenload.com/videos/[VIDEO ID]-Video-title-here', 0, '1', '1', '<object type=\"application/x-shockwave-flash\" data=\"//static.sevenload.com/swf/player/player.swf?configPath=http%3A%2F%2Fflash.sevenload.com%2Fplayer%3FportalId%3Den%26autoplay%3D%%player_autoplay%%%26mute%3D0%26itemId%3D%%yt_id%%&locale=en_US&autoplay=%%player_autoplay%%\" width=\"%%player_w%%\" height=\"%%player_h%%\"> <param name=\"allowFullscreen\" value=\"true\" /> <param name=\"allowScriptAccess\" value=\"always\" /> <param name=\"movie\" value=\"//static.sevenload.com/swf/player/player.swf?configPath=http%3A%2F%2Fflash.sevenload.com%2Fplayer%3FportalId%3Den%26autoplay%3D%%player_autoplay%%%26mute%3D0%26itemId%3D%%yt_id%%&locale=en_US&autoplay=%%player_autoplay%%\" />', 'flvplayer', '0', '0'),
(20, 'funnyordie', '/funnyordie\\.com/i', 'http://www.funnyordie.com/videos/[VIDEO ID]', 0, '1', '1', '<object width=\"%%player_w%%\" height=\"%%player_h%%\" classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\" id=\"ordie_player_%%yt_id%%\">\r\n <param name=\"wmode\" value=\"%%player_wmode%%\"></param>\r\n <param name=\"movie\" value=\"//player.ordienetworks.com/flash/fodplayer.swf\" />\r\n <param name=\"flashvars\" value=\"key=%%yt_id%%\" />\r\n <param name=\"allowfullscreen\" value=\"true\" />\r\n <param name=\"allowscriptaccess\" value=\"always\"></param>\r\n <embed width=\"%%player_w%%\" height=\"%%player_h%%\" flashvars=\"key=%%yt_id%%\" allowfullscreen=\"true\" allowscriptaccess=\"always\" quality=\"high\" src=\"//player.ordienetworks.com/flash/fodplayer.swf\" name=\"ordie_player_%%yt_id%%\" type=\"application/x-shockwave-flash\" wmode=\"%%player_wmode%%\"></embed>\r\n</object>', 'flvplayer', '0', '0'),
(68, 'clip.vn', '/clip\\.vn//i', 'http://clip.vn/watch/Video-title,videoID', 0, '0', '1', '<object width=\"%%player_w%%\" height=\"%%player_h%%\">\r\n <param name=\"movie\" value=\"//clip.vn/w/%%yt_id%%\"/>\r\n <param name=\"allowFullScreen\" value=\"true\"/>\r\n <param name=\"allowScriptAccess\" value=\"always\"/>\r\n <embed type=\"application/x-shockwave-flash\" allowFullScreen=\"true\" allowScriptAccess=\"always\" width=\"%%player_w%%\" height=\"%%player_h%%\" src=\"//clip.vn/w/%%yt_id%%\"></embed>\r\n</object>', 'embed', '0', '0'),
(23, 'filebox', '/filebox\\.ro/i', 'http://www.filebox.ro/video/play_video.php?key=[VIDEO ID]', 0, '0', '1', '<object width=\"%%player_w%%\" height=\"%%player_h%%\">\r\n <embed type=\"application/x-shockwave-flash\" src=\"//www.filebox.ro/video/FileboxPlayer_provider.php\" style=\"\" id=\"mediaplayer\" name=\"mediaplayer\" quality=\"high\" allowfullscreen=\"true\" wmode=\"%%player_wmode%%\" flashvars=\"source_script=//videoserver325.filebox.ro/get_video.php&key=%%yt_id%%&autostart=%%player_autoplay%%&getLink=//fbx.ro/v/%%yt_id%%&splash=//imageserver.filebox.ro/get_splash.php?key=%%yt_id%%&link=\" height=\"%%player_h%%\" width=\"%%player_w%%\">\r\n</object>', 'embed', '0', '0'),
(24, 'youku', '/youku\\.com/i', 'http://v.youku.com/v_show/id_[VIDEO ID].html', 0, '0', '1', '<embed src=\"//player.youku.com/player.php/sid/%%yt_id%%=/v.swf\" quality=\"high\" width=\"%%player_w%%\" height=\"%%player_h%%\" align=\"middle\" allowScriptAccess=\"sameDomain\" type=\"application/x-shockwave-flash\" wmode=\"%%player_wmode%%\"></embed>', 'embed', '0', '0'),
(67, 'tudou', '/tudou\\.com/i', 'http://www.tudou.com/programs/view/video-id/', 0, '0', '1', '<object width=\"%%player_w%%\" height=\"%%player_h%%\">\r\n <param name=\"movie\" value=\"//www.tudou.com/v/%%yt_id%%/v.swf\"></param>\r\n <param value=\"true\" name=\"allowfullscreen\"></param>\r\n <param value=\"always\" name=\"allowscriptaccess\"></param>\r\n <param value=\"opaque\" name=\"%%player_wmode%%\"></param>\r\n <embed src=\"//www.tudou.com/v/%%yt_id%%/v.swf\" type=\"application/x-shockwave-flash\" allowscriptaccess=\"always\" allowfullscreen=\"true\" wmode=\"%%player_wmode%%\" width=\"%%player_w%%\" height=\"%%player_h%%\"></embed>\r\n</object>', 'embed', '0', '0'),
(66, 'publicdomainflicks', '/publicdomainflicks\\.com/i', 'http://www.publicdomainflicks.com/0123-video-title/', 0, '1', '1', '<object width=\"%%player_w%%\" height=\"%%player_h%%\">\r\n <param name=\"movie\" value=\"//www.publicdomainflicks.com/flvplayer.swf\"></param>\r\n <param name=\"wmode\" value=\"%%player_wmode%%\"></param>\r\n <param name=\"allowFullScreen\" value=\"true\"></param>\r\n <param name=\"allowScriptAccess\" value=\"always\"></param>\r\n <param name=\"flashvars\" value=\"file=%%url_flv%%&autostart=%%player_autoplay%%&volume=80\"></param>\r\n <embed src=\"//www.publicdomainflicks.com/flvplayer.swf\" width=\"%%player_w%%\" height=\"%%player_h%%\" allowscriptaccess=\"always\" allowfullscreen=\"true\" flashvars=\"file=%%url_flv%%&autostart=%%player_autoplay%%&volume=80\"/>\r\n</object>', 'flvplayer', '0', '0'),
(30, 'liveleak', '/liveleak\\.com/i', 'http://www.liveleak.com/view?i=[VIDEO ID]', 0, '0', '1', '<iframe width=\"%%player_w%%\" height=\"%%player_h%%\" src=\"//www.liveleak.com/ll_embed?f=%%yt_id%%\" frameborder=\"0\" allowfullscreen></iframe>', 'embed', '0', '0'),
(32, 'supervideo', '/balsas\\.lt/i', 'http://video.balsas.lt/video/[VIDEO ID]', 0, '0', '1', '<object classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\" codebase=\"//download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0\" width=\"%%player_w%%\" height=\"%%player_h%%\">\r\n<param name=\"allowScriptAccess\" value=\"always\" />\r\n<param name=\"allowFullScreen\" value=\"true\" />\r\n<param name=\"movie\" value=\"//video.balsas.lt/pimg/Site/Flash/player.swf?configFile=//video.balsas.lt/Videos/getConfig/%%yt_id%%\" />\r\n<param name=\"quality\" value=\"high\" />\r\n<param name=\"bgcolor\" value=\"#%%player_bgcolor%%\" />\r\n<param name=\"flashvars\" value=\"configFile=//video.balsas.lt/Videos/getConfig/%%yt_id%%\"/>\r\n<embed src=\"//video.balsas.lt/pimg/Site/Flash/player.swf?configFile=//video.balsas.lt/Videos/getConfig/%%yt_id%%\" quality=\"high\" bgcolor=\"#%%player_bgcolor%%\" width=\"%%player_w%%\" height=\"%%player_h%%\" allowScriptAccess=\"always\" allowFullScreen=\"true\" type=\"application/x-shockwave-flash\" pluginspage=\"//www.macromedia.com/go/getflashplayer\" /></object>\r\n', 'embed', '0', '0'),
(65, 'peteava', '/peteava\\.ro/i', 'http://www.peteava.ro/id-123456-video-title', 0, '0', '1', '<object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" width=\"%%player_w%%\" height=\"%%player_h%%\" id=\"swf_player_id_for_ie_who_sucks\">\r\n <param name=\"movie\" value=\"//www.peteava.ro/static/swf/player.swf\">\r\n <param name=\"allowfullscreen\" value=\"true\">\r\n <param name=\"allowscriptaccess\" value=\"always\">\r\n <param name=\"menu\" value=\"false\">\r\n <param name=\"flashvars\" value=\"streamer=//content.peteava.ro/stream.php&file=%%yt_id%%_standard.mp4&image=//storage2.peteava.ro/serve/thumbnail/%%yt_id%%/playerstandard&hd_file=&hd_image=//storage2.peteava.ro/serve/thumbnail/%%yt_id%%/playerhigh&autostart=%%player_autoplay%%\">\r\n <embed src=\"//www.peteava.ro/static/swf/player.swf\" id=\"__ptv_pl_%%yt_id%%_%%player_w%%_%%player_h%%__\" name=\"__ptv_pl_%%yt_id%%_%%player_w%%_%%player_h%%__\" width=\"%%player_w%%\" height=\"%%player_h%%\" allowscriptaccess=\"always\" menu=\"false\" allowfullscreen=\"true\" \r\n flashvars=\"streamer=//content.peteava.ro/stream.php&file=%%yt_id%%_standard.mp4&image=//storage2.peteava.ro/serve/thumbnail/%%yt_id%%/playerstandard&hd_file=&hd_image=//storage2.peteava.ro/serve/thumbnail/%%yt_id%%/playerhigh&autostart=%%player_autoplay%%\"/>\r\n</object>', 'embed', '0', '0'),
(35, 'musicme', '/musicme\\.com/i', 'http://www.musicme.com/#/Patrick-Bruel/videos/Epk-Patrick-Bruel-[VIDEO ID].html', 0, '0', '1', '<object classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\" width=\"%%player_w%%\" height=\"%%player_h%%\" id=\"musicmevideo%%yt_id%%\">\r\n <param name=\"movie\" value=\"//www.musicme.com/_share/vplayer.swf?cb=%%yt_id%%\"></param>\r\n <param name=\"wmode\" value=\"%%player_wmode%%\"></param>\r\n <param name=\"allowScriptAccess\" value=\"always\">\r\n <param name=\"bgcolor\" value=\"#000000\" />\r\n <embed src=\"//www.musicme.com/_share/vplayer.swf?cb=%%yt_id%%\" type=\"application/x-shockwave-flash\" width=\"%%player_w%%\" height=\"%%player_h%%\" bgcolor=\"#000000\" allowScriptAccess=\"always\" wmode=\"%%player_wmode%%\"></embed>\r\n</object>', 'embed', '0', '0'),
(39, 'spike', '/spike\\.com/i', 'http://www.spike.com/video/cinemassacre-top-10/[VIDEO ID]', 0, '0', '1', '<embed width=\"%%player_w%%\" height=\"%%player_h%%\" src=\"//www.spike.com/efp\" quality=\"high\" bgcolor=\"000000\" name=\"efp\" align=\"middle\" type=\"application/x-shockwave-flash\" pluginspage=\"//www.macromedia.com/go/getflashplayer\" flashvars=\"flvbaseclip=%%yt_id%%\" allowfullscreen=\"true\" wmode=\"%%player_wmode%%\">\r\n</embed> ', 'embed', '0', '0'),
(64, 'videozer', '/videozer\\.com/i', 'http://www.videozer.com/video/abcde', 0, '0', '1', '<object id=\"player\" width=\"%%player_w%%\" height=\"%%player_h%%\" classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\">\r\n <param name=\"movie\" value=\"//www.videozer.com/embed/%%yt_id%%\"></param>\r\n <param name=\"allowFullScreen\" value=\"true\"></param>\r\n <param name=\"allowscriptaccess\" value=\"always\"></param>\r\n <embed src=\"//www.videozer.com/embed/%%yt_id%%\" width=\"%%player_w%%\" height=\"%%player_h%%\" type=\"application/x-shockwave-flash\" allowscriptaccess=\"always\" allowfullscreen=\"true\"></embed>\r\n</object>', 'embed', '0', '0'),
(42, 'musicplayon', '/musicplayon\\.com/i', 'http://en.musicplayon.com/play?v=[VIDEO ID]Video_Title', 0, '0', '1', '<object width=\"%%player_w%%\" height=\"%%player_h%%\" classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" codebase=\"//download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,15,0\">\r\n <param name=\"wmode\" value=\"%%player_wmode%%\"></param>\r\n <param name=\"movie\" value=\"//en.musicplayon.com/embed?VID=%%yt_id%%&autoPlay=N&hideLeftPanel=Y&bgColor=0x232323&activeColor=0x%%player_bgcolor%%&inactiveColor=0x3C3C3C&titleColor=0x584596&textsColor=0x999999&selectedColor=0x0F0F0F&btnColor=0x000000&rnd=288950\" />\r\n <param name=\"quality\" value=\"high\" />\r\n <param name=\"allowfullscreen\" value=\"true\" />\r\n <param name=\"allowscriptaccess\" value=\"always\" />\r\n <embed width=\"%%player_w%%\" height=\"%%player_h%%\" src=\"//en.musicplayon.com/embed?VID=%%yt_id%%&autoPlay=N&hideLeftPanel=Y&bgColor=0x232323&activeColor=0x%%player_bgcolor%%&inactiveColor=0x3C3C3C&titleColor=0x584596&textsColor=0x999999&selectedColor=0x0F0F0F&btnColor=0x000000&rnd=288950\" quality=\"high\" allowfullscreen=\"true\" allowscriptaccess=\"always\" pluginspage=\"//www.macromedia.com/go/getflashplayer\" type=\"application/x-shockwave-flash\" wmode=\"%%player_wmode%%\"></embed>\r\n</object>', 'embed', '0', '0'),
(44, 'quicktime', '/-(.*?)\\.(mov|m2a|m2v|3gp|3g2|m4a|m4v)/i', 'http://www.example.com/video.mov', 0, '0', '1', '<object width=\"%%player_w%%\" height=\"%%player_h%%\" classid=\"clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B\" codebase= \"//www.apple.com/qtactivex/qtplugin.cab\">\r\n <param name=\"src\" value=\"%%url_flv%%\" />\r\n <param name=\"autoplay\" value=\"false\" />\r\n <param name=\"controller\" value=\"true\" />\r\n <param name=\"scale\" value=\"tofit\" />\r\n <param name=\"wmode\" value=\"%%player_wmode%%\"></param>\r\n <embed src=\"%%url_flv%%\" width=\"%%player_w%%\" height=\"%%player_h%%\" scale=\"tofit\" wmode=\"%%player_wmode%%\" autoplay=\"false\" controller=\"true\" type=\"video/quicktime\" pluginspage=\"//www.apple.com/quicktime/download/\"></embed>\r\n</object>', 'embed', '0', '0'),
(45, 'yahoomusic', '/music\\.yahoo\\.com/i', 'http://new.music.yahoo.com/videos/LadyGaGa/Bad-Romance--218606963', 0, '0', '1', '<object width=\"%%player_w%%\" id=\"uvp_fop\" height=\"%%player_h%%\" allowFullScreen=\"true\">\r\n <param name=\"movie\" value=\"//d.yimg.com/m/up/fop/embedflv/swf/fop.swf\"/>\r\n <param name=\"flashVars\" value=\"%%url_flv%%\"/>\r\n <param name=\"wmode\" value=\"%%player_wmode%%\"/>\r\n <embed width=\"%%player_w%%\" id=\"uvp_fop\" height=\"%%player_h%%\" allowFullScreen=\"true\" src=\"//d.yimg.com/m/up/fop/embedflv/swf/fop.swf\" type=\"application/x-shockwave-flash\" flashvars=\"%%url_flv%%\" />\r\n</object>', 'embed', '0', '0'),
(47, '5min', '/5min\\.com\\/video/i', 'http://www.5min.com/Video/Video-Title-[VIDEO ID]', 0, '1', '1', '<object width=\"%%player_w%%\" height=\"%%player_h%%\" id=\"FiveminPlayer\" classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\">\r\n <param name=\"allowfullscreen\" value=\"true\"/>\r\n <param name=\"allowScriptAccess\" value=\"always\"/>\r\n <param name=\"movie\" value=\"//www.5min.com/Embeded/%%yt_id%%/\"/>\r\n <embed name=\"FiveminPlayer\" src=\"//www.5min.com/Embeded/%%yt_id%%/\" type=\"application/x-shockwave-flash\" width=\"%%player_w%%\" height=\"%%player_h%%\" allowfullscreen=\"true\" allowScriptAccess=\"always\"></embed>\r\n</object>', 'embed', '0', '0'),
(63, 'vplay', '/vplay\\.ro/i', 'http://vplay.ro/watch/abcdef/', 0, '0', '1', '<object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" codebase=\"//download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0\" width=\"%%player_w%%\" height=\"%%player_h%%\">\r\n <param name=\"movie\" value=\"//i.vplay.ro/f/embed.swf?key=%%yt_id%%\">\r\n <param name=\"allowfullscreen\" value=\"true\">\r\n <param name=\"quality\" value=\"high\">\r\n <embed src=\"//i.vplay.ro/f/embed.swf?key=%%yt_id%%\" quality=\"high\" pluginspage=\"//www.macromedia.com/go/getflashplayer\" type=\"application/x-shockwave-flash\" width=\"%%player_w%%\" height=\"%%player_h%%\" allowfullscreen=\"true\" ></embed>\r\n</object>', 'embed', '0', '0'),
(51, 'smotri', '/smotri\\.com\\/video/i', 'http://smotri.com/video/view/?id=[VIDEO ID]', 0, '0', '1', '<object classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\" width=\"%%player_w%%\" height=\"%%player_h%%\">\r\n <param name=\"movie\" value=\"//pics.smotri.com/scrubber_custom8.swf?file=%%yt_id%%&bufferTime=3&autoStart=false&str_lang=eng&xmlsource=http%3A%2F%2Fpics.smotri.com%2Fcskins%2Fblue%2Fskin_color_black.xml&xmldatasource=http%3A%2F%2Fpics.smotri.com%2Fskin_ng.xml\" />\r\n <param name=\"allowScriptAccess\" value=\"always\" />\r\n <param name=\"allowFullScreen\" value=\"true\" />\r\n <embed src=\"//pics.smotri.com/scrubber_custom8.swf?file=%%yt_id%%&bufferTime=3&autoStart=false&str_lang=eng&xmlsource=http%3A%2F%2Fpics.smotri.com%2Fcskins%2Fblue%2Fskin_color_black.xml&xmldatasource=http%3A%2F%2Fpics.smotri.com%2Fskin_ng.xml\" quality=\"high\" allowscriptaccess=\"always\" allowfullscreen=\"true\" wmode=\"window\" width=\"%%player_w%%\" height=\"%%player_h%%\" type=\"application/x-shockwave-flash\"></embed>\r\n </object>', 'embed', '0', '0'),
(52, 'divx', '/(.*?)\\.(avi|divx|mkv)/i', 'http://www.example.com/video.avi', 0, '0', '1', '<object classid=\"clsid:67DABFBF-D0AB-41fa-9C46-CC0F21721616\" width=\"%%player_w%%\" height=\"%%player_h%%\" codebase=\"//go.divx.com/plugin/DivXBrowserPlugin.cab\"> \n<param name=\"src\" value=\"%%url_flv%%\" />\n<param name=\"autoPlay\" value=\"%%player_autoplay%%\" />\n<param name=\"bannerEnabled\" value=\"false\" />\n<param name=\"previewImage\" value=\"%%yt_thumb%%\" />\n<embed type=\"video/divx\" src=\"%%url_flv%%\" autoPlay=\"%%player_autoplay%%\" previewImage=\"%%yt_thumb%%\" bannerEnabled=\"false\" width=\"%%player_w%%\" height=\"%%player_h%%\" pluginspage=\"//go.divx.com/plugin/download/\"></embed> \n</object>', 'embed', '0', '0'),
(53, 'vbox7', '/vbox7\\.com\\/play/i', 'http://vbox7.com/play:[VIDEO ID]', 0, '1', '1', '<iframe width=\"%%player_w%%\" height=\"%%player_h%%\" src=\"//vbox7.com/emb/external.php?vid=%%yt_id%%\" frameborder=\"0\" allowfullscreen></iframe>', 'flvplayer', '0', '0'),
(77, 'cloudy.ec', '/cloudy\\.ec/i', 'http://www.cloudy.ec/v/[VIDEO ID]', 0, '0', '1', '<iframe width=\"%%player_w%%\" height=\"%%player_h%%\" src=\"//www.cloudy.ec/embed.php?id=%%yt_id%%\" frameborder=\"0\" border=\"0\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"no\" allowfullscreen></iframe>', 'embed', '0', '0'),
(54, 'livestream', '/livestream\\.com/i', 'http://www.livestream.com/channel_name', 0, '0', '1', '<object width=\"%%player_w%%\" height=\"%%player_h%%\" id=\"lsplayer\" classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\"><param name=\"movie\" value=\"%%url_flv%%&amp;autoPlay=false\"></param><param name=\"allowScriptAccess\" value=\"always\"></param><param name=\"allowFullScreen\" value=\"true\"></param><embed name=\"lsplayer\" src=\"%%url_flv%%&amp;autoPlay=false\" width=\"%%player_w%%\" height=\"%%player_h%%\" allowScriptAccess=\"always\" allowFullScreen=\"true\" type=\"application/x-shockwave-flash\"></embed></object>', 'embed', '0', '0'),
(56, 'ustream', '/ustream\\.tv/i', 'http://www.ustream.tv/channel/user', 0, '0', '1', '<object type=\"application/x-shockwave-flash\" width=\"%%player_w%%\" height=\"%%player_h%%\" data=\"//www.ustream.tv/flash/viewer.swf\">\r\n <param name=\"flashvars\" value=\"autoplay=true&amp;%%yt_id%%&amp;v3=true&amp;locale=en_US&amp;referrer=unknown&amp;enablejsapi=true\"/>\r\n <param name=\"allowfullscreen\" value=\"true\"/>\r\n <param name=\"allowscriptaccess\" value=\"always\"/>\r\n <param name=\"movie\" value=\"%%url_flv%%\"/>\r\n <embed flashvars=\"autoplay=true&amp;%%yt_id%%&amp;v3=true&amp;locale=en_US&amp;referrer=unknown&amp;enablejsapi=true\" src=\"//www.ustream.tv/flash/viewer.swf\" width=\"%%player_w%%\" height=\"%%player_h%%\" allowfullscreen=\"true\" allowscriptaccess=\"always\" type=\"application/x-shockwave-flash\" />\r\n </object>', 'embed', '0', '0'),
(57, 'mp3', '/(.*?)\\.mp3/i', 'http://www.example.com/file.mp3', 0, '1', '1', '<object width=\"%%player_w%%\" height=\"%%player_h%%\" classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" codebase=\"//download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0\">\r\n <param name=\"scale\" value=\"noscale\" />\r\n <param name=\"allowFullScreen\" value=\"true\" />\r\n <param name=\"allowScriptAccess\" value=\"always\" />\r\n <param name=\"allowNetworking\" value=\"all\" />\r\n <param name=\"bgcolor\" value=\"#%%player_bgcolor%%\" />\r\n <param name=\"wmode\" value=\"%%player_wmode%%\" />\r\n <param name=\"movie\" value=\"%%player_url%%\" />\r\n <param name=\"flashVars\" value=\"&plugins=revolt-1&file=%%url_flv%%&type=sound&image=%%yt_thumb%%&backcolor=%%player_bgcolor%%&frontcolor=FFFFFF&autostart=%%player_autoplay%%&screencolor=000000\" />\r\n <embed src=\"%%player_url%%\" width=\"%%player_w%%\" height=\"%%player_h%%\" scale=\"noscale\" bgcolor=\"#%%player_bgcolor%%\" type=\"application/x-shockwave-flash\" allowFullScreen=\"true\" allowScriptAccess=\"always\" wmode=\"%%player_wmode%%\" flashvars=\"&plugins=revolt-1&file=%%url_flv%%&type=sound&image=%%yt_thumb%%&backcolor=%%player_bgcolor%%&frontcolor=FFFFFF&autostart=%%player_autoplay%%&screencolor=000000\"></embed>\r\n</object>', 'flvplayer', '0', '0'),
(58, 'mynet', '/video\\.mynet\\.com/i', 'http://video.mynet.com/username/video-title/video-id/', 0, '1', '1', '<object width=\"%%player_w%%\" height=\"%%player_h%%\">\r\n <param name=\"allowfullscreen\" value=\"true\" />\r\n <param name=\"allowscriptaccess\" value=\"always\" />\r\n <param name=\"autoplay\" value=\"%%player_autoplay%%\" />\r\n <param name=\"wmode\" value=\"%%player_wmode%%\" />\r\n <param name=\"movie\" value=\"//video.mynet.com/username/video-title/%%yt_id%%.swf\" />\r\n <embed src=\"//video.mynet.com/username/video-title/%%yt_id%%.swf\" type=\"application/x-shockwave-flash\" wmode=\"%%player_wmode%%\" allowscriptaccess=\"always\" allowfullscreen=\"true\" width=\"%%player_w%%\" height=\"%%player_h%%\" autoplay=\"%%player_autoplay%%\"></embed>\r\n</object>', 'flvplayer', '0', '0'),
(59, 'vidivodo', '/vidivodo\\.com/i', 'http://www.vidivodo.com/video-id/video-title', 0, '0', '1', '<object width=\"%%player_w%%\" height=\"%%player_h%%\">\r\n <param name=\"movie\" value=\"%%url_flv%%\" />\r\n <param name=\"allowfullscreen\" value=\"true\" />\r\n <param name=\"allowscriptaccess\" value=\"always\" />\r\n <param name=\"autoplay\" value=\"%%player_autoplay%%\" />\r\n <param name=\"wmode\" value=\"%%player_wmode%%\" />\r\n <param name=\"bgcolor\" value=\"#%%player_bgcolor%%\" />\r\n <embed src=\"%%url_flv%%\" type=\"application/x-shockwave-flash\" wmode=\"%%player_wmode%%\" allowscriptaccess=\"always\" allowfullscreen=\"true\" width=\"%%player_w%%\" height=\"%%player_h%%\" autoplay=\"%%player_autoplay%%\" bgcolor=\"#%%player_bgcolor%%\"></embed>\r\n</object>', 'embed', '0', '0'),
(61, 'izlesene', '/izlesene\\.com/i', 'http://www.izlesene.com/video/video-title/video-id', 0, '0', '1', '<object width=\"%%player_w%%\" height=\"%%player_h%%\">\r\n <param name=\"allowfullscreen\" value=\"true\" />\r\n <param name=\"allowscriptaccess\" value=\"always\" />\r\n <param name=\"wmode\" value=\"%%player_wmode%%\" />\r\n <param name=\"bgcolor\" value=\"#%%player_bgcolor%%\" />\r\n <param name=\"movie\" value=\"//www.izlesene.com/embedplayer.swf?video=%%yt_id%%\" />\r\n <embed src=\"//www.izlesene.com/embedplayer.swf?video=%%yt_id%%\" wmode=\"%%player_wmode%%\" bgcolor=\"#%%player_bgcolor%%\" allowfullscreen=\"true\" allowscriptaccess=\"always\" menu=\"false\" width=\"%%player_w%%\" height=\"%%player_h%%\" type=\"application/x-shockwave-flash\"></embed>\r\n</object>', 'embed', '0', '0'),
(62, 'videobb', '/videobb\\./i', 'http://www.videobb.com/video/video-id', 0, '0', '1', '<object id=\"player\" width=\"%%player_w%%\" height=\"%%player_h%%\" classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\">\r\n <param name=\"movie\" value=\"%%url_flv%%\"></param>\r\n <param name=\"allowFullScreen\" value=\"true\" ></param>\r\n <param name=\"allowscriptaccess\" value=\"always\"></param>\r\n <param name=\"wmode\" value=\"%%player_wmode%%\" />\r\n <embed src=\"%%url_flv%%\" wmode=\"%%player_wmode%%\" type=\"application/x-shockwave-flash\" allowscriptaccess=\"always\" allowfullscreen=\"true\" width=\"%%player_w%%\" height=\"%%player_h%%\"></embed>\r\n</object>', 'embed', '0', '0'),
(73, 'mail.ru', '/mail\\.ru\\/video/i', 'http://my.mail.ru/video/mail/radnovomyznakomstvy/176/254.html', 0, '0', '1', '<iframe src=\"//api.video.mail.ru/videos/embed/%%yt_id%%\" width=\"%%player_w%%\" height=\"%%player_h%%\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>', 'embed', '0', '0'),
(74, 'vk', '/vk\\.(com|ru|me)\\/video/i', 'http://vk.com/video28908630_165233143', 0, '0', '1', '<iframe src=\"//vk.com/video_ext.php?%%yt_id%%\" width=\"%%player_w%%\" height=\"%%player_h%%\" frameborder=\"0\"></iframe>', 'embed', '0', '0'),
(75, 'rutube', '/rutube\\.ru\\/video/i', 'http://rutube.ru/video/852e974534e3527f16810a7a19c418b0/', 0, '0', '1', '<iframe width=\"%%player_w%%\" height=\"%%player_h%%\" src=\"//rutube.ru/video/embed/%%yt_id%%\" frameborder=\"0\" webkitAllowFullScreen mozallowfullscreen allowfullscreen></iframe>', 'embed', '0', '0'),
(76, 'novamov', '/novamov\\.com/i', 'http://www.novamov.com/video/video-id', 0, '0', '1', '<iframe style=\"overflow: hidden; border: 0; width: %%player_w%%px; height: %%player_h%%px;\" src=\"//embed.novamov.com/embed.php?v=%%yt_id%%\" scrolling=\"no\"></iframe>', 'embed', '0', '0'),
(78, 'myvideo.ge', '/myvideo\\.ge/i', 'http://www.myvideo.ge/?video_id=[VIDEO ID]', 0, '0', '1', '<iframe width=\"%%player_w%%\" height=\"%%player_h%%\" src=\"//embed.myvideo.ge/flv_player/player.php?video_id=%%yt_id%%\" frameborder=\"0\" border=\"0\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"no\" allowfullscreen></iframe>', 'embed', '0', '0'),
(79, 'vevo', '/vevo\\.com/i', 'http://www.vevo.com/watch/[VIDEO ID]', 0, '0', '1', '<iframe width=\"%%player_w%%\" height=\"%%player_h%%\" src=\"//cache.vevo.com/assets/html/embed.html?video=%%yt_id%%&autoplay=0\" frameborder=\"0\" border=\"0\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"no\" allowfullscreen></iframe>', 'embed', '0', '0'),
(80, 'facebook', '/facebook.com/i', 'https://www.facebook.com/video.php?v=video-id', 0, '0', '1', '<iframe src=\"//www.facebook.com/video/embed?video_id=%%yt_id%%\" width=\"%%player_w%%\" height=\"%%player_h%%\" frameborder=\"0\"></iframe>', 'embed', '0', '0'),
(81, 'imgur', '/(.*?)\\imgur\\.com/i', 'http://imgur.com/[ID]', 0, '1', '1', '<blockquote class=\"imgur-embed-pub\" lang=\"en\" data-id=\"%%yt_id%%\" style=\"width:%%player_w%%px !important;max-width:%%player_w%%px !important; height:%%player_h%%px\"></blockquote><script async src=\"//s.imgur.com/min/embed.js\" charset=\"utf-8\"></script>', 'embed', '0', '0'),
(82, 'gfycat', '/gfycat\\.com/i', 'http://gfycat.com/[ID]', 0, '1', '1', '<iframe src=\"//gfycat.com/ifr/%%yt_id%%\" frameborder=\"0\" scrolling=\"no\" width=\"%%player_w%%\" height=\"%%player_h%%\" style=\"-webkit-backface-visibility: hidden;-webkit-transform: scale(1);\" ></iframe>', 'flvplayer', '0', '0'),
(83, 'googledrive', '/drive\\.google/i', 'https://drive.google.com/file/d/[VIDEO ID]/view', 0, '1', '1', '<iframe width=\"%%player_w%%\" height=\"%%player_h%%\" src=\"//drive.google.com/file/d/%%yt_id%%/preview\" frameborder=\"0\" border=\"0\" marginwidth=\"0\" marginheight=\"0\" scrolling=\"no\" allowfullscreen></iframe>', 'embed', '0', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_tags`
--

CREATE TABLE `pm_tags` (
  `tag_id` int NOT NULL,
  `uniq_id` varchar(10) NOT NULL DEFAULT '',
  `tag` varchar(200) NOT NULL DEFAULT '',
  `safe_tag` varchar(200) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `pm_tags`
--

INSERT INTO `pm_tags` (`tag_id`, `uniq_id`, `tag`, `safe_tag`) VALUES
(1, '14a4e06f8', 'hudson', 'hudson'),
(2, '14a4e06f8', 'video', 'video'),
(3, '14a4e06f8', 'against the grain', 'against-the-grain'),
(4, 'ac0266df0', 'animation', 'animation'),
(5, 'ac0266df0', 'stop-motion', 'stop-motion'),
(6, '66189809a', 'high', 'high'),
(7, '66189809a', 'high on life', 'high-on-life'),
(8, '66189809a', 'martin', 'martin'),
(9, '66189809a', 'garrix', 'garrix');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_temp`
--

CREATE TABLE `pm_temp` (
  `id` int NOT NULL,
  `url` varchar(255) NOT NULL DEFAULT '',
  `video_title` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `yt_length` mediumint UNSIGNED NOT NULL DEFAULT '0',
  `tags` varchar(255) NOT NULL DEFAULT '',
  `category` varchar(30) NOT NULL DEFAULT '',
  `username` varchar(100) NOT NULL DEFAULT '',
  `user_id` int NOT NULL DEFAULT '0',
  `added` int NOT NULL DEFAULT '0',
  `source_id` mediumint NOT NULL DEFAULT '0',
  `language` mediumint NOT NULL DEFAULT '0',
  `thumbnail` varchar(255) NOT NULL DEFAULT '',
  `yt_id` varchar(50) NOT NULL DEFAULT '',
  `url_flv` varchar(255) NOT NULL DEFAULT '',
  `mp4` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_users`
--

CREATE TABLE `pm_users` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  `name` varchar(150) NOT NULL DEFAULT '',
  `gender` varchar(10) NOT NULL DEFAULT '',
  `country` varchar(50) NOT NULL DEFAULT '',
  `reg_ip` varchar(40) NOT NULL DEFAULT '',
  `reg_date` int UNSIGNED NOT NULL DEFAULT '0',
  `last_signin` int UNSIGNED NOT NULL DEFAULT '0',
  `last_signin_ip` varchar(40) NOT NULL DEFAULT '',
  `email` varchar(150) NOT NULL DEFAULT '',
  `favorite` enum('0','1') NOT NULL DEFAULT '1',
  `power` enum('0','1','2','3','4') NOT NULL DEFAULT '0',
  `about` text NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'default.gif',
  `activation_key` varchar(20) NOT NULL DEFAULT '',
  `new_password` varchar(32) NOT NULL DEFAULT '',
  `followers_count` int UNSIGNED NOT NULL DEFAULT '0',
  `following_count` int UNSIGNED NOT NULL DEFAULT '0',
  `unread_notifications_count` int UNSIGNED NOT NULL DEFAULT '0',
  `social_links` text NOT NULL,
  `channel_slug` varchar(255) NOT NULL DEFAULT '',
  `channel_cover` varchar(255) NOT NULL DEFAULT '',
  `channel_verified` enum('0','1') NOT NULL DEFAULT '0',
  `channel_featured` enum('0','1') NOT NULL DEFAULT '0',
  `channel_settings` text NOT NULL,
  `fb_user_id` varchar(40) NOT NULL DEFAULT '',
  `fb_access_token` varchar(255) NOT NULL DEFAULT '',
  `twitter_user_id` varchar(40) NOT NULL DEFAULT '',
  `google_user_id` varchar(40) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `pm_users`
--

INSERT INTO `pm_users` (`id`, `username`, `password`, `name`, `gender`, `country`, `reg_ip`, `reg_date`, `last_signin`, `last_signin_ip`, `email`, `favorite`, `power`, `about`, `avatar`, `activation_key`, `new_password`, `followers_count`, `following_count`, `unread_notifications_count`, `social_links`, `channel_slug`, `channel_cover`, `channel_verified`, `channel_featured`, `channel_settings`, `fb_user_id`, `fb_access_token`, `twitter_user_id`, `google_user_id`) VALUES
(4, 'ilyas', '$2y$10$eUDygZRjH.OtNdirK7X9HuyHKsTlurXRG3xj/la4tiErP8Mp9hBtK', 'ilyas', '', '183', '127.0.0.1', 1622879065, 1622879834, '10.55.1.38', 'ilyas@ktube.rs', '1', '4', '', 'default.gif', '', '', 0, 0, 0, 'a:6:{s:7:\"website\";s:0:\"\";s:7:\"youtube\";s:0:\"\";s:8:\"facebook\";s:0:\"\";s:7:\"twitter\";s:0:\"\";s:9:\"instagram\";s:0:\"\";s:11:\"google_plus\";s:0:\"\";}', '', '', '0', '0', '', '', '', '', ''),
(6, 'zuhri', '$2y$10$p0hGdZ/530RebJYgA7LXNedzeIVU8urRSE.2p78BLn2nGNkIWno8S', 'zuhri', '', '500', '10.55.1.38', 1623564475, 1623566417, '10.55.1.38', 'zuhri@ktube.rs', '1', '0', '', 'default.gif', '', '', 0, 0, 0, '', '', '', '0', '0', '', '', '', '', ''),
(3, 'ktube', '$2y$10$B151yJkE/wlByIbli1QPwemcE3pORJs0A40mOFc3Zn7YSiIrI1pkq', 'ktube', '', '376', '127.0.0.1', 1622878552, 1624355771, '10.55.1.38', 'ktube@gmail.com', '1', '1', '', 'default.gif', '', '', 0, 0, 0, 'a:6:{s:7:\"website\";s:0:\"\";s:7:\"youtube\";s:0:\"\";s:8:\"facebook\";s:0:\"\";s:7:\"twitter\";s:0:\"\";s:9:\"instagram\";s:0:\"\";s:11:\"google_plus\";s:0:\"\";}', '', '', '0', '0', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_users_follow`
--

CREATE TABLE `pm_users_follow` (
  `user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `follower_id` int UNSIGNED NOT NULL DEFAULT '0',
  `date` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_videoads`
--

CREATE TABLE `pm_videoads` (
  `id` smallint NOT NULL,
  `hash` varchar(12) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `flv_url` varchar(255) NOT NULL DEFAULT '',
  `redirect_url` text NOT NULL,
  `redirect_type` enum('0','1') NOT NULL DEFAULT '0',
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `disable_stats` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_videos`
--

CREATE TABLE `pm_videos` (
  `id` mediumint UNSIGNED NOT NULL,
  `uniq_id` varchar(10) NOT NULL DEFAULT '',
  `video_title` varchar(100) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `yt_id` varchar(50) NOT NULL DEFAULT '',
  `yt_length` mediumint UNSIGNED NOT NULL DEFAULT '0',
  `yt_thumb` varchar(255) NOT NULL DEFAULT '',
  `yt_views` int NOT NULL DEFAULT '0',
  `category` varchar(30) NOT NULL DEFAULT '',
  `submitted_user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `submitted` varchar(100) NOT NULL DEFAULT '',
  `lastwatched` int UNSIGNED NOT NULL DEFAULT '0',
  `added` int UNSIGNED NOT NULL DEFAULT '0',
  `site_views` int NOT NULL DEFAULT '0',
  `url_flv` varchar(255) NOT NULL DEFAULT '',
  `source_id` smallint UNSIGNED NOT NULL DEFAULT '0',
  `language` smallint UNSIGNED NOT NULL DEFAULT '0',
  `age_verification` enum('0','1') NOT NULL DEFAULT '0',
  `last_check` int UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `featured` enum('0','1') NOT NULL DEFAULT '0',
  `restricted` enum('0','1') NOT NULL DEFAULT '0',
  `allow_comments` enum('0','1') NOT NULL DEFAULT '1',
  `allow_embedding` enum('0','1') NOT NULL DEFAULT '1',
  `video_slug` varchar(255) NOT NULL DEFAULT '',
  `video_type` smallint UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `pm_videos`
--

INSERT INTO `pm_videos` (`id`, `uniq_id`, `video_title`, `description`, `yt_id`, `yt_length`, `yt_thumb`, `yt_views`, `category`, `submitted_user_id`, `submitted`, `lastwatched`, `added`, `site_views`, `url_flv`, `source_id`, `language`, `age_verification`, `last_check`, `status`, `featured`, `restricted`, `allow_comments`, `allow_embedding`, `video_slug`, `video_type`) VALUES
(7, 'bb0739054', 'Layanan Klinik Virtual RSUP Dr Kariadi', '<p>klinik virtual RSUP dr. Kariadi</p>\r\n<p>&nbsp;</p>', '', 0, 'http://10.55.1.250/uploads/thumbs/bb0739054-1.jpg', 0, '5', 3, 'ktube', 0, 1624349708, 2, 'd5ac3582.mp4', 1, 1, '0', 0, 0, '0', '0', '1', '1', 'layanan-klinik-virtual-rsup-dr-kariadi', 1),
(8, '40fa42791', 'STANDAR PERFORMANCE PEGAWAI RSUP Dr KARIADI', '', '', 0, 'http://10.55.1.250/uploads/thumbs/40fa42791-1.jpg', 0, '5', 3, 'ktube', 1624350607, 1624349926, 3, 'fc307d75.mp4', 1, 1, '0', 0, 0, '0', '0', '1', '1', 'standar-performance-pegawai-rsup-dr-kariadi', 1),
(9, 'f04dd4dfe', 'Mengenal Dunia Psikoterapi', '', '', 0, 'http://10.55.1.250/uploads/thumbs/f04dd4dfe-1.jpg', 0, '5', 3, 'ktube', 0, 1624349948, 2, 'b342e9c8.mp4', 1, 1, '0', 0, 0, '0', '0', '1', '1', 'mengenal-dunia-psikoterapi', 1),
(10, '4e08e6520', 'Pelayanan Stem Cell Di RSUP Dr Kariadi', '', '', 0, 'http://10.55.1.250/uploads/thumbs/4e08e6520-1.jpg', 0, '5', 3, 'ktube', 0, 1624349965, 2, 'a1fe08ff.mp4', 1, 1, '0', 0, 0, '0', '0', '1', '1', 'pelayanan-stem-cell-di-rsup-dr-kariadi', 1),
(11, 'cb7e60b8d', 'Pelayanan Tiroid Terpadu“Penyakit Graves”di RSUP Dr Kariadi', '', '', 0, 'http://10.55.1.250/uploads/thumbs/cb7e60b8d-1.jpg', 0, '5', 3, 'ktube', 0, 1624349981, 2, 'b7bbdca7.mp4', 1, 1, '0', 0, 0, '0', '0', '1', '1', 'pelayanan-tiroid-terpadu%e2%80%9cpenyakit-graves%e2%80%9ddi-rsup-dr-kariadi', 1),
(12, '87681fca4', 'Cara Pengunaan Breeze Haler', '', '', 0, 'http://10.55.1.250/uploads/thumbs/87681fca4-1.jpg', 0, '5', 3, 'ktube', 1624350007, 1624349996, 1, 'e77e0d25.mp4', 1, 1, '0', 0, 0, '0', '0', '1', '1', 'cara-pengunaan-breeze-haler', 1),
(13, '940f3a2d4', 'LINAC 1  DAMPAK INTERUPSI', '<p>sahabat sehat mari makan</p>', '', 0, '940f3a2d4-1.jpg', 0, '5', 3, 'ktube', 1624751166, 1624353580, 1, '79a61ad3.mp4', 1, 1, '0', 0, 0, '0', '0', '1', '1', 'linac-1-dampak-interupsi', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_videos_trash`
--

CREATE TABLE `pm_videos_trash` (
  `id` mediumint UNSIGNED NOT NULL,
  `uniq_id` varchar(10) NOT NULL DEFAULT '',
  `video_title` varchar(100) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `yt_id` varchar(50) NOT NULL DEFAULT '',
  `yt_length` mediumint UNSIGNED NOT NULL DEFAULT '0',
  `yt_thumb` varchar(255) NOT NULL DEFAULT '',
  `yt_views` int NOT NULL DEFAULT '0',
  `category` varchar(30) NOT NULL DEFAULT '',
  `submitted_user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `submitted` varchar(100) NOT NULL DEFAULT '',
  `lastwatched` int UNSIGNED NOT NULL DEFAULT '0',
  `added` int UNSIGNED NOT NULL DEFAULT '0',
  `site_views` int NOT NULL DEFAULT '0',
  `url_flv` varchar(255) NOT NULL DEFAULT '',
  `source_id` smallint UNSIGNED NOT NULL DEFAULT '0',
  `language` smallint UNSIGNED NOT NULL DEFAULT '0',
  `age_verification` enum('0','1') NOT NULL DEFAULT '0',
  `last_check` int UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `featured` enum('0','1') NOT NULL DEFAULT '0',
  `restricted` enum('0','1') NOT NULL DEFAULT '0',
  `allow_comments` enum('0','1') NOT NULL DEFAULT '1',
  `allow_embedding` enum('0','1') NOT NULL DEFAULT '1',
  `video_slug` varchar(255) NOT NULL DEFAULT '',
  `mp4` varchar(255) NOT NULL DEFAULT '',
  `direct` varchar(255) NOT NULL DEFAULT '',
  `video_type` smallint UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `pm_videos_trash`
--

INSERT INTO `pm_videos_trash` (`id`, `uniq_id`, `video_title`, `description`, `yt_id`, `yt_length`, `yt_thumb`, `yt_views`, `category`, `submitted_user_id`, `submitted`, `lastwatched`, `added`, `site_views`, `url_flv`, `source_id`, `language`, `age_verification`, `last_check`, `status`, `featured`, `restricted`, `allow_comments`, `allow_embedding`, `video_slug`, `mp4`, `direct`, `video_type`) VALUES
(5, 'd686e93cc', 'Jonas - Fast Car', '', '7ceBrdlzcWk', 213, '//i.ytimg.com/vi/7ceBrdlzcWk/mqdefault.jpg', 0, '1,3', 0, 'admin', 0, 1622275871, 4, 'https://www.youtube.com/watch?v=7ceBrdlzcWk', 3, 1, '0', 0, 0, '0', '0', '1', '1', 'jonas-fast-car', '', 'http://www.youtube.com/watch?v=7ceBrdlzcWk', 1),
(4, '97d7e235d', 'Rick and Morty x Run The Jewels', '<p>Directed by Juan Meza-Le&oacute;n. From the album Run The Jewels 3.<br /><br />Rick and Morty is Adult Swim\'s most scientifically accurate animated comedy. Created by Justin Roiland and Dan Harmon, it catalogues the bizarre misadventures of a bored scientific genius/drunkard and his socially awkward grandson, Morty. Their exploits tend to have unintended consequences for Morty\'s dysfunctional family, especially his unfailingly mediocre father, Jerry. Watch Rick and Morty battle everything from interdimensional customs agents to Cronenberg monsters now, only at http://AdultSwim.com.</p>', 'UcHssjWkQ2M', 216, '//i.ytimg.com/vi/UcHssjWkQ2M/mqdefault.jpg', 0, '1', 1, 'admin', 0, 1622275871, 4, 'https://www.youtube.com/watch?v=UcHssjWkQ2M', 3, 1, '0', 0, 0, '1', '0', '1', '1', 'rick-and-morty-x-run-the-jewels', '', 'http://www.youtube.com/watch?v=UcHssjWkQ2M', 1),
(3, '66189809a', 'Martin Garrix - High on Life ft Bonn', '<p>Killed the demons of my mind<br />Ever since you came around<br />We\'re a river, running wild<br />How could I have been so blind?<br />I just live a fast life<br />Forget about the past time<br />Numb out to escape my feels<br />And friendships only pass by<br />Show up, gone, like strobe lights<br />But with you, I feel something real<br />And I\'d walk a million miles, just to see you smile<br />\'Til the day I die<br />Oh, I need you by my side, we get high on life<br />\'Til the day we die<br />High on life \'til the day we die<br />High on life \'til the day we die<br />High on life \'til the day we die<br />And I\'d walk a million miles, just to see you smile<br />\'Til the day I die<br />High on life \'til the day we die<br />Through my fingers, out of sight<br />How could I have let you go?<br />Cutting corners, turning stones<br />But I can only see your ghost<br />I just live a fast life<br />Forget about the past time<br />I numb out to escape my feels<br />And friendships only pass by<br />Show up, gone, like strobe lights<br />With you, I feel something real<br />And I\'d walk a million miles, just to see you smile<br />\'Til the day I die<br />Oh, I need you by my side, we get high on life<br />\'Til the day we die<br />High on life \'til the day we die<br />Oh, I need you by my side, we get high on life<br />\'Til the day we die<br />High on life \'til the day we die<br />And I\'d walk a million miles, just to see you smile<br />\'Til the day I die<br />Oh, I need you by my side, we get high on life<br />\'Til the day we die<br />Songwriters: Martijn Gerard Garritsen / Giorgio Tuinfort / Albin Nedler<br />High On Life lyrics &copy; Universal Music Publishing Group, Kobalt Music Publishing Ltd.</p>', 'Vbv4hD2jG2g', 228, '//i.ytimg.com/vi/Vbv4hD2jG2g/mqdefault.jpg', 0, '1', 1, 'admin', 0, 1622275871, 4, 'https://www.youtube.com/watch?v=Vbv4hD2jG2g', 3, 1, '0', 0, 0, '0', '0', '1', '1', 'martin-garrix-high-on-life-ft-bonn', '', 'http://www.youtube.com/watch?v=Vbv4hD2jG2g', 1),
(6, 'f9750eb53', 'Neonime One Piece 978', '', '', 0, 'f9750eb53-1.jpg', 0, '1', 3, 'ktube', 0, 1623565843, 10, '3b8c5336.mp4', 1, 1, '0', 0, 0, '0', '0', '1', '1', 'neonime-one-piece-978', '', '3b8c5336.mp4', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_videos_urls`
--

CREATE TABLE `pm_videos_urls` (
  `uniq_id` varchar(10) NOT NULL DEFAULT '',
  `mp4` varchar(200) NOT NULL DEFAULT '',
  `direct` varchar(200) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data untuk tabel `pm_videos_urls`
--

INSERT INTO `pm_videos_urls` (`uniq_id`, `mp4`, `direct`) VALUES
('14a4e06f8', '', 'http://www.youtube.com/watch?v=TuBMXS6vU3o'),
('ac0266df0', '', 'http://www.youtube.com/watch?v=BpWM0FNPZSs'),
('bb0739054', '', 'd5ac3582.mp4'),
('40fa42791', '', 'fc307d75.mp4'),
('f04dd4dfe', '', 'b342e9c8.mp4'),
('4e08e6520', '', 'a1fe08ff.mp4'),
('cb7e60b8d', '', 'b7bbdca7.mp4'),
('87681fca4', '', 'e77e0d25.mp4'),
('940f3a2d4', '', '79a61ad3.mp4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pm_video_subtitles`
--

CREATE TABLE `pm_video_subtitles` (
  `id` int NOT NULL,
  `uniq_id` varchar(10) NOT NULL DEFAULT '',
  `language` varchar(100) NOT NULL DEFAULT '',
  `language_tag` varchar(2) NOT NULL DEFAULT '',
  `filename` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `art_articles`
--
ALTER TABLE `art_articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`);
ALTER TABLE `art_articles` ADD FULLTEXT KEY `title` (`title`);

--
-- Indeks untuk tabel `art_categories`
--
ALTER TABLE `art_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `art_tags`
--
ALTER TABLE `art_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pm_activity`
--
ALTER TABLE `pm_activity`
  ADD PRIMARY KEY (`activity_id`),
  ADD KEY `activity_type` (`activity_type`),
  ADD KEY `hide` (`hide`),
  ADD KEY `objects` (`object_id`,`object_type`),
  ADD KEY `targets` (`target_id`,`target_type`),
  ADD KEY `user_id` (`user_id`,`time`);

--
-- Indeks untuk tabel `pm_ads`
--
ALTER TABLE `pm_ads`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pm_ads_log`
--
ALTER TABLE `pm_ads_log`
  ADD PRIMARY KEY (`log_id`),
  ADD UNIQUE KEY `date` (`date`,`ad_id`,`ad_type`);

--
-- Indeks untuk tabel `pm_banlist`
--
ALTER TABLE `pm_banlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `pm_bin_rating_meta`
--
ALTER TABLE `pm_bin_rating_meta`
  ADD PRIMARY KEY (`vote_meta_id`),
  ADD KEY `uniq_id` (`uniq_id`),
  ADD KEY `score` (`score`);

--
-- Indeks untuk tabel `pm_bin_rating_votes`
--
ALTER TABLE `pm_bin_rating_votes`
  ADD PRIMARY KEY (`vote_id`),
  ADD KEY `uniq_id` (`uniq_id`,`vote_ip`,`user_id`);

--
-- Indeks untuk tabel `pm_categories`
--
ALTER TABLE `pm_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pm_chart`
--
ALTER TABLE `pm_chart`
  ADD PRIMARY KEY (`uniq_id`),
  ADD KEY `views` (`views`);

--
-- Indeks untuk tabel `pm_comments`
--
ALTER TABLE `pm_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uniq_id` (`uniq_id`),
  ADD KEY `score` (`score`),
  ADD KEY `report_count` (`report_count`);

--
-- Indeks untuk tabel `pm_comments_reported`
--
ALTER TABLE `pm_comments_reported`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`comment_id`),
  ADD KEY `user_id_2` (`user_id`),
  ADD KEY `comment_id` (`comment_id`);

--
-- Indeks untuk tabel `pm_config`
--
ALTER TABLE `pm_config`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indeks untuk tabel `pm_countries`
--
ALTER TABLE `pm_countries`
  ADD PRIMARY KEY (`countryid`),
  ADD KEY `location` (`country`);

--
-- Indeks untuk tabel `pm_cron_jobs`
--
ALTER TABLE `pm_cron_jobs`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `status` (`status`,`state`);

--
-- Indeks untuk tabel `pm_cron_log`
--
ALTER TABLE `pm_cron_log`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indeks untuk tabel `pm_embed_code`
--
ALTER TABLE `pm_embed_code`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pm_episodes`
--
ALTER TABLE `pm_episodes`
  ADD PRIMARY KEY (`episode_id`),
  ADD KEY `uniq_id` (`uniq_id`),
  ADD KEY `series_id` (`series_id`,`season_no`);

--
-- Indeks untuk tabel `pm_genres`
--
ALTER TABLE `pm_genres`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pm_genre_relationships`
--
ALTER TABLE `pm_genre_relationships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genre_id` (`genre_id`),
  ADD KEY `item_id` (`item_id`,`item_type`);

--
-- Indeks untuk tabel `pm_import_csv_files`
--
ALTER TABLE `pm_import_csv_files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indeks untuk tabel `pm_import_csv_items`
--
ALTER TABLE `pm_import_csv_items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `uniq_id` (`uniq_id`),
  ADD KEY `yt_id` (`yt_id`),
  ADD KEY `file_id` (`file_id`);

--
-- Indeks untuk tabel `pm_import_subscriptions`
--
ALTER TABLE `pm_import_subscriptions`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indeks untuk tabel `pm_internal_log`
--
ALTER TABLE `pm_internal_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indeks untuk tabel `pm_languages`
--
ALTER TABLE `pm_languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeks untuk tabel `pm_log`
--
ALTER TABLE `pm_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `area` (`area`);

--
-- Indeks untuk tabel `pm_meta`
--
ALTER TABLE `pm_meta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`,`item_type`),
  ADD KEY `meta_key` (`meta_key`);

--
-- Indeks untuk tabel `pm_notifications`
--
ALTER TABLE `pm_notifications`
  ADD PRIMARY KEY (`notification_id`),
  ADD KEY `to_user_id` (`to_user_id`,`seen`),
  ADD KEY `activity_type` (`activity_type`);

--
-- Indeks untuk tabel `pm_pages`
--
ALTER TABLE `pm_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pm_playlists`
--
ALTER TABLE `pm_playlists`
  ADD PRIMARY KEY (`list_id`),
  ADD KEY `list_uniq_id` (`list_uniq_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `pm_playlist_items`
--
ALTER TABLE `pm_playlist_items`
  ADD PRIMARY KEY (`list_item_id`),
  ADD KEY `list_id` (`list_id`),
  ADD KEY `video_id` (`video_id`);

--
-- Indeks untuk tabel `pm_preroll_ads`
--
ALTER TABLE `pm_preroll_ads`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pm_ratings`
--
ALTER TABLE `pm_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pm_reports`
--
ALTER TABLE `pm_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `entry_id` (`entry_id`);

--
-- Indeks untuk tabel `pm_searches`
--
ALTER TABLE `pm_searches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pm_series`
--
ALTER TABLE `pm_series`
  ADD PRIMARY KEY (`series_id`),
  ADD KEY `series_slug` (`series_slug`);
ALTER TABLE `pm_series` ADD FULLTEXT KEY `title` (`title`);

--
-- Indeks untuk tabel `pm_sources`
--
ALTER TABLE `pm_sources`
  ADD PRIMARY KEY (`source_id`);

--
-- Indeks untuk tabel `pm_tags`
--
ALTER TABLE `pm_tags`
  ADD PRIMARY KEY (`tag_id`),
  ADD KEY `uniq_id` (`uniq_id`),
  ADD KEY `safe_tag` (`safe_tag`);

--
-- Indeks untuk tabel `pm_temp`
--
ALTER TABLE `pm_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pm_users`
--
ALTER TABLE `pm_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `email` (`email`),
  ADD KEY `channel_slug` (`channel_slug`),
  ADD KEY `channel_featured` (`channel_featured`),
  ADD KEY `fb_user_id` (`fb_user_id`),
  ADD KEY `twitter_user_id` (`twitter_user_id`);

--
-- Indeks untuk tabel `pm_users_follow`
--
ALTER TABLE `pm_users_follow`
  ADD PRIMARY KEY (`user_id`,`follower_id`);

--
-- Indeks untuk tabel `pm_videoads`
--
ALTER TABLE `pm_videoads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hash` (`hash`);

--
-- Indeks untuk tabel `pm_videos`
--
ALTER TABLE `pm_videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uniq_id` (`uniq_id`,`video_type`),
  ADD KEY `added` (`added`),
  ADD KEY `yt_id` (`yt_id`),
  ADD KEY `featured` (`featured`),
  ADD KEY `submitted_user_id` (`submitted_user_id`);
ALTER TABLE `pm_videos` ADD FULLTEXT KEY `fulltext_index` (`video_title`);

--
-- Indeks untuk tabel `pm_videos_trash`
--
ALTER TABLE `pm_videos_trash`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uniq_id` (`uniq_id`);

--
-- Indeks untuk tabel `pm_videos_urls`
--
ALTER TABLE `pm_videos_urls`
  ADD UNIQUE KEY `uniq_id` (`uniq_id`);

--
-- Indeks untuk tabel `pm_video_subtitles`
--
ALTER TABLE `pm_video_subtitles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uniq_id` (`uniq_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `art_articles`
--
ALTER TABLE `art_articles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `art_categories`
--
ALTER TABLE `art_categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `art_tags`
--
ALTER TABLE `art_tags`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pm_activity`
--
ALTER TABLE `pm_activity`
  MODIFY `activity_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pm_ads`
--
ALTER TABLE `pm_ads`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=901;

--
-- AUTO_INCREMENT untuk tabel `pm_ads_log`
--
ALTER TABLE `pm_ads_log`
  MODIFY `log_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pm_banlist`
--
ALTER TABLE `pm_banlist`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pm_bin_rating_meta`
--
ALTER TABLE `pm_bin_rating_meta`
  MODIFY `vote_meta_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pm_bin_rating_votes`
--
ALTER TABLE `pm_bin_rating_votes`
  MODIFY `vote_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pm_categories`
--
ALTER TABLE `pm_categories`
  MODIFY `id` smallint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pm_comments`
--
ALTER TABLE `pm_comments`
  MODIFY `id` mediumint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pm_comments_reported`
--
ALTER TABLE `pm_comments_reported`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pm_config`
--
ALTER TABLE `pm_config`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT untuk tabel `pm_countries`
--
ALTER TABLE `pm_countries`
  MODIFY `countryid` smallint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=505;

--
-- AUTO_INCREMENT untuk tabel `pm_cron_jobs`
--
ALTER TABLE `pm_cron_jobs`
  MODIFY `job_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pm_cron_log`
--
ALTER TABLE `pm_cron_log`
  MODIFY `log_id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pm_embed_code`
--
ALTER TABLE `pm_embed_code`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pm_episodes`
--
ALTER TABLE `pm_episodes`
  MODIFY `episode_id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pm_genres`
--
ALTER TABLE `pm_genres`
  MODIFY `id` smallint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `pm_genre_relationships`
--
ALTER TABLE `pm_genre_relationships`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pm_import_csv_files`
--
ALTER TABLE `pm_import_csv_files`
  MODIFY `file_id` mediumint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pm_import_csv_items`
--
ALTER TABLE `pm_import_csv_items`
  MODIFY `item_id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pm_import_subscriptions`
--
ALTER TABLE `pm_import_subscriptions`
  MODIFY `sub_id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pm_internal_log`
--
ALTER TABLE `pm_internal_log`
  MODIFY `log_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pm_languages`
--
ALTER TABLE `pm_languages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT untuk tabel `pm_log`
--
ALTER TABLE `pm_log`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pm_meta`
--
ALTER TABLE `pm_meta`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pm_notifications`
--
ALTER TABLE `pm_notifications`
  MODIFY `notification_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pm_pages`
--
ALTER TABLE `pm_pages`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pm_playlists`
--
ALTER TABLE `pm_playlists`
  MODIFY `list_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `pm_playlist_items`
--
ALTER TABLE `pm_playlist_items`
  MODIFY `list_item_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pm_preroll_ads`
--
ALTER TABLE `pm_preroll_ads`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pm_reports`
--
ALTER TABLE `pm_reports`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pm_searches`
--
ALTER TABLE `pm_searches`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pm_series`
--
ALTER TABLE `pm_series`
  MODIFY `series_id` mediumint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pm_sources`
--
ALTER TABLE `pm_sources`
  MODIFY `source_id` smallint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT untuk tabel `pm_tags`
--
ALTER TABLE `pm_tags`
  MODIFY `tag_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pm_temp`
--
ALTER TABLE `pm_temp`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pm_users`
--
ALTER TABLE `pm_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pm_videoads`
--
ALTER TABLE `pm_videoads`
  MODIFY `id` smallint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pm_videos`
--
ALTER TABLE `pm_videos`
  MODIFY `id` mediumint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pm_video_subtitles`
--
ALTER TABLE `pm_video_subtitles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
