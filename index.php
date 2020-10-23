<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Start Sistema</title>
		<link rel="icon" href="img/icone.png">        
        <!-- GOOGLE ICONS -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- FONT AWESOME -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<!-- MATERIALIZE CSS -->		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
		<!-- CUSTOM CSS -->
		<link rel="stylesheet" href="css/custom.css">
	</head>
	<body>
    
    <!-- HEADER -->
	<header>
	    <!-- MENU MOBILE -->
		<ul class="side-nav" id="menu-mobile">
			<li><a class="hide-menu" href="#home">Home</a></li>
			<li><a class="hide-menu" href="#sobre">Sobre a Start</a></li>
			<li><a class="hide-menu" href="#produtos">Produtos</a></li>
			
			<li><a class="hide-menu" href="#contato">Contato</a></li>
		</ul>

	    <div class="navbar-fixed">
		<nav class="navbar z-depth-0">
			<div class="nav-wrapper container">
				<h1 class="logo_text">Start Sistema e Segurança </h1>
				<a href=""><img class="logo_img" src="img/logos.png" alt="Centro Boa Forma"></a>

				<ul class="right light hide-on-med-and-down">
					<li><a href="#home">Home</a></li>
					<li><a href="#sobre">Sobre a Start</a></li>
					<li><a href="#produtos">Produtos</a></li>
				
					<li><a href="#contato">Contato</a></li>
				</ul>			

				<a href="#" data-activates="menu-mobile" class="button-collapse right"><i class="material-icons">menu</i></a>
			</div>
		</nav>
		</div>
	</header>
    
    <!-- HOME -->
    <section class="home bloco scrollspy" id="home">
    	<div class="row container banner">
    		<div class="col s12 center">
    			<h2 class="white-text">SOLUÇÕES EM SEGURANÇA</h2>
    			<p class="white-text light">Um novo conceito em sistema de segurança, para condomínio horizontais, verticais, empresariais, trabalhamos com projetos em CFTV e Controle de Acesso de Pessoas e Veículos. Quer experimentar?</p>
    			<div class="row">
    				<a href="#sobre" class="btn btn-large blue-logo"> Sobre nós </a>
    				<a href="#contato" class="btn btn-large white black-text"> Contato </a>
    			</div>
    		</div>
    	</div>
    </section>

    <!-- SOBRE -->
    <section class="sobre bloco scrollspy" id="sobre">
    	<div class="row container">
    		<div class="col s12 center">
    			<h2 class="light titulo">Sobre nós</h2>
    		</div>

    		<div class="col s12 l6">
    			<p class="light">
    		     A Start Sistema e Segurança é uma empresa focada no desenvolvimento de soluções em tecnologia e segurança, trazendo um novo conceito em sistema de segurança, para condomínio horizontais, verticais e empresariais, trabalhamos com projetos em CFTV e Controle de Acesso de Pessoas e Veículos, procuramos levar aos nossos clientes produtos e soluções de alta qualidade.
    			</p>
    		</div>

    		<div class="col s12 l6">
    			<div class="carousel carousel-slider" data-indicators="true">
    				<a href="#" class="carousel-item">
    					<img alt="Imagem institucional" src="img/banner2.jpg">
    				</a>

    				<a href="#" class="carousel-item">
    					<img alt="Imagem institucional" src="img/banner5.jpg">
    				</a>

    				<a href="#" class="carousel-item">
    					<img alt="Imagem institucional" src="img/banner1.jpg">
    				</a>
    			</div>
    		</div>

    	</div>

    	<div class="row blue-logo missao-visao-valores">
    		<div class="container">
    			<article class="item col s12 m4 center">
    				<span class="icon"><i class="material-icons medium">directions_run</i></span>
    				<h3 class="light">Missão</h3>
    				<p class="light">Torna-se referencia no mercado levando aos nossos clientes produtos e soluções de alta qualidade com a máxima eficiência e plena satisfação.
                    </p>    				
    			</article>

    			<article class="item col s12 m4 center">
    				<span class="icon"><i class="material-icons medium">visibility</i></span>
    				<h3 class="light">Visão</h3>
    				<p class="light">Tornar-se referência em sistema de segurança, buscando a excelência dos serviços prestados, além de promover o desenvolvimento técnico de sua equipe.</p>   				
    			</article>

    			<article class="item col s12 m4 center">
    				<span class="icon"><i class="material-icons medium">grade</i></span>
    				<h3 class="light">Valores</h3>
    				<p class="light">
    					 • Agir com ética frente aos clientes e colaboradores.<br>
    					 • Tornar o ambiente de trabalho o mais familiar possível.<br>
    					 • Priorizar a qualidade e excelência do atendimento, valorizando e qualificando a equipe. 
    				</p>    				
    			</article>
    		</div>
    	</div>
    </section>

    <!-- PRODUTOS -->
    <section class="produtos bloco scrollspy" id="produtos">
    	<div class="row container">
    		<div class="col s12 center">
    			<h2 class="light titulo white-text"> Produtos </h2>
    			<p class="light paragrafo white-text">  Conheça nossa linha de produtos.</p>
    		</div>
    	</div> 

    	<div class="row container">    	
    	    <!-- MA300 -->
    		<article class="col s12 m6 l3">
    			<div class="card">
    				<div class="card-image">
    					<img src="img/MA300.jpg" alt="Ma300" class="materialboxed">
    					<a href="#ma300-modal" class="btn btn-floating halfway-fab blue-logo modal-trigger">
    						<i class="material-icons">more_horiz</i>
    					</a>    				
    				</div>
    				<div class="card-content">
    					<h3 class="card-title"> Controladora de Acesso Ma300 </h3>
    					<p class="light"> MA300 é um dos leitores biométricos de impressão digital mais inovadores para aplicações de controle de acesso.Sua caixa metálica possui classificação IP65.</p>
    				</div>
    			</div>    			
    		</article>

    		<!-- MODAL MA300 -->
    		<div class="modal" id="ma300-modal">
    			<div class="modal-content">
    				<h5 class="light"> O que é MA300? </h5>
    				<p class="light black-text"> MA300 é um dos leitores biométricos de impressão digital mais inovadores para aplicações de controle de acesso. Oferecendo desempenhos incomparáveis e com um avançado algoritmo de impressão digital ZK, apresenta maior confiabilidade, precisão e excelente velocidade de correspondência. Sua caixa metálica possui classificação IP65 que permite que seja resistente à água, poeira e outros danos externos. O MA300 podeser instalado de maneira independente ou com qualquer painel de terceiros que suporte wiegand de 26 bits. O usuário pode ser registrado pelo cartão do administrador quando o dispositivo trabalha no modo autônomo. Conectividade TCP / IP e RS485 estão disponíveis. </p>    				
    			</div>

    			<div class="modal-footer">
    				<a class="btn blue-logo modal-action modal-close"> Sair </a>
    			</div>
    		</div>
            
            <!-- F16 -->
    		<article class="col s12 m6 l3">
    			<div class="card">
    				<div class="card-image">
    					<img src="img/F16.jpg" alt="F16" class="materialboxed">
    					<a href="#F16-modal" class="btn btn-floating halfway-fab blue-logo modal-trigger">
    						<i class="material-icons">more_horiz</i>
    					</a>    				
    				</div>
    				<div class="card-content">
    					<h3 class="card-title"> Controladora de Acesso F16 </h3>
    					<p class="light"> O F16 é um terminal de controle de acesso por impressão digital com leitor de proximidade integrado (EM). É classificado como IP65, garantindo proteção à água.</p>
    				</div>
    			</div>    			
    		</article>

    		<!-- MODAL F16 -->
    		<div class="modal" id="F16-modal">
    			<div class="modal-content">
                    <h5 class="light"> O que é F16? </h5>
                    <p class="light black-text"> O F16 é um terminal de controle de acesso por impressão digital com leitor de proximidade integrado (EM). É classificado como IP65, garantindo proteção à água, poeira e outros danos externos. Sua instalação é prática e rápida, se conectando em sua rede com portas seriais Ethernet e RS485. A porta Weigand-OUT permite a conexão do leitor ao ZK ou a qualquer outro painel de controle de acesso. Usando a porta Weigand-In, você pode se conectar a qualquer leitor de cartão para autenticação na entrada e na saída. </p>
    			</div>

    			<div class="modal-footer">
                    <a class="btn blue-logo modal-action modal-close"> Sair </a>
    			</div>
    		</div>
            </article>
            
            <!-- FACE7B -->
            <article class="col s12 m6 l3">
                <div class="card">
                    <div class="card-image">
                        <img src="img/Face7B.jpg" alt="Face7B" class="materialboxed">
                        <a href="#Face7B-modal" class="btn btn-floating halfway-fab blue-logo modal-trigger">
                            <i class="material-icons">more_horiz</i>
                        </a>                    
                    </div>
                    <div class="card-content">
                        <h3 class="card-title"> Controladora de Acesso Face 7B </h3>
                        <p class="light"> O FaceDepot-7B é um terminal de controle de acesso facial, equipado com o mais recente algoritmo de aprendizado de reconhecimento facial. </p>
                    </div>
                </div>              
            </article>

            <!-- MODAL FACE7B -->
            <div class="modal" id="Face7B-modal">
                <div class="modal-content">
                    <h5 class="light"> O que é Face7B? </h5>
                    <p class="light black-text"> O FaceDepot-7B é um terminal de controle de acesso facial, equipado com o mais recente algoritmo de aprendizado de reconhecimento facial que permite um reconhecimento mais rápido e preciso, melhor experiência de utilização, em que os usuários apenas passam e são verificados facilmente sem parar e esperar.
