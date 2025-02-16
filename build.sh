#!/bin/bash
# Instalar dependencias necesarias
sudo apt update
sudo apt install -y python3 python3-pip

# Instalar yt-dlp
pip install yt-dlp

# Verificar la instalación
yt-dlp --version
