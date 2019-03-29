// let output = document.getElementById("output");
window.onload = jData();

function submitData(fdata) {
  let xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    // console.log(xhttp.responseText);
    jData();
  };
  xhttp.open(fdata.method, fdata.action, true);
  xhttp.send(new FormData(fdata));

  // console.log();
  return false;
}

function jData() {
  let ajaxhttp = new XMLHttpRequest();
  let url = "conf.php";

  ajaxhttp.open("GET", url, true);
  ajaxhttp.setRequestHeader("content-type", "application/json");
  // ajaxhttp.onreadystatechange = function() {
  //   output.innerHTML = `
  //   <tr>
  //     <th>First name</th>
  //     <th>Last name</th>
  //     <th>Age</th>
  //   </tr>`;
  //   if (ajaxhttp.readyState == 4 && ajaxhttp.status == 200) {
  //     let jcontent = JSON.parse(ajaxhttp.responseText);
  //     for (i in jcontent) {
  //       output.innerHTML += `<tr> <td>${jcontent[i].firstname} </td> <td> ${
  //         jcontent[i].lastname
  //       } </td><td> ${jcontent[i].age}</td></tr>`;
  //     }
  //     // console.log(jcontent);
  //   }
  // };

  ajaxhttp.send();
  // console.log(ajaxhttp);
}
