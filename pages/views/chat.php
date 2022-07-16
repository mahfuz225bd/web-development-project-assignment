<!-- Chat Button -->
<button class="btn btn-primary btn-open-chat" onclick="document.getElementById('chat').style.display = 'block'">
  <i class="fa fa-comment" aria-hidden="true"></i>
</button>

<!-- Chat PopUp -->
<div class="chat-popup" id="chat">
  <form action="#" class="form-container">
    <h1>Chat</h1>

    <input type="text" name="name" placeholder="Name *" autocomplete="off" required />

    <input type="email" name="email" placeholder="Email Address" autocomplete="off" />

    <input type="text" name="phone" placeholder="Phone Number" autocomplete="off" />

    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn btn-primary">Send</button>
    <button type="button" class="btn btn-danger" onclick="document.getElementById('chat').style.display = 'none';">
      Close
    </button>
  </form>
</div>