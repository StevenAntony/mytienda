import { select } from "../components/view/ElementForm.js";
import { listDocument, listPaymentMethod, listClient, listProduct } from "../components/api/Sale.js";
import {money} from '../components/lib/Format.js';

// Variable de Order
class Order {
    constructor(code,description,amount,price, note ) {
        this.presentationCode = code;
        this.description      = description;
        this.amount           = amount;
        this.price            = price;
        this.note             = note;
    }

    get subTotal(){
        return Number(this.amount) * Number(this.price)
    }
}

class Payment {
    constructor(mode, amount ){
        this.mode = mode
        this.amount = amount
    }
}

class Client {
    constructor(document, nroDocument, client, address ){
        this.document   = document;
        this.nroDocument= nroDocument;
        this.client     = client;
        this.address    = address;
    }
}

class Document {
    constructor(type, serie, issue, ClientClass, payment, expiration, additional, discount, ListOrderClass, ListPaymentClass ){
        this.type           = type;
        this.serie          = serie;
        this.issue          = issue;
        this.clientClass    = ClientClass;
        this.payment        = payment;
        this.expiration     = expiration;
        this.additional     = additional;
        this.discount       = discount;
        this.listOrderClass = ListOrderClass;
        this.listPaymentClass=ListPaymentClass;
    }
}

class ListOrder {
    constructor(){
        this.listOrder = []
    }

    set addOrder(order){
        this.listOrder.push(order)
    }
}


class ListPayment {
    constructor(){
        this.listPayment = []
    }

    set addPayment(payment){
        this.listPayment.push(payment)
    }
}

var ListOrderClass= new ListOrder();

var ListPayments = new ListPayment();
// Fin Variable de Order

var _ListDocument = [];
var _ListProduct  = [];

var _opSelectSerie = {
    name: "itmSerie",
    id: "itmSerie",
    required: "required",
    class: "form-control"
}

var _opSelectComprobante = {
    name: "itmComprobante",
    id: "itmComprobante",
    required: "required",
    class: "form-control"
}

var _opSelectPaymentMethod = {
    name: "itmMedioPago",
    id: "itmMedioPago",
    class: "form-control"
}

const send = (data) => {
    _ListDocument = data.data
    let comprobante = data.data.map(element => { return { value: element.nameDocument, descripcion: element.nameDocument } });
    
    $('#components-comprobante').html(select(_opSelectComprobante, comprobante))

    let find = data.data.find(element =>element.nameDocument == $(`#${_opSelectComprobante.id}`).val())
    if (find != null) {
        let series = find.series.map(element => { return { value: element.codeSerie, descripcion: element.nameSerie } });
        $('#components-serie').html(select(_opSelectSerie, series))
    
    }
}

const renderPyment = (data) => {
    let payment = data.data.map(element => { return { value: element.codePaymentMethod, descripcion: element.namePaymentMethod } });
    $('#components-mediopago').html(select(_opSelectPaymentMethod, payment))
}

const renderClient = (data) => {
    let htmlRender = ''
    if (data.data.length > 0) {
        let itemRender = ''
        data.data.forEach(element => {
            itemRender += `<div class="item-client py-3 d-flex align-items-center">
                                <div class="client-foto"><i class="fa fa-user"></i></div>
                                <div class="client-info pl-3">
                                    <p class="document m-0 font-bold"> ${element.document}</p>
                                    <p class="client m-0">${element.client}</p>
                                    <p class="address m-0">${element.address}</p>
                                </div>
                                <div class="col edit-client"><i class="fa fa-edit"></i></div>
                            </div>`
        });
        htmlRender = `<div class="content-client col-12">
                            <div class="list-client list-scroll">
                                ${itemRender}
                            </div>
                        </div>`
    }
    $('#component-listclient').html(htmlRender)
}

listDocument({
    "action": "List",
    "reference": "01"
}, send)

listPaymentMethod({
    "action" : "List"
  },renderPyment)



$(document).on('change',`#${_opSelectComprobante.id}`,function () {  
    let find = _ListDocument.find(element => element.nameDocument == $(`#${_opSelectComprobante.id}`).val())
    if (find != null) {
        let series = find.series.map(element => { return { value: element.codeSerie, descripcion: element.nameSerie } });
        $('#components-serie').html(select(_opSelectSerie, series))
    
    }
})


