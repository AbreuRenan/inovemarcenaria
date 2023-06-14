const btns = Array.from(document.querySelectorAll('[id^=menu-'));
btns.forEach(element => {
    element.addEventListener('click', e => {
        Array.prototype.forEach.call(document.querySelectorAll('.nav-item'), element => {
            element.classList.remove('active');
        })
        e.target.parentNode.classList.add('active');
    })
});

const imgPrevBtn = document.getElementById("img_preview_container");
imgPrevBtn.addEventListener('click', () => {
    const div = document.querySelector('[for^=img_produto]');
    const imgPrev = document.getElementById("img_preview")
    const imgInput = document.getElementById("img_produto")
    div.click()
    imgInput.onchange = evt => {
        const [file] = imgInput.files
        if (file) {
            imgPrev.src = URL.createObjectURL(file)
        }
      }
})

$('#form_cad_produto').submit(function(e) {
    e.preventDefault();
    const formData = new FormData();
    formData.append('nome_produto', $('#nome_produto').val());
    formData.append('preco_produto', $('#preco_produto').val());
    formData.append('img_produto', $('#img_produto').val());
    formData.append('descricao_produto', $('#descricao_produto').val());
    formData.append('operation', 'insert');
    const productObj = {
        nome: $('#nome_produto').val(),
        preco: $('#preco_produto').val(),
        imgURL: $('#img_produto').prop('files')[0],
        desc: $('#descricao_produto').val(),
        operation: 'insert'
    }
    $.ajax({
        url: '../src/produtos_crud.php',
        method: 'POST',
        dataType: 'json',
        data: productObj
    }).done( function(result) {
        console.log(result)
    })
})


$('#show-tab').click( () => {
    $.ajax({
        url: '../src/produtos_crud.php',
        method: 'POST',
        dataType: 'json',
        data: { 'operation': 'select' }
    }).done( result => {
        console.log(result)
        
    })
})