// hide unhide password 
        $(".toggle-password").click(function() {

          $(this).toggleClass("fa-eye fa-eye-slash");
          var input = $($(this).attr("toggle"));
          if (input.attr("type") == "password") {
            input.attr("type", "text");
          } else {
            input.attr("type", "password");
          }
        });

// hanya angka
function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }


// validasi input
function validasi_input(form) {
        var minchar = 3;
        pola_email=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$/;
        //membuat pattern inputan email

        //validasi dimulai
        if (form.nama.value == "") {
          alert("Nama Lengkap Harus Diisi!");
          form.nama.focus();
          return (false);
        } 

          else if (form.nama.value.length <= minchar) {
          alert("Nama Lengkap Harus lebih 4  Karakter!");
          form.nama.focus();
          return (false);
        } 

          else if (form.hp.value == "") {
          alert("No HP Harus Diisi!");
          form.hp.focus();
          return (false);
        } 

          else if (form.email.value == "") {
          alert("Email Harus Diisi!");
          form.email.focus();
          return (false);
        }

          else if (!pola_email.test(form.email.value)){
          alert ('contoh: aaaaa@gmail.com');
          form.email.focus();
          return (false);
        } 

          else if (form.password.value == "") {
          alert("Password Harus Diisi!");
          form.password.focus();
          return (false);
        } 

          else if (form.password.value.length <= minchar) {
          alert("Password Harus lebih 4  Karakter!");
          form.password.focus();
          return (false);
        }

          else if (form.password2.value == "") {
          alert("Konfirmasi Password Harus Diisi!");
          form.password2.focus();
          return (false);
        } 


      }