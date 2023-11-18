function validateForm() {
    var nombre = document.getElementById("nombre").value;
    var email = document.getElementById("email").value;
    var mensaje = document.getElementById("mensaje").value;
  
    if (nombre === "" || email === "" || mensaje === "") {
      alert("Por favor, completa todos los campos del formulario.");
      return false;
    }
  
    // Puedes agregar más validaciones según tus necesidades
  
    return true;
  }

