<!DOCTYPE html>
<html lang="pt">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Atendimento via Chat - TOTVS</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="chat.css">
    <link type="image/x-icon" rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAuJAAALiQE3ycutAAAIf2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDIgNzkuMTYwOTI0LCAyMDE3LzA3LzEzLTAxOjA2OjM5ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0RXZ0PSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VFdmVudCMiIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczpwaG90b3Nob3A9Imh0dHA6Ly9ucy5hZG9iZS5jb20vcGhvdG9zaG9wLzEuMC8iIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wOkNyZWF0ZURhdGU9IjIwMTgtMDYtMjhUMTg6MjQ6NTktMDM6MDAiIHhtcDpNZXRhZGF0YURhdGU9IjIwMTgtMDYtMjhUMTg6MjY6MzAtMDM6MDAiIHhtcDpNb2RpZnlEYXRlPSIyMDE4LTA2LTI4VDE4OjI2OjMwLTAzOjAwIiBkYzpmb3JtYXQ9ImltYWdlL3BuZyIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDphMzNkZTg0NC1mMjdmLTcyNDEtYThhYi0xMjcwNTdlYzc0MzQiIHhtcE1NOkRvY3VtZW50SUQ9ImFkb2JlOmRvY2lkOnBob3Rvc2hvcDo3MjRhMTdiNy05MTE2LTQzNDItYmFjMy1kNzA3ZjE2Yjk5OTUiIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo1MTIxNDNiYy1mNjRlLWMwNGQtYTU1YS1iOGU3ZmUyNGRhZjIiIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiPiA8eG1wTU06SGlzdG9yeT4gPHJkZjpTZXE+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJjcmVhdGVkIiBzdEV2dDppbnN0YW5jZUlEPSJ4bXAuaWlkOjUxMjE0M2JjLWY2NGUtYzA0ZC1hNTVhLWI4ZTdmZTI0ZGFmMiIgc3RFdnQ6d2hlbj0iMjAxOC0wNi0yOFQxODoyNDo1OS0wMzowMCIgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIvPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6Nzc1NzIxNzMtZWUxMi03ODQ5LTg3YmYtYzBjMGE5ZTNlNDRjIiBzdEV2dDp3aGVuPSIyMDE4LTA2LTI4VDE4OjI2OjMwLTAzOjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgQ0MgKFdpbmRvd3MpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJjb252ZXJ0ZWQiIHN0RXZ0OnBhcmFtZXRlcnM9ImZyb20gYXBwbGljYXRpb24vdm5kLmFkb2JlLnBob3Rvc2hvcCB0byBpbWFnZS9wbmciLz4gPHJkZjpsaSBzdEV2dDphY3Rpb249ImRlcml2ZWQiIHN0RXZ0OnBhcmFtZXRlcnM9ImNvbnZlcnRlZCBmcm9tIGFwcGxpY2F0aW9uL3ZuZC5hZG9iZS5waG90b3Nob3AgdG8gaW1hZ2UvcG5nIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDphMzNkZTg0NC1mMjdmLTcyNDEtYThhYi0xMjcwNTdlYzc0MzQiIHN0RXZ0OndoZW49IjIwMTgtMDYtMjhUMTg6MjY6MzAtMDM6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAoV2luZG93cykiIHN0RXZ0OmNoYW5nZWQ9Ii8iLz4gPC9yZGY6U2VxPiA8L3htcE1NOkhpc3Rvcnk+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjc3NTcyMTczLWVlMTItNzg0OS04N2JmLWMwYzBhOWUzZTQ0YyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo1MTIxNDNiYy1mNjRlLWMwNGQtYTU1YS1iOGU3ZmUyNGRhZjIiIHN0UmVmOm9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo1MTIxNDNiYy1mNjRlLWMwNGQtYTU1YS1iOGU3ZmUyNGRhZjIiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6TvBCMAAADPklEQVQ4y5VTSUyTURAejQc3XCBhkSjiUqpsQoVWSktbtqKgUgQXZLEoFYEgO0RWWWQppWWxVgTRSqFQEwVikO0oiQeJXjTUi9EDie3FE4kh45uf6EFPHub/X17m+97MN9/A+vo6ICKMW8dg6uUL6NHrFOlpKcOqs6dXkpQxPyjoTHc93ToF5VAuYQgLvwmmpybhSqpqVCE5hcHHjmJoIB8lopMojxSxEOIpQTBGRYQh5VDuHwI6OJ0OSEs+u3T8iA8HyriUas+7nv38Usq5z2di5SgOC2H3AowUCpDn440XVeeWCENY7tPSWGfb7+GKsohwDPH3w47W5sr5mRno79ZCv6GLr+tsUzPCIVWS0h4tjUDPvTux9W69jSNYmHstDg3wQ5lY6GT9flNGS3HMYi6fn30ND/p6wGYdhcXFeejt6oCWujswNmKWXTif+JZ/aD8uzM+Koex2oc3LzQX12o5G+8qnzRWlxUKlQtp3O19T0XmvJfj5hJXp8xIGTSYw9feC3b4CBp22wGPPDiQssH4cIf48bKqvyRk03Qeffe6wa+sWS5w8EuMVEiZa8sf83JzupTdLnsvLy1BRWgTqzCvq8BMByDRyQrxC+jNOIcVcdVZGVVkJ61kHt3LVVhFTPU4u4QSkqVSXF9c+evgA2lubqersmCgxEpYjYIHpF1My6u9UwerqKhj7erp4B70xPCQQaayi0EDUqLMMT4eHoLa6Ai6nJl8lDEdALQgCj2G+JudGt7YDHA4HrK2t7Sotytcw0JQqKeE7aTQxZrGS6rZxC03tWgDPl8bp4ER0370NB0z3az68fwdGgx5mpifBajHDzKtp0Gvbtt9rblQ2NdT15V3PqrSYH4tbmxoGD3i4bYi4MDcrDuAdQjbCrwUadfEtdTa/uqQQRsxDMGp+AgPGfnjGSi+4eaMsiH+YcyO5MizYH8kCnJEYo83L1YVzYUJ0FKadT3x/MyfTWFNZlt7efJc/PGDcVFKYZxAJgjAhRoa+3u7Y1FBr++NEzsqqDSsrJCJOuAimPjmTAOlpqi+s3x9ysRAph2zvdDo3rPz3MlGJ9BKRxMoiub8wNAgFbLlosf5Zpv9aZ/2/6/wL2nnqQvGMPpIAAAAASUVORK5CYII=">
