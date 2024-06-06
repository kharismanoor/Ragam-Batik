
 
  
  @vite('resources/css/app.css')
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Canvas Drawing with Tailwind CSS</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
    canvas {
      background-image: url('../img/gambar 2.jpg');
      background-size: cover;
    }
  </style>
</head>
<body>
 <!-- HEADER START -->
 <header class="bg-white absolute top-0 left-0 w-full flex items-center z-10">
    <div class="container">
        <div class="flex items-center justify-between relative">
          <div class="px-4">
            <img src="../img/logo ragam 2.svg" alt="logo">
          </div>
           <div class="flex items-center px-4">
            <button id="hamburger" name="hamburger" type="button"
            class="block absolute right-4 lg:hidden">
                <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                <span class="hamburger-line transition duration-300 ease-in-out"></span>
                <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
            </button>
            <nav id="nav-menu" class="hidden absolute py-5 bg-red-900
            shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full
            lg:block lg:static lg:bg-transparent lg:max-w-full
            lg:shadow-none lg:rounded-none">
                <ul class="block lg:flex">
                    <li calss="group">
                       <a href="/" class="text-base text-white py-2 mx-8 flex
                       hover:text-yellow-700">Beranda</a> 
                    </li>
                    <li calss="group">
                        <a href="/ragam" class=" text-base text-red-900 py-2 mx-8 flex
                        hover:text-yellow-700">Ragam</a> 
                     </li>
                     <li calss="group">
                        <a href="/event2" class="text-base text-red-900 py-2 mx-8 flex
                        hover:text-yellow-700">Events</a> 
                     </li>
                     <li calss="group">
                        <a href="/gambar" class="text-base text-red-900 py-2 mx-8 flex
                        hover:text-yellow-700">Draw</a> 
                     </li>
                     <li calss="group">
                        <a href="/koleksi" class="text-base text-red-900 py-2 mx-8 flex
                        hover:text-yellow-700">Koleksi</a> 
                     </li>
                     <li calss="group">
                        <a href="/login" class="text-base text-red-900 py-2 mx-8 flex
                        hover:text-yellow-700">Login</a> 
                     </li>
                </ul>
            </nav>
           </div> 
        </div>
    </div>
</section>
    </header>
<!-- HEADER END -->
<section class="pt-36 pb-32 bg-red-900">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-xl mb-10">
            </div>
        </div>
    </div>
        
    <div class=" flex items-center justify-center ">
  <div class="bg-white shadow-md rounded-lg p-4">
    <h1 class="text-2xl font-bold mb-4 text-center">Mari Menggambar</h1>
    <canvas id="drawingCanvas" class="border border-gray-300" width="600" height="400"></canvas>
    <div class="mt-4 text-center">
      <div class="mb-4">
        <label for="colorPicker" class="mr-2 font-semibold">Choose Color:</label>
        <input type="color" id="colorPicker" class="border border-gray-300 rounded p-1" value="#000000">
      </div>
      <div class="mb-4">
        <label for="patternPicker" class="mr-2 font-semibold">Choose Pattern:</label>
        <select id="patternPicker" class="border border-gray-300 rounded p-1">
          <option value="line">Line</option>
          <option value="circle">Circle</option>
          <option value="rectangle">Rectangle</option>
        </select>
      </div>
      <div class="mb-4">
        <label for="motifPicker" class="block text-sm font-medium text-gray-700">Select Motif</label>
        <select id="motifPicker" class="border border-gray-300 rounded p-1">
            <option value="">None</option>
            <option value="motif1">Motif 1</option>
            <option value="motif2">Motif 2</option>
        </select>
    </div>
      <div class="mb-4">
        <label for="thickenCheckbox" class="mr-2 font-semibold">Enable Thickening:</label>
        <input type="checkbox" id="thickenCheckbox" class="border border-gray-300 rounded">
      </div>
      <div class="mb-4">
        <label for="fillCheckbox" class="mr-2 font-semibold">Fill Shape:</label>
        <input type="checkbox" id="fillCheckbox" class="border border-gray-300 rounded">
      </div>
      <div class="mb-4">
        <label for="brushSize" class="mr-2 font-semibold">Brush Size:</label>
        <input type="range" id="brushSize" min="1" max="20" value="1" class="border border-gray-300 rounded p-1">
      </div>
      <button id="clearButton" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Clear Canvas</button>
      <button id="saveButton" class="ml-4 bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Save Canvas</button>
    </div>
  </div>
</div>
</div>
</section>
<body>
  <script>
    const canvas = document.getElementById('drawingCanvas');
    const ctx = canvas.getContext('2d');
    let drawing = false;
    let startX, startY;
    let currentColor = document.getElementById('colorPicker').value;
    let currentPattern = document.getElementById('patternPicker').value;
    let thickenEnabled = document.getElementById('thickenCheckbox').checked;
    let fillEnabled = document.getElementById('fillCheckbox').checked;
    let brushSize = parseInt(document.getElementById('brushSize').value);

    document.getElementById('colorPicker').addEventListener('input', (e) => {
      currentColor = e.target.value;
    });

    document.getElementById('patternPicker').addEventListener('change', (e) => {
      currentPattern = e.target.value;
    });

    document.getElementById('thickenCheckbox').addEventListener('change', (e) => {
      thickenEnabled = e.target.checked;
    });

    document.getElementById('fillCheckbox').addEventListener('change', (e) => {
      fillEnabled = e.target.checked;
    });

    document.getElementById('brushSize').addEventListener('input', (e) => {
      brushSize = parseInt(e.target.value);
    });

    canvas.addEventListener('mousedown', (e) => {
      drawing = true;
      startX = e.offsetX;
      startY = e.offsetY;
      ctx.strokeStyle = currentColor;
      ctx.fillStyle = currentColor;
      ctx.lineWidth = brushSize;

      if (currentPattern === 'line') {
        ctx.beginPath();
        ctx.moveTo(startX, startY);
      }
    });

    canvas.addEventListener('mousemove', (e) => {
      if (!drawing) return;

      if (currentPattern === 'line') {
        ctx.lineTo(e.offsetX, e.offsetY);
        ctx.stroke();
      }
    });

    canvas.addEventListener('mouseup', (e) => {
      if (!drawing) return;
      drawing = false;

      if (currentPattern === 'circle') {
        const radius = Math.sqrt(Math.pow(e.offsetX - startX, 2) + Math.pow(e.offsetY - startY, 2));
        ctx.beginPath();
        ctx.arc(startX, startY, radius, 0, 2 * Math.PI);
        if (fillEnabled) {
          ctx.fill();
        }
        ctx.stroke();
      } else if (currentPattern === 'rectangle') {
        const width = e.offsetX - startX;
        const height = e.offsetY - startY;
        if (fillEnabled) {
          ctx.fillRect(startX, startY, width, height);
        }
        ctx.strokeRect(startX, startY, width, height);
      }
    });

    canvas.addEventListener('mouseout', () => {
      drawing = false;
    });

    document.getElementById('clearButton').addEventListener('click', () => {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      // Menggambar kembali motif
      const img = new Image();
      img.src = 'your-motif-image-url.png';
      img.onload = () => {
        ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
      };
    });

    document.getElementById('saveButton').addEventListener('click', () => {
      const link = document.createElement('a');
      link.download = 'canvas-drawing.png';
      link.href = canvas.toDataURL();
      link.click();
    });

    // Menggambar motif awal saat halaman dimuat
    window.onload = () => {
      const img = new Image();
      img.src = 'your-motif-image-url.png';
      img.onload = () => {
        ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
      };
    };
  </script>
</body>
</html>
