<div class="modal loader"  tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div style="background-color: transparent; border: none;margin-top: 50%"
             class="">
            <div style="background-color: transparent;" class="">
                <div style="background-color: transparent;border: none" class="">
                    <div style="margin: 0 auto;" class="card-body">

                        <img src="assets/img/Loader.gif"/>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!--================Footer Area =================-->
<footer class="footer_area">
    <div class="subscrib_area">
        <div class="container">
            <div class="subscrib_inner">
                <div class="main_title">
                    <h2>NewsLetter</h2>
                    <p><?php echo ma_tra("Inscrivez-vous et recevez par email nos nouveauté") ?></p>
                </div>
                <div class="input-group">
                    <input  type="email" class="email_abonne form-control" placeholder="&#xf003;   <?php echo ma_tra("Votre email")?>">
                    <span class="input-group-btn">
                                <button class="send btn btn-default" type="button"><?php echo ma_tra("Envoie") ?></button>
                            </span>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_widget_area">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-xs-6">
                    <aside class="f_widget home_widget">
                        <div class="f_title">
                            <h3><?php echo ma_tra("Solutions") ?></h3>
                        </div>
                        <ul>
                            <li><a href="payment"><?php echo ma_tra("Paiement en ligne") ?></a></li>
                            <li><a href="virement"><?php echo ma_tra("Envoyez de l'argent")?></a></li>
<!--                            <li><a href="#">E-commerce</a></li>-->
                        </ul>
                    </aside>
                </div>
                <div class="col-md-2 col-xs-6">
                    <aside class="f_widget home_widget">
                        <div class="f_title">
                            <h3>Support</h3>
                        </div>
                        <ul>
                            <li><a href="support"><?php echo ma_tra("FAQ")?></a></li>
                            <li><a href="tarif"><?php echo ma_tra("Tarifs")?></a></li>
<!--                            <li><a href="#">--><?php //echo ma_tra("Contact")?><!--</a></li>-->
                        </ul>
                    </aside>
                </div>
                <div  class="col-md-8 col-xs-12">
                    <aside  class="f_widget contact_widget">
                        <div id="contact" class="f_title">
                            <h3><?php echo ma_tra("Nous contactez")?></h3>
                        </div>
                        <div class="row contact_widget_form"  id="contactForm" novalidate="novalidate">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="<?php echo ma_tra("Nom et Prénom")?>">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="<?php echo ma_tra("Téléphone")?>">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="<?php echo ma_tra("E-Mail")?>">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <select id="probleme"  class="form-control">
                                            <option><?php echo ma_tra("Type de problème")?> </option>
                                            <option>  </option>
                                            <option><?php echo ma_tra("Problème de paiement")?></option>
                                            <option><?php echo ma_tra("Problème d'intégration de l'API")?></option>
                                            <option><?php echo ma_tra("Je veux être distributeur")?></option>
                                            <option><?php echo ma_tra("Problème de recharge de compte")?></option>
                                            <option><?php echo ma_tra("Suggestions")?></option>
                                            <option><?php echo ma_tra("Autres...")?></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="<?php echo ma_tra("Votre Méssage.......")?>"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <button id="submit" type="submit" class="btn submint_btn form-control"><?php echo ma_tra("Envoyé")?></button>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_copy_right">
        <div class="row container">
            <div class="pull-left">
                <p id="lef" class="">
                       <a href="https://www.gandokintche.com" > GandokinTché &copy;  </a>Copyright <script>document.write(new Date().getFullYear());</script>
                
<!--                    <span>-->
<!--                        <img style="max-width: 20px;margin-left: 10px;" src="https://api.hostip.info/images/flags/--><?php //echo strtolower($dataip->geobytesinternet); ?><!--.gif">-->
<!--                        --><?php //echo $dataip->geobytescountry; ?>
<!--                    </span>-->
                </p>
            </div>
            <div id="rig" class="pull-right">
                <ul>
<!--                    <li><a href="#">Terme & Condition</a></li>-->
                    <li><a href="https://www.gandokintche.com/tarif"><?php echo ma_tra("Tarifs")?></a></li>
                    <li><a  href="https://www.gandokintche.com/developpeur"><?php echo ma_tra("Développeurs")?></a></li>
                    <li><a href="#contact"><?php echo ma_tra("Nous contactez")?></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--================End Footer Area =================-->









