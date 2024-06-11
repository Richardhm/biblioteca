<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Online</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {background-color: rgb(9, 116, 122);}
        .imagem-header {width: 80%;border-radius: 4%;height: 95%;}
        @media (max-width: 640px) {
            #categorias .content_categorias_image {width: 40%;margin-right: 1%;}
            #categorias .content_categorias_image img {width:100%;}

        }

        /*section {*/
        /*    animation: appear 1ms ease-in-out;*/
        /*    animation-timeline: view();*/
        /*    animation-range: cover 0% cover 50%;*/
        /*}*/

        /*@keyframes appear {*/
        /*    from {*/
        /*        opacity: 0;*/
        /*        translate: -100vw 0;*/
        /*    }*/
        /*    to {*/
        /*        opacity: 1;*/
        /*        translate: 0 0;*/
        /*    }*/
        /*}*/




    </style>
</head>
<body class="text-gray-900 sm:flex sm:flex-col">

<header class="flex items-center w-full justify-between box-border">
    <div class="bg-red-600 flex p-10 box-border">
        <img src="{{asset('logo.png')}}" alt="Pesquisas Academicas" style="width:50%;height:30%;">
    </div>
    <nav>
        <ul class="flex box-border">
            <li class="">
                <a class="text-2xl text-white" href="#">Inicio</a>
            </li>
            <li class="mx-5">
                <a class="text-2xl text-white" href="#">Login</a>
            </li>
        </ul>
    </nav>
</header>




<!-- Hero Section -->
<main class="text-white flex items-center justify-around h-screen w-full px-5 lg:px-52" id="hero">
    <div class="flex flex-col-reverse lg:flex-row items-center h-full w-full">
        <div class="flex flex-col w-full lg:w-1/3 mb-5 lg:mb-0">
            <h5 class="text-2xl lg:text-6xl font-bold mb-1 lg:mb-4">
                Pesquisas Acadêmicas
            </h5>
            <p class="header-descricao text-lg lg:text-2xl my-5 text-justify lg:text-left">
                Encontre pesquisas acadêmicas e escolares em diversos
                temas e assuntos para auxiliá-lo na finalização do seu
                TCC, trabalhos de faculdade, pós-graduação, ensino médio
                e também para ajudar nos estudos para concursos públicos.
            </p>
            <p class="flex text-center justify-center mb-4 lg:mb-0">
                <a href="#precos" class="header-link bg-white text-white flex rounded-full text-sm font-semibold bg-red-800 lg:px-10 p-2 lg:px-20">Assine Já! Somente R$ 9,99 mensais</a>
            </p>
        </div>
        <div class="lg:flex lg:h-full lg:w-2/3 lg:justify-end">
            <img alt="MacBook" src="{{asset('header.jpg')}}" class="imagem-header" />
        </div>
    </div>
</main>
<!-- Fim Hero Section -->

<!-- Sobre Nós -->
<section id="funciona" class="flex items-center justify-center h-screen lg:px-5 lg:py-20 w-full">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-4xl lg:text-7xl font-bold mb-10 text-white">Sobre Nós</h2>
        <p class="text-lg lg:text-3xl lg:my-20 lg:px-48 text-white text-justify px-4">
            Bem-vindo ao Pesquisas Acadêmicas, o seu site de referência para pesquisas acadêmicas e escolares. Oferecemos uma ampla variedade de temas
            e assuntos comumente solicitados em faculdades, pós-graduação, escolas de ensino médio e concursos públicos.
        </p>
        <div class="text-center flex justify-center lg:px-0 px-3">
            <img alt="" src="{{asset('sobre-nos.png')}}" class="rounded-2xl lg:w-3/4 sm:w-3/4">
        </div>
    </div>
</section>
<!-- Fim Sobre Nós -->


