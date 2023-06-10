console.log("dash loaded.")
const btns = Array.from(document.querySelectorAll('[id^=menu-'));
const btn_home = document.getElementById('menu-home');
const btn_produtos = document.getElementById('menu-produtos');
const btn_opcoes = document.getElementById('menu-opcoes');
btns.forEach(element => {
    element.addEventListener('click', e => {
        e.preventDefault();
        Array.prototype.forEach.call(document.querySelectorAll('.nav-item'), element => {
            element.classList.remove('active');
        })
        e.target.parentNode.classList.add('active');
        console.log(e.target.parentNode);
    })
});
