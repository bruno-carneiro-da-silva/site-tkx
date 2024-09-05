var sectionArray = [1, 2, 3, 4, 5, 6];

$.each(sectionArray, function (index, value) {
    $(document).scroll(function () {
        var section = $("#" + "section_" + value);
        if (section.length) {
            var offsetSection = section.offset().top - 94;
            var docScroll = $(document).scrollTop();
            var docScroll1 = docScroll + 1;

            if (docScroll1 >= offsetSection) {
                $(".navbar-nav .nav-item .nav-link").removeClass("active");
                $(".navbar-nav .nav-item .nav-link:link").addClass("inactive");
                $(".navbar-nav .nav-item .nav-link")
                    .eq(index)
                    .addClass("active");
                $(".navbar-nav .nav-item .nav-link")
                    .eq(index)
                    .removeClass("inactive");
            }
        }
    });

    $(".click-scroll")
        .eq(index)
        .click(function (e) {
            var section = $("#" + "section_" + value);
            if (section.length) {
                var offsetClick = section.offset().top - 94;
                e.preventDefault();
                $("html, body").animate(
                    {
                        scrollTop: offsetClick,
                    },
                    300
                );
            }
        });
});

$(document).ready(function () {
    $(".navbar-nav .nav-item .nav-link:link").addClass("inactive");
    $(".navbar-nav .nav-item .nav-link").eq(0).addClass("active");
    $(".navbar-nav .nav-item .nav-link:link").eq(0).removeClass("inactive");
});

// Mostrar o botão quando o usuário rolar para baixo 20px
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    const scrollToTopBtn = document.getElementById("scrollToTopBtn");
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        scrollToTopBtn.style.display = "block";
    } else {
        scrollToTopBtn.style.display = "none";
    }
}

// Rolar para o topo da página quando o botão for clicado
document.getElementById("scrollToTopBtn").onclick = function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
};
