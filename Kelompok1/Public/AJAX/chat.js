// Membuat function "Chat" untuk menangani segala properti chat nantinya

var instanse = false;
var state;
var mes;
var file;

function Chat() {
  this.update = updateChat;
  // Update chat akan meminta baris baru pada txt file
  // Jika ada akan Append(Menambahkan) baris baru
  this.send = sendChat;
  // sendChat akan dipanggil ketika pesan dimasukkan
  // Akan meneruskan ke server
  this.getState = getStateOfChat;
  // Meminta server, berapa banyak baris trbaru yang ada pada txt file, sehingga bisa menjadi acuan untuk mengetahui buat baris baru atau tidak.
}

//gets the state of the chat
function getStateOfChat() {
  if (!instanse) {
    instanse = true;
    $.ajax({
      type: "POST",
      url: "process.php",
      data: {
        function: "getState",
        file: file,
      },
      dataType: "json",

      success: function (data) {
        state = data.state;
        instanse = false;
      },
    });
  }
}

//Updates the chat
function updateChat() {
  if (!instanse) {
    instanse = true;
    $.ajax({
      type: "POST",
      url: "process.php",
      data: {
        function: "update",
        state: state,
        file: file,
      },
      dataType: "json",
      success: function (data) {
        if (data.text) {
          for (var i = 0; i < data.text.length; i++) {
            $("#chat-area").append($("<p>" + data.text[i] + "</p>"));
          }
        }
        document.getElementById("chat-area").scrollTop =
          document.getElementById("chat-area").scrollHeight;
        instanse = false;
        state = data.state;
      },
    });
  } else {
    setTimeout(updateChat, 1500);
  }
}

//send the message
function sendChat(message, nickname) {
  updateChat();
  $.ajax({
    type: "POST",
    url: "process.php",
    data: {
      function: "send",
      message: message,
      nickname: nickname,
      file: file,
    },
    dataType: "json",
    success: function (data) {
      updateChat();
    },
  });
}

// Ketiga fungsi getStateOfChat(), updateChat(), sendChat() mekmanfaatkan JQuery's AJAX dan melakukan komunikasinya dengan file PHP yang bernama process.php
