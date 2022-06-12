<!-- Chat Button -->
<button class="btn btn-primary btn-open-chat" onclick="document.getElementById('chat').style.display = 'block'">
  <i class="fa fa-comment"></i>
</button>

<!-- Chat PopUp -->
<div class="chat-popup" id="chat">
  <form action="#" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn btn-primary">Send</button>
    <button type="button" class="btn btn-danger" onclick="document.getElementById('chat').style.display = 'none';">
      Close
    </button>
  </form>
</div>