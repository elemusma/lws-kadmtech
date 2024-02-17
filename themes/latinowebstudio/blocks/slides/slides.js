// START OF FADE IN ANIMATIONS
isInViewport = function (elem) {
    distance = elem.getBoundingClientRect();
    return (
        distance.top >= 0 &&
        distance.left >= 0 &&
        distance.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        distance.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
};

// START OF FADE IN ANIMATIONS
isAtTop = function (elem) {
    bounding = elem.getBoundingClientRect();
    return (
        bounding.top <= 200
    );
};
isNotAtTop = function (elem) {
    bounding = elem.getBoundingClientRect();
    return (
        bounding.top >= 200
    );
};

isActive = function (elem) {
    bounding = elem.getBoundingClientRect();
    return (
        bounding.bottom <= 200
    );
};

isAnchorAtTop = function (elem) {
    bounding = elem.getBoundingClientRect();
    return (
        bounding.top <= 200
    );
};
isAnchorNotAtTop = function (elem) {
    bounding = elem.getBoundingClientRect();
    return (
        bounding.top >= 200
    );
};

isAnchorActive = function (elem) {
    bounding = elem.getBoundingClientRect();
    return (
        bounding.bottom <= 200
    );
};

let scrollLength = window.scrollY;
window.addEventListener('scroll', function () {

    // console.log('hello');
    // console.log(isAtTop(document.querySelector('#section-our-land')));
    // console.log(window.scrollY);

    // fadeRight animation
    let fullHeight = document.querySelectorAll('.full-height');
    for (i = 0; i < fullHeight.length; i++) {

        // console.log(fullHeight[0]);

        id = fullHeight[i].getAttribute('id');
        // console.log(id);
        // console.log('ID above');
        anchor = document.querySelector('#anchor-' + id);
        // console.log(anchor);
        // console.log('anchor above');
        // console.log(fullHeight[i]);

        // if (this.window.scrollY <= 110) {
        //     fullHeight[0].classList.add('active');
        // }

        if (isAtTop(fullHeight[i])) {
            fullHeight[i].classList.add('active');
            // console.log(fullHeight[i]);
        }

        // console.log(fullHeight[i]);
        // console.log('fullHeight[i] above');

        if (isNotAtTop(fullHeight[i])) {
            fullHeight[i].classList.remove('active');
        }
        if (isActive(fullHeight[i])) {
            fullHeight[i].classList.remove('active');
        }

        if (isAnchorAtTop(fullHeight[i])) {
            anchor.classList.add('active');
        }
        if (isAnchorNotAtTop(fullHeight[i])) {
            anchor.classList.remove('active');
        }
        if (isAnchorActive(fullHeight[i])) {
            anchor.classList.remove('active');
        }
    }

}, false);
// END OF FADE IN ANIMATIONS