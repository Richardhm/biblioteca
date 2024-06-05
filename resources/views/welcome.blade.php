<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Online</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
<!-- Navbar -->
<nav class="bg-white shadow-lg fixed w-full z-10">
    <div class="max-w-7xl mx-auto px-4 py-4">
        <div class="flex justify-between items-center">
            <a href="/" class="text-2xl font-semibold text-gray-800">Biblioteca Online</a>
            <div>
                <a href="#funciona" class="text-gray-800 hover:text-gray-600 mx-4">Como Funciona</a>
                <a href="#vantagens" class="text-gray-800 hover:text-gray-600 mx-4">Vantagens</a>
                <a href="#precos" class="text-gray-800 hover:text-gray-600 mx-4">Preços</a>
                <a href="#contato" class="text-gray-800 hover:text-gray-600 mx-4">Contato</a>
            </div>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<!-- Hero Section -->
<section class="bg-blue-500 text-white flex items-center justify-center min-h-screen" id="hero">
    <div class="max-w-7xl mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Left Column: Text and Button -->
        <div class="flex flex-col justify-center items-start">
            <h1 class="text-5xl font-bold mb-4">Biblioteca Online de Trabalhos Acadêmicos</h1>
            <p class="text-xl mb-8">Acesse uma vasta coleção de trabalhos acadêmicos por apenas R$5,99 por mês.</p>
            <a href="#precos" class="bg-white text-blue-500 px-6 py-3 rounded-full text-lg font-semibold">Assine Agora</a>
        </div>
        <!-- Right Column: Image -->
        <div class="flex justify-center items-center">
            <img src="{{asset('biblioteca.jpg')}}" alt="Biblioteca" class="w-full h-auto rounded-lg shadow-lg">
        </div>
    </div>
</section>


<!-- Como Funciona -->
<section id="funciona" class="flex items-center justify-center min-h-screen py-20">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl font-bold mb-6">Como Funciona</h2>
        <p class="text-lg mb-6">Nossa plataforma permite que você faça o download de uma vasta biblioteca de trabalhos acadêmicos por uma assinatura mensal de R$5,99. Basta escolher a categoria de seu interesse, selecionar os trabalhos e fazer o download.</p>
    </div>
</section>

<!-- Vantagens -->
<section id="vantagens" class="bg-gray-200 flex items-center justify-center min-h-screen py-20">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl font-bold mb-6">Vantagens</h2>
        <ul class="text-lg list-disc list-inside mx-auto">
            <li>Acesso ilimitado a milhares de trabalhos acadêmicos.</li>
            <li>Economize tempo e dinheiro.</li>
            <li>Conteúdo atualizado regularmente.</li>
            <li>Suporte ao cliente 24/7.</li>
        </ul>
    </div>
</section>

<!-- Tabela de Preços -->
<section id="precos" class="flex items-center justify-center min-h-screen py-20">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl font-bold mb-6">Tabela de Preços</h2>
        <div class="bg-white shadow-lg p-8 rounded-lg inline-block">
            <h3 class="text-2xl font-semibold mb-2">Plano Mensal</h3>
            <p class="text-xl mb-4">R$5,99 por mês</p>
            <a href="" class="bg-blue-500 text-white px-6 py-3 rounded-full text-lg font-semibold">Assine Agora</a>
        </div>
    </div>
</section>

<!-- Contato -->
<section id="contato" class="bg-gray-200 flex items-center justify-center min-h-screen py-20">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl font-bold mb-6">Contato</h2>
        <form action="" method="POST" class="max-w-lg mx-auto">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label for="message" class="block text-sm font-medium text-gray-700">Mensagem</label>
                <textarea name="message" id="message" rows="4" class="mt-1 block w-full" required></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Enviar</button>
        </form>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-4">
    <div class="max-w-7xl mx-auto text-center">
        <p>&copy; 2024 Biblioteca Online. Todos os direitos reservados.</p>
    </div>
</footer>
</body>
</html>
