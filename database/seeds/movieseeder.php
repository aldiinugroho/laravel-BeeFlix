<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class movieseeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('movies')->insert([
            [
                'genre_id' => '1',
                'title' => 'Itaewon Class',
                'photo' => 'data_assets/itaewon.jpg',
                'description' => 'Itaewon Class menceritakan tetang mantan terpidana Park Sae-roy (Park Seo-joon) yang hidupnya telah terbalik setelah ia dikeluarkan dari sekolah karena meninju perundung, dan ayahnya terbunuh dalam suatu kecelakaan.',
                'rating' => '4'
            ],
            [
                'genre_id' => '1',
                'title' => 'The World of The Married',
                'photo' => 'data_assets/maried.jpg',
                'description' => 'The World of The Married bercerita tentang Joon Young anak Sun Woo dan Tae yang kebingungan dengan perceraian orang tuanya. Suatu hari Sun Woo membawa Joon Young. Penonton dibuat terhanyut dan menduga Sun Woo gila dan berniat akan membunuh Joon Young.',
                'rating' => '4'
            ],
            [
                'genre_id' => '1',
                'title' => 'Start-Up',
                'photo' => 'data_assets/start.jpg',
                'description' => 'Start-Up berkisah tentang perjuangan Suzy (Seol Dal Mi) serta Nam Joo Hyuk (Nam Do san) dalam mewujudkan mimpi masa muda mereka untuk bekerja di Sand Box yaitu sebuah tempat di Korea Selatan yang berhasil menciptakan berbagai perusahaan rintisan seperti layaknya Silicon Valley di Amerika.',
                'rating' => '3'
            ],
            [
                'genre_id' => '1',
                'title' => 'Welcome to Waikiki 2',
                'photo' => 'data_assets/waikiki.jpg',
                'description' => 'Mengisahkan tentang sekelompok laki-laki dan perempuan yang tinggal di wisma bernama Waikiki dan memiliki kesulitan hidup, tapi berusaha untuk menghadapinya dengan ceria dan penuh semangat.',
                'rating' => '3'
            ],
            // kids
            [
                'genre_id' => '2',
                'title' => 'We Bear Bears',
                'photo' => 'data_assets/webear.jpg',
                'description' => 'Tiga bersaudara ini marah kepada Nom Nom si koala. Dia adalah bintang terkenal di internet yang mendapat perlakuan khusus. Untuk itu, geng beruang ini mengikuti jejak Nom Nom untuk menjadi viral di internet. Saat melakukan aksinya, banyak warga kota yang menyukai aksi jenaka mereka.',
                'rating' => '4'
            ],
            [
                'genre_id' => '2',
                'title' => 'Rugrats',
                'photo' => 'data_assets/rugrats.jpg',
                'description' => 'Rugrats adalah serial televisi animasi Amerika yang dibuat oleh Arlene Klasky , Gabor Csupo dan Paul Germain untuk Nickelodeon . Acara ini berfokus pada sekelompok anak-anak muda, terutama Tommy , Chuckie , Phil , Lil , dan Angelica , dan kehidupan mereka sehari hari , biasanya dengan pengalaman hidup umum yang menjadi petualangan dalam imajinasi bayi.',
                'rating' => '5'
            ],
            [
                'genre_id' => '2',
                'title' => 'One Punch Man',
                'photo' => 'data_assets/onepunch.jpg',
                'description' => 'Di planet super benua yang tidak disebutkan namanya, monster aneh dan supervillains secara misterius muncul dan menyebabkan bencana. Untuk memerangi mereka, pahlawan dunia telah bangkit untuk melawan mereka. Saitama adalah salah satu pahlawan yang mampu mengatasi mereka.',
                'rating' => '4'
            ],
            [
                'genre_id' => '2',
                'title' => 'Power Ranger',
                'photo' => 'data_assets/power.jpg',
                'description' => 'Lima remaja biasa harus menjadi sesuatu yang luar biasa ketika mereka mengetahui bahwa kota kecil mereka Angel Grove - dan dunia - di ambang kehancuran oleh ancaman alien. Dipilih oleh takdir, para pahlawan kita dengan cepat menemukan bahwa merekalah satu-satunya yang dapat menyelamatkan planet ini.',
                'rating' => '3'
            ],
            // tv show
            [
                'genre_id' => '3',
                'title' => 'The Tonight Show Starring Jimmy Fallon',
                'photo' => 'data_assets/fallon.jpg',
                'description' => 'Aktor dan komedian Jimmy Fallon mengundang tokoh-tokoh populer untuk memberikan wawasan tentang kehidupan pribadi dan profesional mereka.',
                'rating' => '4'
            ],
            [
                'genre_id' => '3',
                'title' => 'The Late Late Show with James Corden',
                'photo' => 'data_assets/james.jpg',
                'description' => 'Aktor, penulis, produser, dan komedian James Corden terlibat dalam percakapan lucu dengan tamu terkenal diikuti dengan sketsa komedi dan pertunjukan musik.',
                'rating' => '5'
            ],
            [
                'genre_id' => '3',
                'title' => 'Lip Sync Battle',
                'photo' => 'data_assets/battle.jpg',
                'description' => 'Selebritas terkenal bersaing satu sama lain untuk menampilkan sinkronisasi bibir terbaik dari lagu-lagu terkenal dengan bantuan alat peraga dan kostum.',
                'rating' => '3'
            ],
            [
                'genre_id' => '3',
                'title' => 'Mastercheff US',
                'photo' => 'data_assets/master.jpg',
                'description' => 'Koki bergairah yang berasal dari berbagai penjuru AS bersaing satu sama lain dalam tantangan kuliner untuk menampilkan dan mengembangkan keterampilan memasak mereka dan memenangkan gelar koki terbaik.',
                'rating' => '5'
            ]
            
        ]);
    }
}