$('#itmCliente').keyup(function (e) {
    if ($(this).val().length > 3) {
        listClient({
            action : "Search",
            search : $(this).val()
          }, renderClient)
    } else{
        $('#component-listclient').html('')
    }
});



// Proceso de la Orden de venta

const renderProduct = (data) => {
    let htmlRender = ''
    if (data.data.length > 0) {
        let itemRender = ''
        _ListProduct = data.data
        data.data.forEach(element => {
            itemRender += `<div class="item-product d-flex" id="itemProduct${element.presentationCode}">
                                <div>
                                    <div class="imagen-product">
                                        <i class="fa fa-image"></i>
                                    </div>
                                </div>
                                <div class="product-info pl-3 col">
                                    <p class="m-0 description">${element.nameProduct}</p>
                                    <div class="m-0 d-flex justify-content-between">
                                        <p class="${element.Stock<=0?'text-danger':''} m-0">
                                            <span>${element.nameUnit}</span>
                                            <span class="cantidad">${element.Stock}</span>
                                        </p>
                                        <p class="m-0">
                                            <span class="price">${money(element.price)}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>`
        });
        htmlRender = `<div class="list-product list-scroll">
                            ${itemRender}
                        </div>`
    }
    $('#components-listproduct').html(htmlRender)
}

const renderOrder = (data) => {
    let htmlRender = ''
    if (data.length > 0) {
        let itemRender = ''
        data.forEach(element => {
            itemRender += `<div class="item-order d-flex my-2 bg-white p-3" id="itemOrder${element.presentationCode}">
                                <div>
                                    <div class="imagen-product">
                                        <i class="fa fa-image"></i>
                                    </div>
                                </div>
                                <div class="product-info pl-3 col">
                                    <p class="m-0 description">${element.description}</p>
                                    <div class="m-0 d-flex  align-items-end justify-content-between">
                                        <div class="m-0 d-flex  align-items-end">
                                            <span style="width: 130px;" class="pr-1">
                                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                                    <button type="button" class="btn btn-danger text-white amountDecrease"><i class="fa fa-minus"></i></button>
                                                    <div class="form-mateialize ">
                                                        <div class="controls p-0">
                                                            <input type="text" value="${element.amount}" class="itmAmount form-control p-2 text-center"> 
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-success text-white amountIncrease"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </span>
                                            <span style="width: 100px;" class="pr-1">
                                                <div class="form-mateialize">
                                                    <div class="controls">
                                                        <label>Precio</label>
                                                        <input type="number" value="${element.price}" class="itmPrice form-control"> 
                                                    </div>
                                                </div>
                                            </span>
                                            <span style="width: 100px;" class="pr-1">
                                                <div class="form-mateialize">
                                                    <div class="controls">
                                                        <label>SubTotal</label>
                                                        <input type="number" value="${element.price * element.amount}" class="itmSubTotal form-control"> 
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>`
        });
        htmlRender = `<div class="list-order list-scroll">
                            ${itemRender}
                        </div>`
    }
    
    $('#components-listorder').html(htmlRender)
}

$('#itmSearchProduct').keyup(function (e) {
    if ($(this).val().length > 1) {
        listProduct({
            action : "Search",
            search : $(this).val()
          }, renderProduct)
    } else{
        $('#components-listproduct').html('')
    }
});

$(document).on('click','.item-product',function () {  
    // $(this).closet('.itemProduct')
    let extraerCode = $(this).attr('id');
    extraerCode = extraerCode.split('itemProduct')[1]
    let find = _ListProduct.find(element => element.presentationCode == extraerCode)
    if (find != null) {
        let obj = new Order(find.presentationCode,find.nameProduct,1,find.price,'')
        let finIndex = ListOrderClass.listOrder.findIndex(element => element.presentationCode == extraerCode)
        if (finIndex <= -1) {        
            ListOrderClass.addOrder = obj
        }else{
            ListOrderClass.listOrder[finIndex].amount = Number(ListOrderClass[finIndex].amount) + 1 
        }
        console.log(ListOrderClass);
        updateTotal()
        _ListProduct = []
        $('#components-listproduct').html('')
        renderOrder(ListOrderClass.listOrder)
    }
})

