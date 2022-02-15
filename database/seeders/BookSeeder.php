<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'id'=>1,
                'title'=>'5 CM',
                'author'=>'Donny Dhirgantoro',
                'description'=>'Novel ini menceritakan perjalanan lima orang sahabat yang bernama Arial, Riani Zafran, Ian, dan Genta di gunung yang terjal. Mereka harus menghadapi rintangan medan pegunungan yang tidak mudah dilalui.'
            ],
            [
                'id'=>2,
                'title'=>'Ayat-Ayat Cinta',
                'author'=>'Habiburrahman El Shirazy',
                'description'=>'Cerita fiktif karangan Habiburrahman ini berkisahkan tentang percintaan Fahri, Maria, dan Aisha yang berlatarkan nuansa Isalmi. Novel Ayat-Ayat Cinta berhasil meraih berbagai penghargaan, baik di Indonesia maupun mancanegara.'
            ],
            [
                'id'=>3,
                'title'=>'Bumi Manusia',
                'author'=>'Pramoedya Ananta Toer',
                'description'=>'Pramoedya Ananta Toer merupakan tokoh sastrawan yang sangat dikenal luas masyarakat Indonesia atas karya-karya apiknya. Meski beberapa kali terlibat dalam situasi panas politik dan idealis negeri sendiri, Pram tetap menuliskan kisah-kisah luar biasa.'
            ],
            [
                'id'=>4,
                'title'=>'Lelaki Harimau',
                'author'=>'Eka Kurniawan',
                'description'=>'Setelah terbitnya Cantik Itu Luka, Eka Kurniawan menerbitkan kembali novel Indonesia terbaru miliknya yang berjudul Lelaki Harimau. Salah satu rekomendasi novel Indonesia terbaik ini menceritakan kisah satu keluarga dan bermacam masalahnya.'
            ],
            [
                'id'=>5,
                'title'=>'Cantik Itu Luka',
                'author'=>'Eka Kurniawan',
                'description'=>'Cantik Itu Luka merupakan novel pertama karya penulis Indonesia yang bernama Eka Kurniawan. Novel ini mengangkat cerita seorang perempuan yang berparas cantik dan manis, namun memiliki kehidupan yang tragis. Dengan kekayaan amanatnya, Cantik Itu Luka memberi pengalaman membaca yang penuh magis dan tangis.'
            ],
            [
                'id'=>6,
                'title'=>'Laskar Pelangi',
                'author'=>'Andrea Hirata',
                'description'=>'Kisah anak-anak tidak selalu diwarnai dengan bermacam sukacita. Laskar Pelangi pun hadir dengan ceritanya yang berbeda. Di balik canda tawa dan keseruan anak-anak SD Muhammadiyah Belitung, terdapat duka dan masalah pahit yang mereka deritakan.'
            ],
            [
                'id'=>7,
                'title'=>'Dilan',
                'author'=>'Pidi Baiq',
                'description'=>'Siapa tak kenal Dilan? Salah satu novel terlaris karya Pidi Baiq ini bahkan juga memecahkan rekor jumlah penonton saat diangkat menjadi film layar lebar dengan judul sama. Seperti diketahui, novel Dilan bercerita tentang seorang remaja sekolah menengah atas (SMA) dan anggota geng motor di Bandung yang memiliki cara unik dalam mengambil hati wanita yang disukainya.'
            ],
            [
                'id'=>8,
                'title'=>'Rindu',
                'author'=>'Tere Liye',
                'description'=>'Rindu merupakan salah satu novel yang populer karya penulis Tere Liye. Novel ini berlatar perjalanan sebuah kapal yang akan berlayar dari Indonesia ke Jeddah, Arab Saudi. Dalam buku ini, kamu akan menikmati cerita menarik tentang cinta dari pasangan-pasangan yang menaiki kapal tersebut.'
            ],
        ]);
    }
}
