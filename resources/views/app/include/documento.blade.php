<style>
    .content-client{
        position: absolute;
        left: 0;
        width: 100%;
        top: 63px;
        z-index: 1;
    }

    .content-client .list-client{
        background: white;
        border-bottom: 3px solid #2962ff;
        padding: 30px 20px;
        box-shadow: 1px 1px 20px 1px rgb(41 98 255 / 14%);
        max-height: 250px;
        overflow: auto;
    }
    
    .content-client .item-client{
        border-bottom: 1px solid #cdcaca;
        cursor: pointer;
    }
    .client-foto i{
        color: #fff;
        font-size: 1.5rem;
        background: #445a6e;
        border-radius: 50%;
        padding: 10px;
    }

    
    .edit-client{
        text-align: right;
        font-size: 1.2rem;
    }
</style>

<div class="form-group form-mateialize col-md-4 col-6">
    <div class="controls">
        <label>Comprobante <span class="text-danger">*</span></label>
        <div id="components-comprobante"></div>
    </div>
</div>
<div class="form-group form-mateialize col-md-4 col-6">
    <div class="controls">
        <label>Serie <span class="text-danger">*</span></label>
        <div id="components-serie"></div>
    </div>
</div>
<div class="form-group form-mateialize col-md-4">
    <div class="controls">
        <label>Emisión <span class="text-danger">*</span></label>
        <input type="date" value="{{date('Y-m-d')}}" name="itmEmision" id="itmEmision" class="form-control" required> </div>
</div>
<div class="form-group form-mateialize col-12" style="display: flex;position: relative;">
    <div class="controls" style="flex: 1">
        <label>Cliente <span class="text-danger">*</span></label>
        <input type="text" autocomplete="off" name="itmCliente" id="itmCliente" class="form-control"> 
    </div>
    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-info"><i class="fa fa-search"></i></button>
        {{-- <button type="button" class="btn btn-info" data-toggle="modal" data-target=".modalCliente"><i class="fa fa-edit"></i></button> --}}
        <button type="button" class="btn btn-info" data-toggle="modal" data-target=".modalCliente"><i class="fa fa-plus"></i></button>
        <button type="button" class="btn btn-info"><i class="fa fa-user"></i></button>
    </div>
    <div id="component-listclient">
        
    </div>
</div>