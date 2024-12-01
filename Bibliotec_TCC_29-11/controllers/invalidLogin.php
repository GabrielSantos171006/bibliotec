<html>
  <head>
  <link rel="stylesheet" href="../models/style/invalidLogin.css">
  </head>
  <body>
    <p>Parece que você ainda não fez login...</p>
    <a href="../views/html/index.html">Ir para login</a>

    <div class="image-container">
        <img id="randomImage" src="" alt="Imagem aleatória">
    </div>
    
    <script>
        const images = [
            "../models/src/undraw_login_re_4vu2.svg",
            "../models/src/undraw_my_app_re_gxtj.svg",
            "../models/src/undraw_sign_in_re_o58h.svg"
        ];

        function setRandomImage() {
            const randomIndex = Math.floor(Math.random() * images.length);
            const imgElement = document.getElementById("randomImage");
            imgElement.src = images[randomIndex];
        }

        window.onload = setRandomImage;
    </script>

  </body>
</html>