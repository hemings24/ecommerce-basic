<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
   public function run()
   {
      $id = '1';
      $title = 'LG UP81';
      Product::create([
         'id'         => $id,
         'title'      => $title,
         'price'      => '459.00',
         'quantity'   => '3',
         'desc'       => '1. Incredible 4K Ultra HD Experience vibrant picture quality in incredible detail with up to 4K clarity and lavish colours and contrast depth 2. Absorbing and atmospheric sound quality LG’s AI Sound feature puts you right at the centre of the action, creating an absorbing atmosphere in any room. 3. LG’s webOS smart platform Access all of your must-have apps like Freeview Play, NOW TV, Netflix, Prime Video, Disney+, Twitch and more on LG’s easy-to-use webOS smart platform. 4. Sleek and slim design with crescent stand A beautifully crafted TV to enhance any room, supported by a unique crescent stand design. 5. Easy voice control command with Google Assistant and Alexa Use voice control command with Google Assistant and Alexa to control your TV and your entire smart home with ease.',
         'short_desc' => 'LG 55UP81006LR 55 inch 4K UHD HDR Smart LED TV (2021 Model) [Energy Class G]',
         'image_name' => $id.' - '.$title,
         'image_type' => '.jpg'
      ]);

      $id = '2';
      $title = 'Samsung';
      Product::create([
         'id'         => $id,
         'title'      => $title,
         'price'      => '379.00',
         'quantity'   => '5',
         'desc'       => 'Experience Life In Ultra HD With The AU8000 – Our 43 Inch Smart TV doesn’t compromise on greatness. Offering dynamic crystal colour, adaptive sound audio, built in voice assistants &amp; streaming services; all contained within a sleek air slim design. Witness stunning visuals on your Samsung Smart TV- immerse yourself in the magic of tv with striking detail that bursts from the screen. Get that cinematic feeling straight from your living room.',
         'short_desc' => 'Samsung AU8000 43 Inch Smart TV (2021) - Crystal 4K AirSlim Smart TV with HDR10+',
         'image_name' => $id.' - '.$title,
         'image_type' => '.jpg'
      ]);

      $id = '3';
      $title = 'JVC Fire TV';
      Product::create([
         'id'         => $id,
         'title'      => $title,
         'price'      => '269.00',
         'quantity'   => '4',
         'desc'       => 'JVC Fire TV is a new generation of television featuring the Fire TV experience built-in and including a Voice Remote with Alexa. With true-to-life 4K Ultra HD picture quality and access to movies and TV shows you love, JVC delivers a TV experience that gets smarter every day. The Voice Remote with Alexa lets you do everything you would expect from a remote—plus, easily launch apps, search for titles, play music, switch inputs, control compatible smart home devices, and more, using your voice.Smart but simple in every way. Just plug it in, connect to Wi-Fi, and enjoy.',
         'short_desc' => 'JVC Fire TV 43 inch Smart 4K Ultra HD HDR LED TV with FreeviewPlay and true-to-life 4K',
         'image_name' => $id.' - '.$title,
         'image_type' => '.jpg'
      ]);

      $id = '4';
      $title = 'Bosch Rotak';
      Product::create([
         'id'         => $id,
         'title'      => $title,
         'price'      => '119.00',
         'quantity'   => '7',
         'desc'       => 'Perfectly cut lawn. You are guaranteed a perfect finish thanks to the rotary blade and the advanced 1300W Powerdrive motor. The integrated rear roller also gives your lawn a lovely striped effect With inset front heels and grass combs the Rotak 34 R can cut grass growing close to or over the edge of your lawn. This ensures that no uncut grass is left behind even when cutting up against flower beds, walls or paths, reducing the need for trimming.',
         'short_desc' => 'Bosch Electric Lawnmower Rotak 34R 1300 W, Cutting Width: 34 cm, Cutting Height: 20-70 mm',
         'image_name' => $id.' - '.$title,
         'image_type' => '.jpg'
      ]);

      $id = '5';
      $title = 'Flymo 32V';
      Product::create([
         'id'         => $id,
         'title'      => $title,
         'price'      => '89.99',
         'quantity'   => '3',
         'desc'       => 'Utilises a powerful 1200W motor and 32cm cutting width so you can tackle your lawn with ease. Choose your ideal cutting height with a choice of three settings between 20 to 60 mm for a perfect lawn. Equipped with dual lever handles allow you to comfortably operate the lawn mower with either hand for greater flexibility and manoeuvrability. It’s 10m cable gives you the freedom and flexibility to move around your garden area without the need to worry about reach. Equipped with a large 29L grass box so you can spend less time emptying as well as a rear roller for a striped finish to your lawn',
         'short_desc' => 'Flymo Chevron 32 V Electric Wheeled Lawn Mower, 1200 W, Cutting Width 32 cm. Dual levers',
         'image_name' => $id.' - '.$title,
         'image_type' => '.jpg'
      ]);

      $id = '6';
      $title = 'Ryobi OLM';
      Product::create([
         'id'         => $id,
         'title'      => $title,
         'price'      => '159.95',
         'quantity'   => '2',
         'desc'       => '33cm (13”) cutting path designed for easy manoeuvrability around the garden. Cordless Battery convenience - no potentially dangerous mains cable or messy petrol. Mow right to the perimeter with easy edge grass Comb feature – no need to finish it off with a grass trimmer. 5-Levels of cutting height (25-65mm) and 3-position telescopic handle. Part of the Ryobi one+ system – over 100 tools powered by one battery',
         'short_desc' => 'Ryobi OLM1833B 18V ONE+ Cordless 33cm Lawnmower. Designed for easy manoeuvrability',
         'image_name' => $id.' - '.$title,
         'image_type' => '.jpg'
      ]);

      $id = '7';
      $title = 'PUMA Ultra';
      Product::create([
         'id'         => $id,
         'title'      => $title,
         'price'      => '79.99',
         'quantity'   => '4',
         'desc'       => 'Heralding a new generation of speed, the ULTRA 3.3 boots are the weapon of choice on firm or artificial ground. These lightweight mesh shoes with internal SPEEDCAGE are fused to PUMA’s ultra fast SpeedUnit outsole with running-spike DNA at their core. The GripControl skin delivers decisive power on the ball to ensure you hit the back of the net every time.',
         'short_desc' => 'Heralding a new generation of speed, the ULTRA 3.3 boots are the choice on fg or ag',
         'image_name' => $id.' - '.$title,
         'image_type' => '.jpg'
      ]);

      $id = '8';
      $title = 'Adidas Messi';
      Product::create([
         'id'         => $id,
         'title'      => $title,
         'price'      => '56.79',
         'quantity'   => '5',
         'desc'       => 'For amazing comfort, make sure not to miss out on the Adidas Messi 16.3 fg/ag football boots. Synthetic agilityknit zero wear-in upper, molds to your foot for a snug fit that offers unbeatable ball feel and support. Monotongue construction provides explosive agility and keeps debris out of you cleat during the heat of battle. Mess i fg stud pattern offers insane speed, agility and traction on firm ground playing surfaces.',
         'short_desc' => 'For amazing comfort, make sure not to miss out on the Adidas Messi 16.3 fg/ag football boots',
         'image_name' => $id.' - '.$title,
         'image_type' => '.jpg'
      ]);

      $id = '9';
      $title = 'Nike Phantom';
      Product::create([
         'id'         => $id,
         'title'      => $title,
         'price'      => '78.35',
         'quantity'   => '2',
         'desc'       => 'Nike football boot. Designed in mesh for excellent transpiration during the game. Comfortable and durable shoe.Ideal for all football lovers',
         'short_desc' => 'Nike Phantom Venom Academy Fg, Unisex Adults Football Shoes Football Shoes, 7.5 UK (42 EU)',
         'image_name' => $id.' - '.$title,
         'image_type' => '.jpg'
      ]);

      $id = '10';
      $title = 'HP OMEN';
      Product::create([
         'id'         => $id,
         'title'      => $title,
         'price'      => '924.59',
         'quantity'   => '8',
         'desc'       => 'Ultra-thin, ultra-light, and unbelievably powerful, the OMEN 15-dh1005na Laptop proves that you do not have to sacrifice power for size.With high-performance NVIDIA GeForce RTX 2060 graphics, 10th generation Intel Core i7-10750H processing power, and a blazing-fast refresh rate packed into a sleek design, this laptop lets you play like a pro and stay on-the-go. Designed to run any game you throw at it, get ready to crank up the settings.',
         'short_desc' => 'HP OMEN 15.6 inch Laptop PC 15-dh1005sa, Intel i7, 16GB RAM, RTX 2060, 1TB, FHD',
         'image_name' => $id.' - '.$title,
         'image_type' => '.jpg'
      ]);

      $id = '11';
      $title = 'Acer Aspire';
      Product::create([
         'id'         => $id,
         'title'      => $title,
         'price'      => '789.50',
         'quantity'   => '5',
         'desc'       => 'PREMIUM PERFORMANCE: The powerful Intel Core i5 CPU and 8GB of RAM ensure you will breeze through the most demanding of tasks. VISIBLY STUNNING: The 15.6-inch Full HD IPS screen combines incredibly sharp detail, vivid lifelike colours and wide viewing angles for a brilliant visual experience. INGENIOUS DESIGN: The re-designed chassis features a raised hinge which provides a more comfortable typing position, clearer audio and better cooling. PLENTY OF STORAGE: With a 1TB SSD, you get plenty of room for all your apps, documents and media as well as lightning-fast performance. ALL-DAY BATTERY: The battery lasts up-to 8.5 hours from a single charge, allowing you to use it all day without having to worry about charging',
         'short_desc' => 'Acer Aspire 5 A515-56 15.6 inch Laptop - Intel Core i5-1135G7, 8GB, 1TB SSD, Full HD Display',
         'image_name' => $id.' - '.$title,
         'image_type' => '.jpg'
      ]);

      $id = '12';
      $title = 'Dell Inspiron';
      Product::create([
         'id'         => $id,
         'title'      => $title,
         'price'      => '299.99',
         'quantity'   => '9',
         'desc'       => 'PCIe NVMe solid-state drives (SSD) provide more responsive, quieter performance along with improved shock resistance when compared to traditional hard disk drives (HDD) 15.6-inch FHD (1920 x 1080) Anti-glare LED Backlight Non-Touch Narrow Border WVA Display. Intel Pentium Silver N5030 Processor (4MB Cache, 3.1 GHz) Intel UHD 605 with shared graphics memory 128GB M.2 PCIe NVMe Solid State Drive 4GB,1x4GB, DDR4, 2400MHz Memory',
         'short_desc' => 'Dell Inspiron 3502 15.6 inch FHD Laptop, Intel Pentium, 4GB RAM, 128GB SSD, Windows 11',
         'image_name' => $id.' - '.$title,
         'image_type' => '.jpg'
      ]);
   }
}