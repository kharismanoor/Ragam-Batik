<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drawing Canvas</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="container mx-auto">
        <div class="flex justify-between mb-4">
            <div>
                <label for="colorPicker" class="block text-sm font-medium text-gray-700">Select Color</label>
                <input type="color" id="colorPicker" class="mt-1 block w-full h-10">
            </div>
            <div>
                <label for="brushSize" class="block text-sm font-medium text-gray-700">Brush Size</label>
                <input type="range" id="brushSize" min="1" max="20" value="5" class="mt-1 block w-full">
            </div>
            <div>
                <label for="motifPicker" class="block text-sm font-medium text-gray-700">Select Motif</label>
                <select id="motifPicker" class="mt-1 block w-full">
                    <option value="">None</option>
                    <option value="motif1">Motif 1</option>
                    <option value="motif2">Motif 2</option>
                </select>
            </div>
            <div class="flex items-end">
                <button id="saveButton" class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
            </div>
        </div>
        <canvas id="drawingCanvas" class="border border-gray-300 bg-white" width="800" height="600"></canvas>
    </div>
    <script >
        const canvas = document.getElementById('drawingCanvas');
const ctx = canvas.getContext('2d');
const colorPicker = document.getElementById('colorPicker');
const brushSize = document.getElementById('brushSize');
const motifPicker = document.getElementById('motifPicker');
const saveButton = document.getElementById('saveButton');

let painting = false;
let brushColor = '#000000';
let brushWidth = 5;

// Load motif
function loadMotif(motif) {
    const img = new Image();
    img.onload = () => {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
    };
    img.src = `./motifs/${motif}.png`;
}

// Event Listeners
canvas.addEventListener('mousedown', () => painting = true);
canvas.addEventListener('mouseup', () => painting = false);
canvas.addEventListener('mousemove', draw);
colorPicker.addEventListener('input', (e) => brushColor = e.target.value);
brushSize.addEventListener('input', (e) => brushWidth = e.target.value);
motifPicker.addEventListener('change', (e) => {
    const motif = e.target.value;
    if (motif) loadMotif(motif);
});

saveButton.addEventListener('click', () => {
    const link = document.createElement('a');
    link.download = 'drawing.png';
    link.href = canvas.toDataURL();
    link.click();
});

function draw(e) {
    if (!painting) return;
    ctx.lineWidth = brushWidth;
    ctx.lineCap = 'round';
    ctx.strokeStyle = brushColor;

    ctx.lineTo(e.clientX - canvas.offsetLeft, e.clientY - canvas.offsetTop);
    ctx.stroke();
    ctx.beginPath();
    ctx.moveTo(e.clientX - canvas.offsetLeft, e.clientY - canvas.offsetTop);
}
    </script>
</body>
</html>
