# Artisan Outline

Outline is an admin dashboard for Laravel.

## Installation

```
composer require artisan/outline
```

Initialize the project.

```
php artisan outline:install
```

Add the `OutlineServiceProvider` to your `app.php`.


## Stream of Consciousness Note-taking

Overridable CSS Variables

```
:root {
    --primary:      #1e8cf9;
    --chart-fill:   var(--primary);
    --chart-stroke: var(--primary);
}
```

## Todo
- Find a way to hook up Outline styles to PostCSS.
- Use Phoenix-esque style in node modules to hook outline helpers.

```
"dependencies": {
    "outline": "file:vendor/outline/..."
}
```

- Create the index page into a layout.
- Figure out how to implement BladeX here.
