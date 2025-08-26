# LoopTasks — Frontend estático (GitHub Pages) + Apps Script Web App

Este repositorio contiene un `index.html` que **embebe** tu Web App de **Google Apps Script** (LoopTasks).  
La URL ya está incrustada:

```
https://script.google.com/macros/s/AKfycbyODgO8QzbKEmj35JGzch5Q-_Yr8G21s3oxcltaXoMRUi5OgGrFX2e0IXSSJT7DXOLdUg/exec
```

---

## ✅ Cómo usarlo

1. Sube **este `index.html`** a tu repositorio (rama `main` o `gh-pages`).  
2. Activa **GitHub Pages** (Settings → Pages → Source: `Deploy from a branch`).  
3. Abre la URL de Pages (ej. `https://usuario.github.io/tu-repo`). Verás tu app embebida.  
4. Si en el futuro despliegas **otra** Web App, puedes pegar la nueva URL en el campo de la página; se guardará en tu navegador (localStorage).

---

## 🔒 Notas

- El frontend **no** contiene secretos. El backend (Apps Script) maneja la lógica y permisos.  
- Asegúrate de que tu Web App esté con acceso **“Anyone with the link”** para que se visualice correctamente.
