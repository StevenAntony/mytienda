@extends('app.layouts.master')
@section('style')
    <style>
        .list-product{
            background: white;
            position: absolute;
            top: 35px;
            left: 0px;
            width: 100%;
            background: white;
            border-bottom: 3px solid #2962ff;
            padding: 30px 20px;
            box-shadow: 1px 1px 20px 1px rgb(41 98 255 / 14%);
            max-height: 250px;
            overflow: auto;
            z-index: 1;
        }
        .item-product{
            cursor: pointer;
            border-bottom: 1px solid #cdcaca;
            align-items: center;
            padding: 10px 0px;
        }
        .imagen-product{
            font-size: 3rem;
        }
        .description{
            font-size: 1rem;
            font-weight: 900;
        }
        .cantidad{
            font-weight: 900;
            font-size: 1.2rem;
        }
        .price{
            font-size: 1.2rem;
            text-align: right;
        }
        .item-order{
            border-bottom: 1px solid #7460ee;
        }
    </style>
@endsection
@section('content')
<div id="root"></div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Venta</h4>
                <div class="row mt-5 justify-content-center">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xl-2">
                        <div class="card card-hover bg-info text-white" data-toggle="modal" data-target=".modalVentaRapida" style="cursor: pointer">
                            <div class="card-body">
                                <h4 class="card-title">Rapida</h4>
                                <div class="d-flex align-items-center">
                                    <div class="" id="ravenue">
                                        <i class="mdi mdi-cart-outline" style="font-size: 3rem;"></i>
                                    </div>
                                    <div class="ml-auto">
                                        <h3 class="font-medium white-text mb-0">S/ 351.50</h3><span class="white-text op-5">Jan 01  - Jan  20</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xl-2">
                        <div class="card card-hover bg-danger text-white">
                            <div class="card-body">
                                <h4 class="card-title">Mesas</h4>
                                <div class="d-flex align-items-center">
                                    <div class="" id="ravenue">
                                        <i class="mdi mdi-table" style="font-size: 3rem;"></i>
                                    </div>
                                    <div class="ml-auto">
                                        <h3 class="font-medium white-text mb-0">$351</h3><span class="white-text op-5">Jan 10  - Jan  20</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xl-2">
                        <div class="card card-hover bg-success text-white">
                            <div class="card-body">
                                <h4 class="card-title">Delibery</h4>
                                <div class="d-flex align-items-center">
                                    <div class="" id="ravenue">
                                        <i class="mdi mdi-truck" style="font-size: 3rem;"></i>
                                    </div>
                                    <div class="ml-auto">
                                        <h3 class="font-medium white-text mb-0">$351</h3><span class="white-text op-5">Jan 10  - Jan  20</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Tipo</th>
                                <th>Title</th>
                                <th>ID</th>
                                <th>Product</th>
                                <th>Created by</th>
                                <th>Date</th>
                                <th>Agent</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="label label-info">Rapida</span></td>
                                <td><a href="ticket-detail.html" class="font-medium link">Elegant Theme Side Menu Open OnClick</a></td>
                                <td><a href="ticket-detail.html" class="font-bold link">276377</a></td>
                                <td>Elegant Admin</td>
                                <td>Eric Pratt</td>
                                <td>2018/05/01</td>
                                <td>Fazz</td>
                            </tr>
                            <tr>
                                <td><span class="label label-danger">Closed</span></td>
                                <td><a href="ticket-detail.html" class="font-medium link">AdminX Theme Side Menu Open OnClick</a></td>
                                <td><a href="ticket-detail.html" class="font-bold link">1234251</a></td>
                                <td>AdminX Admin</td>
                                <td>Nirav Joshi</td>
                                <td>2018/05/11</td>
                                <td>Steve</td>
                            </tr>
                            <tr>
                                <td><span class="label label-success">Opened</span></td>
                                <td><a href="ticket-detail.html" class="font-medium link">Admin-Pro Theme Side Menu Open OnClick</a></td>
                                <td><a href="ticket-detail.html" class="font-bold link">1020345</a></td>
                                <td>Admin-Pro</td>
                                <td>Vishal Bhatt</td>
                                <td>2018/04/01</td>
                                <td>John</td>
                            </tr>
                            <tr>
                                <td><span class="label label-warning">In Progress</span></td>
                                <td><a href="ticket-detail.html" class="font-medium link">Elegant Theme Side Menu Open OnClick</a></td>
                                <td><a href="ticket-detail.html" class="font-bold link">7810203</a></td>
                                <td>Elegant Admin</td>
                                <td>Eric Pratt</td>
                                <td>2018/01/01</td>
                                <td>Fazz</td>
                            </tr>
                            <tr>
                                <td><span class="label label-warning">In Progress</span></td>
                                <td><a href="ticket-detail.html" class="font-medium link">AdminX Theme Side Menu Open OnClick</a></td>
                                <td><a href="ticket-detail.html" class="font-bold link">2103450</a></td>
                                <td>AdminX Admin</td>
                                <td>Nirav Joshi</td>
                                <td>2018/05/01</td>
                                <td>John</td>
                            </tr>
                            <tr>
                                <td><span class="label label-warning">In Progress</span></td>
                                <td><a href="ticket-detail.html" class="font-medium link">Admin-Pro Theme Side Menu Open OnClick</a></td>
                                <td><a href="ticket-detail.html" class="font-bold link">2140530</a></td>
                                <td>Admin-Pro</td>
                                <td>Vishal Bhatt</td>
                                <td>2018/07/01</td>
                                <td>Steve</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Status</th>
                                <th>Title</th>
                                <th>ID</th>
                                <th>Product</th>
                                <th>Created by</th>
                                <th>Date</th>
                                <th>Agent</th>
                            </tr>
                        </tfoot>
                    </table>
                    <ul class="pagination float-right">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal venta rapida -->
<div class="modal fade modalVentaRapida" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Venta Rapida</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="row" style="justify-content: center" action="#" novalidate>
                    <div class="col-xl-8 row">
                        @include('app.include.documento')
                        <div class="col-xl-12">
                            <div class="content-producto" style="background: #eef5f9;box-shadow: inset 0px 1px 5px 2px rgb(120 120 120 / 10%);">
                                <div class="col-12 p-0 position-relative">
                                    <div class="input-group">
                                        <input type="text" id="itmSearchProduct" class="form-control" placeholder="Buscar Producto...." aria-label="Username" aria-describedby="basic-addon1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-search"></i></span>
                                        </div>
                                    </div>                                
                                    <div id="components-listproduct">
                                        
                                    </div>  
                                </div>
                                <div id="components-listorder" class="m-2 list-scroll" style="overflow: auto;height: 250px;z-index: -1;">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        @include('app.include.cobrar')
                    </div>
                </form>
            </div>
            <div class="modal-footer px-4">
                <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal"><i class="mdi mdi-close"></i> Cancelar</button>
                <button type="button" class="btn btn-info waves-effect text-left"><i class="far fa-send"></i> Procesar</button>
                
                <button type="button" class="btn btn-info waves-effect text-left"><i class="far fa-send"></i> Procesar & Imprimir</button>
            </div>
        </div>
    </div>
</div>
<!-- fin modal venta rapida -->
@endsection

@section('script')
    <script src="{{asset('app/js/venta.js')}}?v=0.1" type="module"></script>
@endsection