Com o mais recente algoritmo facial, o FaceDepot-7B suporta no máximo 10.000 usuários faciais, capaz de detectar se o rosto é um rosto real ou uma foto, melhorando o nível de segurança de verificação. </p>
                </div>

                <div class="modal-footer">
                    <a class="btn blue-logo modal-action modal-close"> Sair </a>
                </div>
            </div>
            </article>
            
            <!-- SPEED H5 -->
            <article class="col s12 m6 l3">
                <div class="card">
                    <div class="card-image">
                        <img src="img/Speed H5.jpg" alt="Speed H5" class="materialboxed">
                        <a href="#Speed H5-modal" class="btn btn-floating halfway-fab blue-logo modal-trigger">
                            <i class="material-icons">more_horiz</i>
                        </a>                    
                    </div>
                    <div class="card-content">
                        <h3 class="card-title"> Controladora de Acesso Speed H5 </h3>
                        <p class="light"> O SpeedFace-H5 é um terminal de controle de acesso facial, equipado com o mais recente algoritmo de aprendizado de reconhecimento facial. </p>
                    </div>
                </div>              
            </article>

            <!-- MODAL SPEED H5 -->
            <div class="modal" id="Speed H5-modal">
                <div class="modal-content">
                    <h5 class="light"> O que é Speed H5? </h5>
                    <p class="light black-text"> O SpeedFace-H5 é um terminal de controle de acesso facial, equipado com o mais recente algoritmo de aprendizado de reconhecimento facial que permite um reconhecimento mais rápido e preciso, melhor experiência de utilização, em que os usuários apenas passam e são verificados facilmente sem parar e esperar.