<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/js/jquery-2.2.4.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/alertb.js"></script>


<!-- Rev slider js -->
<script src="assets/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<!-- Extra Plugin -->
<script src="assets/vendors/parallax/jquery.parallax-scroll.js"></script>
<script src="assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/vendors/counterup/waypoints.min.js"></script>
<script src="assets/vendors/counterup/jquery.counterup.min.js"></script>
<script src="assets/vendors/flexslider/flex-slider.js"></script>
<script src="assets/vendors/flexslider/mixitup.js"></script>
<script src="assets/vendors/swiper/js/swiper.min.js"></script>
<script src="assets/vendors/flipster-slider/jquery.flipster.min.js"></script>
<script src="assets/vendors/nice-selector/jquery.nice-select.min.js"></script>
<script src="assets/js/parsley.min.js"></script>
<script src="assets/js/fr.js"></script>
<script src="assets/js/theme.js"></script>
<script async src="../../../../../www.googletagmanager.com/gtag/jsa055?id=UA-23581568-13"></script>
<script>

    $(".send").click(function () {
        if($(".email_abonne").val() !== "")
        {
            $.ajax({
               url : "Tools/newsLetter.php",
               type:'POST',
               data:'email='+encodeURIComponent( $('.email_abonne').val() ),
               beforeSend: function() {
                    $(".loader").modal('show');
                },
                success: function(data)
                {
                    data = JSON.parse(data);
                    setTimeout(function () {
                        if(!data.hasOwnProperty('msg'))
                        {
                            $(".loader").modal('hide');
                            $.confirm({
                                columnClass: 'col-md-6 col-md-offset-3',
                                title: '<?php echo ma_tra("Message") ?>',
                                content: data.error,
                                type: 'red',
                                typeAnimated: true,
                                buttons: {
                                    tryAgain: {
                                        text: '<?php echo ma_tra("Rééssayer") ?>',
                                        btnClass: 'btn-red',
                                        action: function(){
                                        }
                                    },
                                    close: function () {
                                        $('.email_abonne').val("");
                                    }
                                }
                            });
                        }else{
                            if (data.hasOwnProperty('msg'))
                            {
                                $(".loader").modal('hide');
                                $.confirm({
                                    columnClass: 'col-md-6 col-md-offset-3',
                                    title: '<?php echo ma_tra("Congratulations!") ?>',
                                    content: data.msg,
                                    type: 'green',
                                    typeAnimated: true,
                                    buttons: {
                                        tryAgain: {
                                            text: '<?php echo ma_tra("Merci") ?>',
                                            btnClass: 'btn-green',
                                            action: function(){
                                                $('.email_abonne').val("");
                                            }
                                        },
                                        close: function () {
                                            $('.email_abonne').val("");
                                        }
                                    }
                                });
                            }
                        }
                    },5000);
                }
            });
        }
    });

    $("#submit").click(function () {
        if($("#name").val() !== "" && $("#phone").val() !== "" && $("#email").val() !== ""
            && $("#probleme").val() !== "" && $("#message").val() !== "")
        {
            $.ajax({
                url : "Tools/contact.php",
                type:'POST',
                data:'email='+encodeURIComponent( $('#email').val() )+'&phone='+encodeURIComponent( $('#phone').val() )
                             +'&name='+encodeURIComponent( $('#name').val() )+'&message='+encodeURIComponent( $('#message').val() )
                                +'&prob='+encodeURIComponent( $('#probleme').val() ),
                beforeSend: function() {
                    $(".loader").modal('show');
                },
                success: function(data)
                {
                    data = JSON.parse(data);
                    console.log(data);
                    setTimeout(function () {
                        if(!data.hasOwnProperty('msg'))
                        {
                            $(".loader").modal('hide');
                            $.confirm({
                                columnClass: 'col-md-6 col-md-offset-3',
                                title: '<?php echo ma_tra("Message") ?>',
                                content: data.error,
                                type: 'red',
                                typeAnimated: true,
                                buttons: {
                                    tryAgain: {
                                        text: '<?php echo ma_tra("Rééssayer") ?>',
                                        btnClass: 'btn-red',
                                        action: function()
                                        {

                                        }
                                    },
                                    close: function () {
                                        $('#email').val("");
                                        $('#name').val("");
                                        $('#phone').val("");
                                        $('#message').val("");
                                        $('#probleme').val("");
                                    }
                                }
                            });
                        }else{
                            if (data.hasOwnProperty('msg'))
                            {
                                $(".loader").modal('hide');
                                $.confirm({
                                    columnClass: 'col-md-6 col-md-offset-3',
                                    title: '<?php echo ma_tra("Congratulations!") ?>',
                                    content: data.msg,
                                    type: 'green',
                                    typeAnimated: true,
                                    buttons: {
                                        tryAgain: {
                                            text: '<?php echo ma_tra("Merci") ?>',
                                            btnClass: 'btn-green',
                                            action: function(){
                                                $('#email').val("");
                                                $('#name').val("");
                                                $('#phone').val("");
                                                $('#message').val("");
                                                $('#probleme').val("");
                                            }
                                        },
                                        close: function () {
                                            $('#email').val("");
                                            $('#name').val("");
                                            $('#phone').val("");
                                            $('#message').val("");
                                            $('#probleme').val("");
                                        }
                                    }
                                });
                            }
                        }
                    },5000);
                }
            });
        }
    });

    function lange(l) {
        $.ajax({
            url:"Tools/change?lang="+l,
            success: function (data) {
                data=JSON.parse(data);
                if(data != false)
                {
                    window.location.reload(true);
                }
            }
        });
    }

    if(screen.width >= 1024){
        $('#lef').css("margin-left","50px");
        $('#rig').css("right","0px");
        $('#rig').css("margin-right","50px");
        $('#rig').css("position","absolute");
    }


    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');


    $(document).on('click', '.mega-dropdown', function(e) {
        e.stopPropagation()
    })
