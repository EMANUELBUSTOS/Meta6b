<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Comercio Universitario Transacción Interna</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 font-sans">

    <!-- Header estilo Meta -->
    <header class="w-full bg-gradient-to-r from-blue-700 via-blue-600 to-blue-500 shadow-lg py-6">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-white drop-shadow-lg">
                Sistema de Comercio Universitario Transacción Interna
            </h1>
            <nav class="mt-5 flex justify-center gap-4 flex-wrap">
                <button onclick="showSection('user-stories')"
                    class="px-5 py-2 bg-white text-blue-700 font-semibold rounded-full shadow-md hover:shadow-xl transition transform hover:-translate-y-1">
                    Historias de usuario
                </button>
                <button onclick="showSection('interfaces')"
                    class="px-5 py-2 bg-white text-blue-700 font-semibold rounded-full shadow-md hover:shadow-xl transition transform hover:-translate-y-1">
                    Diseño de interfaces
                </button>
            </nav>
        </div>
    </header>

    <!-- Main content -->
    <main class="container mx-auto mt-10 px-4" id="main-content"></main>

    <script>
        const userStoriesHTML = `
      <h2 class="text-2xl md:text-3xl font-semibold text-center text-blue-800 mb-8">Historias de usuario - Grupo Meta</h2>
      <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
        
        <div class="bg-gradient-to-br from-blue-100 to-blue-200 p-6 rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition">
          <div class="font-bold text-lg mb-2 border-b border-blue-300 pb-2">Aldo Bustos - Scrum Master</div>
          <p><span class="font-semibold text-blue-700">Como</span> desarrollador,</p>
          <p><span class="font-semibold text-blue-700">Quiero</span> implementar un login seguro con validación de usuarios,</p>
          <p><span class="font-semibold text-blue-700">Para</span> garantizar que solo los estudiantes de la universidad accedan a la app.</p>
        </div>

        <div class="bg-gradient-to-br from-white to-blue-50 p-6 rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition">
          <div class="font-bold text-lg mb-2 border-b border-blue-200 pb-2">Johnny Tenorio</div>
          <p><span class="font-semibold text-blue-700">Como</span> desarrollador,</p>
          <p><span class="font-semibold text-blue-700">Quiero</span> crear un sistema de publicación de productos con categorías y fotos,</p>
          <p><span class="font-semibold text-blue-700">Para</span> que los estudiantes puedan vender sus productos usados de manera organizada.</p>
        </div>

        <div class="bg-gradient-to-br from-white to-blue-50 p-6 rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition">
          <div class="font-bold text-lg mb-2 border-b border-blue-200 pb-2">Daniel Estupiñan</div>
          <p><span class="font-semibold text-blue-700">Como</span> diseñadora de interfaz,</p>
          <p><span class="font-semibold text-blue-700">Quiero</span> crear un buscador y filtros intuitivos dentro de la app,</p>
          <p><span class="font-semibold text-blue-700">Para</span> que los estudiantes encuentren fácilmente los productos que necesitan.</p>
        </div>

        <div class="bg-gradient-to-br from-white to-blue-50 p-6 rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition">
          <div class="font-bold text-lg mb-2 border-b border-blue-200 pb-2">Katty Mero</div>
          <p><span class="font-semibold text-blue-700">Como</span> usuario,</p>
          <p><span class="font-semibold text-blue-700">Quiero</span> calificar y dejar reseñas de productos,</p>
          <p><span class="font-semibold text-blue-700">Para</span> ayudar a otros estudiantes a decidir sus compras.</p>
        </div>

        <div class="bg-gradient-to-br from-white to-blue-50 p-6 rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition">
          <div class="font-bold text-lg mb-2 border-b border-blue-200 pb-2">Valentina Angulo</div>
          <p><span class="font-semibold text-blue-700">Como</span> estudiante,</p>
          <p><span class="font-semibold text-blue-700">Quiero</span> recibir notificaciones de nuevas ofertas,</p>
          <p><span class="font-semibold text-blue-700">Para</span> no perder ninguna oportunidad de compra.</p>
        </div>

        <div class="bg-gradient-to-br from-white to-blue-50 p-6 rounded-2xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition">
          <div class="font-bold text-lg mb-2 border-b border-blue-200 pb-2">Maicol Quintero</div>
          <p><span class="font-semibold text-blue-700">Como</span> visitante,</p>
          <p><span class="font-semibold text-blue-700">Quiero</span> registrarme en la app desde el login,</p>
          <p><span class="font-semibold text-blue-700">Para</span> empezar a vender y comprar productos internos de la universidad.</p>
        </div>

      </div>
    `;

        const interfacesHTML = `
<h2 class="text-2xl md:text-3xl font-semibold text-center text-gray-700 mb-8">Diseño de interfaces basado en Historias de Usuario</h2>
<div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

  <!-- Login seguro: Aldo Bustos -->
  <div class="bg-blue-100 p-6 rounded-xl shadow hover:shadow-lg transform hover:-translate-y-2 transition text-center">
    <img src="Login.jfif" alt="Diseño de interfaz login" class="w-full h-auto rounded mb-4">
    <p class="italic text-gray-600 mb-2">Diseño de login seguro para que solo estudiantes puedan acceder a la app.</p>
    <p class="font-bold text-gray-800">Autor: Aldo Bustos</p>
  </div>

  <!-- Sistema de publicación de productos: Johnny Tenorio -->
  <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transform hover:-translate-y-2 transition text-center">
    <img src="I2.jpeg" alt="Diseño de página de publicación de productos" class="w-full h-auto rounded mb-4">
    <p class="italic text-gray-600 mb-2">Interfaz para publicar productos con categorías y fotos de manera organizada.</p>
    <p class="font-bold text-gray-800">Autor: Johnny Tenorio</p>
  </div>

  <!-- Buscador y filtros: Daniel Estupiñan -->
  <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transform hover:-translate-y-2 transition text-center">
    <img src="i3.jpeg" alt="Diseño de buscador y filtros" class="w-full h-auto rounded mb-4">
    <p class="italic text-gray-600 mb-2">Buscador y filtros intuitivos para encontrar productos fácilmente.</p>
    <p class="font-bold text-gray-800">Autor: Daniel Estupiñan</p>
  </div>

  <!-- Calificaciones y reseñas: Katty Mero -->
  <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transform hover:-translate-y-2 transition text-center">
    <img src="I4.jpeg" alt="Diseño de sistema de calificaciones y reseñas" class="w-full h-auto rounded mb-4">
    <p class="italic text-gray-600 mb-2">Permite calificar y dejar reseñas de productos para ayudar a otros estudiantes.</p>
    <p class="font-bold text-gray-800">Autor: Katty Mero</p>
  </div>

  <!-- Notificaciones: Valentina Angulo -->
  <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transform hover:-translate-y-2 transition text-center">
    <img src="i5.jpeg" alt="Diseño de panel de notificaciones" class="w-full h-auto rounded mb-4">
    <p class="italic text-gray-600 mb-2">Panel de notificaciones para mantener a los estudiantes informados sobre nuevas ofertas.</p>
    <p class="font-bold text-gray-800">Autor: Valentina Angulo</p>
  </div>

  <!-- Registro de usuarios: Maicol Quintero -->
  <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transform hover:-translate-y-2 transition text-center">
    <img src="i6.jpeg" alt="Diseño de registro de usuarios" class="w-full h-auto rounded mb-4">
    <p class="italic text-gray-600 mb-2">Formulario de registro sencillo con nombre, correo y contraseña, validación en tiempo real.</p>
    <p class="font-bold text-gray-800">Autor: Maicol Quintero</p>
  </div>

</div>
`;


        function showSection(section) {
            const mainContent = document.getElementById('main-content');
            mainContent.innerHTML = section === 'user-stories' ? userStoriesHTML : interfacesHTML;
        }

        document.addEventListener('DOMContentLoaded', () => {
            showSection('user-stories');
        });
    </script>

</body>

</html>