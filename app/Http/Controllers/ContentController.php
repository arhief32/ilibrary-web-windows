<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContentController extends Controller
{
    public function selfStudyChamber()
    {
        $title = 'Consultation & Self-Study Chamber';
        $text = 'Consultation & Self-Study Chamber adalah ruangan multifungsi yang bertujuan sebagai tempat konsultasi secara one to one mengenai     persiapan segala berkas beasiswa. Selain itu, ruangan ini data digunakan sebagai self-study untuk pelajar dan mahasiswa yang ingin mendapatkan fasligas untuk fokus dalam berkarya. Dalam ruangan ini, direncanakan fasiltas dua kursi yang saling berhadapan dan satu meja yang juga bisa digunakan sebagai media tulis. Stop kontak juga disediakan untuk memudahkan akses charger laptop di salam ruangan. Desain ruangan dibuat transparant dan kedap suara seringa pengguna data merasa lebih private. '; 
        $images = [
            'img/bg-img/00003.jpg'
        ];
        $price = '1.000.000';

        return view('content', [
            'title' => $title,
            'text' => $text,
            'images' => $images,
            'price' => $price,
        ]);
    }

    public function studyGroupChamber()
    {
        $title = 'Study Group Chamber';
        $text = 'Study Group Chamber adalah ruangan untuk kelompok belajar yang dapat diisi oleh 5 - 7 orang. Ruangan ini bertujuan untuk kelompok belajar kecil yang ingin berkolaborasi dan berdiskusi. Fasilitas yang disediakan ialah, satu buah computer dan Monitor Plasma yang data terkoneksi ke komputer sebagai layar jika dilakukan presentasi. Ruangan ini akan menyediakan media tulis yaitu  aklirik/kaca dengan dasar warna putih. ';
        $images = [
            'img/bg-img/00003.jpg'
        ];
        $price = '1.000.000';

        return view('content', [
            'title' => $title,
            'text' => $text,
            'images' => $images,
            'price' => $price,
        ]);
    }

    public function lesehan()
    {
        $title = 'Lesehan';
        $text = 'Lesehan Chamber adalah ruangan yang bertujuan sebagai kolaborasi secara santai, yang bisa digunakan untuk sandar dan baring-baring sambil belajar. Ruangan ini dilengkapi dengan proyektor dan satu unit computer untuk kebutuhan presetasi. Sofa angin dan ornament ruangan santai juga disediakan di ruangan ini.  Kapasitas ruangan dapat diisi hingga 25 orang. ';
        $images = [
            'img/bg-img/00003.jpg'
        ];
        $price = '1.000.000';

        return view('content', [
            'title' => $title,
            'text' => $text,
            'images' => $images,
            'price' => $price,
        ]);
    }

    public function hall()
    {
        $title = 'hall';
        $text = 'Hall adalah multifungsi ruangan yang dapat digunakan sebagai ruangan seminar, talk, teaching yang data dies oleh 100 orang. Ruang ini data di tata menjadi theatre room, seminar room, dan ruang tengah. Ruangan ini dap menjadi pusat kegiatan belajar yang menampung banyak pembelajar dan mewadahi annual, monthly, and weekly event. ';
        $images = [
            'img/bg-img/00003.jpg'
        ];
        $price = '1.000.000';

        return view('content', [
            'title' => $title,
            'text' => $text,
            'images' => $images,
            'price' => $price,
        ]);
    }

    public function readingRoom()
    {
        $title = 'Reading Room';
        $text = 'Reading Chamber adalah ruangan khusus untuk membaca yang akan di tata dengan sangat tenang untuk kebutuhan membaca. Meja dengan sekat akan disediakan untuk membuat pengguna lebih nyaman dalam membaca. ';
        $images = [
            'img/bg-img/00003.jpg'
        ];
        $price = '1.000.000';

        return view('content', [
            'title' => $title,
            'text' => $text,
            'images' => $images,
            'price' => $price,
        ]);
    }

    public function refreshmentCorner()
    {
        $title = 'Refreshment Corner';
        $text = 'Refreshment Corner galah ruangan yang kudus diperuntukkan untuk makan makarna berat. pada ruangan ini juga akan di tata secara ternura tengan sistema food centre yang akan disediakan kedai makanan berat, cemilan, dan minimal dari UMKM yang dapat diajak bekerjasama. ';
        $images = [
            'img/bg-img/00003.jpg'
        ];
        $price = '1.000.000';

        return view('content', [
            'title' => $title,
            'text' => $text,
            'images' => $images,
            'price' => $price,
        ]);
    }
}
