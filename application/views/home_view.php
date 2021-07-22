<nav class="navbar navbar-default menu">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar" style="background-color: #cf641c;"></span>
                <span class="icon-bar" style="background-color: #cf641c;"></span>
                <span class="icon-bar" style="background-color: #cf641c;"></span>
            </button>
            <a class="navbar-brand scrollink" href="#home">
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/logo-thefirst.png" alt="The First Jardim">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul id="#menuCenter" class="nav navbar-nav navbar-right">
                <li><a class="scrollink active" href="#home">Home</a></li>
                <li><a class="scrollink" href="#thefirst">The First</a></li>
                <li><a class="scrollink" href="#contato">Contato</a></li>
            </ul>
        </div>
    </div>
</nav>
<div id="home" class="container-fluid padding-off video">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
                <div class="boxVideo">
                    <video width="100%" height="auto" autoplay="autoplay" controls muted>
                        <source src="<?= base_url(); ?>assets/video/video.mp4" type="video/mp4">
                        <source src="<?= base_url(); ?>assets/video/video.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="thefirst" class="container-fluid padding-off thefirst">
    <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/fachada.jpg" alt="The First">
</div>
<div class="container-fluid endereco">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center padding-off">
                <p><strong>AL. FRANCISCO ALVES, 115 - JARDIM - SANTO ANDRÉ</strong></p>
            </div>
        </div>
    </div>
</div>
<div id="contato" class="container-fluid contato">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center padding-off tt">
                <p>SEU <strong>ÍCONE</strong> AGUARDA POR VOCÊ.</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2 padding-off">
                <form method="post" role="form" action="<?php echo base_url("contato") ?>">
                    <div class="group-form">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <input id="nome" type="text" class="nome form-control" name="nome" required="required" placeholder="Nome*" />
                            </div>
                            <div class="form-group">
                                <input id="email" type="email" class="email form-control" name="email" required="required" placeholder="Email*" />
                            </div>
                            <div class="form-group">
                                <input id="telefone" class="phone form-control" type="tel" name="phone" placeholder="Telefone" />
                            </div>
                            <div class="form-group">
                                <textarea id="form-mensagem" class="msg form-control" rows="3" name="mss" placeholder="Mensagem..."></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn_enviar btn" title="enviar" name="enviar_email" value="enviar">Enviar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($email_enviado))
    echo $email_enviado;
?>

<div id="cookies" class="cookies">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2 box">
        <div class="col-xs-12 col-sm-9 col-md-9">
            <p>
                Este site utiliza cookies para melhorar sua experiência de navegação, permitir um início de sessão seguro, recolher estatísticas e oferecer conteúdo adequado aos seus interesses. Ao continuar sua navegação, considera-se aceito nossos e a nossa <a href="<?php echo base_url(); ?>politicadeprivacidade">Política de Privacidade</a>.
            </p>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3">
            <a href="#" class="btn_cookie btn center-block">Aceito</a>
        </div>
    </div>
</div>