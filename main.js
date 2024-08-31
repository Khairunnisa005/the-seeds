const loaderTextWrapper = document.querySelector('.loader-text');
const loaderText = ['T', 'H', 'E', '-', 'S','E', 'E', 'D', 'S'];
let delay = 0;

if (loaderTextWrapper) {
    for (let i = 0; i < loaderText.length; i++) {
        delay += 150;
        const span = document.createElement('span');
        span.textContent = loaderText[i];
        span.style.animationDelay = delay + 'ms'
        loaderTextWrapper.append(span)
    }

    setTimeout(() => {
        const loader = document.querySelector('.loader');
        loader.remove();
    }, 3000);
}

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
        })
    })

    document.addEventListener('click', (e) => {
        if (!mobileMenu.contains(e.target) && !btnHamburger.contains(e.target)) {
            mobileMenu.style.left = '-280px'
        }
    })
}

const about =document.querySelector('#events-section');
const personnel =document.querySelector('#personnel-section');
const seats =document.querySelector('#seats-section');
const tickets =document.querySelector('#tickets-section');
const schedule =document.querySelector('#schedule-section');
const weather =document.querySelector('#weather-section');

links.forEach((link) => {
    link.addEventListener('click', (e) => {
        const pageSection = document.querySelector(`#${e.target.dataset.link}`);
        const pageY = pageSection.offsetTop - 100
        document.documentElement.scrollTop = pageY
    })
})

const btnAbout = document.querySelector('.btn-events');
btnAbout.addEventListener('click', () => {
    document.documentElement.scrollTop = about.offsetTop - 100
})
const btnTickets = document.querySelectorAll('.btn-tickets');
btnTickets.forEach((btn) => {
    btn.addEventListener('click', () => {
        document.documentElement.scrollTop = tickets.offsetTop - 100
    })
})
const scrollTop = document.querySelector('.scroll-top');
scrollTop.addEventListener('click', () => {
    document.documentElement.scrollTop = 0
})

window.addEventListener('click', (e) => {
    if (this.document.documentElement.scrollTop >= 300) {
        scrollTop.style.display = 'flex'
    } else {
        scrollTop.style.display = 'none'
    }

    const aboutY = about.offsetTop - 100;
    const personnelY = personnel.offsetTop - 100;
    const seatsY = seats.offsetTop - 100;
    const ticketsY = tickets.offsetTop - 100;
    const scheduleY = schedule.offsetTop - 100;
    const weatherY = weather.offsetTop - 100;

    let window_Y = Math.floor(window.scrollY);

    if (
        window_Y >= aboutY &&
        window_Y < personnelY
    ) {
        document.querySelector('.link-events').classList.add('active')
    } else {
        document.querySelector('.link-events').classList.remove('active')
    }
    if (
        window_Y >= personnelY &&
        window_Y < seatsY
    ) {
        document.querySelector('.link-personnel').classList.add('active')
    } else {
        document.querySelector('.link-personnel').classList.remove('active')
    }
    if (
        window_Y >= seatsY &&
        window_Y < ticketsY
    ) {
        document.querySelector('.link-seats').classList.add('active')
    } else {
        document.querySelector('.link-seats').classList.remove('active')
    }
    if (
        window_Y >= scheduleY &&
        window_Y < weatherY
    ) {
        document.querySelector('.link-schedule').classList.add('active')
    } else {
        document.querySelector('.link-schedule').classList.remove('active')
    }
    if (
        window_Y >= weatherY
    ) {
        document.querySelector('.link-weather').classList.add('active')
    } else {
        document.querySelector('.link-weather').classList.remove('active')
    }
})

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