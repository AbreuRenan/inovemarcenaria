export function enviarRequisicao(url, method, data) {
    return new Promise(function (resolve, reject) {
        $.ajax({
            url: url,
            method: method,
            data: data,
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            success: function (response) {
                resolve(response);
            },
            error: function (errorThrown) {
                reject(errorThrown);
            }
        });
    });
}

export function getProduto(id) {
    return new Promise((resolve, reject) => {
        $.ajax({
            url: '../src/produtos_crud.php',
            method: 'POST',
            dataType: 'json',
            data: { 'id': id, 'operation': 'select' },
            success: function (response) {
                console.log(response);
                resolve(response);
            },
            error: function (errorThrown) {
                reject(errorThrown);
            }
        })
        // .done( function (response) {
        // console.log(response[0]);
        // result = response[0];
        // })
        // console.log('in done from getprodutos: '+result);
        // return result;
    })
}