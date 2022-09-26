<!-- Chat Button -->
<button class="btn btn-primary btn-open-chat" onclick="document.querySelector('.chat-popup').style.display = 'block'">
  <i class="fa fa-comment" aria-hidden="true"></i>
</button>

<!-- Chat PopUp -->
<div class="chat-popup">
  <form action="#" class="form-container chat-starter" id="chatStarter">
    <h1>Chat</h1>

    <input type="text" name="name" placeholder="Name *" autocomplete="off" required />

    <input type="email" name="email" placeholder="Email Address" autocomplete="off" />

    <input type="text" name="phone" placeholder="Phone Number" autocomplete="off" />

    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn btn-primary" name="submit">Send</button>
    <button type="button" class="btn btn-danger" onclick="document.querySelector('.chat-popup').style.display = 'none'">
      Close
    </button>
  </form>

  <div class="chat-box" id="chatBox">
    <div class="title">
      <i class="far fa-comment-dots"></i> Chat with me
    </div>
    <div class="box">
      <div class="item">
        <div class="icon">
          <i class="fa fa-user"></i>
        </div>
        <div class="msg">
          <p>Hello everyone, How are you?</p>
        </div>
      </div>
      <br clear="both">
      <div class="item right">
        <div class="msg">
          <p>Nice</p>
        </div>
      </div>
    </div>

    <div class="typing-area">
      <div class="input-field">
        <input type="text" placeholder="Type your message" required>
        <button>Send</button>
      </div>
    </div>
  </div>
</div>