const textArea = document.querySelector('#textarea');//querySelector使う場合
// const textArea = document.getElementById('textarea');//getElementById使う場合
const counter = document.querySelector('#inputCounter');
const text = document.querySelector('#text');
const button = document.querySelector('#button');
const max = 100;

counter.innerHTML = max;
textArea.addEventListener('input', () => {
    const remaining = max - textArea.value.length;
    if (remaining < 0) {
        const over = remaining * -1
        text.innerHTML = ("文字数オーバーです。" + over + "文字削除してください");
        button.disabled = true;
        text.style.color = "red";
    } else {
        text.innerHTML = ("残り" + remaining + "文字");
        button.disabled = false;
        text.style.color = "black";
    }
})