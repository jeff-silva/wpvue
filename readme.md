# Wordpress Plugin using Vue3 + Vite

## Dev mode
Run the command above, then edit using hot reload at http://localhost:5173/
```bash
docker-compose up
```
Each element created in `/elements` folder turns into a [HTML Custom Element](https://developer.mozilla.org/en-US/docs/Web/Web_Components/Using_custom_elements) with the same file name.
You can, for example, create a `app-test.vue` file then insert the component `<app-test></app-test>` in any place of Wordpress.

## Build
Run the command above to generate the build, then you can use the elements.
```bash
docker-compose -f docker-compose-build.yml up
```

This repository can be used to make WP theme too, just rename plugin-wpvue.php to functions.php, then create the necessary files to a theme like style.css, index.php, etc.