//スムーススクロールについてはfooter.phpに記述

//ハンバーガ―メニュー
const drawerMenu = document.querySelector(".header__hamburgerBox");
const navi = document.querySelector(".header__hamburgerNav");

drawerMenu.addEventListener("click", function () {
  drawerMenu.classList.toggle("active");
  navi.classList.toggle("active");
});

navi.addEventListener("click", function () {
  drawerMenu.classList.toggle("active");
  navi.classList.toggle("active");
});

// Splide
document.addEventListener("DOMContentLoaded", function () {
  let splideElement = document.querySelector(".splide");
  if (splideElement) {
    new Splide(splideElement, {
      type: "loop",
      perPage: 1,
      autoplay: true,
      interval: 5000,
      pauseOnHover: false,
      arrows: false,
    }).mount();
  }
});

//テキストタイピング
function TextTypingAnime(entries, observer) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      var textTyping = entry.target;
      var thisChild = textTyping.children;
      Array.prototype.forEach.call(thisChild, function (span, i) {
        setTimeout(function () {
          span.style.display = "inline";
          span.style.opacity = 1;
        }, 100 * i);
      });
      observer.unobserve(textTyping); // アニメーション後に監視を停止
    }
  });
}

window.onload = function () {
  var textTypings = document.querySelectorAll(".TextTyping");
  textTypings.forEach(function (textTyping) {
    var html = textTyping.innerHTML;
    var newHtml = "";

    var matches = html.match(/<[^>]*>|[^<]+/g);
    matches.forEach(function (part) {
      if (part.startsWith("<")) {
        newHtml += part;
      } else {
        part.split("").forEach(function (char) {
          if (char !== " ") {
            newHtml += '<span style="display:none;">' + char + "</span>";
          } else {
            newHtml += char;
          }
        });
      }
    });

    textTyping.innerHTML = newHtml;
  });

  var observer = new IntersectionObserver(TextTypingAnime, { threshold: 0.1 });
  textTypings.forEach(function (textTyping) {
    observer.observe(textTyping);
  });
};

//フェードイン
let fadeInTarget = document.querySelectorAll(".fade-in");
window.addEventListener("scroll", () => {
  for (let i = 0; i < fadeInTarget.length; i++) {
    const rect = fadeInTarget[i].getBoundingClientRect().top;
    const scroll = window.pageYOffset || document.documentElement.scrollTop;
    const offset = rect + scroll;
    const windowHeight = window.innerHeight; // 現在のブラウザの高さ
    if (scroll > offset - windowHeight + 200) {
      fadeInTarget[i].classList.add("scroll-in");
    }
  }
});

let fadeInTarget2 = document.querySelectorAll(".fade-in2");

function checkFadeIn() {
  let scroll = window.pageYOffset || document.documentElement.scrollTop;
  if (scroll > 1000) {
    // ～pxスクロールしたら
    for (let i = 0; i < fadeInTarget2.length; i++) {
      fadeInTarget2[i].classList.add("scroll-in");
    }
    window.removeEventListener("scroll", checkFadeIn); // 一度だけ実行
  }
}

window.addEventListener("scroll", checkFadeIn);

//枠線がスーっと伸びる
let lineActiveTarget = document.querySelectorAll(".works__extend");
window.addEventListener("scroll", () => {
  for (let i = 0; i < lineActiveTarget.length; i++) {
    const rect = lineActiveTarget[i].getBoundingClientRect().top;
    const scroll = window.pageYOffset || document.documentElement.scrollTop;
    const offset = rect + scroll;
    const windowHeight = window.innerHeight;
    if (scroll > offset - windowHeight - 200) {
      lineActiveTarget[i].classList.add("lineActive");
    }
  }
});

