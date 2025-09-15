// 
function loginIssues() {
    window.location.href = "loginIssues.html"
}

function faq() {
    window.location.href = "loginIssues.html"
}

function suggestions() {
    window.location.href = "suggestions.html"
}

const questions = document.querySelectorAll('.faq-question');
questions.forEach(q => {
    q.addEventListener('click', () => {
        const answer = q.nextElementSibling;
        answer.classList.toggle('open');
    });
});