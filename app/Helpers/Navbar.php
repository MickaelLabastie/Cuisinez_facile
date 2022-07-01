<?php

    use App\Models\RecipeCategory;

    function getNavbar() {
        return RecipeCategory::all();
    }

?>