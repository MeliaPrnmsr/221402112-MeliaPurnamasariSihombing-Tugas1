@extends('admin.layout')

@section('content')
<!--Begin Page Content-->
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <p>// Koleksi Umum</p>
    </div>

    {{-- Isi Start --}}
    <div>
        <h2 class="text-primary"><b>Koleksi Umum</b></h2>
        <hr>

        {{-- rekomen koleksi umum --}}
        <div>
            <table style="width: 95%" cellpadding="10">
                <th>
                    <tr>
                         <td>
                             <table class="card shadow">
                                 <th>
                                     <td>
                                         <div class="card-body">
                                         <img src="{{asset('sbadmin/img/E1.png')}}" style="height: 250px">
                                         </div>
                                     </td>
                                     <td>    
                                             <h4 class="text-primary"><b>Ensiklopedia Jilid 1</b></h4>
                                             <br>
                                             <a href="">Selengkapnya...</a>
                                             <p>
                                                <br>
                                                <i class="text-warning fa fa-calendar"></i>
                                                <span class="badge-counter">2019</span>
                                             </p>
                                             <p>
                                                <i class="text-warning fa fa-user-circle"></i>
                                                <span class="badge-counter">Lilis</span>
                                             </p>
                                     </td>
                                 </th>
                             </table>
                         </td>
          
                         <td>
                             <table class="card shadow">
                                 <th>
                                     <td>
                                         <div class="card-body">
                                         <img src="{{asset('sbadmin/img/E2.png')}}" style="height: 250px">
                                         </div>
                                     </td>
                                     <td>    
                                        <h4 class="text-primary"><b>Ensiklopedia Jilid 2</b></h4>
                                        <br>
                                        <a href="">Selengkapnya...</a>
                                        <p>
                                           <br>
                                           <i class="text-warning fa fa-calendar"></i>
                                           <span class="badge-counter">2022</span>
                                        </p>
                                        <p>
                                           <i class="text-warning fa fa-user-circle"></i>
                                           <span class="badge-counter">Septiani</span>
                                        </p>
                                     </td>
                                 </th>
                             </table>
                          </td>
                    </tr>
                
                </th>
     
                <th>
                 <tr>
                      <td>
                          <table class="card shadow">
                              <th>
                                  <td>
                                      <div class="card-body">
                                      <img src="{{asset('sbadmin/img/E3.png')}}" style="height: 250px">
                                      </div>
                                  </td>
                                  <td>    
                                    <h4 class="text-primary"><b>Ensiklopedia Jilid 3</b></h4>
                                    <br>
                                    <a href="">Selengkapnya...</a>
                                    <p>
                                       <br>
                                       <i class="text-warning fa fa-calendar"></i>
                                       <span class="badge-counter">2019</span>
                                    </p>
                                    <p>
                                       <i class="text-warning fa fa-user-circle"></i>
                                       <span class="badge-counter">Derry Gunawan</span>
                                    </p>
                                  </td>
                              </th>
                          </table>
                      </td>
       
                      <td>
                          <table class="card shadow">
                              <th>
                                  <td>
                                      <div class="card-body">
                                      <img src="{{asset('sbadmin/img/E4.png')}}" style="height: 250px">
                                      </div>
                                  </td>
                                  <td>    
                                    <h4 class="text-primary"><b>Ensiklopedia Jilid 4</b></h4>
                                    <br>
                                    <a href="">Selengkapnya...</a>
                                    <p>
                                       <br>
                                       <i class="text-warning fa fa-calendar"></i>
                                       <span class="badge-counter">2022</span>
                                    </p>
                                    <p>
                                       <i class="text-warning fa fa-user-circle"></i>
                                       <span class="badge-counter">Arman Maulana</span>
                                    </p>
                                  </td>
                              </th>
                          </table>
                       </td>
                 </tr>
             
             </th>
             
             <th>
                 <tr>
                      <td>
                          <table class="card shadow">
                              <th>
                                  <td>
                                      <div class="card-body">
                                      <img src="{{asset('sbadmin/img/E5.png')}}" style="height: 250px">
                                      </div>
                                  </td>
                                  <td>    
                                    <h4 class="text-primary"><b>Ensiklopedia Jilid 5</b></h4>
                                    <br>
                                    <a href="">Selengkapnya...</a>
                                    <p>
                                       <br>
                                       <i class="text-warning fa fa-calendar"></i>
                                       <span class="badge-counter">2021</span>
                                    </p>
                                    <p>
                                       <i class="text-warning fa fa-user-circle"></i>
                                       <span class="badge-counter">Nana Setiawan</span>
                                    </p>
                                  </td>
                              </th>
                          </table>
                      </td>
       
                      <td>
                          <table class="card shadow">
                              <th>
                                  <td>
                                      <div class="card-body">
                                      <img src="{{asset('sbadmin/img/E6.png')}}" style="height: 250px">
                                      </div>
                                  </td>
                                  <td>    
                                    <h4 class="text-primary"><b>Ensiklopedia Jilid 6</b></h4>
                                    <br>
                                    <a href="">Selengkapnya...</a>
                                    <p>
                                       <br>
                                       <i class="text-warning fa fa-calendar"></i>
                                       <span class="badge-counter">2022</span>
                                    </p>
                                    <p>
                                       <i class="text-warning fa fa-user-circle"></i>
                                       <span class="badge-counter">Lio Amber</span>
                                    </p>
                                  </td>
                              </th>
                          </table>
                       </td>
                 </tr> 
             </th>
            </table>
        </div>

    </div>
    {{-- Isi End --}}

</div>
    
@endsection('content')