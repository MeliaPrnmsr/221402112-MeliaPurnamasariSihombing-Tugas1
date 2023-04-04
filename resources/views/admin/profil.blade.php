@extends('admin.layout')

@section('content')
<!--Begin Page Content-->
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <p>// Profil</p>
    </div>

    <div class="container">
    {{-- Isi Konten Start --}}

        {{-- Profil Keep Reading --}}
        <div class="card shadow">
            
            <h3 class="text-primary card-header"><b>Sejarah Perpustakaan</b></h3>
            <div class="container-fluid"> 
            <table>
                <th>
                    <td>
                        <br>
                        <p>Berdasarkan sumber sekunder perpustakaan paling awal berdiri pada masa ini adalah pada masa VOC
                            (Vereenigde OostJurnal Pustakawan Indonesia volume 6 nomor 160 Indische Compaqnie) yaitu
                            perpustakaan gereja di Batavia (kini Jakarta) yang dibangun sejak 1624. pada abad ke-17
                            Indonesia sudah mengenal perluasan jasa perpustakaan (kini layanan seperti ini disebut
                            dengan pinjam antar perpustakaan atau interlibrary loan).
                        </p>
                        <p>Perpustakaan Keep Reading Sendiri didirikan pada tanggal 12 Agustus 2012. Perpustakaan Keep Reading didirikan
                            oleh yayasan Still Alive. Pendirian ini dilakukan untuk mencapai visi dan misi yayasan untuk
                            menjadikan Indonesia yang lebih baik kedepannya, termasuk dalam pengembangan Sumber Daya Manusia
                            melalui literasi.
                            
                        </p>
                    </td>
                    <td class="text-center">
                        <img src="{{asset ('sbadmin/img/perpus.jpg')}}" alt="" style="width: 450px">
                    </td>
                </th>
            </table>
            <br>
            </div>
        </div>

        <br><br><hr><br><br>

        {{-- Visi Dan Misi --}}
        <div class="container-fluid">
            <h2 class="text-primary"><b>Visi & Misi</b></h2>
            <br>
            <h3>Visi</h3>
            <p>"Tumbuhnya Semangat dan Kebiasaan Gemar Membaca Di Lingkungan Masyarakat"</p>
            <br>
            <h3>Misi</h3>
            <ul>
                <li>Tercapainya Layanan Prima</li>
                <li>Tercapainya Standar Perpustakaan Sesuai Standar Nasional</li>
                <li>Perpustakaan yang Aman dan Tentram</li>
            </ul>

        </div>

        <br><hr><br>

        {{-- Tugas dan Fungsi --}}
        <div>
            <h2 class="text-primary"><b>Tugas & Fungsi</b></h2>
            <br>
            <h3>Kedudukan</h3>
            <p>Perpustakaan Keep Reading merupakan perpustakaan swasta yang berada di bawah
                dan bertanggung jawab langsung kepada
                yayasan pengelola yaitu Yayasan Still Alive. 
                Perpustakaan Keep Reading dipimpin oleh kepala perpustakaan.
            </p>
            <br>
            <h3>Tugas dan Fungsi</h3>
            <p>Perpustakaan keep reading memiliki tugas yang dipertanggung jawabkan langsung
                kepada yayasan, diantaranya :
            </p>
            <ul>
                <li>Menetapkan kebijakan-kebijakan untuk mengelola perpustakaan Keep Reading</li>
                <li>Melaksanakan pembinaan, pengembangan, evaluasi, dan koordinasi terhadap pengelolaan perpustakaan</li>
                <li>Mengembangkan standar perpustakaan</li>
            </ul>

            <p>
                Untuk melaksanakan tugas yang dimaksud, perpustakaan Keep Reading menyelenggarakan fungsi :
            </p>
            <ul>
                <li>Pengkajian dan penyusunan kebijakan nasional di bidang perpustakaan</li>
                <li>Pengoordinasioan kegiatan fungsional dalam pelaksanaan tugas perpustakaan</li>
            </ul>

        </div>

    {{-- Isi Konten End --}}
    </div>

</div>
    
@endsection('content')