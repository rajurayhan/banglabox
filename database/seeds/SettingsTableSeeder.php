<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'website_title'     => 'BanglaBox', 
            'logo'              => 'logo_default.png', 
            'address'           => 'Flat 9B, 9th Floor, House 8/A-10, Road 13(New), Dhanmondi, Dhaka 1205, Bangladesh', 
            'contact'           => '+8801636007777',
            'email'             => 'info@banglabox.net',
            'about'             => 'নির্ভরতার নতুন মাত্রা নিয়ে এসেছে বাংলা বক্স।
            গল্প-কাহিনী থেকে শুরু করে সারা বিশ্ব, হারিয়ে যাওয়া শহর, হলিউড-বলিউড, বিনোদণের সব খবর- সব এক পাতার মাঝেই চোখ রাখলেই পেয়ে যাবেন। তাই আমাদের সাথেই উপভোগ করুন মজার মজার তথ্য। 
            রূপকথার মত করে বিনোদনের মধ্য দিয়ে শিক্ষার বিষয় গুলো সহজ ভাষায় তুলে ধরতেই বাংলা বক্স। রূপকথার গল্প যেমন করে পড়তে বসলেই হুট করে শেষ হয়ে যায়, ঠিক তেমন সহজ ভাষায় কঠিন বিষয়কে আলোচনা করতেই আমরা নেমেছি আপনাদের মাঝে। আমরা আরো নিয়ে আসবো চমৎকার বিষয় সমূহের চমৎকার কিছু ভিডিওচিত্র। 
            বিনোদন, জীবন যাপন, বিস্ময়কর সব টুকিটাকি খবর আর অফুরন্ত মজার টিপস পেতে লাইক করুন – বাংলা বক্স',
        ]);
    }
}
