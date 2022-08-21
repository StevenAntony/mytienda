export const money = (money) => {
    let format = Number(money).toLocaleString("es-US",{
        style:'currency',
        currency:'PEN'
    })
    console.log(format);
    return format;
} 