if [ ! -d /app/node_modules ]; then
    echo "[INFO] Node modules folder not present - installing dependencies"
    cd /app
    pnpm install
    echo "[INFO] Dependencies installed"
else
    echo "[INFO] Node modules folder already present, nothing to do."
fi
