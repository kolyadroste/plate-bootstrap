const gulp = require('gulp');
const gulpSass = require('gulp-sass')(require('sass'));
const sass = require('sass');
const rename = require('gulp-rename');
const {glob, globSync, globStream} = require('glob');
const tap = require('gulp-tap'); // Installieren Sie dieses Plugin mit: npm install gulp-tap --save-dev
const fs = require('fs');
const path = require('path');

// Task zum Kompilieren von SCSS zu CSS
gulp.task('scss-to-css', function(done) {
    // Pfad zur Vorlage
    const templatePath = './Scss/template.scss';
    // Glob-Muster für SCSS-Komponentendateien
    const componentsPattern = './Scss/{components,plugins}/**/*.scss';
    // Pfad zum Ausgabeverzeichnis
    const outputPath = './Css';
    const basePath = path.resolve(__dirname) + '/Scss';
    const contribPath = path.resolve(__dirname) + '/Contrib';
    console.log(basePath);

    // Lese den Inhalt der Vorlage
    const templateContent = fs.readFileSync(templatePath, 'utf8');

    // Verwende das glob-Paket, um SCSS-Komponentendateien basierend auf dem glob-Muster zu lesen
    glob(componentsPattern, function(err) {
        if (err) {
            console.error(err);
            done();
            return;
        }
    }).then(
        function (files) {
            files.forEach(file => {
                // Lese den Inhalt der Komponentendatei
                const componentContent = fs.readFileSync(file, 'utf8');
                // Füge die Vorlage und die Komponente zusammen
                const combinedContent = templateContent + '\n' + componentContent;
                // Kompiliere den kombinierten Inhalt zu CSS

                const absoluteFilePath = path.resolve(file);
                console.log('Absoluter Pfad der aktuellen Datei:', absoluteFilePath);
                console.log('basePath', basePath);
                const result = sass.compileString( combinedContent, {
                    style:"compressed",
                    loadPaths: [basePath,contribPath]
                });
                // Schreibe die resultierende CSS-Datei in das Ausgabeverzeichnis
                fs.writeFileSync(path.join(outputPath, path.basename(file, '.scss') + '.css'), result.css);
            });
            done(); // gulp is done
        }
    );
});

// Weitere Tasks...
// Task zum Überwachen von Änderungen an SCSS-Dateien
gulp.task('watch', function() {
    gulp.watch('path/to/scss/**/*.scss', gulp.series('scss-to-css'));
});

// Standard-Task
gulp.task('default', gulp.series('scss-to-css'));
