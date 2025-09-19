<?php
// === GUIA RAPIDA PARA HACER PUSH CON GIT ===

echo "0) Comprobar qué remoto está configurado:";
echo "";
echo "   git remote -v";
// -> Muestra la dirección del repositorio remoto (ej. GitHub).
//    Si no hay nada, significa que aún no vinculaste tu repo local con GitHub.

echo "   git remote add origin https://github.com/usuario/repositorio.git";
// -> Agrega un remoto llamado 'origin' con la URL de tu repositorio en GitHub.
//    'origin' es solo un nombre (alias) que apunta al repositorio remoto principal.

echo "";
echo "1) Verifica tu rama actual:";
echo "   git branch";
// -> El asterisco (*) indica la rama activa.
//    Si ves '* master', entonces tu rama es master.
//    Si ves '* main', entonces tu rama es main.

echo "";
echo "2) Agregar y confirmar los cambios:";
echo "   git add .";
// -> Prepara TODOS los archivos modificados para el commit.

echo '   git commit -m "Mensaje del commit"';
// -> Crea un commit (una “foto” de los cambios).
//    El mensaje debe describir qué cambiaste.

echo "";
echo "3) Hacer push inicial:";
echo "   git push -u origin master";
// -> Sube tu rama 'master' al remoto 'origin'.
// -> El parámetro -u (upstream) conecta tu rama local con la remota.
//    Luego podrás usar solo 'git push' sin especificar nada.

echo "";
echo "4) Si tu rama es 'main':";
echo "   git push -u origin main";

echo "";
echo "=== SIGNIFICADO ===";
echo "-u : Vincula la rama local con la remota para futuros 'push' y 'pull'.";
echo "origin : Nombre del remoto (por defecto apunta a tu repo en GitHub).";
echo "master/main : Nombre de la rama que estás subiendo.";

echo "";
echo "=== ERRORES FRECUENTES ===";
echo "1) error: src refspec main does not match any";
echo "   -> Estás intentando subir 'main' pero tu rama local se llama distinto.";
echo "   -> Solución: usa 'git branch' para ver el nombre correcto.";

echo "";
echo "2) rejected (non-fast-forward)";
echo "   -> Tu remoto tiene cambios que tu local no tiene.";
echo "   -> Solución: primero trae los cambios con:";
echo "      git pull --rebase origin <rama>";
echo "      luego haz 'git push'.";

echo "";
echo "3) fatal: No commits yet";
echo "   -> Aún no hiciste un commit.";
echo "   -> Solución:";
echo "      git add .";
echo '      git commit -m "Primer commit"';
echo "      git push -u origin master";
?>
