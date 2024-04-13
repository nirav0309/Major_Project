/*-----------Blink Text js--------------------*/

function blinktext() {
  async function init() {
    const node = document.querySelector("#type-text");

    await sleep(1000);
    node.innerText = "";
    await node.type("in this season, ");

    while (true) {
      await node.type("Find the best!");
      await sleep(2000);
      await node.delete("Find the best!");
      await node.type("Thank You!");
      await sleep(2000);
      await node.delete("Thank You!");
    }
  }

  const sleep = (time) => new Promise((resolve) => setTimeout(resolve, time));

  class TypeAsync extends HTMLSpanElement {
    get typeInterval() {
      const randomMs = 100 * Math.random();
      return randomMs < 50 ? 10 : randomMs;
    }

    async type(text) {
      for (let character of text) {
        this.innerText += character;
        await sleep(this.typeInterval);
      }
    }

    async delete(text) {
      for (let character of text) {
        this.innerText = this.innerText.slice(0, this.innerText.length - 1);
        await sleep(this.typeInterval);
      }
    }
  }

  customElements.define("type-async", TypeAsync, { extends: "span" });

  init();
}
blinktext();

/*--------------------effects-------------------*/
function effect() {
  const header = document.querySelector("header");

  window.addEventListener("scroll", function () {
    header.classList.toggle("sticky", window.scrollY > 0);
  });

  let menu = document.querySelector("#menu-icon");
  let navbar = document.querySelector(".navbar");

  menu.onclick = () => {
    menu.classList.toggle("bx-x");
    navbar.classList.toggle("open");
  };

  window.onscroll = () => {
    menu.classList.remove("bx-x");
    navbar.classList.remove("open");
  };

  const sr = ScrollReveal({
    distance: "60px",
    duration: 2500,
    delay: 400,
    reset: true,
  });

  sr.reveal(".home-text", { delay: 300, origin: "top" });
  sr.reveal(".home-img", { delay: 200, origin: "top" });
  sr.reveal(".heading, .hero-content", { delay: 200, origin: "top" });
  sr.reveal(".hero-image", { delay: 200, origin: "bottom" });
  sr.reveal(".center, .team-content, .box.img", { delay: 200, origin: "top" });
  sr.reveal(".contact-container", { delay: 200, origin: "top" });
  sr.reveal(".feature, .product, .contact", { delay: 200, origin: "top" });
  sr.reveal(".container", { delay: 200, origin: "top" });
  sr.reveal(".musthave__grid", { delay: 200, origin: "top" });
  sr.reveal(".sometext1", { delay: 200, origin: "top" });
}
effect();

/*--------------scramble effect js for about page text------------------*/
// function TextScramble(){
//     class TextScramble {
//         constructor(el) {
//           this.el = el
//           this.chars = '!<>-_\\/[]{}—=+*^?#________'
//           this.update = this.update.bind(this)
//         }
//         setText(newText) {
//           const oldText = this.el.innerText
//           const length = Math.max(oldText.length, newText.length)
//           const promise = new Promise((resolve) => this.resolve = resolve)
//           this.queue = []
//           for (let i = 0; i < length; i++) {
//             const from = oldText[i] || ''
//             const to = newText[i] || ''
//             const start = Math.floor(Math.random() * 40)
//             const end = start + Math.floor(Math.random() * 40)
//             this.queue.push({ from, to, start, end })
//           }
//           cancelAnimationFrame(this.frameRequest)
//           this.frame = 0
//           this.update()
//           return promise
//         }
//         update() {
//           let output = ''
//           let complete = 0
//           for (let i = 0, n = this.queue.length; i < n; i++) {
//             let { from, to, start, end, char } = this.queue[i]
//             if (this.frame >= end) {
//               complete++
//               output += to
//             } else if (this.frame >= start) {
//               if (!char || Math.random() < 0.28) {
//                 char = this.randomChar()
//                 this.queue[i].char = char
//               }
//               output += `<span class="dud">${char}</span>`
//             } else {
//               output += from
//             }
//           }
//           this.el.innerHTML = output
//           if (complete === this.queue.length) {
//             this.resolve()
//           } else {
//             this.frameRequest = requestAnimationFrame(this.update)
//             this.frame++
//           }
//         }
//         randomChar() {
//           return this.chars[Math.floor(Math.random() * this.chars.length)]
//         }
//       }

//     const phrases = [
//         'welcome,',
//         'to',
//         'our ',
//         'website',
//         // 'that there\'s a difference',
//         // 'between knowing the path',
//         // 'and walking the path'
//       ]

