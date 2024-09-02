<?php

namespace Database\Seeders;

use App\Models\Pack;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PackSeeder extends Seeder
{
    public function run(): void
    {
        // pack study seed
        Pack::create([
            'type'            => "study",
            'name'            => "Study to Tamansari 1",
            'desc'            => "Learn to make <strong>traditional food</strong> and explore the wonders of <strong>Seruni tourism</strong>.",
            'duration_days'   => 1,
            'duration_nights' => 0,
            'price'           => 220000,
            'min_book'        => 20,
            'fac_homestay'    => false,
            'fac_guide'       => false,
            'fac_insurance'   => false,
            'fac_meal'        => 1,
            'fac_snack'       => 2,
            'fac_merchandise' => true,]);
        Pack::create([
            'type'            => "study",
            'name'            => "Study to Tamansari 2",
            'desc'            => "Immerse yourself in <strong>Osing culture</strong>, learn to make <strong>traditional food</strong>, create beautiful <strong>Banyuwangi batik</strong>, and explore the wonders of <strong>Seruni tourism</strong>.",
            'duration_days'   => 2,
            'duration_nights' => 1,
            'price'           => 620000,
            'min_book'        => 20,
            'fac_homestay'    => true,
            'fac_guide'       => false,
            'fac_insurance'   => false,
            'fac_meal'        => 4,
            'fac_snack'       => 2,
            'fac_merchandise' => true,]);

        // pack private seed
        Pack::create([
            'type'            => "private",
            'name'            => "Private Trip - Explore Ijen",
            'desc'            => "Discover the mesmerizing <strong>Ijen Blue Fire</strong>, witness the breathtaking <strong>sunrise over Ijen</strong>, and marvel at the beauty of <strong>Tosca Lake</strong>.",
            'duration_days'   => 2,
            'duration_nights' => 1,
            'price'           => 1400000,
            'min_book'        => 1,
            'fac_homestay'    => true,
            'fac_guide'       => true,
            'fac_insurance'   => true,
            'fac_meal'        => 1,
            'fac_snack'       => 0,
            'fac_merchandise' => false,]);
        Pack::create([
            'type'            => "private",
            'name'            => "Private Trip - Explore Seruni",
            'desc'            => "Discover the mesmerizing <strong>Ijen Blue Fire</strong>, witness <strong>sunrise over Ijen</strong>, the beauty of <strong>Tosca Lake</strong>, and enjoy the serene natural springs of <strong>Sendang Seruni</strong>.",
            'duration_days'   => 2,
            'duration_nights' => 1,
            'price'           => 1710000,
            'min_book'        => 1,
            'fac_homestay'    => true,
            'fac_guide'       => true,
            'fac_insurance'   => true,
            'fac_meal'        => 1,
            'fac_snack'       => 0,
            'fac_merchandise' => false,]);
        Pack::create([
            'type'            => "private",
            'name'            => "Private Trip - Explore Ijen Terracotta",
            'desc'            => "Discover the mesmerizing <strong>Ijen Blue Fire</strong>, witness <strong>sunrise over Ijen</strong>, the beauty of <strong>Tosca Lake</strong>, and immerse yourself in the cultural richness of <strong>Taman Gandrung Terakota</strong>, featuring live performances of the <strong>Gandrung dance</strong>.",
            'duration_days'   => 2,
            'duration_nights' => 1,
            'price'           => 1800000,
            'min_book'        => 1,
            'fac_homestay'    => true,
            'fac_guide'       => true,
            'fac_insurance'   => true,
            'fac_meal'        => 1,
            'fac_snack'       => 0,
            'fac_merchandise' => false,]);
        Pack::create([
            'type'            => "private",
            'name'            => "Private Trip - Explore DEWITARI",
            'desc'            => "Embark on the ultimate adventure, visiting <strong>Ijen Crater</strong>, the tranquil <strong>Sendang Seruni</strong>, and the enchanting <strong>Taman Gandrung Terakota</strong>.",
            'duration_days'   => 2,
            'duration_nights' => 1,
            'price'           => 1900000,
            'min_book'        => 1,
            'fac_homestay'    => true,
            'fac_guide'       => true,
            'fac_insurance'   => true,
            'fac_meal'        => 1,
            'fac_snack'       => 0,
            'fac_merchandise' => false,]);

        // pack group seed
        Pack::create([
            'type'            => "group",
            'name'            => "Group Trip - Explore Ijen 1",
            'desc'            => "Discover the mesmerizing <strong>Ijen Blue Fire</strong>, witness the breathtaking <strong>sunrise over Ijen</strong>, and marvel at the beauty of <strong>Tosca Lake</strong>.",
            'duration_days'   => 2,
            'duration_nights' => 1,
            'price'           => 590000,
            'min_book'        => 4,
            'fac_homestay'    => true,
            'fac_guide'       => true,
            'fac_insurance'   => true,
            'fac_meal'        => 1,
            'fac_snack'       => 0,
            'fac_merchandise' => false,]);
        Pack::create([
            'type'            => "group",
            'name'            => "Group Trip - Explore Ijen 2",
            'desc'            => "Discover the mesmerizing <strong>Ijen Blue Fire</strong>, witness the breathtaking <strong>sunrise over Ijen</strong>, and marvel at the beauty of <strong>Tosca Lake</strong>.",
            'duration_days'   => 2,
            'duration_nights' => 1,
            'price'           => 630000,
            'min_book'        => 20,
            'fac_homestay'    => true,
            'fac_guide'       => true,
            'fac_insurance'   => true,
            'fac_meal'        => 1,
            'fac_snack'       => 0,
            'fac_merchandise' => false,]);
        Pack::create([
            'type'            => "group",
            'name'            => "Group Trip - Explore DEWITARI 1",
            'desc'            => "Embark on the ultimate adventure, visiting <strong>Ijen Crater</strong>, the tranquil <strong>Sendang Seruni</strong>, and the enchanting <strong>Taman Gandrung Terakota</strong> with live performances of the Gandrung dance.",
            'duration_days'   => 1,
            'duration_nights' => 0,
            'price'           => 415000,
            'min_book'        => 20,
            'fac_homestay'    => false,
            'fac_guide'       => true,
            'fac_insurance'   => true,
            'fac_meal'        => 1,
            'fac_snack'       => 1,
            'fac_merchandise' => false,]);
        Pack::create([
            'type'            => "group",
            'name'            => "Group Trip - Explore DEWITARI 2",
            'desc'            => "Embark on the ultimate adventure, visiting <strong>Ijen Crater</strong>, the tranquil <strong>Sendang Seruni</strong>, and the enchanting <strong>Taman Gandrung Terakota</strong> with live performances of the Gandrung dance.",
            'duration_days'   => 2,
            'duration_nights' => 1,
            'price'           => 1030000,
            'min_book'        => 20,
            'fac_homestay'    => true,
            'fac_guide'       => true,
            'fac_insurance'   => true,
            'fac_meal'        => 3,
            'fac_snack'       => 1,
            'fac_merchandise' => false,]);
    }
}
