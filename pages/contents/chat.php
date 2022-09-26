<!-- Chat Button -->
<button class="btn btn-primary btn-open-chat" onclick="document.querySelector('.chat-popup').style.display = 'block'">
  <i class="fa fa-comment" aria-hidden="true"></i>
</button>

<!-- Chat PopUp -->
<div class="chat-popup">
  <form action="#" class="form-container" id="chat">
    <h1>Chat</h1>

    <input type="text" name="name" placeholder="Name *" autocomplete="off" required />

    <input type="email" name="email" placeholder="Email Address" autocomplete="off" />

    <input type="text" name="phone" placeholder="Phone Number" autocomplete="off" />

    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn btn-primary" name="submit">Send</button>
    <button type="button" class="btn btn-danger" onclick="document.querySelector('.chat-popup').style.display = 'none';">
      Close
    </button>
  </form>
</div>