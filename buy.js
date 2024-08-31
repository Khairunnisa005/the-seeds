const formatNumber = (number) => {
    return number < 10 ? "0" + number : number;
}

const endTime = new Date('September 1, 2024 07:00:00').getTime();

const countdown = setInterval(() => {
    
    const now = new Date().getTime();

    const distance = endTime - now;

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor(distance % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
    const minutes = Math.floor(distance % (1000 * 60 * 60) / (1000 * 60));
    const seconds = Math.floor(distance % (1000 * 60) / (1000));

    document.querySelector('#days').innerText = formatNumber(days)
    document.querySelector('#hours').innerText = formatNumber(hours)
    document.querySelector('#minutes').innerText = formatNumber(minutes)
    document.querySelector('#seconds').innerText = formatNumber(seconds)

    if (distance <= 0) {
        clearInterval(countdown);
    }

}, 1000);

const btnClose = document.querySelector('.btn-close');
const btnHamburger = document.querySelector('.hamburger-container');
const links = document.querySelectorAll('.nav-link');

if (btnHamburger) {
    const mobileMenu = document.querySelector('.nav-item-wrapper-mobile');

    btnClose.addEventListener('click', () => {
        mobileMenu.style.left = '-280px'
    })
    btnHamburger.addEventListener('click', () => {
        mobileMenu.style.left = '0px'
    })

    links.forEach((link) => {
        link.addEventListener('click', () => {
            mobileMenu.style.left = '-280px'
            window.location.href = './index.php';
        })
    })

    document.addEventListener('click', (e) => {
        if (!mobileMenu.contains(e.target) && !btnHamburger.contains(e.target)) {
            mobileMenu.style.left = '-280px'
        }
    })
}