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
    })
}

export function deleteItemBy(id) {
    $.ajax({
        url: "../src/produtos_crud.php",
        method: "POST",
        dataType: 'json',
        data: { 'operation': 'delete', 'id': id }
    }).done((result) => {
        getProdutos();
        console.log(result);
    })
}

export function criarListaProdutos(objetoProdutos) {
    $('#show-tab-pane>ul').append(`
    <li class="d-flex list-group-item justify-content-between">
        <a href="produto.php?crud=2&id=${objetoProdutos.id}">${objetoProdutos.nome}</a>
        <div class="icons d-flex gap-3 align-items-center">
            <a href="#" id=apagarItem-${objetoProdutos.id} value=${objetoProdutos.id}>
                <i class="fa-solid fa-trash text-danger"></i>
            </a>
            <a href="#" >
                <i class="fa-solid fa-pen text-primary" ></i>
            </a>
        </div>
    </li>
    `)
}

function deleteListener() {
    const delbtns = Array.from(document.querySelectorAll('[id^=apagarItem-'));
    delbtns.forEach(e => {
        const clickFun = event => {
            let a = event.target.parentNode;
            let id = a.id.substring(a.id.length-2);
            deleteItemBy(id);
        }
        e.removeEventListener('click', clickFun);
        e.addEventListener('click', clickFun)
    })
}
export function getProdutos() {
    $('#show-tab-pane>ul').empty();
    const url = '../src/produtos_crud.php';
    const method = 'POST';
    const data = new FormData();
    data.append('operation', 'select')
    enviarRequisicao(url, method, data).then(result => {
        result.forEach(returnedLine => {
            const data = {
                id: returnedLine.id,
                nome: returnedLine.nome,
                preco: returnedLine.preco,
                descricao: returnedLine.descricao,
                imgURL: returnedLine.img
            }
            criarListaProdutos(data);
        })
        deleteListener();
    })

}