<section id="categorias" class="flex flex-col items-center mt-3 sm:py-20 lg:px-2 lg:py-20 mb-20 w-full">
    <h2 class="lg:text-7xl font-bold text-white mb-16 text-center text-2xl">Exemplos de Categorias de Pesquisa</h2>
    <div class="flex flex-wrap justify-center items-center w-full">
        <div class="flex flex-wrap justify-center w-full lg:w-11/12 sm:full">
            <div class="w-full flex flex-wrap mb-5 justify-center">
                <div class="flex mb-4 lg:w-1/12 sm:w-1/2 content_categorias_image">
                    <img alt="" src="{{asset('livro-arquitetura.png')}}" class="rounded-lg w-full h-full">
                </div>
                <div class="flex mb-4 lg:w-1/12 sm:w-1/2 content_categorias_image">
                    <img alt="" src="{{asset('livro-politica.png')}}" class="rounded-lg w-full h-full">
                </div>
                <div class="flex mb-4 lg:w-1/12 sm:w-1/2 content_categorias_image">
                    <img alt="" src="{{asset('livro-cinema.png')}}" class="rounded-lg w-full h-full">
                </div>
                <div class="flex mb-4 lg:w-1/12 sm:w-1/2 content_categorias_image">
                    <img alt="" src="{{asset('livro-economia.png')}}" class="rounded-lg w-full h-full">
                </div>
                <div class="flex mb-4 lg:w-1/12 sm:w-1/2 content_categorias_image">
                    <img alt="" src="{{asset('livro-politica.png')}}" class="rounded-lg w-full h-full">
                </div>
                <div class="flex mb-4 lg:w-1/12 sm:w-1/2 content_categorias_image">
                    <img alt="" src="{{asset('livro-educaaao.png')}}" class="rounded-lg w-full h-full">
                </div>
                <div class="lg:flex mb-4 lg:w-1/12 hidden content_categorias_image ">
                    <img alt="" src="{{asset('livro-finanassas.png')}}" class="rounded-lg w-full h-full">
                </div>

            </div>
            <div class="w-full flex flex-wrap mb-5 justify-center">

                <div class="flex mb-4 lg:w-1/12 sm:w-1/2 content_categorias_image">
                    <img alt="" src="{{asset('livro-meio-ambiente.png')}}" class="rounded-lg w-full h-full">
                </div>
                <div class="flex mb-4 lg:w-1/12 sm:w-1/2 content_categorias_image">
                    <img alt="" src="{{asset('livro-marketing.png')}}" class="rounded-lg w-full h-full">
                </div>
                <div class="flex mb-4 lg:w-1/12 sm:w-1/2 content_categorias_image">
                    <img alt="" src="{{asset('livro-sustentabilidade.png')}}" class="rounded-lg w-full h-full">
                </div>
                <div class="flex mb-4 lg:w-1/12 sm:w-1/2 content_categorias_image">
                    <img alt="" src="{{asset('livro-religiao.png')}}" class="rounded-lg w-full h-full">
                </div>
                <div class="flex mb-4 lg:w-1/12 sm:w-1/2 content_categorias_image">
                    <img alt="" src="{{asset('livro-medicina.png')}}" class="rounded-lg w-full h-full">
                </div>
                <div class="flex mb-4 lg:w-1/12 sm:w-1/2 content_categorias_image">
                    <img alt="" src="{{asset('livro-meio-ambiente.png')}}" class="rounded-lg w-full h-full">
                </div>
                <div class="lg:flex mb-4 lg:w-1/12 hidden content_categorias_image">
                    <img alt="" src="{{asset('livro-tecnologia.png')}}" class="rounded-lg w-full h-full">
                </div>

            </div>
            <p class="w-50 text-center my-5 sm:px-3">
                <a href="#precos" class="header-link bg-white text-white flex rounded-full text-sm font-semibold bg-red-800 lg:px-10 p-2 lg:px-20">Assine Já! Somente R$ 9,99 mensais</a>
            </p>
            <div class="flex flex-wrap justify-around mt-5 w-full">
                <!-- Testimonial items here -->
                <div class="text-center text-white m-1 w-full lg:w-1/5">
                    <img src="{{asset('arredondado.png')}}" class="rounded-full w-24 mx-auto" alt="">
                    <p class="px-3 lg:px-12">O site Pesquisas Acadêmicas me ajudou muito com os trabalhos da faculdade. Recomendo</p>
                </div>
                <div class="text-center text-white m-1 w-full lg:w-1/5">
                    <img src="{{asset('arredondado-2.png')}}" class="rounded-full w-24 mx-auto" alt="">
                    <p class="px-3 lg:px-12">Encontrei todas as informações que precisava para o meu TCC. Muito Obrigado!</p>
                </div>
                <div class="text-center text-white m-1 w-full lg:w-1/5">
                    <img src="{{asset('arredondado-3.png')}}" class="rounded-full w-24 mx-auto" alt="">
                    <p class="px-3 lg:px-12">As pesquisas do site são de alta qualidade e me ajudaram a passar em um concurso público.</p>
                </div>
                <div class="text-center text-white sm:hidden m-1 w-full lg:w-1/5">
                    <img src="{{asset('arredondado-4.png')}}" class="rounded-full w-24 mx-auto" alt="">
                    <p class="px-3 lg:px-12">Ótimo conteúdo para quem precisa de ajuda com pesquisas acadêmicas. Super recomendo!</p>
                </div>
                <!-- Repeat testimonial items -->
            </div>
        </div>
    </div>
</section>














