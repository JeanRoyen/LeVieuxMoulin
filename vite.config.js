import {defineConfig} from "vite";
import {globSync} from "glob";
import * as fs from "fs";

export default defineConfig({
  base: "/wp-content/themes/LeVieuxMoulin/public/",
  assetsInclude: [
  '**/*.ttf'],
  plugins: [
    {
      name: "bundle.js",
      buildStart() {
        // Récupère tous les fichiers JS dans le répertoire spécifié
        const files = globSync("./wp-content/themes/LeVieuxMoulin/resources/js/app/**/*.js");

        // Fusionner tous les fichiers JS en un seul
        const combinedJS = files.map(file => fs.readFileSync(file, "utf-8")).join("\n");

        // Crée le fichier combiné dans le dossier de sortie
        fs.writeFileSync("./wp-content/themes/LeVieuxMoulin/resources/js/main.js", combinedJS);
      },
    },
  ],
  build: {
    manifest: true,
    rollupOptions: {
      input: {
        js: "./wp-content/themes/LeVieuxMoulin/resources/js/main.js",
        css: "./wp-content/themes/LeVieuxMoulin/resources/css/styles.scss",
      },
      output: {
        dir: "./wp-content/themes/LeVieuxMoulin/public",
      },
    },
    assetsInlineLimit: 0,
    target: ["es2015"], // Rendre compatible le JAVASCRIPT
  },
});
