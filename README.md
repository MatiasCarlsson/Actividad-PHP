# Actividad PHP - Configuración de Prettier

## 🎨 Formateo Automático con Prettier

Este proyecto está configurado para usar Prettier con soporte para PHP.

### 📦 Instalación

```bash
npm install
```

### 🛠️ Comandos Disponibles

```bash
# Formatear todos los archivos
npm run format

# Solo verificar el formato (sin cambios)
npm run format:check

# Formatear solo archivos PHP
npm run format:php
```

### ⚙️ Configuración

- **`.prettierrc.json`**: Configuración de Prettier
- **`.prettierignore`**: Archivos a ignorar
- **`.vscode/settings.json`**: Configuración para VS Code

### 🔧 Configuración Manual en VS Code

1. **Instala la extensión** "Prettier - Code formatter"
2. **El formateo automático** ya está configurado para activarse al guardar
3. **Para formatear manualmente**: `Ctrl+Shift+P` → "Format Document"

### 📋 Reglas de Formateo

- **Indentación**: 4 espacios
- **Comillas**: Simples para strings
- **Punto y coma**: Siempre
- **Ancho de línea**: 100 caracteres
- **PHP Version**: 8.0+

### 🚀 VS Code Extensions Recomendadas

- `esbenp.prettier-vscode` - Prettier formatter
- `bmewburn.vscode-intelephense-client` - PHP IntelliSense
- `bradlc.vscode-tailwindcss` - Tailwind CSS support

### 📝 Uso

El formateo se ejecuta automáticamente al guardar archivos. También puedes ejecutar:

```bash
# Formatear archivo específico
npx prettier --write ruta/al/archivo.php

# Verificar formato de un archivo
npx prettier --check ruta/al/archivo.php
```