//       const el = document.querySelector('.text')
//       const fx = new TextScramble(el)

//       let counter = 0
//       const next = () => {
//         fx.setText(phrases[counter]).then(() => {
//           setTimeout(next, 800)
//         })
//         counter = (counter + 1) % phrases.length
//       }

//       next()
// }
// TextScramble()

/*------------------------login & signup js-------------------------------------------*/
function loginsignup() {
  const forms = document.querySelector(".forms"),
    pwShowHide = document.querySelectorAll(".eye-icon"),
    links = document.querySelectorAll(".link");
  pwShowHide.forEach((eyeIcon) => {
    eyeIcon.addEventListener("click", () => {
      let pwFields =
        eyeIcon.parentElement.parentElement.querySelectorAll(".password");

      pwFields.forEach((password) => {
        if (password.type === "password") {
          password.type = "text";
          eyeIcon.classList.replace("bx-hide", "bx-show");
          return;
        }
        password.type = "password";
        eyeIcon.classList.replace("bx-show", "bx-hide");
      });
    });
  });

  links.forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault();
      forms.classList.toggle("show-signup");
    });
  });
}
loginsignup();

/*-------------------onclick event function for shop page-------------*/
function clickevent() {
  var button = document.getElementById("mybtn1");

  button.addEventListener("click", function () {
    window.location.href = "men.php";
  });
  var button = document.getElementById("mybtn2");

  button.addEventListener("click", function () {
    window.location.href = "women.php";
  });
  var button = document.getElementById("mybtn3");

  button.addEventListener("click", function () {
    window.location.href = "men.php";
  });
  var button = document.getElementById("mybtn4");

  button.addEventListener("click", function () {
    window.location.href = "kid.php";
  });
  var button = document.getElementById("mybtn5");

  button.addEventListener("click", function () {
    window.location.href = "women.php";
  });
}
clickevent();

/*--------------slider for shop--------------*/
function imageslider() {
  const wrapper = document.querySelector(".wrapper");
  const carousel = document.querySelector(".carousel");
  const firstCardWidth = carousel.querySelector(".card").offsetWidth;
  const arrowBtns = document.querySelectorAll(".wrapper i");
  const carouselChildrens = [...carousel.children];

  let isDragging = false,
    isAutoPlay = true,
    startX,
    startScrollLeft,
    timeoutId;

  let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

  carouselChildrens
    .slice(-cardPerView)
    .reverse()
    .forEach((card) => {
      carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
    });

  carouselChildrens.slice(0, cardPerView).forEach((card) => {
    carousel.insertAdjacentHTML("beforeend", card.outerHTML);
  });

  carousel.classList.add("no-transition");
  carousel.scrollLeft = carousel.offsetWidth;
  carousel.classList.remove("no-transition");

  arrowBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      carousel.scrollLeft +=
        btn.id == "left" ? -firstCardWidth : firstCardWidth;
    });
  });

  const dragStart = (e) => {
    isDragging = true;
    carousel.classList.add("dragging");

    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft;
  };

  const dragging = (e) => {
    if (!isDragging) return;

    carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
  };

  const dragStop = () => {
    isDragging = false;
    carousel.classList.remove("dragging");
  };

  const infiniteScroll = () => {
    if (carousel.scrollLeft === 0) {
      carousel.classList.add("no-transition");
      carousel.scrollLeft = carousel.scrollWidth - 2 * carousel.offsetWidth;
      carousel.classList.remove("no-transition");
    } else if (
      Math.ceil(carousel.scrollLeft) ===
      carousel.scrollWidth - carousel.offsetWidth
    ) {
      carousel.classList.add("no-transition");
      carousel.scrollLeft = carousel.offsetWidth;
      carousel.classList.remove("no-transition");
    }

    clearTimeout(timeoutId);
    if (!wrapper.matches(":hover")) autoPlay();
  };

  const autoPlay = () => {
    if (window.innerWidth < 800 || !isAutoPlay) return;

    timeoutId = setTimeout(() => (carousel.scrollLeft += firstCardWidth), 2500);
  };
  autoPlay();

  carousel.addEventListener("mousedown", dragStart);
  carousel.addEventListener("mousemove", dragging);
  document.addEventListener("mouseup", dragStop);
  carousel.addEventListener("scroll", infiniteScroll);
  wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
  wrapper.addEventListener("mouseleave", autoPlay);
}
imageslider();
