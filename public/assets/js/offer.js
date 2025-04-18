
document.addEventListener("DOMContentLoaded", function () {
    const wrappers = document.querySelectorAll(".countdown-wrapper");

    wrappers.forEach(wrapper => {
        const endTime = new Date(wrapper.getAttribute("data-end-time")).getTime();
        const daysEl = wrapper.querySelector("#days");
        const hoursEl = wrapper.querySelector("#hours");
        const minutesEl = wrapper.querySelector("#minutes");
        const labelEl = wrapper.closest('.countdown-box')?.querySelector(".countdown-label-text");

        const timer = setInterval(() => {
            const now = new Date().getTime();
            const distance = endTime - now;

            if (distance <= 0) {
                clearInterval(timer);
                daysEl.textContent = "00";
                hoursEl.textContent = "00";
                minutesEl.textContent = "00";
                if (labelEl) labelEl.textContent = "انتهى العرض!";
                return;
            }

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

            daysEl.textContent = String(days).padStart(2, '0');
            hoursEl.textContent = String(hours).padStart(2, '0');
            minutesEl.textContent = String(minutes).padStart(2, '0');
        }, 1000);
    });
});