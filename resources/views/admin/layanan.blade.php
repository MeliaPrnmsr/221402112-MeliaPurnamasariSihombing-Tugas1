@extends('admin.layout')

@section('content')
<!--Begin Page Content-->
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <p>// Layanan</p>
    </div>

    {{-- isi start --}}
    <div class="container">

    {{-- layanan umum --}}
    <div class="container-fluid">
        <h2 class="text-primary">Layanan Umum</h2>
        <h4>Layanan Umum Perpustakaan Keep Reading</h4>
        <br>

        <table cellpadding="5" class="col-xl-12">
            <th>
               <tr>
                    <td>
                        <table class="card border-left-warning shadow" style="width: 75%;">
                            <th>
                                <td>
                                    <div class="card-body">
                                    <img src="{{asset('sbadmin/img/layananumum.png')}}" style="width: 50px;">
                                    </div>
                                </td>
                                <td>    
                                        <h5>Keanggotaan</h5>
                                </td>
                            </th>
                        </table>
                    </td>
     
                    <td>
                        <table class="card border-left-warning shadow" style="width: 75%;">
                            <th>
                                <td>
                                    <div class="card-body">
                                    <img src="{{asset('sbadmin/img/layananumum.png')}}" style="width: 50px;">
                                    </div>
                                </td>
                                <td>    
                                        <h5>Virtual Tour Gedung Layanan</h5>
                                </td>
                            </th>
                        </table>
                     </td>
               </tr>
           
           </th>

           <th>
            <tr>
                 <td>
                     <table class="card border-left-warning shadow" style="width: 75%;">
                         <th>
                             <td>
                                 <div class="card-body">
                                 <img src="{{asset('sbadmin/img/layananumum.png')}}" style="width: 50px;">
                                 </div>
                             </td>
                             <td>    
                                     <h5>Video Profil Layanan Berbasis TIK</h5>
                             </td>
                         </th>
                     </table>
                 </td>
  
                 <td>
                     <table class="card border-left-warning shadow" style="width: 75%;">
                         <th>
                             <td>
                                 <div class="card-body">
                                 <img src="{{asset('sbadmin/img/layananumum.png')}}" style="width: 50px;">
                                 </div>
                             </td>
                             <td>    
                                     <h5>Agendan Kegiatan Gedung Layanan</h5>
                             </td>
                         </th>
                     </table>
                  </td>
            </tr>
        
        </th>
        
        <th>
            <tr>
                 <td>
                     <table class="card border-left-warning shadow" style="width: 75%;">
                         <th>
                             <td>
                                 <div class="card-body">
                                 <img src="{{asset('sbadmin/img/layananumum.png')}}" style="width: 50px;">
                                 </div>
                             </td>
                             <td>    
                                     <h5>e-Resources</h5>
                             </td>
                         </th>
                     </table>
                 </td>
  
                 <td>
                     <table class="card border-left-warning shadow" style="width: 75%;">
                         <th>
                             <td>
                                 <div class="card-body">
                                 <img src="{{asset('sbadmin/img/layananumum.png')}}" style="width: 50px;">
                                 </div>
                             </td>
                             <td>    
                                     <h5>Wisata Virtual Taman Perpustakaan Keep Reading</h5>
                             </td>
                         </th>
                     </table>
                  </td>
            </tr> 
        </th>

        <th>
            <tr>
                 <td>
                     <table class="card border-left-warning shadow" style="width: 75%;">
                         <th>
                             <td>
                                 <div class="card-body">
                                 <img src="{{asset('sbadmin/img/layananumum.png')}}" style="width: 50px;">
                                 </div>
                             </td>
                             <td>    
                                     <h5>Sistem Informasi Pelaporan Pelanggaran</h5>
                             </td>
                         </th>
                     </table>
                 </td>
  
                 <td>
                     <table class="card border-left-warning shadow" style="width: 75%;">
                         <th>
                             <td>
                                 <div class="card-body">
                                 <img src="{{asset('sbadmin/img/layananumum.png')}}" style="width: 50px;">
                                 </div>
                             </td>
                             <td>    
                                     <h5>Lapor</h5>
                             </td>
                         </th>
                     </table>
                  </td>
            </tr>
        
        </th>

        </table> 

    </div>

    <br><hr><br><br>

    {{-- Layanan Penerbit --}}
    <div class="container-fluid">
        <h2 class="text-primary">Layanan Penerbit</h2>
        <h4>Layanan Penerbit Perpustakaan Keep Reading</h4>
        <br>

        <table cellpadding="5" class="col-xl-12">
            <th>
               <tr>
                    <td>
                        <table class="card border-left-success shadow" style="width: 75%;">
                            <th>
                                <td>
                                    <div class="card-body">
                                    <img src="{{asset('sbadmin/img/upload.png')}}" style="width: 50px;">
                                    </div>
                                </td>
                                <td>    
                                        <h5>Data Perpustakaan Seluruh Indonesia</h5>
                                </td>
                            </th>
                        </table>
                    </td>
     
                    <td>
                        <table class="card border-left-success shadow" style="width: 75%;">
                            <th>
                                <td>
                                    <div class="card-body">
                                    <img src="{{asset('sbadmin/img/upload.png')}}" style="width: 50px;">
                                    </div>
                                </td>
                                <td>    
                                        <h5>Portal Informasi Serah Simpan</h5>
                                </td>
                            </th>
                        </table>
                     </td>
               </tr>
           
           </th>

           <th>
            <tr>
                 <td>
                     <table class="card border-left-success shadow" style="width: 75%;">
                         <th>
                             <td>
                                 <div class="card-body">
                                 <img src="{{asset('sbadmin/img/upload.png')}}" style="width: 50px;">
                                 </div>
                             </td>
                             <td>    
                                     <h5>Layanan ISBN</h5>
                             </td>
                         </th>
                     </table>
                 </td>
            </tr>
        
        </th>
        </table> 
    </div>

    <br><hr><br><br>

    {{-- Layanan Penerbit --}}
    <div class="container-fluid">
        <h2 class="text-primary">Layanan Katalog</h2>
        <h4>Layanan Katalog Perpustakaan Keep Reading</h4>
        <br><

        <table cellpadding="5" class="col-xl-12">
            <th>
               <tr>
                    <td>
                        <table class="card border-left-danger shadow" style="width: 75%;">
                            <th>
                                <td>
                                    <div class="card-body">
                                    <img src="{{asset('sbadmin/img/upload.png')}}" style="width: 50px;">
                                    </div>
                                </td>
                                <td>    
                                        <h5>Bibiliografi Nasional</h5>
                                </td>
                            </th>
                        </table>
                    </td>
     
                    <td>
                        <table class="card border-left-danger shadow" style="width: 75%;">
                            <th>
                                <td>
                                    <div class="card-body">
                                    <img src="{{asset('sbadmin/img/upload.png')}}" style="width: 50px;">
                                    </div>
                                </td>
                                <td>    
                                        <h5>Katalog Induk</h5>
                                </td>
                            </th>
                        </table>
                     </td>
               </tr>
           
           </th>

           <th>
            <tr>
                 <td>
                     <table class="card border-left-danger shadow" style="width: 75%;">
                         <th>
                             <td>
                                 <div class="card-body">
                                 <img src="{{asset('sbadmin/img/upload.png')}}" style="width: 50px;">
                                 </div>
                             </td>
                             <td>    
                                     <h5>Open Public Access Catalog</h5>
                             </td>
                         </th>
                     </table>
                 </td>
            </tr>
        
        </th>
        </table> 
    </div>

    </div>
    {{-- isi end --}}
</div>
    
@endsection('content')