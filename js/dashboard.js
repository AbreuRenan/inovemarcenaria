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

            criarViewProdutos(data);
        });
    })
}
function criarViewProdutos(objetoProdutos) {
    const li = document.createElement('li');
    const a = document.createElement('a');
    const aDel = document.createElement('a');
    const aEdit = document.createElement('a');
    const div = document.createElement('div');
    const iconDel = document.createElement('i');
    const iconEdit = document.createElement('i');

    li.classList.add("d-flex", "list-group-item", "justify-content-between");
    div.classList.add("icons", "d-flex", "gap-3", "align-items-center")
    a.href = `produto.php?crud=2&id=${objetoProdutos.id}`;
    a.innerHTML = objetoProdutos.nome;
    li.appendChild(a);
    li.appendChild(div);
    div.appendChild(aDel);
    div.appendChild(aEdit);
    aDel.appendChild(iconDel);
    aEdit.appendChild(iconEdit);
    aDel.href = `produto.php?crud=4&id=${objetoProdutos.id}`;
    aEdit.href = `produto.php?crud=3&id=${objetoProdutos.id}`;
    iconDel.classList.add("fa-solid", "fa-trash", "text-danger");
    iconEdit.classList.add("fa-solid", "fa-pen", "text-primary");
    $('#show-tab-pane>ul').append(li)
}
console.log('dashboard.js loaded')