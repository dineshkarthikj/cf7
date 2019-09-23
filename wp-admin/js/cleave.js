ffunction validate()
{
  var phoneNumber = document.getElementById('phone-number').value;
  var phoneRGEX = /^[+65]{0,1}{2}{0,1}[-\s\.]{0,1}[0-9]{4}[-\s\.]{0,1}[0-9]{4}$/;
  var phoneResult = phoneRGEX.test(phoneNumber);
  alert("phone:"+phoneResult );
}

<?php 
   }
}