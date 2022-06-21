var config = {
  apiKey: "AIzaSyD2L_k2oByQPNRI6PHHEf6OhITj6xqwR2o",
  authDomain: "empresas-91d2f.firebaseapp.com",
  projectId: "empresas-91d2f",
  storageBucket: "empresas-91d2f.appspot.com",
  messagingSenderId: "17872267713",
  appId: "1:17872267713:web:d195bfd5bccbb96b87a740"
 };
  
   firebase.initializeApp(config);
  
   var messageRef = firebase.database().ref('MJV-RRHH');
  
   document.getElementById('Formulario').addEventListener('submit',submitForm);
  
  function submitForm(e) {
    e.preventDefault();
  
    var name = getInputVal('nombre');
    var empresa = getInputVal('empresa');
    var telefono = getInputVal('telefono');
    var email = getInputVal('email');
    var ciudad = getInputVal('ciudad');
    var detalles = getInputVal('detalles');
    var whatsapp = getInputVal('whatsapp');
    var correo = getInputVal('correo');
    var llamada = getInputVal('llamada');


  
    saveMensaje(name, empresa, telefono, email, ciudad, detalles, whatsapp, correo ,llamada);
  
    sendEmail(name, empresa, telefono, email, ciudad, detalles, whatsapp, correo ,llamada);
  
  }
  
  function getInputVal(id) {
    return document.getElementById(id).value;
  }
   
    function saveMensaje(name, empresa, telefono, email, ciudad, detalles, whatsapp, correo, llamada) {
      var newMessageRef = messageRef.push();
      newMessageRef.set({
        name: name,
        empresa: empresa,
        telefono: telefono,
        email: email,
        ciudad: ciudad,
        detalles: detalles,
        whatsapp: whatsapp,
        correo: correo,
        llamada: llamada
      });
  }
  
  function sendEmail(name,empresa,telefono,email,ciudad,detalles,whatsapp,correo){
    Email.send({
      Host: "smtp.gmail.com",
      Username: "consultor.mjv@gmail.com",
      Password: "cgwgvfrricvzmkyc",
      To: "consultor.mjv@gmail.com",
      From: "consultor.mjv@gmail.com",
      Subject: `${name} Te envio un mensaje - MJV RR.HH & Marketing Digital`,
      Body: `Nombre del Representante: ${name} <br/> Empresa: ${empresa} <br/> 
      Correo Electronico: ${email} <br/> Telefono: ${telefono} <br/> 
      Ubicacion: ${ciudad} <br/> Detalles: ${detalles} <br/> 
      Correo: ${correo} <br/>  Whatsapp: ${whatsapp} <br/>`,
    })
    .then((message)=>{
      Swal.fire({
        icon: 'success',
        text: 'Su mensaje se envio correctamente. Nosotros nos pondremos en contacto',
        timer: 1800
      })
      document.getElementById('Formulario').reset();
     });
  }
  
  
  
   