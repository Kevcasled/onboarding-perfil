document.body.addEventListener("pointermove", (e) => {
    const { currentTarget: el, clientX: x, clientY: y } = e;
    const { top: t, left: l, width: w, height: h } = el.getBoundingClientRect();
    el.style.setProperty('--posX', x - l - w / 2);
    el.style.setProperty('--posY', y - t - h / 2);
});

document.addEventListener('DOMContentLoaded', function () {
    // Initialize Lucide icons
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    const tabLinks = document.querySelectorAll('.tab-link');
    const panels = document.querySelectorAll('.panel');

    tabLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            const targetSection = this.getAttribute('data-section');

            tabLinks.forEach(tab => tab.classList.remove('active'));
            this.classList.add('active');

            panels.forEach(panel => panel.classList.remove('active'));

            const targetPanel = document.querySelector(`.panel[data-section="${targetSection}"]`);
            if (targetPanel) {
                targetPanel.classList.add('active');
            }
        });
    });
});