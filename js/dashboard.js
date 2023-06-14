const btns = Array.from(document.querySelectorAll('[id^=menu-'));
btns.forEach(element => {
    element.addEventListener('click', e => {
        Array.prototype.forEach.call(document.querySelectorAll('.nav-item'), element => {
            element.classList.remove('active');
        })
        e.target.parentNode.classList.add('active');
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
function getProdutos() {
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
            <a href="produto.php?crud=4&id=${objetoProdutos.id}">
                <i class="fa-solid fa-trash text-danger"></i>
            </a>
            <a href="produto.php?crud=3&id=${objetoProdutos.id}">
                <i class="fa-solid fa-pen text-primary"></i>
            </a>
        </div>
    </li>
    `)
}
console.log('dashboard.js loaded')