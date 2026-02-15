import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/assets/vendor/bootstrap/css/bootstrap.min.css",
                "resources/assets/vendor/bootstrap-icons/bootstrap-icons.css",
                "resources/assets/vendor/boxicons/css/boxicons.min.css",
                "resources/assets/css/style.css",
                "resources/assets/vendor/bootstrap/js/bootstrap.bundle.min.js",
                "resources/assets/js/main.js",
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ["**/storage/framework/views/**"],
        },
    },
});
