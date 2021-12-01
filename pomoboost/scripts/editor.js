window.onload = () => {
    CKEDITOR.replace("editor1");
  };

  function sendText() {
    window.parent.postMessage(CKEDITOR.instances.CK1.getData(), "*");
  }