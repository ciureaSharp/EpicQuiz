<?php
/**
 * Created by PhpStorm.
 * User: DigitalAdvisor 2
 * Date: 27.05.2017
 * Time: 18:14
 */
if (!isset($modal)) {
    $modal = 'null';
}
?>

<div class="modal fade" id="Login_modal" tabindex="-1" role="dialog" aria-labelledby="Login_modalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="Login_modalLabel1">Bine ai venit!</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8" style="border-right: 3px solid #838ea5">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="login_email" class="col-sm-3 control-label">Email*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="login_email"
                                               placeholder="Insereaza email">
                                        <div class="input-group-addon"><i class="ti-email"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="login_parola" class="col-sm-3 control-label">Parola*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="login_parola"
                                               placeholder="Insereaza parola">
                                        <div class="input-group-addon"><i class="ti-lock"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-b-0">
                                <div class="col-sm-offset-3 col-sm-9 text-right">
                                    <button type="submit" class="btn btn-info waves-effect waves-light m-t-10"
                                            id="signin">Sign in
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <h4 style="margin-top: 0px !important;">Inca nu ai cont?</h4>
                        <p>Click <a id="register_link" href="#Register_modal">aici</a> pentru a te inregistra.</p>
                        <h4 class="text-success">Stii ca vrei!</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Register_modal" tabindex="-1" role="dialog" aria-labelledby="Register_modalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="Register_modalLabel1">Creeaza cont</h4>
            </div>
            <div class="modal-body">
                <div class="white-box">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="prenume" class="col-sm-3 control-label">Prenume*</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="prenume"
                                           placeholder="Prenume">
                                    <div class="input-group-addon"><i class="ti-user"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nume" class="col-sm-3 control-label">Nume*</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="nume"
                                           placeholder="Nume">
                                    <div class="input-group-addon"><i class="ti-user"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="register_email" class="col-sm-3 control-label">Email*</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="email" class="form-control" id="register_email"
                                           placeholder="Email">
                                    <div class="input-group-addon"><i class="ti-email"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="register_parola" class="col-sm-3 control-label">Parola*</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="password" class="form-control" id="register_parola"
                                           placeholder="Parola">
                                    <div class="input-group-addon"><i class="ti-lock"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="register_reparola" class="col-sm-3 control-label">Confirma parola*</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="password" class="form-control" id="register_reparola"
                                           placeholder="Confirma parola">
                                    <div class="input-group-addon"><i class="ti-lock"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="alert alert-danger hidden" id="form_errors"></div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-offset-3 col-sm-9 text-right">
                                <button type="submit" class="btn btn-info waves-effect waves-light m-t-10"
                                        id="creeaza_cont">Creeaza cont
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="row">
        <div class="fix-width">
            <div class="col-md-3 col-sm-6"><img src="<?php echo ASSETS; ?>landing/images/footer-logo.png"/>
                <p class="m-t-30"><font class="text-white">Eliteadmin</font> is premium quality admin dashboard
                    template with flat design. It is fully responsive admin dashboard template built with
                    Bootstrap Framework, HTML5 & CSS3, Media query. </p></div>
            <div class="col-md-3 col-sm-6">
                <ul class="footer-link list-icons">
                    <li><a href="http://themedesigner.in/demo/eliteadmin-package/eliteadmin-inverse/index.html"><i
                                class="ti-angle-right text-megna"></i> Minimal Dashboard</a></li>
                    <li>
                        <a href="http://themedesigner.in/demo/eliteadmin-package/eliteadmin-inverse/index2.html"><i
                                class="ti-angle-right text-megna"></i> Demographical Dashboad</a></li>
                    <li>
                        <a href="http://themedesigner.in/demo/eliteadmin-package/eliteadmin-inverse/index3.html"><i
                                class="ti-angle-right text-megna"></i> Analytical Dashboad</a></li>
                    <li>
                        <a href="http://themedesigner.in/demo/eliteadmin-package/eliteadmin-inverse/index4.html"><i
                                class="ti-angle-right text-megna"></i> Simpler Dashboard</a></li>
                    <li>
                        <a href="http://themedesigner.in/demo/eliteadmin-package/eliteadmin-ecommerce/index.html"><i
                                class="ti-angle-right text-megna"></i> eCommerce Dashboard</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6">
                <ul class="footer-link list-icons">
                    <li>
                        <a href="http://themedesigner.in/demo/eliteadmin-package/eliteadmin-inverse/widgets.html"><i
                                class="ti-angle-right text-megna"></i> Widget Sections</a></li>
                    <li>
                        <a href="http://themedesigner.in/demo/eliteadmin-package/eliteadmin-inverse/morris-chart.html"><i
                                class="ti-angle-right text-megna"></i> Chart Options</a></li>
                    <li>
                        <a href="http://themedesigner.in/demo/eliteadmin-package/eliteadmin-inverse/form-layout.html"><i
                                class="ti-angle-right text-megna"></i> Lots of Form Layouts</a></li>
                    <li>
                        <a href="http://themedesigner.in/demo/eliteadmin-package/eliteadmin-inverse/data-table.html"><i
                                class="ti-angle-right text-megna"></i> Data Table Options</a></li>
                    <li>
                        <a href="http://themedesigner.in/demo/eliteadmin-package/eliteadmin-inverse/calendar.html"><i
                                class="ti-angle-right text-megna"></i> Calendar Designs</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6">
                <ul class="footer-link list-icons">
                    <li><a href="http://themedesigner.in/demo/eliteadmin-package/eliteadmin-inverse/inbox.html"><i
                                class="ti-angle-right text-megna"></i> Inbox Layout</a></li>
                    <li>
                        <a href="http://themedesigner.in/demo/eliteadmin-package/eliteadmin-inverse/treeview.html"><i
                                class="ti-angle-right text-megna"></i> Tree View Options</a></li>
                    <li>
                        <a href="http://themedesigner.in/demo/eliteadmin-package/eliteadmin-inverse/carousel.html"><i
                                class="ti-angle-right text-megna"></i> Carousel Slider Option</a></li>
                    <li>
                        <a href="http://themedesigner.in/demo/eliteadmin-package/eliteadmin-inverse/gallery.html"><i
                                class="ti-angle-right text-megna"></i> Gallery Option</a></li>
                    <li>
                        <a href="http://themedesigner.in/demo/eliteadmin-package/eliteadmin-inverse/starter-page.html"><i
                                class="ti-angle-right text-megna"></i> Starter Pages</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12 sub-footer">
                <span>Copyright 2016. All Rights Reserved by <font class="text-white">Elite Admin</font></span>
                        <span class="pull-right">Design & Developed by <font class="text-white">Theme
                                Designer</font></span>
            </div>

        </div>
    </div>
