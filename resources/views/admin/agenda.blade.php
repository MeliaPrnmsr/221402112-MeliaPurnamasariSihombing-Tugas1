@extends('admin.layout')

@section('content')
<!--Begin Page Content-->
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <p>// Agenda</p>
    </div>

    <div>
               {{-- Agenda --}}
               <div>
                <br>
                <div class="col-xl-12 col-lg-7">
                    <div class="card shadow mb-4">
                      <div class="card-body">
                        <h2 class="text-center text-primary"><b>Agenda</b></h2>
                        <br>              
                      <table class='table table-bordered table-striped'>
                        <tr class='thead-dark text-center'>
                            <th>Kegiatan</th>
                            <th>Tanggal</th>
                            <th>Tempat</th>
                            <th>Detail</th>
                        </tr>
                        <tr>
                            <td>Lomba</td>
                            <td>12-04-2023</td>
                            <td>Aula Perpustakaan</td>
                            <td><button type='submit' class='btn btn-success'>
                                Detail
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Seminar</td>
                            <td>15-04-2023</td>
                            <td>Aula Perpustakaan</td>
                            <td><button type='submit' class='btn btn-success'>
                                Detail
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Peresmian Perpustakaan</td>
                            <td>16-04-2023</td>
                            <td>Rumah Sakit Yayasan</td>
                            <td><button type='submit' class='btn btn-success'>
                                Detail
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Peresmian Perpustakaan</td>
                            <td>20-04-2023</td>
                            <td>Universitas Yayasan</td>
                            <td><button type='submit' class='btn btn-success'>
                                Detail
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Seminar</td>
                            <td>22-04-2023</td>
                            <td>Aula Perpustakaan</td>
                            <td><button type='submit' class='btn btn-success'>
                                Detail
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Rapat Bersama Pimpinan Yayasan</td>
                            <td>25-04-2023</td>
                            <td>Ruang Rapat Perpustakaan</td>
                            <td><button type='submit' class='btn btn-success'>
                                Detail
                                </button>
                            </td>
                        </tr>
    
                      </table>
                  
                        </div>
                    </div>
                </div>
    
            </div>
    </div>

</div>
    
@endsection('content')