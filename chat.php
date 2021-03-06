<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
      integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk="
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="stylechat.css" />
    <title>Idiomas Chat</title>
  </head>
  <body>
    <div class="chat-container">
      <header class="chat-header">
        <h1> Idiomas Chat</h1>
        <a id="leave-btn" class="btn">Quitter la session</a>
      </header>
      <main class="chat-main">
        <div class="chat-sidebar">
          <h3><i class="fas fa-comments"></i> Nom de la session</h3>
          <h2 id="room-name"></h2>
          <h3><i class="fas fa-users"></i> Utilisateurs</h3>
          <ul id="users"></ul></ul>
        </div>
        <div class="chat-messages"></div>
      </main>
      <div class="chat-form-container">
        <form id="chat-form">
          <input
            id="msg"
            type="text"
            placeholder="Entrez votre message"
            required
            autocomplete="off"
          />
          <button class="btn"><i class="fas fa-paper-plane"></i> Envoyer </button>
        </form>
      </div>
    </div>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/qs/6.9.2/qs.min.js" 
      integrity="sha512-f0AM6x08kthGzMyDHZjBgjBCPp8V8ovlHYCI1jMkhViTeX3MykGCf/DnN1khWss/6d1105eAG4TniSKy6UhZrw==" 
      crossorigin="anonymous">
   </script>
    <script src="/socket.io/socket.io.js"></script>
    <script src="main.js"></script>
  </body>
</html>
