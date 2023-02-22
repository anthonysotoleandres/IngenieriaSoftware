(function($) {
  

  $("#default-wizard").steps({
    headerTag: "h3",
    bodyTag: "div",
    autoFocus: true,
    titleTemplate: '#title#',
    enableFinishButton: false,
    labels: {
      current: "",
      next: "Siguiente",
      previous: 'Atras'
    },
    onFinished: function(event, currentIndex) {
      alert("Form Submitted Successfully!");
    }

  });

  $("#miBoton").on("click", function() {
    // Enviar formulario aquí
    
    alert("Formulario enviado con éxito!");
  });

})(jQuery);