</footer>
</div>
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="<?php echo ASSETS; ?>plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo ASSETS; ?>bootstrap/dist/js/bootstrap.min.js"></script>
<!-- jQuery for carousel -->
<script src="<?php echo ASSETS; ?>plugins/bower_components/owl.carousel/owl.carousel.min.js"></script>
<script src="<?php echo ASSETS; ?>plugins/bower_components/sweetalert/sweetalert.min.js"></script>
<script src="<?php echo ASSETS; ?>landing/js/custom.js"></script>

<script>
    $(document).ready(function () {

        $("#register_link").click(function (e) {
            e.preventDefault();
            $("#Login_modal").modal("hide");
            $("#Register_modal").modal("show");
        });

        $("#creeaza_cont").click(function (e) {
            e.preventDefault();
            $('#form_errors').empty();
            var nume = $('#nume').val();
            var prenume = $('#prenume').val();
            var email = $('#register_email').val();
            var pass = $('#register_parola').val();
            var repass = $('#register_reparola').val();
            if (nume.length == 0) {
                $('#nume').css({'background-color': '#fb9678', 'color': 'white'});
                $('#form_errors').append('<p>Numele este obligatoriu!</p>').removeClass('hidden');
            }
            if (prenume.length == 0) {
                $('#prenume').css({'background-color': '#fb9678', 'color': 'white'});
                $('#form_errors').append('<p>Prenumele este obligatoriu!</p>').removeClass('hidden');
            }
            if (!isEmail(email)) {
                $('#register_email').css({'background-color': '#fb9678', 'color': 'white'});
                $('#form_errors').append('<p>Formatul email-ului invalid!</p>').removeClass('hidden');
            }
            if (pass.length === 0) {
                $("#register_parola").css({'background-color': '#fb9678', 'color': 'white'});
                $('#form_errors').append('<p>Nu ai introdus parola!</p>').removeClass('hidden');
            }
            if (pass.length < 6) {
                $("#register_parola").css({'background-color': '#fb9678', 'color': 'white'});
                $('#form_errors').append('<p>Parola trebuie sa contina minim 6 caractere!</p>').removeClass('hidden');
            }
            if (repass.length === 0) {
                $("#register_reparola").css({'background-color': '#fb9678', 'color': 'white'});
                $('#form_errors').append('<p>Nu ai confirmat parola!</p>').removeClass('hidden');
            }
            if (pass.length > 0 && (pass !== repass)) {
                $("#register_reparola").css({'background-color': '#fb9678', 'color': 'white'});
                $('#form_errors').append('<p>Parolele nu coincid!</p>').removeClass('hidden');
            }
            if ($('#form_errors').hasClass('hidden')) {
                $.ajax({
                    url: "http://localhost/epic_quiz/register",
                    type: "POST",
                    data: {
                        prenume: prenume,
                        nume: nume,
                        email: email,
                        pass: pass
                    },
                    success: function (data) {
                        if (data == 1) {
                            swal(
                                'OK!',
                                'Contul tau a fost creat!',
                                'success'
                            );

                            //redirect to my account
                        } else if (data == 0) {
                            swal(
                                'Eroare!',
                                'Adresa de email exista!',
                                'error'
                            );
                        }
                    }
                });
            }
        });

        function isEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }

        $("#signin").click(function (e) {
            e.preventDefault();
            var email = $("#login_email").val();
            var pass = $("#login_parola").val();
            $.ajax({
                url: "http://localhost/epic_quiz/login",
                type: "POST",
                data: {
                    email: email,
                    pass: pass
                },
                success: function (data) {
                    if (data == 'activ') {
                        swal(
                            'OK!',
                            'Logare realizata cu success',
                            'success'
                        );
                    } else if (data == 'error') {
                        swal(
                            'Eroare!',
                            'Adresa de email/parola incorecte',
                            'error'
                        );
                    } else if (data == 'neactivat') {
                        swal('Ai primit un email pt. a-ti activa contul!');
                    }
                }
            });
        });
        if ('<?php echo $modal; ?>' == 'show') {
            swal(
                'OK!',
                'Contul a fost activat!',
                'success'
            );
            window.setTimeout(function () {
                window.location.href = '<?php echo base_url();?>' + 'epic_quiz/home';
            }, 3000);

        } else if (conf_modal == 'error') {
            swal(
                'Eroare!',
                'Contul nu a fost activat!',
                'error'
            );
            window.setTimeout(function () {
                window.location.href = '<?php echo base_url();?>' + 'epic_quiz/home';
            }, 3000);
        }
    });
</script>

</body>
</html>


