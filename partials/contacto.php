<article id="contacto">
    <div class="col-30">
        <form name="frmContacto" action="email" method="post">
            <input name="txtNombre" type="text" placeholder="Nombre">

            <input name="txtEmail" type="text" placeholder="Email">

            <textarea name="txtMensaje" id="txtMensaje">Comentario</textarea>

            <button class="orange-btn">
                Enviar
            </button>
        </form>
    </div>

    <div class="col-60" style="float: right">
        <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3722.2633864532313!2d-101.64588499999999!3d21.
        102062999999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842bbe4420b66083%3A0x6700ddb254167a6f!2sCenadur%C3%ADa+Do%C3
        %B1a+Elena!5e0!3m2!1ses!2s!4v1429462005958" frameborder="0" style="border:0"></iframe>
    </div>

    <div class="clearfix"></div>
</article>
<script>
    $(document).ready(function(){
        $("#txtMensaje").focus(function(){
            if($("#txtMensaje").val() == 'Comentario') {
                $("#txtMensaje").val("");
            }
        });

        $("#txtMensaje").blur(function(){
            if($("#txtMensaje").val() == '') {
                $("#txtMensaje").val("Comentario");
            }
        });
    });
</script>