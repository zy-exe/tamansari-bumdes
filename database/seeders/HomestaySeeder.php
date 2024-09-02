<?php

namespace Database\Seeders;

use App\Models\Homestay;
use App\Models\HomestayImage;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HomestaySeeder extends Seeder
{
    public function run(): void
    {
        // homestay seed
        Homestay::create([
            'name' => 'Vivi Homestay',]);
        Homestay::create([
            'name' => 'Java Ijen Homestay',]);
        Homestay::create([
            'name' => 'Hadi Homestay',]);
        
        // vivi homestay image seed
        HomestayImage::create([
            'homestay_id' => 1,
            'img'         => 'hs-vivi-1.webp',
            'desc'        => 'Terrace',]);
        HomestayImage::create([
            'homestay_id' => 1,
            'img'         => 'hs-vivi-2.webp',
            'desc'        => 'Entrance',]);
        HomestayImage::create([
            'homestay_id' => 1,
            'img'         => 'hs-vivi-3.webp',
            'desc'        => 'Double bed room',]);
        HomestayImage::create([
            'homestay_id' => 1,
            'img'         => 'hs-vivi-4.webp',
            'desc'        => 'Twin bed room',]);
        HomestayImage::create([
            'homestay_id' => 1,
            'img'         => 'hs-vivi-5.webp',
            'desc'        => 'Bathroom',]);
        HomestayImage::create([
            'homestay_id' => 1,
            'img'         => 'hs-vivi-6.webp',
            'desc'        => 'Front yard',]);

        // java homestay image seed
        HomestayImage::create([
            'homestay_id' => 2,
            'img'         => 'hs-java-1.webp',
            'desc'        => 'Terrace',]);
        HomestayImage::create([
            'homestay_id' => 2,
            'img'         => 'hs-java-2.webp',
            'desc'        => 'Terrace',]);
        HomestayImage::create([
            'homestay_id' => 2,
            'img'         => 'hs-java-3.webp',
            'desc'        => 'Bedroom',]);
        HomestayImage::create([
            'homestay_id' => 2,
            'img'         => 'hs-java-4.webp',
            'desc'        => 'Bedroom',]);
        HomestayImage::create([
            'homestay_id' => 2,
            'img'         => 'hs-java-5.webp',
            'desc'        => 'Bathroom',]);
        HomestayImage::create([
            'homestay_id' => 2,
            'img'         => 'hs-java-6.webp',
            'desc'        => 'Front yard',]);

        // hadi homestay image seed
        HomestayImage::create([
            'homestay_id' => 3,
            'img'         => 'hs-hadi-1.webp',
            'desc'        => 'Terrace',]);
        HomestayImage::create([
            'homestay_id' => 3,
            'img'         => 'hs-hadi-2.webp',
            'desc'        => 'Terrace',]);
        HomestayImage::create([
            'homestay_id' => 3,
            'img'         => 'hs-hadi-3.webp',
            'desc'        => 'Bedroom',]);
        HomestayImage::create([
            'homestay_id' => 3,
            'img'         => 'hs-hadi-4.webp',
            'desc'        => 'Bathroom',]);
        HomestayImage::create([
            'homestay_id' => 3,
            'img'         => 'hs-hadi-5.webp',
            'desc'        => 'Entrance',]);
        HomestayImage::create([
            'homestay_id' => 3,
            'img'         => 'hs-hadi-6.webp',
            'desc'        => 'Fish pond',]);
    }
}
