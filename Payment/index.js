function sendTicket() {
  var params = {
    name: document.getElementById("namee").value,
    email: document.getElementById("emaile").value,
  };
  const serviceID = "service_pwzfnvr";
  const templateID = "template_8xdmhiv";
  emailjs.send(serviceID, templateID, params)
  .then(res=>{
      document.getElementById("namee").value = "";
      document.getElementById("emaile").value = "";
      document.getElementById("card").value = "";
      console.log(res);
      alert("Check your mail for your ticket!!")

  })
  .catch(err=>console.log(err));
}

function sendTicket1() {
  var params = {
    name: document.getElementById("name1").value,
    email: document.getElementById("email1").value,
  };
  const serviceID = "service_pwzfnvr";
  const templateID = "template_8xdmhiv";
  emailjs.send(serviceID, templateID, params)
  .then(res=>{
      document.getElementById("name1").value = "";
      document.getElementById("email1").value = "";
      document.getElementById("card1").value = "";
      console.log(res);
      alert("Check your mail for your ticket!!")

  })
  .catch(err=>console.log(err));
}

function sendTicket2() {
  var params = {
    name: document.getElementById("name2").value,
    email: document.getElementById("email2").value,
  };
  const serviceID = "service_pwzfnvr";
  const templateID = "template_8xdmhiv";
  emailjs.send(serviceID, templateID, params)
  .then(res=>{
      document.getElementById("name2").value = "";
      document.getElementById("email2").value = "";
      document.getElementById("card2").value = "";
      console.log(res);
      alert("Check your mail for your ticket!!")

  })
  .catch(err=>console.log(err));
}