<?php

namespace Database\Seeders;

use App\Models\Destination;
use App\Models\DestinationAttraction;
use App\Models\DestinationImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    public function run(): void
    {
        // destination seed
        Destination::create([
            'name'       => 'Ijen Crater',
            'slug'       => 'ijen-crater',
            'desc1'      => "Experience the breathtaking <strong>Blue Flames</strong> and <strong>Tosca Lake of Ijen</strong>, East Java's hidden gem, <br> where adventure meets nature's raw beauty.",
            'desc2'       => "Join us at Ijen Crater and create memories that will last a lifetime. Book your adventure now and discover why this hidden gem of East Java is a must-visit destination for travelers from around the world.",]);
        Destination::create([
            'name'       => 'Gandrung Terracotta Park',
            'slug'       => 'gandrung-terracotta-park',
            'desc1'      => "Enchanting cultural heritage of Banyuwangi <br> featuring <strong>1.000 Statues of Gandrung Dancer</strong> and <strong>Live Performance of Gandrung Dance</strong>.",
            'desc2'      => "Don't miss the opportunity to immerse yourself in the enchanting world of Gandrung Terracotta Park. Plan your visit today and discover why this unique cultural destination is a must-see for travelers from around the world. Experience the magic of Banyuwangi's heritage and create memories that will last a lifetime.",]);
        Destination::create([
            'name'       => 'Sendang Seruni',
            'slug'       => 'sendang-seruni',
            'desc1'      => "Discover the tranquil beauty and cultural richness of Sendang Seruni, <br> where crystal-clear <strong>natural springs</strong> and <strong>lush greenery</strong> offer a serene escape into nature's embrace.",
            'desc2'      => "Don't miss the opportunity to experience the unique charm of Sendang Seruni. Plan your visit today and immerse yourself in the natural beauty and cultural richness of Banyuwangi's serene oasis. Whether you're seeking adventure or tranquility, Sendang Seruni promises an unforgettable journey into the heart of East Java.",]);

        // destination attraction seed - 1 ijen
        DestinationAttraction::create([
            'destination_id' => 1,
            'name'           => "Blue Flame",
            'desc'           => "Immerse yourself in the awe-inspiring beauty of Ijen Crater, a destination like no other in East Java, Indonesia. Known for its mesmerizing blue flames that dance in the night, Ijen offers a once-in-a-lifetime experience for those seeking adventure and natural splendor.",]);
        DestinationAttraction::create([
            'destination_id' => 1,
            'name'           => "Tosca Lake",
            'desc'           => "Embark on a thrilling hike to the crater's edge, where you'll be rewarded with the sight of the world's largest highly acidic crater lake, a stunning turquoise gem set against the rugged volcanic landscape. Witness the incredible sight of sulfur miners at work, extracting vibrant yellow sulfur amidst billowing clouds of volcanic gas.",]);
        DestinationAttraction::create([
            'destination_id' => 1,
            'name'           => "Sunrise over Ijen",
            'desc'           => "As dawn breaks, the views from Ijen are nothing short of spectacular. The sunrise paints the sky in hues of pink and orange, casting a magical glow over the serene lake and surrounding peaks. Whether you're an avid adventurer, a nature enthusiast, or a photographer looking for that perfect shot, Ijen Crater promises an unforgettable journey into the heart of nature's raw beauty.",]);
        
        // destination attraction seed - 2 terracotta
        DestinationAttraction::create([
            'destination_id' => 2,
            'name'           => "1.000 Statues of Gandrung Dancer",
            'desc'           => "Step into the heart of Banyuwangi's rich cultural heritage at Taman Gandrung Terakota. This captivating park is home to a stunning display of 1,000 statues of Gandrung dancers, each capturing the grace and elegance of this traditional dance form. As you wander through the park, you'll be transported into a world where art and culture come alive in the most beautiful way.",]);
        DestinationAttraction::create([
            'destination_id' => 2,
            'name'           => "Live Performance of Gandrung Dance",
            'desc'           => "At Taman Gandrung Terakota, you can witness the mesmerizing live performances of the Gandrung dance. These performances offer a unique and authentic glimpse into the traditions of Banyuwangi, showcasing the vibrant costumes, intricate movements, and enchanting music that define this beloved dance. It's an experience that will leave you spellbound and deeply connected to the local culture.",]);
        DestinationAttraction::create([
            'destination_id' => 2,
            'name'           => "Natural Landscapes",
            'desc'           => "Set against a backdrop of lush greenery and breathtaking landscapes, the park provides a serene and picturesque environment. Whether you're a culture enthusiast, a photographer, or simply looking for a peaceful retreat, Taman Gandrung Terakota offers a perfect blend of natural beauty and cultural richness.",]);
        
        // destination attraction seed - 3 seruni
        DestinationAttraction::create([
            'destination_id' => 3,
            'name'           => "Natural Springs",
            'desc'           => "Uncover the hidden gem of Banyuwangi at Sendang Seruni, a tranquil haven known for its crystal-clear natural springs and lush, verdant surroundings. Nestled in the heart of East Java, this serene destination offers a refreshing escape into nature's pure embrace, making it a must-visit spot for those seeking peace and relaxation.",]);
        DestinationAttraction::create([
            'destination_id' => 3,
            'name'           => "A Sacred Place",
            'desc'           => "More than just a beautiful natural site, Sendang Seruni holds deep cultural and spiritual significance for the local community. The spring is revered as a sacred place, steeped in local legends and traditions. Visitors often partake in quiet moments of reflection or local rituals, connecting with the profound cultural heritage of Banyuwangi.",]);

        // destination image seed - 1 ijen
        DestinationImage::create([
            'destination_id' => 1,
            'img'            => "dest-ijen-1.webp",
            'title'          => "Tosca Lake of Ijen",
            'desc'           => "Explore Tosca Lake in Ijen Crater, where stunning turquoise waters set amidst volcanic landscapes create a breathtaking adventure for nature enthusiasts.",]);
        DestinationImage::create([
            'destination_id' => 1,
            'img'            => "dest-ijen-2.webp",
            'title'          => "Tosca Lake of Ijen",
            'desc'           => "Explore Tosca Lake in Ijen Crater, where stunning turquoise waters set amidst volcanic landscapes create a breathtaking adventure for nature enthusiasts.",]);
        DestinationImage::create([
            'destination_id' => 1,
            'img'            => "dest-ijen-3.webp",
            'title'          => "Blue Fire",
            'desc'           => "Witness the rare and captivating blue flames of Ijen, a natural wonder caused by igniting sulfur gases, offering a truly unique and otherworldly experience for adventurers.",]);
        DestinationImage::create([
            'destination_id' => 1,
            'img'            => "dest-ijen-4.webp",
            'title'          => "Blue Fire",
            'desc'           => "Witness the rare and captivating blue flames of Ijen, a natural wonder caused by igniting sulfur gases, offering a truly unique and otherworldly experience for adventurers.",]);
        
        // destination image seed - 2 terracotta
        DestinationImage::create([
            'destination_id' => 2,
            'img'            => "dest-terakota-1.webp",
            'title'          => "Gandrung Terracotta Park",
            'desc'           => "Experience Taman Gandrung Terakota, an enchanting cultural park featuring terracotta statues and traditional Banyuwangi dance performances, providing a captivating glimpse into local heritage.",]);
        DestinationImage::create([
            'destination_id' => 2,
            'img'            => "dest-terakota-2.webp",
            'title'          => "Gandrung Terracotta Park",
            'desc'           => "Experience Taman Gandrung Terakota, an enchanting cultural park featuring terracotta statues and traditional Banyuwangi dance performances, providing a captivating glimpse into local heritage.",]);
        DestinationImage::create([
            'destination_id' => 2,
            'img'            => "dest-terakota-3.webp",
            'title'          => "Gandrung Terracotta Park",
            'desc'           => "Experience Taman Gandrung Terakota, an enchanting cultural park featuring terracotta statues and traditional Banyuwangi dance performances, providing a captivating glimpse into local heritage.",]);
        DestinationImage::create([
            'destination_id' => 2,
            'img'            => "dest-terakota-4.webp",
            'title'          => "Gandrung Terracotta Park",
            'desc'           => "Experience Taman Gandrung Terakota, an enchanting cultural park featuring terracotta statues and traditional Banyuwangi dance performances, providing a captivating glimpse into local heritage.",]);
        
        // destination image seed - 3 seruni
        DestinationImage::create([
            'destination_id' => 3,
            'img'            => "dest-seruni-1.webp",
            'title'          => "Sendang Seruni",
            'desc'           => "Discover Sendang Seruni, a serene mountain spring surrounded by lush greenery, offering a tranquil escape and a refreshing retreat for hikers and nature lovers.",]);
        DestinationImage::create([
            'destination_id' => 3,
            'img'            => "dest-seruni-2.webp",
            'title'          => "Sendang Seruni",
            'desc'           => "Discover Sendang Seruni, a serene mountain spring surrounded by lush greenery, offering a tranquil escape and a refreshing retreat for hikers and nature lovers.",]);
        DestinationImage::create([
            'destination_id' => 3,
            'img'            => "dest-seruni-3.webp",
            'title'          => "Sendang Seruni",
            'desc'           => "Discover Sendang Seruni, a serene mountain spring surrounded by lush greenery, offering a tranquil escape and a refreshing retreat for hikers and nature lovers.",]);
        DestinationImage::create([
            'destination_id' => 3,
            'img'            => "dest-seruni-4.webp",
            'title'          => "Sendang Seruni",
            'desc'           => "Discover Sendang Seruni, a serene mountain spring surrounded by lush greenery, offering a tranquil escape and a refreshing retreat for hikers and nature lovers.",]);
        
    }
}
