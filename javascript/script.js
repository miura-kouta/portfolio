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
const navLinks = document.querySelectorAll(".nav-link");
// console.log(navLinks);

// 各リンクをチェックして、現在のページと一致するものにactiveクラスを追加
navLinks.forEach((link) => {
  const linkPage = link.getAttribute("href");
  if (linkPage === currentPage) {
    link.classList.add("active");
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

// //テキストタイピングアニメーション
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

      if (!textTyping.classList.contains("height-set")) {
        var textHeight = textTyping.scrollHeight;
        textTyping.style.height = textHeight + "px";
        textTyping.classList.add("height-set");
      }
    }
  });
}
//
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

          const toggleConfirmClasses2 = (action) => {
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

//オープニングアニメーション + 文字が上から落ちてくるアニメーション
function _loading() {
  const webStorage = () => {
    const lodingContainer = document.querySelector(".loding__container");
    const lodingContainer2 = document.querySelector(".loding__box");
    const lodingContainer3 = document.querySelector(".loding__text");

    const scrollDownContainer = document.querySelector(
      ".firstView__scrollDownWrap"
    );

    if (sessionStorage.getItem("access")) {
      // 2回目以降アクセス時の処理
      //文字が上から降っていくアニメーション

      const visibles = document.querySelectorAll(".visible");

      visibles.forEach((el) => {
        const text = el.textContent;
        const newHTML = [...text]
          .map((char) => {
            const displayChar = char === " " ? "&nbsp;" : char;
            return `<span class="visible-up">${displayChar}</span>`;
          })
          .join("");
        el.innerHTML = newHTML;
      });

      function animateVisibleElement(el) {
        return new Promise((resolve) => {
          const spans = el.querySelectorAll(".visible-up");

          spans.forEach((span, i) => {
            setTimeout(() => {
              span.classList.add("visible-in");

              if (spans[0] || spans[5] || spans[11]) {
                spans[0].classList.add("color--pink");
                spans[5].classList.add("color--pink");
                spans[11].classList.add("color--pink");
              }

              if (i === spans.length - 1) {
                setTimeout(resolve, 50);
              }
            }, i * 50);
          });
        });
      }

      async function visibleEvent() {
        for (let i = 0; i < visibles.length; i++) {
          await animateVisibleElement(visibles[i]);
        }
      }
      visibleEvent();

      if (lodingContainer) {
        lodingContainer.style.display = "none"; // ローディングを非表示
      }

      const addClass4 = (delay) => {
        setTimeout(() => {
          if (lodingContainer) scrollDownContainer.classList.add("arrow");
        }, delay);
      };
      // addClass4(2300);
      addClass4(1400);
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
          if (lodingContainer)
            lodingContainer.classList.remove("loding__container");
          if (lodingContainer2)
            lodingContainer2.classList.remove("loding__box");
          if (lodingContainer3)
            lodingContainer3.classList.remove("loding__text--disyplayBlock");
        }, delay);
      };

      const addClass = (delay) => {
        setTimeout(() => {
          if (lodingContainer)
            lodingContainer.classList.add("showLoadingAnime");
        }, delay);
      };

      const addClass2 = (delay) => {
        setTimeout(() => {
          if (lodingContainer)
            lodingContainer.classList.add("loding__container--disyplayNone");
        }, delay);
      };

      const addClass3 = (delay) => {
        setTimeout(() => {
          if (lodingContainer) scrollDownContainer.classList.add("arrow");
        }, delay);
      };

      addClass(2000);
      addClass2(3000);
      addClass3(3400);
      removeClasses(3000);

      //文字が上から降っていくアニメーション
      const visibles = document.querySelectorAll(".visible");

      visibles.forEach((el) => {
        const text = el.textContent;
        const newHTML = [...text]
          .map((char) => {
            const displayChar = char === " " ? "&nbsp;" : char;
            return `<span class="visible-up">${displayChar}</span>`;
          })
          .join("");
        el.innerHTML = newHTML;
      });

      function animateVisibleElement(el) {
        return new Promise((resolve) => {
          const spans = el.querySelectorAll(".visible-up");

          spans.forEach((span, i) => {
            setTimeout(() => {
              span.classList.add("visible-in");

              if (spans[2] || spans[7] || spans[13] || spans[16] || spans[19]) {
                spans[2].classList.add("color--pink");
                spans[7].classList.add("color--pink");
                spans[13].classList.add("color--pink");
                spans[16].classList.add("color--pink");
                spans[19].classList.add("color--pink");
              }

              if (i === spans.length - 1) {
                setTimeout(resolve, 50);
              }
            }, i * 50);
          });
        });
      }

      async function visibleEvent() {
        for (let i = 0; i < visibles.length; i++) {
          await animateVisibleElement(visibles[i]);
        }
      }

      setTimeout(() => {
        visibleEvent();
      }, 2000);
    }
  };
  webStorage();
}

_loading();

//スムーススクロール

// ページ内リンククリック時の処理
function setupSmoothScroll() {
  // ハッシュを含むすべてのアンカーリンクを取得
  const anchors = document.querySelectorAll('a[href*="#"]');

  // 各アンカーにクリックイベントを設定
  anchors.forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      // 同じページ内のリンクの場合のみデフォルト動作を防止
      const currentPath = window.location.pathname; //今現在表示しているページのパス部分（/about/ や /contact/ など）を取得。
      const linkPath = this.pathname || "/"; //クリックされたリンク (<a>) のパス部分を取得。
      const linkHostname = this.hostname;

      // リンクが別ページの場合は通常の遷移を許可
      if (
        currentPath !== linkPath ||
        window.location.hostname !== linkHostname //クリックされたリンクのホスト名（ドメイン名）を取得。例 "example.com"
      ) {
        return; // デフォルトの挙動を許可
      }

      // 同一ページ内リンクの場合はデフォルト動作を防止
      e.preventDefault();

      // リンク先の要素を取得
      const hash = this.hash;
      if (!hash || hash === "#") {
        // ハッシュがない、または#だけの場合はページトップへ
        window.scrollTo({ top: 0, behavior: "smooth" });
        return;
      }

      const target = document.querySelector(hash);

      // 対象要素が見つからなければ処理を終了
      if (!target) {
        return;
      }

      // ヘッダーの高さを取得
      const header = document.querySelector(".header");
      const headerHeight = header ? header.offsetHeight : 0;

      // 要素の位置を取得
      const elementPosition = target.getBoundingClientRect().top;
      const currentScrollPosition =
        window.pageYOffset || document.documentElement.scrollTop;

      // スクロール位置を計算（ヘッダーの高さだけオフセット）
      const scrollPosition =
        currentScrollPosition + elementPosition - headerHeight;

      // スムーズにスクロール
      window.scrollTo({
        top: scrollPosition,
        behavior: "smooth",
      });

      // URLにハッシュを残す（オプション）
      // history.pushState(null, null, hash);
    });
  });
}

// DOMの読み込み完了時に実行
document.addEventListener("DOMContentLoaded", function () {
  // ページ内リンクのスムーズスクロール設定
  setupSmoothScroll();
});
