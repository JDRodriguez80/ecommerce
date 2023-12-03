/**-----------------------
 * *Formating serverside alerts
 *------------------------**/
function fncFormatInputs() {
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }
}

/**----------------------
 ** Notie alert
 *------------------------**/
function fncNotie(type, text) {
  notie.alert({
    type: type,
    text: text,
    time: 10,
  });
}

/**-----------------------
 * *       sweet alert
 *------------------------**/
function fncSweetAlert(type, text, url) {
  switch (type) {
    case "error":
      if (url == "") {
        Swal.fire({
          icon: "error",
          title: "Error",
          text: text,
        });
      } else {
        Swal.fire({
          icon: "error",
          title: "Error",
          text: text,
        }).then((result) => {
          if (result.value) {
            window.open(url, "top");
          }
        });
      }
      break;
    case "success":
      if (url == "") {
        Swal.fire({
          icon: "success",
          title: "Correct",
          text: text,
        });
      } else {
        Swal.fire({
          icon: "success",
          title: "Correct",
          text: text,
        }).then((result) => {
          if (result.value) {
            window.open(url, "top");
          }
        });
      }
      break;
    case "loading":
      Swal.fire({
        title: "Loading",
        icon: "info",
        text: text,
        allowOutsideClick: false,
        allowEscapeKey: true,
        allowEnterKey: true,
        onOpen: () => {
          Swal.showLoading();
        },
      });
      break;
  }
}

/*alerta de confirmacion tipo toast*/
function fncToastr(type, text) {
  var Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    onOpen: (toast) => {
      toast.addEventListener("mouseenter", Swal.stopTimer);
      toast.addEventListener("mouseleave", Swal.resumeTimer);
    },
  });
  Toast.fire({
    icon: type,
    title: text,
  });
}
/**-----------------------
 *     alert preloader line
 *------------------------**/

function fncMaterialPreloader(type) {
  var preloader = new $.materialPreloader({
    position: "top",
    height: "2px",
    col_1: "#F44336",
    col_2: "#2196F3",
    col_3: "#FFC107",
    col_4: "#4CAF50",
    fadeIn: 200,
    fadeOut: 200,
  });
  if (type == "on") {
    preloader.on();
  }
  if (type == "off") {
    $(".load-bar-container").remove();
  }
}
