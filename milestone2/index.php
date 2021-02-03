<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP ajax dischi</title>
     <link rel="stylesheet" href="../dist/css/app.css">
 </head>
 <body>
     <nav>
         <img src="../dist/img/spotify-logo.png" alt="spotify-logo">
     </nav>
     <main id="app">
         <div id="container-dischi">
             <div class="disco" v-for="disco in dischi">
                 <img :src="disco.poster">
                 <h3>{{disco.title}}</h3>
                 <span class="author">{{disco.author}}</span><br>
                 <span class="year">{{disco.year}}</span>
             </div>
         </div>
     </main>
     <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
     <script src="../dist/js/app.js"></script>
 </body>
</html>