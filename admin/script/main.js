let output = document.getElementById("details");
window.onload = jData();

function submitData(fdata) {
  let xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    console.log(xhttp.responseText);
    jData();
  };
  xhttp.open(fdata.method, fdata.action, true);
  xhttp.send(new FormData(fdata));

  // console.log();
  return false;
}

function jData() {
  let ajaxhttp = new XMLHttpRequest();
  let url = "json.php";

  ajaxhttp.open("GET", url, true);
  ajaxhttp.setRequestHeader("content-type", "application/json");
  ajaxhttp.onreadystatechange = function() {
    // output.innerHTML = "";
    if (ajaxhttp.readyState == 4 && ajaxhttp.status == 200) {
      let jcontent = JSON.parse(ajaxhttp.responseText);
      // console.log(jcontent);
      /*for (i in jcontent) {
        output.innerHTML += `<form action="conf.php?pages=tour-page&section=details&page-id=<?= $tourId ?>&content-id=<?= $tourDetail['content-id'] ?>&cmd=edit_page" method="post" onsubmit="return submitData(this)">
        <textarea class="form-control" rows="2" name="title"> ${
          jcontent[i].title
        } </textarea><br>
        <textarea class="form-control" rows="5" name="description">${
          jcontent[i].description
        }</textarea> <br>
        <div class="d-flex flex-row-reverse"><button style="margin-top:0px; margin-bottom:15px;" class="button" id="sub" type="submit">SAVE</button></div>
        <hr>
    </form>`;
      }*/
    }
  };

  ajaxhttp.send();
}

`
  <label for="dayTitle"> <strong> Title:*</strong></label><textarea id="dayTitle" class="form-control" rows="1" name="title[0]"></textarea>
  <label for="dayPos"><strong>Position:* </strong></label><textarea id="dayPos" class="form-control" rows="1" id="weight" name="weight[0]"></textarea>
  <label><strong>Description:* </strong></label><textarea id="dayDesc" class="form-control" rows="1" name="description[0]"></textarea><br>
`;

let i = 0,
  addTourDays,
  addTourDaysReload;

window.onload = function() {
  addTourDays = document.getElementById("addTourDays");
  addTourDaysReload = document.getElementById("sub");
  addTourDaysReload.addEventListener("click", () => location.reload());
};

function addDay() {
  let label1 = document.createElement("label"),
    strong1 = document.createElement("STRONG"),
    strong2 = document.createElement("STRONG"),
    strong3 = document.createElement("STRONG"),
    br = document.createElement("br"),
    text1 = document.createTextNode("Title:*"),
    input1 = document.createElement("textarea"),
    label2 = document.createElement("label"),
    text2 = document.createTextNode("Position:*"),
    input2 = document.createElement("input"),
    label3 = document.createElement("label"),
    text3 = document.createTextNode("Description:*"),
    input3 = document.createElement("textarea");

  strong1.appendChild(text1);
  strong2.appendChild(text2);
  strong3.appendChild(text3);

  label1.appendChild(strong1);
  label2.appendChild(strong2);
  label3.appendChild(strong3);

  input1.setAttribute("type", "text");
  input1.setAttribute("class", "form-control");
  input1.setAttribute("name", `title[${++i}]`);
  input1.setAttribute("rows", "1");

  input2.setAttribute("type", "number");
  input2.setAttribute("class", "form-control");
  input2.setAttribute("name", `weight[${i}]`);

  input3.setAttribute("type", "text");
  input3.setAttribute("class", "form-control");
  input3.setAttribute("name", `description[${i}]`);
  input3.setAttribute("rows", "3");

  addTourDays.appendChild(label1);
  addTourDays.appendChild(input1);
  addTourDays.appendChild(label2);
  addTourDays.appendChild(input2);
  addTourDays.appendChild(label3);
  addTourDays.appendChild(input3);
  addTourDays.appendChild(br);
}
