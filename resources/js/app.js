import "./bootstrap";
import "bootstrap";
import TomSelect from "tom-select";

new TomSelect("select[multiple]", {
    plugins: {
        remove_button: {
            title: "Supprimer",
        },
    },
});
