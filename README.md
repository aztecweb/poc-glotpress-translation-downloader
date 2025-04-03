# Environment with GlotPress and WP Translation Downloader

## Setup


Install glotpress packages
```
docker compose run --rm -u $(id -u):$(id -g) composer-glotpress install --ignore-platform-reqs
```

Install glotpress traduttore packages
```
docker compose run --rm -u $(id -u):$(id -g) composer-glotpress-traduttore install --ignore-platform-reqs
```

Setting up services for glotpress
```
docker compose up -d server-glotpress
```

Access http://localhost/glotpress/projects/ with login and password admin admin if you need.

Install example project packages
```
docker compose run --rm -u $(id -u):$(id -g) composer-project install --ignore-platform-reqs
``

Setting up services for project
```
docker compose up -d server-project
```

Access http://localhost:8080 with login and password admin admin if you need.

## Other commands

WP-CLI
```
docker compose run --rm -u $(id -u):$(id -g) wp-[glotpress or project] [command]
```

Generate .pot file for tests plugins
```
docker compose run --rm -u $(id -u):$(id -g) wp-project i18n make-pot ./wp-content/plugins/plugin-test-translation ./wp-content/plugins/plugin-test-translation/languages/plugin-test-translation.pot --domain=plugin-test-translation
```
```
docker compose run --rm -u $(id -u):$(id -g) wp-project i18n make-pot ./wp-content/plugins/project-plugin-test-translation ./wp-content/plugins/project-plugin-test-translation/languages/project-plugin-test-translation.pot --domain=project-plugin-test-translation
```

Generate zip of translations (you need to change some translate from panel before)
```
docker compose run --rm -u $(id -u):$(id -g) wp-glotpress cron event run traduttore.generate_zip
```

## Examples
This project has two examples to get translations from glotpress:

- aztecweb/plugin-test-translation: is setting up like a private package (when we have a package/version)
- aztecweb/project-plugin-test-translation: is setting up like a project (when we have a project/package/version)