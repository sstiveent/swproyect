<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="cover-container">

            <div class="masthead clearfix">
                <div class="inner">
                    <h1 class="masthead-brand">2Plan</h1>
                    <nav>
                        <ul class="nav masthead-nav">
                            <li class="active"><a href="#">Inicio</a></li>
                            <li><a href="#">Nosotros</a></li>
                            <li><a href="#">Cont&aacute;ctenos</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="inner cover" ng-controller="loginController" ng-init="obtenerUrls();">
                <h1 class="cover-heading">¿Sin plan?</h1>
                <p class="lead">En 2Plan encuentras un montón de planes para realizar con tu pareja</p>
                <p class="lead">


                    <div class="row">
                        <a href="{{facebookUrl.url}}" class="btn btn-lg btn-primary">Iniciar sesión con Facebook!</a>
                    </div>
                    <div class="row">

                        <a href="{{googleUrl.url}}" class="btn btn-lg btn-danger">Iniciar sesión con Google!</a>
                    </div>


                </p>
            </div>

            <div class="mastfoot">
                <div class="inner">
                    <p> <a href="http://2plan.grupodimo.co">2Plan</a> Todos los derechos reservados &copy; 2017</p>
                </div>
            </div>
        </div>

    </div>

</div>
