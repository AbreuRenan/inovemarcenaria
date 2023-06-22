import { enviarRequisicao, getProduto, getProdutos} from './formCadastro.controls.js';
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
        const imgPrev = document.getElementById("img_preview");
        const imgInput = document.getElementById("img_produto");
        div.click();
        imgInput.onchange = evt => {
            const file = imgInput.files[0]
            if (file) {
                imgPrev.src = URL.createObjectURL(file);
            }
        }
    })
} catch (error) {
    console.log(error);
}

$('#show-tab').ready(() => {
    getProdutos();
})
$('#show-tab').click(() => {
    getProdutos();
})

$('#form_cad_produto').on('submit', function (e) {
    e.preventDefault();
    const data = new FormData(this);
    const url = '../src/produtos_crud.php';
    const method = 'post';
    enviarRequisicao(url, method, data).then(response => {
        const data = getProduto(response.last_id);
        if (data) {
            console.log(data);
        }
    });
})

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

console.log('dashboard loaded')