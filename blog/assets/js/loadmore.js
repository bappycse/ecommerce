; (function ($) {
    $(document).ready(function () {

        $("#email-subscribe").submit(function (event) {
            event.preventDefault();
            var email = $.trim($("input[name='newsletter']").val());
            $.ajax({
                type: 'POST',
                url: `https://api.hateemtai.com/api/OtpManage/SubscribeEmail?email=${email}`,
                cache: true,
                processData: true,
                contentType: true,
                crossDomain: true,

                success: function (dataofconfirm) {
                    $(".newsletter-alert").css('display', 'block');
                }
            });
        });

        $("#footer-email-subscribe").submit(function (event) {
            event.preventDefault();
            var email = $.trim($("input[name='newsletter']").val());
            $.ajax({
                type: 'POST',
                url: `https://api.hateemtai.com/api/OtpManage/SubscribeEmail?email=${email}`,
                cache: true,
                processData: true,
                contentType: true,
                crossDomain: true,
                success: function (confirmData) {
                    $(".footer-alert").css('display', 'block');

                }
            });
        });

        setTimeout(function () {
            $('#preloader').fadeOut('slow', function () {
                $(this).remove();
            });
        }, 200);
        
        $('#nav-search form label input').css('display', 'block');
        $('#nav-aside ').css('display', 'block');
        $('.nav-close ').css('display', 'block');

        $("#loadmore").on('click', function (e) {
            var nexturl = $(this).attr('href');
            $.get(nexturl, {}, function (data) {
                var posts = $(data).find("#posts-container").html();
                //console.log(posts);
                $("#posts-container").append(posts);

                var newpagelink = $(data).find("#loadmore").attr("href");
                if (newpagelink) {
                    $("#loadmore").attr('href', newpagelink);
                }
                else {
                    $("#loadmore").hide('slow');
                }
            });
            return false;
        });

        var newpagelink = $("#loadmore").attr("href");
        if (!newpagelink) {
            $("#loadmore").hide('slow');
        }
        $('#email-subscribe .submit').on('click', function () {
            setTimeout(function () {
                $(".newsletter-alert").css('display', 'block');
            }, 3000);
        })
        $('#footer-email-subscribe .submit').on('click', function () {
            setTimeout(function () {
                $(".footer-alert").css('display', 'block');
            }, 3000);
        })
    });
})(jQuery);


