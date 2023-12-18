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
  <html><body>
  <script>
document.getElementById("demo").onclick = function() {myFunction()};

function myFunction() {
  document.getElementById("demo").innerHTML = "YOU CLICKED ME!";
}
</script>
    <form action="javascript:submit();" method="post">
    <div class="form">
    <h4>${fileName}</h4>
    <button type="submit" id="demo" onClick="submit()"class="btn" >Upload</button>
    </div>
    </form>
</body></html>`;

  dropArea.innerHTML = filedata;
});