<!-- Pesquisas Acadêmicas Online -->
<section id="vantagens" class="flex lg: flex-wrap lg:px-5 sm:py-20 lg:mt-20 lg:h-screen w-full">
    <h3 class="lg:text-4xl text-white font-bold text-center justify-center w-full flex">Pesquisas Acadêmicas Online</h3>

    <div class="flex flex-wrap w-full">

        <div class="flex flex-wrap sm:w-full text-center p-5 lg:w-4/12 lg:px-8">
            <h4 class="font-bold mb-6 text-white w-full lg:text-4xl">Temas Variados Disponíveis</h4>
            <p class="text-white text-justify w-full lg:text-2xl">
                Explore nossa plataforma de pesquisas acadêmicas e escolares com uma ampla variedade de temas e assuntos para auxiliar
                em seus trabalhos acadêmicos, concursos públicos e mais.
            </p>
        </div>

        <div class="flex flex-wrap sm:w-full text-center p-5 lg:w-4/12 lg:px-8">
            <h4 class="font-bold mb-6 text-white w-full lg:text-4xl">Suporte Especializado Disponível</h4>
            <p class="text-white text-justify w-full lg:text-2xl">
                Conte com nossa equipe especializada para auxiliá-lo em suas pesquisas acadêmicas, tirar dúvidas e
                encontrar as melhores fontes de informação para seus trabalhos.
            </p>
        </div>

        <div class="flex flex-wrap sm:w-full text-center p-5 lg:w-4/12 lg:px-8">
            <h4 class="font-bold mb-6 text-white w-full lg:text-4xl">Facilidade de Navegação</h4>
            <p class="text-white text-justify w-full lg:text-2xl">
                Navegue de forma simples e intuitiva em nosso site, encontre rapidamente o que procura e
                tenha acesso a conteúdos relevantes para seus estudos e pesquisas.
            </p>
        </div>

    </div>



</section>




<section id="contato" class="flex justify-center lg:py-20 sm:w-full">
    <div class="flex flex-wrap w-full">
        <h2 class="lg:text-4xl text-2xl font-bold text-center text-white sm:w-full mx-auto">Entre em Contato</h2>
        <p class="text-center my-6 text-white sm:w-full">Estamos aqui para ajudar com suas pesquisas acadêmicas</p>
        <p class="text-center text-white mx-auto sm:w-full">vendas.bmsys@gmail.com</p>

        <form action="" method="POST" class="flex flex-wrap sm:w-full lg:w-full w-10/12 mx-auto">
            @csrf
            <div class="mb-4 w-full">
                <label for="email" class="block font-medium text-white">Email:</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="mb-4 w-full">
                <label for="message" class="block font-medium text-white">Mensagem:</label>
                <textarea name="message" id="message" rows="4" class="mt-1 block w-full rounded-lg"></textarea>
            </div>
            <button type='submit' class='bg-blue-500 btn-block text-white px-4 py-2 rounded-lg w-full'>Enviar</button>
        </form>
    </div>
</section>

<!-- Projetos de Pesquisa Escolar -->
<section id="pesquisa" class="flex flex-col items-center lg:py-10 h-screen lg:px-5 w-full">
    <h2 class="text-2xl lg:text-4xl font-bold lg:mt-6 text-center mb-6 text-white">Projetos de Pesquisa Escolar</h2>
    <div class="flex flex-wrap justify-center w-full">
        <div class="flex flex-wrap w-full lg:w-1/2 justify-end">
            <div class="flex flex-col mb-8 justify-end">
                <img alt="" src="{{asset('foto-g1.jpeg')}}" class="rounded-lg px-2 lg:w-2/3 sm:w-full h-full mb-4 flex self-end">
                <p class="lg:text-3xl text-white lg:text-right sm:text-center sm:w-full ml-2 lg:ml-0">Site de Pesquisas Acadêmicas</p>
            </div>
            <div class="flex flex-col mb-8 justify-end">
                <img alt="" src="{{asset('foto-g2.jpeg')}}" class="rounded-lg px-2 lg:w-1/2 sm:w-full h-full mb-4 flex self-end">
                <p class="lg:text-3xl text-white lg:text-right sm:text-center sm:w-full ml-2 lg:ml-0">Exemplo de Projeto de Pesquisa</p>
            </div>
        </div>
        <div class="flex flex-wrap w-full lg:w-1/2">
            <div class="flex flex-col mb-8 justify-start ml-3">
                <img alt="" src="{{asset('foto-g3.jpeg')}}" class="rounded-lg lg:w-1/2 sm:w-full h-full mb-4 flex self-start">
                <p class="lg:text-3xl text-white lg:text-left sm:text-center sm:w-full">Temas de Pesquisa Variados</p>
            </div>
            <div class="flex flex-col mb-8 justify-start ml-3">
                <img alt="" src="{{asset('foto-g4.jpeg')}}" class="rounded-lg lg:w-1/2 sm:w-full h-full mb-4 flex self-start">
                <p class="lg:text-3xl text-white lg:text-left sm:text-center sm:w-full">Ajuda em Trabalhos Acadêmicos</p>
            </div>
        </div>
    </div>
    <div class="w-full flex justify-center mt-5">
        <a href="#precos" class="header-link bg-white text-white flex rounded-full text-sm font-semibold bg-red-800 lg:px-10 p-2 lg:px-20">Assine Já! Somente R$ 9,99 mensais</a>
    </div>
</section>




</body>
</html>
