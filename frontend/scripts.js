window.addEventListener("DOMContentLoaded",inicio)
function inicio(){
    document.getElementById("generar").addEventListener("click",ejecutarAnalisis)

    document.getElementById('oceanForm').onsubmit = async (e) => {
            e.preventDefault();
            const formData = new FormData(e.target);
            const response = await fetch('guardar.php', { method: 'POST', body: formData });
            const res = await response.text();
            document.getElementById('mensaje').innerText = res;
    };
}

async function ejecutarAnalisis() {
    const response = await fetch('http://localhost:8000/Oceanos');
    const data = await response.json();
    document.getElementById('resultadoR').innerHTML = `<pre>${JSON.stringify(data, null, 2)}</pre>`;
}
