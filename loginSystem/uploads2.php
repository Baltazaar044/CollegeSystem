<?php

?>
<html><head><script>
const dropArea = document.querySelector(".drop_box"),
  button = dropArea.querySelector("button"),
  dragText = dropArea.querySelector("header"),
  input = dropArea.querySelector("input");
let file;
var filename;

button.onclick = () => {
  input.click();
  
};
input.addEventListener("change", function (e) {
  var fileName = e.target.files[0].name;
  var files = document.getElementById("fileID").files;
  let filedata = `
  <html><head>
  <script>
  function submit(){
    alert('Submitted')
  }
  </script>
  </head><body>
    <form action="javascript:submit();" method="post">
    <div class="form">
    <h4>${fileName}</h4>
    <button onClick "return submit()" class="btn" >Upload</button>
    </div>
    </form>
</body></html>`;

  dropArea.innerHTML = filedata;
});
</script>
</head><body>
  <form  method="post">
  
  </div>
  </form>
</body></html>
