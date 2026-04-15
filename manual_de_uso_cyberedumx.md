# 📚 Manual de Uso — CyberEdu MX
### Plataforma de Preparación ECOEMS 2026
> **URL:** [cyberedumx.com](https://cyberedumx.com) · Versión 3.0

---

## Índice

1. [Acceso y Registro](#1-acceso-y-registro)
2. [Dashboard Principal](#2-dashboard-principal)
3. [Buscador de Contenido](#3-buscador-de-contenido)
4. [Sistemas de Aprendizaje por Área](#4-sistemas-de-aprendizaje-por-área)
5. [Material Complementario](#5-material-complementario)
6. [CyberAgent IA (AI Tutor)](#6-cyberagent-ia-ai-tutor)
7. [Simulador Pro ECOEMS](#7-simulador-pro-ecoems)
8. [Centro de Certificaciones](#8-centro-de-certificaciones)
9. [Dashboard de Reportes](#9-dashboard-de-reportes)
10. [Sistema de Tokens](#10-sistema-de-tokens)
11. [Progreso y Gamificación](#11-progreso-y-gamificación)
12. [Funciones Avanzadas](#12-funciones-avanzadas)
13. [Preguntas Frecuentes](#13-preguntas-frecuentes)

---

## 1. Acceso y Registro

### 🚪 Cómo entrar a la plataforma

Ve a **[cyberedumx.com/auth](https://cyberedumx.com/auth)**.

#### Opciones de acceso

| Método | Descripción |
|--------|-------------|
| **Google** | Clic en "Continuar con Google" — acceso en 1 clic |
| **Email + Contraseña** | Ingresa tu correo y contraseña (mín. 6 caracteres) |

#### Crear una cuenta nueva
1. En la pantalla de login, haz clic en **"Acceso al Registro"**
2. Completa: Nombre completo, Email y Contraseña (confirmada dos veces)
3. Revisa tu correo y confirma tu registro con el enlace enviado
4. Listo — serás redirigido al Dashboard

#### ¿Olvidaste tu contraseña?
1. En login, clic en **"¿Olvidaste tu clave?"**
2. Ingresa tu email
3. Recibirás un enlace para crear una nueva contraseña

> [!NOTE]
> La plataforma usa **Supabase Cloud** para autenticación segura. Tu sesión se mantiene activa automáticamente.

---

## 2. Dashboard Principal

**Ruta:** `/` (inicio tras login)

El Dashboard es el centro de operaciones. Se divide en las siguientes secciones:

### 🏠 Hero / Portada
- Muestra tu progreso global (videos completados)
- Acceso rápido a **Ver Analíticos** (reportes)
- Estadísticas en tiempo real: videos HD disponibles, áreas críticas, videos completados

### 📊 Módulos del Dashboard

| Módulo | Función |
|--------|---------|
| **Feedback Predictivo** | Análisis de tu rendimiento con predicciones |
| **Plan de Estudio Diario** | Sugerencias personalizadas de qué estudiar hoy |
| **Último Video** | Continúa donde lo dejaste |
| **Metas del Mes** | Persistencia, Maestro de Área, Simulacro |
| **Countdown del Examen** | Cuenta regresiva al día del ECOEMS |
| **Noticias ECOEMS** | Actualizaciones oficiales del examen |
| **Sistema de Insignias** | Logros desbloqueados |
| **Retos Semanales** | Desafíos de estudio gamificados |
| **Progreso General** | Gráficas de avance por área |
| **Videos Recomendados** | Sugerencias basadas en tu historial |

### 🎯 Metas del Mes
Tres indicadores automáticos de progreso:
- **Persistencia:** Completa 5 días seguidos de estudio
- **Maestro de Área:** Llega al 100% en al menos un área
- **Simulacro:** Realiza tu primer simulador integral

---

## 3. Buscador de Contenido

**Ubicado en:** Sección superior del Dashboard

### Cómo usar el buscador
1. Escribe el tema a buscar (ej: *"Biología Celular"*, *"Leyes de Newton"*, *"Geometría"*)
2. Los resultados aparecen en tiempo real mostrando:
   - El área al que pertenece
   - El título del video
3. Haz clic en cualquier resultado para ir directamente al video

> [!TIP]
> La búsqueda es **sin registro forzoso**, funciona incluso antes de hacer login para explorar el contenido.

---

## 4. Sistemas de Aprendizaje por Área

**Ruta:** `/area/:areaId`

### Áreas disponibles en el ECOEMS

La plataforma cubre **todas las áreas críticas** del examen:

| Área | Código | Contenido |
|------|--------|-----------|
| Habilidades Verbales | HV | Comprensión lectora, vocabulario |
| Habilidades Matemáticas | HM | Razonamiento lógico-matemático |
| Biología | BIO | Célula, genética, ecosistemas |
| Química | QUI | Átomos, reacciones, materia |
| Física | FIS | Cinemática, fuerzas, energía |
| Matemáticas | MAT | Álgebra, geometría, cálculo |
| Español | ESP | Gramática, redacción, puntuación |
| Historia de México | HIS-M | Porfiriato, Revolución, modernidad |
| Historia Universal | HIS-U | Guerras mundiales, civilizaciones |
| Geografía | GEO | Mapas, población, relieves |
| Formación Cívica | FCE | Democracia, derechos, ética |

### Pantalla de Video

Al entrar a un área verás:
1. **Reproductor de YouTube HD** (autoplay al seleccionar video)
2. **Título y descripción** del tema
3. **Botón Notebook** → abre las notas de Google NotebookLM correspondientes
4. **Material Complementario** (debajo del video)
5. **Videos recomendados** relacionados

### Panel lateral (sidebar)
- **Tu Ruta:** Progreso global (0–90 videos completados)
- **Zona Studio (Pro):** Simuladores por subíndice del área
- **Estructura del Curso:** Lista de todas las áreas y sus videos con marcadores de completados ✅

### Navegar entre videos
- En el sidebar izquierdo, expande cualquier área y haz clic en el video deseado
- Los videos marcados con ✅ verde son los que ya completaste

> [!IMPORTANT]
> Un video se marca como **completado** cuando abres su Notebook de NotebookLM. El progreso se guarda automáticamente.

---

## 5. Material Complementario

**Se muestra debajo del reproductor de video en cada área**

Para cada video, según disponibilidad, encontrarás:

| Tab | Contenido |
|-----|-----------|
| 📼 **Infografía** | Resumen visual del tema |
| 📄 **PDF** | Material imprimible |
| 🎙️ **Podcast** | Audio para escuchar mientras estudias |
| 🃏 **Flashcards** | Tarjetas de repaso interactivas |
| ❓ **Quiz** | Preguntas de opción múltiple del tema |
| 🎮 **Studio** | Simulador de reactivos específico del tema |

---

## 6. CyberAgent IA (AI Tutor)

### ¿Qué es?
El **CyberAgent** es tu tutor personal con inteligencia artificial, disponible flotando en la pantalla cuando estás logueado. Powered by Claude (Anthropic).

### Cómo acceder
- Haz clic en el **botón flotante del cerebro** (🧠) que aparece en la esquina inferior derecha de la pantalla

### Funcionalidades principales

#### 💬 Chat Conversacional
Puedes preguntar cualquier cosa sobre los temas del ECOEMS:
- *"Explícame la meiosis"*
- *"¿Cómo resuelvo ecuaciones de segundo grado?"*
- *"Hazme un resumen de la Revolución Mexicana"*

#### 📋 Acciones Rápidas (Quick Actions)
Botones predefinidos para tareas comunes:
- **Plan de Estudio** — El AI genera un plan personalizado para ti
- **Análisis de Progreso** — Ve qué áreas dominas y cuáles reforzar
- **Quiz Personalizado** — Genera preguntas de práctica
- **Diagnóstico completo** — Auditoría total de tu preparación

#### 🎯 Contenido Interactivo
El AI puede generar directamente en el chat:
- **Quizzes interactivos** (responde dentro del chat)
- **Calculadoras** para problemas matemáticos/físicos
- **Simuladores** de conceptos
- **Ejercicios** prácticos resueltos paso a paso
- **Gráficas** de datos y conceptos
- **Diagramas Mermaid** (flujos, mapas conceptuales)
- **Imágenes educativas** inline con el texto

#### 🔗 Links de Citación
Cuando el AI menciona un tema, genera links automáticos como `[BIO 5.2]` que al hacer clic te llevan directamente al video correspondiente en la plataforma.

#### 📁 Subir archivos
Puedes adjuntar imágenes o documentos para que el AI los analice:
- Foto de un examen con dudas
- Captura de un problema que no entiendes

#### 🎤 Voz (si está disponible)
Botón de micrófono para hacer preguntas hablando en lugar de escribir.

### Sistema de tokens para el AI
| Nivel | Preguntas |
|-------|-----------|
| **Gratis** | Límite diario (se renueva cada 24 horas) |
| **Tokens** | 1 token por pregunta, sin límite diario |
| **Maestro Ilimitado** | Preguntas ilimitadas por $250 MXN/mes |

### Historial de conversaciones
- El AI recuerda tus conversaciones pasadas (memoria de 7 días)
- Puedes ver el historial con el botón de **Historial** en el chat
- El botón de **Nueva conversación** limpia el contexto actual

### Controles del chat

| Botón | Función |
|-------|---------|
| ➕ | Nueva conversación |
| 🗑️ | Borrar historial |
| 🔍 | Buscar en historial |
| ⬛ Minimizar | Ocupa menos espacio en pantalla |
| ⛶ Maximizar | Pantalla completa |
| ✕ | Cerrar el chat |

> [!TIP]
> Puedes copiar cualquier respuesta del AI con el botón **Copiar** que aparece al pasar el cursor sobre un mensaje.

---

## 7. Simulador Pro ECOEMS

**Ruta:** `/simulador-pro`

### ¿Qué es?
Una réplica exacta del examen oficial ECOEMS con:
- **128 reactivos** (igual que el examen real)
- **3 horas** de tiempo límite
- Cronómetro oficial visible

### Cómo iniciar

1. Desde el Dashboard, haz clic en **"SIMULADOR REAL"**
2. Lee las instrucciones (128 reactivos, 3 horas, lugar tranquilo)
3. Haz clic en **"Comenzar Examen"**

### Durante el examen

#### Panel de navegación
- Cuadrícula con los 128 reactivos
- Colores:
  - ⚪ **Blanco/Gris** = Sin responder
  - 🔵 **Azul** = Respondida
  - 🟡 **Amarillo parpadeante** = Marcada para revisión
  - **Borde blanco grande** = Pregunta actual

#### Controles durante el examen

| Botón | Función |
|-------|---------|
| **Anterior / Siguiente** | Navegar entre preguntas |
| **⏸️ Pausar** | Pause el cronómetro, guarda tu progreso |
| **💾 Guardar y salir** | Sale conservando el estado completo |
| **🏁 Finalizar** | Envía el examen y muestra resultados |
| **Marcar para revisión** | Señala preguntas dudosas en amarillo |

#### Si cierras el navegador
La próxima vez que entres al simulador, aparecerá un modal preguntando:
- **"Sí, Continuar"** → Retoma exactamente donde lo dejaste
- **"No, Nuevo"** → Inicia un examen limpio

### Resultados

Al finalizar verás:
1. **Puntaje total:** X / 128
2. **Predicción AI:**
   - Probabilidad de ingreso (ALTA / MEDIA / EN MEJORA)
   - Comparativa con el promedio de usuarios (74/128)
3. **Mapa de desempeño:** Visualización de aciertos (verde) y errores (rojo) en la cuadrícula
4. **Análisis completo:** Cada reactivo con:
   - Tu respuesta (marcada en rojo si es incorrecta)
   - La respuesta correcta (verde)
   - **Explicación Pro** detallada del porqué

### Otros simuladores disponibles

Desde el Dashboard también puedes acceder a:
| Simulador | Descripción |
|-----------|-------------|
| **ECOEMS Completo (PHP)** | Simulador externo completo |
| **Simulador POLI (IPN)** | Versión para Politécnico |
| **Consola Studio** | 630+ reactivos organizados por materia |
| **Studio por materia** | Simuladores específicos por subíndice |

---

## 8. Centro de Certificaciones

**Ruta:** `/certificaciones`

### ¿Qué son?
Diplomas digitales que puedes obtener al completar módulos con excelencia. Son descargables en PDF y compartibles.

### Certificados disponibles

| Certificado | Cómo obtenerlo |
|-------------|----------------|
| 🥇 Simulador Integral ECOEMS 2026 | Completa el simulador con puntaje alto |
| 🥈 Módulo: Pensamiento Matemático | 100% en Matemáticas |
| 🥇 Racha de Estudio: 7 Días | Estudia 7 días consecutivos |
| 🔵 Módulo: Lenguaje y Comunicación | Completar módulo de Español |
| 🥇 Puntaje Perfecto (Biología) | 100% en Biología |
| 👑 Maestro del Simulador Pro | Puntaje máximo en el simulador |

### Cómo ver un certificado
1. Ve a `/certificaciones`
2. Haz clic en cualquier certificado desbloqueado (no grises)
3. Se mostrará el diploma completo con tu nombre y datos
4. Puedes descargarlo en PDF

> [!NOTE]
> Los certificados bloqueados (grises) muestran el requisito al pasar el cursor. Completa el simulador para desbloquearlos.

---

## 9. Dashboard de Reportes

**Ruta:** `/reportes`

### KPIs en tiempo real
4 métricas de un vistazo:
- **Videos vistos** — Total de videos revisados
- **Completados** — Videos que incluyen quiz aprobado
- **Quizzes aprobados** — Cuántos quizzes has pasado
- **Tiempo invertido** — Total de tiempo de estudio

### Gráficas incluidas

| Gráfica | Lo que muestra |
|---------|----------------|
| **Barra por Área** | Porcentaje de avance en cada materia |
| **Radar (Perfil)** | Tu dominio en las 11 áreas simultáneamente |
| **Pastel (Pie)** | Distribución: Completados / Vistos / Pendientes |
| **Áreas a Reforzar** | Las 3 áreas con menor progreso — clic para ir directo al área |

### Cómo interpretar el radar
El diagrama de radar ideal es una figura **grande y uniforme**. Las puntas cortas indican áreas débiles que necesitas reforzar antes del examen.

---

## 10. Sistema de Tokens

**Ruta:** `/tokens`

### Paquetes de tokens

| Paquete | Tokens | Precio | $ por token |
|---------|--------|--------|-------------|
| **Básico** | 20 | $20 MXN | $1.00 |
| **Popular** ⭐ | 60 | $50 MXN | $0.83 |
| **Pro** | 160 | $120 MXN | $0.75 |
| **👑 Ilimitado** | 1,000/mes | $250 MXN/mes | $0.25 |

### ¿Cómo funcionan los tokens?
- **1 pregunta al AI = 1 token**
- Los tokens de paquetes **no expiran** (excepto el Plan Ilimitado, que se renueva mensualmente)
- El Plan Ilimitado otorga 1,000 tokens cada mes de forma automática

### ¿Qué es el acceso gratuito?
- Límite diario de preguntas al AI (se reinicia cada 24 horas)
- Los videos, guías, PDFs, quizzes, flashcards, simuladores y todo el contenido multimedia es **100% gratuito siempre**

### Proceso de pago
1. Selecciona tu paquete y haz clic en "Comprar ahora"
2. Serás redirigido a **Mercado Pago** (pago seguro)
3. Al completar el pago, recibirás confirmación y los tokens se acreditarán automáticamente
4. Si el pago está pendiente, recibirás notificación cuando se confirme

> [!TIP]
> Si tenías una pregunta pendiente cuando te quedaste sin tokens, la plataforma la guarda por 30 minutos. Al comprar tokens, se responde automáticamente.

---

## 11. Progreso y Gamificación

### 🔥 Racha de Estudio (Streak)
- Se incrementa cada día que accedes y estudias
- **Hitos:** Al llegar a 3, 5, 10, 15... días, recibes notificación de felicitación
- Si rompes la racha, se reinicia a 1 y recibes una notificación de alerta

### 🏆 Sistema de Insignias (Badges)
Se desbloquean automáticamente al alcanzar hitos:
- Completar un área
- Aprobar X quizzes
- Mantener racha de días
- Completar el simulador

### 📅 Retos Semanales
Desafíos con fecha límite que aparecen cada semana. Completarlos suma puntos y logros.

### 🔔 Notificaciones Push
Si las activas en tu navegador, recibirás:
- Recordatorios de estudio
- Alertas de racha en riesgo
- Confirmaciones de logros

---

## 12. Funciones Avanzadas

### 📲 Instalar como App (PWA)
La plataforma es una **Progressive Web App**:
1. En Chrome/Edge, aparece un banner "Instalar CyberEdu MX"
2. Al instalarlo, funciona como una app nativa en tu dispositivo
3. Acceso desde el ícono del escritorio, sin abrir el navegador

### 📴 Modo sin conexión
Las páginas ya visitadas se guardan en caché automáticamente para poder acceder sin internet.

### 💬 WhatsApp
Botón flotante de WhatsApp para contacto de soporte directo.

### 📖 Manual Digital ECOEMS
Desde el Dashboard puedes abrir el **Manual Digital ECOEMS**:
- Temario completo desglosado
- Tips estratégicos
- Ejercicios resueltos
- [cyberedumx.com/libro/manual_digital_ECOEMS.html](https://cyberedumx.com/libro/manual_digital_ECOEMS.html)

### 🎓 Curso de Udemy (único recurso de paga)
- **128 preguntas resueltas** con Google NotebookLM
- Explicaciones detalladas potenciadas por IA
- Acceso de por vida en Udemy
- [Ver curso en Udemy](https://www.udemy.com/course/ecoems2026conia/)

### 🔢 Consola Studio (Pro)
Acceso a más de **630 reactivos** organizados por materia y subíndice:
- Desde el Dashboard → Sección "Consola Studio: Por Materia"
- O en cada área → Sidebar → "Zona Studio (Pro)"

### 🗺️ Modalidades
**Ruta:** `/modalidades`
Información sobre las diferentes modalidades del ECOEMS 2026.

### 💡 Sugerencias
**Ruta:** `/sugerencias`
Envía retroalimentación y sugerencias de mejora directamente al equipo.

### 📰 Blog
**Ruta:** `/blog`
Artículos y guías de estudio (acceso público sin login).

---

## 13. Preguntas Frecuentes

**¿Es necesario registrarse?**
Para la mayoría del contenido sí, pero el buscador de temas y el blog son públicos.

**¿Cómo sé que un video quedó marcado como visto?**
Al abrir el Notebook de NotebookLM del video (botón "Notebook"), se marca automáticamente como visto y aparece ✅ en el sidebar.

**¿Los tokens expiran?**
Los paquetes Básico, Popular y Pro **no expiran**. Solo el Plan Ilimitado mensual se renueva.

**¿Puedo pausar el simulador y continuar otro día?**
Sí. Usa **"Guardar y salir"** o **"Pausar"**. La próxima vez que entres, la plataforma detecta el examen en progreso y te pregunta si quieres continuar.

**¿Qué navegador debo usar?**
Chrome o Edge son recomendados para la mejor experiencia (especialmente para la PWA y los diagramas).

**¿Funciona en móvil?**
Sí, la plataforma es completamente **responsive**. Para mejor experiencia, instálala como PWA desde el banner.

**¿El AI Tutor puede ver mi progreso?**
Sí. El CyberAgent tiene acceso a tu historial de videos vistos, quizzes aprobados y progreso por área para darte recomendaciones personalizadas.

**¿Cómo contactar soporte?**
Usa el botón de **WhatsApp** flotante en la esquina de la pantalla.

---

*📅 Manual actualizado: Abril 2026 · CyberEdu MX v3.0*
