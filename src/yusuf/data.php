<?php
$profile = [
  'name' => 'Ahmad Yusuf Firdaus',
  'title' => 'Siswa PPLG • Fullstack Dev',
  'typed' => ['Fullstack Dev', 'Problem Solver', 'Leadership & Management'],
  'location' => 'Majalengka, Indonesia',
  'email' => 'ahmadyusuffirdaus1211@gmail.com',
  'phone' => '+62 8xx-xxxx-xxxx',
  'website' => 'example.com',
  'linkedin' => 'linkedin.com/#',
  'github' => 'github.com/Ucup-aja',
  'photo' => 'assets/image/me.jpeg',
  'about' => 'Siswa SMKN 1 Leuwimunding jurusan PPLG (Pengembangan Perangkat Lunak dan Gim) yang antusias di dunia Fullstack Development. Memiliki mindset Problem Solver dan jiwa Leadership untuk memimpin tim serta membangun solusi digital yang bermanfaat. Fokus belajar teknologi web modern dari frontend hingga backend.',
  'stats' => [
    ['value' => 2, 'suffix' => '+', 'label' => 'Project Sekolah'],
    ['value' => 2, 'suffix' => '+', 'label' => 'Tahun Belajar Coding'],
    ['value' => 3, 'suffix' => '+', 'label' => 'Tim & Organisasi'],
  ]
];

$experiences = [
  [
    'role' => 'Project Lead — Project Sekolah',
    'company' => 'SMKN 1 Leuwimunding',
    'period' => '2026 — Sekarang',
    'loc' => 'Majalengka • Project Sekolah',
    'desc' => 'Memimpin tim project sekolah dari perencanaan, pembagian tugas, hingga pengembangan. Bertanggung jawab sebagai pengambil keputusan teknis, menjaga kolaborasi dan memastikan project selesai tepat waktu.',
    'tags' => ['Leadership','Fullstack','Teamwork'],
    'color' => '#111214'
  ],
  [
    'role' => 'Ketua OSIS',
    'company' => 'OSIS SMKN 1 Leuwimunding',
    'period' => '2025 — Sekarang',
    'loc' => 'Majalengka • Organisasi Kesiswaan',
    'desc' => 'Memimpin OSIS sebagai Ketua OSIS periode saat ini. Bertanggung jawab mengkoordinasi seluruh program kerja, memimpin rapat, mengelola tim pengurus, serta menjadi jembatan antara siswa dan pihak sekolah untuk mewujudkan kegiatan yang kreatif dan berdampak.',
    'tags' => ['Leadership','Manajemen','Organisasi'],
    'color' => '#c2a47a'
  ],
  [
    'role' => 'Founder — CNP++',
    'company' => 'CNP++ — Community of Networking & Programming',
    'period' => '2024 — Sekarang',
    'loc' => 'Majalengka • Komunitas IT',
    'desc' => 'Salah satu founder CNP++ (Community of Networking & Programming), komunitas siswa yang mewadahi minat di bidang networking dan programming. Menginisiasi sharing session, workshop coding, dan kolaborasi project untuk meningkatkan skill anggota serta membangun budaya belajar bersama.',
    'tags' => ['Founder','Community','Programming'],
    'color' => '#8b7355'
  ],
  [
    'role' => 'Wakil Ketua MPK',
    'company' => 'MPK SMKN 1 Leuwimunding',
    'period' => '2024 — 2025',
    'loc' => 'Majalengka • Organisasi Kesiswaan',
    'desc' => 'Menjabat sebagai Wakil Ketua Majelis Perwakilan Kelas (MPK) periode 2024-2025. Membantu mengkoordinasi program kerja, pengawasan organisasi siswa, dan menjembatani aspirasi siswa dengan pihak sekolah.',
    'tags' => ['Leadership','MPK','Organisasi'],
    'color' => '#6e6e73'
  ],
];

$education = [
  [
    'degree' => 'SMK — PPLG (Pengembangan Perangkat Lunak dan Gim)',
    'school' => 'SMK Negeri 1 Leuwimunding',
    'period' => '2024 — Sekarang',
    'gpa' => 'Ranking 1 kelas 4 semester berturut-turut',
    'desc' => 'Aktif di kelas maupun organisasi serta pernah berpartisipasi pada Lomba Kompetensi Siswa (LKS) PPLG bidang Web Technologies pada tingkat Kabupaten.'
  ],
];

$hardSkills = [
  'Frontend' => [
    ['name'=>'HTML / CSS','level'=>90],
    ['name'=>'JavaScript','level'=>50],
    ['name'=>'Vue.js','level'=>40],
    ['name'=>'Tailwind CSS','level'=>60],
  ],
  'Backend' => [
    ['name'=>'PHP / Laravel','level'=>60],
    ['name'=>'Node.js','level'=>40],
    ['name'=>'MySQL / MariaDB','level'=>80],
    ['name'=>'REST API','level'=>50],
  ],
  'Tools' => [
    ['name'=>'Git / GitHub','level'=>80],
    ['name'=>'Figma','level'=>30],
    ['name'=>'Canva','level'=>80],
  ],
];

$softSkills = [
  ['name'=>'Leadership & Management','level'=>92,'desc'=>'Ketua OSIS & Project Lead'],
  ['name'=>'Problem Solving','level'=>90,'desc'=>'Analitis & solutif'],
  ['name'=>'Teamwork & Kolaborasi','level'=>91,'desc'=>'CNP++ & Tim Project'],
  ['name'=>'Komunikasi','level'=>88,'desc'=>'Public speaking & koordinasi'],
  ['name'=>'Manajemen Waktu','level'=>84,'desc'=>'Atur project & organisasi'],
  ['name'=>'Adaptabilitas','level'=>86,'desc'=>'Cepat belajar teknologi baru'],
];

$projects = [
  ['title'=>'SmartBK','cat'=>'Fullstack','img'=>'assets/image/smartBK.png','desc'=>'Smart BK adalah sistem informasi untuk mendigitalisasi proses pencatatan, pemantauan, dan pelaporan data bimbingan konseling di sekolah.','tags'=>['Laravel','Vue','MySQL'],'link'=>'#'],
  ['title'=>'PPLG 1','cat'=>'Static Website','img'=>'assets/image/PPLG 1.png','desc'=>'Website statis satu halaman untuk kelas PPLG 1. Menampilkan profil kelas, struktur pengurus & siswa per angkatan, prestasi, dokumentasi kegiatan dan kontak dengan tema terang/gelap.','tags'=>['HTML','CSS','JavaScript'],'link'=>'#'],
];

$certs = [
  ['name'=>'Sertifikat Partisipasi LKS PPLG — Web Technologies','by'=>'LKS Kabupaten Majalengka • 2026'],
];
