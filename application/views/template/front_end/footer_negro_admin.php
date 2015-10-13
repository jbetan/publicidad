
<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
            </div>
            <!--/Copyright-->

            <div class="span6">
                <ul class="social pull-right">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-pinterest"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-google-plus"></i></a></li>
                    <li><a href="#"><i class="icon-youtube"></i></a></li>
                    <li><a href="#"><i class="icon-tumblr"></i></a></li>
                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    <li><a href="#"><i class="icon-rss"></i></a></li>
                    <li><a href="#"><i class="icon-github-alt"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>
                </ul>
            </div>

            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--/Footer-->


<!---->
<script src="<?= base_url();?>assets/js/vendor/jquery-1.9.1.min.js"></script>

<script src="<?= base_url();?>assets/js/vendor/bootstrap.min.js"></script>
<script src="<?= base_url();?>assets/js/main.js"></script>

<!-- Required javascript files for Slider-->
<script src="<?= base_url();?>assets/js/jquery.ba-cond.min.js"></script>
<script src="<?= base_url();?>assets/js/jquery.slitslider.js"></script>

<!-- /Required javascript files for Slider -->


<!-- /SL Slider -->


<!--End  JS<!--Begin  JS -->

<!--
<script type="text/javascript" src="<?= base_url();?>assets/js/jquery-1.11.1.js"></script>
-->

<script type="text/javascript" src="<?= base_url();?>assets/js/jquery-2.1.1.js"></script>


<script type="text/javascript" src="<?= base_url();?>assets/js/jquery-ui-1.11.1.js"></script>
<script type="text/javascript" src="<?= base_url();?>assets/js/jquery-ui.multidatespicker.js"></script>
<script src="<?= base_url();?>assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

<script>
    $(function() {
        $('#dias').multiDatesPicker();
    });

    $("#fechaDP").focus(function(){
        var $this = $(this);

        $this.multiDatesPicker();
       // $this.multiDatesPicker("show");
    });

//----------------Imagenes
      function getInfo(id){
        console.log('editar',id);
        $.ajax({
            data: {'id':id},
            url: "imagenes/getinfo",
            type: "GET",
            dataType: "json",

            error: function(){
               console.log("Error");
            },
            success:function(data){

                $("#titulo").val(data.data.titulo);
                $("#descripcion").val(data.data.descripcion);
                $("#restriccion").val(data.data.restriccion);
                $("#ubi").val(data.data.ubicacion);
                $("#info").val(data.data.info_extra);
                $("#fechaDP").val(data.data.diaspromo);
            }
        })

    }

    function borrar(id){
        console.log('borrar',id);
        $.ajax({
            data: {'id':id},
            url: "imagenes/borrarImagen",
            type: "GET",
            dataType: "json",
            error: function(){
                console.log("Error");
            },
            success:function(data){
                alert('Exito al elminar la imagen');
                location.reload();
                //window.location.href = "imagenes";
                console.log(data);
            }
        })
    }

    $(document).ready(function(){
        $("#submit").click(function(event) {
            event.preventDefault();

            $.ajax({
                url: "imagenes/update",
                type: "POST",
                data: $('#formulario_act').serialize(),
                error: function(){
                    console.log("Error");
                },
                success:function(data){
                    console.log("Exito");
                    console.log(data);
                }
            });

        });
        return false;
    });




</script>



</body>
</html>