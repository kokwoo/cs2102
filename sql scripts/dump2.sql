﻿--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.5
-- Dumped by pg_dump version 9.6.5

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

SET search_path = public, pg_catalog;

--
-- Data for Name: items; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (2, 'Woman Fashion', 'Ladies'' Watch', 0.50, 1, '2017-10-03 16:58:25.188765', 'rulesincere', 'Fashionable Watch, goes well with everything', '265A Compassvale Link #15-203', '265A Compassvale Link #15-203');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (3, 'Other Books', 'Dictionary', 5.00, 1, '2017-10-03 17:08:33.977905', 'rulesincere', 'Good for Children aged between 3 - 12 years old, completely new.', '265A Compassvale Link #15-203', '265A Compassvale Link #15-203');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (4, 'Printers', 'Photocopying and printing services', 0.04, 1, '2017-10-03 17:13:38.48038', 'omniscientsuggest', 'We provide printing services for 4 cents per page. ', 'KR MRT Station', 'KR MRT Station');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (5, 'Men Fashion', 'Hair Wax', 1.00, 1, '2017-10-03 17:18:13.22194', 'lizardburberry', 'Latest trendy strong hair-wax', '50 Stratton Drive', '50 Stratton Drive');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (6, 'Printers', 'Jet Printer', 50.05, 1, '2017-10-03 17:19:43.7194', 'lizardburberry', 'Low energy, saves power', '265A Compassvale Link #15-205', '265A Compassvale Link #15-205');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (7, 'Printers', 'Deskjet Printer', 78.05, 1, '2017-10-03 17:35:28.527502', 'lizardburberry', 'Prints smoothly without jam', '265A Compassvale Link #15-205', '265A Compassvale Link #15-205');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (8, 'Scanners', 'Scanner', 68.15, 1, '2017-10-03 17:38:23.739668', 'lizardburberry', 'Scans anything from paper to palms', '265A Compassvale Link #15-205', '265A Compassvale Link #15-205');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (9, 'Self-improvement books', 'Employment Law and Acts Guide', 23.00, 1, '2017-10-03 17:46:01.992881', 'mildjackrabbit', 'For those who are interested in employment laws', 'Queenstown Lutheran Church 709 Commonwealth Drive Singapore 149601, Singapore', 'Queenstown Lutheran Church 709 Commonwealth Drive Singapore 149601, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (10, 'Stationery', 'Porcelain Pen', 5.00, 1, '2017-10-03 17:47:31.738126', 'mildjackrabbit', 'Imported from China, only edition', 'Queenstown Lutheran Church 709 Commonwealth Drive Singapore 149601, Singapore', 'Queenstown Lutheran Church 709 Commonwealth Drive Singapore 149601, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (13, 'General reading books', 'Will Regulations and Laws', 21.00, 1, '2017-10-03 17:50:23.374009', 'mildjackrabbit', 'Ned to write a will but don''t know where to start? This is the right book for you!', 'Queenstown Lutheran Church 709 Commonwealth Drive Singapore 149601, Singapore', 'Queenstown Lutheran Church 709 Commonwealth Drive Singapore 149601, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (14, 'Self-improvement books', 'Improving yourself', 15.00, 1, '2017-10-03 17:51:46.993955', 'mildjackrabbit', 'Feeling lost in life? It''s time to turn it around and unleash your potential!', 'Queenstown Lutheran Church 709 Commonwealth Drive Singapore 149601, Singapore', 'Queenstown Lutheran Church 709 Commonwealth Drive Singapore 149601, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (15, 'Other Home Office Supplies', 'Computer', 0.00, 1, '2017-10-03 17:54:52.761865', 'adddeveloper', 'Not used anymore - i3 Core unit, 4 gb ram, HDD 256gb', 'Esplanade MRT Station', '3 Temasek Boulevard #02-048 Suntec City Mall, 038983, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (16, 'Textbooks', 'Chemical Engineering', 50.50, 1, '2017-10-03 17:56:24.094371', 'adddeveloper', 'For NUS Students taking CN1102/CN1101, official textbooks. Whole bundle costs 50 bucks!', '3 Temasek Boulevard #02-048 Suntec City Mall, 038983, Singapore', '3 Temasek Boulevard #02-048 Suntec City Mall, 038983, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (17, 'Kitchen Appliances', 'Kettle', 200.00, 1, '2017-10-03 17:59:01.112149', 'costaricanforgive', 'This kettle is a treasure that was made during Ming Dynasty in China. ', '1 Changi South Street 2 Level 5, 486760, Singapore', '1 Changi South Street 2 Level 5, 486760, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (18, 'Chairs', 'Rock Chair', 225.00, 1, '2017-10-03 18:00:42.865304', 'costaricanforgive', 'This chair was previously used by Dr Sun Yat-sen, the man who built modern China', '1 Changi South Street 2 Level 5, 486760, Singapore', '1 Changi South Street 2 Level 5, 486760, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (19, 'Chairs', 'Wooden Arm Chair', 20.00, 1, '2017-10-03 18:09:50.894252', 'costaricanforgive', 'My grandmother''s arm chair', '1 Changi South Street 2 Level 5, 486760, Singapore', '1 Changi South Street 2 Level 5, 486760, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (20, 'Men Fashion', 'Polo Tee', 10.00, 1, '2017-10-03 18:10:42.891115', 'costaricanforgive', 'Brand new polo tee from Hangten', 'Jurong East MRT station', 'Jurong East MRT station');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (21, 'Chairs', 'Massage Chair', 190.00, 1, '2017-10-03 18:11:51.124689', 'costaricanforgive', 'Heavenly massage chair from OSIM(comes with extra cushion)', '1 Changi South Street 2 Level 5, 486760, Singapore', '1 Changi South Street 2 Level 5, 486760, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (22, 'Chairs', 'Wooden benches', 142.00, 1, '2017-10-03 18:12:31.939248', 'costaricanforgive', 'Wooden benches for private gardens', '1 Changi South Street 2 Level 5, 486760, Singapore', '1 Changi South Street 2 Level 5, 486760, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (23, 'Other Furniture', 'Shelf', 205.00, 1, '2017-10-03 18:13:24.188189', 'costaricanforgive', 'Shelves for books and ornaments(self assembled)', '1 Changi South Street 2 Level 5, 486760, Singapore', '1 Changi South Street 2 Level 5, 486760, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (24, 'Chairs', 'Baby chair', 80.00, 1, '2017-10-03 18:14:32.631286', 'costaricanforgive', 'Baby Chair with small table (aged between 0-3 years old)', '1 Changi South Street 2 Level 5, 486760, Singapore', '1 Changi South Street 2 Level 5, 486760, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (25, 'Tables', 'Furniture set (Purple)', 315.00, 1, '2017-10-03 18:16:16.784329', 'writesteady', 'Purple table and cushioned chairs that fits modern decor.', 'Great World City 1 Kim Seng Promenade #15-07/#15-11 237994, Singapore', 'Great World City 1 Kim Seng Promenade #15-07/#15-11 237994, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (26, 'Chairs', 'Red sofas', 100.00, 1, '2017-10-03 18:17:47.530403', 'writesteady', 'Red sofas/cushioned chairs that fits into modern decor', 'Great World City 1 Kim Seng Promenade #15-07/#15-11 237994, Singapore', 'Great World City 1 Kim Seng Promenade #15-07/#15-11 237994, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (27, 'Tables', 'Coffee Table Black', 120.00, 1, '2017-10-03 18:18:34.090755', 'writesteady', 'Black coffee table that fits into modern decor for homes ', 'Great World City 1 Kim Seng Promenade #15-07/#15-11 237994, Singapore', 'Great World City 1 Kim Seng Promenade #15-07/#15-11 237994, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (28, 'Chairs', 'Massage chair Black', 115.00, 1, '2017-10-03 18:19:36.402981', 'writesteady', 'Black arm chair that fits into modern decor for homes.', 'Great World City 1 Kim Seng Promenade #15-07/#15-11 237994, Singapore', 'Great World City 1 Kim Seng Promenade #15-07/#15-11 237994, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (29, 'Chairs', 'Study Table and chairs', 380.00, 1, '2017-10-03 18:20:33.96692', 'writesteady', 'Study table and chairs for conducive learning environment.', 'Great World City 1 Kim Seng Promenade #15-07/#15-11 237994, Singapore', 'Great World City 1 Kim Seng Promenade #15-07/#15-11 237994, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (30, 'Household Appliances', 'Lampshade', 20.00, 1, '2017-10-03 18:22:05.601098', 'writesteady', 'Lampshades for bedside, helps in late night reading!', 'Yishun MRT station', 'Great World City 1 Kim Seng Promenade #15-07/#15-11 237994, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (31, 'Tables', 'Dining Table and chairs', 400.00, 1, '2017-10-03 18:23:55.933269', 'cockytrouble', 'Made from good Juletong wood and polished for scratch resistance  ', '26 Clementi Loop #01-55 Clementi Camp, 129817, Singapore', '26 Clementi Loop #01-55 Clementi Camp, 129817, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (32, 'Tables', 'Baby table', 0.00, 1, '2017-10-03 18:25:39.769601', 'cockytrouble', 'No longer in used. Too small for my son. ', '26 Clementi Loop #01-55 Clementi Camp, 129817, Singapore', '26 Clementi Loop #01-55 Clementi Camp, 129817, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (33, 'Other Games', 'Pokemon card games', 0.00, 1, '2017-10-03 18:26:28.338317', 'cockytrouble', 'Selling my son''s games. ', '26 Clementi Loop #01-55 Clementi Camp, 129817, Singapore', '26 Clementi Loop #01-55 Clementi Camp, 129817, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (34, 'Other Books', 'Sketch book', 0.00, 1, '2017-10-03 18:28:15.861971', 'cockytrouble', 'Bought for my son, but he didn''t use it in the end. Brand new', '26 Clementi Loop #01-55 Clementi Camp, 129817, Singapore', '26 Clementi Loop #01-55 Clementi Camp, 129817, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (35, 'Men Fashion', 'Bracelet', 0.00, 1, '2017-10-03 18:29:35.887415', 'cockytrouble', 'My son used to wear it, but now he is too big to wear it', '26 Clementi Loop #01-55 Clementi Camp, 129817, Singapore', '26 Clementi Loop #01-55 Clementi Camp, 129817, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (36, 'Chairs', 'Sofa Red', 500.00, 1, '2017-10-03 18:32:10.62239', 'lutzsecretive', 'Brand new limited edition Sofa from Ikea (self assemble)', 'Block 7 Pioneer Road North #01-51 Singapore 628459, Singapore', 'Block 7 Pioneer Road North #01-51 Singapore 628459, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (37, 'Tables', 'Studying desk', 150.00, 1, '2017-10-03 18:33:12.429304', 'lutzsecretive', 'Studying table made from Magohany wood - scratch resistant and waterproof.', 'Block 7 Pioneer Road North #01-51 Singapore 628459, Singapore', 'Block 7 Pioneer Road North #01-51 Singapore 628459, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (38, 'Chairs', 'Dining table for 5', 600.00, 1, '2017-10-03 18:34:27.673633', 'lutzsecretive', 'Specially imported from UK. If delivery service requested, extra $10 surcharge. ', 'Block 7 Pioneer Road North #01-51 Singapore 628459, Singapore', 'Block 7 Pioneer Road North #01-51 Singapore 628459, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (39, 'Men Fashion', 'Leather bag', 58.00, 1, '2017-10-03 18:35:33.366176', 'lutzsecretive', 'Leather bag imported from France, unused. Made from real bear skin.', 'Block 7 Pioneer Road North #01-51 Singapore 628459, Singapore', 'Block 7 Pioneer Road North #01-51 Singapore 628459, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (40, 'Tables', 'Beach tables', 195.00, 1, '2017-10-03 18:36:36.804153', 'lutzsecretive', 'Tables and chairs for outdoor party. Does not come with parasols. ', 'Block 7 Pioneer Road North #01-51 Singapore 628459, Singapore', 'Block 7 Pioneer Road North #01-51 Singapore 628459, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (41, 'General reading books', 'IT portfolio', 0.00, 1, '2017-10-03 18:38:46.445566', 'forgetfulfix', 'Thinking of pursuing an IT career? Interested in the tech industry? Don''t wait anymore! This book provides insightful advice for you to kick start your dream career in the IT industry.', 'Sengkang MRT station', '511 Kampong Bahru Road #03-02 Keppel Distripark, 099447, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (42, 'DVD Games', 'Dawn of the Dead', 0.00, 1, '2017-10-03 18:39:50.761634', 'forgetfulfix', 'Dawn of the Dead game, without expansion pack', '511 Kampong Bahru Road #03-02 Keppel Distripark, 099447, Singapore', 'Sengkang MRT station');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (43, 'Blu-Ray Movies', 'Bat vs Superman', 5.00, 1, '2017-10-03 18:40:45.501907', 'forgetfulfix', 'Catch the latest movie blockbuster Batman vs Superman!', '511 Kampong Bahru Road #03-02 Keppel Distripark, 099447, Singapore', '511 Kampong Bahru Road #03-02 Keppel Distripark, 099447, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (44, 'DVD Movies', 'Return of Xander Cage - XXX Series', 5.00, 1, '2017-10-03 18:45:23.033245', 'forgetfulfix', 'Fans of XXX series and Vin Diesel', 'Sengkang MRT station', 'Sengkang MRT station');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (45, 'DVD Movies', 'Star Wars - The Rogue One', 5.00, 1, '2017-10-03 18:46:33.325583', 'forgetfulfix', 'Calling out of Star wars fans! May the force be with you!', '511 Kampong Bahru Road #03-02 Keppel Distripark, 099447, Singapore', '511 Kampong Bahru Road #03-02 Keppel Distripark, 099447, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (46, 'DVD Movies', 'Suicide Squad', 5.00, 1, '2017-10-03 18:47:23.759491', 'forgetfulfix', 'Suicide Squad 2016', '511 Kampong Bahru Road #03-02 Keppel Distripark, 099447, Singapore', 'Sengkang MRT station');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (47, 'Digital key games', 'Virtue''s Last Reward', 10.00, 1, '2017-10-03 18:48:53.246915', 'forgetfulfix', 'One of my favorite games I have played so far, highly recommend it! ', 'Buangkok MRT station', 'Buangkok MRT station');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (48, 'Digital key games', 'Land of the dead', 10.00, 1, '2017-10-03 19:12:06.415577', 'forgetfulfix', 'Land of the Dead game. Selling second hand!', '511 Kampong Bahru Road #03-02 Keppel Distripark, 099447, Singapore', 'Buangkok MRT station');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (49, 'Men Fashion', 'Sneakers shoes', 25.00, 1, '2017-10-03 19:13:50.550723', 'miniaturestupid', 'Totally Brand new! Comes with the laces', '8 Neo Pee Teck Lane, 119034, Singapore', '8 Neo Pee Teck Lane, 119034, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (50, 'Men Fashion', 'Boat Shoes', 30.00, 1, '2017-10-03 19:14:47.727533', 'miniaturestupid', 'Comes in all sizes, you say it we have it!', '8 Neo Pee Teck Lane, 119034, Singapore', '8 Neo Pee Teck Lane, 119034, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (51, 'Men Fashion', 'Digital Sports watch', 300.00, 1, '2017-10-03 19:15:57.880383', 'miniaturestupid', 'Brand new. Stop watch function down to the millisecond.', '8 Neo Pee Teck Lane, 119034, Singapore', '8 Neo Pee Teck Lane, 119034, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (52, 'Men Fashion', 'Gortex Jacket', 180.00, 1, '2017-10-03 19:17:23.589999', 'miniaturestupid', 'lost your raincoat during NS and unable to find it in e-mart? No worries, we have it!', '8 Neo Pee Teck Lane, 119034, Singapore', '8 Neo Pee Teck Lane, 119034, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (53, 'Woman Fashion', 'Varsity jacket', 68.00, 1, '2017-10-03 19:18:10.952745', 'miniaturestupid', 'For women only', '8 Neo Pee Teck Lane, 119034, Singapore', '8 Neo Pee Teck Lane, 119034, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (54, 'Men Fashion', 'Sweat pants', 50.00, 1, '2017-10-03 19:19:37.434379', 'miniaturestupid', '- Elastic

- Sweat absorbent

- Easy dry', '8 Neo Pee Teck Lane, 119034, Singapore', '8 Neo Pee Teck Lane, 119034, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (55, 'Men Fashion', 'Blazer black', 101.00, 1, '2017-10-03 19:20:41.844786', 'miniaturestupid', 'Black Blazers for concerts/performers/interviews', '8 Neo Pee Teck Lane, 119034, Singapore', '8 Neo Pee Teck Lane, 119034, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (56, 'Men Fashion', 'Blue Denim jeans', 43.00, 1, '2017-10-03 19:21:47.390805', 'miniaturestupid', 'Only the jeans included under the stated price.', '8 Neo Pee Teck Lane, 119034, Singapore', '8 Neo Pee Teck Lane, 119034, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (58, 'Woman Fashion', 'Red Purse ', 15.00, 1, '2017-10-03 19:23:25.617546', 'tamarinkerching', 'comes with black color version too!', 'Bishan Station', 'Bishan Station');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (59, 'Woman Fashion', 'Pink dress', 10.00, 1, '2017-10-03 19:24:12.87138', 'tamarinkerching', 'comes in aqua blue too!', '36 Ayer Rajah Crescent #03-00, 139945, Singapore', '36 Ayer Rajah Crescent #03-00, 139945, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (60, 'Woman Fashion', 'Sleeveless poka dots dress', 30.00, 1, '2017-10-03 19:25:12.357686', 'tamarinkerching', 'Light and stain resistant!', 'Bishan Station', 'Bishan Station');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (61, 'Woman Fashion', 'Elephant dress', 25.00, 1, '2017-10-03 19:25:56.094769', 'tamarinkerching', 'Bought it at Thailand but never had the chance to wear it :(', 'Bishan Station', 'Bishan Station');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (62, 'Woman Fashion', 'Striped color short dress', 60.00, 1, '2017-10-03 19:26:59.302934', 'tamarinkerching', 'Very suitable for formal events or even office!', 'Bishan Station', 'Bishan Station');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (63, 'Woman Fashion', 'Gold Bracelet', 12.00, 1, '2017-10-03 19:28:09.469046', 'tamarinkerching', 'Made from pure gold! Polished before lending out!', 'Bishan Station', 'Bishan Station');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (64, 'Woman Fashion', 'Sleeveless casual dress', 20.00, 1, '2017-10-03 19:29:10.772594', 'tamarinkerching', 'I am selling it because I have too many clothes in my wardrobe!', 'Bishan Station', 'Bishan Station');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (65, 'Woman Fashion', 'Silver school bag', 80.00, 1, '2017-10-03 19:30:12.864337', 'tamarinkerching', 'Won it in a lucky draw -  no use for it', 'Bishan Station', 'Bishan Station');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (66, 'Kitchen Appliances', 'Blender', 670.00, 1, '2017-10-03 19:31:26.082409', 'decisiveactor', 'New. It blends anything', 'Banyan tree building 211 upper bukit timah road, 588182, Singapore', 'Banyan tree building 211 upper bukit timah road, 588182, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (67, 'Other Hardware', 'Teapot', 0.00, 1, '2017-10-03 19:32:19.028439', 'decisiveactor', 'I don''t drink tea.', 'Banyan tree building 211 upper bukit timah road, 588182, Singapore', 'Banyan tree building 211 upper bukit timah road, 588182, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (68, 'Other Appliances', 'Sound Speaker', 0.00, 1, '2017-10-03 19:33:30.384686', 'decisiveactor', 'Sound system that literally echoes through out your entire house', 'Banyan tree building 211 upper bukit timah road, 588182, Singapore', 'Banyan tree building 211 upper bukit timah road, 588182, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (69, 'Other Hardware', 'Stuffed bunny toy', 2.80, 1, '2017-10-03 19:57:44.464195', 'decisiveactor', 'Stuffed bunny toy

anit-dust-mites', 'Banyan tree building 211 upper bukit timah road, 588182, Singapore', 'Banyan tree building 211 upper bukit timah road, 588182, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (70, 'Men Fashion', 'Baseball caps', 5.00, 1, '2017-10-03 19:59:02.530934', 'decisiveactor', 'S5 per cap, 4.20 per cap if purchase more than 9', 'Banyan tree building 211 upper bukit timah road, 588182, Singapore', 'Banyan tree building 211 upper bukit timah road, 588182, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (71, 'Textbooks', 'H2 A''levels Chemistry 10 years series', 16.00, 1, '2017-10-03 20:02:32.429004', 'obeisantunsuitable', 'Ten Years series 2004 - 2014', 'Hougang Station', 'Hougang Station');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (72, 'Other Books', 'Daily Planner', 9.00, 1, '2017-10-03 20:03:44.4272', 'obeisantunsuitable', 'Daily Planner for 2018', 'Hougang Station', 'Hougang Station');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (73, 'Textbooks', 'Inorganic Chemistry', 34.00, 1, '2017-10-03 20:06:04.280413', 'obeisantunsuitable', 'Inorganic text book for H3 Chemistry, A levels', 'Hougang Station', 'Hougang Station');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (74, 'Other Books', 'O''levels Physics Ten Years series', 19.00, 1, '2017-10-03 20:07:48.818142', 'obeisantunsuitable', '2007 - 2016', 'Hougang Station', 'Hougang Station');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (75, 'Men Fashion', 'Wallet black', 34.50, 1, '2017-10-03 20:12:41.904266', 'obeisantunsuitable', 'Made from crocodile skin', 'Hougang Station', 'Hougang Station');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (76, 'Other Games', 'Family board game', 17.00, 1, '2017-10-03 20:13:58.743509', 'obeisantunsuitable', 'Fun for family members of all ages!', 'Hougang Station', 'Hougang Station');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (77, 'Men Fashion', 'Long sleeves shirt white', 44.00, 1, '2017-10-03 20:16:09.330446', 'obeisantunsuitable', 'Imported from Korea, 100% cotton', 'Hougang Station', 'Hougang Station');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (78, 'Men Fashion', 'NIKE Sports shoes', 213.40, 1, '2017-10-03 20:17:32.056308', 'obeisantunsuitable', 'Brand new sports shoes.

Made for basketball sports', 'Hougang Station', '1 Hougang Street 91 #01-41 HOUGANG FESTIVAL MARKET, 538692, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (79, 'Men Fashion', 'Black shirt', 0.00, 1, '2017-10-03 20:19:06.769078', 'obeisantunsuitable', 'Wrong sizing for me, loaning out for free! ', 'Hougang Station', '1 Hougang Street 91 #01-41 HOUGANG FESTIVAL MARKET, 538692, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (80, 'Printers', 'Black printer Canon', 145.00, 1, '2017-10-03 20:21:07.995986', 'foxbelated', 'Not opened at all', '23 Defu Lane 4, 539421, Singapore', '23 Defu Lane 4, 539421, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (81, 'Printers', 'Old Black printer', 0.00, 1, '2017-10-03 20:22:16.997572', 'foxbelated', 'At least 9 years old. Feel free to use it.', '23 Defu Lane 4, 539421, Singapore', '23 Defu Lane 4, 539421, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (82, 'Scanners', 'HP Scanner', 199.00, 1, '2017-10-03 20:23:08.889077', 'foxbelated', 'HP scanner for loan, high resolution!', '23 Defu Lane 4, 539421, Singapore', '23 Defu Lane 4, 539421, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (83, 'Textbooks', 'O levels E & A textbooks', 40.00, 1, '2017-10-03 20:24:07.4171', 'foxbelated', 'Maths Textbooks for the new O levels syllabus', '23 Defu Lane 4, 539421, Singapore', '23 Defu Lane 4, 539421, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (84, 'Other Books', 'Daily Planner for 2018', 8.90, 1, '2017-10-03 20:25:21.531613', 'foxbelated', 'Comes in flowery patter or plain pink ', '23 Defu Lane 4, 539421, Singapore', '23 Defu Lane 4, 539421, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (85, 'Textbooks', 'O levels Higher Chinese textbooks', 18.00, 1, '2017-10-03 20:26:03.347868', 'foxbelated', 'O levels Higher mother tongue, comes with model answers', '23 Defu Lane 4, 539421, Singapore', '23 Defu Lane 4, 539421, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (86, 'DVD Games', 'Xbox games', 12.00, 1, '2017-10-03 20:27:14.53135', 'foxbelated', '$12 per game, $10 if loan 3 at one go', '23 Defu Lane 4, 539421, Singapore', '23 Defu Lane 4, 539421, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (87, 'Textbooks', 'CFA textbooks for Financial accounting', 200.00, 1, '2017-10-03 20:28:50.335864', 'cattlebounce', 'From levels 1 to 4', 'Block 77, Marine Drive, ,06-48 440077, Singapore', 'Block 77, Marine Drive, ,06-48 440077, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (88, 'Woman Fashion', 'Black white mini skirt', 15.00, 1, '2017-10-03 20:29:41.205921', 'cattlebounce', 'Worn only 3 times!', 'Block 77, Marine Drive, ,06-48 440077, Singapore', 'Block 77, Marine Drive, ,06-48 440077, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (89, 'Woman Fashion', 'Grey Coat', 90.00, 1, '2017-10-03 20:30:23.321144', 'cattlebounce', 'Worn only twice!', 'Block 77, Marine Drive, ,06-48 440077, Singapore', 'Block 77, Marine Drive, ,06-48 440077, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (90, 'Other Hardware', 'Toggle rope (red)', 4.90, 1, '2017-10-03 20:31:26.772294', 'cattlebounce', 'Multi-purpose toggle rope for tying heavy loads!', 'Block 77, Marine Drive, ,06-48 440077, Singapore', 'Block 77, Marine Drive, ,06-48 440077, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (91, 'Woman Fashion', 'Bieber fan shirt', 400.00, 1, '2017-10-03 20:32:40.476705', 'cattlebounce', 'Personally gifted by Justin Bieber himself, loaning out for at most 10 days! #bieliber', 'Block 77, Marine Drive, ,06-48 440077, Singapore', 'Block 77, Marine Drive, ,06-48 440077, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (92, 'Woman Fashion', 'Prada bag', 79.00, 1, '2017-10-03 20:33:27.240917', 'cattlebounce', 'Limited GOLD edition from 2017 summer', 'Block 77, Marine Drive, ,06-48 440077, Singapore', 'Block 77, Marine Drive, ,06-48 440077, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (93, 'Printers', 'Photocopier (Heavy)', 490.00, 1, '2017-10-03 20:35:12.697029', 'racingoblongata', 'We provide loaning services of printers to offices!', 'Blk 5000, Ang Mo Kio Ave 5 Techplace II, 03-04 569870, Singapore', 'Ang Mo Kio station');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (94, 'Printers', 'Printer (Light)', 390.00, 1, '2017-10-03 20:36:09.358272', 'racingoblongata', 'We provide loaning of photocopier for companies!', 'Blk 5000, Ang Mo Kio Ave 5 Techplace II, 03-04 569870, Singapore', 'Blk 5000, Ang Mo Kio Ave 5 Techplace II, 03-04 569870, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (95, 'Printers', 'Photocopier (A3)', 590.00, 1, '2017-10-03 20:37:11.670773', 'racingoblongata', 'We provide loaning services of photocopying machines to offices!', 'Blk 5000, Ang Mo Kio Ave 5 Techplace II, 03-04 569870, Singapore', 'Blk 5000, Ang Mo Kio Ave 5 Techplace II, 03-04 569870, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (96, 'Printers', 'Photocopier (Ultra)', 290.00, 1, '2017-10-03 20:38:41.58484', 'racingoblongata', 'We provide loaning services of photocopying machines to anyone!', 'Blk 5000, Ang Mo Kio Ave 5 Techplace II, 03-04 569870, Singapore', 'Blk 5000, Ang Mo Kio Ave 5 Techplace II, 03-04 569870, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (97, 'Men Fashion', 'Backpack', 20.00, 1, '2017-10-03 20:40:10.083355', 'agitatedlabored', 'Backpack for travellers!



Anti theft

Waterproof

Light Weight', 'Shanker Tekri Udoygnagar, 478963 Jamnagar, Singapore', 'Shanker Tekri Udoygnagar, 478963 Jamnagar, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (98, 'Woman Fashion', 'Slimming socks', 2.30, 1, '2017-10-03 20:40:51.293646', 'agitatedlabored', 'Slimming socks that guarantees you a slimmer leg after one month', 'Shanker Tekri Udoygnagar, 478963 Jamnagar, Singapore', 'Shanker Tekri Udoygnagar, 478963 Jamnagar, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (99, 'CD Games', 'Grand Theft Auto game', 0.00, 1, '2017-10-03 20:41:31.195376', 'agitatedlabored', 'GTA fans, unite!', 'Shanker Tekri Udoygnagar, 478963 Jamnagar, Singapore', 'Shanker Tekri Udoygnagar, 478963 Jamnagar, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (100, 'Men Fashion', 'Slick white NIKE sport shoes ', 213.45, 1, '2017-10-03 20:42:57.910038', 'agitatedlabored', 'US Limited edition of NIKE sport shoes. Not available in South East Asia', 'Shanker Tekri Udoygnagar, 478963 Jamnagar, Singapore', 'Shanker Tekri Udoygnagar, 478963 Jamnagar, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (101, 'Men Fashion', 'Digital Gold watch', 790.00, 1, '2017-10-03 20:43:44.790914', 'agitatedlabored', '99% Gold, wear it on your own risk', 'Shanker Tekri Udoygnagar, 478963 Jamnagar, Singapore', 'Shanker Tekri Udoygnagar, 478963 Jamnagar, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (102, 'Woman Fashion', 'Louise Vuitton handbag', 302.00, 1, '2017-10-03 20:44:51.54251', 'agitatedlabored', 'May not look like a LV bag, but it definitely is. Limited edition from Mexico.', 'Shanker Tekri Udoygnagar, 478963 Jamnagar, Singapore', 'Shanker Tekri Udoygnagar, 478963 Jamnagar, Singapore');
INSERT INTO items (itemid, type, name, price, avaliability, postedon, postedby, description, pickupat, returnat) VALUES (103, 'Men Fashion', 'Daniel Wellington Watch', 55.00, 1, '2017-10-03 20:45:58.527343', 'agitatedlabored', 'Light and easy to wear. I have several straps with different colors for you to choose from. ', 'Shanker Tekri Udoygnagar, 478963 Jamnagar, Singapore', 'Shanker Tekri Udoygnagar, 478963 Jamnagar, Singapore');


--
-- Data for Name: itemimages; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO itemimages (imagename, itemid) VALUES ('image59d351312e127.jpg', 2);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d35391eebb8.jpg', 3);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d354c27545b.jpg', 4);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d355d5362cd.jpg', 5);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d3562fafa00.jpg', 6);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d359e080b6e.jpg', 7);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d35a8fb4918.jpg', 8);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d35c59f2654.jpg', 9);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d35cb3b430c.jpg', 10);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d35d5f5b4b8.jpg', 13);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d35db2f2a89.jpg', 14);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d35e6cb9ff1.jpg', 15);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d35ec817087.jpg', 16);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d35f651b5f8.jpg', 17);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d35fcad33df.jpg', 18);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d361eeda4ed.jpg', 19);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d36222d98b4.jpg', 20);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d362671e6cf.jpg', 21);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d3628fe54b1.jpg', 22);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d362c42ded6.jpg', 23);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d363089a1bb.jpg', 24);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d36370bf7ac.jpg', 25);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d363cb817ae.jpg', 26);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d363fa16268.jpg', 27);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d36438625e6.jpg', 28);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d36471ec0ca.jpg', 29);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d364cd92bf0.jpg', 30);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d3653be3d5e.jpg', 31);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d365a3bbe05.jpg', 32);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d365d452963.jpg', 33);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d3663fd26c2.jpg', 34);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d3668fd8a36.jpg', 35);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d3672a97f17.jpg', 36);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d3676868cd8.jpg', 37);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d367b3a4726.jpg', 38);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d367f559626.jpg', 39);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d36834c4521.jpg', 40);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d368b66cc42.jpg', 41);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d368f6b9eeb.jpg', 42);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d3692d7a873.jpg', 43);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d36a430819f.jpg', 44);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d36a894f7b2.jpg', 45);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d36abbb9689.jpg', 46);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d36b153c447.jpg', 47);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d370866572a.jpg', 48);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d370ee86670.jpg', 49);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d37127b19b3.jpg', 50);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d3716dd6eda.jpg', 51);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d371c390075.jpg', 52);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d371f2e8966.jpg', 53);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d372496a0a0.jpg', 54);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d37289ce3ce.jpg', 55);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d372cb5f658.jpg', 56);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d3732d96c2e.jpg', 58);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d3735cd4b9b.jpg', 59);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d3739857501.jpg', 60);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d373c4171e2.jpg', 61);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d3740349f35.jpg', 62);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d374497281a.jpg', 63);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d37486bc9b9.jpg', 64);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d374c4d301e.jpg', 65);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d3750e141c4.jpg', 66);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d3754306ed9.jpg', 67);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d3758a5de74.jpg', 68);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d37b3871521.jpg', 69);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d37b86819bc.jpg', 70);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d37c5868b88.jpg', 71);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d37ca0684a1.jpg', 72);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d37d2c4473e.jpg', 73);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d37d94c7ba4.jpg', 74);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d37eb9dcbf9.jpg', 75);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d37f06b5833.jpg', 76);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d37f8950aa4.jpg', 77);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d37fdc0dbbb.jpg', 78);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d3803abbc17.jpg', 79);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d380b3f325a.jpg', 80);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d380f8f3881.jpg', 81);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d3812cd90bb.jpg', 82);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d3816765d10.jpg', 83);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d381b181c82.jpg', 84);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d381db54e7f.jpg', 85);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d3822281b57.jpg', 86);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d3828251fd6.jpg', 87);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d382b532423.jpg', 88);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d382df4e63f.jpg', 89);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d3831ebc88a.jpg', 90);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d38368745cc.jpg', 91);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d383973acf0.jpg', 92);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d38400aa2a3.jpg', 93);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d3843957764.jpg', 94);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d38477a3c16.jpg', 95);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d384d18ec50.jpg', 96);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d3852a1455f.jpg', 97);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d3855347aed.jpg', 98);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d3857b2fb06.jpg', 99);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d385d1de292.jpg', 100);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d38600c112c.jpg', 101);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d38643846f3.jpg', 102);
INSERT INTO itemimages (imagename, itemid) VALUES ('image59d3868680bcf.jpg', 103);


--
-- Name: items_itemid_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('items_itemid_seq', 103, true);

--
-- PostgreSQL database dump complete
--

