const quill = new Quill('#editor', {
  theme: "snow",
  modules: {
    toolbar: {
      container: '#toolbar', // Selector for toolbar container
      handlers: {
        bold: customBoldHandler
      }
    }
  }
});