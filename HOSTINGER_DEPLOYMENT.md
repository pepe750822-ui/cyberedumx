# Guía de Despliegue Automático (GitHub -> Hostinger) 🚀

Esta guía detalla los pasos para configurar el despliegue automático (CI/CD) de **cyberedumx.com** desde GitHub hacia Hostinger, eliminando la necesidad de usar FTP.

## 1. Preparación del Repositorio Local

Actualmente, la carpeta raíz `cyberedumx.com` no es un repositorio de Git. Sigue estos pasos para prepararla:

1.  **Abre una terminal** en `c:\Users\pp_it\cyberedumx.com`.
2.  **Inicializa Git**:
    ```powershell
    git init
    ```
3.  **Crea un archivo `.gitignore`** para excluir archivos innecesarios:
    ```text
    /cyberedu-mx
    /lovablegithubvercel
    /.vscode
    /*.log
    /ffmpeg-master-latest-win64-gpl
    /ffmpeg.zip
    ```
4.  **Realiza el primer commit**:
    ```powershell
    git add .
    git commit -m "Configuración inicial para auto-deploy en Hostinger"
    ```

## 2. Configuración en GitHub

1.  Crea un nuevo repositorio en GitHub (ej: `cyberedumx-landing`).
2.  **Sube el código**:
    ```powershell
    git branch -M main
    git remote add origin https://github.com/tu-usuario/cyberedumx-landing.git
    git push -u origin main
    ```

## 3. Configuración en Hostinger (hPanel)

1.  Entra a **hPanel** > **Avanzado** > **Git**.
2.  **Configura el Repositorio**:
    *   **Repository URL**: La URL de tu repo en GitHub.
    *   **Branch**: `main`.
    *   **Install Directory**: Déjalo vacío (para que se instale en `public_html`).
    *   Haz clic en **Create**.
3.  **Configura la Clave SSH (Opcional si el repo es privado)**:
    *   Hostinger generará una **SSH Key**. Cópiala.
    *   En GitHub: **Settings** > **Deploy keys** > **Add deploy key**.
    *   Pega la clave y guárdala.
4.  **Activa el Auto-Despliegue (Webhook)**:
    *   En Hostinger, ve a la sección Git y haz clic en **Manage** junto a tu repo.
    *   Activa **Auto Deployment**.
    *   Copia la **Webhook URL** que te proporciona Hostinger.
    *   En GitHub: **Settings** > **Webhooks** > **Add webhook**.
    *   Pega la URL en **Payload URL**, selecciona `application/json` y guarda.

---

## 🎯 Resultado Final
Cada vez que hagas un `git push` a la rama `main`, Hostinger detectará el cambio y actualizará tu sitio web en tiempo real. **¡Adiós al FTP!**
