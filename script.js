
document.getElementById('taskForm').addEventListener('submit', function (e) {
  e.preventDefault();

  const data = {
    titulo: document.getElementById('titulo').value,
    responsable: document.getElementById('responsable').value,
    descripcion: document.getElementById('descripcion').value,
    fecha: document.getElementById('fecha').value,
  };

  fetch('https://script.google.com/macros/s/YOUR_SCRIPT_ID/exec', {
    method: 'POST',
    mode: 'no-cors',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify(data),
  })
  .then(() => {
    document.getElementById('mensaje').textContent = '✅ Tarea registrada correctamente';
    document.getElementById('taskForm').reset();
  })
  .catch((error) => {
    document.getElementById('mensaje').textContent = '❌ Error al registrar la tarea';
  });
});
