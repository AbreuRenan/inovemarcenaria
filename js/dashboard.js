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
    const imgPrevBtn = document.querySelector("#form_cad_produto #img_preview_container")
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

try {
    const homePreviewBtn = document.querySelectorAll("#main-home #img_preview_container"); 
    for (let i = 0; i <homePreviewBtn.length; i++) {
        const div = document.querySelectorAll('#main-home [for^=img_produto]');
        const imgInput = document.querySelectorAll("#main-home [id^=img_produto]");
        const imgPrev = document.querySelector(`#main-home [id^=img_preview${i+1}]`)
        homePreviewBtn[i].addEventListener('click', () => {
            div[i].click();
            imgInput[i].onchange = () =>{
                const imgFile = imgInput[i].files[0]
                if (imgFile) {
                    imgPrev.src = URL.createObjectURL(imgFile)
                }
            }
        })
    }
    
} catch (error) {
    console.log(error)
}

$('#show-tab').ready(() => {
    getProdutos();
})
$('#show-tab').click(() => {
    getProdutos();
})
$('#cad-tab').click(() => {
    $('#statusmsg').fadeOut(200).empty();
})
$('#form_cad_produto input').on('focus', () => {
    $('#statusmsg').fadeOut(200).empty();
})
$('#form_cad_produto textarea').on('focus', () => {
    $('#statusmsg').fadeOut(200).empty();
})


$('#form_cad_produto').on('submit', function (e) {
    e.preventDefault();
    const formdata = new FormData(this);
    const url = '../src/produtos_crud.php';
    const method = 'post';
    enviarRequisicao(url, method, formdata).then(response => {
        if (response.status == 200) {
            const responseData = getProduto(response.last_id);
            alertaCadastro(response);
            return responseData;
        } else {
            alertaCadastro(response);
            return response;
        }
    });
})

function sidenavMenuNavigationToggler() {
    const area_id = $('.sidenav-grid .active').children()[0].id;
    switch (area_id) {
        case 'menu-home':
            $('#main-home').removeClass('fade').show();
            $('#main-produtos').addClass('fade').hide();
            $('#main-opcoes').addClass('fade').hide();
            break;
        case 'menu-produtos':
            $('#main-home').addClass('fade').hide();
            $('#main-produtos').removeClass('fade').show();
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
function alertaCadastro(serverResponse) {
    const status = serverResponse.status;
    const msg = `<p>${serverResponse.msg}</p>`;
    if (status == 200){
        $('#statusmsg').append(msg).addClass(`alert-success`).fadeIn(200)
    } else {
        $('#statusmsg').append(msg).addClass(`alert-danger`).fadeIn(200)
    }

}

console.log('dashboard loaded')