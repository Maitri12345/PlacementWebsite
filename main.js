$(document).ready(function () {
  $("#watsapp").floatingWhatsApp({
    phone: "6362621650",
    popupMessage: "Hello, how can we help you?",
    showPopup: true,
    showOnIE: false,
    headerTitle: "Wats app chat",
    position: "right",
    buttonImage: '<img src="./assets/whatsapp.svg" />',
  });
});

$(document).ready(function () {
  $(".container-gal").magnificPopup({
    type: "image",
    delegate: "a",
    gallery: {
      enabled: true,
    },
  });
});
