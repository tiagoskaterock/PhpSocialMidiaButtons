{{--  Botões de compartilhamento para redes sociais --}}

{{-- font awesome 6 --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style type="text/css">
  .icone-share {
      font-size: 2.2rem;
      margin-right: 10px;
  }
  .whatsapp {
      color: #25D366;
  }
  .linkedin {
      color: #0077b5;
  }
  .facebook {
      color: #4267B2;
  }
  .link-share:hover {
      text-decoration: none;                    
  }

  .icone-share:hover {
      opacity: 0.8;
  }
</style>


{{-- Facebook --}}
<a href="https://www.facebook.com/sharer/sharer.php?u={{ $_SERVER['HTTP_HOST']. $_SERVER['REQUEST_URI'] }}" class="link-share" title="Compartilhar no Facebook" target="_blank">
    <i class="fa-brands fa-facebook-square icone-share facebook"></i>
</a>

{{-- Linkedin --}}
<a href="https://www.linkedin.com/shareArticle?mini=true&url={{ $_SERVER['HTTP_HOST']. $_SERVER['REQUEST_URI'] }}" class="link-share" title="Compartilhar no LinkedIn" target="_blank">
    <i class="fa-brands fa-linkedin icone-share linkedin"></i>
</a>

{{-- WhatsApp --}}
<a href="https://api.whatsapp.com/send?text={{ $_SERVER['HTTP_HOST']. $_SERVER['REQUEST_URI'] }}" class="link-share" title="Compartilhar no WhatsApp" target="_blank">
    <i class="fa-brands fa-whatsapp-square icone-share whatsapp"></i>
</a>