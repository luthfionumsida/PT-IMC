<!--
Magang Umsida Periode 2022 - Quartal Ke-9
Author: PT INTI MAJU CEMERLANG
Licensed to PT INTI MAJU CEMERLANG
Thanks to :
    > Iwan Setiawan - As The Owner Of The Company
    > Adinata Setiawan - Project Supervisor
Contributor & Credit: 
    > Luthfi Arian Nugraha - Fullstack - Project Leader (University Advisor : Sukma Aji, S.T., S.Kom.)
    > Yusuf Raharja - Frontend - Member Project (University Advisor : Novia Ariyanti, S.Si., M.Pd.)
    > Reyhan Adi Saputra - Frontend - Member Project (University Advisor : Novia Ariyanti, S.Si., M.Pd.)
    > Davito Rasendriya Rizqullah Putra - Wordpress - Member Project (University Advisor : Sukma Aji, S.T., S.Kom.)
-->
<?php include 'admin/database/connectiondb.php';
include 'admin/database/important.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- FAQ -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC - Kontak</title>
    <link rel="shortcut icon" href="dist/img/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.3/tailwind.min.css" integrity="sha512-wl80ucxCRpLkfaCnbM88y4AxnutbGk327762eM9E/rRTvY/ZGAHWMZrYUq66VQBYMIYDFpDdJAOGSLyIPHZ2IQ==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@600&display=swap" rel="stylesheet">

    <!-- Meta -->
    <meta name="author" content="PT. INTI MAJU CEMERLANG">
    <meta name="title" content="Kontak | IMC">
    <meta name="description" content="Kontak perusahaan kami yang dapat dihubungi.">
    <meta name="keywords" content="PT Inti Maju Cemerlang, IMC, imc, Indonesia Modifikasi Classic, Mobil Classic, Mobil Kuno, Bengkel Pak Iwan, Sidoarjo, Taman, Pergudangan Taman">

    <!-- CSS -->
    <link href="dist/output.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10 py-3">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <!-- Logo -->
                <div class="px-4">
                    <a href="index.php"><img src="dist/img/logo-imc.png" alt="Logo Kami" width="80" title="PT.Inti Maju Cemerlang"></a>
                </div>
                <!-- Button Navbar -->
                <div class="flex items-center px-4">
                    <!-- Humberger navigasi -->
                    <button class="block absolute right-4 lg:hidden" type="button" name="hamburger" id="hamburger">
                        <span class="garis-navbar transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="garis-navbar transition duration-300 ease-in-out"></span>
                        <span class="garis-navbar transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>
                    <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group"><a href="index.php?index=TRUE" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Beranda</a></li>
                            <li class="group"><a href="profil.php?profil=TRUE" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Profil</a></li>
                            <li class="group"><a href="galeri.php" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Galeri</a></li>
                            <li class="group"><a href="tracking.php" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Tracking</a></li>
                            <li class="group"><a href="kontak.php" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Kontak</a></li>
                            <li class="group"><a href="login.php" class="text-base font-semibold text-dark py-2 mx-8 flex group-hover:text-primary transition duration-300 ease-in-out">Masuk</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <content class="pt-3.5">
        <!-- Hubungan Kami -->
        <section id="kontak" class="pt-36 pb-16 bg-slate-100">
            <div class="container">
                <!-- Bagian Header Hubungi Kami -->
                <div class="w-full px-4">
                    <div class="max-w-xl mx-auto text-center mb-16">
                        <h2 class="font-bold text-2xl mb-2 text-dark">Hubungi Kami</h2>
                        <hr class="w-24 border-b-2 mx-auto mb-3 mt-1 border-primary rounded-full">
                    </div>
                </div>

                <!-- Hubungi Kami -->
                <div class="flex flex-wrap lg:justify-between-mx-4">
                    <div class="w-full lg:w-1/2 xl:w-6/12 px-4">
                        <div class="max-w-[570px] mb-12 lg:mb-0">
                            <h3 class=" text-dark mb-2 uppercase font-bold text-[32px] sm:text-[40px] lg:text-[36px] xl:text-[20px]"> Contact US </h3>
                            <p class="text-base text-body-color leading-relaxed mb-9">Jika ada pertanyaan dan hal lain yang ingin dibahas lebih lanjut bisa hubungi kami di bawah ini
                            </p>
                            <!-- Bagian Google Map -->
                            <div class="flex mb-8 max-w-[370px] w-full">
                                <div class="max-w-[60px] sm:max-w-[70px] w-1/2 h-[60px] sm:h-[70px] flex items-center justify-center mr-6 overflow-hidden bg-blue-800 bg-opacity-5  rounded">
                                    <svg role="img" width="40" height="35" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>Google Maps</title>
                                        <path d="M19.527 4.799c1.212 2.608.937 5.678-.405 8.173-1.101 2.047-2.744 3.74-4.098 5.614-.619.858-1.244 1.75-1.669 2.727-.141.325-.263.658-.383.992-.121.333-.224.673-.34 1.008-.109.314-.236.684-.627.687h-.007c-.466-.001-.579-.53-.695-.887-.284-.874-.581-1.713-1.019-2.525-.51-.944-1.145-1.817-1.79-2.671L19.527 4.799zM8.545 7.705l-3.959 4.707c.724 1.54 1.821 2.863 2.871 4.18.247.31.494.622.737.936l4.984-5.925-.029.01c-1.741.601-3.691-.291-4.392-1.987a3.377 3.377 0 0 1-.209-.716c-.063-.437-.077-.761-.004-1.198l.001-.007zM5.492 3.149l-.003.004c-1.947 2.466-2.281 5.88-1.117 8.77l4.785-5.689-.058-.05-3.607-3.035zM14.661.436l-3.838 4.563a.295.295 0 0 1 .027-.01c1.6-.551 3.403.15 4.22 1.626.176.319.323.683.377 1.045.068.446.085.773.012 1.22l-.003.016 3.836-4.561A8.382 8.382 0 0 0 14.67.439l-.009-.003zM9.466 5.868L14.162.285l-.047-.012A8.31 8.31 0 0 0 11.986 0a8.439 8.439 0 0 0-6.169 2.766l-.016.018 3.665 3.084z" />
                                    </svg>
                                </div>
                                <div class="w-full">
                                    <h4 class="font-bold text-dark text-xl mb-1">Lokasi Kami</h4>
                                    <p class="text-base text-body-color">Sambikerep, Jemundo, Kec. Taman, Kabupaten Sidoarjo, Jawa Timur 61257</p>
                                </div>
                            </div>
                            <!-- Gmail -->
                            <div class="flex mb-8 max-w-[370px] w-full">
                                <div class="max-w-[60px] sm:max-w-[70px] w-1/2 h-[60px] sm:h-[70px] flex items-center justify-center mr-6 overflow-hidden bg-blue-800 bg-opacity-5 rounded">
                                    <svg role="img" width="40" height="35" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>Email</title>
                                        <path d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64 12 9.548l6.545-4.91 1.528-1.145C21.69 2.28 24 3.434 24 5.457z" />
                                    </svg>
                                </div>
                                <div class="w-full">
                                    <h4 class="font-bold text-dark text-xl mb-1">Email Address</h4>
                                    <a href="mailto:<?php echo $smedia["email"]; ?>"><p class="text-base text-body-color"><?php echo $smedia["email"]; ?></p></a>
                                </div>
                            </div>
                            <!-- WhatsApp -->
                            <div class="flex mb-8 max-w-[370px] w-full">
                                <div class="max-w-[60px] sm:max-w-[70px] w-1/2 h-[60px] sm:h-[70px] flex items-center justify-center mr-6 overflow-hidden bg-blue-800 bg-opacity-5 rounded">
                                    <svg role="img" width="40" height="35" viewBox="0 0 20 28" class="fill-current" xmlns="http://www.w3.org/2000/svg">
                                        <title>WhatsApp</title>
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                                    </svg>
                                    </svg>
                                </div>
                                <div class="w-full">
                                    <h4 class="font-bold text-dark text-xl mb-1">WhatsApp</h4>
                                    <a href="https://wa.me/6281331739037"><p class="text-base text-body-color">081-331-739-037</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Gambar Mobil Hubungi Kami -->
                    <div class="w-full self-center px-4 xl:w-1/2">
                        <div class="mt-10 relative lg:mt-0 lg:right-0">
                            <img src="dist/img/contact.png" alt="Jeep IMC" title="Jeep Buatan Kami" class="max-w-full mx-auto">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </content>
    <!-- Akhir Section Hubungi Kami -->

    <!-- Footer -->
    <footer class="bg-dark pt-24 pb-12">
        <div class="container">
            <!-- Logo footer -->
            <div class="w-full px-4">
                <img src="dist/img/logo-imc.png" width="80px" alt="" class="mb-2">
            </div>
            <div class="flex flex-warp justify-center">
                <!-- Deskripsi footer -->
                <div class="px-4 mb-12 text-white lg:w-1/3">
                    <h3 class="text-xl my-2 font-semibold">Indonesia Modifikasi Classic</h3>
                    <p class="lg:text-justify">Perusahaan yang melayani reparasi mobil kuno ataupun mobil lawas yang ubah menjadi mobil jeep atau classic lainnya.</p>
                    <!-- Media Sosial Footer -->
                    <div class="mt-5">
                        <!-- Link Ketika Screen Besar -->
                        <div class="flex items-center blocks">
                            <!-- Youtube -->
                            <a href="<?php echo $smedia["youtube"]; ?>" target="_blank" class="invisible lg:visible w-4 h-4 mr-1 lg:w-9  lg:h-9 lg:mr-3 rounded-full flex justify-center items-center border text-white hover:border-primary hover:text-red-500 hover:bg-primary_lite ">
                                <svg role="img" class="fill-current" width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <title>YouTube</title>
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                </svg>
                            </a>
                            <!-- Instagram -->
                            <a href="<?php echo $smedia["instagram"]; ?>" target="_blank" class="invisible lg:visible w-4 h-4 mr-1 lg:w-9  lg:h-9 lg:mr-3 rounded-full flex justify-center items-center border text-white hover:border-primary hover:text-pink-500 hover:bg-primary_lite ">
                                <svg role="img" class="fill-current" width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <title>Instagram</title>
                                    <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                                </svg>
                            </a>
                            <!-- Facebook -->
                            <a href="<?php echo $smedia["facebook"]; ?>" target="_blank" class="invisible lg:visible w-4 h-4 mr-1 lg:w-9  lg:h-9 lg:mr-3 rounded-full flex justify-center items-center border text-white hover:border-primary hover:text-blue-500 hover:bg-primary_lite ">
                                <svg role="img" class="fill-current" width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <title>Facebook</title>
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                            </a>
                            <a href="<?php echo $smedia["whatsapp"]; ?>" target="_blank" class="invisible lg:visible w-4 h-4 mr-1 lg:w-9  lg:h-9 lg:mr-3 rounded-full flex justify-center items-center border text-white hover:border-primary hover:text-green-500 hover:bg-primary_lite ">
                                <svg role="img" class="fill-current" width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <title>Whatsapp</title>
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                                </svg>
                            </a>
                            <a href="<?php echo $smedia["email"]; ?>" target="_blank" class="invisible lg:visible w-4 h-4 mr-1 lg:w-9  lg:h-9 lg:mr-3 rounded-full flex justify-center items-center border text-white hover:border-primary hover:text-red-500 hover:bg-primary_lite ">
                                <svg role="img" class="fill-current" width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <title>Email</title>
                                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <title>Email</title>
                                        <path d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64 12 9.548l6.545-4.91 1.528-1.145C21.69 2.28 24 3.434 24 5.457z" />
                                    </svg>
                            </a>
                        </div>
                        <!-- Link Ketika Screen Kecil -->
                        <table class="table table-auto md:hidden lg:hidden relative -mt-8">
                            <tr>
                                <td>
                                    <!-- Youtube -->
                                    <a href="<?php echo $smedia["youtube"]; ?>" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border text-white hover:border-primary hover:text-red-500 hover:bg-primary_lite ">
                                        <svg role="img" class="fill-current" width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <title>YouTube</title>
                                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                        </svg>
                                    </a>
                                </td>
                                <td>
                                    <!-- Instagram -->
                                    <a href="<?php echo $smedia["instagram"]; ?>" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border text-white hover:border-primary hover:text-pink-500 hover:bg-primary_lite ">
                                        <svg role="img" class="fill-current" width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <title>Instagram</title>
                                            <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <!-- Facebook -->
                                    <a href="<?php echo $smedia["facebook"]; ?>" target="_blank" class="mx-6 w-9 h-9 mr-3 rounded-full flex justify-center items-center border text-white hover:border-primary hover:text-blue-500 hover:bg-primary_lite ">
                                        <svg role="img" class="fill-current" width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <title>Facebook</title>
                                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <!-- Whatsapp -->
                                    <a href="<?php echo $smedia["whatsapp"]; ?>" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border text-white hover:border-primary hover:text-green-500 hover:bg-primary_lite ">
                                        <svg role="img" class="fill-current" width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <title>Whatsapp</title>
                                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
                                        </svg>
                                    </a>
                                </td>
                                <td>
                                    <!-- Email -->
                                    <a href="mailto:<?php echo $smedia["email"]; ?>" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border text-white hover:border-primary hover:text-red-500 hover:bg-primary_lite ">
                                        <svg role="img" class="fill-current" width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <title>Email</title>
                                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <title>Email</title>
                                                <path d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64 12 9.548l6.545-4.91 1.528-1.145C21.69 2.28 24 3.434 24 5.457z" />
                                            </svg>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- Tautan Footer -->
                <div class="px-4 mb-12 text-white lg:w-1/3">
                    <h3 class="font-semibold text-xl my-2 opacity-90">Tautan kami</h3>
                    <ul>
                        <li class="mb-1"><a href="index.php?index=TRUE" class="hover:text-primary inline-block transition duration-150 ease-in-out">Beranda</a></li>
                        <li class="mb-1"><a href="profil.php?profil=TRUE" class="hover:text-primary inline-block transition duration-150 ease-in-out">Profil</a></li>
                        <li class="mb-1"><a href="galeri.php" class="hover:text-primary inline-block transition duration-150 ease-in-out">Galeri</a></li>
                        <li class="mb-1"><a href="tracking.php" class="hover:text-primary inline-block transition duration-150 ease-in-out">Tracking</a></li>
                        <li class="mb-1"><a href="kontak.php" class="hover:text-primary inline-block transition duration-150 ease-in-out">Kontak</a></li>
                        <li class="mb-1"><a href="login.php" class="hover:text-primary inline-block transition duration-150 ease-in-out">Masuk</a></li>
                    </ul>
                </div>
                <br>
                <!-- Bantuan Footer -->
                <div class="px-4 mb-12 text-white lg:w-1/3">
                    <h3 class="font-semibold text-xl my-2 opacity-90">Bantuan</h3>
                    <ul>
                        <li class="mb-1"><a href="faq.php" class="hover:text-primary inline-block transition duration-150 ease-in-out">FAQ</a></li>
                        <li class="mb-1"><a href="layanan.php" class="hover:text-primary inline-block transition duration-150 ease-in-out">Layanan Kami</a></li>
                        <li class="mb-1"><a href="lokasi.php?lokasi=TRUE" class="hover:text-primary inline-block transition duration-150 ease-in-out">Lokasi</a></li>
                    </ul>
                </div>
                <!-- Tentang Kami Footer -->
                <!-- <div class="sm:w-1/2 px-4 mb-12 text-white lg:w-1/4">
                    <h3 class="font-semibold text-xl my-2 opacity-90">Tentang Kami</h3>
                    <ul>
                        <li class="mb-1"><a href="#" class="hover:text-primary inline-block transition duration-150 ease-in-out">Tentang Kami</a></li>
                        <li class="mb-1"><a href="#" class="hover:text-primary inline-block transition duration-150 ease-in-out">Artikel Kami</a></li>
                        <li class="mb-1"><a href="#" class="hover:text-primary inline-block transition duration-150 ease-in-out">Galeri Lengkap</a></li>
                    </ul>
                </div> -->
            </div>
            <div class="w-full px-4 border-t pt-10 border-white">
                <p class="text-center text-white text-sm">&copy; <?php echo date("Y"); ?> PT INTI MAJU CEMERLANG</p>
            </div>
        </div>
    </footer>

    <!-- JS -->
    <script src="dist/js/navbar.js" type="text/javascript"></script>
</body>

</html>