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
                            <div class="content-producto" style="height: 300px;background: #eef5f9;box-shadow: inset 0px 1px 5px 2px rgb(120 120 120 / 10%);">
                                <div class="col-12 p-0">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Buscar Producto...." aria-label="Username" aria-describedby="basic-addon1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-search"></i></span>
                                        </div>
                                    </div>
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