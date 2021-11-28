const startingMinutes = Number(prompt(document.getElementById('watch')))
let time = startingMinutes * 60

const countDownEl = document.getElementById('watch')

setInterval(updateCountdown, 1000)

function updateCountdown() {
    const minutes = Math.floor(time / 60);
    let seconds = time % 60;

    countDownEl.innerHTML = `${minutes}:${seconds}`;
    time--;
}

