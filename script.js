
  let participants = [];
  let spinning = false;
  let Numbers = [];
  
  var checkbox1 = document.getElementById('numAnulled');
  var checkbox2 = document.getElementById('numWinners');
  var txtPremio = document.getElementById('txtPremio');

  checkbox1.addEventListener('change', function() {
      if (checkbox1.checked) {
          checkbox2.checked = false;
      }
  });
  checkbox2.addEventListener('change', function() {
      if (checkbox2.checked) {
          checkbox1.checked = false;
      }
  });
  function generateRandomNumbers(min, max, count) {
    const numbers = [];
    while (numbers.length < count) {
      const randomNum = Math.floor(Math.random() * (max - min + 1)) + min;
      if (!numbers.includes(randomNum)) {
        numbers.push(randomNum);
      }
    }
    return numbers;
  }
  function displayNumbers() {

      const resultsBody = document.getElementById("resultsBody");
      /*resultsBody.innerHTML = "";*/
      var numAnulled = document.getElementById('numAnulled');
      if (numAnulled.checked  === true) {
          Numbers.forEach((num, index) => {
              mostrarNumeroEnTarjetas(num);
              resultsBody.innerHTML += `<tr><td>${num}</td><td>1725692303</td><td>Nombre y Apellido</td><td>Anulado</td></tr>`;
          });
      }else{
          Numbers.forEach((num, index) => {
            mostrarNumeroEnTarjetas(num);
              resultsBody.innerHTML += `<tr><td>${num}</td><td>1725692303</td><td>Nombre y Apellido</td><td>Ganador - ${txtPremio.value}</td></tr>`;
          });
      }
    
  }
  function spinWheel() {
    var max=participants.length;
    Numbers = generateRandomNumbers(1, max, 1);
    
    if (!spinning) { 
      spinning = true;
      const cards = document.querySelectorAll('.card');
      cards.forEach((card, index) => {
        setTimeout(() => {
          spinCard(cards[0]);
          spinCard(cards[1]);
          spinCard(cards[2]);
        }, index * 100);
      });
      
      setTimeout(() => {
        spinning = false;
        displayNumbers();
      }, (cards.length - 1)*575); // Se agrega un segundo extra al final
      mostrarNumeroEnTarjetas(num);
    }
    
  }
  function spinCard(card) {
    const maxNumber = 9; // Máximo número en la ruleta
    let currentNumber = parseInt(card.innerText, 10);

    const spinInterval = setInterval(() => {
      currentNumber = (currentNumber + 1) % (maxNumber + 1);
      card.innerText = currentNumber;

      if (currentNumber === 0) {
        clearInterval(spinInterval);
      }
    }, 100);
    
  }
  function mostrarNumeroEnTarjetas(numero) {

    const card1 = document.getElementById(`card1`);
    const card2 = document.getElementById(`card2`);
    const card3 = document.getElementById(`card3`);

    // Convertir el número en un array de dígitos
    let digitos = Array.from(String(numero), Number);

    // Rellenar con ceros a la izquierda si es necesario
    while (digitos.length < 3) {
        digitos.unshift(0);
    }
    console.log(digitos);
    // Asignar valores a las tarjetas
    card1.innerText = digitos[0];
    card2.innerText = digitos[1];
    card3.innerText = digitos[2];
  }

  function handleFile() {
    const fileInput = document.getElementById('excelInput');
    const file = fileInput.files[0];

    if (file) {
      const reader = new FileReader();

      reader.onload = function (e) {
        const data = new Uint8Array(e.target.result);
        const workbook = XLSX.read(data, { type: 'array' });

        // Assuming only one sheet in the Excel file
        const sheetName = workbook.SheetNames[0];
        const sheet = workbook.Sheets[sheetName];

        participants = XLSX.utils.sheet_to_json(sheet);
        console.log(participants);
      };

      reader.readAsArrayBuffer(file);
    }
  }