const updateTotal = () => {
    let total = 0;
    ListOrderClass.listOrder.forEach(element => {
        total += Number(element.subTotal)
    });
    $('.globalTotal').html(money(total))
}

const updateQuantity = (code, amount, dom, subtotal ,modo = 'AGREGAR') => {
    let finIndex = ListOrderClass.listOrder.findIndex(element => element.presentationCode == code)
    if (finIndex >= 0) {        
        if (modo == 'AGREGAR') {
            ListOrderClass.listOrder[finIndex].amount = (Number(amount) <= 0) ? 1 :Number(amount)
        }else{
            let update = Number(ListOrderClass.listOrder[finIndex].amount) + amount
            ListOrderClass.listOrder[finIndex].amount = update <= 0 ? 1 : update;
        }
        dom.val(Number(ListOrderClass.listOrder[finIndex].amount))
        subtotal.val(Number(ListOrderClass.listOrder[finIndex].subTotal)) 
        updateTotal()
    }
}

const updatePrice = (code, price, dom, subtotal ) => {
    let finIndex = ListOrderClass.listOrder.findIndex(element => element.presentationCode == code)
    if (finIndex >= 0) {        
        ListOrderClass.listOrder[finIndex].price = (Number(price) <= 0) ? 1 :Number(price)
        dom.val(Number(ListOrderClass.listOrder[finIndex].price))
        subtotal.val(Number(ListOrderClass.listOrder[finIndex].subTotal)) 
        updateTotal()
    }
}

const updateSubTotal = (code, subtotal, dom, amountDom ) => {
    let finIndex = ListOrderClass.listOrder.findIndex(element => element.presentationCode == code)
    if (finIndex >= 0) {        
        let subTotal = (Number(subtotal) <= 0) ? 1 :Number(subtotal)
        ListOrderClass.listOrder[finIndex].amount = subTotal / Number(ListOrderClass.listOrder[finIndex].price)
        dom.val(Number(ListOrderClass.listOrder[finIndex].subTotal))
        amountDom.val(Number(ListOrderClass.listOrder[finIndex].amount)) 
        updateTotal()
    }
}

$(document).on('change','.itmAmount',function () {  
    let data = $(this).closest('.item-order')
    let extraerCode = data.attr('id');
    extraerCode = extraerCode.split('itemOrder')[1]
    let number = /^([0-9]+\.?[0-9]{0,2})$/.test($(this).val()) ? $(this).val() : 1
    updateQuantity(extraerCode,number, $(this),$(`#${data.attr('id')} .itmSubTotal`))
})

$(document).on('click','.amountDecrease',function () {  
    let data = $(this).closest('.item-order')
    let extraerCode = data.attr('id');
    extraerCode = extraerCode.split('itemOrder')[1]
    updateQuantity(extraerCode,-1, $(`#${data.attr('id')} .itmAmount`),$(`#${data.attr('id')} .itmSubTotal`) , 'ACTUALIZAR')
})

$(document).on('click','.amountIncrease',function () {  
    let data = $(this).closest('.item-order')
    let extraerCode = data.attr('id');
    console.log(extraerCode);
    extraerCode = extraerCode.split('itemOrder')[1]
    updateQuantity(extraerCode,1, $(`#${data.attr('id')} .itmAmount`),$(`#${data.attr('id')} .itmSubTotal`) , 'ACTUALIZAR')
})

$(document).on('change','.itmPrice',function () {  
    let data = $(this).closest('.item-order')
    let extraerCode = data.attr('id');
    extraerCode = extraerCode.split('itemOrder')[1]
    updatePrice(extraerCode,$(this).val(), $(this),$(`#${data.attr('id')} .itmSubTotal`))
})

$(document).on('change','.itmSubTotal',function () {  
    let data = $(this).closest('.item-order')
    let extraerCode = data.attr('id');
    extraerCode = extraerCode.split('itemOrder')[1]
    updateSubTotal(extraerCode,$(this).val(), $(this),$(`#${data.attr('id')} .itmAmount`))
})
