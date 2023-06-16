const btns = Array.from(document.querySelectorAll('[id^=menu-'));
btns.forEach(element => {
    element.addEventListener('click', e => {
        Array.prototype.forEach.call(document.querySelectorAll('.nav-item'), element => {
            element.classList.remove('active');
        })
        e.target.parentNode.classList.add('active');
        sidenavMenuNavigationToggler();
    })
});

try {
    const imgPrevBtn = document.getElementById("img_preview_container");
    imgPrevBtn.addEventListener('click', () => {
        const div = document.querySelector('[for^=img_produto]');
        const imgPrev = document.getElementById("img_preview")
        const imgInput = document.getElementById("img_produto")
        div.click()
        imgInput.onchange = evt => {
            const file = imgInput.files[0]
            if (file) {
                imgPrev.src = URL.createObjectURL(file)
            }
        }
    })
} catch (error) {
    console.log(error)
}

$('#show-tab').ready(() => {
    getProdutos()
})
$('#show-tab').click(() => {;
    getProdutos()
})

$('#form_cad_produto').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        method: 'POST',
        url: '../src/produtos_crud.php',
        data: new FormData(this),
        dataType: 'json',
        contentType: false,
        cache: false,
        processData: false
    }).done(result => {
        console.log(result);
        // preencherForm(result.last_id)
    });
})

function getProdutos() {
    $('#show-tab-pane>ul').empty();
    $.ajax({
        url: '../src/produtos_crud.php',
        method: 'POST',
        dataType: 'json',
        data: { 'operation': 'select' }
    }).done(result => {
        result.forEach(element => {
            const data = {
                id: element.id,
                nome: element.nome,
                preco: element.preco,
                descricao: element.descricao,
                imgURL: element.img
            }
            criarListaProdutos(data);
        });
    })
}
function criarListaProdutos(objetoProdutos) {
    $('#show-tab-pane>ul').append(`
    <li class="d-flex list-group-item justify-content-between">
        <a href="produto.php?crud=2&id=${objetoProdutos.id}">${objetoProdutos.nome}</a>
        <div class="icons d-flex gap-3 align-items-center">
            <a href="#" onclick=deleteItemBy(${objetoProdutos.id})>
                <i class="fa-solid fa-trash text-danger"></i>
            </a>
            <a href="#" >
                <i class="fa-solid fa-pen text-primary" ></i>
            </a>
        </div>
    </li>
    `)
}
function deleteItemBy(id) {
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

function sidenavMenuNavigationToggler() {
    const area_id = $('.sidenav-grid .active').children()[0].id;
    switch (area_id) {
        case 'menu-home':
            $('#main-home').addClass('fade').hide();
            $('#main-produtos').removeClass('fade').show();
            $('#main-opcoes').addClass('fade').hide();
            break;
        case 'menu-produtos':
            $('#main-home').removeClass('fade').show();
            $('#main-produtos').addClass('fade').hide();
            $('#main-opcoes').addClass('fade').hide();
            break;
        case 'menu-opcoes':
            $('#main-home').addClass('fade').hide();
            $('#main-produtos').addClass('fade').hide();
            $('#main-opcoes').removeClass('fade').show();
            break;
        default:
            break;
    }
}