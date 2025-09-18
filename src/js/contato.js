// 
function faq() {
    window.location.href = "faq.html"
}

function suggestions() {
    window.location.href = "suggestions.html"
}

function goHome() {
    window.location.href = "index.html"
};

function talkToUs() {
    window.location.href = "talkToUs.html"
};

function signUp() {
  window.location.href = "cadastro.html"
};

const questions = document.querySelectorAll('.faq-question');
questions.forEach(q => {
    q.addEventListener('click', () => {
        const answer = q.nextElementSibling;
        answer.classList.toggle('open');
    });
});