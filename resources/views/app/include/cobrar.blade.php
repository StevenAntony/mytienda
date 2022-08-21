<style>
    .tablePagos th,
    .tablePagos td {
        padding: 0.5rem;
        font-weight: bold
    }
</style>
<div class="h3 d-flex col-12 justify-content-between mb-3"><span>TOTAL :</span> <span class="globalTotal">PEN 0</span></div>
<div class="d-flex flex-wrap">
    <div class="form-group form-mateialize col-6 ">
        <div class="controls">
            <label>Adicional </label>
            <input type="number" value="0.00" name="itmAdicional" id="itmAdicional" class="form-control">
        </div>
    </div>
    <div class="form-group form-mateialize col-6">
        <div class="controls">
            <label>Descuento </label>
            <input type="number" value="0.00" name="itmDescuento" id="itmDescuento" class="form-control">
        </div>
    </div>
    <hr class="w-100">
    <div class="form-group form-mateialize col-xl-6 col-lg-3 col-6">
        <div class="controls">
            <label>Pago <span class="text-danger">*</span></label>
            <select name="itmPago" id="itmPago" required class="form-control">
                <option value="1">Contado</option>
                <option value="2">Credito</option>
            </select>
        </div>
    </div>
    <div class="form-group form-mateialize col-xl-6 col-lg-3 col-6">
        <div class="controls">
            <label>Vencimiento <span class="text-danger">*</span></label>
            <input type="date" value="{{ date('Y-m-d') }}" disabled name="itmVencimiento" id="itmVencimiento"
                class="form-control">
        </div>
    </div>
    <div class="form-group form-mateialize col-xl-6 col-lg-3 col-6">
        <div class="controls" >
            <label>Medio </label>
            <div id="components-mediopago"></div>
            
        </div>
    </div>
    <div class="form-group form-mateialize col-xl-6 d-flex col-lg-3 col-6">
        <div class="controls" style="    flex: 1;">
            <label>Monto</label>
            <input type="number" value="0.00" name="itmMonto" id="itmMonto" class="form-control">
        </div>
        <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i></button>
    </div>
    <div class="col-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered tablePagos">
                <thead>
                    <tr class="text-center bg-primary text-white">
                        <th>Modo</th>
                        <th>Monto S/</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody id="renderPayment">
                    {{-- <tr class="text-center">
                        <td><span class="label label-info">Efectivo</span></td>
                        <td>200</td>
                        <td><i class="fa fa-trash"></i></td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-12 d-flex justify-content-between">
        <span class="bg-danger text-white h5 p-2">Falta : <span class="faltaPago">PEN 0</span></span>
        <span class="bg-primary text-white h5 p-2">Vuelto : <span class="Vuelto">PEN 0</span></span>
    </div>
</div>
