import { headersList, url } from "../ApiRest.js";

export const listDocument =  async (body,success) => {
       
    let bodyContent = JSON.stringify(body);

    let response = await fetch(`${url}/resource/document`, { 
        method: "POST",
        body: bodyContent,
        headers: headersList()
    })
    .then(response => response.json())
    .then(data => {
        success(data)
    })
    .catch(function(error) {
        console.log('Hubo un problema con la petición Fetch:' + error.message);
    });
}

export const listPaymentMethod =  async (body,success) => {
       
    let bodyContent = JSON.stringify(body);

    let response = await fetch(`${url}/resource/payment_method`, { 
        method: "POST",
        body: bodyContent,
        headers: headersList()
    })
    .then(response => response.json())
    .then(data => {
        success(data)
    })
    .catch(function(error) {
        console.log('Hubo un problema con la petición Fetch:' + error.message);
    });
}

export const listClient =  async (body,success) => {
       
    let bodyContent = JSON.stringify(body);

    let response = await fetch(`${url}/resource/client`, { 
        method: "POST",
        body: bodyContent,
        headers: headersList()
    })
    .then(response => response.json())
    .then(data => {
        success(data)
    })
    .catch(function(error) {
        console.log('Hubo un problema con la petición Fetch:' + error.message);
    });
}

export const listProduct =  async (body,success) => {
       
    let bodyContent = JSON.stringify(body);

    let response = await fetch(`${url}/resource/product`, { 
        method: "POST",
        body: bodyContent,
        headers: headersList()
    })
    .then(response => response.json())
    .then(data => {
        success(data)
    })
    .catch(function(error) {
        console.log('Hubo un problema con la petición Fetch:' + error.message);
    });
}