</script>

<script type="text/javascript">
    (function () {
        var options = {
            facebook: "153123795363789", // Facebook page ID
            whatsapp: "+22996702976", // WhatsApp number
            call_to_action: "<?php echo ma_tra("Besoin d'aide ?"); ?>", // Call to action
            button_color: "#0d1c3f", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "facebook,whatsapp", // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();


        $(document).ready(function() {

            $(window).resize(function(){
                if ($(window).width() >= 980){
                    $(".navbar .dropdown-toggle").hover(function () {
                        $(this).parent().toggleClass("show");
                        $(this).parent().find(".dropdown-menu").toggleClass("show");
                    });

                    $(".navbar .dropdown-menu").mouseleave(function() {
                        $(this).removeClass("show");
                    });
                }
            });

        });


    // Dropdown
    try {
        var menu = $('.js-item-menu');
        var sub_menu_is_showed = -1;

        for (var i = 0; i < menu.length; i++) {
            $(menu[i]).on('click', function (e) {
                e.preventDefault();
                $('.js-right-sidebar').removeClass("show-sidebar");
                if (jQuery.inArray(this, menu) == sub_menu_is_showed) {
                    $(this).toggleClass('show-dropdown');
                    sub_menu_is_showed = -1;
                }
                else {
                    for (var i = 0; i < menu.length; i++) {
                        $(menu[i]).removeClass("show-dropdown");
                    }
                    $(this).toggleClass('show-dropdown');
                    sub_menu_is_showed = jQuery.inArray(this, menu);
                }
            });
        }
        $(".js-item-menu, .js-dropdown").click(function (event) {
            event.stopPropagation();
        });

        $("body,html").on("click", function () {
            for (var i = 0; i < menu.length; i++) {
                menu[i].classList.remove("show-dropdown");
            }
            sub_menu_is_showed = -1;
        });

    } catch (error) {
        console.log(error);
    }

    var wW = $(window).width();
    // Right Sidebar
    var right_sidebar = $('.js-right-sidebar');
    var sidebar_btn = $('.js-sidebar-btn');

    sidebar_btn.on('click', function (e) {
        e.preventDefault();
        for (var i = 0; i < menu.length; i++) {
            menu[i].classList.remove("show-dropdown");
        }
        sub_menu_is_showed = -1;
        right_sidebar.toggleClass("show-sidebar");
    });

    $(".js-right-sidebar, .js-sidebar-btn").click(function (event) {
        event.stopPropagation();
    });

    $("body,html").on("click", function () {
        right_sidebar.removeClass("show-sidebar");

    });



</script>

</body>

</html>