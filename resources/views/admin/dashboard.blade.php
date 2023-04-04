@extends('admin.layout')

@section('content')
<!--Begin Page Content-->
<div class="container-fluid">
    <!--Judul-->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <p>// Dashboard</p>
    </div>
    <!--Judul End-->
    <!--Isi -->
    <div class="container-fluid">

<div>
        <!--Jenis Jenis Layanan START-->
        <div>
            <h1 class="text-primary">Layanan Kami</h1>
            <h4>Layanan Perpustakaan Keep Reading</h4>
        </div>
            
        <!--ISI Jenis Jenis Layanan-->
        <div>
            <table cellpadding="7" class="col-xl-12">
                <th>
                   <tr>
                        <td>
                            <table class="card border-left-primary shadow" style="width: 75%;">
                                <th>
                                    <td>
                                        <div class="card-body">
                                        <img src="{{asset('sbadmin/img/isbn.jpg')}}" style="width: 70px;">
                                        </div>
                                    </td>
                                    <td>    
                                            <h5>ISBN</h5>
                                            <p>International Standard Book Number</p>
                                    </td>
                                </th>
                            </table>
                        </td>
         
                        <td>
                            <table class="card border-left-primary shadow" style="width: 75%;">
                                <th>
                                    <td>
                                        <div class="card-body">
                                        <img src="{{asset('sbadmin/img/ios.jpg')}}" style="width: 70px;">
                                        </div>
                                    </td>
                                    <td>    
                                            <h5>IOS</h5>
                                            <p>Indonesia One Search</p>
                                    </td>
                                </th>
                            </table>
                         </td>
                   </tr>
               
               </th>
    
               <th>
                <tr>
                     <td>
                         <table class="card border-left-primary shadow" style="width: 75%;">
                             <th>
                                 <td>
                                     <div class="card-body">
                                     <img src="{{asset('sbadmin/img/ipusnas.png')}}" style="width: 70px;">
                                     </div>
                                 </td>
                                 <td>    
                                         <h5>iPusnas</h5>
                                         <p>Perpustakaan Digital Bergerak</p>
                                 </td>
                             </th>
                         </table>
                     </td>
      
                     <td>
                         <table class="card border-left-primary shadow" style="width: 75%;">
                             <th>
                                 <td>
                                     <div class="card-body">
                                     <img src="{{asset('sbadmin/img/bintangpusnas.png')}}" style="width: 70px;">
                                     </div>
                                 </td>
                                 <td>    
                                         <h5>BintangPusnas</h5>
                                         <p>Perpustakaan Menjangkau Masyarakat</p>
                                 </td>
                             </th>
                         </table>
                      </td>
                </tr>
            
            </th>
            
            <th>
                <tr>
                     <td>
                         <table class="card border-left-primary shadow" style="width: 75%;">
                             <th>
                                 <td>
                                     <div class="card-body">
                                     <img src="{{asset('sbadmin/img/opac.png')}}" style="width: 70px;">
                                     </div>
                                 </td>
                                 <td>    
                                         <h5>OPAC</h5>
                                         <p>Online Public Access Catalog</p>
                                 </td>
                             </th>
                         </table>
                     </td>
      
                     <td>
                         <table class="card border-left-primary shadow" style="width: 75%;">
                             <th>
                                 <td>
                                     <div class="card-body">
                                     <img src="{{asset('sbadmin/img/kol.png')}}" style="width: 70px;">
                                     </div>
                                 </td>
                                 <td>    
                                         <h5>K-OL</h5>
                                         <p>Keanggotaan Online Perpustakaan</p>
                                 </td>
                             </th>
                         </table>
                      </td>
                </tr> 
            </th>
    
            <th>
                <tr>
                     <td>
                         <table class="card border-left-primary shadow" style="width: 75%;">
                             <th>
                                 <td>
                                     <div class="card-body">
                                     <img src="{{asset('sbadmin/img/eres.png')}}" style="width: 70px;">
                                     </div>
                                 </td>
                                 <td>    
                                         <h5>E-RES</h5>
                                         <p>Koleksi Digital Berlangganan</p>
                                 </td>
                             </th>
                         </table>
                     </td>
      
                     <td>
                         <table class="card border-left-primary shadow" style="width: 75%;">
                             <th>
                                 <td>
                                     <div class="card-body">
                                     <img src="{{asset('sbadmin/img/radio.png')}}" style="width: 70px;">
                                     </div>
                                 </td>
                                 <td>    
                                         <h5>Radio</h5>
                                         <p>Radio Perpustakaan</p>
                                 </td>
                             </th>
                         </table>
                      </td>
                </tr>
            
            </th>
    
            </table> 
        </div>
        <!--Jenis Jenis Layanan End-->
</div>
    
    <br><hr><br><br>

    <!--Unit Kerja Start-->
    <div>
        <h1 class="text-primary">Unit Kerja</h1>
        <table class="text-dark">
                <td>
                    <h4>Unit Kerja Perpustakaan</h4>
                    <ul>
                        <li>Biro SDM dan Umum</li>
                        <li>Biro Perencanaan dan Keuangan</li>
                        <li>Biro Hukum, Organisasi, Kerjasama dan Humas</li>
                        <li>Pusat Data dan Informasi</li>
                        <li>Pusat Pembinaan Pustakawan</li>
                        <li>Pusat Pendidikan dan Pelatihan</li>
                        <li>Direktorat Deposit dan Pengembangan Koleksi Perpustakaan</li>
                    </ul>
                </td>
                <td class="text-center">
                    <img src="{{asset ('sbadmin/img/unitkerja.png')}}" alt="" style="width: 70%">
                </td>
        </table>
    </div>
    <!--Unit Kerja END-->

    <br><hr><br><br>

    <!--Berita Start-->
    <div class="text-center">
        <h1 class="text-primary">Berita Terbaru</h1>
        <h4>Berita Terbaru Perpustakaan Keep Reading</h4>
        <br><br>
    </div>

    <div class="container-fluid" style="max-width: 80%">
        <!--isi berita-->
    <div class="card">
        <img style="height: 300px" src="{{asset ('sbadmin/img/berita.png')}}" alt="">
        <h5 class="card-header text-dark"><b>Konsultasi Program Perpustakaan Desa</b></h5>
        <p class="card-body">Lorem ipsum, dolor sit amet consectetur adipisicing elit. <a href="#">Baca Selengkapnya..</a></p>
    </div>
    <br>
    <!--isi berita-->
    <div class="card">
        <img style="height: 300px" src="{{asset ('sbadmin/img/berita2.png')}}" alt="">
        <h5 class="card-header text-dark"><b>Konsultasi Program Perpustakaan Rumah Sakit Yayasan</b></h5>
        <p class="card-body">Lorem ipsum, dolor sit amet consectetur adipisicing elit. <a href="#">Baca Selengkapnya..</a></p>
    </div>
    <br>
    <!--isi berita-->
    <div class="card">
        <img style="height: 300px" src="{{asset ('sbadmin/img/berita.png')}}" alt="">
        <h5 class="card-header text-dark"><b>Konsultasi Program Perpustakaan Universitas</b></h5>
        <p class="card-body">Lorem ipsum, dolor sit amet consectetur adipisicing elit. <a href="#">Baca Selengkapnya..</a></p>
    </div>
    </div>

    <!--Berita End-->
    
    </div>
    <!--Isi End-->
</div>
    
@endsection('content')