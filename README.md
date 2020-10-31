# Develop

Webbplats: https://malinsvensson.se/miun/webbutveckling3/projekt/ <br/>
Administration: https://malinsvensson.se/miun/webbutveckling3/projekt/src/admin.php

## Src
Detta repo innehåller allt det som användes till att bygga en grund. 
I SRC-mappen finns filerna för: 
- index.html = Startsidan
- /sass: innehåller alla sass-komponenter som med Gulp transpileras till css och hamnar i: 
- /css: main.css, de översatta sass-filerna och designen till hela webbplatsen. 
- /js: main1, main2 och main3: JavaScriptfilerna 
- /images: alla bilder som ska finnas på webbplatsen
- admin, login, logout, webSite, workSite och coursesSite: Alla php-filer som skapar en administrationssida.

## Pub
I PUB-mappen finns filerna som förts över genom Gulp och således har kompilerats, minifierats och transpilerats. 

## Gulp
Löst i roten av detta repo finns förutom README-filen, filerna för NPM-paketen samt för Gulp.

Gulpfile innehåller all den kod som krävs för att skapa den automatiska processen. 
I filen finns tillexempel: 
- För JS: Minifieras med "gulp-uglufy-es". 
- För CSS: Minfieras med "gulp-clean-css".
- För EcmaScript: Översätts till JavaScript med "gulp-babel".
- För bilder: Optimeras med "gulp-imagemin". 
- För SASS: Omvanlas till css med "node-sass". 
