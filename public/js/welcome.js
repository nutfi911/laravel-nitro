'use strict';

const header = document.querySelector('.header');
const btnScrollTo = document.querySelector('.btn--scroll-to');
const section1 = document.querySelector("#section--1");

//Smooth scrolling to section 1
btnScrollTo.addEventListener('click', (e) => {
    e.preventDefault();

    const s1coords = section1.getBoundingClientRect();

    section1.scrollIntoView({ behavior: "smooth" });
});

//Event Delegation
document.querySelector('.nav__links').addEventListener('click', function (e) {
    e.preventDefault();

    //Matching strategy
    if (e.target.classList.contains('nav__link')) {
        const id = e.target.getAttribute('href');
        document.querySelector(id).scrollIntoView({ behavior: "smooth" });
    }
});

const h1 = document.querySelector('h1');

//Tabbed component
const tabs = document.querySelectorAll('.operations__tab');
const tabsContainer = document.querySelector('.operations__tab-container');
const tabsContent = document.querySelectorAll('.operations__content');

tabsContainer.addEventListener('click', function (e) {
    e.preventDefault();

    const clicked = e.target.closest('.operations__tab');

    if (!clicked) return;

    tabs.forEach((t) => {
        t.classList.remove('operations__tab--active');
    })
    clicked.classList.add('operations__tab--active');

    tabsContent.forEach((tc) => {
        tc.classList.remove('operations__content--active');
    })

    document.querySelector(`.operations__content--${clicked.dataset.tab}`).classList.add('operations__content--active');
});


const handleHover = function (e) {
    if (e.target.classList.contains('nav__link')) {
        const link = e.target;
        const siblings = link.closest('.nav').querySelectorAll('.nav__link');
        const logo = link.closest('.nav').querySelector('img');

        siblings.forEach(s => {
            if (s !== link) {
                s.style.opacity = this;
            }
        });
        logo.style.opacity = this;
    }
}

//Menu fade animation
const nav = document.querySelector('.nav');
nav.addEventListener('mouseover', handleHover.bind(0.5));

nav.addEventListener('mouseout', handleHover.bind(1));


const stickyNav = function (entries) {
    const [entry] = entries;
    if (!entry.isIntersecting) {
        nav.classList.add('sticky');
    } else {
        nav.classList.remove('sticky');
    }
};

const headerObserver = new IntersectionObserver(stickyNav, { root: null, threshold: 0, rootMargin: `-${nav.getBoundingClientRect().height}px`, });

headerObserver.observe(header);


//Revealing elements on scroll
//.classList.remove('section--hidden')

const allSections = document.querySelectorAll('.section');

const smoothScrolling = function (entries, observer) {
    const [entry] = entries;

    if (!entry.isIntersecting) return;

    entry.target.classList.remove('section--hidden');

    observer.unobserve(entry.target);

}
const sectionObserver = new IntersectionObserver(smoothScrolling, { root: null, threshold: 0.15 });

allSections.forEach(function (section) {
    section.classList.add('section--hidden');
    sectionObserver.observe(section);
})


//Lazy image loading
const images = document.querySelectorAll('.features__img');

const lazyLoading = function (entries, observer) {
    const [entry] = entries;

    if (!entry.isIntersecting) return;

    entry.target.setAttribute('src', entry.target.dataset.src);
    // entry.target.classList.remove('lazy-img');

    entry.target.addEventListener('load', function () {
        console.log('loaded');
        entry.target.classList.remove('lazy-img');
    });

    observer.unobserve(entry.target);
};

const imageObserver = new IntersectionObserver(lazyLoading, {
    root: null,
    threshold: 0.8,
    rootMargin: '10px', // 200 pxbefore reaching start loading
});

images.forEach(function (image) {
    imageObserver.observe(image);
})

const slides = document.querySelectorAll('.slide');
const btnLeft = document.querySelector('.slider__btn--left');
const btnRight = document.querySelector('.slider__btn--right');
const dotContainer = document.querySelector('.dots');

let currentSlide = 0;
const maxSlide = slides.length;

const createDots = function () {
    slides.forEach((_, i) => {
        dotContainer.insertAdjacentHTML('beforeend',
            `<button class="dots__dot" data-slide="${i}"></button>`
        );
    });
};
createDots();

const activateDot = function (slide) {
    document.querySelectorAll('.dots__dot').forEach(dot => {
        dot.classList.remove('dots__dot--active');
    });

    document.querySelector(`.dots__dot[data-slide="${slide}"]`).classList.add('dots__dot--active');
}
activateDot(0);

const goToSlide = function (slide) {
    slides.forEach((s, i) => {
        (s.style.transform = `translate(${100 * (i - slide)}%)`);
    });

};

goToSlide(0);

const nextSlide = function () {
    if (currentSlide === maxSlide - 1) {
        currentSlide = 0;
    } else currentSlide++;

    goToSlide(currentSlide);
    activateDot(currentSlide);
}

setInterval(nextSlide, 10000);

const previousSlide = function () {
    if (currentSlide === 0) {
        currentSlide = maxSlide - 1;
    } else currentSlide--;

    goToSlide(currentSlide);
    activateDot(currentSlide);
}

btnRight.addEventListener('click', nextSlide);
btnLeft.addEventListener('click', previousSlide);

document.addEventListener('keydown', function (e) {
    if (e.key === 'ArrowLeft')
        previousSlide();
    else if (e.key === 'ArrowRight')
        nextSlide();
});

dotContainer.addEventListener('click', function (e) {
    if (e.target.classList.contains('dots__dot')) {
        const { slide } = e.target.dataset;
        goToSlide(slide);
        activateDot(slide);
    }
});