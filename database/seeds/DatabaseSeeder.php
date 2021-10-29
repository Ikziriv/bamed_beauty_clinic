<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        App\User::create([
            'name' => 'Super Admin',
			'email' => 'sa@test.io',
            'password' => bcrypt('secret'),
        ]);

        App\Modules\Category\Category::create([
            'name' => 'Kesehatan',
        ]);
        
        App\Modules\Post\Post::create([
            'category_id' => 1,
            'title' => 'Ragam Terapi Untuk Cegah Penuaan Dan Menjaga Kulit Tetap Sehat.',
            'img_path' => '',
            'sub_title' => 'PENUAAN PADA KULIT DAPAT TERJADI SEIRING BERTAMBAHNYA USIA.',
            'content' => trim('Penuaan pada kulit dapat terjadi seiring bertambahnya usia. Selain menerapkan gaya hidup sehat, berbagai terapi untuk meremajakan kulit dan menjaga kulit tetap sehat juga bisa dilakukan.'),
        ]);
        
        App\Modules\Contact\Contact::create([
            'title' => 'Contact Us And Get In Touch',
            'content' => trim('Punya pertanyaan seputar perawatan kulit atau pelayanan kami? Hubungi kami melalui channel yang tersedia dibawah ini dan customer care kami akan membantu menjawab kebutuhan Anda.'),
        ]);
        
        App\Modules\About\About::create([
            'img_head' => 'img/bamed/about.png',
            'title' => 'Bamed Skin Care hadir untuk membantu Anda memiliki kulit yang sehat dengan metode perawatan yang terukur dan aman dan dilakukan profesional medis di bidang ilmu kesehatan kulit dan kelamin.',
            'content' => 'Berdiri sejak Agustus 2010, Bamed Skin Care adalah klinik dermatovenereology yang hadir untuk memberikan perawatan terbaik bagi setiap orang, dengan setiap jenis kulit. Kami percaya bahwa menjadi diri sendiri adalah suatu keindahan. Munculkan rasa nyaman lewat kulit Anda dengan memahami perawatan yang tepat melalui konsultasi dengan tim yang profesional dan ahli di bidangnya. Selama bertahun-tahun, tim dermatologis kami telah mendedikasikan keahlian serta pengalamannya untuk membantu orang dari berbagai usia dalam menciptakan kecantikan dari luar dan dalam lewat kulit yang sehat.',
        ]);
        
        App\Modules\Service\Service::create([
            'title' => 'Kulit Anda adalah aset berharga dan unik yang membutuhkan perawatan yang tepat.',
            'content' => 'Kepribadian setiap individu seunik kulit mereka. Karena itulah Bamed Skin Care mendedikasikan hasil penelitian mendalam kami untuk menghadirkan beragam metode perawatan untuk berbagai jenis kulit. Dengan teknologi serta metode yang telah terbukti secara medis, kami siap memenuhi apapun kebutuhan kulit Anda.',
        ]);
        // SubService
        App\Modules\Service\SubService::create([
            'title' => 'OXYGENEO+',
            'img_head' => '',
            'content' => 'Geneo merupakan sebuah alat yang menggabungkan teknologi Oxygeneo dengan Radiofrekuensi Tripolar. Dengan gabungan teknologi tersebut, alat ini dapat memberikan nutrisi kepada kulit serta peremajaan kulit secara langsung. Menghasilkan kulit yang lebih sehat dan kencang untuk waktu yang lama. Ini merupakan teknik 3 in 1 mikrodermabrasi yang memberikan hasil anti penuaan maksimal dengan 3 cara: Pengelupasan, Infus, dan Oksigeneo. Dibantu dengan Radiofrekuensi untuk mengurangi kerutan, mengencangkan kulit, dan peremajaan kulit. Ditambah dengan ultrasound untuk penetrasi serum yang lebih maksimal',
        ]);
        App\Modules\Service\SubService::create([
            'title' => 'RADIO FREQUENCY',
            'img_head' => '',
            'content' => 'Geneo merupakan sebuah alat yang menggabungkan teknologi Oxygeneo dengan Radiofrekuensi Tripolar. Dengan gabungan teknologi tersebut, alat ini dapat memberikan nutrisi kepada kulit serta peremajaan kulit secara langsung. Menghasilkan kulit yang lebih sehat dan kencang untuk waktu yang lama. Ini merupakan teknik 3 in 1 mikrodermabrasi yang memberikan hasil anti penuaan maksimal dengan 3 cara: Pengelupasan, Infus, dan Oksigeneo. Dibantu dengan Radiofrekuensi untuk mengurangi kerutan, mengencangkan kulit, dan peremajaan kulit. Ditambah dengan ultrasound untuk penetrasi serum yang lebih maksimal',
        ]);
        App\Modules\Service\SubService::create([
            'title' => 'MICRODERMABRASI ATHENA',
            'img_head' => '',
            'content' => 'Geneo merupakan sebuah alat yang menggabungkan teknologi Oxygeneo dengan Radiofrekuensi Tripolar. Dengan gabungan teknologi tersebut, alat ini dapat memberikan nutrisi kepada kulit serta peremajaan kulit secara langsung. Menghasilkan kulit yang lebih sehat dan kencang untuk waktu yang lama. Ini merupakan teknik 3 in 1 mikrodermabrasi yang memberikan hasil anti penuaan maksimal dengan 3 cara: Pengelupasan, Infus, dan Oksigeneo. Dibantu dengan Radiofrekuensi untuk mengurangi kerutan, mengencangkan kulit, dan peremajaan kulit. Ditambah dengan ultrasound untuk penetrasi serum yang lebih maksimal',
        ]);
        
        App\Modules\Doctor\Doctor::create([
            'title' => 'Doctors',
            'content' => 'Cara terbaik untuk mengetahui metode perawatan yang tepat untuk kulit Anda adalah melalui konsultasi dengan tim ahli kami. Tim dermatologist Bamed Skin Care terdiri dari para dokter ahli yang ramah dan berpengalaman untuk membantu Anda mendapatkan kulit yang sehat dan indah. Dengan menggunakan metode medis yang terpercaya, kami akan membantu memberikan perawatan terbaik untuk kulit Anda melalui solusi yang cermat dan tepat.',
        ]);
        
        App\Modules\Doctor\DoctorSub::create([
            'img_head' => '',
            'name' => 'Dr. Adhimukti T. Sampurna, SpKK',
            'sub_title' => 'Travel Junkie, Automotive Enthusiast, Movie ',
            'quote' => 'Doing everything my way.',
            'content' => 'Selain membantu pasien dan member Bamed Skin Care memilih perawatan kulit yang tepat, pria yang biasa dipanggil Adhi ini aktif sebagai staf pengajar di Dept. Ilmu Kesehatan Kulit & Kelamin FKUI/RSCM serta Ketua Divisi Tumor dan Bedah Kulit Dept. Ilmu Kulit & Kelamin FKUI/RSCM. Dokter Adhi, yang merupakan penggemar kuliner, fotograﬁ, serta superheroes ini mendeskripsikan dirinya sebagai seseorang yang ramah serta terbuka dalam memberikan hal-hal informatif tentang kesehatan kulit.',
        ]);
        
        App\Modules\Doctor\DoctorSub::create([
            'img_head' => '',
            'name' => 'Dr. Jimmi Chandra',
            'sub_title' => 'Travel Junkie, Automotive Enthusiast, Movie ',
            'quote' => 'Doing everything my way.',
            'content' => 'Selain membantu pasien dan member Bamed Skin Care memilih perawatan kulit yang tepat, pria yang biasa dipanggil Adhi ini aktif sebagai staf pengajar di Dept. Ilmu Kesehatan Kulit & Kelamin FKUI/RSCM serta Ketua Divisi Tumor dan Bedah Kulit Dept. Ilmu Kulit & Kelamin FKUI/RSCM. Dokter Adhi, yang merupakan penggemar kuliner, fotograﬁ, serta superheroes ini mendeskripsikan dirinya sebagai seseorang yang ramah serta terbuka dalam memberikan hal-hal informatif tentang kesehatan kulit.',
        ]);

        App\Modules\Client\Client::create([
            'name' => 'Aria Guest',
            'email' => 'aria@test.io',
            'password' => bcrypt('secret'),
        ]);
        // City
        App\Modules\City\City::create([
            'name' => 'Meruya',
            'tlp' => '(021) 5843456, 5844512',
            'lat' => '-6.19743',
            'long' => '106.745209',
            'address' => 'Meruya'
        ]);
        App\Modules\City\City::create([
            'name' => 'Menteng',
            'tlp' => '(021) 5843456, 5844512',
            'lat' => '-6.19743',
            'long' => '106.745209',
            'address' => 'Menteng'
        ]);
        App\Modules\City\City::create([
            'name' => 'Dharmawangsa',
            'tlp' => '(021) 5843456, 5844512',
            'lat' => '-6.19743',
            'long' => '106.745209',
            'address' => 'Dharmawangsa'
        ]);
    }
}
