// スクロールしたらheaderの背景が黒くなる
window.addEventListener("scroll", function () {
  const headerInner = document.querySelector(".header");
  const headerContainer = document.querySelector(".header__container");
    const headerLogo = document.querySelector(".header__logoLink");
  const headerHamburgerLine = document.querySelectorAll(
    ".header__hamburgerLine"
  );
  const headerlistLink = document.querySelectorAll(".header__listLink");
  if (window.scrollY > 0) {

    headerInner.classList.add("header__scrollBg");
    headerLogo.classList.add("header__scrollLogo");

    headerContainer.classList.add("header__scrollContainer");
    for (let i = 0; i < headerlistLink.length; i++) {
      headerlistLink[i].classList.add("header__scrollFont");

    }
    for (let i = 0; i < headerHamburgerLine.length; i++) {
      headerHamburgerLine[i].classList.add("header__scrollLogo");
    }
  } else {
    headerInner.classList.remove("header__scrollBg");
    headerLogo.classList.remove("header__scrollLogo");

           headerContainer.classList.remove("header__scrollContainer");
    for (let i = 0; i < headerlistLink.length; i++) {
      headerlistLink[i].classList.remove("header__scrollFont");
    }
    for (let i = 0; i < headerHamburgerLine.length; i++) {
      headerHamburgerLine[i].classList.remove("header__scrollLogo");
    }
  }
});

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

// 現在のページに基づいて、アクティブなリンクを設定する

  // 現在のページのURLを取得
        const currentPage = window.location.pathname.split("/").pop();
        
        // すべてのナビリンクを取得
        const navLinks = document.querySelectorAll('.nav-link');
          // console.log(navLinks);

        // 各リンクをチェックして、現在のページと一致するものにactiveクラスを追加
        navLinks.forEach(link => {
            const linkPage = link.getAttribute('href');
            if (linkPage === currentPage) {
                link.classList.add('active');
            }
        });

//くるりと回転
let kururi = document.querySelectorAll(".topWorks__item");
window.addEventListener("scroll", () => {
  for (let i = 0; i < kururi.length; i++) {
    const rect = kururi[i].getBoundingClientRect().top;
    const scroll = window.pageYOffset || document.documentElement.scrollTop;
    const offset = rect + scroll;
    const windowHeight = window.innerHeight; // 現在のブラウザの高さ
    if (scroll > offset - windowHeight + 200) {
      kururi[i].classList.add("rotate-scale-down-ver");
    }
  }
});

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
  if (scroll > 200) {

    for (let i = 0; i < fadeInTarget2.length; i++) {
      fadeInTarget2[i].classList.add("scroll-in");
    }
    window.removeEventListener("scroll", checkFadeIn); // 一度だけ実行
  }
}
window.addEventListener("scroll", checkFadeIn);

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
        }, 30 * i);
      });
      observer.unobserve(textTyping);

      if (!textTyping.classList.contains('height-set')) {
        var textHeight = textTyping.scrollHeight;
        textTyping.style.height = textHeight + "px";
        textTyping.classList.add('height-set');
      }

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


//制作サイトの詳細画面で、テキストが無かった場合は表示をしない
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".singleAllWorks__item").forEach((item) => {
        const textElement = item.querySelector(".allWorks__text");

        if (textElement && textElement.textContent.trim() === "") {
            item.style.display = "none";
        }
    });
});



//問い合わせ画面のステップフロー

if (window.location.pathname.includes("contact")) {

let stepFlowActive = "contact__stepFlowActive";
let element = document.getElementsByClassName(stepFlowActive);

if (element) {
  const submitBtn = document.querySelector(".contact__item--button");


  submitBtn.addEventListener("click", () => {
   setTimeout(() => {
      const confirmElement = document.getElementById("wpcf7cpcnf");
      if (confirmElement) {
        const confirm = document.querySelector(".confirm");
        const confirm2 = document.querySelector(".confirm2");
        const confirm3 = document.querySelector(".confirm3");

        const toggleConfirmClasses = (action) => {
          confirm2.classList[action]("contact__stepFlowActive");
          confirm.classList[action]("contact__stepCompleted");
        };

        toggleConfirmClasses("add");

        const toggleConfirmClasses2= (action) => {
          confirm.classList[action]("contact__stepFlowActive");
        };

        toggleConfirmClasses2("remove");


        const editBtn = document.querySelector(".wpcf7cp-cfm-edit-btn");
        if (editBtn) {
          editBtn.addEventListener("click", () => {
              confirm.classList.add("contact__stepFlowActive");
            confirm2.classList.remove("contact__stepFlowActive");

        });
        }

        const sendBtn = document.querySelector(".wpcf7cp-cfm-submit-btn");
        if (sendBtn) {
          sendBtn.addEventListener("click", () => {
            confirm3.classList.add("contact__stepFlowActive");
            confirm2.classList.remove("contact__stepFlowActive");
            confirm2.classList.add("contact__stepCompleted");

          });
        }
      }
   }, 1000); 
  });
}

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
        const lodingContainer3 = document.querySelector(".loding__text");

        if (sessionStorage.getItem("access")) {
          // 2回目以降アクセス時の処理
          // 最初から必要なクラスを持たせる
          if (lodingContainer) {
            lodingContainer.style.display = "none";
          }
        } else {
          // 初回アクセス時の処理
          sessionStorage.setItem("access", "true");
          // 初回アクセス時に .showLoading クラスを追加
          if (lodingContainer) {
            lodingContainer.classList.add("showLoading");
          }

          // クラスを削除する処理
          const removeClasses = (delay) => {
            setTimeout(() => {
              // if (lodingContainer)
              //   lodingContainer.classList.remove("loding__container");
              if (lodingContainer2)
                lodingContainer2.classList.remove("loding__box");
              if (lodingContainer3)
                lodingContainer3.classList.remove(
                  "loding__text--disyplayBlock"
                );
            }, delay);
          };

          // クラスを追加する処理
          const addClass = (delay) => {
            setTimeout(() => {
              if (lodingContainer)
                lodingContainer.classList.add("showLoadingAnime");
            }, delay);
          };

          // クラスを追加する処理
          const addClass2 = (delay) => {
            setTimeout(() => {
              if (lodingContainer)
                lodingContainer.classList.add(
                  "loding__container--disyplayNone"
                );
            }, delay);
          };

          addClass(2000);
          addClass2(3000);
          removeClasses(3000);
        }
      };

      webStorage();
    });
  }
}

new Main();