</head>
<body>
    <header></header>
    <nav class="light-blue lighten-1" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container " href="#" class="brand-logo"><img src="https://totvsdigital.azureedge.net/prod/images/default-source/totvs/default-album/logo-totvs.png" height="45%" width="60%" style="margin-top: 5%;"></a>
            <ul class="right hide-on-small-only">
                <li><a href="https://www.totvs.com/contato">Contato</a></li>
            </ul>
            <ul id="nav-mobile" class="sidenav">
                <li><a href="https://www.totvs.com/contato">Contato</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <h2 class="header center orange-text">Suporte via Chat</h2>
            <div class="row center">
                <h5 class="header col s12 light">Selecione abaixo o produto para suporte</h5>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="section">
            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m3">
                    <div class="icon-block center">
                        <h2 class="light-blue-text"><i class="material-icons md-48 md-bema">store</i></h2>
                        <h5>Bemacash</h5>
                        <p class="light">PDV completo com  que irá revolucionar a gestão da sua loja. Organize as informações dos seus produtos, controle os processos de compra e venda e deixe tudo mais bonito e organizado com equipamentos de qualidade compactos e modernos. </p>
                    </div>
                    <div class="col s12 m3 show-on-small hide-on-med-and-up">
                        <center>
                            <a class="waves-effect waves-light btn-large orange" onClick="bemacash()">Iniciar o chat</a>
                        </center>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="icon-block center">
                        <h2 class="light-blue-text"><i class="material-icons md-48 md-manufatura">build</i></h2>
                        <h5>Fly01 Manufatura (First)</h5>
                        <p class="light">Sistema de gestção ideal para você ter controle total do seu negócio e produzir mais. <br><br></p>
                    </div>
                    <div class="col s12 m3 show-on-small hide-on-med-and-up">
                        <center>
                            <a class="waves-effect waves-light btn-large" onClick="manufatura()">Iniciar o chat</a>
                        </center>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="icon-block center">
                        <h2 class="light-blue-text"><i class="material-icons md-48 md-varejo">shopping_cart</i></h2>
                        <h5>Fly01 Varejo (Vitrine)</h5>
                        <p class="light">Uma solução fácil de usar, com vasta gama de recursos, proporcionando controle nos processos de compras e estoque, financeiro, faturamento e e-commerce propiciando redução de custos operacionais. <br></p>
                    </div>
                    <div class="col s12 m3 show-on-small hide-on-med-and-up">
                        <center>
                            <a class="waves-effect waves-light btn-large blue" onClick="varejo()">Iniciar o chat</a>
                        </center>
                    </div>
                </div>
                <div class="col s12 m3">
                    <div class="icon-block center">
                        <h2 class="light-blue-text"><i class="material-icons md-48 md-saude">healing</i></h2>
                        <h5>Fly01 Saúde</h5>
                        <p class="light">Com Fly01, você tem acesso à agenda e prontuário de onde estiver, com sincronização automática das informações inseridas pelo médico e pela secretária. <br></p>
                    </div>
                    <div class="col s12 m3 show-on-small hide-on-med-and-up">
                        <center>
                            <a class="waves-effect waves-light btn-large pink" onClick="saude()">Iniciar o chat</a>
                        </center>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m3 hide-on-small-only">
                    <center>
                        <a class="waves-effect waves-light btn-large orange" onClick="bemacash()">Iniciar o chat</a>
                    </center>
                </div>
                <div class="col s12 m3 hide-on-small-only">
                    <center>
                        <a class="waves-effect waves-light btn-large" onClick="manufatura()">Iniciar o chat</a>
                    </center>
                </div>
                <div class="col s12 m3 hide-on-small-only">
                    <center>
                        <a class="waves-effect waves-light btn-large blue" onClick="varejo()">Iniciar o chat</a>
                    </center>
                </div>
                <div class="col s12 m3 hide-on-small-only">
                    <center>
                        <a class="waves-effect waves-light btn-large pink" onClick="saude()">Iniciar o chat</a>
                    </center>
                </div>
            </div>
        </div>
        <br><br>
    </div>
    <footer class="page-footer" style="background-color: #F79321;">
        <div class="container">
            <div class="row">
                <div class="col l2 s2 m2">
                    <div class="footer-logo">
                        <img alt="" class="img-responsive totvs-logo" src="https://totvsdigital.azureedge.net/prod/images/default-source/totvs/default-album/logo-totvs.png?sfvrsn=0">
                    </div>
                    <div class="copyright visible-xs">
                        <div class="text-center">Copyright TOTVS 2018</div>
                    </div>
                </div>
                <div class="col l3 s12">
                    <div class="footerlist">
                        <ul>
                            <li><a href="https://www.totvs.com/sobre-a-totvs">Institucional</a></li>
                            <li><a href="https://www.totvs.com/presenca">Encontre a TOTVS</a></li>
                            <li><a href="https://www.totvs.com/trabalhe-conosco">Carreiras</a></li>
                            <li><a href="https://www.totvs.com/imprensa">Assessoria de Imprensa</a></li>
                            <li><a href="http://www.totvslabs.com/">TOTVS Labs</a></li>
                            <li><a href="http://ri.totvs.com/">Relações com Investidores</a></li>
                            <li><a href="http://www.totvs.com/eventos">Eventos</a></li>
                            <li><a href="https://www.totvs.com/biblioteca/demos">Demonstrações Virtuais</a></li>
                            <li><a href="https://www.totvs.com/eticatotvs">Canal de Ética e Conduta</a></li>
                            <li><a href="https://www.totvs.com/transformacao-digital">Transformação Digital</a></li>
                        </ul>
                    </div>
                </div>
                <div class="container">
                    <div class="section">
                        <!--   Icon Section   -->
                        <div class="row">
                            <div class="col s12 m3">
                                <h5 class="white-text">Connect</h5>
                                <div class="social">
                                    <ul class="social-media">
                                        <li>
                                            <a href="https://www.linkedin.com/company/totvs" title="Linkedin" target="_blank">
                                                <img alt="linkedIn" src="https://totvsdigital.azureedge.net/prod/images/default-source/icons/social-icons/linkedin.png?sfvrsn=8">
                                                Linkedin
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/totvs" title="Facebook" target="_blank">
                                                <img alt="facebook" src="https://totvsdigital.azureedge.net/prod/images/default-source/icons/social-icons/facebook.png?sfvrsn=6">
                                                Facebook
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/totvs" title="Twitter" target="_blank">
                                                <img alt="" src="https://totvsdigital.azureedge.net/prod/images/default-source/icons/social-icons/twitter.png?sfvrsn=4">
                                                Twitter
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.youtube.com/totvs" title="Youtube" target="_blank">
                                                <img alt="youtube" src="https://totvsdigital.azureedge.net/prod/images/default-source/icons/social-icons/youtube.png?sfvrsn=6">
                                                Youtube
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://pt.slideshare.net/totvs" title="Slideshare" target="_blank">
                                                <img alt="Slideshare" src="https://totvsdigital.azureedge.net/prod/images/default-source/icons/social-icons/slideshare.png?sfvrsn=6">
                                                Slideshare
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="row totvs-site-info">
                                        <ul>
                                            <li><a href="/politica-de-privacidade">Política de Privacidade&nbsp;&nbsp;</a></li>
                                            <li><a href="/termos-de-uso">Termos de Uso&nbsp;&nbsp;</a></li>
                                        </ul>
                                    </div>
                                    <div id="footerTranslate" style="display: none">Âncora</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="chat.js"></script>
</body>
</html>