let lineActiveTarget2 = document.querySelectorAll(".works__extend2");
window.addEventListener("scroll", () => {
  for (let i = 0; i < lineActiveTarget2.length; i++) {
    const rect = lineActiveTarget2[i].getBoundingClientRect().top;
    const scroll = window.pageYOffset || document.documentElement.scrollTop;
    const offset = rect + scroll;
    const windowHeight = window.innerHeight;
    if (scroll > offset - windowHeight - 200) {
      lineActiveTarget2[i].classList.add("line2Active");
    }
  }
});

let lineActiveTarget3 = document.querySelectorAll(".works__extend3");
window.addEventListener("scroll", () => {
  for (let i = 0; i < lineActiveTarget3.length; i++) {
    const rect = lineActiveTarget3[i].getBoundingClientRect().top;
    const scroll = window.pageYOffset || document.documentElement.scrollTop;
    const offset = rect + scroll;
    const windowHeight = window.innerHeight;
    if (scroll > offset - windowHeight - 200) {
      lineActiveTarget3[i].classList.add("line3Active");
    }
  }
});

let lineActiveTarget4 = document.querySelectorAll(".works__extend4");
window.addEventListener("scroll", () => {
  for (let i = 0; i < lineActiveTarget4.length; i++) {
    const rect = lineActiveTarget4[i].getBoundingClientRect().top;
    const scroll = window.pageYOffset || document.documentElement.scrollTop;
    const offset = rect + scroll;
    const windowHeight = window.innerHeight;
    if (scroll > offset - windowHeight - 200) {
      lineActiveTarget4[i].classList.add("line4Active");
    }
  }
});

// お問い合わせページのプログレス画像変更
let contactId = "contact-exclusive";
let element = document.getElementById(contactId);

if (element) {
  const submitBtn = document.querySelector(".contact-exclusive__item--button");

  submitBtn.addEventListener("click", () => {
    setTimeout(() => {
      const confirmElement = document.getElementById("wpcf7cpcnf");
      if (confirmElement) {
        const confirmImgWrapper = document.querySelector(".confirmImgWrapper");
        const toggleConfirmClasses = (action) => {
          confirmImgWrapper.classList[action]("confirm");
          confirmImgWrapper.classList[action]("confirm2");
        };

        toggleConfirmClasses("add");

        const editBtn = document.querySelector(".wpcf7cp-cfm-edit-btn");
        if (editBtn) {
          editBtn.addEventListener("click", () =>
            toggleConfirmClasses("remove")
          );
        }

        const sendBtn = document.querySelector(".wpcf7cp-cfm-submit-btn");
        if (sendBtn) {
          sendBtn.addEventListener("click", () => {
            toggleConfirmClasses("remove");
            confirmImgWrapper.classList.add("confirm3");
          });
        }
      }
    }, 2000); // 2秒遅延させる
  });
}

//ローディングアニメーション

class Main {
  constructor() {
    this._loading();
  }

  _loading() {
    document.addEventListener("DOMContentLoaded", () => {
      const webStorage = () => {
        const lodingContainer = document.querySelector(".loding__container");
        const lodingContainer2 = document.querySelector(".loding__box");
        const lodingContainer3 = document.querySelector(".loding__text--on");

        if (sessionStorage.getItem("access")) {
          // 2回目以降アクセス時の処理
          // 最初から必要なクラスを持たせる
          if (lodingContainer) {
            lodingContainer.style.display = "none";
          }
        } else {
          // 初回アクセス時の処理
          sessionStorage.setItem("access", "true");
          // 初回アクセス時に .show-loading クラスを追加
          if (lodingContainer) {
            lodingContainer.classList.add("show-loading");
          }

          // クラスを削除する処理
          const removeClasses = (delay) => {
            setTimeout(() => {
              if (lodingContainer)
                lodingContainer.classList.remove("loding__container");
              if (lodingContainer2)
                lodingContainer2.classList.remove("loding__box");
              if (lodingContainer3)
                lodingContainer3.classList.remove("loding__text--on");
            }, delay);
          };

          removeClasses(3000);
          addClass(2000);
        }
      };

      webStorage();
    });
  }
}

new Main();
