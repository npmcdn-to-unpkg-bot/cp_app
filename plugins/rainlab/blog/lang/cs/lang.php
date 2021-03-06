<?php

return [
    'plugin' => [
        'name' => 'Blog',
        'description' => 'Robustní blogová platforma.'
    ],
    'blog' => [
        'menu_label' => 'Blog',
        'menu_description' => 'Správa blogových příspěvků',
        'posts' => 'Příspěvky',
        'create_post' => 'Příspěvek',
        'categories' => 'Kategorie',
        'create_category' => 'Kategorie příspěvků',
        'tab' => 'Blog',
        'access_posts' => 'Správa blogových příspěvků',
        'access_categories' => 'Správa blogových kategorií',
        'access_other_posts' => 'Správa příspěvků ostatních uživatelů',
        'access_import_export' => 'Možnost importu a exportu příspěvků',
        'delete_confirm' => 'Jste si jistí?',
        'chart_published' => 'Publikované',
        'chart_drafts' => 'Návrhy',
        'chart_total' => 'Celkem'
    ],
    'posts' => [
        'list_title' => 'Správa blogových příspěvků',
        'category' => 'Kategorie',
        'hide_published' => 'Schovat publikované',
        'new_post' => 'Nový příspěvek'
    ],
    'post' => [
        'title' => 'Název',
        'title_placeholder' => 'Zadejte název',
        'content' => 'Obsah',
        'content_html' => 'HTML obsah',
        'slug' => 'URL příspěvku',
        'slug_placeholder' => 'zadejte-url-prispevku',
        'categories' => 'Kategorie',
        'author_email' => 'E-mail autora',
        'created' => 'Vytvořeno',
        'created_date' => 'Vytvořeno dne',
        'updated' => 'Upraveno',
        'updated_date' => 'Upraveno dne',
        'published' => 'Publikováno',
        'published_date' => 'Publikováno dne',
        'published_validation' => 'Zadejte prosím datum publikace příspěvku',
        'tab_edit' => 'Upravit',
        'tab_categories' => 'Kategorie',
        'categories_comment' => 'Vyberte kategorie do kterých příspěvek patří',
        'categories_placeholder' => 'Nejsou zde žádné kategorie, nejdříve musíte nějaké vytvořit!',
        'tab_manage' => 'Nastavení',
        'published_on' => 'Publikováno dne',
        'excerpt' => 'Perex příspěvku',
        'summary' => 'Shrnutí',
        'featured_images' => 'Obrázky',
        'delete_confirm' => 'Opravdu chcete smazat tento příspěvek?',
        'close_confirm' => 'Příspěvek není uložený.',
        'return_to_posts' => 'Zpět na seznam příspěvků'
    ],
    'categories' => [
        'list_title' => 'Správa blogových kategorií',
        'new_category' => 'Nová kategorie',
        'uncategorized' => 'Nezařazeno'
    ],
    'category' => [
        'name' => 'Název',
        'name_placeholder' => 'Název nové kategorie',
        'slug' => 'URL kategorie',
        'slug_placeholder' => 'zadejte-url-kategorie',
        'posts' => 'Počet příspěvků',
        'delete_confirm' => 'Opravdu chcete smazat tuto kategorii?',
        'return_to_categories' => 'Zpět na seznam blogových kategorií'
    ],
    'settings' => [
        'category_title' => 'Seznam kategorií',
        'category_description' => 'Zobrazí na stránce seznam blogových kategorií.',
        'category_slug' => 'URL kategorie',
        'category_slug_description' => "Najde blogovou kategorii s tímto URL. Používá se pro zobrazení aktivní kategorie.",
        'category_display_empty' => 'Zobrazit prázdné kategorie',
        'category_display_empty_description' => 'Zobrazit kategorie bez blogových příspěvků.',
        'category_page' => 'Stránka kategorií',
        'category_page_description' => 'Vyberte stránku která slouží k zobrazení všech kategorií (nebo detailu kategorie).',
        'post_title' => 'Příspěvek',
        'post_description' => 'Zobrazí blogový příspěvek na stránce.',
        'post_slug' => 'URL příspěvku',
        'post_slug_description' => "Najde příspěvek dle zadané URL.",
        'post_category' => 'Stránka kategorie',
        'post_category_description' => 'Vyberte stránku která slouží k zobrazení všech kategorií (nebo detailu kategorie).',
        'posts_title' => 'Seznam příspěvků',
        'posts_description' => 'Zobrazí na stránce seznam posledních příspěvků na stránkách.',
        'posts_pagination' => 'Číslo stránky',
        'posts_pagination_description' => 'Číslo stránky určující na které stránce se uživatel nachází. Použito pro stránkování.',
        'posts_filter' => 'Filtr kategorií',
        'posts_filter_description' => 'Zadejte URL kategorie, nebo URL parametr pro filtrování příspěvků. Nechte prázdné pro zobrazení všech příspěvků.',
        'posts_per_page' => 'Příspěvků na stránku',
        'posts_per_page_validation' => 'Špatný formát počtu příspěvků na stránku, musí být zadáno jako číslo',
        'posts_no_posts' => 'Hláška prázdné stránky',
        'posts_no_posts_description' => 'Zpráva se zobrazí pokud se nepovede najít žádné články.',
        'posts_order' => 'Řazení článků',
        'posts_order_decription' => 'Nastaví řazení článků ve výpisu',
        'posts_category' => 'Stránka kategorií',
        'posts_category_description' => 'Vyberte stránku která slouží k zobrazení všech kategorií (nebo detailu kategorie).',
        'posts_post' => 'Stránka příspěvků',
        'posts_post_description' => 'Vyberte stránku která slouží k zobrazení článků (nebo detailu článku).'
    ]
];
