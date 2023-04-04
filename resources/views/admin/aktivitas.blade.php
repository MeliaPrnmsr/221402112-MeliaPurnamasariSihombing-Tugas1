@extends('admin.layout')

@section('content')
<!--Begin Page Content-->
<div class="container">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <p>// Aktivitas</p>
    </div>

    {{-- Isi Starts --}}
    <div class="container-fluid">
        {{-- Berita --}}
        <div class="container-fluid">
            <h2 class="text-primary"><b>Berita</b></h2>
            <table cellpadding="10">
                <th>
                    <tr>
                         <td>
                            <div class="card shadow">
                                <img style="height: 150px" src="{{asset ('sbadmin/img/berita.png')}}" alt="">
                                <h5 class="card-header"><b>Literasi Tingkatkan Kualitas SDM</b></h5>
                                <p class="card-header">Lorem ipsum, dolor sit amet consectetur adipisicing elit. <a href="#">Read More..</a></p>
                            </div>
                         </td>

                         <td>
                            <div class="card shadow">
                                <img style="height: 150px" src="{{asset ('sbadmin/img/berita2.png')}}" alt="">
                                <h5 class="card-header"><b>Meningkatkan Literasi di Lingkungan Sekolah</b></h5>
                                <p class="card-header">Lorem ipsum, dolor sit amet consectetur adipisicing elit. <a href="#">Read More..</a></p>
                            </div>
                         </td>
                    </tr>

                    <tr>
                        <td>
                           <div class="card shadow">
                               <img style="height: 150px" src="{{asset ('sbadmin/img/berita2.png')}}" alt="">
                               <h5 class="card-header"><b>Konsultasi Program Perpustakaan Desa</b></h5>
                               <p class="card-header">Lorem ipsum, dolor sit amet consectetur adipisicing elit. <a href="#">Read More..</a></p>
                           </div>
                        </td>

                        <td>
                           <div class="card shadow">
                               <img style="height: 150px" src="{{asset ('sbadmin/img/berita.png')}}" alt="">
                               <h5 class="card-header"><b>Penghargaan Perpustakaan dari Perpusnas</b></h5>
                               <p class="card-header">Lorem ipsum, dolor sit amet consectetur adipisicing elit. <a href="#">Read More..</a></p>
                           </div>
                        </td>
                   </tr>

                   <tr>
                    <td>
                       <div class="card shadow">
                           <img style="height: 150px" src="{{asset ('sbadmin/img/berita.png')}}" alt="">
                           <h5 class="card-header"><b>Kunjungan Kepala Yayasan</b></h5>
                           <p class="card-header">Lorem ipsum, dolor sit amet consectetur adipisicing elit. <a href="#">Read More..</a></p>
                       </div>
                    </td>

                    <td>
                       <div class="card shadow">
                           <img style="height: 150px" src="{{asset ('sbadmin/img/berita2.png')}}" alt="">
                           <h5 class="card-header"><b>Meningkatnya Pengunjung Perpustakaan</b></h5>
                           <p class="card-header">Lorem ipsum, dolor sit amet consectetur adipisicing elit. <a href="#">Read More..</a></p>
                       </div>
                    </td>
               </tr>
                
                </th>
            </table>
            <br>
            <div align="center" class="container-fluid">
                <button type='submit' class='btn btn-danger'><a href="#"></a>Selengkapnya</button>
            </div>

        </div>

        <br>

    </div>
    {{-- Isi End --}}

</div>
    
@endsection('content')