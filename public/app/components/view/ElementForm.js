export const select = (attr,content) => {
    let attrRender = ``
    for (const key in attr) {
        if (Object.hasOwnProperty.call(attr, key)) {
            const element = attr[key];
            attrRender += `${key}="${element}"`
        }
    }
    let select = `<select ${attrRender}>
                    ${content.map(function(element) {
                        return `<option value=${element.value} >${element.descripcion}</option>`
                    })}
                 </select>`

    return select
} 