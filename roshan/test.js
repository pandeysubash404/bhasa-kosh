
"use strict";

// Page cursors
document.body.addEventListener("mousemove", function (event) {
    const cursors = document.querySelectorAll(".cursor");
    cursors.forEach(function (cursor) {
        cursor.style.left = event.clientX + "px";
        cursor.style.top = event.clientY + "px";
    });
});

const cursor1 = document.getElementById("cursor");
const cursor2 = document.getElementById("cursor2");
const cursor3 = document.getElementById("cursor3");

function addHover() {
    cursor2.classList.add("hover");
    cursor3.classList.add("hover");
}

function removeHover() {
    cursor2.classList.remove("hover");
    cursor3.classList.remove("hover");
}

removeHover();

const hoverTargets = document.querySelectorAll(".hover-target");

hoverTargets.forEach(function (target) {
    target.addEventListener("mouseover", addHover);
    target.addEventListener("mouseout", removeHover);
});

// Navigation
const toggleNav = function () {
    let body = document.body;
    let menu = document.querySelector('.menu-icon');
    let navListItems = document.querySelectorAll('.nav__list-item');

    function toggleClass(element, stringClass) {
        if (element.classList.contains(stringClass)) {
            element.classList.remove(stringClass);
        } else {
            element.classList.add(stringClass);
        }
    }

    menu.addEventListener('click', function () {
        toggleClass(body, 'nav-active');
    });
};

toggleNav();

// Switch light/dark
document.getElementById("switch").addEventListener('click', function () {
    const body = document.body;
    const switchButton = document.getElementById("switch");

    if (body.classList.contains("light")) {
        body.classList.remove("light");
        switchButton.classList.remove("switched");
    } else {
        body.classList.add("light");
        switchButton.classList.add("switched");
    }
});

function switchIcons() {
    var one = document.getElementById('one');
    var two = document.getElementById('two');

    // Swap the src attribute of the two icons
    var tempSrc = one.src;
    one.src = two.src;
    two.src = tempSrc;

    // Show icon1 and hide icon2
    one.style.display = 'block';
    two.style.display = 'none';
}

