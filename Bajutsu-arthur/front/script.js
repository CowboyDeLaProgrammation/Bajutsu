const game = document.querySelector(".archery-game");
const target = document.querySelector("#archery-target");
const arrow = document.querySelector("#archery-arrow");
const result = document.querySelector("#archery-result");
const pointsEl = document.querySelector("#archery-points");
const messageEl = document.querySelector("#archery-message");
const totalEl = document.querySelector("#archery-total");
const reset = document.querySelector("#archery-reset");

let score = 0;
let moving = false;
let hit = false;

function startTarget() {
    hit = false;
    moving = true;
    result.classList.remove("show");

    target.style.left = game.offsetWidth + "px";

    const start = performance.now();
    const duration = 3500 + Math.random() * 2000;

    function move(time) {
        if (!moving) return;

        const progress = Math.min((time - start) / duration, 1);
        const x = game.offsetWidth - progress * (game.offsetWidth + 180);

        target.style.left = x + "px";

        if (progress < 1) {
            requestAnimationFrame(move);
        } else {
            moving = false;
            setTimeout(startTarget, 500);
        }
    }

    requestAnimationFrame(move);
}

function shoot(x, y) {
    if (!moving || hit) return;

    hit = true;
    moving = false;

    const gameRect = game.getBoundingClientRect();
    const targetRect = target.getBoundingClientRect();

    const startX = gameRect.width / 2;
    const startY = gameRect.height - 50;

    const dx = x - gameRect.left - startX;
    const dy = y - gameRect.top - startY;

    const angle = Math.atan2(dy, dx) * 180 / Math.PI;

    arrow.style.left = startX + "px";
    arrow.style.top = startY + "px";
    arrow.style.transform = `rotate(${angle}deg)`;
    arrow.style.transformOrigin = "left center";
    arrow.style.opacity = "1";

    arrow.animate(
        [
            { transform: `rotate(${angle}deg) translateX(0)` },
            { transform: `rotate(${angle}deg) translateX(${Math.hypot(dx, dy)}px)` }
        ],
        {
            duration: 400,
            easing: "ease-out",
            fill: "forwards"
        }
    );

    setTimeout(() => {
        const localX = x - targetRect.left;
        const localY = y - targetRect.top;

        const cx = targetRect.width / 2;
        const cy = targetRect.height / 2;

        const distance = Math.hypot(
            localX - cx,
            localY - cy
        );

        const radius = targetRect.width / 2;
        const ratio = distance / radius;

        let points;

        if (ratio <= .2) points = 10;
        else if (ratio <= .4) points = 8;
        else if (ratio <= .6) points = 6;
        else if (ratio <= .8) points = 4;
        else if (ratio <= 1) points = 2;
        else points = 0;

        score += points;
        totalEl.textContent = score;

        const marker = document.createElement("div");
        marker.className = "archery-hit";
        marker.style.left = localX + "px";
        marker.style.top = localY + "px";

        target.appendChild(marker);

        pointsEl.textContent = points;
        messageEl.textContent = points
            ? "Bien joué !"
            : "Raté !";

        result.classList.add("show");
    }, 400);
}

game.addEventListener("click", e => {
    if (e.target.closest("#archery-reset")) return;
    shoot(e.clientX, e.clientY);
});

reset.addEventListener("click", e => {
    e.stopPropagation();

    arrow.style.opacity = "0";

    const marker = target.querySelector(".archery-hit");
    if (marker) marker.remove();

    result.classList.remove("show");

    setTimeout(startTarget, 200);
});

startTarget();
