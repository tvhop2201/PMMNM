    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('a.back-to-top').fadeIn(); // làm mờ
            } else {
                $('a.back-to-top').fadeOut();
            }
        })
        $('a.back-to-top').click(function() {
                $("html,body").animate({ scrollTop: 0 }, 600);// cuộn
                return false;
            }

        );
    });


    $(document).ready(function() {
        $(".account").hover(function() {
            $(".acc-top").attr("style", "display: block"); // attr set or return
        }, function() {
            $(".acc-top").attr("style", "display: none ");
        });
    });