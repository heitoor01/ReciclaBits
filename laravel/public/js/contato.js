
function faq() {
    window.location.href = "/faq"
}

function suggestions() {
    window.location.href = "/sugestoes"
}

function goHome() {
    window.location.href = "/"
};

function talkToUs() {
    window.location.href = "/fale-conosco"
};

function signUp() {
  window.location.href = "/cadastro"
};

function recPass() {
    window.location.href = "/recuperar-senha"
};

const questions = document.querySelectorAll('.faq-question');
questions.forEach(q => {
    q.addEventListener('click', () => {
        const answer = q.nextElementSibling;
        answer.classList.toggle('open');
    });
});
