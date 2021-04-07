<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('articles')->insert([
            [
                'title' => 'Pantai Nusa Dua Bali, Bali',
                'category_id' =>  '1',
                'user_id' => '1',
                'description' => 'Pantai Nusa Dua disukai wisatawan domestik untuk dikunjungi saat liburan di Bali. Karena pantai Nusa Dua salah satu pantai terbersih di pulau Bali. Kebersihan pantai di Nusa Dua yang selalu terjaga membuat saya menaruh pantai Nusa Dua Bali di nomer satu dalam daftar 10 pantai terindah di Bali.',
                'image' => 'Pantai-Nusa-Dua-Bali.jpg'
            ],
            [
                'title' => 'Gunung Semeru',
                'category_id' => '2',
                'user_id' => '1' ,
                'description' => 'Gunung Semeru merupakan gunung paling indah sekaligus paling tinggi di Pulau Jawa. Gunung ini telah menjadi legenda sejak lama. Mulai dari jaman Su Hok Gie hingga jamannya pendaki kekinian seperti sekarang. Keindahan gunung ini tak pernah lekang termakan waktu. Keindahan gunung ini membuat para pendaki dari berbagai daerah rela datang jauh-jauh. Gunung Semeru juga merupakan salah satu gunung paling ramai. Maksimal kuota pendakian yang hanya 500 membuat para pendaki kadang harus antre di Ranu Pani. Sama seperti Rinjani, Gunung Semeru juga memiliki permata super cantik dalam diri Ranu Kumbolo. Sebuah danau alami yang berada pada ketinggian 2.400 mdpl. Di depan Ranu Kumbolo ada Tanjakan Cinta yang juga tidak kalah terkenal di kalangan pendaki. Kemudian ada Oro-oro Ombo yang ditumbuhi oleh bunga lavender. Dengan semua keindahan yang dimilikinya, wajar kalau Gunung Semeru menjadi incaran para pendaki dimanapun berada. Apalagi keindahan gunung ini juga pernah di-film kan.',
                'image' => '5dxir4jh9.jpg'
            ],
        ]);
    }
}