Com o mais recente algoritmo facial, o SpeedFace-H5 suporta 6.000 (máximo 10.000) usuários faciais, capaz de detectar se o rosto é um rosto real ou uma foto, melhorando o nível de segurança de verificação. O SpeedFace-H5 é ideal para centros de conferência, instituições financeiras, entradas de escolas, áreas críticas etc. </p>
                </div>

                <div class="modal-footer">
                    <a class="btn blue-logo modal-action modal-close"> Sair </a>
                </div>
            </div>
            </article>               	
    </section>


    <!-- CONTATO -->
    <section class="contato bloco scrollspy" id="contato">
        <div class="row container">
            <div class="col s12 center">
                <h2 class="titulo light black-text"> Contato </h2>
            </div>

           <div class="col s12 m6 l4 hide-on-med-only ">
                <div class="mapa transparent">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.0018814119317!2d-34.93505288596912!3d-8.202562794096723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7aae170fd0cbdcb%3A0x1490835ec1fb86f4!2sStart%20Sistema%20e%20Seguran%C3%A7a!5e0!3m2!1spt-BR!2sbr!4v1585162664429!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
           </div>

           <div class="col s12 m6 l4">
                <div class="informacoes white-text">
                    <h4> Redes sociais </h4>
                    <p class="light"> Fique por dentro das novidades, receba dicas, ou simplesmente mostre ao mundo que você faz parte desse projeto sensacional! </p>
                    <a href="#" class="btn-floating blue-logo"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="btn-floating blue-logo"><i class="fa fa-google"></i></a>
                    <a href="#" class="btn-floating blue-logo"><i class="fa fa-twitter"></i></a>

                    <h4> Endereço </h4>
                    <p class="light"> Avenida Abdo Cabus, 1630 <br>
                    Candeias, Jaboatão dos Guararapes - PE</p>

                    <h4> Contatos </h4>
                    <p class="light">
                        (81) 9.9950-5565 <br>
                        (81) 9.8134-0782 
                         
                    </p>

                </div>
           </div>

           <div class="col s12 m6 l4">
                <div class="formulario white black-text">
                    <h4> Fale conosco </h4>
                    <p class="light">  Dúvidas, criticas ou sujestões? Entre em contato conosco, seu feedback é muito importante. </p>

                    <form action="enviar-email.php" method="post">

                        <div class="input-field">
                            <input type="text" name="name" id="name">
                            <label for="name">Seu nome</label>
                        </div>

                        <div class="input-field">
                            <input type="email" name="email" id="email">
                            <label for="email">Seu email</label>
                        </div>

                        <div class="input-field">
                            <input type="text" name="subject" id="subject">
                            <label for="subject">Assunto</label>
                        </div>

                        <div class="input-field">
                            <textarea id="message" name="message" class="materialize-textarea"></textarea>
                            <label for="message">Mensagem</label>
                        </div>

                        <button class="btn blue-logo" type="submit"> Enviar </button>

                    </form>
                </div>
           </div>

        </div>
    </section>

    <!-- DEPOIMENTOS 
    <div class="depoimentos blue-logo">
        <div class="row container">
            <div class="col s12 center">
                <h2 class="titulo white-text light">Depoimentos</h2>
            </div>

            <div class="col s12 m4 center">
                <img src="img/depo1.jpg" class="circle responsive-img" alt="Depoimento um">
                <p class="light white-text"> "Conheci o treinamento funcional e a metodologia Centro Boa Forma por indicação de um amigo. Execelentes profissionais e super atenciosos!"</p>
                <h4 class="light white-text">Felipe Souza</h4>
                <p class="white-text">
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i> 
                    <i class="material-icons">star</i> 
                    <i class="material-icons">star</i> 
                    <i class="material-icons">star</i>  
                </p>
            </div>

            <div class="col s12 m4 center">
                <img src="img/depo2.jpg" class="circle responsive-img" alt="Depoimento de Bruno">
                <p class="light white-text"> "Gostei muito da oficina e das aulas, superou minhas expectativas. A empresa e os treinamentos foram ótimos!"</p>
                <h4 class="light white-text">Bruno Valério</h4>
                <p class="white-text">
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i> 
                    <i class="material-icons">star</i> 
                    <i class="material-icons">star</i> 
                    <i class="material-icons">star</i>  
                </p>
            </div>

            <div class="col s12 m4 center">
                <img src="img/depo3.jpg" class="circle responsive-img" alt="Depoimento um">
                <p class="light white-text"> "Treinar com motivação e satisfação pelos resultados obtidos são os motivos que me conquistaram e me mantém no Centro Boa Forma."</p>
                <h4 class="light white-text">Joana Souza</h4>
                <p class="white-text">
                    <i class="material-icons">star</i>
                    <i class="material-icons">star</i> 
                    <i class="material-icons">star</i> 
                    <i class="material-icons">star</i> 
                    <i class="material-icons">star</i>  
                </p>
            </div>

        </div>
    </div> -->

    <!-- RODAPÉ -->
    <footer class="rodape">
        <div class="row container center">
            
            <p class="light white-text">© Start Sistema e Segurança 2019 - Todos os direitos reservados </p>
        </div>        
    </footer>
	
    
    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- MATERIALIZE JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

	<!-- JAVASCRIPT -->
	<script>
	    // INICIALIZAÇÃO 
		$(document).ready(function(){
        	// MENU MOBILE
        	$(".button-collapse").sideNav();
        	// LINK INTERNO
        	$(".scrollspy").scrollSpy({
        		scrollOffset: 0
        	});
        	// CAROUSEL
        	$(".carousel.carousel-slider").carousel({
        		fullWidth:true
        	});
        	// MODAL
        	$(".modal").modal();
            // TABS
            $("ul.tabs").tabs();
            // ESCONDER MENU AO CLICAR
            $(".hide-menu").click(function(){
                $(".button-collapse").sideNav("hide");
            });
            // AUTOPLAY
            function autoplay() {
                $(".carousel").carousel("next");
                setTimeout(autoplay, 4500);
            }

            autoplay();

		});        
        // ADICIONANDO NAVCOLOR
		$(window).on("scroll", function(){
			if($(window).scrollTop() > 100) {
				$(".navbar").addClass("nav-color");
			} else {
				$(".navbar").removeClass("nav-color");
			}
		});
	</script>    

        <?php
         // Colar na index.php o bloco abaixo
            if(isset($_GET['status'])):
                if($_GET['status'] == "sucesso"):
                echo "<script>Materialize.toast('Enviado com sucesso!', 4000);</script>";
                else:
                echo "<script>Materialize.toast('Erro ao enviar',4000);</script>";
                endif;
            endif;
        ?>

	</body>
</html>